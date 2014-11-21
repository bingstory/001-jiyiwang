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

<div id="banner">
<div id="lanrenzhijia">
  <ul id="slides">
      <li style="background:url('/001-jiyiwang/Public/Home/images/lanrenzhijia01.jpg') no-repeat center top">
        <a href="javascript:"></a>
      </li>
      <li style="background:url('/001-jiyiwang/Public/Home/images/lanrenzhijia04.jpg') no-repeat center top">
        <a href="javascript:"></a>
      </li>
      <li style="background:url('/001-jiyiwang/Public/Home/images/lanrenzhijia03.jpg') no-repeat center top">
        <a href="javascript:"></a>
      </li>
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
<div id="a_box1">
    <div class="a_b1_title">
        <div class="fl_l l_t1"><span><strong>艺术家索引</strong></span>  / SEARCH</div>
        </div>
        <div class="selectNumberScreen">
  <div id="selectList" class="screenBox screenBackground">
    <dl class="listIndex" attr="艺术分类">
      <dt><span class="fl_l sign"><img src="/001-jiyiwang/Public/Home/images/pic1.jpg" width="7" height="12" /></span> &nbsp;<span class="fl_r biaoti">艺术分类</span></dt>
      <dd><a href="#" values2="" values1="" attrval="全部" class="one" style="color:#ea413a">全部</a> 
      <a href="#" values2="" values1="" attrval="国画">国画</a>
      <a href="#" values2="" values1="" attrval="油画">油画</a> 
      <a href="#" values2="" values1="" attrval="书法">书法</a> 
      <a href="#" values2="" values1="" attrval="版画">版画</a> 
      <a href="#" values2="" values1="" attrval="雕塑">雕塑</a> 
      <a href="#" values2="" values1="" attrval="摄影">摄影</a> 
      <a href="#" values2="" values1="" attrval="漆画">漆画</a> 
      <a href="#" values2="" values1="" attrval="戏剧">戏剧</a> 
      <a href="#" values2="" values1="" attrval="水粉水彩">水粉水彩</a>
      <a href="#" values2="" values1="" attrval="当代艺术">当代艺术</a>
      <a href="#" values2="" values1="" attrval="音乐">音乐</a> 
      <a href="#" values2="" values1="" attrval="舞蹈">舞蹈</a> 
      <a href="#" values2="" values1="" attrval="手工艺">手工艺</a> 
      <a href="#" values2="" values1="" attrval="影视">影视</a> 
      <a href="#" values2="" values1="" attrval="戏曲">戏曲</a> 
      <a href="#" values2="" values1="" attrval="其它">其它</a> 
      
    </dd>
    </dl>
    <dl class="listIndex" attr="姓氏字母">
      <dt><span class="fl_l sign"><img src="/001-jiyiwang/Public/Home/images/pic1.jpg" width="7" height="12" /></span> &nbsp;<span class="fl_r biaoti">姓氏字母</span></dt>
      <dd><a href="#" values2="" values1="" attrval="全部" class="one" style="color:#ea413a">全部</a>           
      <a href="#" values2="" values1="" attrval="A">A</a>
      <a href="#" values2="" values1="" attrval="B">B</a>
      <a href="#" values2="" values1="" attrval="C">C</a>
      <a href="#" values2="" values1="" attrval="D">D</a>
      <a href="#" values2="" values1="" attrval="E">E</a>
          
          <a href="#" values2="" values1="" attrval="F">F</a>
           <a href="#" values2="" values1="" attrval="G">G</a>
            <a href="#" values2="" values1="" attrval="H">H</a>
             <a href="#" values2="" values1="" attrval="I">I</a>
              <a href="#" values2="" values1="" attrval="J">J</a>
               <a href="#" values2="" values1="" attrval="K">K</a>
                <a href="#" values2="" values1="" attrval="L">L</a>
                 <a href="#" values2="" values1="" attrval="M">M</a>
                  <a href="#" values2="" values1="" attrval="N">N</a>
                   <a href="#" values2="" values1="" attrval="O">O</a>
                    <a href="#" values2="" values1="" attrval="P">P</a>
                     <a href="#" values2="" values1="" attrval="Q">Q</a>
                      <a href="#" values2="" values1="" attrval="R">R</a>
                       <a href="#" values2="" values1="" attrval="S">S</a>
                        <a href="#" values2="" values1="" attrval="T">T</a>
                         <a href="#" values2="" values1="" attrval="U">U</a>
                          <a href="#" values2="" values1="" attrval="V">V</a>
                           <a href="#" values2="" values1="" attrval="W">W</a>
                            <a href="#" values2="" values1="" attrval="X">X</a>
                             <a href="#" values2="" values1="" attrval="Y">Y</a>
                              <a href="#" values2="" values1="" attrval="Z">Z</a>
          </dd>
                   
    </dl>
    <dl class=" listIndex" attr="所在地区" style=" border-bottom:none;">
      <dt><span class="fl_l sign"><img src="/001-jiyiwang/Public/Home/images/pic1.jpg" width="7" height="12" /></span> &nbsp;<span class="fl_r biaoti">所在地区</span></dt>
      <dd>
          <a href="#" values2="" values1="" attrval="全部" class="one" style="color:#ea413a">全部</a>
          <a href="#" values2="" values1="" attrval="北京">北京</a>      
      <a href="#" values2="" values1="" attrval="上海">上海</a> 
      <a href="#" values2="" values1="" attrval="广东">广东</a>
           <a href="#" values2="" values1="" attrval="浙江">浙江</a>      
      <a href="#" values2="" values1="" attrval="香港">香港</a> 
      <a href="#" values2="" values1="" attrval="江苏">江苏</a>
           <a href="#" values2="" values1="" attrval="山东">山东</a>      
      <a href="#" values2="" values1="" attrval="河南">河南</a> 
      <a href="#" values2="" values1="" attrval="陕西">陕西</a>
           <a href="#" values2="" values1="" attrval="四川">四川</a>      
      <a href="#" values2="" values1="" attrval="天津">天津</a> 
      <a href="#" values2="" values1="" attrval="安徽">安徽</a>
           <a href="#" values2="" values1="" attrval="福建">福建</a>      
      <a href="#" values2="" values1="" attrval="台湾">台湾</a> 
      <a href="#" values2="" values1="" attrval="辽宁">辽宁</a>
           <a href="#" values2="" values1="" attrval="澳门">澳门</a>      
      <a href="#" values2="" values1="" attrval="湖南">湖南</a> 
      <a href="#" values2="" values1="" attrval="山西">山西</a>
           <a href="#" values2="" values1="" attrval="云南">云南</a>      
      <a href="#" values2="" values1="" attrval="重庆">重庆</a> 
    
    </dd>
    </dl>
    
  </div>

</div>
        

<div class="a_b1_bottom">
        <div class="fl_l search">
            <div class="fl_top">
            <form action="" method="get">
            <input name="" type="text" value=" &nbsp;搜索 |"  onfocus="if (value ==' &nbsp;搜索 |'){value =''}" onblur="if (value ==''){value=' &nbsp;搜索 |'}"/>
            
            </form>
            <div class="fenlei">
            
            <ul>
            <span>按照</span>
            <li><a href="#">艺术家姓名</a></li>
             <li class="last"><a href="#">艺术品名称</a></li>
            </ul>
            
            </div>
            
          </div>
             <div class="fl_bottom">
             <div style="text-align:center; width:295px; height:325px;margin:0 auto;">
    <!-- 选项卡开始 -->
    <div class="nTab">
      <!-- 标题开始 -->
      <div class="TabTitle">
        <ul id="myTab0">
          <li class="active" onmouseover="nTabs(this,0);">艺术家个人自助入驻</li>
          <li class="normal" onmouseover="nTabs(this,1);">经纪人入驻</li>
          
          
        </ul>
      </div>
      <!-- 内容开始 -->
      <div class="TabContent">
        <div id="myTab0_Content0">
        <h1><a href="#"><img src="/001-jiyiwang/Public/Home/images/art1_03.jpg" width="120" height="24" /></a><a href="#"><img src="/001-jiyiwang/Public/Home/images/art1_05.jpg" width="126" height="24" /></a></h1>
        <div class="s_input">
        <form action="" method="get">
       <p> 账号 &nbsp;<input name="" type="text" /></p>
        <p> 密码&nbsp; <input name="" type="text" />
        <span><a href="#">忘记密码</a></span></p>
        <p class="last"> 验证码&nbsp; <input name="" type="text"  style=" width:70px"/>
          <span><img src="/001-jiyiwang/Public/Home/images/art1_10.jpg" width="65" height="23" /></span><span>看不清 换一张</span></p>
          
          <div class="anliu"><span class="fl_l denglu"><a href="#"><img src="/001-jiyiwang/Public/Home/images/art1_14.jpg" width="88" height="32" /></a></span><span class="fl_r zhuce"><a href="#"><img src="/001-jiyiwang/Public/Home/images/art1_16.jpg" width="88" height="32" /></a></span></div>
        </form>
        
        </div>
        
        
        </div>
        <div id="myTab0_Content1" class="none">
        <div id="myTab0_Content0">
        <h1><a href="#"><img src="/001-jiyiwang/Public/Home/images/art1_03.jpg" width="120" height="24" /></a><a href="#"><img src="/001-jiyiwang/Public/Home/images/art1_05.jpg" width="126" height="24" /></a></h1>
        <div class="s_input">
        <form action="" method="get">
       <p> 账号 &nbsp;<input name="" type="text" /></p>
        <p> 密码&nbsp; <input name="" type="text" />
        <span><a href="#">忘记密码</a></span></p>
        <p class="last"> 验证码&nbsp; <input name="" type="text"  style=" width:70px"/>
          <span><img src="/001-jiyiwang/Public/Home/images/art1_10.jpg" width="65" height="23" /></span><span>看不清 换一张</span></p>
          
          <div class="anliu"><span class="fl_l denglu"><a href="#"><img src="/001-jiyiwang/Public/Home/images/art1_14.jpg" width="88" height="32" /></a></span><span class="fl_r zhuce"><a href="#"><img src="/001-jiyiwang/Public/Home/images/art1_16.jpg" width="88" height="32" /></a></span></div>
        </form>
        
        </div>
        
        
        </div>
        </div>
        
      </div>
 
    <!-- 选项卡结束 -->
  </div>
             
             
      </div>        
             
             </div>
        </div>
        <div class="fl_r news">
         <div class="n_b2_title">
        <div class="fl_l l_t1"><span><strong>明日之星</strong></span>  / STAR</div>
        <div class="fl_r r_t2">MORE>></div>
    </div>
    <div class="news1">
        <ul>
<li><a href="star_1.html"><img src="/001-jiyiwang/Public/Home/images/pic1_29.jpg" width="295" height="145" /></a>
<div class="zuopin">
<span class="fl_l zp1">代表作品：赤壁夜游</span>
<span class="fl_r zp2">姓名：魏传义</span>
</div>

</li>
<li class="last"><a href="star_1.html"><img src="/001-jiyiwang/Public/Home/images/pic1_31.jpg" width="295" height="145" /></a>
<div class="zuopin">
<span class="fl_l zp1">代表作品：卡纳克神庙</span>
<span class="fl_r zp2">姓名：翁铭泉</span>
</div>

</li>
<li><a href="star_1.html"><img src="/001-jiyiwang/Public/Home/images/pic1_35.jpg" width="295" height="145" /></a>
<div class="zuopin">
<span class="fl_l zp1">代表作品：五湾缘印象之三</span>
<span class="fl_r zp2">姓名：王雪峰</span>
</div>

</li>
<li class="last"><a href="star_1.html"><img src="/001-jiyiwang/Public/Home/images/pic1_37.jpg" width="295" height="145" /></a>
<div class="zuopin">
<span class="fl_l zp1">代表作品：九江烟水亭</span>
<span class="fl_r zp2">姓名：孙煌</span>
</div>

</li>

</ul>
        
        </div>
        </div>

  </div>
  
  
  
  </div>
  
  <div id="gao"></div>
<div id="a_box2">
    <div class="a_b2_title">
        <div class="fl_l l_t1"><span><strong>艺术家推荐</strong></span>  / RECOMMEND</div>
        <div class="fl_r r_t2">MORE>></div>
    </div>
<div class="a_b2_bottom">

    <div class="a_b2_t2">
        <?php if(is_array($recartist1)): foreach($recartist1 as $key=>$v): ?><div class="fl_l b2_p1"><a href="<?php echo U('/'.MODULE_NAME.'/aofficial_'.$v['id']);?>"><img src="/001-jiyiwang/<?php echo ($v["homeportrait"]); ?>" width="493" height="351" /></a>
            <div id="hot">
               <?php echo ($v["username"]); ?>
               </div>
            </div><?php endforeach; endif; ?>
            <div class="fl_r b2_p2">

            <ul>
            <?php if(is_array($recartist4)): foreach($recartist4 as $key=>$v): ?><li><a href="<?php echo U('/'.MODULE_NAME.'/aofficial_'.$v['id']);?>"><img src="/001-jiyiwang/<?php echo ($v["portrait"]); ?>" width="246" height="175" /></a>
          
          <div id="hot">
<?php echo ($v["username"]); ?>
</div>
          </li><?php endforeach; endif; ?>
           
            </ul>
            
            </div>
    </div>
    <div class="a_b2_b2">
    <ul>
    <?php if(is_array($recartist8)): foreach($recartist8 as $key=>$v): ?><li><a href="<?php echo U('/'.MODULE_NAME.'/aofficial_'.$v['id']);?>"><img src="/001-jiyiwang/<?php echo ($v["portrait"]); ?>" width="246" height="175" /></a>
    <div id="hot">
<?php echo ($v["username"]); ?>
</div>
    </li><?php endforeach; endif; ?>
     
    </ul>
    
    
    
    </div>
</div>

</div>

   <div id="gao"></div>
<div id="a_box3">
    <div class="a_b3_title">
        <div class="fl_l l_t1"><span><strong>艺术家列表</strong></span>  / LIST</div>
        <div class="fl_r r_t2">MORE>></div>
    </div>
<div class="a_b3_bottom">
  <ul>
  <?php if(is_array($artistlist)): foreach($artistlist as $key=>$v): ?><li class="line">
  <div class="contain">
      <div class="fl_l artor">
          <div class="fl_l a_pic"><img src="/001-jiyiwang/<?php echo ($v["portrait"]); ?>" width="141" height="141" /></div>
          <div class="fl_r a_text">
          <h3><?php echo ($v["chinesename"]); ?></h3>
          <p>籍贯 <?php echo ($v["nativeplace"]); ?></p>
          <p>职业 <?php echo ($v["career"]); ?></p>
          <p>毕业院校 <?php echo ($v["graduate"]); ?></p>
          
          </div>
      </div>
      <div class="fl_r a_product">
      <h4><a href="<?php echo U('/'.MODULE_NAME.'/aofficial_'.$v['id']);?>">进入艺术家个人官网</a></h4>
      <div class="c_a_pic">
      <div class="a_pic1">
      <ul>
      <?php if(is_array($v["works"])): foreach($v["works"] as $key=>$va): ?><li <?php if(($key+1) == 3): ?>class="last"<?php endif; ?>><a href="#"><img src="/001-jiyiwang/<?php echo ($va["thumb"]); ?>" width="115" height="78" /></a></li><?php endforeach; endif; ?>
      </ul>
       </div>
      </div>
      
      </div>
  </div>
  
  </li><?php endforeach; endif; ?>
  
  </ul>
  
  
  
  </div>
  
  <div class="page_list"><?php echo ($page); ?></div>
  
  
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