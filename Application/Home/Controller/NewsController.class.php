<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller {
    public function _initialize(){
        $this->navtag =strtolower(CONTROLLER_NAME);
    }
	// 新闻页
    public function index(){
    	// 右侧导航
    	import('Class.Category');
    	$cate = M('category')->select();
    	$nav =  \Category::getChild($cate,1);  
    	$this->assign('nav',$nav);
    	// 面包屑导航
        $category = I('category');    // p($category);die;
    	$pos = M('category')->find($category);
    	$this->position = $pos['name'];
        // +++END+++
        // 新闻列表
        $catearr  = \Category::getChildID($cate,1);
        $catearr[] = 1;   
        
    	$where    = empty($category) ? array('cid'=>array('IN',$catearr)) : array('cid' => $category);
    	$count = M('news')->where($where)->count();
    	$page = new \Think\Page($count,10);
    	$page->setConfig('prev','');
    	$page->setConfig('next','');
    	$limit = $page->firstRow.','.$page->listRows;
    	$list = M('news')->where($where)->limit($limit)->order('pubtime desc')->select();
    	$this->page = $page->show();
    	$this->assign('list',$list);
    	// +++END+++

    	
        
        $this->display();
    }
    
    // 新闻展示页
    public function newsShow(){
    	// 右侧导航
    	import('Class.Category');
    	$cate = M('category')->select();
    	$nav =  \Category::getChild($cate,1);  
    	$this->assign('nav',$nav);
        // 新闻内容
    	$id = I('id');
    	$news = M('news')->find($id);
    	$this->assign('article',$news);
    	//上一篇
        $front= M('news')->where(array('id'=>array('lt',$id)))->order('id desc')->limit('1')->find();
        $f=!$front ? '<A href=""><span>没有了</span></A>':'上一篇 <A href="'.__ACTION__.'/id/'.$front['id'].'"><span>'.msubstr($front['title'],0,10,0).'</span></A>';
        $this->assign('front',$f);
        //下一篇
        $after= M('news')->where(array('id'=>array('gt',$id)))->order('id asc')->limit('1')->find();
        $a=!$after?'<A href=""><span>没有了</span></A>':'下一篇 <A href="'.__ACTION__.'/id/'.$after['id'].'"><span>'.msubstr($after['title'],0,10,0).'</span></A>';
        $this->assign('after',$a);
    	// 面包屑导航
    	$category = $news['cid'];
    	$pos = M('category')->find($category);
    	$this->position = $pos['name'];
        // +++END+++
    	$this->display();
    }
}