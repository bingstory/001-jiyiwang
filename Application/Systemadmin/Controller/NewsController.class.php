<?php 
namespace Systemadmin\Controller;
use Think\Controller;

class NewsController extends CommonController{
	//新闻列表
	public function index(){
       import('Class.Category');
       $cate = M('category')->select();
       $this->category = \Category::getChild($cate,1); 

       $cate_id = I('cate_id','','intval'); 
       $this->assign('cate_id',$cate_id);
       $where2 = empty($cate_id) ? '' : array('cid'=>$cate_id);
       $this->c_page('news','NewsRelation','news','pubtime desc',$where2); 
	}

	//回收站
	public function trash(){
       $this->news = D('NewsRelation')->getNewss(1); 
       $this->display('index');
	}

	//删除到回收站 或 还原
	public function toTrash(){ 
		$type = (int)$_GET['type'];
		$msg = $type ? "删除" : "还原";
		$update = M('news')->where(array('id'=>(int)$_GET['id']))->setField('del',$type); 
		if($update){ 
			$this->success($msg.'成功',U(MODULE_NAME.'/News/trash')); 
		}else{
			$this->error($msg.'失败');
		}
	}

    //彻底删除
    public function delete(){
        $cate_id = I('cate_id','','intval');
        $prevurl = $_SERVER['HTTP_REFERER'];
        $id = (int)$_GET['id'];
        $result = M('news')->delete($id); 
        if($result){
            // $this->success('已删除',U(MODULE_NAME.'/News/index',array('cate_id'=>$cate_id)));
            redirect($prevurl);
        }else{
            $this->error('删除失败');
        }
    }

    //清空回收站
    public function bombTrash(){
    	$result = D('NewsRelation')->relation('true')->where(array('del'=>1))->delete();
    	if($result){
    		$this->success('清空成功',U(MODULE_NAME.'/News/trash'));
    	}else{
    		$this->error('清空失败');
    	}
    }

	//添加新闻
	public function addNews(){ 
	   // 所属分类
	   $cate = M('category')->order('sort desc')->select();
	   import('Class.Category');
	   $cate = \Category::getChild($cate,1); 
	   $this-> cate = $cate; 
       $this->display();
	}

	//添加新闻表单处理
	public function doAddNews(){ 
    $upload = new \Think\Upload();                             // 实例化上传类    
        $upload->maxSize   =  3145728 ;                            // 设置附件上传大小    
        $upload->exts      =  array('jpg', 'gif', 'png', 'jpeg');  // 设置附件上传类型   
        $upload->rootPath  =  './';
        $upload->savePath  =  'Uploads/News/';                   // 设置附件上传目录    // 上传单个文件    
        $info   = $upload->uploadOne($_FILES['picurl1']); 
        $haspic = $info['savename'];
        if(empty($haspic)){
             $data = array(
            'title'       => I('title'),
            'content'     => $_POST['content'],
            'pubtime'     => time(), 
            'cid'         => (int) $_POST['cid'],
            'summary'     => $_POST['summary'],
            'keywords'    => I('keywords'),
            'description' => I('description')
      );
        }else{
          // 生成缩略图
          $getpic = $info['savepath'].$info['savename'];//获取上传的图片 
            $image = new \Think\Image(); 
            $image->open($getpic);// 生成一个缩放后填充为150*150的缩略图并保存为thumb.jpg
            $image->thumb(199, 128,\Think\Image::IMAGE_THUMB_FIXED)->save($getpic);

          if(!$info) {               // 上传错误提示错误信息        
            $this->error($upload->getError());   
          }else{                      // 上传成功 获取上传文件信息        
          $data = array(
            'title'       => I('title'),
            'content'     => $_POST['content'],
            'pubtime'     => time(), 
            'cid'         => (int) $_POST['cid'],
            'summary'     => $_POST['summary'],
            'keywords'    => I('keywords'),
            'picurl'   => $info['savepath'].$info['savename'], 
            'description' => I('description')
      );
        
        }
        } 
     
		 
		if(M('news')->add($data)){
			$this -> success('添加成功',U(MODULE_NAME.'/News/index'));
	}else{
       $this->error('添加失败');
	}
		 
	}
 
    //新闻编辑操作
    public function newsEdit(){ 
       $this->cate_id = I('cate_id','','intval');
       //所属分类
	   $cate = M('category')->order('sort desc')->select();
	   import('Class.Category');
	   $cate = \Category::getChild($cate,1); 
	   
       $id = I('id');
       $this->news = D('NewsRelation')->relation(true)->find($id);
       $this->cid  = $this->news['cid'];
       $this->cate = $cate;
       
       $this->display();
    }

    //新闻编辑操作
    public function doNewsEdit(){ 
      $cate_id = I('cate_id','','intval');
      $upload = new \Think\Upload();                             // 实例化上传类    
        $upload->maxSize   =  3145728 ;                            // 设置附件上传大小    
        $upload->exts      =  array('jpg', 'gif', 'png', 'jpeg');  // 设置附件上传类型   
        $upload->rootPath  =  './';
        $upload->savePath  =  'Uploads/News/';                   // 设置附件上传目录    // 上传单个文件    
        $info   = $upload->uploadOne($_FILES['picurl1']); 
        $haspic = $info['savename'];
        if(empty($haspic)){
          $data = array(
            'id'          => I('id'),
            'title'       => I('title'),
            'content'     => $_POST['content'], 
            'cid'         => (int) $_POST['cid'],
            'summary'     => $_POST['summary'],
            'keywords'    => I('keywords'),
            'description' => I('description')
          );
        }else{
          // 生成缩略图
          $getpic = $info['savepath'].$info['savename'];//获取上传的图片 
            $image = new \Think\Image(); 
            $image->open($getpic);// 生成一个缩放后填充为150*150的缩略图并保存为thumb.jpg
            $image->thumb(199, 128,\Think\Image::IMAGE_THUMB_FIXED)->save($getpic);

          if(!$info) {               // 上传错误提示错误信息        
            $this->error($upload->getError());   
          }else{                      // 上传成功 获取上传文件信息        
          $data = array(
            'id'          => I('id'),
            'title'       => I('title'),
            'content'     => $_POST['content'], 
            'cid'         => (int) $_POST['cid'],
            'summary'     => $_POST['summary'],
            'keywords'    => I('keywords'),
            'picurl'      => $info['savepath'].$info['savename'],
            'description' => I('description')
        );
        
        }
        } 
    	
    	if(M('news')->save($data) !== false){
    		$this->success('修改成功',U(MODULE_NAME.'/News/index',array('cate_id'=>$cate_id)));
    	}else{
    		$this->error('修改失败');
    	} 
    }
}

 ?>