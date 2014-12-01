<?php
namespace Home\Controller;
use Think\Controller;
class ShopController extends Controller {
    public function _initialize(){
        $this->navtag =strtolower(CONTROLLER_NAME);
    }
    public function index(){
    	// 导航START
    	import('Class/Category');
    	$cate = M('category')->order('sort desc')->select();
    	$cate = \Category::unlimitedForLayer($cate,31);
    	$this->assign('category',$cate);
    	// 导航END

    	// 名家真品  attr_id :3名家真品
    	$attr = M('works_attr')->where(array('attr_id'=>3))->select();
    	foreach ($attr as $k => $v) {
    		$ids[] = $v['works_id'];     // 属性为3的所有作品ID
    	}
        // P($ids);die;
    	$where = array('rec2shop'=>1,'checkstatus'=>1,'id'=>array('IN',$ids));
    	$this->celebrityworks1 = M('works')->where($where)->order('systemsort desc')->limit(1)->select();

    	// 右边6个商品
    	$getid1 =  M('works')->where($where)->order('systemsort desc')->limit(1)->find();
    	$noid1[] = $getid1['id'];
    	$ids2 = array_diff($ids, $noid1);   //数组取差值，去掉第一个商品ID
    	// p($ids2);die;
    	$where2 = array('rec2shop'=>1,'checkstatus'=>1,'id'=>array('IN',$ids2));
    	$this->celebrityworks6 = M('works')->where($where2)->order('systemsort desc')->limit(6)->select();
    	// p($this->celebrityworks6);die;

        // 版权信息6
        $this->cp6 = M('works')->order('pubtime desc')->limit(6)->select();
        // 个人店铺9
        $this->gs9 = M('works')->order('pubtime desc')->limit(9)->select();
        $this->display();
    }

    // 商品详情
    public function goodsShow(){
        $id = I('id');
        $this->goods = D('WorksView')->find($id);
        $this->totalmoney = (float)($this->goods['price']+$this->goods['expressfee']);
        $this->trade_no = randomkeys_num(8).randomkeys_alpha(2);
        $this->artist_id = $this->goods['artist_id'];
        $this->othergoods = M('works')->where(array('rec2shop'=>1,'checkstatus'=>1,'id'=>array('NEQ',$id)))->order('shopsort desc')->select();
        $this->display();
    }
}