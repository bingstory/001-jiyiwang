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

    // 订单管理
    public function orderlist(){
    	$artist_id = session('uid');
    	$works = M('works')->where(array('artist_id'=>$artist_id))->select();
    	foreach ($works as $k => $v) {
    		$ids[] = $v['id'];
    	}
    	// p($ids);die;
    	// $where = array('productid'=>array('IN',$ids));
    	// $this->orderlist = M('orderlist')->where($where)->order('id desc')->select();
    	// p($this->orderlist);die;
      $orderlist = M('orderlist')->order('id desc')->select();
      // p($orderlist);die;
      foreach ($orderlist as $k => $v) {
        $productids[$v['id']] = $v['productid'];
      }
      // p($productids);die;
      foreach ($productids as $k => $v) {
        $productidss[$k] = explode('-', $v);
      }
      // p($productidss);die;
      foreach ($productidss as $k => $v) {
        $fi[$k] = $v; //p($k);die;
        foreach ($v as $key => $value) {      //p($k);die;
          // $fs[] = $value;p($k.'----'.$fs);
          if(in_array($value, $ids)){
             $orders = M('orderlist')->find($k);
             $arr1 = array('proid'=>$value);
             $orderss[] = array_merge($orders,$arr1);
          }
        }
      }
      // p($fi);die;
      // p($fs);die;
      // p($orderss);die;
      // p($proid);die;
      // p($orders);die;
      $this->works = M('works')->select();
      $this->or = $or;
      foreach($orderss as $k=>$v){
        $addr1 = M('shippingaddr')->find($v['addrid']);
        $addr2 = array('addrname'=>$addr1['province'].'&nbsp;&nbsp;'.$addr1['city'].'&nbsp;&nbsp;'.$addr1['county'].'&nbsp;&nbsp;'.$addr1['detailaddr'].'&nbsp;&nbsp;'.$addr1['name'].'&nbsp;&nbsp;'.$addr1['phone']);
        $ordersss[] = array_merge($v,$addr2);
      };
      // p($ordersss);die;
      $this->orderlist = $ordersss;
    	$this->display();
    }
}