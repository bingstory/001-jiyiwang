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

    // 关注
    public function concern(){
        $id = $_POST['id'];
        $uid = session('userid');
        $result = M('works')->where(array('id'=>$id))->setInc('concern');
        $works  = M('works')->find($id);
        $concern  = $works['concern']; 
        if($result){
            echo $concern;
        }
    }
    

    // 喜欢
    public function like(){
        $id = $_POST['id'];
        $uid = session('userid');
        $result = M('works')->where(array('id'=>$id))->setInc('favor');
        $works  = M('works')->find($id);
        $favor  = $works['favor']; 
        if($result){
            echo $favor;
        }
    }
}