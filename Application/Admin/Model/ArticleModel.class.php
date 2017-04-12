<?php 
	namespace Admin\Model;
	use Think\Model;
	class ArticleModel extends Model{
		protected $_validate = array(
			array('title','require','文章标题不能为空！'), //默认情况下用正则进行验证
			//array('content','require','文章内容不能为空！'), //默认情况下用正则进行验证
			);
	}
 ?>