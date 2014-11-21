<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>集艺网-登陆注册</title>
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


<script type="text/javascript" src="/001-jiyiwang/Public/Home/js/jquery.min.js"></script>
<script type="text/javascript" src="/001-jiyiwang/Public/Home/js/jquery.jslides.js"></script>


</head>

<body>


<div id="header">
<div id="gao3"></div>
<div id="header_nav" style="border-bottom:none">
<div id="width_988"  style=" border-bottom:1px dashed #464648; height:100px">
<div class="fl_l logo"><img src="/001-jiyiwang/Public/Home/images/pic1_07.jpg" width="223" height="74" /></div>

<div class="fl_r home_1"><span class="fl_l"><img src="/001-jiyiwang/Public/Home/images/home1.jpg" width="17" height="17" /></span> <span class="fl_r"><a href="index.html">返回首页</a></span></div>


</div>
</div>

</div>



<div id="middle">
<div id="width_988">
<div class="sj_middle">
<div class="sj_title"><ul>
  <li><a href="<?php echo U('/'.MODULE_NAME.'/reg');?>">邮箱注册</a></li>
  <li><a href="<?php echo U('/'.MODULE_NAME.'/reg2');?>">手机号注册</a></li>
  </ul></div>
  <div class="sj_bott">
    <div class="fl_l sj_m_l">
    <div id="search">
<form action="" method="get">
<p><span class="fl_l s_text"><em style=" color:#fd4140" >*</em> 手机</span> <span class="fl_r input_s"><input name="" type="text" /></span></p>

<p><span class="fl_l s_text"><em style=" color:#fd4140" >*</em> 密码</span> <span class="fl_r input_s"><input name="" type="password" /></span></p>
<p><span class="fl_l s_text"><em style=" color:#fd4140" >*</em> 密码确认</span> <span class="fl_r input_s"><input name="" type="password" /></span></p>
<p><span class="fl_l s_text"><em style=" color:#fd4140" >*</em> 验证码</span> <span class="fl_r input_s"><input name="" type="text" /><span><a href="#">获取短信效验码</a></span></span></p>

<div class="danxuan"><input class="J_CheckBoxItem" id="J_CheckBox_83766958476" type="checkbox" name="items[]" value="83766958476"> 我确认以上信息的准确性,并同意集艺网的<span>服务条款</span></div>
<div class="tijiao"><a href="team.html"><img src="/001-jiyiwang/Public/Home/images/tijiao.jpg" width="204" height="37" /></a></div>


</form>


</div>
</div>
    <div class="fl_r sj_m_r">
    <div class="sj_m_text">
    <div class="xx">
    <h5>什么是集艺网通行证</h5>
    <p>

集艺网通行证可以让您方便的访问集艺网高价值的资源，享受金蝶为您提供的专属的服务；
</p>
 <p>
只需要花上1分钟来创建集艺网通行证，您就可以轻松的访问金蝶的高价值资源，包含集艺网视频、艺术、书籍、服务等。
</p>
    </div>
    <div class="xx2">
    <h5>已经有集艺网通行证</h5>
    <p>邮箱、手机号或用户名：<br><input name="" type="text" /></p>
     <p><br>密码：</br><input name="" type="password" /></p>
     <p><span class="fl_l"><a href="#"><img src="/001-jiyiwang/Public/Home/images/aa110.jpg" width="124" height="36" /></a></span> <span class="fl_r"><a href="#">忘记密码？</a></span></p>
     
    </div>
    
    
    </div>
    </div>

</div>

</div>


  </div>  

</div>




<div id="gao3"></div>


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




</body>
</html>