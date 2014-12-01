<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function _initialize(){
		$this->navtag = 'index';
	}
    public function index(){

    	// 2014年11月30日 以下内容全部为暂时填充页面用的内容
    	// 右上 周成交量
    	$this->top6 = M('works')->order('pubtime desc')->limit(6)->select();
    	// 周成交量 下的3个商品
    	$this->goods3 = M('works')->order('pubtime desc')->limit(3,3)->select();
    	// 明日之星1
    	$this->celebrity1 = M('works')->order('pubtime desc')->limit(6,1)->select();
    	// 明日之星4
    	$this->celebrity4 = M('works')->order('pubtime desc')->limit(7,4)->select();
    	// 美誉启蒙4
    	$this->en4 = M('enlighten')->limit(4)->select();
    	// 推荐作品
		$this->tw1  = M('works')->limit(1)->select();
		$this->tw2  = M('works')->limit(1,3)->select();
		$this->tw3  = M('works')->limit(4,3)->select();
		$this->tw4  = M('works')->limit(8,1)->select();
		$this->tw5  = M('works')->limit(9,2)->select();
		// 推荐书籍
		$this->book1 = M('works')->limit(15,1)->select();
		$this->book6 = M('works')->limit(16,6)->select();
        $this->display();
    }
}