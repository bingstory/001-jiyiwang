<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<title>网站基本信息设置</title> 
	<link rel="stylesheet" href="/001-jiyiwang/Public/Admin/css/common.css">
	<link rel="stylesheet" href="/001-jiyiwang/Public/Admin/css/baseinfo.css">
</head>
<body>
<div class="right-nav">
      <a class="home" href="" title=""></a><div class="con"><span style="color:#33ccff;">首页</span> > 网站基本信息设置</div>
</div>

<div class="right-title">
      网站基本信息设置
</div>
  <form action="<?php echo U(MODULE_NAME.'/System/updateBaseinfo');?>" method='post'>
		<table class="table">
			 <tr  style="background: #E3E9EE; font: bold 12px 'sans-serif';">
				<td  align='right' width="200px;">设置项</td>
				<td>
					设置内容
				</td>
			</tr>
			<tr>
				<td  align='right'>站点名称</td>
				<td>
					<input type="text" name='SITENAME' value='<?php echo (C("SITENAME")); ?>' />
				</td>
			</tr>
			<tr>
				<td  align='right'>电话号码</td>
				<td>
					<input type="text" name='DIANHUA' value='<?php echo (C("DIANHUA")); ?>' />
				</td>
			</tr>
			<tr>
				<td align='right'>全国统一咨询热线</td>
				<td>
					<input type="text" name='REXIAN' value='<?php echo (C("REXIAN")); ?>' />
				</td>
			</tr>
			<tr>
				<td align='right'>传真</td>
				<td>
					<input type="text" name='FAX' value='<?php echo (C("FAX")); ?>' />
				</td>
			</tr>
			<tr>
				<td align='right'>加盟客服QQ1</td>
				<td>
					<input type="text" name='QQ1' value='<?php echo (C("QQ1")); ?>' />
				</td>
			</tr>
			<tr>
				<td align='right'>加盟客服QQ2</td>
				<td>
					<input type="text" name='QQ2' value='<?php echo (C("QQ2")); ?>' />
				</td>
			</tr>
			<tr>
				<td align='right'>网站版权信息</td>
				<td>
					<input type="text" name='COPYRIGHT' value='<?php echo (C("COPYRIGHT")); ?>' />
				</td>
			</tr>
			<tr>
				<td align='right'>邮编</td>
				<td>
					<input type="text" name='ZIPCODE' value='<?php echo (C("ZIPCODE")); ?>'/>
				</td>
			</tr>
			<tr>
				<td align='right'>地址</td>
				<td>
					<!-- <input type="text" name='ADDR' value=''/> -->
					<textarea style="margin:5px 0;" cols="50" rows="3" name="ADDR"><?php echo (C("ADDR")); ?></textarea>
				</td>
			</tr>
			 <tr>
				<td align='right'>首页关于我们</td>
				<td>
					<!-- <input type="text" name='ADDR' value=''/> -->
					<textarea style="margin:5px 0;" cols="50" rows="3" name="Aboutus"><?php echo (C("Aboutus")); ?></textarea>
				</td>
			</tr>
			<tr>
				<td align='right'>统计代码</td>
				<td>
					<!-- <input type="text" name='ADDR' value=''/> -->
					<textarea style="margin:5px 0;" cols="50" rows="3" name="Statistics"><?php echo (C("Statistics")); ?></textarea>
				</td>
			</tr>
			 <tr>
			 	<td colspan='2'>
			 		<input style="margin-left:100px;" type="submit" value='保存修改' />
			 	</td>
			 </tr>
		</table>
	</form>
</body>
</html>