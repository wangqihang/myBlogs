<?php if (!defined('THINK_PATH')) exit();?><html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" type="image/x-icon" href="/Thinkblog/Public/logo/favicon.jpg">
	<link rel="stylesheet" href="/Thinkblog/Public/admin/css/for_reg.css">
	<title>注册</title>
</head>
<body>
<div id="all">
	<div id="head">
		<img src="/Thinkblog/Public/blog/img/logo1.gif" alt="logo">
	</div>
	<div id="nav">
		<ul>
			<li><a class="login" href="/Thinkblog/index.php/Admin/Login/Login/login">登录</a></li>
			<li><a href="/Thinkblog/index.php/Admin/Login/forget">忘记密码</a></li>
			<li><a class="new" href="javascript:void(0)">注册</a></li>
		</ul>
	</div>
	<div id="main">
		<form action="/Thinkblog/index.php/Admin/Login/register_check" method="post">
			<table cellspacing="15px">
				<tr>
					<td>用 &nbsp;户&nbsp; 名：</td><td><input name="user" type="text" required="required" minlength="3" maxlength='20'placeholder="请输入3~20个字符"></td>
				</tr>
				<tr>
					<td>用 户 昵 称：</td><td><input name="username" type="text" required="required" minlength="3" maxlength='20'placeholder="请输入3~20个字符"></td>
				</tr>
				<tr>
					<td>性别：</td>
					<td>
						<input type="radio" name="sex" id="x" required="required" value="男"><label for="x">男</label>
						<input type="radio" name="sex" id="y" required="required" value="女"><label for="y">女</label>
					</td>
				</tr>
				<tr>
					<td>手 &nbsp;机&nbsp; 号：</td><td><input name="tel" type="tel" required="required" pattern="^[1][3578][0-9]{9}$"placeholder="请输入手机号"></td>
				</tr>
				<tr>
					<td>年龄：</td>
					<td><input name="age" type="number" min="0" max="150" required="required" placeholder="0~150"></td>
				</tr>
				<tr>
					<td>请输入密码：</td><td><input name="newone" type="password" required="required" minlength="6"maxlength="16" placeholder="请输入6~16位密码"></td>
				</tr>
				<tr>
					<td>再次输入新密码：</td><td><input name="newtwo" required="required" type="password"minlength="6"maxlength="16" placeholder="请再次输入6~16位密码"></td>
				</tr>
			</table>
			<input id="submit" type="submit" value="提交">
		</form>
	</div>
</div>
</body>
</html>