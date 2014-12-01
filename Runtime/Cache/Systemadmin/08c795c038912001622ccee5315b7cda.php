<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
      <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
      <title>作品管理</title>
      <link rel="stylesheet" href="/001-jiyiwang/Public/Admin/css/common.css">
      <link rel="stylesheet" href="/001-jiyiwang/Public/Admin/css/news.css">
      <script type="text/javascript" src="/001-jiyiwang/Public/Static/jquery-1.9.1.min.js" ></script>
      <script>
        function del() { 
        var msg = "您真的要删除吗？\n删除后数据无法恢复\n请确认！"; 
        if (confirm(msg)==true){ 
        return true; 
        }else{ 
        return false; 
          }
        }
      </script>
      <style>
            .bing-bgcolor2{background: #ebeded;}
            tr:hover{ background: #ebeded;}
      </style>
</head>
<body> 
<div class="right-nav">
      <a class="home" href="" title=""></a><div class="con"><span style="color:#000;">首页</span> > <?php echo ($pos); ?>管理</div>
</div>

<div class="right-title">
  <?php echo ($pos); ?>列表<?php if($pos == 作品): ?><a href="<?php echo U(MODULE_NAME.'/Works/add');?>" title="">[添加]</a><?php endif; ?>
</div>

      <table class="table">
        <tr>
                  <form action="<?php echo U(MODULE_NAME.'/Works/index');?>" method="post">
                  <td colspan="12"> 
                  分类：<select name="cate_id">
                  <option value="">--请选择--</option>
                  <?php if(is_array($category)): foreach($category as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["html"]); echo ($v["name"]); ?></option><?php endforeach; endif; ?>
                  </select>
                  <input type="hidden" name="isshop" value="<?php echo ($isshop); ?>"> 
                  <input type="submit" name="" value="搜索"> 
                  </td>
            </form>
            </tr>
            <tr>
                    <td width="25">ID</td>
                    <td width="100">作品编号</td>
                    <td>标题</td>
                    <td width="100">封面</td>
                    <!-- <td width="100">个人分类</td> -->
                    <td width="100">商城分类</td>
                    <td width="100">艺术家姓名</td>
                    <td>推荐属性</td>
                    <td width="30">排序</td>
                    <td width="100">审核状态<br>(是否通过)</td>
                    <td width="150">操作</td>
              </tr>
              
              <form method="post" action="<?php echo U(MODULE_NAME.'/Works/sort');?>">
              
            <?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
               <td><?php echo ($v["id"]); ?></td>
               <td><?php echo ($v["works_id"]); ?></td>
               <td><?php echo ($v["title"]); ?></td>
               <td><img src="/001-jiyiwang/<?php echo ($v["thumb"]); ?>" alt="" width="100" height="90" style="border:3px solid #DCE2F3;"/></td>
               <!-- <td><?php echo ($v["cate"]); ?></td> -->
               <td><?php echo ($v["shopcate"]); ?></td>
               <td><?php echo ($v["artistname"]); ?></td>
               <td><?php if(is_array($v["attr"])): foreach($v["attr"] as $key=>$va): ?>【<?php echo ($va["name"]); ?>】&nbsp;<?php endforeach; endif; ?></td>
               <td>
              <input type="text" name="<?php echo ($v["id"]); ?>" value='<?php echo ($v["systemsort"]); ?>' size="5">
               </td>
               <td>
               <?php if($v["checkstatus"] == 1): ?><a style="color:green;" href="<?php echo U(MODULE_NAME.'/Works/checkstatus',array('id'=>$v['id'],'checkstatus'=>2,'cate_id'=>$cate_id,'isshop'=>$isshop));?>">是</a><?php else: ?>
               <a style="color:red;" href="<?php echo U(MODULE_NAME.'/Works/checkstatus',array('id'=>$v['id'],'checkstatus'=>1,'cate_id'=>$cate_id,'isshop'=>$isshop));?>">否</a><?php endif; ?>
               </td>
               <td>
                 <span class="modify"><a href="<?php echo U(MODULE_NAME.'/Works/preview',array('id'=>$v['id'],'cate_id'=>$cate_id,'isshop'=>$isshop));?>">[查看]</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U(MODULE_NAME.'/Works/edit',array('id'=>$v['id'],'cate_id'=>$cate_id,'isshop'=>$isshop));?>">[修改]</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="delete"><a onclick="return del()" href="<?php echo U(MODULE_NAME.'/Works/delete',array('id'=>$v['id'],'cate_id'=>$cate_id,'isshop'=>1));?>">[删除]</a></span>
               </td>
             </tr><?php endforeach; endif; ?>
            <tr class="firstrow"> 
            <td colspan="12"><div class="fenye"><?php echo ($page); ?></div></td>  
            </tr>
            <tr>
             <td colspan="12">
      <input type="hidden" name="isshop" value="<?php echo ($isshop); ?>">
      <input type="hidden" name="cate_id" value="<?php echo ($cate_id); ?>">
      <input type="submit" value="排序"></td>
   </tr>
   </form>
      </table>
    
</body>
</html>