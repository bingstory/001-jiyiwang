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
      <a class="home" href="" title=""></a><div class="con"><span style="color:#000;">首页</span> > 作品管理</div>
</div>

<div class="right-title">
      附件列表<a href="<?php echo U('/'.MODULE_NAME.'/Homepage/addAttachment/works_id/'.$works_id);?>" title="">[添加]</a>
</div>

      <table class="table">
        <tr>
          <td>编号</td>
          <td>文件名称</td>
          <td>封面</td>
          <td>下载所需积分</td>
          <td>文件地址</td>
          <td>操作</td>
        </tr>
        <?php if(is_array($attachment)): foreach($attachment as $key=>$v): ?><tr>
             <td><?php echo ($key+1); ?></td>
             <td><?php echo ($v["name"]); ?></td>
             <td><img src="/001-jiyiwang/<?php echo ($v["picurl"]); ?>" width="127" height="90" alt="<?php echo ($v["name"]); ?>" /></td>
             <td><?php echo ($v["credits"]); ?></td>
             <td><?php echo ($v["attachment"]); ?></td>
             <td>
               <a href="<?php echo U(MODULE_NAME.'/Works/editAttachment',array('id'=>$v['id'],'works_id'=>$v['works_id']));?>">[修改]</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <a href="<?php echo U(MODULE_NAME.'/Works/editAttachment',array('id'=>$v['id'],'works_id'=>$v['works_id']));?>">[删除]</a>
             </td>
           </tr><?php endforeach; endif; ?>
      </table>
</body>
</html>