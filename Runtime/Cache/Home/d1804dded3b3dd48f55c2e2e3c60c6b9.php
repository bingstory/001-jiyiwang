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
    $(function(){
      
      $('#psubmit').click(function(){
        var paytype = $('input:radio[name="bank"]:checked').val();
        if(paytype == null){
          alert('请先选择支付方式');
          return false;
        }
        $('form[name=pay]').submit();
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
 
<div id="middle">
<div id="width_988">

<div id="p_p_box1"><img src="/001-jiyiwang/Public/Home/images/p_p1_07.jpg" width="986" height="148" /></div>
  
  <div id="gao_p"></div>

<div id="x_box2">

<div class="x_b2_title">
<p>位置：<a href="index.html">首页</a> ><a href="shop.html">艺术商城</a> > 商品订单</p>

</div>




</div>



<div id="dz_box2">

<div class="block"> 
    <div class="progress clearfix">
    <ul class="progress-1">
      <li class="step-3"><b></b>1 我的购物车 </li>
      <li class="step-1"><b></b>2 填写核对订单信息 </li>
      <li class="step-2">3 成功提交订单 </li>
    </ul>
  </div>
   
  

 
</div>


</div>






  <div id="gao_p"></div>
    
  <div id="dz1_box3">

    <div class="dz1_b3_title">
    <h2>收货信息</h2>
        
</div>
       
     <div class="dz1_b3_bottom">
     <div class="dz1_b3_text">
     <p class="child"><input name="" type="radio" value="" />辽宁省 沈阳市 和平区南京南街和鸿国际花园A座2006（孙小洁收）15542253200 <span><a href="#">修改</a></span> <span><a href="#">删除</a></span>
     </p>
     <p><a href="#">+新增收货地址</a></p>
<p>所在地区： <span>*</span> 
<select name="中国大陆" size="1" style=" width:100px;height:30px"><option>中国大陆</option>
  <option>美国</option>
  <option>英国</option>
  
</select><select name="中国大陆" size="1" style="width:300px;height:30px"><option>请选择城市</option>
<option>武汉</option>
<option>黄冈</option>
</select></p>
<p>收货人姓名：  <span>*</span> <input name="" type="text" value=" 长度不超过25个字符" onfocus="if (value ==' 长度不超过25个字符'){value =''}" onblur="if (value ==''){value=' 长度不超过25个字符'}"/></p>
<p>手机号码： &nbsp;&nbsp;&nbsp;&nbsp;<input name="" type="text" value=" 电话号码、手机号码必须填一项" onfocus="if (value ==' 电话号码、手机号码必须填一项'){value =''}" onblur="if (value ==''){value=' 电话号码、手机号码必须填一项'}"/></p>
     
     <span class="fl_l anliu1"><a href="#"><img src="/001-jiyiwang/Public/Home/images/anl.jpg" width="70" height="28" /></a></span>
      </div>   
      
        </div>   
      
      
      
      
      
      
 
 </div> 
    
<div id="gao_p"></div>
 
 <div id="dz1_box4">

    <div class="dz1_b4_title">
    <h2>收货信息</h2>
        
</div>
       
     <div class="dz1_b4_bottom">
     <div class="dz1_b4_text">
    <p>在线支付</p>
      </div>   
      
        </div>   
      
      
      
      
      
      
 
 </div>   
    
     
     <div id="gao_p"></div>  
    <div id="dz1_box5">

    <div class="dz1_b5_title">
    <h2>发票</h2>
        
</div>
       
     <div class="dz1_b5_bottom">
     <div class="dz1_b5_text">
    <p><input class="J_CheckBoxItem" id="J_CheckBox_83766958476" type="checkbox" name="items[]" value="83766958476"> 需要发票</p>
      </div>   
      
        </div>   
      
      
      
      
      
      
 
 </div>     
    
    
<div id="gao_p"></div> 
    <div id="dz_box3">

    <div class="jy_b3_title">
    <div class="fl_l jy_b3_l"><h3 style=" margin-bottom:10px">确认订单信息</h3></div>
      
     </div>
       
     <div class="dz_b3_bottom">
     <div class="dz1_b3_text">
     
  
        
     <div class="dz1_b3_t4">
     
     <div class="t4_text">
     <div class="fl_l t4_l">确认订单信息</div>
     <div class="fl_r t4_r">
     <ul>
     <li>快递</li>
     <li>数量</li>
     <li class="last">价格</li>
     
     
     </ul>
     </div>
     </div>
     <div class="pro1">
     <p><span class="fl_l dp">店铺 ：<span><?php echo ($order["artistname"]); ?>个人店铺</span></span>
    
     </p>
     
     <div class="wupin">
     <div class="wupin1">
     <div class="td-inner"><div class="cart-checkbox "><!-- <input class="J_CheckBoxItem" id="J_CheckBox_83766958476" type="checkbox" name="items[]" value="83766958476"> --></div></div>
     
     <div class="fl_l t4_p"><a href="#"><img src="/001-jiyiwang/Public/Home/images/jiaoyi1_23.jpg" /></a></div>
     <div class="fl_l t4_t">
     <h3><?php echo ($ordtitle); ?></h3>
     <div class="t4_t_t1">
     <ul>
     <li>艺术家：陈文苑</li>                            
     <li>材质：纸本水墨</li> 
     <li class="yf"><span>￥<?php echo ($order["expressfee"]); ?></span> </li>                
              
   
<li>尺寸：<?php echo ($order["size"]); ?> </li>                   
<li>上架时间：2014-06-06</li>
 
     </ul>
     </div>
     
     
     </div>
     <div class="td-inner1"><div class="sz"><?php echo ($order["ordbuynum"]); ?></div></div>
     <div class="td-inner2">
     <p>￥<?php echo ($order["price"]); ?></p>
     
     
     </p>
     </div>
      
     </div>
     </div>
     
     </div>
       
   <div class="dz_bott">
   <p>实付款：<span>￥</span><strong><?php echo ($order["ordfee"]); ?></strong></p>
   <p><span><a href="shdz2.html"><img src="/001-jiyiwang/Public/Home/images/jj1.jpg" /></a></span><a href="pay.html"><img src="/001-jiyiwang/Public/Home/images/jj2.jpg" /></a><span></span></p>
   </div>
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