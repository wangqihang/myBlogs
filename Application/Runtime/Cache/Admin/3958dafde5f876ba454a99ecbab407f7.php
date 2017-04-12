<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>博客管理</title>
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
			<div class="myblog"><a href="/Thinkblog/index.php/Admin/../Home/Index/index">博客首页</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/Thinkblog/index.php/Admin/Index/info">修改信息</a></div>
		</div>
		<div id="manage">
			<ul>
				<li><a href="/Thinkblog/index.php/Admin/Index/index">文章管理</a></li>
				<li class="art_admin"><a href="javascript:void(0)">评论管理</a></li>
				<li><a href="/Thinkblog/index.php/Admin/Index/file">文件管理</a></li>
				<li><a href="/Thinkblog/index.php/Admin/Index/write">&#8594;写文章</a></li>
			</ul>
		</div>
		<div id="com_admin">
			<table spacing="none">
				<th>标题</th>
				<th>评论数</th>
				<th>作者</th>
				<th>时间</th>
				<th class="operate">操作</th>
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="top">
						<td class="operate"><a class="com_title" href="/Thinkblog/index.php/Admin/../Home/Detail/index/articleid/<?php echo ($vo["article_id"]); ?>"><?php echo ($vo["title"]); ?></a></td>
						<td class="operate"><?php echo ($vo["count"]); ?></td>
						<td class="operate"><?php echo ($result['name']); ?></td>
						<td class="operate"><?php echo (date('Y-m-d H:i:s',$vo["time"])); ?></td>
						<td class="operate"><a href="/Thinkblog/index.php/Admin/Index/delete/com_id/<?php echo ($vo["id"]); ?>/articleid/<?php echo ($vo["article_id"]); ?>">删除</a></td>
					</tr>
					<tr>
						<td colspan="5">
							<div class="com_content">
								<?php echo ($vo["content"]); ?>
							</div>
						</td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				<tr>
					<td colspan="5">
						<?php if($page != null): echo ($page); ?>
							<?php elseif($list == null): ?><span style="color:red;">你还没有被评论!</span>
							<?php else: ?><span class="current">1</span><?php endif; ?>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
</body>
</html>