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
      <a class="home" href="" title=""></a><div class="con"><span style="color:#000;">首页</span> > 关于我们</div>
</div>

<div class="right-title">
      关于我们<a href="<?php echo U(MODULE_NAME.'/About/add');?>" title="">[添加]</a>
</div>

      <table class="table">
       
            <tr class="firstrow">
                  <td width="20px">ID</td>
                  <td>标题</td> 
                  <td width="70px">发布时间</td>
                  <td width="70px">所属分类</td>
                  <td width="70px">排序</td> 
                  <td width="130px">操作</td>
            </tr>
            
            <form method="post" action=<?php echo U(MODULE_NAME.'/About/sort');?>>
            <?php if(is_array($list)): foreach($list as $key=>$v): ?><tr> 
                   
                  <td align="right"><?php echo ($v["id"]); ?></td>
                  <td align="right" width="150px"><?php echo ($v["title"]); ?> 
                  </td> 
                  <td align="right"><?php echo (date('Y-m-d H:i:s',$v["pubtime"])); ?></td>
                  <td align="right"><?php echo ($v["cate"]); ?></td>
                  <td align="right"><input class="input50" type="text" value="<?php echo ($v["sort"]); ?>" name="<?php echo ($v['id']); ?>"></td>
                  <td align="right">
                    [<a href="<?php echo U(MODULE_NAME.'/About/edit',array('id'=>$v['id'],'cate_id'=>$cate_id));?>">修改</a>]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    [<a onclick="return del()" href="<?php echo U(MODULE_NAME.'/About/delete',array('id'=>$v['id'],'cate_id'=>$cate_id));?>">删除</a>]
                  </td>
            </tr><?php endforeach; endif; ?>
            <tr class="firstrow"> 
                  <td colspan="6"><input type="submit" value="排序" /></td>  
            </tr>
            
          </form>
            <?php if($pagecount > 1): ?><tr class="firstrow"> 
                  <td colspan="6"><div class="fenye"><?php echo ($page); ?><div></td>  
             </tr><?php endif; ?>
      </table>
</body>
</html>