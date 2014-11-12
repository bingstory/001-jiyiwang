<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
      <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
      <title>新闻列表</title>
      <link rel="stylesheet" href="/001-jiyiwang/Public/Admin/css/common.css">
      <link rel="stylesheet" href="/001-jiyiwang/Public/Admin/css/news.css">
      <script type="text/javascript" src="/001-jiyiwang/Public/Static/jquery-1.9.1.min.js" ></script>
      <script>
        $(document).ready(function(){
            $('tr').hover(function(){
                  $(this).addClass('bing-bgcolor2');
            },function(){
                  $(this).removeClass('bing-bgcolor2');
            }); 

            // 全选与反选操作
            
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
      <a class="home" href="" title=""></a><div class="con"><span style="color:#33ccff;">首页</span> > 新闻列表</div>
</div>

<div class="right-title">
      新闻列表<a href="<?php echo U(MODULE_NAME.'/News/addNews');?>" title="">[添加新闻]</a>
</div>

      <table class="table">
      <tr>
                  <form action="<?php echo U(MODULE_NAME.'/News/index');?>" method="post">
                  <td colspan="5"> 
                  分类：<select name="cate_id">
                  <option value="">--请选择--</option>
                  <?php if(is_array($category)): foreach($category as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></option><?php endforeach; endif; ?> 
                  </select>
                  <input type="submit" name="" value="搜索"> 
                  </td>
            </form>
                   
            </tr>
            <tr class="firstrow">
                  <td width="20px">ID</td>
                  <td>标题</td> 
                  <td width="70px">发布时间</td>
                  <td width="70px">所属分类</td>
                  <td width="130px">操作</td>
            </tr>
            <?php if(is_array($news)): foreach($news as $key=>$v): ?><tr> 
                   
                  <td align="right"><?php echo ($v["id"]); ?></td>
                  <td align="right" width="150px"><?php echo ($v["title"]); ?> 
                  </td> 
                  <td align="right"><?php echo (date('Y-m-d H:i:s',$v["pubtime"])); ?></td>
                  <td align="right">
                  <?php echo ($v["cate"]); ?>
                   <!--  -->
                  </td>
                  <td align="right">
                     
                    [<a href="<?php echo U(MODULE_NAME.'/News/newsEdit',array('id'=>$v['id'],'cate_id'=>$cate_id));?>">修改</a>]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    [<a onclick="return del()" href="<?php echo U(MODULE_NAME.'/News/delete',array('id'=>$v['id'],'cate_id'=>$cate_id));?>">删除</a>]
                   
                  </td>
            </tr><?php endforeach; endif; ?>
             <tr class="firstrow"> 
                  <td colspan="6"><div class="fenye"><?php echo ($page); ?><div></td>  
            </tr>
            
      </table>
</body>
</html>