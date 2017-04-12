<?php 
	namespace Admin\Model;
	use Think\Model;
	class LoginModel extends Model{
		protected $_validate = array(
			array('user','require','用户名不能为空！'),
			
			);
	}
 ?>