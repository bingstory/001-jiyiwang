<?php
namespace Systemadmin\Controller;
use Think\Controller;
class IndexController extends CommonController {
	//首页
    public function index(){
    	// echo __PUBLIC__;die;
        $this->display();
    }

    //头部文件
    public function admin_top(){
    	$this->display();
    }

    //左部文件
    public function left(){
    	$this->display();
    }

    //右部文件
    public function right(){
    	$this->display();
    }
//退出
	public function logOut(){
	    session_unset();
	    session_destroy();
	    $this->redirect(MODULE_NAME.'/Login/index');	
	}

}