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
  $('#submit_user').click(function(){
  	var pwd = $('input[name=password]').val();
	var confirmpwd = $('input[name=confirmpwd]').val();
	if($('input[name=username]').val() == ''){
		alert('请填写用户名！');
		return false;
	}
	if( pwd == ''){
		alert('请填写密码！');
		return false;
	}
	if(confirmpwd == ''){
		alert('请填写确认密码！');
		return false;
	}
	if(pwd != confirmpwd){
		alert('密码和确定密码不一致');
		return false;
	}
  });
	
});
</script>
</head>

<body> 
<div class="right-nav">
      <a class="home" href="" title=""></a><div class="con"><span style="color:#33ccff;">首页</span> > 用户管理</div>
</div>

<div class="right-title">
      <?php echo ($pos); ?>添加
</div>

<form action="<?php echo U(MODULE_NAME.'/User/doAddUser');?>" method="post">
<table class="table">
<tr>
<td align="right" width="45%">用户账号：</td>
<td><input type="text" name="username" /></td>
</tr>
<tr>
<td align="right">密码：</td>
<td><input type="password" name="password" /></td>
</tr>
<tr>
<td align="right">确认密码：</td>
<td><input type="password" name="confirmpwd" /></td>
</tr>
<tr id="last">
<td colspan="2" align="center">
<input type="hidden" name="usertype" value="<?php echo ($usertype); ?>" />
<input id="submit_user" type="submit" value="保存添加"/>
</td>
</tr>
</table>
</form>
</body>
</html>