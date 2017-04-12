<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文件管理</title>
	<link rel="stylesheet" href="/Thinkblog/Public/admin/css/index.css">
	<link rel="icon" type="image/x-icon" href="/Thinkblog/Public/logo/favicon.jpg">
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
			<div class="myblog"><a href="/Thinkblog/index.php/Admin/../Home/Index/index">博客首页</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)">修改信息</a></div>
		</div>
		<div id="manage">
			<ul>
				<li><a href="/Thinkblog/index.php/Admin/Index/index">文章管理</a></li>
				<li><a href="/Thinkblog/index.php/Admin/Index/com_admin">评论管理</a></li>
				<li class="art_admin"><a href="javascript:void(0)">文件管理</a></li>
				<li><a href="/Thinkblog/index.php/Admin/Index/write">&#8594;写文章</a></li>
			</ul>
		</div>
		<div id="file_admin">
			<div class="download">
			<table>
				<table class="th">
					<th>文件名称</th>
					<th>文件大小</th>
					<th>文件文件类型</th>
					<th>文件上传时间</th>
					<th>下载数量</th>
					<th>操作</th>
				</table>
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
						<table class="download_cont">
							<tr>
								<td><div class="a"><?php echo ($vo["file_name"]); ?></div></td>
								<td><?php echo ($vo["size"]); ?></td>
								<td><?php echo ($vo["file_type"]); ?></td>
								<td><?php echo (date('Y-m-d H:i:s',$vo["time"])); ?></td>
								<td><?php echo ($vo["count"]); ?></td>
								<td><a href="/Thinkblog/index.php/Admin/Index/file_del?address=<?php echo ($vo["id"]); ?>&id=<?php echo ($vo["upload_id"]); ?>&name=<?php echo ($vo["file_name"]); ?>">删除</a></td>
							</tr>
						</table>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</table>
			<?php if($count >= 10): ?><div class="page"><span>共 <?php echo ($count); ?> 条</span><?php echo ($page); ?></div>
				<?php else: ?>
					<div class="page"><span>共 <?php echo ($count); ?> 条</span>共 1 页</div><?php endif; ?>
		</div>
		</div>
	</div>
</div>
</body>
</html>