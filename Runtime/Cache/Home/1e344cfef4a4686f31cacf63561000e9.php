<?php if (!defined('THINK_PATH')) exit();?><div id="p_box1">
    <div class="p_b1_t">
        <div class="fl_l article">
            <div class="zuojia"><img src="/001-jiyiwang/<?php echo ($artist["portrait"]); ?>" width="193" height="177" /></div>
            <div class="number">
            <ul>
            <li><p>总访问人数:<h3><?php echo ($artist["view"]); ?></h3></p></li>
             <li class="last"><p>总作品数量：<h3><?php echo ($workscount); ?></h3></p></li>
            </ul>
            </div>
        </div>
        <div class="fl_r inroduction">
        <h3>魏传义<span><a href="#"> http://weichuanyi.jiyi.net/</a></span></h3>
        <p>中国美术家协会福建创作中心名誉主任 | 中国艺术教育促进会理事 | 福建省美术家协会顾问</p>
        <p>艺术成就人生！</p>
        <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
        
        </div>
    </div>
    <div class="p_b1_b">
    <div class="b1_menu">
    <ul>
    <li class="first"><a href="<?php echo U('/'.MODULE_NAME.'/aofficial_'.$artist['id']);?>">首页</a></li>
    <li><a href="<?php echo U('/'.MODULE_NAME.'/agrjj_'.$artist['id']);?>">个人简介</a></li>
    <li><a href="<?php echo U('/'.MODULE_NAME.'/aworks_'.$artist['id']);?>">作品欣赏</a></li>
    <li><a href="<?php echo U('/'.MODULE_NAME.'/acomment_'.$artist['id']);?>">名家评价</a></li>
    <li><a href="<?php echo U('/'.MODULE_NAME.'/avideo_'.$artist['id']);?>">视频</a></li>
    <li><a href="<?php echo U('/'.MODULE_NAME.'/ayears_'.$artist['id']);?>">年谱简表</a></li>
    <li><a href="<?php echo U('/'.MODULE_NAME.'/adynamic_'.$artist['id']);?>">个人动态</a></li>
    <li><a href="<?php echo U('/'.MODULE_NAME.'/ashop_'.$artist['id']);?>">个人商店</a></li>
    </ul>
    </div>
    
    </div>

</div>