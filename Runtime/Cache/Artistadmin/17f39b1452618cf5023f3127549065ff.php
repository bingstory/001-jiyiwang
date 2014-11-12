<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>用户管理</title>
      <link rel="stylesheet" href="/001-jiyiwang/Public/Admin/css/common.css">
      <style>tr,td{text-align: center;}</style>
</head>

<body> 
<div class="right-nav">
      <a class="home" href="" title=""></a><div class="con"><span style="color:#33ccff;">首页</span> > 用户管理</div>
</div>

<div class="right-title">
      <?php echo ($pos); ?>列表<a href="<?php echo U(MODULE_NAME.'/User/user',array('usertype'=>$usertype));?>" title="">[添加<?php echo ($pos); ?>]</a>
</div>

<table class="table">
<tr class="firstrow">
<td>ID</td>
<td>用户名称</td>
<td>上一次登录时间</td>
<td>上一次登录IP</td>
<td>锁定状态</td>
<td>用户所属别组</td>
<td>操作</td>
</tr>
<?php if(is_array($user)): foreach($user as $key=>$v): ?><tr>
      <td><?php echo ($v["id"]); ?></td>
      <td><?php echo ($v["username"]); ?></td>
      <td><?php echo (date('y-m-d H:i',$v["logintime"])); ?></td>
      <td><?php echo ($v["loginip"]); ?></td>
      <td>
         <?php if($v['lockstatus'] == 1): ?><a style="color:red;" href="<?php echo U(MODULE_NAME.'/User/setLock',array('lock'=>0,'id'=>$v['id']));?>">已锁定</a> <?php else: ?>
         <a style="color:green;" href="<?php echo U(MODULE_NAME.'/User/setLock',array('lock'=>1,'id'=>$v['id']));?>">未锁定</a><?php endif; ?>
      </td>
      <td><a href=""></a></td>
      <td><a href=""></a></td><?php endforeach; endif; ?>
   </tr>
</table>
</body>
</html>