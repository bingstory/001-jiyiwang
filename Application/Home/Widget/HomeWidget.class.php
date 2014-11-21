<?php 
namespace Home\Widget;
use Think\Controller;
class HomeWidget extends Controller{
	
	public function artistheader(){
		$id = I('artist_id');
    	$this->artist = M('user')->find($id);

    	// 作品数量
    	$this->workscount = M('works')->where(array('artist_id'=>$id))->count();
		$this->display('Widget:artistheader');
	}
    
}

 ?>