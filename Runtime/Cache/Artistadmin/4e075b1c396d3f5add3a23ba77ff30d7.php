<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
      <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
      <title>个性化定制</title>
      <link rel="stylesheet" href="/001-jiyiwang/Public/Admin/css/common.css">
      <link rel="stylesheet" href="/001-jiyiwang/Public/Admin/css/news.css">
      <script type="text/javascript" src="/001-jiyiwang/Public/Static/jquery-1.9.1.min.js" ></script>
      <script>
        $(document).ready(function(){
          $('.enlighten').hover(function(){
            $(this).addClass('bing-bgcolor2');
          },function(){
            $(this).removeClass('bing-bgcolor2');
          });
        });
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
            
      </style>
</head>
<body> 
<div class="right-nav">
      <a class="home" href="" title=""></a><div class="con"><span style="color:#000;">首页</span> > 主页大图设置</div>
</div>

<div class="right-title">
      主页大图设置
</div>

      <table class="table">
       <form action="<?php echo U(MODULE_NAME.'/Homepage/doEditBg');?>" method="post" enctype="multipart/form-data">
            <tr>
                  <td width="45%" style="text-align:right;">图片</td>
                  <td style="text-align:left;">
                         
                                <img id="img2" <?php if(!empty($artist['homepagebg'])): ?>src="/001-jiyiwang/<?php echo ($artist['homepagebg']); ?>"<?php else: ?>src="/001-jiyiwang/Public/Admin/images/empty_thumb.gif"<?php endif; ?> width="300" height="119" />
                           <br>
                            (图片大小：988px*393px)
                            <input type="file" name='picurl2' id="picurl2" />
                  </td>
                        <script type="text/javascript" src="/001-jiyiwang/Public/Static/thumb2.js"></script>
                  
            </tr>
             
            <tr> 
                   
                  
              
                  <td colspan="2" style="text-align:center;">
                    <input type="submit" value="提交" />
                  </td>
            </tr>
          </form>
      </table>
</body>
</html>