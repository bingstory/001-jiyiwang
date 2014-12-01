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
  $('#toprev').attr('href',function(){
   return $('#hidepages .prev').attr('href')
  });
  $('#tonext').attr('href',function(){
   return $('#hidepages .next').attr('href')
  });
  // alert();
});
</script>



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

<div id="banner3">
<div id="width_988">
<div id="b3_bg">
<img src="/001-jiyiwang/Public/Home/images/pee1_03.jpg" width="988" height="393" />
</div>
</div>

<!-- Banner END-->
</div>

 <!-- 头部 END -->

 <!-- 主体 -->
 
<div id="middle">
<div id="width_988">

<?php echo W('Home/artistheader');?>

<div id="p_gao"></div>
<div id="p_box2">
    <div class="p_b2_title">
        <div class="fl_l l_t1"><span><strong>个人商店</strong></span>  / SHOP</div>
        <div class="fl_r r_t2">MORE>></div>
    </div>

<div id="p_gao"></div>
<div id="video_box">
    <div class="video_t">
        <div class="video_pic">
            <div class="fl_l v_left"><img src="/001-jiyiwang/Public/Home/images/vv1.jpg" width="421" height="387" /></div>
            <div class="fl_r v_right">
                <ul>
                <?php if(is_array($attachment)): foreach($attachment as $key=>$v): ?><li>
                        <div class="fl_l v_pic"><img src="/001-jiyiwang/Public/Home/images/vv2.jpg" width="127" height="90" /></div>
                      <div class="fl_r v_xz">
                        <h3 style="text-align:left;"><?php echo (msubstr($v["name"],0,20,0)); ?></h3>
                           <p><span class="fl_l xz"><a href="#">大图下载 <img src="/001-jiyiwang/Public/Home/images/pp.jpg" width="16" height="16" /></a></span><span class="fl_r xz2">所需积分：<?php echo ($v["credits"]); ?></span></p>
                            <p><span class="fl_l xz">创作日期：<?php echo ($works["createyear"]); ?></span><span class="fl_r xz2">上架时间：<?php echo (date("Y-m-d",$works["pubtime"])); ?></span></p>
                        </div>
                    </li><?php endforeach; endif; ?>
              </ul>
                
              <div class="page_ys">  <p><span class="fl_l"><?php echo ($atpage); ?>/<?php echo ($pagecount); ?>页<div id="hidepages" style="display:none;"><?php echo ($page); ?></div></span></p>
                <p><span class="fl_r"><a href="#" id="toprev"><img src="/001-jiyiwang/Public/Home/images/l_p1.jpg" width="100" height="35" /></a> &nbsp;&nbsp;<a href=""  id="tonext"><img src="/001-jiyiwang/Public/Home/images/l_p2.jpg" width="100" height="35" /></a></span></p></div>
                
            </div>
        
        
        
        </div>
    
    
    </div>

<div class="video_b">
<?php echo ($works["content"]); ?>
</div>



</div>



</div></div>

<input type="hidden" name="artist_id" value="<?php echo ($artist_id); ?>">
<div id="gao5"></div>

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