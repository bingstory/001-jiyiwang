<?php
return array(
	//支付宝配置参数
    'alipay_config'=>array(
		'partner' =>'2088102608366035',   //这里是你在成功申请支付宝接口后获取到的PID；
		'key'=>'cwr4iwg1ovexxuzmf5d25t9ibhhzxsre',//这里是你在成功申请支付宝接口后获取到的Key
		'sign_type'=>strtoupper('MD5'),
		'input_charset'=> strtolower('utf-8'),
		'cacert'=> getcwd().'\\cacert.pem',
		'transport'=> 'http',
    ),

     //以上配置项，是从接口包中alipay.config.php 文件中复制过来，进行配置；
    'alipay'   =>array(
		//这里是卖家的支付宝账号，也就是你申请接口时注册的支付宝账号
		'seller_email' =>'1474631458@qq.com',

		//这里是异步通知页面url，提交到项目的Pay控制器的notifyurl方法；
		'notify_url'   =>'http://localhost/001-jiyiwang/index.php/Home/Pay/notifyurl',

		//这里是页面跳转通知url，提交到项目的Pay控制器的returnurl方法；
		'return_url'   =>'http://localhost/001-jiyiwang/index.php/Home/Pay/returnurl',

		//支付成功跳转到的页面，我这里跳转到项目的User控制器，myorder方法，并传参payed（已支付列表）
		'successpage'  =>'http://localhost/001-jiyiwang/index.php/Home/User1/orderDetail',

		//支付失败跳转到的页面，我这里跳转到项目的User控制器，myorder方法，并传参unpay（未支付列表）
		'errorpage'    =>'http://localhost/001-jiyiwang/index.php/Home/Pay/paywrong',
    ),
);