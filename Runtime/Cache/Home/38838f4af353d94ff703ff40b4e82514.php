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

<link href="/001-jiyiwang/Public/Home/css/lanrenzhijia2.css" type="text/css" rel="stylesheet" />
<script src="/001-jiyiwang/Public/Home/js/jquery.min.js"></script>
<script>
$(function (){ 
  $('ul.m_h1').addClass('current');
  $('ul.m_h1 h3').addClass('h3');
  $('ul.bn').hover(function(){
    $(this).find('h3').addClass('h3');
    $(this).siblings().find('h3').removeClass('h3');
    $(this).addClass("current");
    $(this).siblings().removeClass("current");
  });
});
</script>
<style>
  #menu .current{
    height: 108px;
    background: #e8413b;
    color: #fff;
    padding-top: 10px;
  }
  #menu .bn .h3{
    color: #fff;
  }
</style>



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
<div id="menu"> 
<?php if(is_array($category)): foreach($category as $key=>$v): ?><ul class="m_h<?php echo ($key+1); ?> bn"> 
    <h3><?php echo ($v["name"]); ?></h3> 
    <?php if(is_array($v["child"])): foreach($v["child"] as $key=>$va): ?><li><?php echo ($va["name"]); ?></li><?php endforeach; endif; ?> 
  </ul><?php endforeach; endif; ?>
  
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
  <?php if(is_array($celebrityworks1)): foreach($celebrityworks1 as $key=>$v): ?><div class="fl_l S_b1_p1">
      <a href="<?php echo U('/'.MODULE_NAME.'/gs_'.$v['id'].'_'.$v['artist_id']);?>">
        <img src="/001-jiyiwang/<?php echo ($v["thumb2"]); ?>" width="260" height="366" />
      </a>
      <div class="zuopin">
        <span class="fl_l zp1"><a href="<?php echo U('/'.MODULE_NAME.'/gs_'.$v['id'].'_'.$v['artist_id']);?>"><?php echo (msubstr($v["title"],0,10,0)); ?></a></span>
        <span class="fl_r zp2"> <strong>￥<?php echo ($v["price"]); ?></strong></span>
      </div>
    </div><?php endforeach; endif; ?>
<div class="fl_r S_b1_p2">
<ul>
<?php if(is_array($celebrityworks6)): $i = 0; $__LIST__ = $celebrityworks6;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 3 );++$i;?><li <?php if(($mod) == "2"): ?>class="last"<?php endif; ?>><a href="<?php echo U('/'.MODULE_NAME.'/gs_'.$v['id'].'_'.$v['artist_id']);?>"><img src="/001-jiyiwang/<?php echo ($v["thumb"]); ?>" width="210" height="151" /></a>
<div class="zuopin">
  <span class="fl_l zp1"><a href="<?php echo U('/'.MODULE_NAME.'/gs_'.$v['id'].'_'.$v['artist_id']);?>"><?php echo (msubstr($v["title"],0,8,0)); ?></a></span>
<span class="fl_r zp2"><strong>￥<?php echo ($v["price"]); ?></strong></span>
</div>
</li><?php endforeach; endif; else: echo "" ;endif; ?>


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
<?php if(is_array($cp6)): foreach($cp6 as $key=>$v): ?><li <?php if(($key+1)%3 == 0): ?>class="last"<?php endif; ?>>
<h1><a href="<?php echo U('/'.MODULE_NAME.'/gs_'.$v['id'].'_'.$v['artist_id']);?>"><img src="/001-jiyiwang/<?php echo ($v["thumb"]); ?>" width="314" height="201" /></a></h1>
<div class="xushu">
<span class="fl_l zt"><h2><?php echo (msubstr($v["title"],0,15,0)); ?></h2>
<?php echo ($v["artistname"]); ?>所著图书</span>
<span class="fl_r xh">￥<?php echo ($v["price"]); ?></span>
</div>
</li><?php endforeach; endif; ?>
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
       <div class="b3_r_top"><a href="#"><img src="/001-jiyiwang/Public/Home/images/pic1_451.jpg" /></a></div>
        <div class="b3_r_botto">
        <ul>
        <li><span><strong>[第一期]</strong></span><a href="#">一世华彩梦 水彩画家...</a>
        <p>2014-12-13</p>
        </li>
        
        <li><span><strong>[第一期]</strong></span><a href="#">石上生花 石刻版画家... </a>
        <p>2014-12-13</p>
        </li>
        
        <li><span><strong>[第一期]</strong></span><a href="#">往事模糊芦花岸...</a>
        <p>2014-12-13</p>
        </li>
        
        <li><span><strong>[第一期]</strong></span><a href="#">一来多情付笔墨...</a>
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
  <?php if(is_array($gs9)): foreach($gs9 as $key=>$v): ?><li <?php if(($key+1)%3 == 0): ?>class="last"<?php endif; ?>>
  <div class="shop">
  <div class="fl_l s_pic4"><a href="<?php echo U('/'.MODULE_NAME.'/gs_'.$v['id'].'_'.$v['artist_id']);?>"><img src="/001-jiyiwang/<?php echo ($v["thumb"]); ?>" width="152" height="85" /></a></div>
  <div class="fl_r s_text4">
  <h3><a href="<?php echo U('/'.MODULE_NAME.'/aofficial_'.$v['artist_id']);?>" style="color:#fff;">进入店铺</a></h3>
  <p><span><strong><?php echo ($v["artistname"]); ?></strong></span><?php echo (msubstr($v["title"],0,7,0)); ?></p>
  <p><strong class="jiage">￥54665.00</strong></p>
  </div>
  </div></li><?php endforeach; endif; ?>
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