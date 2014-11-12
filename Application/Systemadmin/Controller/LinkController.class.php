<?php 
namespace Systemadmin\Controller;
use Think\Controller;
class LinkController extends CommonController{
	//友情链接列表
	public function index(){
		$this->link = M('link')->order('sort')->select();
		$this->display();
	}
	//添加页面
	public function link(){
		$this->display();
	}
	//添加表单处理
	public function addLink(){
		// p($_POST);
		if(M('link')->add($_POST)){
			$this->success('添加成功',U(MODULE_NAME.'/Link/index'));
		}else{
			$this->error('Sorry!!添加失败');
		}
	}
	//链接排序
	public function linkSort(){
		// p($_POST);
		foreach($_POST as $id=>$sort){
		M('link')->where(array('id'=>$id))->setField('sort',$sort);
	    }
	    $this->redirect(MODULE_NAME.'/Link/index');
	}

	//连接修改页面
	public function linkEdit(){
		$id = I('id');
		$this->link = M('link')->find($id);
		$this->display();
	}

	//链接修改表单处理
	public function doLinkEdit(){
		// p($_POST);
		 $id = I('id'); 
		 $data = array(
		 	'id' => I('id'),
		 	'title' => I('title'),
		 	'siteurl' => I('siteurl'),
		 	'sort' => I('sort')
		 	);
		 // p($data);die;
		if(M('link')->save($data)){
			$this->success('修改成功',U(MODULE_NAME.'/Link/index'));
		}else{
			$this->error('修改失败');
		}
	}

    //删除链接
    public function delete(){
    	$id = I('id');
    	if(M('link')->delete($id)){
    		$this->success('删除成功',U(MODULE_NAME.'/Link/index'));
    	}else{
    		$this->error('删除失败');
    	}
    }

}


 ?>