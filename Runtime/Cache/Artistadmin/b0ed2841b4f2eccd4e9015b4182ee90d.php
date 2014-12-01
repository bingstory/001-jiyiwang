<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>增加用户</title>
      <link rel="stylesheet" href="/001-jiyiwang/Public/Admin/css/common.css">
<style>
.add-role{
	display:inline-block;
	width:100px;
	height:28px;
	line-height:26px;
	text-align:center;
	border:1px solid ;
	border-radius:7px;
	margin-left:20px;
	cursor:pointer;
	padding: 2px 5px;
	}
</style>
<script type="text/javascript" src="/001-jiyiwang/Public/Static/jquery-1.7.2.min.js"></script>
<script>
$(function(){
	$('.add-role').click(function(){
		var obj = $(this).parents('tr').clone();
		obj.find('.add-role').remove();
		$('#last').before(obj);
		});
	});
</script>
</head>

<body> 
<div class="right-nav">
      <a class="home" href="" title=""></a><div class="con"><span style="color:#000;">首页</span> > 密码管理</div>
</div>

<div class="right-title">
      设置密码
</div>

<form action="<?php echo U(MODULE_NAME.'/User/doSetPassword');?>" method="post">
<table class="table">
 
<tr>
<td align="center">用户账号：</td>
 
<td><?php echo ($user["username"]); ?></td>
</tr>
<tr>
<td align="center">原密码：</td>
<td><input type="password" name="oldpwd" /></td>
</tr>
<tr>
<td align="center">新密码：</td>
<td><input type="password" name="password" /></td>
</tr>
<tr id="last">
<td colspan="2" align="center">
<input type="hidden" name="id" value="<?php echo ($user["id"]); ?>"/>
<input type="submit" value="保存"/>
</td>
</tr>
</table>
</form>
</body>
</html>