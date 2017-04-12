<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //传到视图一个变量，用于判断用户是否登录
    	if(isset($_SESSION['admin'])){
    		$this->assign('flag','1');
    		$where['user'] = $_SESSION['admin'];
    		$user = D('admin')->where($where)->find();
    		$this->assign('name',$user['name']);
    	}else{
    		$this->assign('flag','0');
    	}

    	$all = D('article');
    	//如果传的参数不为空，就按参数查询出结果，如果参数为空则为全部数据
    	if(I('type')!=null){
    		$condition['type'] = I('type');
    		$this->assign('type',I('type'));
    	}
    	$count = $all->where($condition)->count();
    	$page = new \Think\Page($count,10);
    	$page->setConfig('prev','上一页');
		$page->setConfig('next','下一页');
		$show = $page->show();
		$list = $all->join('think_admin on think_article.admin_id=think_admin.id')
        ->limit($page->firstRow.','.$page->listRows)
        ->field('think_article.id,think_article.title,think_article.content,think_article.time,think_article.count,think_admin.name,think_article.admin_id')
        ->where($condition)->order('time desc')->select();
		$this->assign('list',$list);
		$this->assign('page',$show);
        $this->assign('count',$count);
        $this->assign('session',$_SESSION['ad_id']);
    	$this->display();
    }
    public function homepage(){
        $admin = D('admin');
        $where1['id'] = I('user');
        $re = $admin->where($where1)->find();
        if ($re==null) {
            $this->error('该用户不存在!');        
        } else {
            $article = D('article');
            $where['admin_id'] = $where1['id'];
            $count = $article->where($where)->count();
            $page = new \Think\Page($count,10);
            $page->setConfig('prev','上一页');
            $page->setConfig('next','下一页');
            $show = $page->show();
            $list = $article->join('think_admin on think_article.admin_id=think_admin.id')
            ->limit($page->firstRow.','.$page->listRows)
            ->field('think_article.id,think_article.title,think_article.content,think_article.time,think_article.count,think_admin.name,think_article.admin_id')
            ->where($where)->order('time desc')->select();
            
            $num = $article->where($where)->field('think_article.count')->select();
            $a = 0;
            foreach ($num as $key => $value) {
                $a = $value['count']+$a;
            }
            $this->assign('com_count',$a);
            $this->assign('list',$list);
            $this->assign('page',$show);
            $this->assign('count',$count);
            $this->assign('re',$re);
        }
        
        $this->display();
    }
    //------------------------搜索------------------------
    function search(){

        if(isset($_SESSION['admin'])){
            $this->assign('flag','1');
            $where['user'] = $_SESSION['admin'];
            $user = D('admin')->where($where)->find();
            $this->assign('name',$user['name']);
        }else{
            $this->assign('flag','0');
        }

        $all = D('article');
        $a=I('condition');
        $where['title']=array('like',"%{$a}%");
        $where['content']=array('like',"%{$a}%");
        $where['_logic']='or';
        $count = $all->where($where)->count();
        if($count<=10){
            $page = new \Think\Page($count,$count-1);
        }else{
            $page = new \Think\Page($count,10);
        }
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $show = $page->show();
        $list = $all->join('think_admin on think_article.admin_id=think_admin.id')
        ->limit($page->firstRow.','.$page->listRows)
        ->field('think_article.id,think_article.title,think_article.content,think_article.time,think_article.count,think_admin.name,think_article.admin_id')
        ->where($where)->order('time desc')->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->assign('count',$count);
        $this->assign('session',$_SESSION['ad_id']);
        $this->display('index');
    }
    function resource(){
        if(isset($_SESSION['admin'])){
            $this->assign('flag','1');
            $where['user'] = $_SESSION['admin'];
            $user = D('admin')->where($where)->find();
            $this->assign('name',$user['name']);
        }else{
            $this->assign('flag','0');
        }
        $all = D('files');
        $count = $all->count();
        $page = new \Think\Page($count,10);
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $show = $page->show();
        $list = $all->join('think_admin on think_files.upload_id=think_admin.id')
        ->limit($page->firstRow.','.$page->listRows)
        ->field('think_admin.name,think_files.id,think_files.file_name,think_files.size,think_files.file_type,think_files.time,think_files.count')
        ->order('time desc')->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->assign('count',$count);
        $this->assign('session',$_SESSION['ad_id']);
        $this->display();
    }
    function download(){
        $name=I('address');
        $file="Public/uploads/".$name;
        if(is_file($file)) {
            header("Content-Type: application/force-download");
            header("Content-type: application/octet-stream");
            header("Content-Disposition:attachment; filename=".basename($file));
            readfile($file);
            $id['id'] = I('id');
            D('files')->where($id)->setInc('count');
            echo "<script>location.reload();</script>";
        }else{
            echo "文件不存在！";
            exit;
        }
    }
}