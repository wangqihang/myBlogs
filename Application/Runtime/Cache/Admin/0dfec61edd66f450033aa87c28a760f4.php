<?php if (!defined('THINK_PATH')) exit();?><html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人博客</title>
	<link rel="stylesheet" href="/Thinkblog/Public/admin/css/login.css">
	<link rel="icon" type="image/x-icon" href="/Thinkblog/Public/logo/favicon.jpg">
</head>
<body>
	<div id="header">
		<div id="title">
			<a href="/Thinkblog/index.php/Admin/../Home/Index/index"><img src="/Thinkblog/Public/logo/logo.png" alt="logo" title="点击到博客主页"></a>
			<h4>分享生活 &nbsp;&nbsp;,&nbsp;&nbsp; 留住感动</h4>
		</div>
	</div>
	<div id="content">
		<div id="login">
			<div class="login-title">
				<h4>用户登陆</h4>
			</div>
			<form id="form" action="/Thinkblog/index.php/Admin/Login/login"  method="post">
				<table cellpadding="10px">
					<tr>
						<td>用户名：</td><td><input id="user" type="text"name="user" placeholder="请输入账号"required="required"maxlength="24"><br/></td>
					</tr>
					<tr>
						<td>密&nbsp;码：</td><td><input id="password" type="password" name="password" placeholder="请输入密码(6~16位)" required="required"maxlength="16"minlength="6"><br/></td>
					</tr>
					<tr>
						<td>验证码：</td><td><input type="text" id="code" name="code" maxlength="4" placeholder="请输入验证码"required="required"></td>
					</tr>
				</table>
				<div class="capt">
					<img id="imgcode" name="code" src="/Thinkblog/index.php/Admin/Login/code/" onclick=this.src="/Thinkblog/index.php/Admin/Login/code/"+Math.random() title="点击切换验证码" style="cursor:pointer" alt="验证码">
				</div>
				<input id="submit" name="sub" type="button" value="登录">
				<div class="register"><a class="reg" href="/Thinkblog/index.php/Admin/Login/forget">忘记密码</a> | <a href="/Thinkblog/index.php/Admin/Login/register">注册账号</a></div>
			</form>
		</div>
	</div>
	<script src="/Thinkblog/Public/admin/js/jquery-main.js"></script>
	<script src="/Thinkblog/Public/admin/js/admin.js"></script>
</body>
</html>