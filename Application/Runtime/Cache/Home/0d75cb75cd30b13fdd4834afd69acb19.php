<?php if (!defined('THINK_PATH')) exit();?><html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文章详情</title>
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
			 	<li>文章类型：<?php echo ($re['type']); ?></li>
			 	<li>评论：<?php echo ($re['count']); ?>条</li>
			 </ul>
		</div>
		<div class="article">
			<div class="art-title">
				<div class="nav"><span><a href="/Thinkblog/index.php/Home/Index/index">博客园子</a> &middot; <a href="/Thinkblog/index.php/Home/../Admin/Index/index">博客管理</a></span></div>
				<h3><?php echo ($re['title']); ?></h3>
				<span>标签：<a href="/Thinkblog/index.php/Home/Index/index/type/<?php echo ($re['type']); ?>"><?php echo ($re['type']); ?></a></span>
				<div class="art-info">
					<span><?php echo (date('Y-m-d H:i:s',$re["time"])); ?></span>
					<span>评论：(<?php echo ($re['count']); ?>)</span>
				</div>
			</div>
			<div class="content">
				<?php echo ($re['content']); ?>
			</div><hr style="border:1px dotted blue;"/>
			<div id="comment">
				<h4>查看评论</h4><hr style="width:96%;"/>
				<?php if(is_array($data2)): $i = 0; $__LIST__ = $data2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><div class="look">
						<span id="admin" style="color:blue;"><?php echo ($vo2["name"]); ?><!-- <?php echo ($vo2["admin_id"]); ?> --></span>
						<span style="float:right;font-size:14px;">发表于 &nbsp;&nbsp;&nbsp;<?php echo (date('Y-m-d H:i:s',$vo2["reply_time"])); ?>&nbsp;&nbsp;
						<?php if($session != null): ?><a date="<?php echo ($vo2["id"]); ?>" class="reply" href="#com_content"> 回复</a> <input type="hidden" value="<?php echo ($vo2["admin_id"]); ?>"><!-- <?php echo ($vo2["admin_id"]); ?> --></span>
							<?php else: ?>
								<a class="reply" href="#notlogin" onclick="alert('你还没有登录!');"><span class="com">回复</span></a></span><?php endif; ?>
						<div class="com_ans_con">
							<p><?php echo ($vo2["content"]); ?></p>
						</div>
							<?php if(is_array($data1)): $j = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($j % 2 );++$j; if($data2[$i-1]['id'] == $data1[$j-1]['reply_id']): ?><div class="answer">
										<span class="user"><?php echo ($vo1["name"]); ?><!-- <?php echo ($vo1["admin_id"]); ?> --></span> 回复： <?php echo ($data3[$j-1]['name']); ?><!-- <?php echo ($vo1["answer_id"]); ?> -->
										<span class="answer-time">&nbsp;&nbsp; <?php echo (date('Y-m-d H:i:s',$vo1["time"])); ?>&nbsp;&nbsp;
										<?php if($session != null): ?><a date="<?php echo ($vo2["id"]); ?>" class="reply" href="#com_content">回复</a><input type="hidden" value="<?php echo ($vo1["admin_id"]); ?>"><!-- <?php echo ($vo1["admin_id"]); ?> --></span>
											<?php else: ?>
												<a class="reply" href="#notlogin" onclick="alert('你还没有登录!');"><span class="com">回复</span></a></span><?php endif; ?>
										</span>
										<div class="com_ans_con">
											<p><?php echo ($vo1["answer_content"]); ?></p>
										</div>
									</div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
					</div><hr style="width:96%;"/><?php endforeach; endif; else: echo "" ;endif; ?>
				<h4>发表评论</h4><hr/>
				<div class="form">
				<?php if($session != null): ?>用户名：<span id="auther"><?php echo ($session); ?></span><span id="huifu"></span><br/>	
						<span id="pinglun">评论:</span>
						<form id="for" action="/Thinkblog/index.php/Home/Detail/comment/art_id/<?php echo ($re["id"]); ?>">
							<textarea name="content" id="com_content"  cols="120" rows="10"></textarea>
							<input id="sub" type="submit" value="提交">
							<button id='but'>回复</button>
						</form>
					<?php else: ?>
						<span id="notlogin" style="margin:50px;">您还没有<a href="/Thinkblog/index.php/Home/../Admin/Login/login">[登录]</a>或<a href="">[注册]</a></span><?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</body>
	<script src="/Thinkblog/Public/admin/js/jquery-main.js"></script>
	<script src="/Thinkblog/Public/blog/js/index.js"></script>
</html>