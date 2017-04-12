<?php if (!defined('THINK_PATH')) exit();?><html lang="en">
<head>
	<meta charset="UTF-8">
	<title>资源下载</title>
	<link rel="stylesheet" href="/Thinkblog/Public/blog/css/index.css">
	<link rel="icon" type="image/x-icon" href="/Thinkblog/Public/logo/favicon.jpg">
</head>
<body>
	<div id="head">
		<div id="user">
				<?php if($flag == 1): ?><span><a href="/Thinkblog/index.php/Home/Index/index">博客首页</a>&middot;<a href="/Thinkblog/index.php/Home/../Admin/Index/index"><?php echo ($name); ?></a>&middot;<a href="/Thinkblog/index.php/Home/Index/homepage/user/<?php echo ($session); ?>">我的博客</a>&middot;<a href="/Thinkblog/index.php/Home/../Admin/Login/logout" onclick="if (confirm('确定要退出吗？')) return true; else return false;">退出</a>
					<?php else: ?>
						<span><a href="/Thinkblog/index.php/Home/Index/index">博客首页</a>&middot;<a href="/Thinkblog/index.php/Home/../Admin/Login/login">登录</a>&middot;<a href="/Thinkblog/index.php/Home/../Admin/Login/register">注册</a></span><?php endif; ?>
			</span>
		</div>
		<div class="logo">
			<img src="/Thinkblog/Public/blog/img/logo1.gif" alt="图标">
		</div>
		<div class="nav"></div>
		<div class="download">
			<table>
				<table class="th">
					<th>文件名称</th>
					<th>文件上传者</th>
					<th>文件大小</th>
					<th>文件文件类型</th>
					<th>文件上传时间</th>
					<th>下载数量</th>
					<th>下载</th>
				</table>
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
						<table class="download_cont">
							<tr>
								<td><div class="a"><?php echo ($vo["file_name"]); ?></div></td>
								<td><?php echo ($vo["name"]); ?></td>
								<td><?php echo ($vo["size"]); ?>字节</td>
								<td><?php echo ($vo["file_type"]); ?></td>
								<td><?php echo (date('Y-m-d H:i:s',$vo["time"])); ?></td>
								<td><?php echo ($vo["count"]); ?></td>
								<td><a href="/Thinkblog/index.php/Home/Index/download?address=<?php echo ($vo["file_name"]); ?>&id=<?php echo ($vo["id"]); ?>">download</a></td>
							</tr>
						</table>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</table>
			<?php if($count >= 10): ?><div class="page"><span>共 <?php echo ($count); ?> 条</span><?php echo ($page); ?></div>
				<?php else: ?>
					<div class="page"><span>共 <?php echo ($count); ?> 条</span>共 1 页</div><?php endif; ?>
		</div>
	</div>
</body>
</html>