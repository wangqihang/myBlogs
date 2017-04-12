<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {
    public function __construct(){
			parent::__construct();
			$this->checklogin();
		}
		public function checklogin(){
			if (!$_SESSION['admin']) {
				$this->error('请先登录！',U('Login/login'));
			}else{
				$admin = session('admin');
				$this->assign('admin',$admin);
				//用户的个人信息
				$data = D('admin');
		    	$where['user'] = $_SESSION['admin'];
		    	$result = $data->where($where)->find();
		    	session('ad_id',$result['id']);
		    	session('ad_name',$result['name']);
		    	$this->assign('result',$result);
			}
			
		}
		
}