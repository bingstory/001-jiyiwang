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
      $('#asubmit').click(function(){ 
        var province = $('#province').val();
        var city = $('#city').val();
        var area = $('#area').val();
        var detailaddr = $('#detailaddr').val();
        var name = $('input[name=name]').val();
        if(province == ''){
            alert('请选择省份');
            return false;
        }
        if(city == ''){
            alert('请选择城市');
            return false;
        }
        if(area == ''){
            alert('请选择地区');
            return false;
        }
        if(detailaddr == ''){
            alert('请填写详细地址');
            return false;
        }
        if(name == ''){
            alert('请填写收货人姓名');
            return false;
        }
        if ($("#defaultaddr").is(":checked")){
          var da = 1;
        }else{
          var da = 0;
        }
       
       $.ajax({
            url:"<?php echo U(MODULE_NAME.'/User1/doShippingAddress','','');?>",
            type:'POST',
            data:{
              ischeck    : '1',
              code       : $('input[name=code]').val(),
              province   : $('#province').val(),
              detailaddr : $('#detailaddr').val(),
              defaultaddr : da,
              city       : $('#city').val(),
              area       : $('#area').val(),
              name       : $('input[name=name]').val(),
              phone      : $('#phone').val(),
              fp1        : $('#fp1').val(),
              fp2        : $('#fp2').val(),
              fp3        : $('#fp3').val(),
            },
            success:function(response,status,xhr){  
              if(response == 0){
                alert('只能保存5条地址！');
              }else{
                $('#addrplace').html(response);
                $('#reset1').click();
              }
            }
            });
      });
    $('.editaddr').click(function(){
        $.ajax({
            url:"<?php echo U(MODULE_NAME.'/User1/returnAddr','','');?>",
            type:'POST',
            data:{
               addrid:$(this).attr('data'),
            },
            success:function(response,status,xhr){  
             
                $('#editaddr').html(response).show();
                
            }
            });
          
    });
    });
    </script>
    <script src="/001-jiyiwang/Public/Static/PCASClass.js"></script>
    <style>
       #newaddr{display: none;}
       #editaddr{display: none;}
       #fapiao{display: none;}
       tr.de{display: none;}
    </style>
    <script>
    $(function(){
        $('#addaddr').click(function(){
            $('#newaddr').toggle(100);
        });
        $('#checkfp').click(function(){
            if($(this).is(':checked')){
                $('#fapiao').slideDown(1000);
            }else{
                $('#fapiao').hide();
                $('input[name="fptype"]').prop('checked',false);
                $('input[name="fpt"]').prop('checked',false);
                $('input[name="dw"]').prop('checked',false);
                $('tr.de').hide(100);
            }
        });
        $('#usenew').click(function(){
            $('tr.de').show(100);
        });
        $('#nor').click(function(){
            $('tr.de').hide(100);
                $('input[name="fpt"]').prop('checked',false);
                $('input[name="dw"]').prop('checked',false);
        });
        $('#ordersubmit').click(function(){
          var addrid = $('input[name=addr]:checked').val();
            $('input[name=addrid]').val(addrid);
            $('#orderf').submit();
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
      <li class="step-3"><b style="BACKGROUND: url(images/progress_bg_LEFT.gif) no-repeat;"></b>1 我的购物车 </li>
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
     <div id="addrplace">
     <?php if(is_array($addr)): foreach($addr as $key=>$v): ?><p class="child"><input name="addr" type="radio"  value="<?php echo ($v['id']); ?>" <?php if($v["defaultaddr"] == 1): ?>checked="checked"<?php else: endif; ?>/><?php echo ($v["province"]); ?> <?php echo ($v["city"]); ?> <?php echo ($v["county"]); ?> <?php echo ($v["detailaddr"]); ?> <?php echo ($v["phone"]); ?> <span><a class="editaddr" data="<?php echo ($v["id"]); ?>"><!-- 修改 --></a></span> <span><a href="<?php echo U('/'.MODULE_NAME.'/User1/deleteShippingAddr/id/'.$v['id']);?>">删除</a></span></p><?php endforeach; endif; ?>
     </div>
     
     <input type="reset" id="reset1" style="display:none;">
        <p><a id="addaddr">+新增收货地址</a></p>
        <form >
        <div id="newaddr">
        <p>所在地区： <span>*</span> 
                        <select name="province" id="province" style="height:30px;width:80px;"></select>
                        <select name="city" id="city" style="height:30px;width:80px;"></select>
                        <select name="area" id="area" style="height:30px;width:80px;"></select>
                        <input name="detailaddr" id="detailaddr" placeholder="详细地址" type="text" />
                        <script language="javascript" defer>new PCAS("province","city","area");</script>
        </p>
        <p>收货人姓名：  <span>*</span> <input name="name" type="text" placeholder=" 长度不超过25个字符"/></p>
        <p>手机号码： &nbsp;&nbsp;&nbsp;&nbsp;<input id="phone" name="" type="text" placeholder=" 电话号码、手机号码必须填一项" /></p>
        <p><input class="J_CheckBoxItem" id="defaultaddr" type="checkbox" name="setDefault" value="1" style=" height:10px; width:14px"/>设置为默认收货地址</p>
             <span class="fl_l anliu1"><img style="cursor:pointer;" id="asubmit" src="/001-jiyiwang/Public/Home/images/anl.jpg" width="70" height="28" /></span>
         </div>
         </form>
         <form >
        <div id="editaddr">
        
         </div>
         </form>
      </div>   
      
        </div>   
      
      
      
      
      
      
 
 </div> 
    
<div id="gao_p"></div>
 
 <div id="dz1_box4">

    <div class="dz1_b4_title">
    <h2 style="width:90px;">支付及配送方式</h2>
        
</div>
       
     <div class="dz1_b4_bottom">
     <div class="dz1_b4_text">
        <table width="100%" border="0" cellpadding="10" cellspacing="20">
  <tr>
    <td width="15%"><!-- <input type="radio" name="radio" id="radio" value="radio" /> -->
      <label for="radio">在线支付</label></td>
    <td width="85%">即时到账，支持觉大多数银行卡及部分银行信用卡</td>
  </tr>
  <tr>
    <td><strong>配送方式</strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><!-- <input type="radio" name="radio" id="radio2" value="radio" /> -->
      快递运输</td>
    <td>由商家选择合作快递为您配送</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><!-- <a href="#"><img src="/001-jiyiwang/Public/Home/images/anl.jpg" width="70" height="28" /></a> --></td>
  </tr>
</table>

      </div>   
      
        </div>   
      
      
      
      
      
      
 
 </div>   
    
     <form id="orderf" action="<?php echo U(MODULE_NAME.'/Pay/pay');?>" method="post">
     <div id="gao_p"></div>  
    <div id="dz1_box5">

    <div class="dz1_b5_title">
    <h2>发票</h2>
        
</div>
       
     <div class="dz1_b5_bottom">
     <div class="dz1_b5_text">
    <p><input class="J_CheckBoxItem" id="checkfp" type="checkbox" name="items[]"> 需要发票</p>

    <table id="fapiao" width="100%" border="0" cellpadding="10" cellspacing="20">
      <tr>
        <td width="41%"><input type="radio" name="fptype" id="nor" value="个人普通发票" />
          <label for="radio3">个人&nbsp;普通发票&nbsp;  <!-- <a class="blue" href="#">编辑</a>&nbsp; <a class="blue" href="#">修改</a> --></label></td>
        <td width="59%"><!-- 即时到账，支持觉大多数银行卡及部分银行信用卡 --></td>
      </tr>
      <tr>
        <td><input type="radio" name="fptype" id="usenew" value="" />使用新的发票信息</td>
        <td>&nbsp;</td>
      </tr>
      <tr class="de">
        <td>发票开据方式：
          <input type="radio" name="fpt" id="radio4" value="普通能票（纸质）" />
          普通能票（纸质）</td>
        <td><!-- 由商家选择合作快递为您配送 --></td>
      </tr>
      <tr class="de">
        <td>&nbsp;&nbsp;&nbsp;&nbsp;发票抬头：
          <input type="radio" name="dw" id="radio6" value="个人" /> 
          个人 &nbsp; <input type="radio" name="dw" id="radio7" value="单位" />单位 </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><!-- <a href="#"><img src="/001-jiyiwang/Public/Home/images/anl.jpg" width="70" height="28" /></a> --></td>
      </tr>
    </table>

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
     <?php if(is_array($orderworks)): foreach($orderworks as $key=>$v): ?><div class="pro1">
     <p><span class="fl_l dp">店铺 ：<span><?php echo ($v["artistname"]); ?>个人店铺</span></span>
    
     </p>
     
     <div class="wupin">
     <div class="wupin1">
     <div class="td-inner"><div class="cart-checkbox "></div></div>
     
     <div class="fl_l t4_p"><a href="<?php echo U('/'.MODULE_NAME.'/gs2_'.$v['id']);?>" target="_blank"><img src="/001-jiyiwang/<?php echo ($v["thumb"]); ?>" width="96" height="96" /></a></div>
     <div class="fl_l t4_t">
     <h3><?php echo ($v["title"]); ?></h3>
     <div class="t4_t_t1">
     <ul>
     <li>艺术家：<?php echo ($v["artistname"]); ?></li>                            
     <li>材质：<?php echo ($v["material"]); ?></li> 
     <li class="yf"><span>￥<?php echo ($v["expressfee"]); ?></span> </li>                
              
   
<li>尺寸：<?php echo ($v["size"]); ?> </li>                   
<li>上架时间：<?php echo (date("Y-m-d",$v["pubtime"])); ?></li>
 
     </ul>
     </div>
     
     
     </div>
     <div class="td-inner1"><div class="sz">1</div></div>
     <div class="td-inner2">
     <p>￥<?php echo ($v["price"]); ?></p>
     
     
     </p>
     </div>
      
     </div>
     </div>
     
     </div><?php endforeach; endif; ?>
     
       
       
      
     
   
   
   <div class="dz_bott">
   <p>实付款：<span>￥</span><strong><?php echo ($totalmoney); ?></strong></p>
   <p><span><a href="<?php echo U(MODULE_NAME.'/User1/shopcart');?>"><img src="/001-jiyiwang/Public/Home/images/jj1.jpg" /></a></span><img id="ordersubmit" style="cursor:pointer;" src="/001-jiyiwang/Public/Home/images/jj2.jpg" /><span></span></p>
   </div>
   </div>
   </div>
     
     
      </div>   
      
      
      
      
      
      
      
      <input type="hidden" name="addrid">
      <input type="hidden" name="id" value="<?php echo ($id); ?>">
      <input type="hidden" name="ordid" value="<?php echo ($ordid); ?>">
 
 </div>     
           
  </div>  

</div>

</form>


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