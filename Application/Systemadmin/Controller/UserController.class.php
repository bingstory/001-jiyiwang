<?php 
namespace Systemadmin\Controller;
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
        // $this->user = M('user')->where($where)->select();
        $this->user = D('UserattrRelation')->relation(true)->where($where)->order('sort desc,id desc')->select();
        // p($this->user);die;
    	$this->display();
    }
   // 添加用户界面
    public function user(){
    	$usertype = I('usertype');
    	$this->usertype = I('usertype');
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
    	$this->display();
    }


	// 添加用户表单处理
	public function doAddUser(){
		$usertype = I('usertype');
		$username = I('username');
		$usertype = I('usertype');
		$user = M('user')->where(array('username'=>$username,'usertype'=>$usertype))->find();
		if($user){
			$this->error('用户名已存在');
		}

		$data = array(
			'usertype'=> I('usertype'),
		    'username'=>I('username'),
			'password'=>I('password','','md5'),
			'regtime' => time(), 
			'loginip'=>get_client_ip()
		); 
		if($uid = M('user')->add($data)){
				$this->success('添加成功',U(MODULE_NAME.'/User/index',array('usertype'=>$usertype)));
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

    // 删除用户
    public function delete(){
    	$id = I('id','','intval');
    	if(M('user')->delete($id)){
    		$this->success('删除成功！');
    	}
    }

    // 用户状态修改
	public function edit(){
		$id = I('id','','intval');
		$this->artist = D('ArtistattrRelation')->relation(true)->find($id);
		$artist = D('ArtistattrRelation')->relation(true)->find($id);
		// p($artist['attr']);die;
		foreach ($artist['attr'] as $k => $v) {
			$attr[$v['id']] = $v;
		}
		$this->isattr = $attr;
		$this->attr   = M('attr')->select();
		$this->display();
	}

	// 用户状态修改 表单处理
	public function doEdit(){
		$id = I('artist_id','','intval');
		$this->artist = M('user')->find($id);
		foreach($_POST['attr'] as $k=>$v){
			$attr[] = array(
				'artist_id' => $id,
				'attr_id'   => $v
				); 
		};
		M('artist_attr')->where(array('artist_id'=>$id))->delete();
		if(M('artist_attr')->addAll($attr)){
			$this->success('修改成功',U(MODULE_NAME.'/User/index',array('usertype'=>'artist')));
		}else{
			$this->error('修改失败');
		};

	}

	public function sort(){
		// p($_POST);die;
		$usertype = I('usertype');
		foreach ($_POST as $k => $v) {
			M('user')->where(array('id'=>$k))->setField('sort',$v);
		}
		$prevurl = $_SERVER['HTTP_REFERER'];
		redirect($prevurl.'/usertype/'.$usertype);
	}

}

 ?>