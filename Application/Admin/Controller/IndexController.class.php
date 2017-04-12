<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends BaseController {
	//登录后台主页面
    public function index(){
    	$typename = M('article');
    	$where['admin_id'] = $_SESSION['ad_id'];
		$a = $typename->where($where)->select();
		$count = $typename->where($where)->count();
		if($count!=0){
			if ($count>=5) {
				$page = new \Think\Page($count,5);
				$this->assign('num','1');		//1表示还没有发表文章
			} else if($count<5 && $count>0){
				$page = new \Think\Page($count,$count);
				$this->assign('num','1');
			}
			$page->setConfig('prev','上一页');
			$page->setConfig('next','下一页');
			$show = $page->show();
			// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			$list = $typename->limit($page->firstRow.','.$page->listRows)->where($where)->order('time desc')->select();
			$this->assign('list',$list);
			$this->assign('page',$show);
			$this->assign('count',$count);
		}else{
			$this->assign('num','0');
			$this->assign('count',$count);
		}
		$this->display();
    }
    //删除文章操作
    public function del(){
		$typeid = I('articleid');
		$del = D('article');
        $where['id'] = $typeid;
        $data = $del->field('think_article.admin_id')->where($where)->find();
        if($data['admin_id']!=$_SESSION['ad_id']){
            $this->error('该文章不存在！',U('index'),1);
        }else{
            //mysql_query("BEGIN"); //开始一个事务
            $answer = D('message')->join('think_answer ON think_answer.reply_id=think_message.id')->field('think_answer.id')->where('article_id='.$typeid)->select();
            $count = count($answer);
            for ($i=0; $i < $count; $i++) { 
                D('answer')->where('id='.$answer[$i]['id'])->delete();
            }
            D('message')->where('article_id='.$typeid)->delete();
            if($del->delete($typeid)){
                //mysql_query("COMMIT");//事务提交
                $this->success('删除成功',U('index'),2);
            }else{
                //mysql_query("ROLLBACK");//回滚
                $this->error('删除失败！');
            }
        }
    }
    //显示写文章界面
    public function write(){
    	$this->display();
    }
    //ajax发表文章操作
    public function write_handle(){
    	$where['type'] = $_POST['typedata'];
    	$where['title'] = $_POST['titledata'];
    	$where['content'] = $_POST['con'];
    	$where['admin_id'] = $_SESSION['ad_id'];
    	$where['time'] = time();
        $where['count'] = '0';
    	$article = D('article');
		if($article->add($where)){
    		$this->ajaxReturn('1');
		}else{
			$this->ajaxReturn('0');
		}
    }
    //编辑文章
    public function edite(){
    	$where['id'] = I('articleid');
    	$where['admin_id'] = $_SESSION['ad_id'];
    	$article = D('article');
    	$result = $article->where($where)->find();
    	if (empty($result)) {
    		$this->error('文章不存在！',U('index'),1);
    	} else {
    		$this->assign('article',$result);
    	}
    	$this->display();
    }
    public function edite_send(){
    	$article = D('article');
    	$where['id'] = I('get.articleid');
        $data['type'] = $_POST['type'];
    	$data['title'] = I('title');
    	$data['content'] = $_POST['content'];
    	if($article->create($data)){
		
        $article->where($where)->save();
	    $this->success('修改成功！',U('index'),1);
    	}else{
    		$this->error($article->getError());
    	}
    }
    //评论管理
    public function com_admin(){
        $article = D('article');
        $where['think_article.admin_id'] = $_SESSION['ad_id'];
        $comment = $article
        ->join('think_message on think_message.article_id=think_article.id')
        ->field('think_article.title,think_message.article_id,think_article.count,think_message.id,think_message.content')
        ->where($where)
        ->select();
        $count = $article
        ->join('think_message on think_message.article_id=think_article.id')
        ->where($where)
        ->count();

        $page = new \Think\Page($count,10);
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $show = $page->show();
        $list = $article
         ->join('think_message on think_message.article_id=think_article.id')
        ->limit($page->firstRow.','.$page->listRows)
        ->where($where)->order('time desc')->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display();
    }
    //删除评论-------------------需要删除评论下的所有回复---------------------
    public function delete(){
        $com_id = I('com_id');
        $delete = D('message');
        if($delete->delete($com_id)){
            //删除回复
            $where['reply_id'] = I('com_id');
            $d = D('answer')->where($where)->delete();
            $article = D('article');
            $artdata['id'] = I('articleid');
            $count = $article->field('count')->where($artdata)->find();
            $count1['count'] = $count['count']-1;
            $article->where($artdata)->save($count1);
            
            $this->success('删除成功',U('com_admin'),1);
        }else{
            $this->error('删除失败！');
        }
        
    }
    //信息页面
    function info(){
        $this->display();
    }
    //修改信息方法
    function change_info(){
        if(I('info_name')!=null){$update['name'] = I('info_name');}
        if(I('info_tel')!=null){$update['tel'] = I('info_tel');}
        if(I('info_age')!=null){$update['age'] = I('info_age');}
        if(I('info_sex')!=null){$update['sex'] = I('info_sex');}
        $where['id'] = $_SESSION['ad_id'];

        if($_FILES['img']['name']!=null){
            $upload = new \Think\Upload();      // 实例化上传类 
            $upload->maxSize   =     3145728;       // 设置附件上传大小    
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');        // 设置附件上传类型
            $upload->autoSub   = false;
            $upload->rootPath  = './';
            $upload->savePath  =      './Public/admin/Uploads/';       // 设置附件上传目录  
            $info   =   $upload->upload();      // 上传单个文件    
            if(!$info) {        // 上传错误提示错误信息
                $this->error($upload->getError());
            }
           foreach($info as $file){
               $FilePath = $file['savePath'].$file['savename'];
           }
        }
        if ($FilePath!=null) {
            $update['imgpath'] = $FilePath;
        }
        $admin = D('admin');
        if ($update==null) {
            $this->success('你没有修改任何信息！',U('index'),1);
        } else {
            $admin->where($where)->save($update);
            $this->success('修改成功！',U('index'),1);
        }
    }
    function upload(){
        
        $targetFolder = '/Thinkblog/Public/uploads';
        $verifyToken = md5('unique_salt' . $_POST['timestamp']);

        if (!empty($_FILES) && $_POST['token'] == $verifyToken) {
            $tempFile = $_FILES['Filedata']['tmp_name'];
            dump($tempFile);
            $targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
            $s = explode(".",$_FILES['Filedata']['name']);
            $after = array_pop($s);
            $filename = time().'.'.$after;
            $targetFile = rtrim($targetPath,'/') . '/' .$filename;
            
            $fileTypes = array('jpg','jpeg','gif','png','txt','zip','doc','docx','xls','xlsx','ppt','pptx','rar','chm');
            $fileParts = pathinfo($_FILES['Filedata']['name']);
            
            if (in_array($fileParts['extension'],$fileTypes)) {
                move_uploaded_file($tempFile,$targetFile);
                echo '1';
            } else {
                echo 'Invalid file type.';
            }
            $files = D('files');
            $where['upload_id'] = $_SESSION['ad_id'];
            $where['file_name'] = $filename;
            $where['size'] = $_FILES['Filedata']['size'];
            $where['file_type'] = $fileParts['extension'];
            $where['time'] = time();
            $where['count'] = 0;
            $files->add($where);
        }
    }
    //-------------------文件上传的管理页面------------------
    function file(){
        if(isset($_SESSION['admin'])){
            $this->assign('flag','1');
            $where['user'] = $_SESSION['admin'];
            $user = D('admin')->where($where)->find();
            $this->assign('name',$user['name']);
        }else{
            $this->assign('flag','0');
        }
        $where['upload_id'] = $_SESSION['ad_id'];
        $all = D('files');
        $count = $all->where($where)->count();
        $page = new \Think\Page($count,10);
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $show = $page->show();
        $list = $all
        ->limit($page->firstRow.','.$page->listRows)
        ->where($where)
        ->order('time desc')->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->assign('count',$count);
        $this->assign('session',$_SESSION['ad_id']);
        $this->display();
    }
    function file_del(){
        if (I('id')!=$_SESSION['ad_id']) {
            $this->error('该文件不存在');
        } else {
            $where['id'] = I('address');
            $file = D('files');
            $name = $_GET['name'];
            $filepath="Public/uploads/".$name;
            if ($file->where($where)->delete()) {
                unlink($filepath);
                $this->success('删除成功',U('file'),1);
            } else {
               $this->error('删除失败！');
            }
        }
        
    }
}