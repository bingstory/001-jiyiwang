<?php
namespace Artistadmin\Controller;
class ShopController extends CommonController{
	//作品列表
	public function index(){
	   $uid = session('uid');
	   $where = array('artist_id'=>$uid);
       $this->category = M('artistcate')->where($where)->select();
       
       $cate_id = I('cate_id','','intval'); 
       $this->assign('cate_id',$cate_id);
       $where2 = empty($cate_id) ? array('rec2shop'=>1) : array('cate_id'=>$cate_id,'rec2shop'=>1);
       $this->c_page('works','WorksRelation','list','pubtime desc',$where2); 
	}
}