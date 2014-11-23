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
      <h1 class="type"><a href="javascript:void(0)">网站常规管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="/001-jiyiwang/Public/Admin/images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="<?php echo U(MODULE_NAME.'/System/baseinfo');?>" target="main">基本信息</a></li> 
          <li><a href="<?php echo U(MODULE_NAME.'/Banner/index');?>" target="main">幻灯片设置</a></li> 
          <li><a href="<?php echo U(MODULE_NAME.'/Link/link');?>" target="main">增加链接</a></li>
          <li><a href="<?php echo U(MODULE_NAME.'/Link/index');?>" target="main">管理链接</a></li>
          <li><a href="<?php echo U(MODULE_NAME.'/System/area');?>" target="main">地区管理</a></li>
        </ul>
      </div>
      <h1 class="type"><a href="javascript:void(0)">栏目分类管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="/001-jiyiwang/Public/Admin/images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="<?php echo U(MODULE_NAME.'/Category/index');?>" target="main">栏目管理</a></li> 
        </ul>
      </div>
      <h1 class="type"><a href="javascript:void(0)">网站内容管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="/001-jiyiwang/Public/Admin/images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="<?php echo U(MODULE_NAME.'/News/index');?>" target="main">新闻管理</a></li> 
          <li><a href="<?php echo U(MODULE_NAME.'/Customize/index');?>" target="main">个性化定制管理</a></li> 
          <li><a href="<?php echo U(MODULE_NAME.'/Enlighten/index');?>" target="main">美育启蒙管理</a></li>
		      <li><a href="<?php echo U(MODULE_NAME.'/About/index');?>" target="main">关于我们管理</a></li>
        </ul>
      </div>
      
      <h1 class="type"><a href="javascript:void(0)">平台内容管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="/001-jiyiwang/Public/Admin/images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="<?php echo U(MODULE_NAME.'/Works/index');?>" target="main">作品管理</a></li>
        </ul>
      </div>

      <h1 class="type"><a href="javascript:void(0)">用户管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="/001-jiyiwang/Public/Admin/images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="<?php echo U(MODULE_NAME.'/User/index',array('usertype'=>'system'));?>" target="main">系统用户管理</a></li> 
          <li><a href="<?php echo U(MODULE_NAME.'/User/index',array('usertype'=>'artist'));?>" target="main">艺术家管理</a></li> 
          <li><a href="<?php echo U(MODULE_NAME.'/User/index',array('usertype'=>'agent'));?>" target="main">经纪人管理</a></li> 
          <li><a href="<?php echo U(MODULE_NAME.'/User/index',array('usertype'=>'normal'));?>" target="main">普通会员管理</a></li> 
        </ul>
      </div>
    </div>
        <h1 class="type"><a href="javascript:void(0)">其它参数管理</a></h1>
      <div class="content">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><img src="/001-jiyiwang/Public/Admin/images/menu_topline.gif" width="182" height="5" /></td>
            </tr>
          </table>
        <ul class="MM">
          <li><a href="http://www.mycodes.net" target="main">管理设置</a></li>
          <li><a href="http://www.mycodes.net" target="main">主机状态</a></li>
          <li><a href="http://www.mycodes.net" target="main">攻击状态</a></li>
          <li><a href="http://www.mycodes.net" target="main">登陆记录</a></li>
          <li><a href="http://www.mycodes.net" target="main">运行状态</a></li>
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