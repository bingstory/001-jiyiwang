<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<title></title>
	<link rel="stylesheet" href="/001-jiyiwang/Public/Admin/css/common.css"> 
	<script type="text/javascript" src="/001-jiyiwang/Public/Static/jquery-1.9.1.min.js" ></script>
	<script>
        $(document).ready(function(){
        	//鼠标经过行颜色发生变化
        	$('tr').hover(function(){
        		$(this).addClass('bing-bgcolor2');
        	},function(){
        		$(this).removeClass('bing-bgcolor2');
        	}); 
        	//删除确认框 
        });
        function p_del() { 
			var msg = "您真的要删除该分类吗？\n删除后无法恢复\n请确认！"; 
			if (confirm(msg)==true){ 
			return true; 
			}else{ 
			return false; 
			} 
			} 
	</script>
	<style>
		.bing-bgcolor2{background: #ebeded;}
	</style>
</head>
<body> 
<div class="right-nav">
      <a class="home" href="" title=""></a><div class="con"><span style="color:#33ccff;">首页</span> > 栏目列表</div>
</div>

<div class="right-title">
      栏目列表<a href="<?php echo U(MODULE_NAME.'/Category/cate',array('id'=>$dszzc['id']));?>" title="">[添加栏目]</a>
</div>

<form action="<?php echo U(MODULE_NAME.'/Category/sortCate');?>" method='post'>
			<table class="table">
				 
				<tr class="firstrow">
					<td>分类ID</td>
					<td>分类名称</td>
					<td>等级</td>
					<td>排序</td>
					<td>操作</td>
				</tr>
			<?php if(is_array($cate)): foreach($cate as $key=>$v): ?><tr>
					<td align="center" width="20px;"><?php echo ($v["id"]); ?></td>
					<td  width="200px;"><?php echo ($v["html"]); echo ($v["name"]); ?></td>
					<td align="center"><?php if($v['level'] == 1): ?>一级栏目<?php elseif($v['level'] == 2): ?>二级栏目<?php elseif($v['level'] == 3): ?>三级栏目<?php elseif($v['level'] == 4): ?>四级栏目<?php else: ?>五级栏目<?php endif; ?></td>
					<td align="center">
                         <input type="text" name="<?php echo ($v["id"]); ?>" value="<?php echo ($v["sort"]); ?>" >
					</td>
					<td align="" width="200">
						[<a href="<?php echo U(MODULE_NAME.'/Category/cate',array('id'=>$v[id]));?>">添加子分类</a>] &nbsp;
						[<a href="<?php echo U(MODULE_NAME.'/Category/cateEdit',array('id'=>$v[id]));?>">修改名称</a>] &nbsp;
						<?php if($v['pid'] != 0): ?>[<a id="delete" onclick="javascript:return p_del()" href="<?php echo U(MODULE_NAME.'/Category/delete',array('id'=>$v[id]));?>">删除</a>]<?php endif; ?>
					</td>
				</tr><?php endforeach; endif; ?>
			<tr>
				<td colspan="5" align="center"><input type="submit" value='排序'></td>
			</tr>
			</table>
	</form>
</body>
</html>