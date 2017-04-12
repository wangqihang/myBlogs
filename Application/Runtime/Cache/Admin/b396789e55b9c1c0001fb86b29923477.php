<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>博客管理</title>
	<link rel="stylesheet" href="/qihang/Thinkblog/Public/admin/css/index.css">
	<link rel="icon" type="image/x-icon" href="/qihang/Thinkblog/Public/logo/favicon.jpg">
</head>
<body>
<div id="all">
	<div id="header">
		<span>个人博客</span>
		<div class="header-right"></div>
	</div>
	<div id="blog">
		<div class="img">
			<img src="/qihang/Thinkblog/Public/admin/Uploads/<?php echo ($result['imgpath']); ?>" alt="头像">
			<div class="info">
				<?php echo ($admin); ?> &nbsp;&nbsp;&nbsp;昵称：<?php echo ($result['name']); ?> &nbsp;&nbsp;&nbsp;性别：<?php echo ($result['sex']); ?>&nbsp;&nbsp;&nbsp;年龄：<?php echo ($result['age']); ?> &nbsp;&nbsp;&nbsp;<?php echo ($result['tel']); ?>
			</div>
			<div><a id="logout" href="/qihang/Thinkblog/index.php/Admin/Login/logout" onclick="if (confirm('确定要退出吗？')) return true; else return false;">退出</a></div>
			<div class="myblog"><a href="/qihang/Thinkblog/index.php/Admin/../Home/Index/index">博客首页</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)">修改信息</a></div>
		</div>
		<div id="manage">
			<ul>
				<li><a href="/qihang/Thinkblog/index.php/Admin/Index/index">文章管理</a></li>
				<li><a href="/qihang/Thinkblog/index.php/Admin/Index/com_admin">评论管理</a></li>
				<li><a href="/qihang/Thinkblog/index.php/Admin/Index/file">文件管理</a></li>
				<li><a href="/qihang/Thinkblog/index.php/Admin/Index/write">&#8594;写文章</a></li>
			</ul>
		</div>
		<div id="change">
			<form action="/qihang/Thinkblog/index.php/Admin/Index/change_info" method="post" enctype="multipart/form-data">
				<table cellspacing="15px">
					<tr>
						<td>昵称：</td>
						<td><input name="info_name" type="text" maxlength='20'placeholder="最大字数为20"></td>
					</tr>
					<tr>
						<td>性别：</td>
						<td>
							<input type="radio" name="info_sex" id="x" value="男"><label for="x">男</label>
							<input type="radio" name="info_sex" id="y" value="女"><label for="y">女</label>
						</td>
					</tr>
					<tr>
						<td>年龄：</td>
						<td><input name="info_age" type="number" min="0" max="150" placeholder="0~150"></td>
					</tr>
					<tr>
						<td>手机号：</td>
						<td><input name="info_tel" type="tel" pattern="^[1][3578][0-9]{9}$"></td>
					</tr>
					<tr>
						<td>选择头像：</td>
						<td><input name="img" type="file"></td>
					</tr>
				</table>
				<div class="info_submit">
					<input type="submit" class="info_button" value="提交">
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>