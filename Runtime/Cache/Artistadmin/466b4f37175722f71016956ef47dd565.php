<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
      <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
      <title>订单管理</title>
      <link rel="stylesheet" href="/001-jiyiwang/Public/Admin/css/common.css">
      <link rel="stylesheet" href="/001-jiyiwang/Public/Admin/css/news.css">
      <script type="text/javascript" src="/001-jiyiwang/Public/Static/jquery-1.9.1.min.js" ></script>
      <script>
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
            tr:hover{ background: #ebeded;}
      </style>
</head>
<body> 
<div class="right-nav">
      <a class="home" href="" title=""></a><div class="con"><span style="color:#000;">首页</span> > 订单管理</div>
</div>

<div class="right-title">
  订单列表
</div>

      <table class="table">
      
            <tr>
                    
                    <td width="60">订单编号</td>
                    <td width="30">商品编号</td>
                    <td width="60">订单时间</td>
                    <td width="70">收件人信息（地址/姓名/电话）</td>
                    <td width="70">付款状态</td>
                    <td width="70">发货状态</td>
                    
              </tr>
            <?php if(is_array($orderlist)): foreach($orderlist as $key=>$v): ?><tr>
               <td><?php echo ($v["ordid"]); ?></td>
               <td><?php echo ($v["proid"]); ?></td>
                
               <td><?php echo (date("Y-m-d H:i:s",$v["ordtime"])); ?></td>
                
               <td><?php echo ($v["addrname"]); ?></td>
               <td><?php if($v["ordstatus"] == 1): ?>付款成功<?php else: ?>未付款<?php endif; ?></td>
               <td width="70">发货状态</td><?php endforeach; endif; ?>
            <tr class="firstrow"> 
            <td colspan="12"><div class="fenye"><?php echo ($page); ?></div></td>  
            </tr>
             
   
      </table>
    
</body>
</html>