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
    <div class="fl_l top1"><h1>您好！欢迎来到集艺网</h1></div>
    <div class="fl_r top2">
    <ul>
    <li><a href="dlzc.html">登录</a></li>
    <li><a href="dlzc.htmll">注册</a></li>
    
    </ul>
    </div>
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
        <div class="st_b2_title"><span class="fl_l st2_l"><span class="fl_l"><img src="/001-jiyiwang/Public/Home/images/cp1_19.jpg" width="27" height="27" /></span> &nbsp;&nbsp;<span class="fl_r"><strong>关注未来艺术新星</strong></span></span><span class="fl_r c2_r">位置：<a href="#">明日之星</a> > 关注未来艺术新星</span></div>
        <div id="gao"></div>
        <div class="st_b2_text">
        <p>子曰：志于道，据于德，依于仁，游于艺。一次次梦想与现实的碰撞，灵魂与身体的博弈，情感与理智的交锋，行游在未知世界里，完成发现的跨越。结合着当下青年学子对艺术现象的表达，我们用"游与艺"为展览名称，让此次提名展的参与者们朝着超越世俗、自游于思想瀚海、恢复自我的天性发展，在"心动"中有着更为开放，更为广阔，更适合想象的自由驰骋和人格的自我张扬来最终"抵达"对艺术的梦想。
本年度提名展真诚的希望能够为年轻的参展者们带来全新的视角和灵感，共同经历一次美妙的创作之旅。</p>
         


         
    </div>
     <div id="gao3"></div>
    <div class="st_text1">
    <div class="st_top">
    <h3><span class="fl_l st_t1"><a href="#">参展细则</a></span>
    <span class="fl_l st_t2"><a href="#">奖励方法</a></span>
    <span class="fl_l st_t3"><a href="#">问题解答</a></span>
    <span class="fl_r st_t4"><a href="#">我要报名</a></span>
    </h3></div>
    <div class="st_text_b">
    <div class="fl_l st_pic"><img src="/001-jiyiwang/Public/Home/images/star1_03.jpg" width="349" height="427" /></div>
    <div class="fl_r st_zp">
    <h2>王雪峰</h2>
    <p>籍贯 &nbsp;厦门</p>
    <p>类别 &nbsp;国画</p>
    <p>毕业院校 &nbsp;厦门工艺</p>
    <div class="st_p_t">
    <p><span>子曰：志于道，据于德，依于仁，游于艺。一次次梦想与现实的碰撞，灵魂与身体的博弈，情感与理智的交锋，行游在未知世界里，完成发现的跨越。结合着当下青年学子对艺术现象的表达，我们用"游与艺"为展览名称，让此次提名展的参与者们朝着超越世俗、自游于思想瀚海、恢复自我的天性发展，在"心动"中有着更为开放，更为广阔，更适合想象的自由驰骋和人格的自我张扬来最终"抵达"对艺术的梦想。</span></p></div>
    
    <div class="st_zp1">
    <ul>
    <li><a href="#"><p><img src="/001-jiyiwang/Public/Home/images/star1_09.jpg" width="86" height="51" /></a></p>
    <h1>+ 关注</h1>
    <h2>王雪峰</h2>
    </li>
    <li><a href="#"><p><img src="/001-jiyiwang/Public/Home/images/star1_06.jpg" width="86" height="51" /></a></p>
    <h1>+ 关注</h1>
    <h2>王雪峰</h2>
    </li>
    <li><a href="#"><p><img src="/001-jiyiwang/Public/Home/images/star1_12.jpg" width="86" height="51" /></a></p>
    <h1>+ 关注</h1>
    <h2>王雪峰</h2>
    </li>
    </ul>
    </div>
    
    
    
    
    </div>
    </div>
    
    <div id="gao4"></div>
    <div class="news_z">
    <div class="n_z_title"><h2>最新加入</h2></div>
      <div class="n_z_bottom">
      <div class="n_z_pic">
      <ul>
      <li><a href="#"><img src="/001-jiyiwang/Public/Home/images/star1_19.jpg" width="164" height="117" /></a>
         <div id="hot">
张雪峰-眼神
</div>
      </li>
      <li><a href="#"><img src="/001-jiyiwang/Public/Home/images/star1_21.jpg" width="164" height="117" /></a>
         <div id="hot">
张雪峰-眼神
</div>
      </li>
      <li><a href="#"><img src="/001-jiyiwang/Public/Home/images/star1_23.jpg" width="164" height="117" /></a>
         <div id="hot">
张雪峰-眼神
</div>
      </li>
      <li><a href="#"><img src="/001-jiyiwang/Public/Home/images/star1_28.jpg" width="164" height="117" /></a>
         <div id="hot">
张雪峰-眼神
</div>
      </li>
      <li><a href="#"><img src="/001-jiyiwang/Public/Home/images/star1_29.jpg" width="164" height="117" /></a>
         <div id="hot">
张雪峰-眼神
</div>
      </li>
      <li><a href="#"><img src="/001-jiyiwang/Public/Home/images/star1_30.jpg" width="164" height="117" /></a>
         <div id="hot">
张雪峰-眼神
</div>
      </li>
      <li><a href="#"><img src="/001-jiyiwang/Public/Home/images/star1_34.jpg" width="164" height="117" /></a>
         <div id="hot">
张雪峰-眼神
</div>
      </li>
      <li><a href="#"><img src="/001-jiyiwang/Public/Home/images/star1_35.jpg" width="164" height="117" /></a>
         <div id="hot">
张雪峰-眼神
</div>
      </li>
      <li><a href="#"><img src="/001-jiyiwang/Public/Home/images/star1_19.jpg" width="164" height="117" /></a>
         <div id="hot">
张雪峰-眼神
</div>
      </li>
      <li><a href="#"><img src="/001-jiyiwang/Public/Home/images/star1_28.jpg" width="164" height="117" /></a>
         <div id="hot">
张雪峰-眼神
</div>
      </li>
      <li><a href="#"><img src="/001-jiyiwang/Public/Home/images/star1_34.jpg" width="164" height="117" /></a>
         <div id="hot">
张雪峰-眼神
</div>
      </li>
      <li><a href="#"><img src="/001-jiyiwang/Public/Home/images/star1_19.jpg" width="164" height="117" /></a>
         <div id="hot">
张雪峰-眼神
</div>
      </li>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      </ul>
      
      
      </div>
      <div class="page_list"><a href="#"><img src="/001-jiyiwang/Public/Home/images/art1_59.jpg" width="8" height="8"></a><a href="#" class="status">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#">5</a><a href="#">...</a><a href="#">11</a><a href="#"><img src="/001-jiyiwang/Public/Home/images/art1_61.jpg" width="8" height="8"></a></div>
      </div>
    
    </div>
    
    <div class="wy">
    <div class="st_top">
    <h3><span class="fl_l st_t1"><a href="#">学术委员会会员</a></span>
   
    </h3></div>
    <div class="wy_text">
    <ul>
    <li><h3>张雪峰—厦门</h3>
    <p>毕业于厦门工艺美术学院，
擅长国画、书法，现任XX学院名誉教授</p>
    </li>
    <li><h3>张雪峰—厦门</h3>
    <p>毕业于厦门工艺美术学院，
擅长国画、书法，现任XX学院名誉教授</p>
    </li>
    <li class="last"><h3>张雪峰—厦门</h3>
    <p>毕业于厦门工艺美术学院，
擅长国画、书法，现任XX学院名誉教授</p>
    </li>
    <li><h3>张雪峰—厦门</h3>
    <p>毕业于厦门工艺美术学院，
擅长国画、书法，现任XX学院名誉教授</p>
    </li>
    <li><h3>张雪峰—厦门</h3>
    <p>毕业于厦门工艺美术学院，
擅长国画、书法，现任XX学院名誉教授</p>
    </li>
    <li class="last"><h3>张雪峰—厦门</h3>
    <p>毕业于厦门工艺美术学院，
擅长国画、书法，现任XX学院名誉教授</p>
    </li>
    </ul>
    
    </div>
    
       </div>
       
       
       <div class="wy1">
    <div class="st_top">
    <h3><span class="fl_l st_t1"><a href="#">学术支持院校</a></span>
   
    </h3></div>
    <div class="wy1_text">
    <ul>
    <li><h3>厦门工艺美术学院</h3>

    </li>
    <li><h3>厦门工艺美术学院</h3>

    </li>
    
    <li><h3>厦门工艺美术学院</h3>

    </li>
    <li class="last"><h3>厦门工艺美术学院</h3>

    </li>
    <li><h3>厦门工艺美术学院</h3>

    </li>
    <li><h3>厦门工艺美术学院</h3>

    </li>
    <li><h3>厦门工艺美术学院</h3>

    </li>
    <li class="last"><h3>厦门工艺美术学院</h3>

    </li>
    </ul>
    
    </div>
    
       </div>
       
       
       <div class="wy1">
    <div class="st_top">
    <h3><span class="fl_l st_t1"><a href="#">首席合作平台</a></span>
   
    </h3></div>
    <div class="wy1_text">
    <span><img src="/001-jiyiwang/Public/Home/images/star1_41.jpg" width="117" height="69" /></span>
    <span><img src="/001-jiyiwang/Public/Home/images/star1_43.jpg" width="117" height="69" /></span>
    </div>
    
       </div>
       
       <div class="wy1">
    <div class="st_top">
    <h3><span class="fl_l st_t1"><a href="#">互联网门户合作伙伴</a></span>
   
    </h3></div>
    <div class="wy1_text">
    <span><img src="/001-jiyiwang/Public/Home/images/star1_47.jpg" width="117" height="69" /></span>
    <span><img src="/001-jiyiwang/Public/Home/images/star1_48.jpg" width="117" height="69" /></span>
    </div>
    
       </div>
       
       <div class="wy1">
    <div class="st_top">
    <h3><span class="fl_l st_t1"><a href="#">独家微博合作伙伴</a></span>
   
    </h3></div>
    <div class="wy1_text">
    <span><img src="/001-jiyiwang/Public/Home/images/star1_47.jpg" width="117" height="69" /></span>
  
    </div>
    
       </div>
       
       <div class="wy1">
    <div class="st_top">
    <h3><span class="fl_l st_t1"><a href="#">媒体战略合作伙伴</a></span>
   
    </h3></div>
    <div class="wy1_text">
    <span><img src="/001-jiyiwang/Public/Home/images/star1_47.jpg" width="117" height="69" /></span>
  <span><img src="/001-jiyiwang/Public/Home/images/star1_41.jpg" width="117" height="69" /></span>
    <span><img src="/001-jiyiwang/Public/Home/images/star1_43.jpg" width="117" height="69" /></span>
    </div>
    
       </div>
       
       <div class="wy1">
    <div class="st_top">
    <h3><span class="fl_l st_t1"><a href="#">门户合作伙伴</a></span>
   
    </h3></div>
    <div class="wy1_text">
  
  <span><img src="/001-jiyiwang/Public/Home/images/star1_41.jpg" width="117" height="69" /></span>
  
    </div>
    
       </div>
       
       <div class="wy1">
    <div class="st_top">
    <h3><span class="fl_l st_t1"><a href="#">官方媒体</a></span>
   
    </h3></div>
    <div class="wy1_text">
  
  <span><img src="/001-jiyiwang/Public/Home/images/star1_41.jpg" width="117" height="69" /></span>
  <span><img src="/001-jiyiwang/Public/Home/images/star1_43.jpg" width="117" height="69" /></span>
    </div>
    
       </div>
    </div>
    
    
    
    </div>
    <div class="fl_r st_b2_right">
    <div style="width:224px;margin:0px auto 0 auto;">

  <div class="vtitle">明日之星</div>
    <div class="vcon">
    <ul class="vconlist clearfix">
      <li class="one"><a href="javascript:;">年度院校新星提名</a></li>
      
      <li class="three"><a href="javascript:;">关注未来艺术新星</a></li>
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