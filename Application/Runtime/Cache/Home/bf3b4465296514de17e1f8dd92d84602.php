<?php if (!defined('THINK_PATH')) exit();?><html lang="en">
<head>
	<meta charset="UTF-8">
	<title>搜索结果</title>
	<link rel="stylesheet" href="/qihang/Thinkblog/Public/blog/css/index.css">
	<link rel="icon" type="image/x-icon" href="/qihang/Thinkblog/Public/logo/favicon.jpg">
</head>
<body>
	<div id="head">
		<div id="user">
				<?php if($flag == 1): ?><span><a href="/qihang/Thinkblog/index.php/Home/../Admin/Index/index"><?php echo ($name); ?></a>&middot;<a href="/qihang/Thinkblog/index.php/Home/Index/homepage/user/<?php echo ($session); ?>">我的博客</a>&middot;<a href="/qihang/Thinkblog/index.php/Home/../Admin/Login/logout" onclick="if (confirm('确定要退出吗？')) return true; else return false;">退出</a>
					<?php else: ?>
						<span><a href="/qihang/Thinkblog/index.php/Home/../Admin/Login/login">登录</a>&middot;<a href="/qihang/Thinkblog/index.php/Home/../Admin/Login/register">注册</a></span><?php endif; ?>
			</span>
		</div>
		<div class="logo">
			<img src="/qihang/Thinkblog/Public/blog/img/logo1.gif" alt="图标">
		</div>
		<div class="nav"></div>
		<div id="main">
			<div class="article">
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="detail">
						<a href="/qihang/Thinkblog/index.php/Home/Detail/index/articleid/<?php echo ($vo["id"]); ?>" class="title"title="点击查看详情"><?php echo ($vo["title"]); ?></a><br/>
						<span style="float:left;margin-top:10px;">内容：</span>
						<div class="content">
							<?php echo ($vo["content"]); ?>
						</div>
						<div class="info">
							<span><a href="/qihang/Thinkblog/index.php/Home/Index/homepage/user/<?php echo ($vo["admin_id"]); ?>"><?php echo ($vo["name"]); ?></a>&nbsp;&nbsp;&nbsp;</span>发表于&nbsp;<?php echo (date('Y-m-d H:i:s',$vo["time"])); ?> &nbsp;&nbsp;&nbsp;评论(<?php echo ($vo["count"]); ?>)
						</div>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
				<?php if($count >= 10): ?><div class="page"><?php echo ($page); ?></div>
					<?php else: ?>
						<div class="page">共 1 页</div><?php endif; ?>
			</div>
		</div>
	</div>
</body>
</html>