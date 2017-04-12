<?php if (!defined('THINK_PATH')) exit();?><html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人主页</title>
	<link rel="stylesheet" href="/Thinkblog/Public/blog/css/detail.css">
	<link rel="icon" type="image/x-icon" href="/Thinkblog/Public/logo/favicon.jpg">
</head>
<body>
	<div id="head">
		<a href=""><?php echo ($re['name']); ?>的博客</a>
	</div>
	<div id="main">
		<div class="info">
			 <ul><span>个人资料</span></ul>
			 <div class="tou">
			 	<div class="touimg"><img src="/Thinkblog/Public/admin/Uploads/<?php echo ($re['imgpath']); ?>" alt="头像"></div>
			 	<span><?php echo ($re['name']); ?></span>
			 </div>
			 <ul>
			 	<li>评论：<?php echo ($com_count); ?>条</li>
			 	<li>文章总数：<?php echo ($count); ?>篇</li>
			 </ul>
		</div>
		<div id="work">
			<div id="home_nav">
				<span><a href="/Thinkblog/index.php/Home/Index/index">博客园子</a> &middot; <a href="/Thinkblog/index.php/Home/../Admin/Index/index">博客管理</a></span>
			</div>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="home_article">
					<a class="home_title" href="/Thinkblog/index.php/Home/Detail/index/articleid/<?php echo ($vo["id"]); ?>" title="点击查看详情"><?php echo ($vo["title"]); ?></a><br/>
					<span style="float:left;margin-top:10px;">内容：</span>
					<div class="home_content">
						<?php echo ($vo["content"]); ?>
					</div>
					<div class="home_info">
						<span><?php echo ($vo["name"]); ?>&nbsp;&nbsp;&nbsp;</span>发表于&nbsp;<?php echo (date('Y-m-d H:i:s',$vo["time"])); ?> &nbsp;&nbsp;&nbsp;评论(<?php echo ($vo["count"]); ?>)
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
			 <?php if($count >= 10): ?><div class="page"><?php echo ($page); ?></div>
				<?php else: ?>
					<div class="page">共 1 页</div><?php endif; ?>
		</div>
	</div>
</body>
	<script src="/Thinkblog/Public/admin/js/jquery-main.js"></script>
	<script src="/Thinkblog/Public/blog/js/index.js"></script>
</html>