<?php 
/**
 * 项目公共函数库
 * 打印函数 p
 * 反两次转义
 * 截取字符串  msubstr
 * checkorderstatus （支付宝）在线交易订单支付处理函数
 * orderhandle   （支付宝）更新订单状态，写入订单支付后返回的数据
 * randomkeys  生成随机数
 */
 
function p($var){
    dump($var,1,'<pre>',0);
}
 
// 反两次转义
if (get_magic_quotes_gpc()) {
	function stripslashes_deep($value){
		$value = is_array($value) ?
		array_map('stripslashes_deep', $value) :
		stripslashes($value);
		return $value;
	}
	$_POST = array_map('stripslashes_deep', $_POST);
	$_GET = array_map('stripslashes_deep', $_GET);
	$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
}

// 截取字符串
function msubstr($str, $start=0, $length, $suffix=true, $charset="utf-8")
{
    if(function_exists("mb_substr")){
            if ($suffix && strlen($str)>$length)
                return mb_substr($str, $start, $length, $charset)."...";
        else
                 return mb_substr($str, $start, $length, $charset);
    }
    elseif(function_exists('iconv_substr')) {
            if ($suffix && strlen($str)>$length)
                return iconv_substr($str,$start,$length,$charset)."...";
        else
                return iconv_substr($str,$start,$length,$charset);
    }
    $re['utf-8']   = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";
    $re['gb2312'] = "/[\x01-\x7f]|[\xb0-\xf7][\xa0-\xfe]/";
    $re['gbk']    = "/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";
    $re['big5']   = "/[\x01-\x7f]|[\x81-\xfe]([\x40-\x7e]|\xa1-\xfe])/";
    preg_match_all($re[$charset], $str, $match);
    $slice = join("",array_slice($match[0], $start, $length));
    if($suffix) return $slice."…";
    return $slice;
}


//在线交易订单支付处理函数
//函数功能：根据支付接口传回的数据判断该订单是否已经支付成功；
//返回值：如果订单已经成功支付，返回true，否则返回false；
function checkorderstatus($ordid){
    $Ord=M('Orderlist');
    $ordstatus=$Ord->where('ordid='.$ordid)->getField('ordstatus');
    if($ordstatus==1){
        return true;
    }else{
        return false;    
    }
}
//处理订单函数
//更新订单状态，写入订单支付后返回的数据
function orderhandle($parameter){
    $ordid=$parameter['out_trade_no'];
    $data['payment_trade_no']      =$parameter['trade_no'];
    $data['payment_trade_status']  =$parameter['trade_status'];
    $data['payment_notify_id']     =$parameter['notify_id'];
    $data['payment_notify_time']   =$parameter['notify_time'];
    $data['payment_buyer_email']   =$parameter['buyer_email'];
    $data['ordstatus']             =1;
    // p($data);p($ordid);die;
    $Ord=M('orderlist');
    $Ord->where(array('ordid'=>$ordid))->save($data);
    
}

// 生成随机数
function randomkeys_num($length){
 $pattern='1234567890abcdefghijklmnopqrstuvwxyz'; //字符池
 for($i=0;$i<$length;$i++){
  $key.=$pattern{mt_rand(0,9)};//生成php随机数
 }
 return $key;
}

// 生成随机字母
function randomkeys_alpha($length){
 $pattern='1234567890abcdefghijklmnopqrstuvwxyz'; //字符池
 for($i=0;$i<$length;$i++){
  $key.=$pattern{mt_rand(10,35)};//生成php随机数
 }
 return $key;
}

// 生成随机字母
function randomkeys($length){
 $pattern='1234567890abcdefghijklmnopqrstuvwxyz'; //字符池
 for($i=0;$i<$length;$i++){
  $key.=$pattern{mt_rand(0,35)};//生成php随机数
 }
 return $key;
}
 ?>