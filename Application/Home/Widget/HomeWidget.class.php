<?php 
namespace Home\Widget;
use Think\Controller;
class HomeWidget extends Controller{
	
	public function artistheader(){
		$id = I('artist_id');
    	$this->artist = M('user')->find($id);
    	// p($this->artist);die;
    	// 作品数量
    	$this->workscount = M('works')->where(array('artist_id'=>$id))->count();
		$this->display('Widget:artistheader');
	}
    // 主页Banner大图
    public function homepageBg(){
		$id = I('artist_id');
    	$this->artist = M('user')->find($id);
    	// p($this->artist);die;
		$this->display('Widget:homepageBg');
	}
}

 ?>