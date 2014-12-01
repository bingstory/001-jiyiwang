<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理页面</title>
<link rel="stylesheet" href="/001-jiyiwang/Public/Admin/css/left.css">
<script src="/001-jiyiwang/Public/Admin/js/prototype.lite.js" type="text/javascript"></script>
<script src="/001-jiyiwang/Public/Admin/js/moo.fx.js" type="text/javascript"></script>
<script src="/001-jiyiwang/Public/Admin/js/moo.fx.pack.js" type="text/javascript"></script> 
</head> 
<body>
<table width="100%" height="280" border="0" cellpadding="0" cellspacing="0" bgcolor="#EEF2FB">
  <tr>
    <td width="182" valign="top"><div id="container">
      <h1 class="type"><a href="javascript:void(0)">个人管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="/001-jiyiwang/Public/Admin/images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="<?php echo U(MODULE_NAME.'/Artist/index');?>" target="main">个人信息</a></li>
          <li><a href="<?php echo U(MODULE_NAME.'/User/setPassword');?>" target="main">密码管理</a></li>
        </ul>
      </div>

      <h1 class="type"><a href="javascript:void(0)">作品管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="/001-jiyiwang/Public/Admin/images/menu_topline.gif" width="182" height="5"/></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="<?php echo U(MODULE_NAME.'/Works/index');?>" target="main">作品管理</a></li>
          <li><a href="<?php echo U(MODULE_NAME.'/Category/index');?>" target="main">分类管理</a></li>
        </ul>
      </div>

      <h1 class="type"><a href="javascript:void(0)">商铺管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="/001-jiyiwang/Public/Admin/images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="<?php echo U(MODULE_NAME.'/Works/index',array('isshop'=>1));?>" target="main">商品管理</a></li>
          <li><a href="<?php echo U(MODULE_NAME.'/Shop/orderlist');?>" target="main">订单管理</a></li>
        </ul>
      </div>
      
        <h1 class="type"><a href="javascript:void(0)">主页管理</a></h1>
      <div class="content">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><img src="/001-jiyiwang/Public/Admin/images/menu_topline.gif" width="182" height="5" /></td>
            </tr>
          </table>
        <ul class="MM">
          <li><a href="<?php echo U(MODULE_NAME.'/Homepage/setBg');?>" target="main">主页大图设置</a></li>
          <li><a href="<?php echo U(MODULE_NAME.'/Homepage/comment');?>" target="main">名家评价</a></li>
          <li><a href="<?php echo U(MODULE_NAME.'/Homepage/video');?>" target="main">视频</a></li>
          <li><a href="<?php echo U(MODULE_NAME.'/Homepage/yearslist');?>" target="main">年谱简表</a></li>
          <li><a href="<?php echo U(MODULE_NAME.'/Homepage/dynamic');?>" target="main">个人动态</a></li>
        </ul>
      </div>
      </div>
        <script type="text/javascript">
		var contents = document.getElementsByClassName('content');
		var toggles = document.getElementsByClassName('type');
		var myAccordion = new fx.Accordion(
			toggles, contents, {opacity: true, duration: 400}
		);
		myAccordion.showThisHideOpen(contents[0]);
	</script>
        </td>
  </tr>
</table>
</body>
</html>