<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($seo_title); ?></title>
<meta name="keywords" content="<?php echo ($seo_keywords); ?>">
<meta name="description" content="<?php echo ($seo_description); ?>">
<link href="/001-jiyiwang/Public/Home/css/style.css" rel="stylesheet" type="text/css" />
<link href="/001-jiyiwang/Public/Home/css/vipstyle.css" rel="stylesheet" type="text/css" />
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
    <link href="/001-jiyiwang/Public/Home/css/lanrenzhijia3.css" type="text/css" rel="stylesheet" />
<script src="/001-jiyiwang/Public/Home/js/jquery.min.js"></script>




</head>

<body>
 <!-- 头部 -->
 
<div id="header">
<div id="header_top">
<div id="width_988">
<div class="fl_l top_t1">
<div class="fl_l top1"><h1>您好,<a style="color:#fff;" href="<?php echo U('/'.MODULE_NAME.'/User1/homepage');?>"><?php echo msubstr($_SESSION['normalusername'],0,11);?></a>！欢迎来到集艺网</h1></div>
    <?php if(empty($_SESSION['normalusername'])): ?><div class="fl_r top2">
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
<div class="fl_l logo"><img src="/001-jiyiwang/Public/Home/images/pic1_07.jpg" width="223" height="74" /></div>

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
 
<div id="middle" style="background:url(/001-jiyiwang/Public/Home/images/vip_bj.jpg) repeat-x; float:left">
<div id="width_988">
    <div class="vip_h">
        <div class="vip_left">
            <ul>
                                <li class="vip_xz"><a href="<?php echo U('/'.MODULE_NAME.'/User1/homepage');?>">首页</a></li>
                <li><a href="<?php echo U('/'.MODULE_NAME.'/User1/grzx');?>">个人中心</a></li>
                <li><a href="<?php echo U('/'.MODULE_NAME.'/User1/accountSafety');?>">账户安全</a></li>
                <li><a href="<?php echo U('/'.MODULE_NAME.'/User1/shoppingCart');?>">我的购物车</a></li>
                <li><a href="<?php echo U('/'.MODULE_NAME.'/User1/orderDetail');?>">交易记录</a></li>
                <li><a href="<?php echo U('/'.MODULE_NAME.'/User1/leaveMessage');?>">留言管理</a></li>
                <li><a href="<?php echo U('/'.MODULE_NAME.'/User1/creditsManage');?>">积分管理</a></li>
                <li><a href="<?php echo U('/'.MODULE_NAME.'/User1/buyfor');?>">购买兑换</a></li>
                <li><a href="<?php echo U('/'.MODULE_NAME.'/User1/invoiceInfo');?>">增票资质</a></li>
                <li><a href="<?php echo U('/'.MODULE_NAME.'/User1/shippingAddress');?>">收货地址</a></li>
                <li><a href="<?php echo U('/'.MODULE_NAME.'/User1/exchangeGoods');?>">退换货品</a></li>
                <li class="last"></li>
            </ul>
        </div>
        <div class="vip_right">
        <div class="vip_text">
        <div class="vip_r_t">
        <span class="fl_l qq">
        <h2><?php echo session('normalusername'); ?>&nbsp;&nbsp;&nbsp;<span>欢迎进入集艺网</span></h2>
        <h5>常用操作</h5>
        </span>
          <span class="fl_r jf">
          <h4>可用积分</h4>
          <h1>353</h1>
          </span>
        </div>
        
        <div class="vip_r_b">
        <ul>
        <li><p><a href="grzx1.html"><img src="/001-jiyiwang/Public/Home/images/hy1_07.jpg" width="84" height="84" /></a></p><p>个人信息</p></li>
        <li><p><a href="ddxq.html"><img src="/001-jiyiwang/Public/Home/images/hy1_09.jpg" width="84" height="84" /></a></p><p>订单管理</p></li>
        <li><p><a href="hy_lygl1.html"><img src="/001-jiyiwang/Public/Home/images/hy1_11.jpg" width="84" height="84" /></a></p><p>评价管理</p></li>
        <li><p><a href="hy_shdz.html"><img src="/001-jiyiwang/Public/Home/images/hy1_13.jpg" width="84" height="84" /></a></p><p>收货地址</p></li>
        </ul>
        </div>
        
        <div class="vip_bott">
        <div class="vip_tit"><h5>猜你喜欢</h5></div>
        <div class="vip_p">
        <ul>
        <li><p><a href="p_pages.html"><img src="/001-jiyiwang/Public/Home/images/hy1_20.jpg" width="161" height="120" /></a></p>
        <p><span class="fl_l z_p">米开朗基罗</span>
        <span class="fl_r j_g">￥200.00</span>
        </p>
        </li>
        <li><p><a href="p_pages.html"><img src="/001-jiyiwang/Public/Home/images/hy1_22.jpg" width="161" height="120" /></a></p>
        <p><span class="fl_l z_p">米开朗基罗</span>
        <span class="fl_r j_g">￥200.00</span>
        </p>
        </li>
        <li><p><a href="p_pages.html"><img src="/001-jiyiwang/Public/Home/images/hy1_24.jpg" width="161" height="120" /></a></p>
        <p><span class="fl_l z_p">米开朗基罗</span>
        <span class="fl_r j_g">￥200.00</span>
        </p>
        </li>
        <li class="last"><p><a href="p_pages.html"><img src="/001-jiyiwang/Public/Home/images/hy1_26.jpg" width="161" height="120" /></a></p>
        <p><span class="fl_l z_p">米开朗基罗</span>
        <span class="fl_r j_g">￥200.00</span>
        </p>
        </li>
        <li><p><a href="p_pages.html"><img src="/001-jiyiwang/Public/Home/images/hy1_32.jpg" width="161" height="120" /></a></p>
        <p><span class="fl_l z_p">米开朗基罗</span>
        <span class="fl_r j_g">￥200.00</span>
        </p>
        </li>
        <li><p><a href="p_pages.html"><img src="/001-jiyiwang/Public/Home/images/hy1_33.jpg" width="161" height="120" /></a></p>
        <p><span class="fl_l z_p">米开朗基罗</span>
        <span class="fl_r j_g">￥200.00</span>
        </p>
        </li>
        <li><p><a href="p_pages.html"><img src="/001-jiyiwang/Public/Home/images/hy1_34.jpg" width="161" height="120" /></a></p>
        <p><span class="fl_l z_p">米开朗基罗</span>
        <span class="fl_r j_g">￥200.00</span>
        </p>
        </li>
        <li class="last"><p><a href="p_pages.html"><img src="/001-jiyiwang/Public/Home/images/hy1_35.jpg" width="161" height="120" /></a></p>
        <p><span class="fl_l z_p">米开朗基罗</span>
        <span class="fl_r j_g">￥200.00</span>
        </p>
        </li>
        </ul>
        
        </div>
        
        
        </div>
        </div>
        
        
        </div>
    </div>
    
    
</div></div>


<div id="gao1"></div>

 <!-- 主体END -->
 
 <!-- 底部 -->
 
    <div id="footer_1">
<div id="width_988">
<div id="f1_box">
<div class="fl_l f1_text1">
<ul>
<li><a href="about_us.html">关于我们</a></li>
<li><a href="about_us.html">联系我们</a></li>
<li><a href="yishujia.html">艺术家</a></li>
<li class="last"><a href="copyright_1.html">出版中心</a></li>
</ul>
<p>© 2014 集艺网有限公司  京ICP证030173号 </p>
</div>
<div class="fl_r f1_text2">
<p>服务热线： 400 8282828   13163314914</p>
</div>


</div>


</div>


</div>

 <!-- 底部 END -->
</body>
</html>