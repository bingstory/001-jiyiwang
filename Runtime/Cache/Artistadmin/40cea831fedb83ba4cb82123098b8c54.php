<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="/001-jiyiwang/Public/Admin/css/common.css">
</head>
<body> 
<div class="right-nav">
      <a class="home" href="" title=""></a><div class="con"><span style="color:#33ccff;">首页</span> > 修改栏目名称</div>
</div>

<div class="right-title">
      修改栏目名称
</div>

<form action="<?php echo U(MODULE_NAME.'/Category/doCateEdit');?>" method="post">
<table class="table">
	 
	<tbody>
		<tr>
			<td align="right" class="width45">原栏目名称：</td>
			<td><?php echo ($cate["name"]); ?></td>
		</tr> 
		<tr>
			<td align="right">新栏目名称：</td>
			<td><input type="text" name="name"></td>
		</tr>
 
	<tr> 
	        <input type="hidden" name="id" value="<?php echo ($cate["id"]); ?>">
			<td colspan="2" align="center"><input type="submit" value="提交"></td>
		</tr>
	</tbody>
</table>
</form>
</body>
</html>