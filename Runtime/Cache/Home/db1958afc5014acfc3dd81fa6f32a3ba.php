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
        <style>.nav ul li .navcurrent{ background:#e8413b; padding: 40px 15px 40px 15px; color:#fff;border-right:1px solid #e8413b;border-left:1px solid #e8413b}</style>
        <script>
           $(function(){
           	var navtag = $('#navtag').attr('value');
           	if(navtag == 'index'){$('#nav-index').addClass('navcurrent');}
           	if(navtag == 'artist'){$('#nav-artist').addClass('navcurrent');}
           	if(navtag == 'news'){$('#nav-news').addClass('navcurrent');}
           	if(navtag == 'shop'){$('#nav-shop').addClass('navcurrent');}
           	if(navtag == 'customize'){$('#nav-customize').addClass('navcurrent');}
           	if(navtag == 'risingstar'){$('#nav-star').addClass('navcurrent');}
           	if(navtag == 'publishing'){$('#nav-publishing').addClass('navcurrent');}
           	if(navtag == 'enlighten'){$('#nav-enlighten').addClass('navcurrent');}
           	if(navtag == 'aboutus'){$('#nav-aboutus').addClass('navcurrent');}
           });
        </script>
		
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
 
<link href="/001-jiyiwang/Public/Home/css/lanrenzhijia3.css" type="text/css" rel="stylesheet" />
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
<li><a href="/001-jiyiwang" id="nav-index">首页</a></li>
<li><a href="<?php echo U('/'.MODULE_NAME.'/a');?>" id="nav-artist">艺术家</a></li>
<li><a href="<?php echo U('/'.MODULE_NAME.'/news');?>" id="nav-news">集艺新闻</a></li>
<li><a href="<?php echo U('/'.MODULE_NAME.'/s');?>" id="nav-shop">艺术商城</a></li>
<li><a href="<?php echo U('/'.MODULE_NAME.'/c');?>" id="nav-customize">个性化定制</a></li>
<li><a href="<?php echo U('/'.MODULE_NAME.'/r');?>" id="nav-star">明日之星</a></li>
<li><a href="<?php echo U('/'.MODULE_NAME.'/p');?>" id="nav-publishing">出版中心</a></li>
<li><a href="<?php echo U('/'.MODULE_NAME.'/e');?>" id="nav-enlighten">美育启蒙</a></li>
<li class="last"><a href="<?php echo U('/'.MODULE_NAME.'/u');?>" id="nav-aboutus">关于我们</a></li>
</ul> 
<label id="navtag" value="<?php echo ($navtag); ?>"></label>

</div> 
</div>
</div>
<!-- Banner -->

<div id="banner"><img src="/001-jiyiwang/Public/Home/images/cp1_02.jpg" width="100%" height="393" /></div>

<!-- Banner END-->
</div>

 <!-- 头部 END -->

 <!-- 主体 -->
 
<div id="middle"> 
<div id="c_box1">
<div class="fl_l c_b1_l">&nbsp;</div>
<div class="fl_l c_b1_m"><h2>中国集艺网</h2><h3>汇聚名家真品</h3><p>Chinese set art network
Famous genuine convergence</p></div>
<div class="fl_r c_b1_r">
<div class="fl_l c_b1_r1"><h2>手机扫一扫即可关注</h2><h3>集艺网 <span>官方微信</span></h3><p>Mobile phone sweep can pay attention 
to the official Micro message</p></div>
<div class="fl_l c_b1_r2"><a href="#"><img src="/001-jiyiwang/Public/Home/images/cp1_05.jpg" width="102" height="102" /></a></div>
<div class="fl_l c_b1_r3">
<ul>
<li><a href="#"><img src="/001-jiyiwang/Public/Home/images/cp1_07.jpg" width="28" height="24" /> &nbsp;腾讯微博</a></li>
<li><a href="#"><img src="/001-jiyiwang/Public/Home/images/cp1_09.jpg" width="22" height="23" /> &nbsp;腾讯QQ</a></li>
<li class="three"><a href="#"><img src="/001-jiyiwang/Public/Home/images/cp1_13.jpg" width="28" height="23" /> &nbsp;新浪微博</a></li>
<li><a href="#"><img src="/001-jiyiwang/Public/Home/images/cp1_14.jpg" width="22" height="23" /> &nbsp;公司地址</a></li>
</ul>
<div class="c_b1_text"><h1><span>咨询热线： </span>400-123-4567</h1></div>

</div>
<div class="fl_r c_b1_r4"> </div>

</div>


</div>
<div id="width_988">
  
  <div id="gao"></div>
<div id="star_box2">
    <div class="fl_l st_b2_left">
        <div class="st_b2_title"><span class="fl_l st2_l"><span class="fl_l"><img src="/001-jiyiwang/Public/Home/images/cp1_19.jpg" width="27" height="27" /></span> &nbsp;&nbsp;<span class="fl_r"><strong><?php echo ($article["title"]); ?></strong></span></span><span class="fl_r c2_r">位置：<a href="">关于我们</a> > <?php echo ($article["title"]); ?></span></div>
        <div id="gao"></div>
        <div class="ab_pic">
         <?php echo ($article["content"]); ?>
        </div>
    </div>
    <div class="fl_r st_b2_right">
    <div style="width:224px;margin:0px auto 0 auto;">

  <div class="vtitle">关于我们</div>
    <div class="vcon">
    <ul class="vconlist clearfix">
    <?php if(is_array($nav_article)): $i = 0; $__LIST__ = $nav_article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li <?php if($key == 0): ?>class="one"<?php else: ?>class="three"<?php endif; ?>><a href="<?php echo U('/'.MODULE_NAME.'/about_'.$v['id']);?>"><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      <!-- <li class="three"><a href="javascript:;">友情链接</a></li> -->
    </ul>
  </div>
  
</div>
    
    
    </div>
</div>


    
    
      
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