<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($seo_title); ?></title>
<meta name="keywords" content="<?php echo ($seo_keywords); ?>">
<meta name="description" content="<?php echo ($seo_description); ?>">
<link href="/001-jiyiwang/Public/Home/css/style.css" rel="stylesheet" type="text/css" />

 <script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
        <script type="text/javascript" src="/001-jiyiwang/Public/Home/js/jquery-1.3.1.js"></script>
        <script type="text/javascript">
			$(document).ready(function(){
				//To switch directions up/down and left/right just place a "-" in front of the top/left attribute
				//Vertical Sliding
				$('.boxgrid.slidedown').hover(function(){
					$(".cover", this).stop().animate({top:'-242px'},{queue:false,duration:300});
				}, function() {
					$(".cover", this).stop().animate({top:'0px'},{queue:false,duration:300});
				});
				//Horizontal Sliding
				$('.boxgrid.slideright').hover(function(){
					$(".cover", this).stop().animate({left:'252px'},{queue:false,duration:300});
				}, function() {
					$(".cover", this).stop().animate({left:'0px'},{queue:false,duration:300});
				});
				//Diagnal Sliding
				$('.boxgrid.thecombo').hover(function(){
					$(".cover", this).stop().animate({top:'242px', left:'252px'},{queue:false,duration:300});
				}, function() {
					$(".cover", this).stop().animate({top:'0px', left:'0px'},{queue:false,duration:300});
				});
				//Partial Sliding (Only show some of background)
				$('.boxgrid.peek').hover(function(){
					$(".cover", this).stop().animate({top:'90px'},{queue:false,duration:160});
				}, function() {
					$(".cover", this).stop().animate({top:'0px'},{queue:false,duration:160});
				});
				//Full Caption Sliding (Hidden to Visible)
				$('.boxgrid.captionfull').hover(function(){
					$(".cover", this).stop().animate({top:'160px'},{queue:false,duration:160});
				}, function() {
					$(".cover", this).stop().animate({top:'242px'},{queue:false,duration:160});
				});
				//Caption Sliding (Partially Hidden to Visible)
				$('.boxgrid.caption').hover(function(){
					$(".cover", this).stop().animate({top:'160px'},{queue:false,duration:160});
				}, function() {
					$(".cover", this).stop().animate({top:'220px'},{queue:false,duration:160});
				});
			});
		</script>
		<script type="text/javascript" src="/001-jiyiwang/Public/Home/js/jquery.min.js"></script>
        <script type="text/javascript" src="/001-jiyiwang/Public/Home/js/jquery.jslides.js"></script>
		
<link href="/001-jiyiwang/Public/Home/css/lanrenzhijia.css" type="text/css" rel="stylesheet" />
<script type="text/javascript">
    function nTabs(thisObj,Num){
    if(thisObj.className == "active")return;
    var tabObj = thisObj.parentNode.id;
    var tabList = document.getElementById(tabObj).getElementsByTagName("li");
    for(i=0; i <tabList.length; i++)
    {
    if (i == Num)
    {
    thisObj.className = "active";
    document.getElementById(tabObj+"_Content"+i).style.display = "block";
    }else{
    tabList[i].className = "normal";
    document.getElementById(tabObj+"_Content"+i).style.display = "none";
    }
    }
    }
    </script>
 
<script src="/001-jiyiwang/Public/Home/js/jquery.min.js"></script>
<script>
$(function(){
  //菜单隐藏展开
  var tabs_i=0
  $('.vtitle').click(function(){
    var _self = $(this);
    var j = $('.vtitle').index(_self);
    if( tabs_i == j ) return false; tabs_i = j;
    $('.vtitle em').each(function(e){
      if(e==tabs_i){
        $('em',_self).removeClass('v01').addClass('v02');
      }else{
        $(this).removeClass('v02').addClass('v01');
      }
    });
    $('.vcon').slideUp().eq(tabs_i).slideDown();
  });
})
</script>



</head>

<body>
 <!-- 头部 -->
 
<div id="header">
<div id="header_top">
<div id="width_988">
<div class="fl_l top_t1">
<div class="fl_l top1"><h1>您好,<a style="color:#fff;" href="<?php echo U('/'.MODULE_NAME.'/User1/homepage');?>"><?php echo msubstr($_SESSION['fusername'],0,3);?></a>！欢迎来到集艺网</h1></div>
    <?php if(empty($_SESSION['fusername'])): ?><div class="fl_r top2">
    <ul>
    <li><a href="<?php echo U('/'.MODULE_NAME.'/login');?>">登录</a></li>
    <li><a href="<?php echo U('/'.MODULE_NAME.'/reg');?>">注册</a></li>
    </ul>
    </div>
    <?php else: ?>
    <div class="fl_r top2">
    <ul>
    <li><a href="<?php echo U('/'.MODULE_NAME.'/logout');?>">[退出]</a></li>
    </ul>
    </div><?php endif; ?>
</div>

<div class="fl_r top_t2">
<div class="fl_l top_1">
<form action="" method="get">
<input name="" type="text" style="height: 23px;" />
</form>

</div>
<div class="fl_r top_2"><input name="" type="button" /></div> 
</div>
</div>
</div>
<div id="header_nav">
<div id="width_988">
<div class="fl_l logo"><a href="/001-jiyiwang"><img src="/001-jiyiwang/Public/Home/images/pic1_07.jpg" width="223" height="74" /></a></div>

<div class="fl_r nav nav1">
<ul>
<li><a href="/001-jiyiwang">首页</a></li>
<li><a href="<?php echo U('/'.MODULE_NAME.'/a');?>">艺术家</a></li>
<li><a href="<?php echo U('/'.MODULE_NAME.'/news');?>">集艺新闻</a></li>
<li><a href="<?php echo U('/'.MODULE_NAME.'/s');?>">艺术商城</a></li>
<li><a href="<?php echo U('/'.MODULE_NAME.'/c');?>">个性化定制</a></li>
<li><a href="<?php echo U('/'.MODULE_NAME.'/r');?>">明日之星</a></li>
<li><a href="<?php echo U('/'.MODULE_NAME.'/p');?>">出版中心</a></li>
<li><a href="<?php echo U('/'.MODULE_NAME.'/e');?>">美育启蒙</a></li>
<li class="last"><a href="<?php echo U('/'.MODULE_NAME.'/u');?>">关于我们</a></li>
</ul> 
 

</div> 
</div>
</div>
<!-- Banner -->

<!-- Banner END-->
</div>

 <!-- 头部 END -->

 <!-- 主体 -->
 
<div id="middle">
<div id="width_988">

<div id="p_p_box1"><img src="/001-jiyiwang/Public/Home/images/p_p1_07.jpg" width="988" height="148" /></div>
  
  <div id="gao_p"></div>

<div id="x_box2">

<div class="x_b2_title">
<p>位置：<a href="index.html">首页</a> ><a href="shop.html">艺术商城</a> > 商品订单</p>
</div>
</div>
<div id="jy_box2">
<div class="fl_l jy2_nav">
<ul>
<li><a href="#">所有订单</a></li>      
<li><a href="#">待付款（0）</a></li> 
<li><a href="#">待发货（0）</a></li> 
<li><a href="#">待收货（5）</a></li> 
<li><a href="#">待评价（2）</a></li>
</ul>
</div>
<div class="fl_r jy2_tong"><span class="fl_l laji"><img src="/001-jiyiwang/Public/Home/images/jiaoyi1_03.jpg" width="16" height="16" /></span> <span class="fl_r hs">订单回收站</span></div>
</div>
  <div id="gao_p"></div>
    
  <div id="jy_box3">

    <div class="jy_b3_title">
    <div class="fl_l jy_b3_l"><h3>我的购物车</h3></div>
        <div class="fl_r jy_b3_r">
        <ul>
        <li><a href="#"><img src="/001-jiyiwang/Public/Home/images/jiaoyi1_07.jpg" /></a></li>
        <li><a href="#">下一页 <img src="/001-jiyiwang/Public/Home/images/jiaoyi1_09.jpg" /></a></li>
        </ul>
        </div>
     </div>
  
     <div class="x_b3_bottom">
     <div class="jy_b3_text">
     <div class="jy_b3_t4">
     
     <div class="t4_text">
     <div class="fl_l t4_l">确认订单信息</div>
     <div class="fl_r t4_r">
     <ul>
     <li>总价</li>
     <li>数量</li>
     <li>交易状态</li>
      <li class="last">操作</li>
     
     </ul>
     </div>
     </div>
     <!-- ************************orderlist******foreach*start******************************* -->
     <?php if(is_array($orderlist)): foreach($orderlist as $key=>$v): ?><div class="pro1">
     <p><span class="fl_l dp">店铺 ：<span><?php echo ($v["artistname"]); ?>个人店铺</span></span>
     <span class="fl_r tong"><a href="#"><img src="/001-jiyiwang/Public/Home/images/jiaoyi1_14.jpg" /></a></span>
     </p>
     <div class="wupin">
     <div class="wupin1">
     <div class="td-inner"><div class="cart-checkbox "><input class="J_CheckBoxItem" id="J_CheckBox_83766958476" type="checkbox" name="items[]" value="83766958476"></div></div>
     <div class="fl_l t4_p"><a href="<?php echo U('/'.MODULE_NAME.'/gs2_'.$v['productid']);?>"><img src="/001-jiyiwang/<?php echo ($v["thumb"]); ?>" width="96" height="96" /></a></div>
     <div class="fl_l t4_t">
     <h3><?php echo ($v["ordtitle"]); ?></h3>
     <div class="t4_t_t1">
     <ul>
     <li>艺术家：<?php echo ($v["artistname"]); ?></li>                            
     <li>材质：<?php echo ($v["material"]); ?></li> 
     <li class="yf"><span>￥<?php echo ($v["ordfee"]); ?></span><br>(含运费：<?php echo ($v["expressfee"]); ?>) </li>                
     <li>尺寸：<?php echo ($v["size"]); ?> </li>                   
     <li>上架时间：<?php echo (date("Y-m-d",$v["pubtime"])); ?></li>
     </ul>
     </div>
     </div>

     <div class="td-inner1"><div class="sz">1</div></div>
     <div class="td-inner2">
     <p>
    <if condition="ordstatus eq 0">等待买家付款
    <elseif condition="(ordstatus eq 1)">
     </p>
     <p><span><a href="#">订单详情</a></span>
     </p>
     </div>
     <div class="td-inner3">
     <p><a href="pay.html"><img src="/001-jiyiwang/Public/Home/images/jiaoyi1_19.jpg" /></a></p>
     <p><span><a href="#">取消订单</a></span></p>
     </div>
     </div>
     </div>
     </div><?php endforeach; endif; ?>
<!-- ************************orderlist*****foreach*end******************************** -->
     <div class="pro1">
     <p><span class="fl_l dp">店铺 ：<span>陈青山个人店铺</span></span>
     <span class="fl_r tong"><a href=""><img src="/001-jiyiwang/Public/Home/images/jiaoyi1_14.jpg" /></a></span>
     
     </p>
     
     <div class="wupin">
     <div class="wupin1">
     <div class="td-inner"><div class="cart-checkbox "><input class="J_CheckBoxItem" id="J_CheckBox_83766958476" type="checkbox" name="items[]" value="83766958476"></div></div>
     
     <div class="fl_l t4_p"><a href="#"><img src="/001-jiyiwang/Public/Home/images/jiaoyi1_29.jpg" /></a></div>
     <div class="fl_l t4_t">
     <h3>作品名称作品名称作品名称作品名称</h3>
     <div class="t4_t_t1">
     <ul>
     <li>艺术家：陈文苑</li>                            
     <li>材质：纸本水墨</li> 
     <li class="yf"><span>￥126.00</span><br>(含运费：0.00) </li>                
              
   
<li>尺寸：41cm X 27.5cm </li>                   
<li>上架时间：2014-06-06</li>
 
     </ul>
     </div>
     
     
     </div>
     <div class="td-inner1"><div class="sz">1</div></div>
     <div class="td-inner2">
     <p>买家已发货</p>
     <p><a href="#">退款</a>/<a href="#">退货</a>
     <p><a href="#">订单详情</a>
     
     </p>
     </div>
      <div class="td-inner3">
      <p><a href="#"><img src="/001-jiyiwang/Public/Home/images/jiaoyi1_25.jpg" /></a></p>
      
     </div>
     </div>
     </div>
     
      </div>
     
     <div class="pro1">
     <p><span class="fl_l dp">店铺 ：<span>陈青山个人店铺</span></span>
     <span class="fl_r tong"><a href="#"><img src="/001-jiyiwang/Public/Home/images/jiaoyi1_14.jpg" /></a></span>
     
     </p>
     
     <div class="wupin">
     <div class="wupin1">
     <div class="td-inner"><div class="cart-checkbox "><input class="J_CheckBoxItem" id="J_CheckBox_83766958476" type="checkbox" name="items[]" value="83766958476"></div></div>
     
     <div class="fl_l t4_p"><a href="#"><img src="/001-jiyiwang/Public/Home/images/jiaoyi1_31.jpg" /></a></div>
     <div class="fl_l t4_t">
     <h3>作品名称作品名称作品名称作品名称</h3>
     <div class="t4_t_t1">
     <ul>
     <li>艺术家：陈文苑</li>                            
     <li>材质：纸本水墨</li> 
     <li class="yf"><span>￥126.00</span><br>(含运费：0.00) </li>                
              
   
<li>尺寸：41cm X 27.5cm </li>                   
<li>上架时间：2014-06-06</li>
 
     </ul>
     </div>
     
     
     </div>
     <div class="td-inner1"><div class="sz">1</div></div>
     <div class="td-inner2">
     <p>交易成功</p>
     <p><a href="#">订单详情</a>
     
     </p>
     </div>
      <div class="td-inner3">
      
       <p class="blue"><a href="#">评价</a></p>
     </div>
     </div>
     </div>
      </div>
     
     <div class="pro1">
     <p><span class="fl_l dp">店铺 ：<span>陈青山个人店铺</span></span>
     <span class="fl_r tong"><a href="#"><img src="/001-jiyiwang/Public/Home/images/jiaoyi1_14.jpg" /></a></span>
     
     </p>
     
     <div class="wupin">
     <div class="wupin1">
     <div class="td-inner"><div class="cart-checkbox "><input class="J_CheckBoxItem" id="J_CheckBox_83766958476" type="checkbox" name="items[]" value="83766958476"></div></div>
     
     <div class="fl_l t4_p"><a href="#"><img src="/001-jiyiwang/Public/Home/images/pp01.jpg" width="96" height="96" /></a></div>
     <div class="fl_l t4_t">
     <h3>作品名称作品名称作品名称作品名称</h3>
     <div class="t4_t_t1">
     <ul>
     <li>艺术家：陈文苑</li>                            
     <li>材质：纸本水墨</li> 
     <li class="yf"><span>￥126.00</span><br>(含运费：0.00) </li>                
              
   
<li>尺寸：41cm X 27.5cm </li>                   
<li>上架时间：2014-06-06</li>
 
     </ul>
     </div>
     
     
     </div>
     <div class="td-inner1"><div class="sz">1</div></div>
     <div class="td-inner2">
     <p>交易成功</p>
     <p><a href="#">订单详情</a></p>
      <p>生成评价</p>
     </div>
      <div class="td-inner3">
      <p class="blue1"><a href="#">追加评论</a></p>
      
     </div>
     </div>
     </div>
     
       </div>
       
       
      <div class="pro1">
     <p><span class="fl_l dp">店铺 ：<span>陈青山个人店铺</span></span>
     <span class="fl_r tong"><a href="#"><img src="/001-jiyiwang/Public/Home/images/jiaoyi1_14.jpg" /></a></span>
     
     </p>
     
     <div class="wupin">
     <div class="wupin1">
     <div class="td-inner"><div class="cart-checkbox "><input class="J_CheckBoxItem" id="J_CheckBox_83766958476" type="checkbox" name="items[]" value="83766958476"></div></div>
     
     <div class="fl_l t4_p"><a href="#"><img src="/001-jiyiwang/Public/Home/images/jiaoyi1_17.jpg" /></a></div>
     <div class="fl_l t4_t">
     <h3>作品名称作品名称作品名称作品名称</h3>
     <div class="t4_t_t1">
     <ul>
     <li>艺术家：陈文苑</li>                            
     <li>材质：纸本水墨</li> 
     <li class="yf"><span>￥126.00</span><br>(含运费：0.00) </li>                
              
   
<li>尺寸：41cm X 27.5cm </li>                   
<li>上架时间：2014-06-06</li>
 
     </ul>
     </div>
     
     
     </div>
     <div class="td-inner1"><div class="sz">1</div></div>
     <div class="td-inner2">
     <p>订单审核中</p>
     <p><a href="#">订单详情</a>
     </p>
     </div>
      <div class="td-inner3">
      <p><a href="#"><img src="/001-jiyiwang/Public/Home/images/jiaoyi1_25.jpg" /></a></p>
       <p class="last"><span><a href="#">取消订单</a></span></p>
     </div>
     </div>
     </div>
     </div>
     
   <div class="jy2_b">
    <span class="fl_l jy2_b1"><span></span>
   <!--<span><a href="#"><img src="/001-jiyiwang/Public/Home/images/jiaoyi1_40.jpg" /></a> <a href="#">删除选中的商品</a></span>-->
   <span><a href="#"><img src="/001-jiyiwang/Public/Home/images/jiaoyi1_37.jpg" /></a> <a href="#">继续购物</a></span>
   </span> 
   <span class="fl_l jy2_b2"><div class="page_list"><?php echo ($page); ?></span>
   </div>
     </div>
     
     
  
     </div>
     
     
      </div>   
      
      
      
      
      
      
      
      
 
 </div> 
    
    <div id="gao_p"></div>
    
    
       
         
         
           
  </div>  

</div>




<div id="gao3"></div>

 <!-- 主体END -->
 
 <!-- 底部 -->
 
 <div id="footer">
<div id="width_988">
<div id="f_box">
<div class="fl_l f_text1"><img src="/001-jiyiwang/Public/Home/images/pic1_121.jpg" /></div>
<div class="fl_r f_text2">
<div class="f_top">
<ul>
<li><a href="#"><img src="/001-jiyiwang/Public/Home/images/pic1_109.jpg" /></a></li>
<li><a href="#"><img src="/001-jiyiwang/Public/Home/images/pic1_111.jpg" /></a></li>
<li><a href="#"><img src="/001-jiyiwang/Public/Home/images/pic1_113.jpg" /></a></li>
<li class="last"><a href="#"><img src="/001-jiyiwang/Public/Home/images/pic1_115.jpg" /></a></li>

</ul>
</div>
<div class="f_bottom">
<p>Copyright Reserved © 2000-2014 jiyi.com 中国集艺网 版权所有</p>
<p>电信与信息服务业务经营许可证（闽） B2-20030053广播电视制作经营许可证（闽）字第717号</p>
<p>闽公安网备110113000792号信息网络视听节目许可证1909402号闽ICP备11054908号-15</p>
<p>网络文化经营许可证文网文 [2014] 086号互联网出版许可证 [2014] 445号可信网站验证服务证书2012040503023850号</p>

</div>
</div>


</div>


</div>


</div> 

 <!-- 底部 END -->
</body>
</html>