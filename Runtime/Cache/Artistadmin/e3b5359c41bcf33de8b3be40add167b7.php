<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<title></title>
	<link rel="stylesheet" href="/001-jiyiwang/Public/Admin/css/common.css"> 
	<script type="text/javascript" src="/001-jiyiwang/Public/Static/jquery-1.9.1.min.js" ></script>
	<script>
        function del() { 
			var msg = "您真的要删除该分类吗？\n删除后无法恢复\n请确认！"; 
			if (confirm(msg)==true){ 
			return true; 
			}else{ 
			return false; 
			} 
			} 
	</script>
	<style>
		tr,td{ text-align: center;}
		tr:hover{ background: #ebeded;}
	</style>
</head>
<body> 
<div class="right-nav">
      <a class="home" href="" title=""></a><div class="con"><span style="color:#000;">首页</span> > 分类管理</div>
</div>

<div class="right-title">
      分类列表<a href="<?php echo U(MODULE_NAME.'/Category/addCate');?>" title="添加栏目">[添加分类]</a>
</div>

<form action="<?php echo U(MODULE_NAME.'/Category/sort');?>" method='post'>
			<table class="table">
				 
				<tr class="firstrow">
					<td>分类ID</td>
					<td>分类名称</td>
					<td>排序</td>
					<td>操作</td>
				</tr>
			<?php if(is_array($cate)): foreach($cate as $key=>$v): ?><tr>
					<td align="center" width="20px;"><?php echo ($v["id"]); ?></td>
					<td  width="200px;"><?php echo ($v["html"]); echo ($v["name"]); ?></td>
					<td align="center">
                         <input type="text" name="<?php echo ($v["id"]); ?>" value="<?php echo ($v["sort"]); ?>" >
					</td>
					<td align="" width="200">
						[<a href="<?php echo U(MODULE_NAME.'/Category/cateEdit',array('id'=>$v[id]));?>">修改名称</a>] &nbsp;&nbsp;&nbsp;&nbsp;
						[<a id="delete" onclick="javascript:return del()" href="<?php echo U(MODULE_NAME.'/Category/delete',array('id'=>$v[id]));?>">删除</a>]
					</td>
				</tr><?php endforeach; endif; ?>
			<tr>
				<td colspan="5" align="center"><input type="submit" value='排序'></td>
			</tr>
			</table>
	</form>
</body>
</html>