<?php 
namespace Systemadmin\Model;
use Think\Model;
class BannerModel extends Model{
	  echo 111;die;
      public function getBanner($type){
      	echo 111;die;
      	$where = array('type'=>$type)
      	return $this->where($where)->find();
      }
}
 ?>
