<?php
namespace Home\Controller;
use Think\Controller;
class ArtistController extends Controller {
    public function index(){
    	
    	// p($recartist);die;
    	$attr = M('artist_attr')->where(array('attr_id'=>1))->select();
    	foreach ($attr as $k => $v) {
    		// $ids[] = $v['attr_id'];
    		$ids[] = $v['artist_id'];   // 属性为1的艺术家ID
    	}

    	// 推荐艺术家
    	$where = array('usertype'=>'artist','id'=>array('IN',$ids));

    	// 第一个大图
    	$recartist1 = D('UserattrRelation')->relation(true)->where($where)->order('sort desc')->limit(1)->select();

    	// 右上4个艺术家
    	$getid1 =  D('UserattrRelation')->relation(true)->where($where)->order('sort desc')->limit(1)->find();
    	$noid1[] = $getid1['id'];
    	$ids2 = array_diff($ids, $noid1);   //数组取差值，去掉第一个艺术家ID
    	$where2 = array('usertype'=>'artist','id'=>array('IN',$ids2));
    	$recartist4 = D('UserattrRelation')->relation(true)->where($where2)->order('sort desc')->limit(4)->select();

        // 下8个艺术家
        $getid2 = D('UserattrRelation')->relation(true)->where($where2)->order('sort desc')->limit(4)->select();
        foreach ($getid2 as $k => $v) {
        	$noid2[] = $v[id];
        }
        $ids3 = array_diff($ids2,$noid2);   //数组取差值，去掉前四个艺术家ID
        $where3 = array('usertype'=>'artist','id'=>array('IN',$ids3));
    	$recartist8 = D('UserattrRelation')->relation(true)->where($where3)->order('sort desc')->limit(8)->select();

    	$this->assign('recartist1',$recartist1);
    	$this->assign('recartist4',$recartist4);
    	$this->assign('recartist8',$recartist8);

    	// 艺术家列表
        $count = M('user')->where(array('usertype'=>'artist'))->count();
        $page = new \Think\Page($count,4);
        $limit = $page->firstRow.','.$page->listRows;
        $page->setConfig('prev','');
        $page->setConfig('next','');
        $this->artistlist = D('ArtistworksRelation')->relation(true)->where(array('usertype'=>'artist'))->limit($limit)->select();
        // p($this->artistlist);die;
        $this->page = $page->show();
        $this->display();
    }

    // 艺术家官网 
    public function officialsite(){
    	$id = I('artist_id');
    	$this->artist = M('user')->find($id);

        // 个人商店 5个商品
        $this->shop5 = M('works')->where(array('rec2shop'=>1,'artist_id'=>$id,'checkstatus'=>1))->order('shopsort desc')->limit(5)->select();
        // p($this->shop5);die;
        // 个人动态
        $this->dynamic = M('dynamic')->where(array('artist_id'=>$id))->order('pubtime desc')->select();
        // 名家评价
        $this->celebritycomment = M('celebritycomment')->where(array('artist_id'=>$id))->order('pubtime desc')->select();
        // 作品赏析 4个作品
        $this->works = M('works')->where(array('artist_id'=>$id,'checkstatus'=>1))->order('workssort desc')->limit(4)->select();
        // 视频 4个
        $this->video = M('video')->where(array('artist_id'=>$id))->order('pubtime desc')->limit(4)->select();

    	$this->display();
    }

    // 个人简介
    public function grjj(){
        $id = I('artist_id');
        $this->artist = M('user')->find($id);
        $this->display();
    }

    // 作品欣赏
    public function works(){
        $id = I('artist_id');
        $this->assign('artist_id',$id);
        $year = I('year');
        $cate_id = I('cate_id');
        $this->artist = M('user')->find($id);
        if(!empty($year)){
            $where = array('artist_id'=>$id,'createyear'=>$year,'checkstatus'=>1);
        }elseif(!empty($cate_id)){
            $where = array('artist_id'=>$id,'cate_id'=>$cate_id,'checkstatus'=>1);
        }else{
            $where = array('artist_id'=>$id,'checkstatus'=>1);
        }
        // p($where);die;
        $count = M('works')->where($where)->count();
        $page = new \Think\Page($count,15);
        $page->setConfig('prev','');
        $page->setConfig('next','');
        $limit = $page->firstRow.','.$page->listRows;
        $this->works = M('works')->where($where)->order('workssort desc')->limit($limit)->select();
        // p($this->works);die;
        $this->page = $page->show();

        // 年份
        $years = M('works')->select();
        foreach ($years as $k => $v) {
            $getyears[] = $v['createyear'];
        }
        $getyears = array_unique($getyears);
        sort($getyears);
        $this->years = $getyears;
        // p($getyears);die;

        // 个人分类
        $artistcate = M('artistcate')->where(array('artist_id'=>$id))->order('sort desc')->select();
        foreach ($artistcate as $k => $v) {
            $workscount[$v['id']] = M('works')->where(array('artist_id'=>$id,'cate_id'=>$v['id']))->count();
        }
        $this->assign('workscount',$workscount);
        $this->assign('artistcate',$artistcate);
        $this->display();
    }
    
    // 名家评价
    public function celebritycomment(){
        $id = I('artist_id');
        $count = M('celebritycomment')->where(array('artist_id'=>$id))->count();
        $page = new \Think\Page($count,8);
        $page->setConfig('prev','');
        $page->setConfig('next','');
        $limit = $page->firstRow.','.$page->listRows;
        $this->comment = M('celebritycomment')->where(array('artist_id'=>$id))->limit($limit)->order('pubtime desc')->select();
        $this->page = $page->show();
        $this->display();
    }

    // 视频
    public function video(){
        $id = I('artist_id');
        $this->assign('artist_id',$id);
        $count = M('video')->where(array('artist_id'=>$id))->count();
        $page = new \Think\Page($count,8);
        $page->setConfig('prev','');
        $page->setConfig('next','');
        $limit = $page->firstRow.','.$page->listRows;
        $this->video = M('video')->where(array('artist_id'=>$id))->limit($limit)->order('pubtime desc')->select();
        $this->page = $page->show();
        $this->display();
    }

    // 个人动态
    public function dynamic(){
        $id = I('artist_id');
        $count = M('dynamic')->where(array('artist_id'=>$id))->count();
        $page = new \Think\Page($count,6);
        $page->setConfig('prev','');
        $page->setConfig('next','');
        $limit = $page->firstRow.','.$page->listRows;
        $this->dynamic = M('dynamic')->where(array('artist_id'=>$id))->limit($limit)->order('pubtime desc')->select();
        $this->page = $page->show();
        $this->display();
    }

    // 作品欣赏
    public function shop(){
        $id = I('artist_id');
        $this->assign('artist_id',$id);
        $where = array('artist_id'=>$id,'rec2shop'=>1,'checkstatus'=>1);
        // p($where);die;
        $count = M('works')->where($where)->count();
        $page = new \Think\Page($count,15);
        $page->setConfig('prev','');
        $page->setConfig('next','');
        $limit = $page->firstRow.','.$page->listRows;
        $this->shop = M('works')->where($where)->order('shopsort desc')->limit($limit)->select();
        $this->page = $page->show();

        $this->display();
    }

    // 年谱简表
    public function yearslist(){
        $id = I('artist_id');
        $this->years = M('years')->where(array('artist_id'=>$id))->order('year desc')->select();
        $this->display();
    }

    // 商品详情
    public function goodsShow(){
        $id = I('id');
        $this->goods = D('WorksView')->find($id);
        $this->artist_id = $this->goods['artist_id'];
        $this->othergoods = M('works')->where(array('rec2shop'=>1,'checkstatus'=>1,'id'=>array('NEQ',$id)))->order('shopsort desc')->select();
        $this->display();
    }

    // 作品详情
    public function worksShow(){
        $id = I('id');
        $this->works = D('WorksView')->find($id);
        $this->artist_id = $this->works['artist_id'];
        $count = M('attachment')->where(array('works_id'=>$id))->count();
        $page = new \Think\Page($count,3);
        $page->setConfig('prev','');
        $page->setConfig('next','');
        $this->atpage = empty($_GET['p']) ? '1' : $_GET['p'];
        $this->pagecount = ceil($count/$page->listRows);
        $limit = $page->firstRow.','.$page->listRows;
        $this->attachment = M('attachment')->where(array('works_id'=>$id))->limit($limit)->select();
        $this->page = $page->show();
        $this->display();
    }

    // 视频详情
    public function videoShow(){
        $id = I('id');
        $this->video = M('video')->find($id);
        $this->display();
    }
}