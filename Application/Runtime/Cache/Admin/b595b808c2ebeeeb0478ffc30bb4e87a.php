<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>博客管理</title>
	<link rel="icon" type="image/x-icon" href="/Thinkblog/Public/logo/favicon.jpg">
	<script src="/Thinkblog/Public/admin/js/jquery-main.js" type="text/javascript"></script>
	<script src="/Thinkblog/Public/uploadify/jquery.uploadify.min.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="/Thinkblog/Public/uploadify/uploadify.css">
	<link rel="stylesheet" href="/Thinkblog/Public/admin/css/index.css">
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
				<li class="art_admin"><a href="javascript:void(0)">文章管理</a></li>
				<li><a href="/Thinkblog/index.php/Admin/Index/com_admin">评论管理</a></li>
				<li><a href="/Thinkblog/index.php/Admin/Index/file">文件管理</a></li>
				<li><a href="/Thinkblog/index.php/Admin/Index/write">&#8594;写文章</a></li>
			</ul>
		</div>
		<div class="admin-aritcle">
			<span>文章的类型：</span>
			<select id="type" name="type">
				<option value="1">全部</option>
				<option value="2">php</option>
				<option value="3">web前端</option>
				<option value="4">综合</option>
				<option value="5">其他</option>
			</select>
			<div id="upload">
				<button class="upload_but">上传文件</button>
			</div>
		</div>
		<div id="article">
			<table>
				<th class="title">标题</th>
				<th>评论</th>
				<th class="operate">操作</th>
				<?php if($num == 1): if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								<td class="title"><a id="art-title" class="style" href="/Thinkblog/index.php/Admin/../Home/Detail/index/articleid/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a>&nbsp;(<?php echo (date('Y-m-d H:i:s',$vo["time"])); ?>)</td>
								<td><?php echo ($vo["count"]); ?></td>
								<td class="operate"><a class="style" onclick="if (confirm('确定要删除这篇文章吗？')) return true; else return false;" href="/Thinkblog/index.php/Admin/Index/del/articleid/<?php echo ($vo["id"]); ?>" style="margin-left:33px;">删除</a></td>
								<td class="operate"><a class="style" href="/Thinkblog/index.php/Admin/Index/edite/articleid/<?php echo ($vo["id"]); ?>">编辑</a></td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						<tr>
					        <td colspan="10" style="text-align:center;line-height:60px;">
					            <div style="float:left;">一共<?php echo ($count); ?>条</div><?php echo ($page); ?>
					        </td>
					    </tr>
					<?php else: ?>
						<tr><td colspan="10" style="text-align:center;line-height:60px;background:white;color:red;">你还没有发表文章！</td></tr>
						<tr>
					        <td colspan="10" style="text-align:center;line-height:60px;">
					            <div style="float:left;">一共<?php echo ($count); ?>条</div><?php echo ($page); ?>
					        </td>
					    </tr><?php endif; ?>
			</table>
		</div>
	</div>
</div>
<div class="full"></div>
<div id="upload_form">
		<div id="queue">文件上传，支持多文件,允许上传的格式(jpg,jpeg,gif,png,txt,zip,doc,docx,xls,xlsx,ppt,pptx,rar,chm)</div>
		<input id="file_upload" name="file_upload" type="file" multiple="true">
		<button class="upload_but upload_back">返回</button>	
	</div>
</body>
<script>
	$(".upload_but").click(function(){
		$(".full").css("display","block");
		$("#upload_form").slideDown();
	});
	$(".upload_back").click(function(){
		$(".full").css("display","none");
		$("#upload_form").css("display","none");
	});
		<?php $timestamp = time();?>
			$(function() {
				$('#file_upload').uploadify({
					'formData'     : {
						'timestamp' : '<?php echo $timestamp;?>',
						'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
					},
					'swf'      : '../../../Public/uploadify/uploadify.swf',
					'uploader' : '../../../Admin/Index/upload'
				});
			});
</script>
</html>