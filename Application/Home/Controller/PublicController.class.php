<?php 
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller{
	public function codeimg(){
		$Verify = new \Think\Verify();
    	$Verify->fontSize = 13;
        $Verify->length   = 4;
    	// $Verify->bg       = array(149, 229, 190);
    	$Verify->imageW   = 90;
    	$Verify->imageH   = 30;
    	$Verify->useNoise = false;
    	$Verify->useCurve = 1;
    	$Verify->entry();
	}
    
    // 检测验证码是否正确
    public function checkCode(){
        $verify = new \Think\Verify();
        $code = I('code');
        if(!$verify->check($code)){
            echo 0;
        }else{
            echo 1;
        }
    }
}