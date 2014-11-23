<?php 
namespace Artistadmin\Controller;
use Think\Controller;
class CategoryController extends CommonController{
	//分类列表
    public function index(){
        $uid   = session('uid');  // p($uid);die;
        $where = array('artist_id'=>$uid);
        $this->cate = M('artistcate')->order('sort desc')->where($where)->select();
    	$this->display();
    }

	//添加分类
	public function addCate(){
		$this->display();
	}

	//添加分类表单处理
	public function doAddCate(){
        $uid   = session('uid');
        $data = array(
            'artist_id' => $uid,
            'name'      => I('name'),
            'sort'      => I('sort')
            );
		if(M('artistcate')->add($data)){
			$this->success('添加成功',U(MODULE_NAME.'/Category/index'));
		}else{
			$this->error('添加失败');
		}
	}

	//分类排序
	public function sort(){
		$db = M('artistcate');
		foreach ($_POST as $id => $sort) {
			$db ->where(array('id'=>$id))->setField('sort',$sort);
		}
		$this->redirect(MODULE_NAME.'/Category/index');
	}

    //分类名称修改页面
    public function cateEdit(){
         // p($_GET);die;
        $id = I('id');
        $this->cate = M('artistcate')->where(array('id'=>$id))->find();
    	$this->display();
    }

    //分类名称修改表单处理
    public function doCateEdit(){
        
        $data = array(
        	'id' => I('id'),
        	'name' => I('name'),
        	);
        // p($data);die;
        if(M('artistcate')->save($data)){
        	$this->success('修改成功',U(MODULE_NAME.'/Category/index'));
        }else{
        	$this->error('修改失败');
        }
    }
   
   //删除分类
    public function delete(){
    	$id = I('id');
    	if(M('artistcate')->delete($id)){
        	$this->success('删除成功',U(MODULE_NAME.'/Category/index'));
        }else{
        	$this->error('删除失败');
        }
    }


}

 ?>