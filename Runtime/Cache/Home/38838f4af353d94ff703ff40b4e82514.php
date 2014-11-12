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

<link href="/001-jiyiwang/Public/Home/css/lanrenzhijia2.css" type="text/css" rel="stylesheet" />
<script src="/001-jiyiwang/Public/Home/js/jquery.min.js"></script>
<script>
$(function (){ 
  $(".left_nav dd").hover(function(){
  $(".nav_right",this).show();
  });
  $(".left_nav dd").mouseleave(function(){
  $(".nav_right",this).hide();
  });
});
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
<div id="menu"> 
  <ul class="m_h1"> 
    <h3>美术</h3> 
    <li>国画</li>    
    <li>油画</li>
    <li>书法</li>
    <li>雕塑</li>
    <li>摄影</li>
    <li>水粉水彩</li>
    <li>当代艺术</li>
    <li>其他</li>
  </ul>
  <ul class="m_h2"> 
    <h3>舞蹈</h3>
    <li>原创作品</li> 
    <li>版权</li> 
  </ul>
  <ul class="m_h3"> 
    <h3>文字</h3>
    <li>原创作品</li>   
    <li>版权</li>
  </ul> 
  <ul class="m_h4">

    <h3>手工艺</h3>
    <li>原创作品</li>                   
 
   <li>版权</li>
  </ul>

<ul class="m_h5">

    <h3>影视</h3>
    <li>原创作品</li>                   
 
   <li>版权</li>
  </ul>

<ul class="m_h6">

    <h3>戏曲</h3>
   <li>原创作品</li>                   
 
   <li>版权</li>
  </ul>

  <ul class="m_h7"> 
    <h3>其他</h3> 
  </ul> 
  <ul class="m_h8">
&nbsp; 
  </ul> 

</div> 
</div>
</div>
<!-- Banner -->
 
<div id="banner2">
<div id="lanrenzhijia">
  <ul id="slides"> 
    <li style="background:url('/001-jiyiwang/Public/Home/images/lanrenzhijia03.jpg') no-repeat center top"><a href="javascript:"></a></li>
        <li style="background:url('/001-jiyiwang/Public/Home/images/lanrenzhijia01.jpg') no-repeat center top"><a href="javascript:"></a></li>
       <li style="background:url('/001-jiyiwang/Public/Home/images/lanrenzhijia1.jpg') no-repeat center top"><a href="javascript:"></a></li> 
  </ul>
</div>
</div>  

<!-- Banner END-->
</div>
 <!-- 头部 END -->

 <!-- 主体 -->
 

<div id="middle">
<div id="width_988">
<div id="p_gao"></div>
<div id="s_box1">
    <div class="s_b1_title">
        <div class="fl_l l_t1"><span><strong>名家真品</strong></span>  / TURE</div>
        <div class="fl_r r_t2">MORE>></div>
    </div>
  
  <div class="S_box1_pic">
<div class="fl_l S_b1_p1"><a href="p_pages.html"><img src="/001-jiyiwang/Public/Home/images/pp1_05.jpg" width="260" height="366" />

</a>
<div class="zuopin">
<span class="fl_l zp1">山乡</span>
<span class="fl_r zp2"><strong>￥89999.00</strong></span>
</div>

</div>

<div class="fl_r S_b1_p2">
<ul>
<li><a href="p_pages.html"><img src="/001-jiyiwang/Public/Home/images/pp1_07.jpg" width="210" height="151" /></a>
<div class="zuopin">
<span class="fl_l zp1">幽兰</span>
<span class="fl_r zp2"><strong>￥75000.00</strong></span>
</div>

</li>
<li><a href="p_pages.html"><img src="/001-jiyiwang/Public/Home/images/pp1_007.jpg" width="210" height="151" /></a>
<div class="zuopin">
<span class="fl_l zp1">命运之石</span>
<span class="fl_r zp2"><strong>￥27000.00</strong></span>

</div>

</li>
<li class="last"><a href="p_pages.html"><img src="/001-jiyiwang/Public/Home/images/pp1_09.jpg" width="210" height="151" /></a>
<div class="zuopin">
<span class="fl_l zp1">雄风</span>
<span class="fl_r zp2"><strong>￥34000.00</strong></span>

</div>

</li>
<li><a href="p_pages.html"><img src="/001-jiyiwang/Public/Home/images/pp1_11.jpg" width="210" height="151" /></a>
<div class="zuopin">
<span class="fl_l zp1">晨曲</span>
<span class="fl_r zp2"><strong>￥19000.00</strong></span>

</div>

</li>
<li><a href="p_pages.html"><img src="/001-jiyiwang/Public/Home/images/pp1_16.jpg" width="210" height="151" /></a>
<div class="zuopin">
<span class="fl_l zp1">晨雾</span>
<span class="fl_r zp2"><strong>￥25000.00</strong></span>
</div>

</li>
<li class="last"><a href="p_pages.html"><img src="/001-jiyiwang/Public/Home/images/pp1_008.jpg" width="210" height="151" /></a>
<div class="zuopin">
<span class="fl_l zp1">鲁美宿舍</span>
<span class="fl_r zp2"><strong>￥1800.00</strong></span>

</div>

</li>

</ul>
</div>

</div>
  
  </div>
  
<div id="gao"></div>
<div id="s_box2">
    <div class="s_b2_title">
        <div class="fl_l l_t1"><span><strong>版权信息</strong></span>  / COPYRIGHT</div>
        <div class="fl_r r_t2">MORE>></div>
    </div>
  <div class="S_b2_bottom">


<ul>
<li>
<h1><a href="copyright_1.html"><img src="/001-jiyiwang/Public/Home/images/pp1_25.jpg" width="314" height="201" /></a></h1>
<div class="xushu">
<span class="fl_l zt"><h2>艺术的起源</h2>
杨明智所著图书</span>
<span class="fl_r xh">￥6500.00</span>
</div>


</li>
<li>
<h1><a href="copyright_1.html"><img src="/001-jiyiwang/Public/Home/images/pp1_27.jpg" width="314" height="201" /></a></h1>
<div class="xushu">
<span class="fl_l zt"><h2>设计与美学</h2>
齐佳华所著图书</span>
<span class="fl_r xh">￥75120.00</span>
</div>
</li>
<li class="last">
<h1><a href="copyright_1.html"><img src="/001-jiyiwang/Public/Home/images/pp1_29.jpg" width="314" height="201" /></a></h1>
<div class="xushu">
<span class="fl_l zt"><h2>观念艺术与艺术观念</h2>
顾丞峰</span>
<span class="fl_r xh">￥35465.00</span>
</div>
</li>
<li>
<h1><a href="copyright_1.html"><img src="/001-jiyiwang/Public/Home/images/pp1_35.jpg" width="314" height="201" /></a></h1>
<div class="xushu">
<span class="fl_l zt"><h2>现代中式家具</h2>
展示设计、品牌营销策划</span>
<span class="fl_r xh">￥78645.00</span>
</div>
</li>
<li>
<h1><a href="copyright_1.html"><img src="/001-jiyiwang/Public/Home/images/pp1_38.jpg" width="314" height="201" /></a></h1>
<div class="xushu">
<span class="fl_l zt"><h2>国画山水风景</h2>
国画院国展中心</span>
<span class="fl_r xh">￥45664.00</span>
</div>
</li>
<li class="last">
<h1><a href="copyright_1.html"><img src="/001-jiyiwang/Public/Home/images/pp1_36.jpg" width="314" height="201" /></a></h1>
<div class="xushu">
<span class="fl_l zt"><h2>世博会设计方案</h2>
设计研究院</span>
<span class="fl_r xh">￥5400.00</span>
</div>
</li>
</ul>




</div>

    </div>
      
      
    
<div id="s_box3">
    <div class="s_b3_title">
        <div class="fl_l l_t1"><span><strong>服务</strong></span>  / SERVICE</div>
        <div class="fl_r r_t2">MORE>></div>
    </div>
  <div class="S_b3_bottom">
     <div class="fl_l s_b3_left">
     
      <div class="left_nav">
    <dl>
    <dt>服务 <span>SERVICE</span></dt>
    <dd><a href="javascript:" class="nav_left1">画册制作</a>
    <div class="nav_right1">
    <ul>
    <li>
    <div class="fuwu">
    <div class="fl_l fuwu1"><img src="/001-jiyiwang/Public/Home/images/s_pic1_26.jpg" /></div>
    <div class="fl_r fuwu2">
    <h3>售后服务</h3>
    <p>集艺网始终秉承"以客户为中心，以诚信
为准则"的宗旨，为广大客户提供..</p>
    </div>
    </div>
    </li>
    <li>
    <div class="fuwu">
    <div class="fl_l fuwu1"><img src="/001-jiyiwang/Public/Home/images/s_pic1_29.jpg" /></div>
    <div class="fl_r fuwu2">
    <h3>在线咨询</h3>
    <p>集艺网为客户提供商品信息，版权，交易
等咨询服务...</p>
    </div>
    </div>
    </li>
    <li>
    <div class="fuwu">
    <div class="fl_l fuwu1"><img src="/001-jiyiwang/Public/Home/images/s_pic1_31.jpg" /></div>
    <div class="fl_r fuwu2">
    <h3>合作</h3>
    <p>合作双赢,共享市场,我们期待您的加盟，
实力打造品质...</p>
    </div>
    </div>
    </li>
    </ul>
    </div>
    </dd>
    <dd><a href="javascript:" class="nav_left">书籍出版</a></dd>
    <dd><a href="javascript:" class="nav_left">画册制作</a></dd>
    <dd><a href="javascript:" class="nav_left">艺术品鉴定</a></dd>
    <dd><a href="javascript:" class="nav_left">文创设计</a></dd>
   <dd><a href="javascript:" class="nav_left">版权登记</a></dd>
    <dd class="last"><a href="javascript:" class="nav_left">影视制作</a></dd>
    </dl>
  </div>
     
     
     </div> 
      
       <div class="fl_r s_b3_right">
       <div class="b3_r_top"><a href="person_video.html"><img src="/001-jiyiwang/Public/Home/images/pic1_451.jpg" /></a></div>
        <div class="b3_r_botto">
        <ul>
        <li><span><strong>[第一期]</strong></span><a href="person_video.html">一世华彩梦 水彩画家...</a>
        <p>2014-12-13</p>
        </li>
        
        <li><span><strong>[第一期]</strong></span><a href="person_video.html">石上生花 石刻版画家... </a>
        <p>2014-12-13</p>
        </li>
        
        <li><span><strong>[第一期]</strong></span><a href="person_video.html">往事模糊芦花岸...</a>
        <p>2014-12-13</p>
        </li>
        
        <li><span><strong>[第一期]</strong></span><a href="person_video.html">一来多情付笔墨...</a>
        <p>2014-12-13</p>
        </li>
        
        
        </ul>
        </div>
       </div> 
      
  </div>  

</div>

<div id="gao"></div>
<div id="s_box4">
    <div class="s_b4_title">
        <div class="fl_l l_t1"><span><strong>个人店铺</strong></span>  / PERSON</div>
        <div class="fl_r r_t2">MORE>></div>
    </div>
  <div class="S_b4_bottom">
  <ul>
  <li>
  <div class="shop">
  <div class="fl_l s_pic4"><a href="person.html"><img src="/001-jiyiwang/Public/Home/images/pp1_43.jpg" /></a></div>
  <div class="fl_r s_text4">
  <h3>进入店铺</h3>
  <p><span><strong>魏传义</strong></span>《川江小景》</p>
  <p><strong class="jiage">￥54665.00</strong></p>
  </div>
  </div></li>
  <li>
  <div class="shop">
  <div class="fl_l s_pic4"><a href="person.html"><img src="/001-jiyiwang/Public/Home/images/pp1_46.jpg" /></a></div>
  <div class="fl_r s_text4">
  <h3>进入店铺</h3>
  <p><span><strong>李维汜</strong></span>《林则徐纪念像》</p>
  <p><strong class="jiage">￥5753.00</strong></p>
  </div>
  </div></li>
  <li class="last">
  <div class="shop">
  <div class="fl_l s_pic4"><a href="person.html"><img src="/001-jiyiwang/Public/Home/images/pp1_49.jpg" /></a></div>
  <div class="fl_r s_text4">
  <h3>进入店铺</h3>
  <p><span><strong>林生</strong></span>《江南四月天》</p>
  <p><strong class="jiage">￥70000.00</strong></p>
  </div>
  </div></li>
  
  <li>
  <div class="shop">
  <div class="fl_l s_pic4"><a href="person.html"><img src="/001-jiyiwang/Public/Home/images/pp1_54.jpg" /></a></div>
  <div class="fl_r s_text4">
  <h3>进入店铺</h3>
  <p><span><strong>蔡水况</strong></span>《陆文龙战金兀术》</p>
  <p><strong class="jiage">￥575786.00</strong></p>
  </div>
  </div></li>
  <li>
  <div class="shop">
  <div class="fl_l s_pic4"><a href="person.html"><img src="/001-jiyiwang/Public/Home/images/pp1_55.jpg" /></a></div>
  <div class="fl_r s_text4">
  <h3>进入店铺</h3>
  <p><span><strong>谢澄光</strong></span>《大字麻姑仙坛记》</p>
  <p><strong class="jiage">￥97322.00</strong></p>
  </div>
  </div></li>
  <li class="last">
  <div class="shop">
  <div class="fl_l s_pic4"><a href="person.html"><img src="/001-jiyiwang/Public/Home/images/pp1_56.jpg" /></a></div>
  <div class="fl_r s_text4">
  <h3>进入店铺</h3>
  <p><span><strong>洪瑞生</strong></span>《八卦楼》</p>
  <p><strong class="jiage">￥678678.00</strong></p>
  </div>
  </div></li>
  
  <li>
  <div class="shop">
  <div class="fl_l s_pic4"><a href="person.html"><img src="/001-jiyiwang/Public/Home/images/pp1_561.jpg" /></a></div>
  <div class="fl_r s_text4">
  <h3>进入店铺</h3>
  <p><span><strong>洪永宏</strong></span>《飞云浦》</p>
  <p><strong class="jiage">￥36453.00</strong></p>
  </div>
  </div></li>
  <li>
  <div class="shop">
  <div class="fl_l s_pic4"><a href="person.html"><img src="/001-jiyiwang/Public/Home/images/pp1_60.jpg" /></a></div>
  <div class="fl_r s_text4">
  <h3>进入店铺</h3>
  <p><span><strong>朱鸣冈</strong></span>《盛世难逢今幸逢》</p>
  <p><strong class="jiage">￥657867.00</strong></p>
  </div>
  </div></li>
  <li class="last">
  <div class="shop">
  <div class="fl_l s_pic4"><a href="person.html"><img src="/001-jiyiwang/Public/Home/images/pp1_61.jpg" /></a></div>
  <div class="fl_r s_text4">
  <h3>进入店铺</h3>
  <p><span><strong>林再福</strong></span>《漳州古街》</p>
  <p><strong class="jiage">￥1688.00</strong></p>
  </div>
  </div></li>
  </ul>
  
  
  
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