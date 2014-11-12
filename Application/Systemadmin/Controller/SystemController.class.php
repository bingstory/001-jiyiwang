<?php 
namespace Systemadmin\Controller;
use Think\Controller;
class SystemController extends Controller{
    //
	public function verify(){
       $this->display();
	}
	
    //验证码表单处理
    public function updateVerify(){ 
    	// echo APP_PATH.'Common/Conf/';die;
    	//echo MODULE_NAME.'/Conf/';die;
    	 
    	$change = \Think\Storage::put(APP_PATH.'Common/Conf/verify.php', '<?php return  '.var_export($_POST,true).';', 'F');
    	if($change){
    		$this->success('修改成功',U(MODULE_NAME.'/System/verify'));
    	}else{
    		$this->error('修改失败，请修改'.APP_PATH.'Common/Conf/verify.php的权限');
    	}
    }

    //网站基本信息设置页面
    public function baseinfo(){
        $this->display();
    }

    //网站基本信息配置表单处理
    public function updateBaseinfo(){
        $change = \Think\Storage::put(APP_PATH.'Common/Conf/baseinfo.php','<?php return '.var_export($_POST,true).';','F');
        if($change){
            $this->success('修改成功',U(MODULE_NAME.'/System/baseinfo'));
        }else{
            $this->error('修改失败，请修改'.APP_PATH.'Common/Conf/baseinfo.php的权限');
        }
    }
}

 ?>