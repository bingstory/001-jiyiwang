<?php
return array(
	//'配置项'=>'配置值'
	'SHOW_PAGE_TRACE' => 1,
	'TMPL_FILE_DEPR'  => '_',
	'URL_ROUTER_ON'   => true,
	'URL_MODEL' => '1',
	'URL_ROUTE_RULES' => array(
			// 导航路由
			'/^a$/'                      => 'Artist/index',
			'/^news$/'                   => 'News/index',
			'/^s$/'                      => 'Shop/index',
			'/^c$/'                      => 'Customize/index',
			'/^r$/'                      => 'Risingstar/index',
			'/^p$/'                      => 'Publishing/index',
			'/^e$/'                      => 'Enlighten/index',
			'/^u$/'                      => 'Aboutus/index',
			// END 导航路由
			
			// 用户中心
			'/^user$/'                   => 'User1/index',
			'/^login$/'                  => 'User1/login',
			'/^reg$/'                    => 'User1/regByEmail',    // 邮箱注册
			'/^reg2$/'                   => 'User1/regByPhone',    // 手机注册
			'/^logout$/'                 => 'User1/logout',    // 退出
			// +++END+++
			
			'/^n_(\d+)$/'                =>  'News/index?category=:1',   // 新闻 列表
			'/^ns_(\d+)$/'               =>  'News/newsShow?id=:1',      // 新闻 详细页
			
			'/^c_(\d+)$/'                =>  'Customize/index?category=:1',        // 个性化定制 列表
			'/^cs_(\d+)$/'               =>  'Customize/customizeShow?id=:1',      // 个性化定制 详细页
			'/^iwanted$/'                =>  'Customize/iwanted',                  // 我要定制
			
			'/^about_(\d+)$/'            => 'Aboutus/index?id=:1', // 关于我们
			'/^enlighten_(\d+)$/'        => 'Enlighten/index?id=:1',   // 美育启蒙
			'/^ens_(\d+)$/'        => 'Enlighten/eshow?id=:1',   // 美育启蒙  详细页
			
			// 艺术家
			'/^aofficial_(\d+)$/'        => 'Artist/officialsite?artist_id=:1',  //主页首页
			'/^agrjj_(\d+)$/'            => 'Artist/grjj?artist_id=:1',  //个人简介
			'/^aworks_(\d+)$/'           => 'Artist/works?artist_id=:1',  //作品欣赏
			'/^yworks_(\d+)_(\d+)$/'     => 'Artist/works?artist_id=:1&year=:2',//作品欣赏 按年份
			'/^cworks_(\d+)_(\d+)$/'     => 'Artist/works?artist_id=:1&cate_id=:2',//作品欣赏 按分类
			'/^acomment_(\d+)$/'         => 'Artist/celebritycomment?artist_id=:1',  //名家定评
			'/^avideo_(\d+)$/'           => 'Artist/video?artist_id=:1',  //视频
			'/^adynamic_(\d+)$/'         => 'Artist/dynamic?artist_id=:1',  //个人动态
			'/^ashop_(\d+)$/'            => 'Artist/shop?artist_id=:1',  //个人店铺
			'/^ayears_(\d+)$/'           => 'Artist/yearslist?artist_id=:1',  //年谱简表
			'/^agoodsshow_(\d+)_(\d+)$/' => 'Shop/goodsShow?id=:1&artist_id=:2',  //商品详细页
			'/^aworksshow_(\d+)_(\d+)$/' => 'Artist/worksShow?id=:1&artist_id=:2',  //作品详细页
			'/^avideoshow_(\d+)_(\d+)$/' => 'Artist/videoShow?id=:1&artist_id=:2',  //视频详细页

		    // 作品、商品
		    '/^gs_(\d+)_(\d+)$/'         =>  'Shop/goodsShow?id=:1&artist_id=:2',      // 商品 详细页
		    '/^gs2_(\d+)$/'              =>  'Shop/goodsShow?id=:1',      // 商品 详细页

		
		),
);