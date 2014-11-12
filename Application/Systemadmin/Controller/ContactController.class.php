<?php 
namespace Systemadmin\Controller;
use Think\Controller;
class ContactController extends Controller{
	//联系页面
	public function index(){
		$this->liuyan = M('liuyan')->order('pubtime desc')->select();
		$this->display();
	}

    //留言表单处理
    public function liuyan(){
    	// p($_POST);
    	$data = array(
    		'name' => I('name'),
    		'email' => I('email'),
    		'content' => I('content'),
    		'pubtime' => time()
    		);
    	// p($data);
    	if(M('liuyan')->add($data)){
    		$this->success('留言成功',U(MODULE_NAME.'/Contact/index'));
    	}else{
    		$this->error('留言失败');
    	}
    }

    //回复留言页面
    public function reply(){
        $this->pid = $_GET['id'];
        // p($this->pid);die;
        $this->liuyan = M('liuyan')->find($this->pid);
        // echo $this->pid;die;
    	$this->display();
    }

    //回复留言表单处理
    public function doReply(){
    	  
    	$data = array(
    		'name' => I('name'),
    		'email' => I('email'),
    		'content' => I('content'),
    		'pubtime' => time(),
            'pid' => I('pid')
    		);
    	// p($data);
    	if(M('liuyan')->add($data)){
    		$this->success('回复成功',U(MODULE_NAME.'/Contact/index'));
    	}else{
    		$this->error('回复失败');
    	}
    }

    //删除留言
    public function delete(){
        echo $id = I('id');
        if(M('liuyan')->delete($id)){
            $this->success('成功删除',U(MODULE_NAME.'/Contact/index'));
        }else{
            $this->error('删除失败');
        }
    }

}


 ?>