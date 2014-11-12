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

<div id="banner">
<div id="lanrenzhijia">
  <ul id="slides">
      <li style="background:url('/001-jiyiwang/Public/Home/images/lanrenzhijia01.jpg') no-repeat center top">
        <a href="javascript:"></a>
      </li>
      <li style="background:url('/001-jiyiwang/Public/Home/images/lanrenzhijia04.jpg') no-repeat center top">
        <a href="javascript:"></a>
      </li>
      <li style="background:url('/001-jiyiwang/Public/Home/images/lanrenzhijia03.jpg') no-repeat center top">
        <a href="javascript:"></a>
      </li>
  </ul>
</div>
</div>

<!-- Banner END-->
</div>
 <!-- 头部 END -->

 <!-- 主体 -->
 
<div id="middle">
<div id="width_988"> 
    <div id="menu2">
    <ul>
      <li class="child" style=" width:50px">
        <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','/001-jiyiwang/Public/Home/images/index_1.jpg',1)">
          <img src="/001-jiyiwang/Public/Home/images/5.jpg" width="62" height="73" id="Image2" />    
        </a>
      </li>
      <li>
        <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','/001-jiyiwang/Public/Home/images/index_21.jpg',1)">
          <img src="/001-jiyiwang/Public/Home/images/6.jpg" width="62" height="73" id="Image4" />    
        </a>
      </li>
      <li>
        <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','/001-jiyiwang/Public/Home/images/index_3.jpg',1)">
          <img src="/001-jiyiwang/Public/Home/images/7.jpg" width="62" height="73" id="Image5" />    
        </a>
      </li>
      <li>
        <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image8','','/001-jiyiwang/Public/Home/images/index_6.jpg',1)">
          <img src="/001-jiyiwang/Public/Home/images/10.jpg" width="62" height="73" id="Image8" />    
        </a>
      </li>
      <li>
        <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image7','','/001-jiyiwang/Public/Home/images/index_5.jpg',1)">
          <img src="/001-jiyiwang/Public/Home/images/9.jpg" width="62" height="73" id="Image7" />    
        </a>
      </li>
      <li>
        <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image6','','/001-jiyiwang/Public/Home/images/index_4.jpg',1)">
          <img src="/001-jiyiwang/Public/Home/images/8.jpg" width="62" height="73" id="Image6" />    
        </a>
      </li>
      <li>
        <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','/001-jiyiwang/Public/Home/images/index_2.jpg',1)">
          <img src="/001-jiyiwang/Public/Home/images/222.jpg" width="62" height="73" id="Image3" />    
        </a>
      </li>

      <li class="child">
        <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image9','','/001-jiyiwang/Public/Home/images/index_7.jpg',1)" >
          <img src="/001-jiyiwang/Public/Home/images/11.jpg" width="62" height="73" id="Image9" style=" float: right;" />    
        </a>
      </li>
    </ul>
  </div>


<!--<div id="m_nav">
<ul>
<li><a href="#">国画</a></li>
<li><a href="#">油画</a></li>
<li><a href="#">书法</a></li>
<li><a href="#">版画</a></li>
<li><a href="#">雕塑</a></li>
<li><a href="#">摄影</a></li>
<li><a href="#">漆画</a></li>
<li><a href="#">工艺</a></li>
<li><a href="#">水粉</a></li>
<li><a href="#">其他</a></li>
</ul>
</div>-->

<div id="m_box1">
<div class="fl_l m_pic1">
    <div class="m_p1_top"><img src="/001-jiyiwang/Public/Home/images/pic1_13.jpg" width="341" height="228" /></div>
    <div class="m_p1_bottom">
    <div class="m_p1_b">
    <h1>2014最新艺术展活动现场</h1>
     <h2>福州专场第25期拍卖会</h2>
     <p>时间：2014年11月1日、2日 上午9:00-晚上20:00</p>
<p class="last">地点：福州悦华酒店•拂翠楼（福州市鼓楼区华林路11号）</p>
<span><a href="#">查看详情</a></span>
  </div>
    </div>
</div>

<div class="fl_r m_text1">

    <div class="r_m_top">
    <div class="r_top1">
    <h1>成交量显示<span>周成交量TOP</span></h1>
    <div class="r_top2">
    <ul>
    <li>    
   <span class="fl_l t2_z"><a href="person.html">独树老夫家（指墨画）</a></span>
    <span class="fl_r t2_t">2014-10-14</span>
    </li>
     <li class="last">
   <span class="fl_l t2_z"><a href="person.html">黄果树观瀑（册页）</a></span>
    <span class="fl_r t2_t">2014-10-12</span>
    </li>
     <li>
   <span class="fl_l t2_z"><a href="person.html">红树醉秋色（指墨画）</a></span>
    <span class="fl_r t2_t">2014-10-12</span>
    </li>
     <li class="last">
    <span class="fl_l t2_z"><a href="person.html">黄山雨后（册页）</a></span>               
                      
 
    <span class="fl_r t2_t">2014-10-13</span>
    </li>
     <li>
   <span class="fl_l t2_z"><a href="person.html">山岳精英</a></span>
    <span class="fl_r t2_t">2014-10-12</span>
    </li>
     <li class="last">
    <span class="fl_l t2_z"><a href="person.html">水阁访友（仿古山水册页）</a></span>
    <span class="fl_r t2_t">2014-10-12</span>
    </li>
    </ul>
    
        </div>
    </div>
    
    </div>
    
    <div class="r_m_bottom">
    <ul>
    <li><a href="person.html"><img src="/001-jiyiwang/Public/Home/images/pic1_16.jpg" width="181" height="142" /></a>
    <div class="pic_text">
    <h1>￥32000.00</h1>
    <p>李维汜 国画</p>
<p class="last">看世界 四尺斗方</p>
    <span><a href="person.html">个人店铺</a></span>
    </div>
   
    </li>
    <li><a href="person.html"><img src="/001-jiyiwang/Public/Home/images/pic1_18.jpg" width="181" height="142" /></a>
    <div class="pic_text">
    <h1>￥25000.00</h1>
    <p>林岑 国画</p>
<p class="last">荷香 四尺斗方</p>
    <span><a href="person.html">个人店铺</a></span>
    </div>
   
    </li>
    <li class="last"><a href="person.html"><img src="/001-jiyiwang/Public/Home/images/pic1_20.jpg" width="181" height="142" /></a>
    <div class="pic_text">
    <h1>￥350000.00</h1>
    <p>魏传义 国画</p>
<p class="last">八千里路云和月</p>
    <span><a href="person.html">个人店铺</a></span>
    </div>
   
    </li>
    
    
    
    </ul>
    
    </div>
</div>


</div>

<div id="gao"></div>
<div id="m_box2">
    <div class="m_b2_title">
        <div class="fl_l l_t1"><span><strong>明日之星</strong></span>  / STAR</div>
        <div class="fl_r r_t2">MORE>></div>
    </div>
<div class="m_box2_pic">
<div class="fl_l m_b2_p1"><a href="star_1.html"><img src="/001-jiyiwang/Public/Home/images/pic1_27.jpg" width="299" height="373" /></a>
<div class="zuopin">
<span class="fl_l zp1">代表作品：玉兰迎春</span>                  
<span class="fl_r zp2">姓名：魏传义</span>
</div>

</div>

<div class="fl_r m_b2_p2">
<ul>
<li><a href="star_1.html"><img src="/001-jiyiwang/Public/Home/images/pic1_29.jpg" width="295" height="145" /></a>
<div class="zuopin">
<span class="fl_l zp1">代表作品：老来诸事悉无争</span>
<span class="fl_r zp2">姓名：朱鸣冈</span>
</div>

</li>
<li class="last"><a href="star_1.html"><img src="/001-jiyiwang/Public/Home/images/pic1_31.jpg" width="295" height="145" /></a>
<div class="zuopin">
<span class="fl_l zp1">代表作品：卡纳克神庙</span>
<span class="fl_r zp2">姓名：翁铭泉</span>
</div>

</li>
<li><a href="star_1.html"><img src="/001-jiyiwang/Public/Home/images/pic1_35.jpg" width="295" height="145" /></a>
<div class="zuopin">
<span class="fl_l zp1">代表作品：五缘湾印象之三</span>
<span class="fl_r zp2">姓名：王雪峰</span>
</div>

</li>
<li class="last"><a href="star_1.html"><img src="/001-jiyiwang/Public/Home/images/pic1_37.jpg" width="295" height="145" /></a>
<div class="zuopin">
<span class="fl_l zp1">代表作品：九江烟水亭</span>
<span class="fl_r zp2">姓名：孙煌</span>
</div>

</li>

</ul>
</div>

</div>

</div>

<div id="gao1"></div>
<div id="m_box3">
    <div class="m_b2_title">
        <div class="fl_l l_t1"><span><strong>美育启蒙</strong></span>  / VIDEO</div>
        <div class="fl_r r_t2">MORE>></div>
    </div>
<div class="m_b3_bottom">
<ul>
<li>
<h2>水彩画家 郑起妙<span><img src="/001-jiyiwang/Public/Home/images/sjx.jpg" width="7" height="13" /></span></h2>
<a href="myqm_xx.html"><img src="/001-jiyiwang/Public/Home/images/pic1_43.jpg" width="207" height="120" /></a>
<p><a href="myqm_xx.html">一世华彩梦 水彩画家 郑起妙 
玲听艺术...[详细]</a></p>

</li>
<li>
<h2>石刻版画家 孙煌 <span><img src="/001-jiyiwang/Public/Home/images/sjx.jpg" width="7" height="13" /></span></h2>
<a href="myqm_xx.html"><img src="/001-jiyiwang/Public/Home/images/pic1_45.jpg" width="207" height="120" /></a>
<p><a href="myqm_xx.html">石上生花 石刻版画家 孙煌 玲听
艺术 2013.07.13...[详情]</a></p>

</li>
<li>
<h2>摄影艺术家李开聪<span><img src="/001-jiyiwang/Public/Home/images/sjx.jpg" width="7" height="13" /></span></h2>
<a href="myqm_xx.html"><img src="/001-jiyiwang/Public/Home/images/pic1_47.jpg" width="207" height="120" /></a>
<p><a href="myqm_xx.html">往事模糊芦花岸 摄影艺术家李开
聪 玲听艺术 2013.07.06...[详情]</a></p>

</li>
<li class="last">
<h2>书画家——林岑<span><img src="/001-jiyiwang/Public/Home/images/sjx.jpg" width="7" height="13" /></span></h2>
<a href="myqm_xx.html"><img src="/001-jiyiwang/Public/Home/images/pic1_49.jpg" width="207" height="120" /></a>
<p><a href="myqm_xx.html">一来多情付笔墨 书画家——林岑 
玲听艺术 2013.06.22...[详情]</a></p>

</li>

</ul>
</div>

</div>

<div id="gao"></div>
<div id="m_box4">
    <div class="m_b2_title">
        <div class="fl_l l_t1"><span><strong>推荐作品</strong></span>  / work</div>
        <div class="fl_r r_t2">MORE>></div>
    </div>
<div class="m_b4_bottom">
    <div class="m_b4_t4">
            <div class="fl_l b4_p1"><a href="p_pages.html"><img src="/001-jiyiwang/Public/Home/images/pic1_56.jpg" width="493" height="351" /></a></div>
            <div class="fl_r b4_p2">
            <ul>
            <li class="first">
            <div class="b4_text">
            <h1>国画</h1>
            <p>国画是汉族的传统绘画形式，是用毛笔蘸水、墨、彩作画于绢或纸上。工具和材料有毛笔、墨、国画颜</p>
            <span><a href="#"><img src="/001-jiyiwang/Public/Home/images/sign.png" width="30" height="24" /></a></span>
            </div>
            </li>
            <li class="last"> <a href="p_pages.html"><img src="/001-jiyiwang/Public/Home/images/pic1_59.jpg" width="246" height="175" /></a></li>
            <li><a href="#"><img src="/001-jiyiwang/Public/Home/images/pic1_63.jpg" width="246" height="175" /></a></li>
            <li class="last"><a href="p_pages.html"><img src="/001-jiyiwang/Public/Home/images/pic1_65.jpg" width="246" height="175" /></a></li>
           
            </ul>
            
            </div>
    </div>
    <div class="m_b4_b4">
    <ul>
    <li><a href="p_pages.html"><img src="/001-jiyiwang/Public/Home/images/pic1_69.jpg" /></a></li>
     <li><a href="p_pages.html"><img src="/001-jiyiwang/Public/Home/images/pic1_71.jpg" /></a></li>
      <li><a href="p_pages.html"><img src="/001-jiyiwang/Public/Home/images/pic1_72.jpg" /></a></li>
      <li class="first">
            <div class="b4_text">
            <h1>国画</h1>
            <p>郑小瑛在这个舞台上倾心敬情做出动人的表演，展现她杰出的指挥水平和组织才干。</p>
          
            </div>
            </li>
       <li><a href="p_pages.html"><img src="/001-jiyiwang/Public/Home/images/pic1_76.jpg" /></a></li>
       <li class="first1">
            <div class="b4_text">
            <h1>国画</h1>
            <p>文学是指以语言文字为工具形象化地反映客观现实、表现作家心灵世界的艺术，包括诗歌、散文、小说</p>
         
            </div>
            </li>
        <li><a href="p_pages.html"><img src="/001-jiyiwang/Public/Home/images/pic1_77.jpg" /></a></li>
         <li><a href="p_pages.html"><img src="/001-jiyiwang/Public/Home/images/pic1_78.jpg" /></a></li>
    
    
    </ul>
    
    
    
    </div>
</div>

</div>

<div id="gao"></div>
<div id="m_box5">
    <div class="m_b2_title">
        <div class="fl_l l_t1"><span><strong>推荐书籍</strong></span>  / BOOK</div>
        
    </div>
<div class="m_b5_bottom">
<div class="fl_l m_b5_l"><a href="copyright_sjzs.html"><img src="/001-jiyiwang/Public/Home/images/pic1_83.jpg" /></a></div>
<div class="fl_r m_b5_r">
<ul>
<li>
<h1><a href="copyright_sjzs.html"><img src="/001-jiyiwang/Public/Home/images/pic1_85.jpg" /></a></h1>
<div class="xushu">
<span class="fl_l zt"><h2>李维汜</h2>
雕塑家 教育家</span>
<span class="fl_r xh"><a href="#"><img src="/001-jiyiwang/Public/Home/images/pic1_97.jpg" /></a> &nbsp;6&nbsp;&nbsp;<a href="#"><img src="/001-jiyiwang/Public/Home/images/pic1_94.jpg" /></a> &nbsp;3</span>
</div>


</li>
<li>
<h1><a href="copyright_sjzs.html"><img src="/001-jiyiwang/Public/Home/images/pic1_87.jpg" /></a></h1>
<div class="xushu">
<span class="fl_l zt"><h2>邱祥锐</h2>
画家美术教育家</span>
<span class="fl_r xh"><a href="#"><img src="/001-jiyiwang/Public/Home/images/pic1_97.jpg" /></a> &nbsp;6&nbsp;&nbsp;<a href="#"><img src="/001-jiyiwang/Public/Home/images/pic1_94.jpg" /></a> &nbsp;3</span>
</div>
</li>
<li class="last">
<h1><a href="copyright_sjzs.html"><img src="/001-jiyiwang/Public/Home/images/pic1_89.jpg" /></a></h1>
<div class="xushu">
<span class="fl_l zt"><h2>魏传义</h2>
艺术教育家</span>
<span class="fl_r xh"><a href="#"><img src="/001-jiyiwang/Public/Home/images/pic1_97.jpg" /></a> &nbsp;6&nbsp;&nbsp;<a href="#"><img src="/001-jiyiwang/Public/Home/images/pic1_94.jpg" /></a> &nbsp;3</span>
</div>
</li>
<li>
<h1><a href="copyright_sjzs.html"><img src="/001-jiyiwang/Public/Home/images/pic1_101.jpg" /></a></h1>
<div class="xushu">
<span class="fl_l zt"><h2>郑小瑛</h2>
指挥家音乐教育家</span>
<span class="fl_r xh"><a href="#"><img src="/001-jiyiwang/Public/Home/images/pic1_97.jpg" /></a> &nbsp;6&nbsp;&nbsp;<a href="#"><img src="/001-jiyiwang/Public/Home/images/pic1_94.jpg" /></a> &nbsp;3</span>
</div>
</li>
<li>
<h1><a href="copyright_sjzs.html"><img src="/001-jiyiwang/Public/Home/images/pic1_102.jpg" /></a></h1>
<div class="xushu">
<span class="fl_l zt"><h2>洪永宏</h2>
作家影视艺术家</span>
<span class="fl_r xh"><a href="#"><img src="/001-jiyiwang/Public/Home/images/pic1_97.jpg" /></a> &nbsp;6&nbsp;&nbsp;<a href="#"><img src="/001-jiyiwang/Public/Home/images/pic1_94.jpg" /></a> &nbsp;3</span>
</div>
</li>
<li class="last">
<h1><a href="copyright_sjzs.html"><img src="/001-jiyiwang/Public/Home/images/pic1_103.jpg" /></a></h1>
<div class="xushu">
<span class="fl_l zt"><h2>邵江海</h2>
百年歌仔戏</span>
<span class="fl_r xh"><a href="#"><img src="/001-jiyiwang/Public/Home/images/pic1_97.jpg" /></a> &nbsp;6&nbsp;&nbsp;<a href="#"><img src="/001-jiyiwang/Public/Home/images/pic1_94.jpg" /></a> &nbsp;3</span>
</div>
</li>
</ul>

</div>


</div></div>





</div></div>


<div id="gao1"></div>

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