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
            window.UEDITOR_CONFIG.imageUrl = "<?php echo U(MODULE_NAME.'/Common/c_upload',array('folder'=>'Works'));?>";       //图片上传提交地址
            window.UEDITOR_CONFIG.imagePath = "/001-jiyiwang/Uploads/";
            UE.getEditor('content');
      }
</script>
 
<head>
</head>
<body>
<div class="right-nav">
      <a class="home" href="" title=""></a><div class="con"><span style="color:#000;">首页</span> > <?php echo ($pos); ?>管理</div>
</div>

<div class="right-title">
      <?php echo ($pos); ?>修改
</div>
       <form action="<?php echo U(MODULE_NAME.'/Works/doEdit');?>" method="post" enctype="multipart/form-data">
            <table class="table">
                  <tr>
                        <td align="right">作品编号：</td>
                        <td>
                              <?php echo ($works["works_id"]); ?>
                        </td>
                  </tr>
                  <tr>
                        <td align="right">名称：</td>
                        <td>
                              <?php echo ($works["title"]); ?>
                        </td>
                  </tr>
                  <tr>
                        <td align="right">艺术家姓名：</td>
                        <td>
                              <?php echo ($works["artistname"]); ?>
                        </td>
                  </tr>
                  <tr><td class="td-left">属性：</td><td class="td-right">
<?php if(is_array($attr)): foreach($attr as $key=>$v): ?><input type="checkbox" name="attr[]" value="<?php echo ($v["id"]); ?>" <?php if($isattr[$v['id']]): ?>checked='checked'<?php else: endif; ?>><?php echo ($v["name"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php endforeach; endif; ?>
</td></tr>
                  <tr>
                        <td colspan="2" align="center">
                              <input type="hidden" name="cate_id" value="<?php echo ($cate_id); ?>" />
                              <input type="hidden" name="id" value="<?php echo ($works["id"]); ?>" />
                              <input type="hidden" name="isshop" value="<?php echo ($isshop); ?>" />
                              <input type="submit" value="发布" />
                        </td>
                  </tr>
            </table>
       </form>
       
</body>
</html>