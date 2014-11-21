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
      <a class="home" href="" title=""></a><div class="con"><span style="color:#33ccff;">首页</span> > 主页管理</div>
</div>

<div class="right-title">
      视频列表<a href="<?php echo U(MODULE_NAME.'/Homepage/addVideo');?>" title="">[添加]</a>
</div>

      <table class="table">
       
            <tr> 
                  <td>
                  <?php if(is_array($list)): foreach($list as $key=>$v): ?><div class="enlighten">
                    <img src="/001-jiyiwang/<?php echo ($v["picurl"]); ?>">

                    <div class="con">【标题】：<?php echo (msubstr($v["title"],0,10,1)); ?></div>
                    <div class="con">【简介】：<?php echo (msubstr($v["summary"],0,40,1)); ?></div>
                    <div class="action"><span class="modify"><a href="<?php echo U(MODULE_NAME.'/Homepage/editVideo',array('id'=>$v['id']));?>">[修改]</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="delete"><a onclick="return del()" href="<?php echo U(MODULE_NAME.'/Homepage/deleteVideo',array('id'=>$v['id']));?>">[删除]</a></span></div>
                  </div><?php endforeach; endif; ?> 
                  </td>
                  
            </tr>
            <tr class="firstrow"> 
            <td><div class="fenye"><?php echo ($page); ?></div></td>  
            </tr>
           
             
            
      </table>
</body>
</html>