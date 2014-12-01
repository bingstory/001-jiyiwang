<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<title></title>
	<link rel="stylesheet" href="/001-jiyiwang/Public/Admin/css/common.css">
	 
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"> 
</head>
<body> 
<div class="right-nav">
      <a class="home" href="" title=""></a><div class="con"><span style="color:#000;">首页</span> > 添加链接</div>
</div>

<div class="right-title">
      添加链接
</div>

<form action="<?php echo U(MODULE_NAME.'/Link/addLink');?>" method='post'>
			<table class="table">
				 
				<tr>
					<td align='right'>链接名称</td>
					<td>
						<input type="text" name='title' />
					</td>
				</tr>
				<tr>
					<td align='right'>链接地址</td>
					<td>
						<input type="text" name='siteurl' value='' />（需要加上http://）
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