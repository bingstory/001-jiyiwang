<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_FILE_DEPR'  => '_',
	'URL_ROUTER_ON'   => true,
	'URL_MODEL' => '1',
	'URL_ROUTE_RULES' => array(
		// 导航路由
		'/^a$/' => 'Artist/index',
		'/^news$/' => 'News/index',
		'/^s$/' => 'Shop/index',
		'/^c$/' => 'Customize/index',
		'/^r$/' => 'Risingstar/index',
		'/^p$/' => 'Publishing/index',
		'/^e$/' => 'Enlighten/index',
		'/^u$/' => 'Aboutus/index',
		// END 导航路由
         
        // 用户中心
		'user' => 'User/index',
		'login' => 'User/login',
		'register' => 'User/register',
		// +++END+++
        
		'/^n_(\d+)$/'       =>  'News/index?category=:1',   // 新闻 列表
		'/^ns_(\d+)$/'      =>  'News/newsShow?id=:1',      // 新闻 详细页
		
		'/^c_(\d+)$/'       =>  'Customize/index?category=:1',        // 个性化定制 列表
		'/^cs_(\d+)$/'      =>  'Customize/customizeShow?id=:1',      // 个性化定制 详细页
		'/^iwanted$/' =>  'Customize/iwanted',                  // 我要定制

		'/^about_(\d+)$/'   => 'Aboutus/index?id=:1', // 关于我们
		'/^enlighten_(\d+)$/'   => 'Enlighten/index?id=:1'   // 美育启蒙

		),
);