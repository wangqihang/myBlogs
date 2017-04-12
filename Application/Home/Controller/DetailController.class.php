<?php 
	namespace Home\Controller;
	use Think\Controller;
	class DetailController extends Controller{
		public function index(){
			if(I('articleid')==null){
				$this->error('该页面不存在，请输入正确的地址！');
			}
			//查询出一条文章文章的信息
			$art = D('article');
			$articleid['id'] = I('articleid');
			//文章表和用户表的查询
			$re = $art->join('think_admin on think_admin.id=think_article.admin_id')
	    	->where("think_article.id=".$articleid['id'])
	    	->field('think_admin.name,think_admin.imgpath,think_article.title,think_article.content,think_article.type,think_article.time,think_article.count,think_article.id')
	    	->find();
			$this->assign('re',$re);
	    	$this->assign('session',$_SESSION['ad_name']);
			//-----------------------读取评论下的回复--------------------------------------
			$answer = D('answer');
			$data1 = $answer
			->join('think_message on think_answer.reply_id=think_message.id')
			->join('think_admin on think_answer.admin_id=think_admin.id')
			->where("think_message.article_id=".$articleid['id'])
			->order('think_answer.time desc')
			->field('think_admin.name,think_answer.admin_id,think_answer.answer_id,think_answer.reply_id,think_answer.answer_content,think_answer.time')
			->select();
			//----------------------读取评论内容-----------------------------------------
			$message = D('message');
			$data2 = $message->join('think_admin on think_admin.id = think_message.admin_id')
			->where("think_message.article_id=".$articleid['id'])
			->order('reply_time desc')
			->field('think_admin.name,think_message.content,think_message.reply_time,think_message.id,think_message.admin_id')
			->select();
			//---------------------读取回复中，所回复的那个用户----------------------------
			$data3 = $answer
			->join('think_message on think_answer.reply_id=think_message.id')
			->join('think_admin on think_answer.answer_id=think_admin.id')
			->where("think_message.article_id=".$articleid['id'])
			->order('think_answer.time desc')
			->field('think_admin.name,think_answer.answer_id,think_answer.time')
			->select();
			$this->assign('data1',$data1);
			$this->assign('data2',$data2);
			$this->assign('data3',$data3);
			$this->display();

		}
		//评论
		public function comment(){
			$where['article_id'] = I('art_id');
			$where['content'] = I('content');
			$where['admin_id'] = $_SESSION['ad_id'];
			$where['reply_time'] = time();
			$message = D('message');
			if($message->create($where)){
				if($message->add()){
					$article = D('article');
					$artdata['id'] = $where['article_id'];
					$count = $article->field('count')->where($artdata)->find();
					$count1['count'] = $count['count']+1;
					if($article->where($artdata)->save($count1)){
						$this->success('评论成功!',U('Home/Detail/index/articleid/'.$where['article_id']),1);
					}else{
						$this->error($article->getError());
					}
				}else{
					$this->error('评论失败!');
				}
			}else{
				$this->error($message->getError());
			}
		}
		//回复
		function answer(){
			$answer = D('answer');
			$data['answer_id'] = $_POST['admin'];
			$data['reply_id'] = $_POST['reply'];
			$data['admin_id'] = $_SESSION['ad_id'];
			$data['answer_content'] = $_POST['content'];
			$data['time'] = time();
			if($answer->create($data)){
				if($answer->add()){
					$this->ajaxReturn(1);
				}else{
					$this->ajaxReturn(0);
				}
			}else{
				$this->ajaxReturn(3);
			}
		}
	}
?>