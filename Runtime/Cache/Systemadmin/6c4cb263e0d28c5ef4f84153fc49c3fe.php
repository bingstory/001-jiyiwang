<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<title></title>
	<link rel="stylesheet" href="/001-jiyiwang/Public/Admin/css/common.css"> 
	<script type="text/javascript" src="/001-jiyiwang/Public/Static/jquery-1.7.2.min.js" ></script>
	<script>
        $(document).ready(function(){
        	$('tr:even').addClass('bing-bgcolor2'); 
        });
	</script>
</head>
<body> 
<div class="right-nav">
      <a class="home" href="" title=""></a><div class="con"><span style="color:#33ccff;">首页</span> > 友情链接列表</div>
</div>

<div class="right-title">
      友情链接列表<a href="<?php echo U(MODULE_NAME.'/Link/link');?>" title="">[添加新链接]</a>
</div>

<form action="<?php echo U(MODULE_NAME.'/Link/linkSort');?>" method='post'>
			<table class="table">
				 
				<tr class="firstrow">
					<td align='right'>链接编号</td>
					<td align='right'>名称</td>
					<td align='right'>地址</td>
					<td align='right'>排序</td>
					<td align='right'>操作</td>
				</tr>
			<?php if(is_array($link)): foreach($link as $key=>$v): ?><tr>
					<td><?php echo ($v["id"]); ?></td>
					<td><?php echo ($v["title"]); ?></td>
					<td><?php echo ($v["siteurl"]); ?></td>
					<td>
                         <input type="text" name="<?php echo ($v["id"]); ?>" value="<?php echo ($v["sort"]); ?>" >
					</td>
					<td> 
						[<a href="<?php echo U(MODULE_NAME.'/Link/linkEdit',array('id'=>$v['id']));?>">修改</a>]
						[<a href="<?php echo U(MODULE_NAME.'/Link/delete',array('id'=>$v['id']));?>">删除</a>]
					</td>
				</tr><?php endforeach; endif; ?>
			<tr>
				<td colspan="5" align="center"><input type="submit" value='排序'></td>
			</tr>
			</table>
	</form>
</body>
</html>