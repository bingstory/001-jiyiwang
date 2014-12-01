<?php
namespace Home\Controller;
use Think\Controller;
class RisingstarController extends Controller {
	public function _initialize(){
        $this->navtag =strtolower(CONTROLLER_NAME);
    }
    public function index(){
        $this->display();
    }
}