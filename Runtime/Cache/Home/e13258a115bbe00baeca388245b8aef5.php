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
<div id="c_box2">
    <div class="fl_l c_b2_left">
        <div class="c_b2_title"><span class="fl_l c2_l"><span class="fl_l"><img src="/001-jiyiwang/Public/Home/images/cp1_19.jpg" width="27" height="27" /></span> &nbsp;&nbsp;<span class="fl_r"><strong>我要定制</strong></span></span><span class="fl_r c2_r">位置：<a href="<?php echo U('/Home/news');?>">个性化定制</a> > 我要定制</span></div>
        <div id="gao"></div>
        <div class="w_b2_text">
    <h2>个性化定制表单</h2>
  
    <div class="w_b2_t1"><span class="fl_l w_b2_l"><h5>需求类型</h5><p>(勾选，可单选可多选)</p></span><span class="fl_r w_b2_r"><input class="J_CheckBoxItem" id="J_CheckBox_83766958476" type="checkbox" name="items[]" value="83766958476"> 书法 <input class="J_CheckBoxItem" id="J_CheckBox_83766958476" type="checkbox" name="items[]" value="83766958476"> 绘画 <input class="J_CheckBoxItem" id="J_CheckBox_83766958476" type="checkbox" name="items[]" value="83766958476"> 音乐 <input class="J_CheckBoxItem" id="J_CheckBox_83766958476" type="checkbox" name="items[]" value="83766958476"> 手工艺 <input class="J_CheckBoxItem" id="J_CheckBox_83766958476" type="checkbox" name="items[]" value="83766958476"> 文学 <input class="J_CheckBoxItem" id="J_CheckBox_83766958476" type="checkbox" name="items[]" value="83766958476"> 文创产品 <input class="J_CheckBoxItem" id="J_CheckBox_83766958476" type="checkbox" name="items[]" value="83766958476"> 其他</span></div>
    <div class="w_b2_t2"><span class="fl_l w_b2_l"><h5>数量</h5></span><span class="fl_r w_b2_r">&nbsp;</span></div>
    
    <div class="w_b2_t2"><span class="fl_l w_b2_l"><h5>希望收货时间</h5></span><span class="fl_r w_b2_r">&nbsp;</span></div>
    <div class="w_b2_t1"><span class="fl_l w_b2_l"><h5>作者</h5><p>(从驻站艺术家库中挑选，会更方便快捷)</p></span><span class="fl_r w_b2_r">&nbsp;</span></div>
     <div class="w_b2_t1"><span class="fl_l w_b2_l"><h5>题材</h5><p>(例如绘画可写明是国画还是油画，人物还是风景等等)</p></span><span class="fl_r w_b2_r">&nbsp;</span></div>
     
     <div class="w_b2_t3"><h5>需求描述<span> (详列表单未尽需求，作为以后拟定创作方案和定制协议的依据，包括尺寸、形式、内容说明等等)</span></h5></div>
    
    
    </div>
    
    <div class="tijiao3"><h1><a href="#"><img src="/001-jiyiwang/Public/Home/images/tj3.jpg" width="280" height="40" /></a></h1>
    </div>
    </div>
    <div class="fl_r st_b2_right">
    <div style="width:224px;margin:0px auto 0 auto;">

    <div class="vtitle">个性化定制</div>
    <div class="vcon">
    <ul class="vconlist clearfix">
    <?php if(is_array($nav)): foreach($nav as $key=>$v): ?><li <?php if($key == 0): ?>class="one"<?php else: ?>class="three"<?php endif; ?>><a href="<?php echo U('/'.MODULE_NAME.'/c_'.$v['id']);?>"><?php echo ($v["name"]); ?></a></li><?php endforeach; endif; ?>
      <li class="three"><a href="<?php echo U('/Home/iwanted');?>">我要定制</a></li>
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