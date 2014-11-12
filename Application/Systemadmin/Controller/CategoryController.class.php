<?php 
namespace Systemadmin\Controller;
use Think\Controller;
class CategoryController extends CommonController{
	//分类列表
    public function index(){
        import('Class.Category');
    	$cate = M('category')->order('sort asc')->select();
    	$cate = \Category::unlimitedForLevel($cate,'&nbsp;&nbsp;∟');
    	//$cate = \Category::unlimitedForLayer($cate);
    	//$cate = \Category::getChildId($cate,3);
        //p($cate);die;
    	
    	$this->cate = $cate;
    	$this->display();
    }

	//添加分类
	public function cate(){
		$this-> pid = I('id','0','intval');
		//p($pid);die;
		$this->display();
	}

	//添加分类表单处理
	public function addCate(){
		//p($_POST);
		 
		if(M('category')->add($_POST)){
			$this->success('添加成功',U(MODULE_NAME.'/Category/index'));
		}else{
			$this->error('添加失败');
		}
	}

	//分类排序
	public function sortCate(){
		$db = M('category');
		foreach ($_POST as $id => $sort) {
			$db ->where(array('id'=>$id))->setField('sort',$sort);
		}
		$this->redirect(MODULE_NAME.'/Category/index');
	}

    //分类名称修改页面
    public function cateEdit(){
         // p($_GET);die;
        $id = I('id');
        $this->cate = M('category')->where(array('id'=>$id))->find();
    	$this->display();
    }

    //分类名称修改表单处理
    public function doCateEdit(){
        
        $data = array(
        	'id' => I('id'),
        	'name' => I('name'),
        	);
        // p($data);die;
        if(M('category')->save($data)){
        	$this->success('修改成功',U(MODULE_NAME.'/Category/index'));
        }else{
        	$this->error('修改失败');
        }
    }
   
   //删除分类
    public function delete(){
    	$id = I('id');
    	if(M('category')->delete($id)){
        	$this->success('删除成功',U(MODULE_NAME.'/Category/index'));
        }else{
        	$this->error('删除失败');
        }
    }


}

 ?>