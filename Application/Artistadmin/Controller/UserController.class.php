<?php 
namespace Artistadmin\Controller;
use Think\Controller;
class UserController extends CommonController{
	// 用户列表
    public function index(){
    	$usertype = I('usertype');
    	$this->assign('usertype',$usertype);
    	switch($usertype){
    		case 'system':
	    		$this->pos = '系统用户';
	    		break;
    		case 'artist':
    		    $this->pos = '艺术家用户';
	    		break;
	    	case 'agent':
    		    $this->pos = '经纪人用户';
	    		break;
	    	case 'normal':
    		    $this->pos = '普通用户';
	    		break;
    	}
    	$where = array('usertype'=>$usertype);
        $this->user = M('user')->where($where)->select();
    	$this->display();
    }
   // 添加用户界面
    public function user(){
    	$this->display();
    }


	// 添加用户表单处理
	public function addUserHandle(){
		$user = array(
		    'username'=>I('username'),
			'password'=>I('password','','md5'),
			'logintime'=>time(),
			'loginip'=>get_client_ip()
		);
		if($uid = M('user')->add($user)){
				$this->success('添加成功',U('Admin/User/index'));
			}else{
				$this->error('添加失败');
				}
		}

	// 用户锁定
	public function setLock(){
		$id   = I('id','','intval');
		$lock = I('lock','','intval');
		M('user')->where(array('id'=>$id))->setField('lockstatus',$lock); 
		redirect($_SERVER['HTTP_REFERER']);
	}

    // 修改密码
    public function setPassword(){
    	$uid = session('uid');
    	$this->user = M('user')->find($uid);
    	$this->display();
    }

    // 修改密码 表单处理
    public function doSetPassword(){
    	$uid = session('uid');
    	$data = array(
    		'id' => $uid,
    		'password' => I('password','','md5')
    		);
    	$oldpwd = I('oldpwd','','md5');
    	$user = M('user')->find($uid);
    	if($oldpwd == $user['password']){
			if(M('user')->save($data) !== false){
				$this->success('修改成功');
			}else{
				$this->error('修改失败！');
			}
    	}else{
    		$this->error('原密码不对！');
    	}
    	
    }
	
}

 ?>