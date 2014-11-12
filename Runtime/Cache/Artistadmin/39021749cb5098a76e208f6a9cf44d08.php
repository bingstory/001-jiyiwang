<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>艺术家信息</title>
      <link rel="stylesheet" href="/001-jiyiwang/Public/Admin/css/common.css">
      <style>tr,td{text-align: center;}</style> 
      <script src="/001-jiyiwang/Public/Static/jquery-1.9.1.min.js"></script>
</head>

<body> 
<div class="right-nav">
      <a class="home" href="" title=""></a><div class="con"><span style="color:#33ccff;">首页</span> > 个人信息</div>
</div>

<div class="right-title">
      个人信息<a href="<?php echo U(MODULE_NAME.'/Artist/editInfo',array('id'=>$artist['id']));?>">[修改]</a>
</div>
<table class="table">
<tr><td class="td-left">账号：</td><td class="td-right"><?php echo ($artist["username"]); ?></td></tr>
<tr><td class="td-left">中文名：</td><td class="td-right"><?php if(empty($artist['chinesename'])): ?>还没有填写...<?php else: echo ($artist["chinesename"]); endif; ?></td></tr>
<tr><td class="td-left">头像：</td><td class="td-right"><?php if(empty($artist['portrait'])): ?>还没有上传图片...<?php else: ?><img style="border:5px solid #efefef" src="/001-jiyiwang/<?php echo ($artist["portrait"]); ?>" alt="<?php echo ($artist["chinesename"]); ?>"><?php endif; ?></td></tr>
<tr><td class="td-left">个人简介：</td><td class="td-right"><?php if(empty($artist['summary'])): ?>还没有填写...<?php else: ?>
<div style="width:792px;"><?php echo ($artist["summary"]); ?></div><?php endif; ?></td></tr>
<tr><td class="td-left">个人详细介绍：</td><td class="td-right"><?php if(empty($artist['introduction'])): ?>还没有填写...<?php else: ?>
	<div style="width:986px;"><?php echo ($artist["introduction"]); ?></div><?php endif; ?></td></tr>
<tr><td class="td-left">毕业院校：</td><td class="td-right"><?php if(empty($artist['graduate'])): ?>还没有填写...<?php else: echo ($artist["graduate"]); endif; ?></td></tr>
<tr><td class="td-left">出生日期：</td><td class="td-right"><?php if(empty($artist['birthday'])): ?>还没有填写...<?php else: echo ($artist["birthday"]); endif; ?></td></tr>
<tr><td class="td-left">主要成就：</td><td class="td-right"><?php if(empty($artist['achievement'])): ?>还没有填写...<?php else: echo ($artist["achievement"]); endif; ?></td></tr>
<tr><td class="td-left">代表作品：</td><td class="td-right"><?php if(empty($artist['represent'])): ?>还没有填写...<?php else: echo ($artist["represent"]); endif; ?></td></tr>
<tr><td class="td-left">上次登录时间：</td><td class="td-right"><?php if(empty($artist['logintime'])): ?>还没有填写...<?php else: echo ($artist["logintime"]); endif; ?></td></tr>
<tr><td class="td-left">上次登录IP：</td><td class="td-right"><?php if(empty($artist['loginip'])): ?>还没有填写...<?php else: echo ($artist["loginip"]); endif; ?></td></tr>
</table>
</body>
</html>