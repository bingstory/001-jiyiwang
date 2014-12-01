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
            window.UEDITOR_CONFIG.toolbars = "";
            UE.getEditor('content');
      }
</script>
 
<head>
</head>
<body>
<div class="right-nav">
      <a class="home" href="" title=""></a><div class="con"><span style="color:#000;">首页</span> > <?php echo ($pos); ?>管理</div>
</div>
<form action="<?php echo U(MODULE_NAME.'/Works/goBack');?>" method="post">
<div class="right-title">
      <?php echo ($pos); ?>查看&nbsp;&nbsp;&nbsp;<input style="cursor:pointer;" type="submit" value="&nbsp;&nbsp;返&nbsp;&nbsp;回&nbsp;&nbsp;" />
      <input type="hidden" name="prevurl" value="<?php echo $_SERVER['HTTP_REFERER']?>" />
      <input type="hidden" name="cate_id" value="<?php echo ($cate_id); ?>" />
                              <input type="hidden" name="isshop" value="<?php echo ($isshop); ?>" />
</div>
       
            <table class="table">
                  <tr>
                        <td align="right">作品编号：</td>
                        <td>
                              <?php echo ($works["works_id"]); ?>"
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
                  <tr>
                        <td align="right">创作日期：</td>
                        <td>
                             <?php echo ($works["createyear"]); ?>
                        </td>
                  </tr>
                  <tr>
                        <td width="100px;" align="right">个人分类（艺术家自己创建的分类）：</td>
                        <td>
                              <?php echo ($works["cate"]); ?>
                        </td>
                  </tr>
                  <tr>
                        <td width="100px;" align="right">商城分类：</td>
                        <td>
                              <?php echo ($works["shopcate"]); ?>
                        </td>
                  </tr>
                  <tr>
                        <td align="right">封面：</td>
                        <td>
                              <div style='width:120px; height:100px;'>
                                      <img id="img1" <?php if(!empty($works['thumb'])): ?>src="/001-jiyiwang/<?php echo ($works['thumb']); ?>"<?php else: ?>src="/001-jiyiwang/Public/Admin/images/empty_thumb.gif"<?php endif; ?> width="180" height="165" />
                                  </div><br><br><br><br><br>
                                  
                        </td>
                        
                  </tr>
                  <tr>
                        <td align="right">封面：<br>(作品需要推送到商铺时上传)</td>
                        <td>
                              <div style='width:120px; height:100px;'>
                                      <img id="img2" <?php if(!empty($works['thumb2'])): ?>src="/001-jiyiwang/<?php echo ($works['thumb2']); ?>"<?php else: ?>src="/001-jiyiwang/Public/Admin/images/empty_thumb.gif"<?php endif; ?> width="156" height="200" />
                                  </div><br><br><br><br><br><br><br>
                                  
                        </td>
                        <script type="text/javascript" src="/001-jiyiwang/Public/Static/thumb2.js"></script>
                  </tr>
                  <tr>
                        <td align="right">材质：</td>
                        <td>
                              <?php echo ($works["material"]); ?>
                        </td>
                  </tr>
                  <tr>
                        <td align="right">下载所需积分：</td>
                        <td>
                              <?php echo ($works["credit"]); ?>
                        </td>
                  </tr>
                  <tr>
                        <td align="right">价格：</td>
                        <td>
                              <?php echo ($works["createyear"]); ?>
                        </td>
                  </tr>
                  <tr>
                        <td align="right">运费：</td>
                        <td>
                              <?php echo ($works["expressfee"]); ?>
                        </td>
                  </tr>
                  <tr>
                        <td align="right">尺寸：</td>
                        <td>
                              <?php echo ($works["size"]); ?>
                        </td>
                  </tr>
                  <tr>
                        <td align="right">推荐指数：</td>
                        <td>
                              <?php echo ($works["star"]); ?>
                        </td>
                  </tr>
                  <tr>
                        <td align="right">关注人数：</td>
                        <td>
                              <?php echo ($works["concern"]); ?>
                        </td>
                  </tr>
                  <tr>
                        <td align="right">喜欢人数：</td>
                        <td>
                              <?php echo ($works["favor"]); ?>
                        </td>
                  </tr>
                  <tr>
                        <td align="right">关键词：</td>
                        <td>
                              <?php echo ($works["keywords"]); ?>
                        </td>
                  </tr>
                  <tr>
                        <td align="right">描述：</td>
                        <td>
                              <textarea name="description" rows="3" cols="60"><?php echo ($works["description"]); ?></textarea>
                        </td>
                  </tr>
                  
                  
                   

                  <tr>
                        <td align="right">作品简介：</td>
                        <td >
                              <textarea id="content" name="content" cols="30" rows="10"><?php echo ($works["content"]); ?></textarea>
                        </td>
                  </tr>
                  <!-- <tr>
                        <td align="left" colspan="2">作品推送到商铺时，须填写以下内容</td>
                  </tr> -->
                  
            </table>
      </form>
       
</body>
</html>