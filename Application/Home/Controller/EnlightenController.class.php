<?php
namespace Home\Controller;
use Think\Controller;
class EnlightenController extends Controller {
    public function _initialize(){
        $this->navtag =strtolower(CONTROLLER_NAME);
    }
    public function index(){
    	// SEO INFOMATION
		$this->seo_title       = '美育启蒙';
		$this->seo_keywords    = '美育启蒙,美育启蒙,美育启蒙,美育启蒙';
		$this->seo_description = '美育启蒙美育启蒙美育启蒙美育启蒙美育启蒙美育启蒙';
		// +++SEO END+++
		import('Class.Category');
        $cate = M('category')->select();
        $cate = \Category::getChild($cate,28);
        $this->assign('cate',$cate);
        $cate_ids = \Category::getChildId($cate,28);
        $cate_ids[] = 28;
        // p($cate_ids);die;
        $id = I('id','','intval');
        $where = empty($id) ? array('cid'=>array('IN',$cate_ids)) : array('cid'=>$id);
        $count =  M('enlighten')->order('pubtime desc')->where($where)->count();
        $page = new \Think\Page($count,9);
        $page->setConfig('prev','');
        $page->setConfig('next','');
        $limit = $page->firstRow.','.$page->listRows;
        $this->list = M('enlighten')->order('pubtime desc')->limit($limit)->where($where)->select();
        $this->page = $page->show();
        // p($this->list);die;
        $this->display();
    }

    public function eshow(){
        import('Class.Category');
        $cate = M('category')->select();
        $cate = \Category::getChild($cate,28);
        $this->assign('cate',$cate);
        $cate_ids = \Category::getChildId($cate,28);
        $cate_ids[] = 28;
        // p($cate_ids);die;
        $id = I('id','','intval');
        
        $this->en = M('enlighten')->find($id);
        
        $this->display();
    }
}