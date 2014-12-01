<?php
namespace Home\Controller;
use Think\Controller;
class CustomizeController extends Controller {
    public function _initialize(){
        $this->navtag =strtolower(CONTROLLER_NAME);
    }
    // 新闻页
    public function index(){
    	// 右侧导航
    	import('Class.Category');
    	$cate = M('category')->select();
    	$nav =  \Category::getChild($cate,2);  
    	$this->assign('nav',$nav);
    	// 面包屑导航
    	$category = I('category');    // p($category);die;
    	$pos = M('category')->find($category);
    	$this->position = $pos['name'];
        // +++END+++
        // 新闻列表
        $catearr  = \Category::getChildID($cate,2);
        $catearr[] = 2;   
        
    	$where    = empty($category) ? array('cid'=>array('IN',$catearr)) : array('cid' => $category);
    	$count = M('customize')->where($where)->count();
    	$page = new \Think\Page($count,10);
    	$page->setConfig('prev','');
    	$page->setConfig('next','');
    	$limit = $page->firstRow.','.$page->listRows;
    	$list = M('customize')->where($where)->limit($limit)->order('pubtime desc')->select();
    	$this->page = $page->show();
    	$this->assign('list',$list);
    	// +++END+++ 
        $this->display();
    }
    
    // 个性化定制 详细页
    public function customizeShow(){
    	// 右侧导航
    	import('Class.Category');
    	$cate = M('category')->select();
    	$nav =  \Category::getChild($cate,2);  
    	$this->assign('nav',$nav);
        // 内容
    	$id = I('id');
    	$customize = M('customize')->find($id);
        $cid = $customize['cid'];
        $this->position = M('category')->find($cid);
    	$this->assign('article',$customize);
    	//上一篇
        $front= M('customize')->where(array('id'=>array('lt',$id)))->order('id desc')->limit('1')->find();
        $f=!$front ? '<A href=""><span>没有了</span></A>':'上一篇 <A href="'.__ACTION__.'/id/'.$front['id'].'"><span>'.msubstr($front['title'],0,10,0).'</span></A>';
        $this->assign('front',$f);
        //下一篇
        $after= M('customize')->where(array('id'=>array('gt',$id)))->order('id asc')->limit('1')->find();
        $a=!$after?'<A href=""><span>没有了</span></A>':'下一篇 <A href="'.__ACTION__.'/id/'.$after['id'].'"><span>'.msubstr($after['title'],0,10,0).'</span></A>';
        $this->assign('after',$a);
    	 
    	$this->display();
    }

    // 我要定制
    public function iwanted(){
        // 右侧导航
    	import('Class.Category');
    	$cate = M('category')->select();
    	$nav =  \Category::getChild($cate,2);  
    	$this->assign('nav',$nav);
    	$this->display();
    }
}