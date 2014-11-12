<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="/001-jiyiwang/Public/Admin/css/common.css">
</head>
<body>
<link rel="stylesheet" href="/001-jiyiwang/Public/Admin/css/common.css">
<div class="right-nav">
      <a class="home" href="" title=""></a><div class="con"><span style="color:#33ccff;">首页</span> > 留言管理</div>
</div>

<div class="right-title">
      留言管理
</div>

<table class="table"> 
	<thead>
		<tr class="firstrow">
			 
			<td>昵称</td>
			<td>邮箱</td>
			<td>留言内容</td>
			<td>留言时间</td>
			<td>留言类别</td>
			<td>操作</td>
		</tr>
	</thead>
	<tbody>
	<?php if(is_array($liuyan)): foreach($liuyan as $key=>$v): ?><tr align="center">
			 
			<td><?php echo ($v["name"]); ?></td>
			<td><?php echo ($v["email"]); ?></td>
			<td style="word-break:break-all; width:500px; text-align:left;"><?php echo ($v["content"]); ?></td>
			<td><?php echo (date("Y-m-d H:i:s",$v["pubtime"])); ?></td>
			<td>留言类别</td>
			<td>
			[<a href="<?php echo U(MODULE_NAME.'/Contact/reply',array('id'=>$v['id']));?>" title="">回复</a>]
			[<a href="<?php echo U(MODULE_NAME.'/Contact/delete',array('id'=>$v['id']));?>" title="">删除</a>] 
			</td>
		</tr><?php endforeach; endif; ?>
	</tbody>
</table>
</body>
</html>