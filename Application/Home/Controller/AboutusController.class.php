<?php
namespace Home\Controller;
use Think\Controller;
class AboutusController extends Controller {
    public function _initialize(){
        $this->navtag =strtolower(CONTROLLER_NAME);
    }
    public function index(){
    	$this->nav_article = M('singlepage')->where(array('cid'=>30))->order('sort desc')->select();
    	$id = I('id','','intval'); 
    	if(!empty($id)){
    		$this->article = M('singlepage')->find($id);
    	}else{
    		$this->article = M('singlepage')->order('sort desc')->find();
    	} 
        $this->display();
    }
}