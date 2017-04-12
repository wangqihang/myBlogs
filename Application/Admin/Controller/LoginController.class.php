<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login(){
    	if(isset($_SESSION['admin'])){
    		$this->success('您已经登录！',U('Index/index'),1);
    	}else{
    		$this->display();
    	}
    }
    //显示验证码
    public function code(){
			$config = array(
	    			'fontSize'=>'15',
	    			'length'=>'4',
	    			'imageH'=>'30',
	    			'imageW'=>'120',
	    			'useNoise'=>false,
	    			);
    		$verify = new \Think\Verify($config);
    		$verify->entry();
		}
    public function checklogin(){
    	$user = I('user');
    	$password = I('password');
    	$code = I('code');
    	if ($user==null || $password==null) {
    		$this->ajaxReturn('0');//0代表账号或者密码为空
    	}
    	$code = I('code');
    	if($code == null){
    		$this->ajaxReturn('1');//1代表验证码为空
    	}
    	$verify = new \Think\Verify();
		if(!$verify->check($code)){
			$this->ajaxReturn('2');//2代表验证码错误
		}

		$data1['user'] = $user;
		
		if (!$admin = D('admin')->where($data1)->find()) {
			$this->ajaxReturn('3');//3代表账户不存在
		}
		$data2['password'] = md5($password);
		if(!$admin = D('admin')->where($data2)->find()){
			$this->ajaxReturn('4');//4代表密码错误
		}
		//$this->success('登陆成功!',U('Index/index'),1);
		
		session('admin',$user);
    }
    public function logout(){
    	session_destroy();
		$this->success('退出成功',U('Login/login'),2);
    }
    //忘记密码页面
    public function forget(){
        $this->display();
    }
    //忘记密码的表单操作
    public function forget_check(){
        $where['user'] = I('user');
        $tel=I('tel');
        $admin = D('admin');
        $data['password'] = md5(I('newone'));
        $data1['newtwo'] = md5(I('newtwo'));
        if($data['password']!==$data1['newtwo']){
            $this->error('两次密码不一致!');
        }else{
            if (!$admin->where($where)->find()) {
                $this->error('该用户不存在!');
            } else {
                $re = $admin->where($where)->find();
                if ($re['tel'] != $tel){
                    $this->error('手机号不正确!');
                } else {
                    $admin->where($where)->save($data);
                    $this->success('修改成功,请登录！',U('login'),1);
                    
                }
            }
        }
    }
    //注册页面
    function register(){
        $this->display();
    }
    //注册提交表单操作
    function register_check(){
        $data['user'] = I('user');
        $data['name'] = I('username');
        $data['tel'] = I('tel');
        $data['sex'] = I('sex');
        $data['age'] = I('age');
        $data['imgpath']='57b161596ac25.jpg';
        $data['password'] = md5(I('newone'));
        $data1['newtwo'] = md5(I('newtwo'));
        $admin = D('admin');
        if($data['password']!==$data1['newtwo']){
            $this->error('两次密码不一致!');
        }else{
            $user['user'] = $data['user'];
            $re1 = $admin->where($user)->field('think_admin.user')->find();
            if($re1['user']==$data['user']){
                $this->error('该用户已经注册!');
            }else{
                $name['name'] = $data['name'];
                if($admin->where($name)->find()){
                    $this->error('该昵称已经存在!');
                }else{
                    $tel['tel'] = $data['tel'];
                    if($admin->where($tel)->find()){
                      $this->error('改手机号已经被注册!');  
                    }else{
                        if($admin->create($data)){
                            if($admin->add()){
                                $this->success('注册成功！请登录',U('login'),1);
                            }
                        }else{
                            $this->error($admin->getError());  
                        }
                    }
                }
            }
        }
    }
}