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
});
</script>



</head>

<body>
 <!-- 头部 -->
 
<div id="header">
<div id="header_top">
<div id="width_988">
<div class="fl_l top_t1">
<div class="fl_l top1"><h1>您好,<a style="color:#fff;" href="<?php echo U('/'.MODULE_NAME.'/User1/homepage');?>"><?php echo msubstr($_SESSION['fusername'],0,11);?></a>！欢迎来到集艺网</h1></div>
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

<?php echo W('Home/homepageBg');?>

<!-- Banner END-->
</div>

 <!-- 头部 END -->

 <!-- 主体 -->
 
<div id="middle">
<div id="width_988">

<?php echo W('Home/artistheader');?>

<div id="p_gao"></div>
  <div id="jb_box">
    <div class="fl_l jb_left">
      <div class="jb_menu">
        <ul>
              <?php if(is_array($years)): $i = 0; $__LIST__ = $years;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class=""><a href="#year_2013" ><?php echo ($v["year"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      
      </div>
      
    </div>
    <div class="fl_r jb_right">
    <div class="year_n">
    <div id="year_2013">
    <h1><img src="/001-jiyiwang/Public/Home/images/jb_1.jpg" width="771" height="37" /></h1>
    <ul>
    <li><span class="fl_l yf1">5月</span><span class="fl_r sq1">（甲申） 69岁 1月23日凌晨7时30分，在北京逝世；</span></li>
    <li><span class="fl_l yf1">4月</span><span class="fl_r sq1">（壬午） 68岁，担任第十届全军美展评委；</span></li>
    <li><span class="fl_l yf1">3月</span><span class="fl_r sq1"> 担任中央美术学院2002级造型类高级研修班中国画班导师；</span></li>
    </ul>
    </div>
    
    <div id="year_2012">
    <h1><img src="/001-jiyiwang/Public/Home/images/jb_1_12.jpg" width="771" height="37" /></h1>
    <ul>
    <li><span class="fl_l yf1">9月</span><span class="fl_r sq1">（辛巳） 67岁 9月，《机车大夫》参加"百年中国画"展览；</span></li>
    
    </ul>
    </div>
    
    <div id="year_2011">
    <h1><img src="/001-jiyiwang/Public/Home/images/jb_1_14.jpg" width="771" height="37" /></h1>
    <ul>
    <li><span class="fl_l yf1">3月13日</span><span class="fl_r sq1">（庚辰） 66岁 4月12日，在上海中国画院举办"周思聪回顾展暨周思聪作品研讨会"；</span></li>
    <li><span class="fl_l yf1">3月26日</span><span class="fl_r sq1">（己卯） 65岁出版《水墨人物作品选》；</span></li>
    <li class="bg1"><span class="fl_l yf1">4月11日</span><span class="fl_r sq1">（戊寅） 64岁 被聘为中国美术学院荣誉教授；创作《十字路口》、《苍穹》。其中《苍穹》参加"深圳第一届国际水墨画双年展"；</span></li>
    
    <li><span class="fl_l yf1">6月11日</span><span class="fl_r sq1">（丁丑） 63岁 10月－11月，应苏州美术家协会邀请，在苏州举办、刘国辉人物画联展；</span></li>
    <li><span class="fl_l yf1">9月10日</span><span class="fl_r sq1">应南京艺术学院邀请，在南京艺术学院举办、刘国辉人物画联展；</span></li>
    </ul>
    </div>
    
    <div id="year_2010">
    <h1><img src="/001-jiyiwang/Public/Home/images/jb_1_19.jpg" width="771" height="37" /></h1>
    <ul>
    <li><span class="fl_l yf1">5月21日</span><span class="fl_r sq1">（丁丑） 63岁 10月－11月，应苏州美术家协会邀请，在苏州举办、刘国辉人物画联展；</span></li>
    <li><span class="fl_l yf1">5月26日</span><span class="fl_r sq1">应南京艺术学院邀请，在南京艺术学院举办、刘国辉人物画联展；</span></li>
    <li><span class="fl_l yf1">12月4日</span><span class="fl_r sq1">（乙亥） 61岁 在新加坡斯民艺苑举办水墨人物画展。并由斯民艺苑出版《水墨人物画集》；</span></li>
    
  
    </ul>
    </div>
    
    <div id="year_2009">
    <h1><img src="/001-jiyiwang/Public/Home/images/jb_1_21.jpg" width="771" height="37" /></h1>
    <ul>
    <li><span class="fl_l yf1">3月20日</span><span class="fl_r sq1">（乙亥） 61岁 在新加坡斯民艺苑举办水墨人物画展。并由斯民艺苑出版《水墨人物画集》；</span></li>
    <li><span class="fl_l yf1">3月23日</span><span class="fl_r sq1">（甲戌） 60岁 应澳大利亚东方艺术家协会邀请赴澳讲学；</span></li>
    <li><span class="fl_l yf1">7月8日</span><span class="fl_r sq1">创作都市人物系列《京郊小站》、《畅饮图》、《醉归图》、《三老醉饮图》、《清音》等；</span></li>
      <li><span class="fl_l yf1">9月8日</span><span class="fl_r sq1">（壬申） 58岁 5月－6月，丸木位里夫妇为看望周思聪再度访华；</span></li>
    <li><span class="fl_l yf1">11月26日</span><span class="fl_r sq1">夏，应邀住京丰宾馆作画；</span></li>
  
    </ul>
    </div>
    
    
      <div id="year_2008">
    <h1><img src="/001-jiyiwang/Public/Home/images/jb_1_23.jpg" width="771" height="37" /></h1>
    <ul>
    <li><span class="fl_l yf1">1月8日</span><span class="fl_r sq1">（戊辰） 54岁1月，结束法国巴黎高等美术学院讲学回国；</span></li>
    
    </ul>
    </div>
    
    
    
    
    </div>
    
    
    
    </div>
  
  </div>


</div></div>

<div id="gao"></div>
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