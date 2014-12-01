<?php
namespace Systemadmin\Controller;
class WorksController extends CommonController{
	//作品列表
	public function index(){
	   $isshop = I('isshop','','intval');   // p($isshop);die;
	   $this->assign('isshop',$isshop);
	   $this->pos = empty($isshop) ? '作品' : '商品';
	   $uid = session('uid');
	   $where = array('artist_id'=>$uid);
          import('Class/Category');
          $cate = M('category')->order('sort desc')->select();
          $cate = \Category::unlimitedForLevel($cate,'└',31);
          $this->assign('category',$cate);
          // p($cate);die;

          $cate_id = I('cate_id','','intval'); //p($cate_id);die;
          $this->assign('cate_id',$cate_id);
          if(empty($isshop)){
          	$where2 = empty($cate_id) ? '' : array('shopcate_id'=>$cate_id);
          }else{
          	$where2 = empty($cate_id) ? array('rec2shop'=>1) : array('shopcate_id'=>$cate_id,'rec2shop'=>1);
          }
          if(!empty($isshop)){
          	$this->c_page('works','WorksRelation','list','shopsort desc,pubtime desc',$where2);
          }else{
          	$this->c_page('works','WorksRelation','list','workssort desc,pubtime desc',$where2);
          }
	}

       // 预览
    public function preview(){ 
       $this->cate_id = I('cate_id','','intval');
       $isshop = I('isshop','','intval');   // p($isshop);die;
          $this->assign('isshop',$isshop);
          $this->pos = empty($isshop) ? '作品' : '商品';
       //所属分类
          $uid = session('uid');
          $where = array('artist_id'=>$uid);
       $this->category = M('artistcate')->where($where)->select();
          
       $id = I('id');
       $this->works = D('WorksRelation')->relation(true)->find($id);
       // p($this->works);die;
       $this->display();
    }

    // 返回
    public function goBack(){
       $cate_id = I('cate_id','','intval');
       $isshop = I('isshop');
       // p($cate_id);die;
       $prevurl = I('prevurl');
       redirect($prevurl.'/cate_id/'.$cate_id.'/isshop/'.$isshop);
    }

    // 排序
    public function sort(){
       $cate_id = I('cate_id');
       $isshop  = I('isshop');
       foreach ($_POST as $k => $v) { 
                     M('works')->where(array('id'=>$k))->setField('systemsort',$v); 
              }
              $prevurl = $_SERVER['HTTP_REFERER'];
              redirect($prevurl.'/cate_id/'.$cate_id.'/isshop/'.$isshop);
    }

    public function checkStatus(){
       $cate_id = I('cate_id','','intval');
       $isshop = I('isshop');
       $checkstatus = I('checkstatus','','intval');
       $id = I('id','','intval');  //p($id);die;
       if(M('works')->where(array('id'=>$id))->setField('checkstatus',$checkstatus)){
            $prevurl = $_SERVER['HTTP_REFERER'];
            redirect($prevurl.'/cate_id/'.$cate_id.'/isshop/'.$isshop);
       }else{
            $this->error('发生意外情况！');
       }
    }

    public function edit(){ 

 

       $this->cate_id = I('cate_id','','intval');
       $isshop = I('isshop','','intval');   // p($isshop);die;
       $this->assign('isshop',$isshop);
       $id = I('id');
       $this->works = D('WorksRelation')->relation(true)->find($id);
       $works = D('WorksRelation')->relation(true)->find($id);
       foreach ($works['attr'] as $k => $v) {
                     $attr[$v['id']] = $v;
              }
              $this->isattr = $attr;
       $this->pos = empty($isshop) ? '作品' : '商品';
       $this->attr   = M('attr')->where(array('type'=>'works'))->select();
       
       // p($this->works);die;
       
       $this->display();
    }


       public function doEdit(){
              $cate_id = I('cate_id','','intval');
              $isshop = I('isshop');
              $id = I('id','','intval');
              $this->works = M('works')->find($id);
              foreach($_POST['attr'] as $k=>$v){
                     $attr[] = array(
                            'works_id' => $id,
                            'attr_id'   => $v
                            ); 
              };
             M('works_attr')->where(array('works_id'=>$id))->delete();
             M('works_attr')->addAll($attr);
             $this->success('修改成功',U(MODULE_NAME.'/Works/index',array('cate_id'=>$cate_id,'isshop'=>$isshop)));
       }
}