<?php 
	namespace Home\Model;
	use Think\Model;
	class MessageModel extends Model{
		protected $_validate = array(
			array('content','require','评论的内容不能为空！'), //默认情况下用正则进行验证
			);
	}
 ?>