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
      $('#osubmit').click(function(){
        var isLogin = "<?php echo session('userid');?>"; 
        if(isLogin == ''){
          alert('请先登录 集艺网！');
          return false;
        }
        var URL1 = "<?php echo U(MODULE_NAME.'/Pay/createOrder');?>";
        $('form[name=order]').attr('action',URL1);
        $('form[name=order]').submit();
      });
       $('#cartsubmit').click(function(){
        var URL1 = "<?php echo U(MODULE_NAME.'/Pay/createCart');?>";
        var isLogin = "<?php echo session('userid');?>"; 
        if(isLogin == ''){
          alert('请先登录 集艺网！');
          return false;
        }
        $('form[name=order]').attr('action',URL1);
        $('form[name=order]').submit();
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
<div class="fl_l logo"><a href="/001-jiyiwang"><img src="/001-jiyiwang/Public/Home/images/pic1_07.jpg" width="223" height="74" /></a></div>

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

<div id="p_p_box1"><img src="/001-jiyiwang/Public/Home/images/p_p1_07.jpg" width="988" height="148" /></div>
  
  <div id="gao_p"></div>
<div id="p_p_box2">
    <div class="pp_b2_tit">
    <div class="fl_l home">位置：<a href="index.html">首页</a> ><a href="shop.html">艺术商城</a> > 商品详情</div>
    <div class="fl_r car"><span class="fl_l g_car"><img src="/001-jiyiwang/Public/Home/images/car.jpg" width="15" height="15" /></span><span class="fl_r g_text"><a href="gwcwk.html">我的购物车（1）</a></span></div>
    </div>
    <div id="height"></div>
    <div class="pp_b2_bott">
    
    <div class="shangpin">
    <div class="fl_l pp_b2_pic"><img src="/001-jiyiwang/<?php echo ($goods["thumb"]); ?>" width="421" height="387" /></div>
    <div class="fl_r pp_b2_text">
    <h1><?php echo ($goods["title"]); ?></h1>
    <div class="much">
    <span class="fl_l much1">
    <p>作品编号：<?php echo ($goods["works_id"]); ?></p>
    <p>价格：<strong>￥<?php echo ($goods["price"]); ?></strong></p>
    </span>
     <span class="fl_r much2">
     <p>111</p>
     <p>累计评价</p>
     </span>
    </div>
    
   <div class="yishujia"> 
   <p><span class="fl_l left">艺术家：<?php echo ($goods["chinesename"]); ?></span>                            <span class="fl_r right">材质：<?php echo ($goods["material"]); ?></span></p>
<p><span class="fl_l left">尺寸：<?php echo ($goods["size"]); ?> </span>                              <span class="fl_r right">分类：<?php echo ($goods["shopcatename"]); ?></span></p>
<p><span class="fl_l left">创作日期：<?php echo ($goods["createyear"]); ?>年</span>                           <span class="fl_r right"> 上架时间：<?php echo (date("Y-m-d",$goods["pubtime"])); ?></span></p>
<p><span class="fl_l left">快递: <?php echo ($goods["expressfee"]); ?></span>                           <span class="fl_r right"><span>下载</span> <img src="/001-jiyiwang/Public/Home/images/pp.jpg" width="16" height="16" /></span></p>
<p><span class="fl_l left">推荐指数：
<?php if($goods["star"] == 1): ?><span><img src="/001-jiyiwang/Public/Home/images/pee1_23.jpg" width="16" height="16" /></span>
<?php elseif($goods["star"] == 2): ?><span><img src="/001-jiyiwang/Public/Home/images/pee1_23.jpg" width="16" height="16" /><img src="/001-jiyiwang/Public/Home/images/pee1_23.jpg" width="16" height="16" /></span>
<?php elseif($goods["star"] == 3): ?><span><img src="/001-jiyiwang/Public/Home/images/pee1_23.jpg" width="16" height="16" /><img src="/001-jiyiwang/Public/Home/images/pee1_23.jpg" width="16" height="16" /><img src="/001-jiyiwang/Public/Home/images/pee1_23.jpg" width="16" height="16" /></span>
<?php elseif($goods["star"] == 4): ?><span><img src="/001-jiyiwang/Public/Home/images/pee1_23.jpg" width="16" height="16" /><img src="/001-jiyiwang/Public/Home/images/pee1_23.jpg" width="16" height="16" /><img src="/001-jiyiwang/Public/Home/images/pee1_23.jpg" width="16" height="16" /><img src="/001-jiyiwang/Public/Home/images/pee1_23.jpg" width="16" height="16" /></span>
<?php else: ?>
<span><img src="/001-jiyiwang/Public/Home/images/pee1_23.jpg" width="16" height="16" /><img src="/001-jiyiwang/Public/Home/images/pee1_23.jpg" width="16" height="16" /><img src="/001-jiyiwang/Public/Home/images/pee1_23.jpg" width="16" height="16" /><img src="/001-jiyiwang/Public/Home/images/pee1_23.jpg" width="16" height="16" /></span><?php endif; ?>
</span></p> 


    </div>
    
    <div class="tijiao1">

<form name="order" action="" method="post">
<input type="hidden" name="ordid" value="<?php echo ($trade_no); ?>">        <!--商户订单号-->
<input type="hidden" name="ordtitle" value="<?php echo ($goods["title"]); ?>">   <!--订单名称-->
<input type="hidden" name="ordprice" value="<?php echo ($goods["price"]); ?>"> <!-- 产品单价 -->
<input type="hidden" name="ordfee" value="<?php echo ($totalmoney); ?>">  <!--付款总金额-->
<input type="hidden" name="ordbody" value="">         <!--订单描述-->
<input type="hidden" name="ordshow_url" value="/001-jiyiwang/<?php echo ($goods["thumb"]); ?>">     <!--商品展示地址-->
<input type="hidden" name="productid" value="<?php echo ($goods["id"]); ?>">

<span><img style="cursor:pointer;" id="osubmit" src="/001-jiyiwang/Public/Home/images/p_p1_14.jpg" width="136" height="41" /></span>
<span><img style="cursor:pointer;" id="cartsubmit" src="/001-jiyiwang/Public/Home/images/p_p1_16.jpg" width="182" height="41" /></span>
</form>
    <blockquote>
      <p><span class="fl_l shop"><a href="<?php echo U('/'.MODULE_NAME.'/aofficial_'.$artist_id);?>"><img src="/001-jiyiwang/Public/Home/images/p_p1_24.jpg" width="15" height="13" /> 进入店铺</a> &nbsp;<a href="#"><img src="/001-jiyiwang/Public/Home/images/p_p1_21.jpg" width="16" height="14" /> 分享</a></span></p></div>
    </blockquote>
    </div>
    

    </div>
</div>
</div>
 
  <div id="gao_p"></div>
    
    <div id="p_p_box3">
    <div class="pp_b3_title">
        <div class="fl_l l_t1"><span><strong>作品简介</strong></span>  / INTRO</div>
        </div>
        
       <div class="pp_b3_text">
       <?php echo ($goods["content"]); ?>
       </div> 
        
        
    </div>
    
    
    <div id="gao_p"></div>
    
    <div id="p_p_box4">
    <div class="pp_b4_title">
        <div class="fl_l l_t1"><span><strong>商品评价</strong></span>  / MESSAGE</div>
        </div>
        
       <div class="pp_b4_text">
      
       <ul>
       <li>
       <div class="tt">
       <div class="fl_l tt1">
       <p>果真是世间奇物</p>
       <span>2014-10-23</span>
       </div>
       <div class="fl_l tt2"><span>分类：</span>国画</div>
       <div class="fl_r tt3">
       <span class="fl_l img"><a href="#"><img src="/001-jiyiwang/Public/Home/images/p_p1_30.jpg" width="38" height="39" /></a></span>
       <span class="fl_r name">fsdjfajs</span>
       </div>
       </div>
       </li>
       
       <li>
       <div class="tt">
       <div class="fl_l tt1">
       <p>还不错啦，希望继续加油！~</p>
       <span>2014-10-23</span>
       </div>
       <div class="fl_l tt2"><span>分类：</span>国画</div>
       <div class="fl_r tt3">
       <span class="fl_l img"><a href="#"><img src="/001-jiyiwang/Public/Home/images/p_p1_33.jpg" width="38" height="38" /></a></span>
       <span class="fl_r name">fsdjfajs</span>
       </div>
       </div>
       </li>
       
       <li>
       <div class="tt">
       <div class="fl_l tt1">
       <p>还不错啦，希望继续加油！~</p>
       <span>2014-10-23</span>
       </div>
       <div class="fl_l tt2"><span>分类：</span>国画</div>
       <div class="fl_r tt3">
       <span class="fl_l img"><a href="#"><img src="/001-jiyiwang/Public/Home/images/p_p1_35.jpg" width="38" height="38" /></a></span>
       <span class="fl_r name">fsdjfajs</span>
       </div>
       </div>
       </li>
       
       <li>
       <div class="tt">
       <div class="fl_l tt1">
       <p>还不错啦，希望继续加油！~</p>
       <span>2014-10-23</span>
       </div>
       <div class="fl_l tt2"><span>分类：</span>国画</div>
       <div class="fl_r tt3">
       <span class="fl_l img"><a href="#"><img src="/001-jiyiwang/Public/Home/images/p_p1_37.jpg" width="38" height="38" /></a></span>
       <span class="fl_r name">fsdjfajs</span>
       </div>
       </div>
       </li>
       </ul>
       
       
       
        </div>  

</div>
       
      
         <div id="gao_p"></div>
       <div id="p_p_box5">
    <div class="pp_b5_title">
        <div class="fl_l l_t1"><span><strong>商品评价</strong></span>  / MESSAGE</div>
        </div>
       
         
         
         <div id="pp_b5_bottom">
<div class="pp_b5_pic">
<ul>
<?php if(is_array($othergoods)): $i = 0; $__LIST__ = array_slice($othergoods,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 5 );++$i;?><li <?php if(($mod) == "4"): ?>class="last"<?php endif; ?>><a href="<?php echo U('/'.MODULE_NAME.'/agoodsshow_'.$v['id'].'_'.$v['artist_id']);?>"><img src="/001-jiyiwang/<?php echo ($v["thumb2"]); ?>" width="156" height="200" /></a>
<div class="jianjie">
 <p><a href="<?php echo U('/'.MODULE_NAME.'/agoodsshow_'.$v['id']);?>"><?php echo (msubstr($v["title"],0,11,0)); ?></a></p>
  <p><strong>￥<?php echo ($v["price"]); ?></strong></p>
<p>推荐指数：
<?php if($v["star"] == 1): ?><span><img src="/001-jiyiwang/Public/Home/images/pee1_23.jpg" width="16" height="16" /></span>
<?php elseif($v["star"] == 2): ?><span><img src="/001-jiyiwang/Public/Home/images/pee1_23.jpg" width="16" height="16" /><img src="/001-jiyiwang/Public/Home/images/pee1_23.jpg" width="16" height="16" /></span>
<?php elseif($v["star"] == 3): ?><span><img src="/001-jiyiwang/Public/Home/images/pee1_23.jpg" width="16" height="16" /><img src="/001-jiyiwang/Public/Home/images/pee1_23.jpg" width="16" height="16" /><img src="/001-jiyiwang/Public/Home/images/pee1_23.jpg" width="16" height="16" /></span>
<?php elseif($v["star"] == 4): ?><span><img src="/001-jiyiwang/Public/Home/images/pee1_23.jpg" width="16" height="16" /><img src="/001-jiyiwang/Public/Home/images/pee1_23.jpg" width="16" height="16" /><img src="/001-jiyiwang/Public/Home/images/pee1_23.jpg" width="16" height="16" /><img src="/001-jiyiwang/Public/Home/images/pee1_23.jpg" width="16" height="16" /></span>
<?php else: ?>
<span><img src="/001-jiyiwang/Public/Home/images/pee1_23.jpg" width="16" height="16" /><img src="/001-jiyiwang/Public/Home/images/pee1_23.jpg" width="16" height="16" /><img src="/001-jiyiwang/Public/Home/images/pee1_23.jpg" width="16" height="16" /><img src="/001-jiyiwang/Public/Home/images/pee1_23.jpg" width="16" height="16" /></span><?php endif; ?>
</p>
</div>
</li><?php endforeach; endif; else: echo "" ;endif; ?>

</ul>
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