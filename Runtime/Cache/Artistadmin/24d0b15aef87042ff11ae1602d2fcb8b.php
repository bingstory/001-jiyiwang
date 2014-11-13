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
      <a class="home" href="" title=""></a><div class="con"><span style="color:#33ccff;">首页</span> > 作品管理</div>
</div>

<div class="right-title">
      作品列表<a href="<?php echo U(MODULE_NAME.'/Works/add');?>" title="">[添加]</a>
</div>

      <table class="table">
        <tr>
                  <form action="<?php echo U(MODULE_NAME.'/Works/index');?>" method="post">
                  <td colspan="9"> 
                  分类：<select name="cate_id">
                  <option value="">--请选择--</option>
                  <?php if(is_array($category)): foreach($category as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></option><?php endforeach; endif; ?> 
                  </select>
                  <input type="submit" name="" value="搜索"> 
                  </td>
            </form>
            </tr>
            <tr> 
                    <td width="100">作品编号</td>
                    <td>标题</td>
                    <td width="100">封面</td>
                    <td>所属分类</td>
                    <td width="100">艺术家姓名</td>
                    <td>评论管理</td>
                    <td>附件管理</td>
                    <td>推送到商铺</td>
                    <td>操作</td>
              </tr>
            <?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
               <td><?php echo ($v["works_id"]); ?></td>
               <td><?php echo ($v["title"]); ?></td>
               <td><img src="/001-jiyiwang/<?php echo ($v["thumb"]); ?>" alt="" width="100" height="90" style="border:3px solid #DCE2F3;"/></td>
               <td><?php echo ($v["cate"]); ?></td>
               <td><?php echo ($v["artistname"]); ?></td>
               <td><a href="">[评论管理]</a></td>
               <td><a href="">[附件管理]</a></td>
               <td>
               <?php if($v["rec2shop"] == 1): ?><a style="color:green;" href="<?php echo U(MODULE_NAME.'/Works/rec2shop',array('id'=>$v['id'],'rec2shop'=>0,'cate_id'=>$cate_id));?>">是</a><?php else: ?>
               <a style="color:red;" href="<?php echo U(MODULE_NAME.'/Works/rec2shop',array('id'=>$v['id'],'rec2shop'=>1,'cate_id'=>$cate_id));?>">否</a><?php endif; ?>
               </td>
               <td>
                 <span class="modify"><a href="<?php echo U(MODULE_NAME.'/Works/edit',array('id'=>$v['id'],'cate_id'=>$cate_id));?>">[修改]</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="delete"><a onclick="return del()" href="<?php echo U(MODULE_NAME.'/Works/delete',array('id'=>$v['id'],'cate_id'=>$cate_id));?>">[删除]</a></span>
               </td>
             </tr><?php endforeach; endif; ?>
            <tr class="firstrow"> 
            <td colspan="9"><div class="fenye"><?php echo ($page); ?></div></td>  
            </tr>
           
             
            
      </table>
</body>
</html>