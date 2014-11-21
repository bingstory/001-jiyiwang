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
      <a class="home" href="" title=""></a><div class="con"><span style="color:#33ccff;">首页</span> > 美育启蒙添加</div>
</div>

<div class="right-title">
      添加美育启蒙
</div>
       <form action="<?php echo U(MODULE_NAME.'/Works/doAdd');?>" method="post" enctype="multipart/form-data">
            <table class="table">
                  <tr>
                        <td align="right">作品编号：</td>
                        <td>
                              <input type="text" size="18" name="works_id" />
                        </td>
                  </tr>
                  <tr>
                        <td align="right">名称：</td>
                        <td>
                              <input type="text" size="68" name="title" />
                        </td>
                  </tr>
                  <tr>
                        <td align="right">艺术家姓名：</td>
                        <td>
                              <input type="text" size="18" name="artistname" />
                        </td>
                  </tr>
                  <tr>
                        <td align="right">创作日期：</td>
                        <td>
                              <input type="text" size="4" name="createyear" />年（*只填写数字）
                        </td>
                  </tr>
                  <tr>
                        <td width="100px;" align="right">个人分类（艺术家自己创建的分类）：</td>
                        <td>
                              <select name="cate_id" id="">
                                    <option value="">请选择分类</option>
                                    <?php if(is_array($category)): foreach($category as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["html"]); echo ($v["name"]); ?></option><?php endforeach; endif; ?>
                              </select><label id="selecterror" for=""></label>
                        </td>
                  </tr>
                  <tr>
                        <td width="100px;" align="right">商城分类：</td>
                        <td>
                              <select name="shopcate_id" id="">
                                    <option value="">请选择分类</option>
                                    <?php if(is_array($shopcategory)): foreach($shopcategory as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["html"]); echo ($v["name"]); ?></option><?php endforeach; endif; ?>
                              </select>
                        </td>
                  </tr>
                  <tr>
                        <td align="right">封面：</td>
                        <td>
                              <div style='width:120px; height:100px;'>
                                      <img id="img1" src="/001-jiyiwang/Public/Admin/images/empty_thumb.gif" width="180" height="165" />
                                  </div><br><br><br><br><br>
                                  (图片大小：421px*387px)
                                  <input type="file" name='thumb' id="picurl1" />
                        </td>
                        
                  </tr>
                  <tr>
                        <td align="right">封面：<br>(作品需要推送到商铺时上传)</td>
                        <td>
                              <div style='width:120px; height:100px;'>
                                      <img id="img2" src="/001-jiyiwang/Public/Admin/images/empty_thumb.gif" width="156" height="200" />
                                  </div><br><br><br><br><br><br><br>
                                  (图片大小：156px*200px)
                                  <input type="file" name='thumb2' id="picurl2" />
                        </td>
                        <script type="text/javascript" src="/001-jiyiwang/Public/Static/thumb2.js"></script>
                  </tr>
                  <tr>
                        <td align="right">材质：</td>
                        <td>
                              <input type="text" name="material" maxlength="125" size="18"/>
                        </td>
                  </tr>
                  <tr>
                        <td align="right">下载所需积分：</td>
                        <td>
                              <input type="text" name="credit" maxlength="125" size="5"/>积分（*只填写数字）
                        </td>
                  </tr>
                  <tr>
                        <td align="right">价格：</td>
                        <td>
                              <input type="text" name="price" maxlength="125" size="5"/>元（人民币）（*只填写数字）
                        </td>
                  </tr>
                  <tr>
                        <td align="right">运费：</td>
                        <td>
                              <input type="text" name="expressfee" maxlength="125" size="5"/>元（人民币）（*只填写数字）
                        </td>
                  </tr>
                  <tr>
                        <td align="right">尺寸：</td>
                        <td>
                              <input type="text" name="size" maxlength="125" size="15"/>（如：60*80cm）
                        </td>
                  </tr>
                  <tr>
                        <td align="right">推荐指数：</td>
                        <td>
                              <input type="text" name="star" maxlength="125" size="5"/>星（*只填写数字，最高4颗星）
                        </td>
                  </tr>
                  <tr>
                        <td align="right">关注人数：</td>
                        <td>
                              <input type="text" name="concern" maxlength="125" size="5"/>（*只填写数字）
                        </td>
                  </tr>
                  <tr>
                        <td align="right">喜欢人数：</td>
                        <td>
                              <input type="text" name="favor" maxlength="125" size="5"/>（*只填写数字）
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
                        <td align="right">作品简介：</td>
                        <td >
                              <textarea id="content" name="content" cols="30" rows="10"></textarea><label id="contenterror" for=""></label>
                        </td>
                  </tr>
                  <!-- <tr>
                        <td align="left" colspan="2">作品推送到商铺时，须填写以下内容</td>
                  </tr> -->
                  
                  <tr>
                        <td colspan="2" align="center">
                              <input type="submit" value="发布" />
                        </td>
                  </tr>
            </table>
       </form>
       
</body>
</html>