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
        <div class="c_b2_title"><span class="fl_l c2_l"><span class="fl_l"><img src="/001-jiyiwang/Public/Home/images/cp1_19.jpg" width="27" height="27" /></span> &nbsp;&nbsp;<span class="fl_r"><strong>版权政策</strong></span></span><span class="fl_r c2_r">位置：<a href="#">出版中心</a> > <a href="#">版权服务</a> > 版权政策</span></div>
        <div class="c_b2_text">
        <p>一、版权又称为著作权，根据自愿原则，对下列作品进行著作权登记：软件著作权[1]；文字作品；口述作品；音乐、戏剧、曲艺、舞蹈、杂技艺术作品；美术、建筑作品；摄影作品；电影作品和以类似摄制电影的方法创作的作品；工程设计图、产品设计图、地图、示意图等图形作品和模型作品；法律、行政法规规定的其他作品。 此外还受理其他与著作权有关事项的登记；各类作品（计算机软件除外）授权事项登记；录音、录像制品登记；其他与著作权有关的受国家版权局的指定，中心进行的登记等。</p>
         <p>二、 出版境外音像制品合同登记：
受国家版权局的委托，音像出版单位出版境外音像制品，包括以录音带、录像带、激光唱盘、激光视盘及其他音像制品形式的出版合同，报中心认证登记。[2]</p>
<p>三、著作权质押合同登记。</p>
<p>四、 提供与各项登记有关的服务；
提供与各项登记有关的咨询服务；代为起草与各项登记有关的文书，联系与登记有关的事务等。</p>
<div class="c_b2_text1">
<h5>国际公约</h5>
<p>一、《伯尔尼公约》</p>
<p>二、《国际版权公约》</p>
<p>三、《日内瓦唱片公约》</p>
<p>四、世界贸易组织的《与贸易有关的知识产权协议》</p>
<p>五、《世界知识产权组织版权条约》</p>
<p>六、《世界知识产权组织表演和录音制品条约》</p>

<h5>登记意义</h5>
<p>1、为维护作者或其他著作权人和作品使用者的合法权益，有助于解决因著作权归属造成的著作权纠纷，为解决著作权纠纷提供初步证据；</p>
<p>2、有利于作品、软件的许可、转让，有利于作品、软件的传播和经济价值的实现；</p>
<p>3、个人自我价值的体现，企业创新实力的表现；</p>
<p>4、作品实行自愿登记。作品不论是否登记，作者或其他著作权人依法取得的著作权不受影响。</p>

        </div>
   <div class="c_b2_text2">     
     <div class="fl_l"><h5>不予登记</h5>
<p>1、不受著作权法保护的作品；</p>
<p>2、超过著作权保护期的作品；</p>
<p>3、依法禁止出版和传播的作品。</p></div> 
     
     <div class="fl_r"><h5>撤销登记</h5>
<p>1、登记后发现有第四条规定的情况的；</p>
<p>2、登记后发现与事实不相符的；</p>
<p>3、申请人申请撤销原作品登记的；</p>
<p>4、登记后发现是重复登记的。</p>
</div>   
  <div id="gao3"></div>



     </div>
     
<div class="c_b2_text1">
<h5>登记机关</h5>
<p>各省、自治区、直辖市版权局负责本辖区的作者或其他著作权人的作品登记工作。国家版权局负责外国以及台湾、香港和澳门地区的作者或其他著作权人的作品登记工作。中国版权保护中心受国家版权局委托，负责外国以及台湾、香港和澳门地区的作者或其他著作权人的作品登记工作。</p>
        </div>
        
 <div class="c_b2_text1">
<h5>试行办法</h5>
<p>第一条　为维护作者或其他著作权人和作品使用者的合法权益，有助于解决因著作权归属造成的著作权纠纷，并为解决著作权纠纷提供初步证据，特制定本办法。</p>
<p>第二条　作品实行自愿登记。作品不论是否登记，作者或其他著作权人依法取得的著作权不受影响。</p>
<p>第三条　各省、自治区、直辖市版权局负责本辖区的作者或其他著作权人的作品登记工作。国家版权局负责外国以及台湾、香港和澳门地区的作者或其他著作权人的作品登记工作。</p>
<p>第四条　作品登记申请者应当是作者、其他享有著作权的公民、法人或者非法人单位和专有权所有人及其代理人。</p>
<p>第五条　属于下列情况之一的作品，作品登记机关不予登记：</p>
<p>1、不受著作权法保护的作品；</p>
<p>2、超过著作权保护期的作品；</p>
<p>3、依法禁止出版、传播的作品。</p>
<p>第六条　有下列情况的，作品登记机关应撤销其登记：</p>
<p>1、登记后发现有本办法第五条所规定的情况的；</p>
<p>2、登记后发现与事实不相符的；</p>
<p>3、申请人申请撤销原作品登记的；</p>
<p>4、登记后发现是重复登记的。</p>
<p>第七条　作者或其他享有著作权的公民的所属辖区，原则上以其身份证上住址所在地的所属辖区为准。合作作者及有多个著作权人情况的，以受托登记者所属辖区为准。法人或者非法人单位所属辖区以其营业场所所在地所属辖区为准。</p>
<p>第八条　作者或其他著作权人申请作品登记应出示身份证明和提供表明作品权利归属的证明(如：封面及版权页的复印件、部分手稿的复印件及照片、样本等)，填写作品登记表，并交纳登记费。其他著作权人申请作品登记还应出示表明著作权人身份的证明(如继承人应出示继承人身份证明；委托作品的委托人应出示委托合同)。专有权所有人应出示证明其享有专有权的合同。</p>
<p>第九条　登记作品经作品登记机关核查后，由作品登记机关发给作品登记证。作品登记证按本办法所附样本由登记机关制作。登记机关的核查期限为一个月，该期限自登记机关收到申请人提交的所有申请登记的材料之日起计算。</p>
<p>第十条　作品登记表和作品登记证应载有作品登记号。作品登记号格式为作登字：（地区编号)—(年代)—(作品分类号)—(顺序号)号。国家版权局负责登记的作品登记号不含地区编号。</p>
<p>第十一条　各省、自治区、直辖市版权局应每月将本地区作品登记情况报国家版权局。</p>
<p>第十二条　作品登记应实行计算机数据库管理．并对公众开放。查阅作品应填写查阅登记表，交纳查阅费。</p>
<p>第十三条　有关作品登记和查阅的费用标准另行制定。</p>
<p>第十四条　录音、录像制品的登记参照本办法执行。</p>
<p>第十五条　计算机软件登记按《计算机软件著作权登记办法》执行。</p>
<p>第十六条　本办法由国家版权局负责解释。</p>
<p>第十七条　本办法自一九九五年一月一日起生效。</p>


        </div>       
        
         
    </div>
    </div>
    <div class="fl_r c_b2_right">
    <div style="width:224px;margin:0px auto 0 auto;">

  <div class="vtitle">版权服务</div>
    <div class="vcon">
    <ul class="vconlist clearfix">
      <li class="one"><a href="javascript:;">版权政策</a></li>
      <li><a href="javascript:;">版权登记说明</a></li>
      <li class="three"><a href="javascript:;">版权登记流程</a></li>
    </ul>
  </div>

  <div class="vtitle">出版流程</div>
    <div class="vcon" style="display: none;">
    <ul class="vconlist clearfix">
      <li class="one"><a href="javascript:;">书籍出版流程</a></li>
      
      <li class="three"><a href="javascript:;">影视制作出版流程</a></li>
    </ul>
  </div>
  <div class="vtitle">书籍系列</div>
    <div class="vcon" style="display: none;">
    <ul class="vconlist clearfix">
      <li class="four"><a href="javascript:;">书籍展示</a></li>
    </ul>
  </div>
    
    
     <div class="vtitle">影视制作</div>
    <div class="vcon" style="display: none;">
    <ul class="vconlist clearfix">
      <li class="one"><a href="javascript:;">中心简介</a></li>
      <li><a href="javascript:;">影视广告制作</a></li>
            <li><a href="javascript:;">电视栏目制作</a></li>
            <li><a href="javascript:;">闽南文化专题</a></li>
            
      <li class="three"><a href="javascript:;">纪录片制作</a></li>
    </ul>
  </div>
    
    
    <div class="vtitle">联系我们</div>
    <div class="vcon" style="display: none;">
    <ul class="vconlist clearfix">
      <li class="one"><a href="javascript:;">业务联系</a></li>
      
      <li class="three"><a href="javascript:;">乘车地图</a></li>
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