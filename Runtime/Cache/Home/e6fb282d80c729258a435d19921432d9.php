<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($seo_title); ?></title>
<meta name="keywords" content="<?php echo ($seo_keywords); ?>">
<meta name="description" content="<?php echo ($seo_description); ?>">
<link href="/001-jiyiwang/Public/Home/css/style.css" rel="stylesheet" type="text/css" />
<link href="/001-jiyiwang/Public/Home/css/vipstyle.css" rel="stylesheet" type="text/css" />
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
  
  var money = 200;
  var jifen = 2000;
  $('.buyjifen li').click(function(){
    $(this).addClass('buyjifen_HOVER').siblings().removeClass('buyjifen_HOVER');
       money = $(this).find('span').text();
       jifen = money*10;
       $('#jifen').text(jifen);
  });
  $('#csubmit').click(function(){
    $('#ordtitle').val(jifen+'积分');
    $('#ordprice').val(money);
    $('#ordfee').val(money);
    // alert($('#ordtitle').val());
    // alert($('#ordprice').val());
    // alert($('#ordfee').val());
    $('#cform').submit();
  });
})
</script>
<style>.buyjifen li{ cursor:pointer;}</style>



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

<!-- Banner END-->
</div>

 <!-- 头部 END -->

 <!-- 主体 -->
 
<div id="middle" style="background:url(/001-jiyiwang/Public/Home/images/vip_bj.jpg) repeat-x; float:left">
<div id="width_988">
  <div class="vip_h">
        <div class="vip_left">
          <ul>
                              <li class="vip_xz"><a href="<?php echo U('/'.MODULE_NAME.'/User1/homepage');?>">首页</a></li>
                <li><a href="<?php echo U('/'.MODULE_NAME.'/User1/grzx');?>">个人中心</a></li>
                <li><a href="<?php echo U('/'.MODULE_NAME.'/User1/accountSafety');?>">账户安全</a></li>
                <li><a href="<?php echo U('/'.MODULE_NAME.'/User1/shoppingCart');?>">我的购物车</a></li>
                <li><a href="<?php echo U('/'.MODULE_NAME.'/User1/jyjl');?>">交易记录</a></li>
                <li><a href="<?php echo U('/'.MODULE_NAME.'/User1/leaveMessage');?>">留言管理</a></li>
                <li><a href="<?php echo U('/'.MODULE_NAME.'/User1/creditsManage');?>">积分管理</a></li>
                <li><a href="<?php echo U('/'.MODULE_NAME.'/User1/buyfor');?>">购买兑换</a></li>
                <li><a href="<?php echo U('/'.MODULE_NAME.'/User1/invoiceInfo');?>">增票资质</a></li>
                <li><a href="<?php echo U('/'.MODULE_NAME.'/User1/shippingAddress');?>">收货地址</a></li>
                <li><a href="<?php echo U('/'.MODULE_NAME.'/User1/exchangeGoods');?>">退换货品</a></li>
                <li class="last"></li>
            </ul>
        </div>
        <div class="vip_right">
        <div class="vip_text">
        <div class="vip_nav">
        <ul>
        <li><a href="grzx1.html">购买积分</a></li>
         <li style="float:right;color: #747474;">可用的积分：<span style="color:#F00"><?php echo ($user['jifen']); ?>&nbsp;&nbsp;</span></li>
        </ul>
        </div>
        <form id="cform" action="<?php echo U(MODULE_NAME.'/Pay/createOrder_jifen');?>" method="post">
        <div class="vip_bottom">
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="130" align="left" valign="top"><img src="/001-jiyiwang/Public/Home/images/HY-mgdh.jpg" width="111" height="130" /></td>
              <td valign="top"><table style="font-size:12px" width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="68%" align="left"><label for="textfield"></label>
                    <!-- <input type="text" name="textfield" style="width:370px; padding:0 4px; height:30px; line-height:30px" id="textfield" /> -->
                    <?php echo ($username); ?>
                    </td>
                  <td width="32%" align="left"><input type="submit" name="button" id="button" value="确定" style="visibility:hidden;padding:10px 20px; color:#FFF; background:#e8413b; border:0" /></td>
                </tr>
                <tr>
                  <td height="55" colspan="2" align="left">
                      <div>
                          <ul class="buyjifen">
                                <li><span>0.1</span>元</li>
                                <li><span>10</span>元</li>
                                <li><span>20</span>元</li>
                                <li><span>50</span>元</li>
                                <li><span>100</span>元</li>
                                <li class="buyjifen_HOVER"><span>200</span>元</li>
                                <li><span>500</span>元</li>
                                <!-- <li class="gmdh_hy"><input type="text" size="6" />元</li> -->
                          </ul>
                        </div>
                        <input type="hidden" name="ordid" value="<?php echo ($trade_no); ?>">        <!--商户订单号-->
                        <input type="hidden" id="ordtitle" name="ordtitle">   <!--订单名称-->
                        <input type="hidden" id="ordprice" name="ordprice"> <!-- 产品单价 -->
                        <input type="hidden" id="ordfee" name="ordfee">  <!--付款总金额-->
                        <input type="hidden" name="ordbody" value="积分">         <!--订单描述-->
                  </td>
                  </tr>
                <tr>
                <td height="30" align="left"><strong><span id="jifen">2000</span>积分</strong></td>
                  <td align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="30" colspan="2" align="left"><table style="margin-left:80px" width="50%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td><img class="cursor" id="csubmit" src="/001-jiyiwang/Public/Home/images/BUYxy.jpg" width="127" height="39" /></td>
                      <td>充值有问题,请联系客服</td>
                    </tr>
                  </table></td>
                  </tr>
              </table></td>
            </tr>
          </table>
          <table style="margin-top:150px; " width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td align="left"><strong>关于账户充值后生效问题</strong><br />
1.1元人民币兑换1个积分；<br />
2.网银在线、支付宝、财付通、手机充值卡支付：程序自动处理，立刻生效的 ；<br />
3.其他的支付方式：请在付款后联系我们。我们确认后，管理员手动给你处理，几分钟后即可生效；<br />
4.请您仔细核实被充值用户，防止出错带来的经济损失，一旦交费成功，系统将无法进行回退；<br />
5.到账时间：充值后一般1~10分钟左右快速到账，如遇系统繁忙时，可能会导致到账延时；<br />
6.若银行卡已扣款但积分未到账，请勿重复充值，避免重复扣款。如超24小时账户任未增加，可咨询网站“客服”；<br />
7.因浏览器原因可能造成跳转银行缴费页面失败，请更换浏览器重新尝试。</td>
            </tr>
          </table>
        </form>
        </div>
        
        </div>
        
        
        </div>
    </div>
    
    
</div></div>


<div id="gao1"></div>
<div id="gao1"></div>

 <!-- 主体END -->
 
 <!-- 底部 -->
 
    <div id="footer_1">
<div id="width_988">
<div id="f1_box">
<div class="fl_l f1_text1">
<ul>
<li><a href="about_us.html">关于我们</a></li>
<li><a href="about_us.html">联系我们</a></li>
<li><a href="yishujia.html">艺术家</a></li>
<li class="last"><a href="copyright_1.html">出版中心</a></li>
</ul>
<p>© 2014 集艺网有限公司  京ICP证030173号 </p>
</div>
<div class="fl_r f1_text2">
<p>服务热线： 400 8282828   13163314914</p>
</div>


</div>


</div>


</div>

 <!-- 底部 END -->
</body>
</html>