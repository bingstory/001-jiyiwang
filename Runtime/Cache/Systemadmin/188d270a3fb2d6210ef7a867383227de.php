<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title>管理中心</title>
<meta http-equiv=Content-Type content=text/html;charset=utf-8>
</head>
<frameset rows="64,*"  frameborder="NO" border="0" framespacing="0">
    <!-- 首页顶部 -->
	<frame src="<?php echo U(MODULE_NAME.'/Index/admin_top');?>" noresize="noresize" frameborder="NO" name="topFrame" scrolling="no" marginwidth="0" marginheight="0" target="main" />
    <!-- 顶部END -->

  <frameset cols="186,*"  id="frame">
	<frame src="<?php echo U(MODULE_NAME.'/Index/left');?>" name="leftFrame" noresize="noresize" marginwidth="0" marginheight="0" frameborder="0" scrolling="no" target="main" />
	<frame src="<?php echo U(MODULE_NAME.'/Index/right');?>" name="main" marginwidth="0" marginheight="0" frameborder="0" scrolling="auto" target="_self" />
  </frameset>
<noframes>
  <body></body>
    </noframes>
</html>