<?php 
namespace Systemadmin\Controller;
use Think\Controller;

class ProductController extends Controller{
	//新闻列表
	public function index(){
		
	   $this->product = D('ProductRelation')->order('time desc')->getProduct();
		// $this->product = M('product')->select();
	   // p($this->product);die;
       $this->display();
	}

	//回收站
	public function trash(){
       $this->product = D('ProductRelation')->getProducts(1);
	   //p($product);die;
       $this->display('index');
	}

	//删除到回收站 或 还原
	public function toTrash(){ 
		$type = (int)$_GET['type'];
		$msg = $type ? "删除" : "还原";
		$update = M('product')->where(array('id'=>(int)$_GET['id']))->setField('del',$type); 
		if($update){ 
			$this->success($msg.'成功',U(MODULE_NAME.'/Product/trash')); 
		}else{
			$this->error($msg.'失败');
		}
	}

    //彻底删除
    public function delete(){
    	$id = (int)$_GET['id'];
        $result = M('product')->delete($id); 
        if($result){
            $this->success('已删除',U(MODULE_NAME.'/Product/index'));
        }else{
        	$this->error('删除失败');
        }
    }

    //清空回收站
    public function bombTrash(){
    	$result = D('ProductRelation')->relation('true')->where(array('del'=>1))->delete();
    	if($result){
    		$this->success('清空成功',U(MODULE_NAME.'/Product/trash'));
    	}else{
    		$this->error('清空失败');
    	}
    }

	//添加新闻
	public function product(){ 
		//所属分类
	   $cate = M('category')->order('sort asc')->select();
	   import('Class.Category');
	   $cate = \Category::getChild($cate,2);
	   //p($cate);die;
	   $this-> cate = $cate;
	   //新闻属性
	   // $this->attr = M('attr')->select(); 
	   //p($attr);die;
       $this->display();
	}

	//添加新闻表单处理
	public function addProduct(){
		// p($_POST);
		$upload = new \Think\Upload();// 实例化上传类    
        $upload->maxSize   =     3145728 ;// 设置附件上传大小    
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型   
        $upload->rootPath  =      './';
        $upload->savePath  =      './Uploads/Product/'; // 设置附件上传目录    // 上传单个文件    
        $info   =   $upload->uploadOne($_FILES['picurl']);  
         if(!$info) {// 上传错误提示错误信息        
        $this->error($upload->getError());   
        }else{// 上传成功 获取上传文件信息        
        
		$data = array(
            'title' => I('title'),
            'content' => $_POST['content'],
            'time' => time(), 
            'cid' => (int) $_POST['cid'],
            'summary' => $_POST['summary'],
            'picurl' => $info['savepath'].$info['savename']
			);

		 

		if(M('product')->add($data)){
			$this -> success('添加成功',U(MODULE_NAME.'/Product/index'));
	}else{
       $this->error('添加失败');
	}
		}
		// p($data);die;
		//$this->display();
	}

    //新闻编辑操作
    public function productEdit(){
    	// p($_GET);
    	//所属分类
	   $cate = M('category')->order('sort asc')->select();
	   import('Class.Category');
	   $cate = \Category::getChild($cate,2);
	   //p($cate);die;
	   $this-> cate = $cate;
    	$id = I('id');
    	$this->product = D('ProductRelation')->relation(true)->find($id);
    	// p($this->product['cateid']);die;
    	$this->display();
    }

    //新闻编辑操作
    public function doProductEdit(){
    	// p($_POST);die;
    	$data = array(
    		'id' => I('id'),
    		'title' => I('title'),
    		'content' => $_POST['content'],
    		'summary' => I('summary'),
    		'cid' => I('cid')
    		);
    	// p($data);die;
    	if(M('product')->save($data)){
    		$this->success('修改成功',U(MODULE_NAME.'/Product/index'));
    	}else{
    		$this->error('修改失败');
    	}

    }

	//编辑器图片上传处理
	public function upload(){
		
		 
		$config = array( 
			'exts'          =>  array('jpg', 'gif', 'png', 'jpeg'), //允许上传的文件后缀
			 'savePath'      =>  '', //保存路径
             'autoSub'       =>  true, //自动子目录保存文件
             'subName'       =>  array('date', 'Y-m-d'), //子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
    );
		$upload = new \Think\Upload($config);
        if($info=$upload->upload() ){ 
        	echo json_encode(array(
                   'url'=>$info['upfile']['savepath'].$info['upfile']['savename'],
                   '$title' => htmlspecialchars($_POST['pictitle'], ENT_QUOTES),
                   'original' => $info['upfile']['name'],
                   'state' => 'SUCCESS',
        		));

        $image = new \Think\Image;
        $image->open('./Uploads/'.$info['upfile']['savepath'].$info['upfile']['savename']);
		$image->water()->save('./Uploads/'.$info['upfile']['savepath'].$info['upfile']['savename']);
		
        }else{
        	echo json_encode($upload->getError());
        }
		/**
     * 向浏览器返回数据json数据
     * {
     *   'url'      :'a.jpg',   //保存后的文件路径
     *   'title'    :'hello',   //文件描述，对图片来说在前端会添加到title属性上
     *   'original' :'b.jpg',   //原始文件名
     *   'state'    :'SUCCESS'  //上传状态，成功时返回SUCCESS,其他任何值将原样返回至图片上传框中
     * }
     */
	}
}

 ?>