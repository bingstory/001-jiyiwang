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
      名家点评列表<a href="<?php echo U(MODULE_NAME.'/Homepage/addComment');?>" title="">[添加]</a>
</div>

      <table class="table">
       
            <tr class="firstrow">
                  <td width="20px">ID</td>
                  <td>标题</td> 
                  <td>点评人</td> 
                  <td>内容</td>
                  <td>发布时间</td>
                  <td>操作</td>
            </tr>
            <?php if(is_array($list)): foreach($list as $key=>$v): ?><tr> 
                   
                  <td align="right"><?php echo ($v["id"]); ?></td>
                  <td align="right"><?php echo ($v["title"]); ?> </td> 
                  <td align="right" width="150px"><?php echo ($v["celebrityname"]); ?> </td> 
                  <td align="right"><?php echo ($v["content"]); ?></td>
                  <td align="right" width="170"><?php echo (date('Y-m-d H:i:s',$v["pubtime"])); ?></td>
                  <td align="right" width="170">
                    [<a href="<?php echo U(MODULE_NAME.'/Homepage/editComment',array('id'=>$v['id'],'artist_id'=>$artist_id));?>">修改</a>]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    [<a onclick="return del()" href="<?php echo U(MODULE_NAME.'/Homepage/deleteComment',array('id'=>$v['id'],'artist_id'=>$artist_id));?>">删除</a>]
                  </td>
            </tr><?php endforeach; endif; ?>
             <tr class="firstrow"> 
                  <td colspan="6"><div class="fenye"><?php echo ($page); ?><div></td>  
            </tr>
      </table>
</body>
</html>