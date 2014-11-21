<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
      <link rel="stylesheet" href="/001-jiyiwang/Public/Admin/css/common.css">
<script type="text/javascript" src="/001-jiyiwang/Public/Static/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/001-jiyiwang/Public/Static/index.js"></script>
<script type="text/javascript" src="/001-jiyiwang/Data/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/001-jiyiwang/Data/ueditor/ueditor.all.min.js"></script>
<script>
      window.UEDITOR_HOME_URL = '/001-jiyiwang/Data/ueditor/';
      window.onload = function(){
            window.UEDITOR_CONFIG.initialFrameHeight = 450;
            window.UEDITOR_CONFIG.initialFrameWidth = 800;
            window.UEDITOR_CONFIG.savePath = ['Uploads'];
            window.UEDITOR_CONFIG.imageUrl = "<?php echo U(MODULE_NAME.'/Common/c_upload',array('folder'=>'News'));?>";       //图片上传提交地址
            window.UEDITOR_CONFIG.imagePath = "/001-jiyiwang/Uploads/";
            UE.getEditor('content');
      }
</script>
<head>
</head>
<body>
<div class="right-nav">
      <a class="home" href="" title=""></a><div class="con"><span style="color:#33ccff;">首页</span> > 主页管理</div>
</div>

<div class="right-title">
      视频编辑
</div>
       <form action="<?php echo U(MODULE_NAME.'/Homepage/doEditVideo');?>" method="post" enctype="multipart/form-data">
            <table class="table">
                   
                  <tr>
                        <td align="right">标题：</td>
                        <td>
                              <input type="text" name="title" size="68" value="<?php echo ($video["title"]); ?>" />
                        </td>
                  </tr>
                  <tr>
                        <td align="right">封面：</td>
                        <td>
                              <div style='width:199px; height:128px;'>
                              <img id="img1" <?php if(!empty($video['picurl'])): ?>src="/001-jiyiwang/<?php echo ($video['picurl']); ?>"<?php else: ?>src="/001-jiyiwang/Public/Admin/images/empty_thumb.gif"<?php endif; ?> width="207" height="120" />
                                  </div>
                                  (图片大小：207px*120px)
                                  <input type="file" name='picurl1' id="picurl1" />
                        </td>
                        <script type="text/javascript" src="/001-jiyiwang/Public/Static/thumb2.js"></script>
                  </tr>
                  <tr>
                        <td align="right">详细页封面：</td>
                        <td>
                              <div style='width:120px; height:100px;'>
                                      <img id="img2" <?php if(!empty($video['picurl'])): ?>src="/001-jiyiwang/<?php echo ($video['picurl']); ?>"<?php else: ?>src="/001-jiyiwang/Public/Admin/images/empty_thumb.gif"<?php endif; ?> width="199" height="188" />
                                  </div><br><br><br><br><br><br>
                                  (图片大小：421px*387px)
                                  <input type="file" name='picurl2' id="picurl2" />
                        </td>
                        <script type="text/javascript" src="/001-jiyiwang/Public/Static/thumb2.js"></script>
                  </tr>
                  <tr>
                        <td align="right">摘要：</td>
                        <td>
                              <textarea name="summary" rows="3" cols="60"><?php echo ($video["summary"]); ?></textarea>
                        </td>
                  </tr>
                  <tr>
                        <td align="right">关键词：</td>
                        <td>
                              <input type="text" name="keywords" maxlength="125" size="68" value="<?php echo ($video["keywords"]); ?>"/><span>【仅用于SEO】</span>
                        </td>
                  </tr>
                  <tr>
                        <td align="right">描述：</td>
                        <td>
                              <textarea name="description" rows="3" cols="60"><?php echo ($video["description"]); ?></textarea><span>【仅用于SEO】</span>
                        </td>
                  </tr>
                  <tr>
                        <td align="right">内容：</td>
                        <td>
                              <textarea name="content" id="content" cols="30" rows="10"><?php echo ($video["content"]); ?></textarea>
                        </td>
                  </tr>
                  <tr>
                        <td colspan="2" align="center">
                              <input type="hidden" name="id" value="<?php echo ($video["id"]); ?>" />
                              <input type="hidden" name="cate_id" value="<?php echo ($cate_id); ?>" />
                              <input type="hidden" name="prevurl" value="<?php echo $_SERVER['HTTP_REFERER']?>" />
                              <input type="submit" value="保存修改" />
                        </td>
                  </tr>
            </table>
       </form>
</body>
</html>