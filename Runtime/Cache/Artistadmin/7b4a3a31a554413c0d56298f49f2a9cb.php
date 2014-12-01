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
      添加附件
</div>
     <form method="post" enctype="multipart/form-data" action="<?php echo U('/'.MODULE_NAME.'/Works/doEditAttachment');?>">
      <table class="table">
        <tr>
          <td class="td-left">作品编号：</td><td class="td-right"><?php echo ($works["works_id"]); ?></td>
        </tr>
        <tr>
          <td class="td-left">作品名称：</td><td class="td-right"><?php echo ($works["title"]); ?></td>
        </tr>
        <tr>
          <td class="td-left">附件名称：</td><td class="td-right"><input type="text" name="name" value="<?php echo ($attachment["name"]); ?>" /></td>
        </tr>
        <tr>
          <td class="td-left">下载所需积分：</td><td class="td-right"><input type="text" name="credits" size="4" value="<?php echo ($attachment["credits"]); ?>" />(*只填数字)</td>
        </tr>
        <tr>
          <td class="td-left">封面：</td><td class="td-right">
            <div style='width:120px; height:100px;'>
                                      <img id="img1" <?php if(!empty($attachment['picurl'])): ?>src="/001-jiyiwang/<?php echo ($attachment['picurl']); ?>"<?php else: ?>src="/001-jiyiwang/Public/Admin/images/empty_thumb.gif"<?php endif; ?> width="127" height="90" />
                                  </div>
                                  (图片大小：127px*90px)
                                  <input type="file" name='picurl' id="picurl1" />
                        <script type="text/javascript" src="/001-jiyiwang/Public/Static/thumb2.js"></script>
          </td>
        </tr>
        <tr>
          <td class="td-left">文件上传：</td><td class="td-right"><input type="file" name="attachment" /></td>
        </tr>
        <tr>
          <td colspan="2" style=" text-align:left; padding-left:250px;">
          <input type="hidden" name="id" value="<?php echo ($attachment['id']); ?>" />
          <input type="hidden" name="works_id" value="<?php echo ($works['id']); ?>" />
          <input type="submit" value="确定上传" />
          </td>
        </tr>
      </table>
    </form>
</body>
</html>