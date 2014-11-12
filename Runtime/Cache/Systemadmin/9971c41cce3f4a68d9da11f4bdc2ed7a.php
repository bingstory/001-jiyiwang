<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<link rel="stylesheet" href="/001-jiyiwang/Public/Admin/css/common.css">

<script type="text/javascript" src="/001-jiyiwang/Public/Static/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/001-jiyiwang/Public/Admin/js/formverify.js"></script>
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
      <a class="home" href="" title=""></a><div class="con"><span style="color:#33ccff;">首页</span> > 个性化定制添加</div>
</div>

<div class="right-title">
      添加个性化定制
</div>
       <form action="<?php echo U(MODULE_NAME.'/Customize/doAddNews');?>" method="post" enctype="multipart/form-data">
            <table class="table">
                    
                  <tr>
                        <td align="right">标题：</td>
                        <td>
                              <input type="text" size="68" name="title" /><label id="titleerror" for=""></label>
                        </td>
                  </tr>
                  <tr>
                        <td align="right">封面：</td>
                        <td>
                              <div style='width:120px; height:100px;'>
                                      <img id="img1" src="/001-jiyiwang/Public/Admin/images/empty_thumb.gif" width="199" height="128" />
                                  </div><br><br>
                                  (图片大小：199px*128px)
                                  <input type="file" name='picurl1' id="picurl1" />
                        </td>
                        <script type="text/javascript" src="/001-jiyiwang/Public/Static/thumb2.js"></script>
                  </tr>
                  <tr>
                        <td align="right">摘要：</td>
                        <td>
                              <textarea name="summary" rows="3" cols="60"></textarea>
                        </td>
                  </tr>
                  <tr>
                        <td align="right">关键词：</td>
                        <td>
                              <input type="text" name="keywords" maxlength="125" size="68"/><span>【仅用于SEO】</span>
                        </td>
                  </tr>
                  <tr>
                        <td align="right">描述：</td>
                        <td>
                              <textarea name="description" rows="3" cols="60"></textarea><span>【仅用于SEO】</span>
                        </td>
                  </tr>
                  <tr>
                        <td width="100px;" align="right">所属分类：</td>
                        <td>
                              <select name="cid" id="">
                                    <option value="">===请选择分类===</option>
                                    <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["html"]); echo ($v["name"]); ?></option><?php endforeach; endif; ?>
                              </select><label id="selecterror" for=""></label>
                        </td>
                  </tr>
                  
                   

                  <tr>
                        <td align="right">内容：</td>
                        <td >
                              <textarea id="content" name="content" cols="30" rows="10"></textarea><label id="contenterror" for=""></label>
                        </td>
                  </tr>
                  <tr>
                        <td colspan="2" align="center">
                              <input type="submit" value="发布" />
                        </td>
                  </td>
            </table>
       </form>
</body>
</html>