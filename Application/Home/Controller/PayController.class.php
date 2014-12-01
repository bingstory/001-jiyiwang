<?php
namespace Home\Controller;
use Think\Controller;
class PayController extends Controller{
	  //在类初始化方法中，引入相关类库    
    public function _initialize() {
        vendor('Alipay.Corefunction');
        vendor('Alipay.Md5function');
        vendor('Alipay.Notify');
        vendor('Alipay.Submit');  
        $this->navtag = 'shop';
    }
    
    // 生成订单
    public function createOrder(){ 
      $ordbuynum = I('ordbuynum','1');
      $userid = session('userid');
      $username = session('fusername');
      $productid = I('productid');
      $ordid = I('ordid');
      $data = array(
        'ordid' => $ordid,
        'ordtime'=> time(),
        'productid' => $productid,
        'ordtitle' => I('ordtitle'),
        'ordbuynum' => $ordbuynum,
        'ordprice'  => I('ordprice'),// 产品单价
        'ordfee' => I('ordfee'),
        'username' => $username,
        'userid'  => $userid,
        // 'ordbody' => I('ordbody')
        );
      // p($data);die;
      M('orderlist')->add($data);
      $this->redirect(MODULE_NAME.'/Pay/orderInfo',array('ordid'=>$ordid,'productid'=>$productid));
      $this->display();
    }

    // 订单信息
    public function orderInfo(){
      $ordid = I('ordid');
      $this->order = D('OrderView')->where(array('ordid'=>$ordid))->find();
      $this->id = $this->order['id'];
      $this->ordid = $ordid;
      $user_id = session('userid');
      $this->addr = M('shippingaddr')->where(array('user_id'=>$user_id))->order('id desc')->select();
      $productid = I('productid');
      // p($this->order);die;
      $productids = explode('-', $productid);
      foreach ($productids as $k => $v) {
        $orderworks[] = M('works')->where(array('id'=>array('eq',$v)))->find();
      }
      $this->assign('orderworks',$orderworks);
      $this->totalmoney = $this->order['ordfee'];
      // p($orderworks);die;
      $this->display();
    }

    // 生成订单
    public function createCart(){ 
      $ordbuynum = I('ordbuynum','1');
      $userid = session('userid');
      $username = session('fusername');
      $productid = I('productid');
      $ordid = I('ordid');
      $data = array(
        'ordid' => $ordid,
        'ordtime'=> time(),
        'productid' => $productid,
        'ordtitle' => I('ordtitle'),
        'ordbuynum' => $ordbuynum,
        'ordprice'  => I('ordprice'),// 产品单价
        'ordfee' => I('ordfee'),
        'username' => $username,
        'userid'  => $userid,
        // 'ordbody' => I('ordbody')
        );
      // p($data);die;
      M('shopcart')->add($data);
      $this->redirect(MODULE_NAME.'/Pay/shopcart',array('ordid'=>$ordid,'productid'=>$productid));
     
      $this->display();
    }

    // 订单信息
    public function shopCart(){
      $userid = session('userid');
      $where  = array('userid'=>$userid,'ordstatus'=>0,'isjifen'=>array('neq','yes'));
      // p($where);die;
      $count = D('CartView')->where($where)->count();
      // p($count);die;
      $this->orderlist  = D('CartView')->where($where)->order('id desc')->select();
      // p($this->orderlist);die;
      $this->totalmoney = M('shopcart')->where($where)->sum('ordfee');
      $this->display();
    }

    // 删除购物车商品  单个删除
    public function deleteCart(){
      $id = I('id');
      M('orderlist')->delete($id);
      redirect($_SERVER['HTTP_REFERER']);
    }
    
    // 删除购物车商品  选中删除
    public function deleteChecked(){
      // p($_POST['items']);die;
      foreach ($_POST['items'] as $key => $v) {
        M('orderlist')->delete($v);
      }
      redirect($_SERVER['HTTP_REFERER']);
    }

    // 购物车订单生成最终订单
    public function cartToOrder(){
      // p($_POST);die;
      foreach ($_POST['productids'] as $key => $v) {
        $count = count($_POST['productids']);
        if($key+1 == $count){
          $del = '';
        }else{
          $del ='-';
        }
        $productid .= $v.$del;
      }
      // p($productid);die;
      $ordid = randomkeys_num(8).randomkeys_alpha(2);
      $ordbuynum = I('ordbuynum','1');
      $userid = session('userid');
      $username = session('fusername');
      $data = array(
        'ordid' => $ordid,
        'ordtime'=> time(),
        'productid' => $productid,
        'ordtitle' => '合并订单',
        'ordbuynum' => $ordbuynum,
        'ordprice'  => I('ordprice'),// 产品单价
        'ordfee' => I('ordfee'),
        'username' => $username,
        'userid'  => $userid,
        // 'ordbody' => I('ordbody')
        );
      // p($data);die;
      M('orderlist')->add($data);
      foreach ($_POST['items'] as $key => $v) {
        M('shopcart')->delete($v);
      }
      $this->redirect(MODULE_NAME.'/Pay/orderInfo',array('ordid'=>$ordid,'productid'=>$productid));
      $this->display();
    }

    // 支付页面
    public function pay(){
      // p($_POST);die;
      $ordid = I('ordid');
      $this->assign('ordid',$ordid);
      $data = array(
        'id'      => I('id'),
         'addrid' => I('addrid'),
         'fapiao' => I('fptype').I('fpt').I('dw'),
        );
      M('orderlist')->save($data);
      $this->order = M('orderlist')->where(array('ordid'=>$ordid))->limit('id desc')->find();
      $productid = I('productid');
      $this->goods = M('works')->find($productid); // p($this->goods);die;
      $this->display();
    }
    //doalipay方法
        /*该方法其实就是将接口文件包下alipayapi.php的内容复制过来
          然后进行相关处理
        */
    public function doalipay(){   // p($_POST);die;
      /*********************************************************
      把alipayapi.php中复制过来的如下两段代码去掉，
      第一段是引入配置项，
      第二段是引入submit.class.php这个类。
      为什么要去掉？？
      第一，配置项的内容已经在项目的Config.php文件中进行了配置，我们只需用C函数进行调用即可；
      第二，这里调用的submit.class.php类库我们已经在PayAction的_initialize()中已经引入；所以这里不再需要；
      *****************************************************/
       // require_once("alipay.config.php");
       // require_once("lib/alipay_submit.class.php");
       
      //这里我们通过TP的C函数把配置项参数读出，赋给$alipay_config；
      $alipay_config=C('alipay_config');  
 
      /**************************请求参数**************************/
      $payment_type      = "1";                     //支付类型 //必填，不能修改
      $notify_url        = C('alipay.notify_url');  //服务器异步通知页面路径
      $return_url        = C('alipay.return_url');  //页面跳转同步通知页面路径
      $seller_email      = C('alipay.seller_email');//卖家支付宝帐户必填
      $out_trade_no      = $_POST['trade_no'];      //商户订单号 通过支付页面的表单进行传递，注意要唯一！
      $subject           = $_POST['ordsubject'];    //订单名称 //必填 通过支付页面的表单进行传递
      $total_fee         = $_POST['ordtotal_fee'];  //付款金额  //必填 通过支付页面的表单进行传递
      $body              = $_POST['ordbody'];       //订单描述 通过支付页面的表单进行传递
      $show_url          = $_POST['ordshow_url'];   //商品展示地址 通过支付页面的表单进行传递
      $anti_phishing_key = "";                      //防钓鱼时间戳 //若要使用请调用类文件submit中的query_timestamp函数
      $exter_invoke_ip   = get_client_ip();         //客户端的IP地址 
      /************************************************************/
    
        //构造要请求的参数数组，无需改动
      $parameter = array(
          "service"           => "create_direct_pay_by_user",
          "partner"           => trim($alipay_config['partner']),
          "payment_type"      => $payment_type,
          "notify_url"        => $notify_url,
          "return_url"        => $return_url,
          "seller_email"      => $seller_email,
          "out_trade_no"      => $out_trade_no,
          "subject"           => $subject,
          "total_fee"         => $total_fee,
          "body"              => $body,
          "show_url"          => $show_url,
          "anti_phishing_key" => $anti_phishing_key,
          "exter_invoke_ip"   => $exter_invoke_ip,
          "_input_charset"    => trim(strtolower($alipay_config['input_charset']))
      );
      // p($alipay_config);die;
      // var_dump($parameter);die;
        //建立请求
        $alipaySubmit = new \AlipaySubmit($alipay_config);
        $html_text = $alipaySubmit->buildRequestForm($parameter,"post", "确认");
        echo $html_text;
    }

    // 生成订单
    public function createOrder_jifen(){ 
      $ordbuynum = I('ordbuynum','1');
      $userid = session('userid');
      $username = session('fusername');
      $productid = I('productid');
      $ordid = I('ordid');
      $data = array(
        'ordid' => $ordid,
        'ordtime'=> time(),
        'productid' => $productid,
        'ordtitle' => I('ordtitle'),
        'ordbuynum' => $ordbuynum,
        'ordprice'  => I('ordprice'),// 产品单价
        'ordfee' => I('ordfee'),
        'username' => $username,
        'userid'  => $userid,
        'isjifen' => 'yes'
        // 'ordbody' => I('ordbody')
        );
      M('orderlist')->add($data);
      $this->redirect(MODULE_NAME.'/Pay/pay_jifen',array('ordid'=>$ordid,'productid'=>$productid));
    }

    // 支付页面
    public function pay_jifen(){
      $ordid = I('ordid');
      $this->assign('ordid',$ordid);
      $this->order = M('orderlist')->where(array('ordid'=>$ordid))->limit('id desc')->find();
      $productid = I('productid');
      $this->goods = M('works')->find($productid); // p($this->goods);die;
      $this->display();
    }

    
        /******************************
        服务器异步通知页面方法
        其实这里就是将notify_url.php文件中的代码复制过来进行处理
        
        *******************************/
    function notifyurl(){
                /*
                同理去掉以下两句代码；
                */ 
                //require_once("alipay.config.php");
                //require_once("lib/alipay_notify.class.php");
                
                //这里还是通过C函数来读取配置项，赋值给$alipay_config
        $alipay_config=C('alipay_config');
        //计算得出通知验证结果
        $alipayNotify = new AlipayNotify($alipay_config);
        $verify_result = $alipayNotify->verifyNotify();
        if($verify_result) {
               //验证成功
                   //获取支付宝的通知返回参数，可参考技术文档中服务器异步通知参数列表
           $out_trade_no   = $_POST['out_trade_no'];      //商户订单号
           $trade_no       = $_POST['trade_no'];          //支付宝交易号
           $trade_status   = $_POST['trade_status'];      //交易状态
           $total_fee      = $_POST['total_fee'];         //交易金额
           $notify_id      = $_POST['notify_id'];         //通知校验ID。
           $notify_time    = $_POST['notify_time'];       //通知的发送时间。格式为yyyy-MM-dd HH:mm:ss。
           $buyer_email    = $_POST['buyer_email'];       //买家支付宝帐号；
           $parameter = array(
      				"out_trade_no" => $out_trade_no, //商户订单编号；
      				"trade_no"     => $trade_no,     //支付宝交易号；
      				"total_fee"    => $total_fee,    //交易金额；
      				"trade_status" => $trade_status, //交易状态
      				"notify_id"    => $notify_id,    //通知校验ID。
      				"notify_time"  => $notify_time,  //通知的发送时间。
      				"buyer_email"  => $buyer_email,  //买家支付宝帐号；
           );
           if($_POST['trade_status'] == 'TRADE_FINISHED') {
                       //
           }else if ($_POST['trade_status'] == 'TRADE_SUCCESS') {                           if(!checkorderstatus($out_trade_no)){
               orderhandle($parameter); 
                           //进行订单处理，并传送从支付宝返回的参数；
               }
            }
                echo "success";        //请不要修改或删除
         }else {
                //验证失败
                echo "fail";
        }    
    }
    
    /*
        页面跳转处理方法；
        这里其实就是将return_url.php这个文件中的代码复制过来，进行处理； 
        */
    function returnurl(){
        // echo 111;die;
       // p($_GET);die;
        $alipay_config=C('alipay_config');
        $alipayNotify = new \AlipayNotify($alipay_config);//计算得出通知验证结果
        $verify_result = $alipayNotify->verifyReturn();
        if($verify_result) {
            //验证成功
            //获取支付宝的通知返回参数，可参考技术文档中页面跳转同步通知参数列表
        $out_trade_no   = $_GET['out_trade_no'];      //商户订单号
        $trade_no       = $_GET['trade_no'];          //支付宝交易号
        $trade_status   = $_GET['trade_status'];      //交易状态
        $total_fee      = $_GET['total_fee'];         //交易金额
        $notify_id      = $_GET['notify_id'];         //通知校验ID。
        $notify_time    = $_GET['notify_time'];       //通知的发送时间。
        $buyer_email    = $_GET['buyer_email'];       //买家支付宝帐号；
            
        $parameter = array(
            "out_trade_no"   => $out_trade_no,      //商户订单编号；
            "trade_no"       => $trade_no,          //支付宝交易号；
            "total_fee"      => $total_fee,         //交易金额；
            "trade_status"   => $trade_status,      //交易状态
            "notify_id"      => $notify_id,         //通知校验ID。
            "notify_time"    => $notify_time,       //通知的发送时间。
            "buyer_email"    => $buyer_email,       //买家支付宝帐号
        );
        
		if($_GET['trade_status'] == 'TRADE_FINISHED' || $_GET['trade_status'] == 'TRADE_SUCCESS') {
		    if(!checkorderstatus($out_trade_no)){
          // p($parameter);die;
		             orderhandle($parameter);  //进行订单处理，并传送从支付宝返回的参数；
                 $ordid=$parameter['out_trade_no'];
                 $Ord2=M('orderlist');
                 $border = $Ord2->where(array('ordid'=>$ordid))->find();
                 $isjifen = $border['isjifen'];
                  if($isjifen == 'yes'){
                      $jifen = $border['ordfee']*10;
                      M('user')->where(array('id'=>session('userid')))->setInc('jifen',$jifen);
                      $this->redirect(MODULE_NAME.'/User1/creditsManage');//跳转到配置项中配置的支付成功页面；
                  }else{
                      $jifen = ceil($border['ordfee']/10);
                      M('user')->where(array('id'=>session('userid')))->setInc('jifen',$jifen);
                      redirect(C('alipay.successpage'));//跳转到配置项中配置的支付成功页面；
                  }
		    }
		        // redirect(C('alipay.successpage'));
		    }else {
		        echo "trade_status=".$_GET['trade_status'];
		        redirect(C('alipay.errorpage'));//跳转到配置项中配置的支付失败页面；
		    }
		}else {
		    //验证失败
		    //如要调试，请看alipay_notify.php页面的verifyReturn函数
		    echo "支付失败！";
		    }
		}

    public function payok(){
      echo 'success';
    }

    public function payerror(){
      echo 'somthing wrong';
    }
}