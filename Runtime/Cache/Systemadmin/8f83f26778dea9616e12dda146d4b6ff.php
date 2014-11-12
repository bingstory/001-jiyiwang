<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title><%= title %> - 管理页面</title>
<script language=JavaScript>
function logout(){
	if (confirm("您确定要退出控制面板吗？"))
	top.location = "out.asp";
	return false;
}
</script>
<script language=JavaScript1.2>
function showsubmenu(sid) {
	var whichEl = eval("submenu" + sid);
	var menuTitle = eval("menuTitle" + sid);
	if (whichEl.style.display == "none"){
		eval("submenu" + sid + ".style.display=\"\";");
	}else{
		eval("submenu" + sid + ".style.display=\"none\";");
	}
}
</script>
<meta http-equiv=Content-Type content=text/html;charset=utf-8>
<meta http-equiv="refresh" content="60">
<script language=JavaScript1.2>
function showsubmenu(sid) {
	var whichEl = eval("submenu" + sid);
	var menuTitle = eval("menuTitle" + sid);
	if (whichEl.style.display == "none"){
		eval("submenu" + sid + ".style.display=\"\";");
	}else{
		eval("submenu" + sid + ".style.display=\"none\";");
	}
}
</script>
<script src="/001-jiyiwang/Public/Home/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script type="text/javascript" >
$('#logout').click(function(){
    location.reload();
});
</script>
<base target="main">
<link href="/001-jiyiwang/Public/Admin/images/skin.css" rel="stylesheet" type="text/css">
</head>
<body leftmargin="0" topmargin="0">
<table width="100%" height="64" border="0" cellpadding="0" cellspacing="0" class="admin_topbg">
  <tr>
    <td valign="top" width="61%" height="64"><img src="/001-jiyiwang/Public/Admin/images/logo.png" width="120" height="34"></td>
    <td width="39%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="74%" height="38" class="admin_txt">管理员：<b><?php echo $_SESSION['username'] ?></b> 您好,感谢登陆使用！&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('/Home/Index');?>" target="_blank" title="" style="color:white;">【访问网站】</a></td>
        <td width="22%"><a id="logout" href="<?php echo U(MODULE_NAME.'/Index/logOut');?>" target="_top" ><img src="/001-jiyiwang/Public/Admin/images/out.gif" alt="安全退出" width="46" height="20" border="0"></a></td>
        <td width="4%">&nbsp;</td>
      </tr>
      <tr>
        <td height="19" colspan="3">&nbsp;</td>
        </tr>
    </table></td>
  </tr>
</table>
</body>
</html>