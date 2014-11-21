<?php 
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller{
	public function _initialize(){
		if(!isset($_SESSION['userid'])){
			$this->redirect('/'.MODULE_NAME.'/login');
		}
	}
}