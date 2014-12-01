<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<link rel="stylesheet" href="/001-jiyiwang/Public/Admin/css/common.css">

<script type="text/javascript" src="/001-jiyiwang/Public/Static/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/001-jiyiwang/Public/Admin/js/formverify.js"></script>
<script type="text/javascript" src="/001-jiyiwang/Public/Static/index.js"></script>
<head>
</head>
<body>
<div class="right-nav">
      <a class="home" href="" title=""></a><div class="con"><span style="color:#000;">首页</span> > 主页管理</div>
</div>

<div class="right-title">
      名家点评修改
</div>
       <form action="<?php echo U(MODULE_NAME.'/Homepage/doEditComment');?>" method="post" enctype="multipart/form-data">
            <table class="table">
                  <tr>
                        <td align="right">标题：</td>
                        <td>
                              <input type="text" size="68" name="title" value="<?php echo ($comment["title"]); ?>" />
                        </td>
                  </tr>
                  <tr>
                        <td width="100px;" align="right">点评人：</td>
                        <td>
                              <input type="text" name="celebrityname" maxlength="125" value="<?php echo ($comment["celebrityname"]); ?>" size="13"/>
                        </td>
                  </tr>
                 
                  <tr>
                        <td align="right">内容：</td>
                        <td >
                              <textarea id="content" name="content" cols="90" rows="5"><?php echo ($comment["content"]); ?></textarea>
                        </td>
                  </tr>
                  <tr>
                        <td colspan="2" align="center">
                              <input type="hidden" name="id" value="<?php echo ($comment["id"]); ?>" />
                              <input type="hidden" name="artist_id" value="<?php echo ($artist_id); ?>" />
                              <input type="submit" value="发布" />
                        </td>
                  </tr>
            </table>
       </form>
       
</body>
</html>