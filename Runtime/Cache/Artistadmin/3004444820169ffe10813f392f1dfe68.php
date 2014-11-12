<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>艺术家信息</title>
      <link rel="stylesheet" href="/001-jiyiwang/Public/Admin/css/common.css">
      <style>tr,td{text-align: center;}</style>  
      <script type="text/javascript" src="/001-jiyiwang/Public/Static/jquery-1.9.1.min.js"></script>
      <script type="text/javascript" src="/001-jiyiwang/Data/ueditor/ueditor.config.js"></script>
      <script type="text/javascript" src="/001-jiyiwang/Data/ueditor/ueditor.all.min.js"></script>
		<script> 
		      window.UEDITOR_HOME_URL = '/001-jiyiwang/Data/ueditor/';
		      window.onload = function(){
		            window.UEDITOR_CONFIG.initialFrameHeight = 450;
		            window.UEDITOR_CONFIG.initialFrameWidth = 800;
		            window.UEDITOR_CONFIG.savePath = ['Uploads'];
		            window.UEDITOR_CONFIG.imageUrl = "<?php echo U(MODULE_NAME.'/Common/c_upload',array('folder'=>'Artist'));?>";       //图片上传提交地址
		            window.UEDITOR_CONFIG.imagePath = "/001-jiyiwang/Uploads/";
		            UE.getEditor('introduction');
		      }
		</script>
</head>

<body> 
<div class="right-nav">
      <a class="home" href="" title=""></a><div class="con"><span style="color:#33ccff;">首页</span> > 个人信息</div>
</div>

<div class="right-title">
      个人信息
</div>
<form method="post" action="<?php echo U(MODULE_NAME.'/Artist/doEdit');?>" enctype="multipart/form-data">
<table class="table">
<tr><td class="td-left">账号：</td><td class="td-right"><?php echo ($artist["username"]); ?></td></tr>
<tr><td class="td-left">中文名：</td><td class="td-right"><input type="text" name="chinesename" value="<?php echo ($artist["chinesename"]); ?>"></td></tr>
<tr><td class="td-left">头像：</td><td class="td-right"><div style='width:199px; height:128px;'>
                              <img id="img1" <?php if(!empty($artist['portrait'])): ?>src="/001-jiyiwang/<?php echo ($artist['portrait']); ?>"<?php else: ?>src="/001-jiyiwang/Public/Admin/images/empty_thumb.gif"<?php endif; ?> width="193" height="177" />
                                  </div><br><br><br>
                                  (图片大小：193px*177px)
                                  <input type="file" name='portrait' id="picurl1" />
                                  <script type="text/javascript" src="/001-jiyiwang/Public/Static/thumb2.js"></script></td></tr>
<tr><td class="td-left">头像：<br>(*需要申请推荐到<a href="<?php echo U('/Home/a');?>" style="color:red; text-decoration:underline;" target="_blank">“艺术家”</a>页面时上传)</td><td class="td-right"><div style='width:199px; height:128px;'>
                              <img id="img2" <?php if(!empty($artist['homeportrait'])): ?>src="/001-jiyiwang/<?php echo ($artist['homeportrait']); ?>"<?php else: ?>src="/001-jiyiwang/Public/Admin/images/empty_thumb.gif"<?php endif; ?> width="200" height="129" />
                                  </div><br>
                                  (图片大小：493px*318px)
                                  <input type="file" name='homeportrait' id="picurl2" />
                                  <script type="text/javascript" src="/001-jiyiwang/Public/Static/thumb2.js"></script></td></tr>
<tr><td class="td-left">毕业院校：</td><td class="td-right"><input type="text" name="graduate" value="<?php echo ($artist["graduate"]); ?>"></td></tr>
<tr><td class="td-left">出生日期：</td><td class="td-right"><input type="text" name="birthday" value="<?php echo ($artist["birthday"]); ?>"></td></tr>
<tr><td class="td-left">主要成就：</td><td class="td-right"><input type="text" name="achievement" value="<?php echo ($artist["achievement"]); ?>"></td></tr>
<tr><td class="td-left">代表作品：</td><td class="td-right"><input type="text" name="represent" value="<?php echo ($artist["represent"]); ?>"></td></tr>
<tr><td class="td-left">个人简介：</td><td class="td-right">
<textarea name="summary" id="" cols="60" rows="3"><?php echo ($artist["summary"]); ?></textarea>
</td></tr>
<tr><td class="td-left">个人详细介绍：</td><td class="td-right">
<textarea name="introduction" id="introduction" cols="60" rows="3"><?php echo ($artist["introduction"]); ?></textarea>
</td></tr>
<tr>
	<td colspan="2">
	<input type="hidden" name="id" value="<?php echo ($artist["id"]); ?>">
	<input type="submit" value="提交"></td>
</tr>
</table>
</form>
</body>
</html>