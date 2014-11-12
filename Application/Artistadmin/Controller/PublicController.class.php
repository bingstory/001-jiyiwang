<?php 
namespace Artistadmin\Controller;
use Think\Controller;
class PublicController extends Controller{
	public function verifycode(){
		$Verify = new \Think\Verify();
    	$Verify->fontSize = 13;
        $Verify->length   = 4;
    	$Verify->bg       = array(149, 229, 190);
    	$Verify->imageW   = 90;
    	$Verify->imageH   = 30;
    	$Verify->useNoise = false;
    	$Verify->useCurve = false;
    	$Verify->entry();
	}
}

