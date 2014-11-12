<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>艺术家信息</title>
      <link rel="stylesheet" href="/001-jiyiwang/Public/Admin/css/common.css">
      <style>tr,td{text-align: center;}</style> 
      <script src="/001-jiyiwang/Public/Static/jquery-1.9.1.min.js"></script>
</head>

<body> 
<div class="right-nav">
      <a class="home" href="" title=""></a><div class="con"><span style="color:#33ccff;">首页</span> > 个人信息</div>
</div>

<div class="right-title">
      个人信息
</div>
<form method="post" action="<?php echo U(MODULE_NAME.'/User/doEdit',array('id'=>$artist['id']));?>">
<table class="table">
<tr><td class="td-left">账号：</td><td class="td-right"><?php echo ($artist["username"]); ?></td></tr>
<tr><td class="td-left">中文名：</td><td class="td-right"><?php if(empty($artist['chinesename'])): ?>还没有填写...<?php else: echo ($artist["chinesename"]); endif; ?></td></tr>
<tr><td class="td-left">头像：</td><td class="td-right"><?php if(empty($artist['portrait'])): ?>还没有上传图片...<?php else: ?><img style="border:5px solid #efefef" src="/001-jiyiwang/<?php echo ($artist["portrait"]); ?>" alt="<?php echo ($artist["chinesename"]); ?>"><?php endif; ?></td></tr>
<tr><td class="td-left">属性：</td><td class="td-right">
<?php if(is_array($attr)): foreach($attr as $key=>$v): ?><input type="checkbox" name="attr[]" value="<?php echo ($v["id"]); ?>" <?php if($isattr[$v['id']]): ?>checked='checked'<?php else: endif; ?>><?php echo ($v["name"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php endforeach; endif; ?>
</td></tr>
<tr>
	<td style="text-align:left;" colspan="2">
	<input type="hidden" name="artist_id" value="<?php echo ($artist["id"]); ?>" >
	<input type="submit" style="margin-left:230px;">
	</td>
</tr>
</table>
</form>
</body>
</html>