<?php
namespace Systemadmin\Controller;
class WorksController extends CommonController{
	//作品列表
	public function index(){
	   $isshop = I('isshop','','intval');
	   $this->assign('isshop',$isshop);
	   $this->pos = empty($isshop) ? '作品' : '商品';
	   $uid = session('uid');
	   $where = array('artist_id'=>$uid);
       $this->category = M('artistcate')->where($where)->select();
       
       $cate_id = I('cate_id','','intval'); 
       $this->assign('cate_id',$cate_id);
       if(empty($isshop)){
       	$where2 = empty($cate_id) ? '' : array('cate_id'=>$cate_id);
       }else{
       	$where2 = empty($cate_id) ? array('rec2shop'=>1) : array('cate_id'=>$cate_id,'rec2shop'=>1);
       }
       if(!empty($isshop)){
       	$this->c_page('works','WorksRelation','list','shopsort desc,pubtime desc',$where2);
       }else{
       	$this->c_page('works','WorksRelation','list','workssort desc,pubtime desc',$where2);
       }
        
	}
}