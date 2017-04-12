<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>博客管理</title>
	<link rel="stylesheet" href="/Thinkblog/Public/admin/css/index.css">
	<link rel="icon" type="image/x-icon" href="/Thinkblog/Public/logo/favicon.jpg">
    <script type="text/javascript" charset="utf-8" src="/Thinkblog/Public/editor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Thinkblog/Public/editor/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="/Thinkblog/Public/editor/lang/zh-cn/zh-cn.js"></script>
</head>
<body>
<div id="all">
	<div id="header">
		<span>个人博客</span>
		<div class="header-right"></div>
	</div>
	<div id="blog">
		<div class="img">
			<img src="/Thinkblog/Public/admin/Uploads/<?php echo ($result['imgpath']); ?>" alt="头像">
			<div class="info">
				<?php echo ($admin); ?> &nbsp;&nbsp;&nbsp;昵称：<?php echo ($result['name']); ?> &nbsp;&nbsp;&nbsp;性别：<?php echo ($result['sex']); ?>&nbsp;&nbsp;&nbsp;年龄：<?php echo ($result['age']); ?> &nbsp;&nbsp;&nbsp;<?php echo ($result['tel']); ?>
			</div>
			<div><a id="logout" href="/Thinkblog/index.php/Admin/Login/logout" onclick="if (confirm('确定要退出吗？')) return true; else return false;">退出</a></div>
			<div class="myblog"><a href="">博客首页</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/Thinkblog/index.php/Admin/Index/info">修改信息</a></div>
		</div>
		<div id="manage">
			<ul>
				<li><a href="/Thinkblog/index.php/Admin/Index/index">文章管理</a></li>
				<li><a href="/Thinkblog/index.php/Admin/Index/com_admin">评论管理</a></li>
				<li><a href="/Thinkblog/index.php/Admin/Index/file">文件管理</a></li>
				<li><a href="javascript:void(0)">&#8594;写文章</a></li>
			</ul>
		</div>
		<div class="admin-aritcle">
			<span>文章的类型：</span>
			<select id="type">
				<option value="php">php</option>
				<option value="web前端">web前端</option>
				<option value="综合">综合</option>
				<option value="其他">其他</option>
			</select>
			文章标题：<input id="title" name="title" type="text">
		</div>
		<div id="write">
			<div class="edite">
    			文章内容：<script id="editor" type="text/plain" style="width:960px;height:500px;"></script>
			</div>
			<div class="addimg">
				
			</div>
			<input id="send" name="send" type="button" value="发表文章">
		</div>
	</div>
</div>
	<script src="/Thinkblog/Public/admin/js/jquery-main.js"></script>
	<script type="text/javascript" charset="utf-8" src="/Thinkblog/Public/admin/js/write.js"></script>
</body>
</html>