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

    // 地区管理
    public function area(){
        $this->area = M('area')->order('sort desc')->select();
        $this->display();
    }
    //添加城市
    public function addArea(){
        $this->display();
    }
    //添加表单处理
    public function doAddArea(){
        // p($_POST);
        if(M('area')->add($_POST)){
            $this->success('添加成功',U(MODULE_NAME.'/System/area'));
        }else{
            $this->error('添加失败');
        }
    }
    //城市排序
    public function sortArea(){
        // p($_POST);
        foreach($_POST as $id=>$sort){
        M('area')->where(array('id'=>$id))->setField('sort',$sort);
        }
        $this->redirect(MODULE_NAME.'/System/area');
    }

    //城市修改页面
    public function editArea(){
        $id = I('id');
        $this->area = M('area')->find($id);
        $this->display();
    }

    //城市修改表单处理
    public function doEditArea(){
        // p($_POST);
         $id = I('id'); 
         $data = array(
            'id' => I('id'),
            'name' => I('name'), 
            'sort' => I('sort')
            );
         // p($data);die;
        if(M('area')->save($data)){
            $this->success('修改成功',U(MODULE_NAME.'/System/area'));
        }else{
            $this->error('修改失败');
        }
    }

    //删除城市
    public function deleteArea(){
        $id = I('id');
        if(M('area')->delete($id)){
            $this->success('删除成功',U(MODULE_NAME.'/System/area'));
        }else{
            $this->error('删除失败');
        }
        }
    
}

 ?>