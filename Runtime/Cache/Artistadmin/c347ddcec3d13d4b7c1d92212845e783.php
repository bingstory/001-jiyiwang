<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<title></title>
	<link rel="stylesheet" href="/001-jiyiwang/Public/Admin/css/common.css">
	 
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"> 
</head>
<body>
<link rel="stylesheet" href="/001-jiyiwang/Public/Admin/css/common.css">
<div class="right-nav">
      <a class="home" href="" title=""></a><div class="con"><span style="color:#000;">首页</span> > 分类管理</div>
</div>

<div class="right-title">
      添加分类
</div>

<form action="<?php echo U(MODULE_NAME.'/Category/doAddCate');?>" method='post'>
			<table class="table">
				 
				<tr>
					<td align='right' class="width45">分类栏目名称：</td>
					<td>
						<input type="text" name='name' />
					</td>
				</tr>
				<tr>
					<td align='right'>排序：</td>
					<td>
						<input type="text" name='sort' value='100' />
					</td>
				</tr>
				<tr>
					<td colspan='2' align='center'>
						<input type="submit" value='保存' />
					</td>
				</tr>
			</table>
	</form>
</body>
</html>