<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>用户管理</title>
      <link rel="stylesheet" href="/001-jiyiwang/Public/Admin/css/common.css">
      <style>tr,td{text-align: center;}</style> 
      <script src="/001-jiyiwang/Public/Static/jquery-1.9.1.min.js"></script>
      <script src="/001-jiyiwang/Public/Admin/js/hoveranddel.js"></script>
</head>

<body> 
<div class="right-nav">
      <a class="home" href="" title=""></a><div class="con"><span style="color:#000;">首页</span> > 用户管理</div>
</div>

<div class="right-title">
      <?php echo ($pos); ?>列表<a href="<?php echo U(MODULE_NAME.'/User/user',array('usertype'=>$usertype));?>" title="">[添加<?php echo ($pos); ?>]</a>
</div>
<form method="post" action="<?php echo U(MODULE_NAME.'/User/sort');?>">
<table class="table">
<tr class="firstrow">
<td>ID</td>
<td>用户名称</td>
<td>上一次登录时间</td>
<td>上一次登录IP</td>

<td>推荐属性</td>
<td>排序</td>
<td>操作</td>
<td>冻结状态(点击修改)</td>
</tr>
<?php if(is_array($user)): foreach($user as $key=>$v): ?><tr>
      <td><?php echo ($v["id"]); ?></td>
      <td><?php echo ($v["username"]); ?></td>
      <td><?php echo (date('y-m-d H:i',$v["logintime"])); ?></td>
      <td><?php echo ($v["loginip"]); ?></td>
       
      <td><?php if(is_array($v["attr"])): foreach($v["attr"] as $key=>$va): ?>【<?php echo ($va["name"]); ?>】<br>&nbsp;<?php endforeach; endif; ?></td>
      <td><input type="text" name="<?php echo ($v["id"]); ?>" value='<?php echo ($v["sort"]); ?>' size="5"></td>
      <td>
      <a href="<?php echo U(MODULE_NAME.'/User/edit',array('id'=>$v['id'],'usertype'=>$v['usertype']));?>">[修改]</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a onclick="return del();" href="<?php echo U(MODULE_NAME.'/User/delete',array('id'=>$v['id']));?>">[删除]</a>
      </td>
      <td>
         <?php if($v['lockstatus'] == 1): ?><a style="color:red;" href="<?php echo U(MODULE_NAME.'/User/setLock',array('lock'=>0,'id'=>$v['id']));?>">已冻结</a> <?php else: ?>
         <a style="color:green;" href="<?php echo U(MODULE_NAME.'/User/setLock',array('lock'=>1,'id'=>$v['id']));?>">未冻结</a><?php endif; ?>
      </td><?php endforeach; endif; ?>
   </tr>
   <tr>
      <td colspan="8">
      <input type="hidden" name="usertype" value="<?php echo ($usertype); ?>">
      <input type="submit" value="排序"></td>
   </tr>
</table>
</form>
</body>
</html>