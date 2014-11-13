<?php
namespace Artistadmin\Controller;
class WorksController extends CommonController{
	//作品列表
	public function index(){
	   $uid = session('uid');
	   $where = array('artist_id'=>$uid);
       $this->category = M('artistcate')->where($where)->select();
       
       $cate_id = I('cate_id','','intval'); 
       $this->assign('cate_id',$cate_id);
       $where2 = empty($cate_id) ? '' : array('cate_id'=>$cate_id);
       $this->c_page('works','WorksRelation','list','pubtime desc',$where2); 
	}

	//回收站
	public function trash(){
       $this->news = D('WorksRelation')->getNewss(1); 
       $this->display('index');
	}

	//删除到回收站 或 还原
	public function toTrash(){ 
		$type = (int)$_GET['type'];
		$msg = $type ? "删除" : "还原";
		$update = M('works')->where(array('id'=>(int)$_GET['id']))->setField('del',$type); 
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
        $result = M('works')->delete($id); 
        if($result){
            $this->success('删除成功','Works/index/cate_id/'.$cate_id);
        }else{
            $this->error('删除失败');
        }
    }

    //清空回收站
    public function bombTrash(){
    	$result = D('WorksRelation')->relation('true')->where(array('del'=>1))->delete();
    	if($result){
    		$this->success('清空成功',U(MODULE_NAME.'/Works/trash'));
    	}else{
    		$this->error('清空失败');
    	}
    }

	//添加新闻
	public function add(){ 
	   // 所属分类
	   $uid = session('uid');
	   $where = array('artist_id'=>$uid);
       $this->category = M('artistcate')->where($where)->select();
       $this->display();
	}

	//添加新闻表单处理
	public function doAdd(){ 
		$upload = new \Think\Upload();                             // 实例化上传类    
        $upload->maxSize   =  3145728 ;                            // 设置附件上传大小    
        $upload->exts      =  array('jpg', 'gif', 'png', 'jpeg');  // 设置附件上传类型   
        $upload->rootPath  =  './';
        $upload->savePath  =  'Uploads/Works/';                   // 设置附件上传目录    // 上传单个文件    
        $info   = $upload->uploadOne($_FILES['thumb']); 
        $info2   = $upload->uploadOne($_FILES['thumb2']); 
        $haspic = $info['savename']; 
        $haspic2 = $info2['savename']; 
        if(empty($haspic)&&empty($haspic2)){
            $data = array(
				'works_id'    => I('works_id'),
				'title'       => I('title'),
				'artistname'  => I('artistname'),
				'createyear'  => I('createyear'),
				'pubtime'     => time(),
				'cate_id'     => I('cate_id'),
				'material'    => I('material'),
				'credit'      => I('credit'),
				'price'       => I('price'),
				'expressfee'  => I('expressfee'),
				'size'        => I('size'),
				'concern'     => I('concern'),
				'favor'       => I('favor'),
				'star'        => I('star'),
				'keywords'    => I('keywords'),
				'description' => I('description'),
				'content'     => $_POST['content'],
			);
        }elseif(!empty($haspic)&&empty($haspic2)){
        	// 生成缩略图
        	$getpic = $info['savepath'].$info['savename'];//获取上传的图片 
            $image = new \Think\Image(); 
            $image->open($getpic);// 生成一个缩放后填充为150*150的缩略图并保存为thumb.jpg
            $image->thumb(421, 387,\Think\Image::IMAGE_THUMB_FIXED)->save($getpic);

        	if(!$info) {               // 上传错误提示错误信息        
            $this->error($upload->getError());   
	        }else{                      // 上传成功 获取上传文件信息        
		        $data = array(
				'works_id'    => I('works_id'),
				'title'       => I('title'),
				'artistname'  => I('artistname'),
				'createyear'  => I('createyear'),
				'pubtime'     => time(),
				'cate_id'     => I('cate_id'),
				'material'    => I('material'),
				'credit'      => I('credit'),
				'price'       => I('price'),
				'expressfee'  => I('expressfee'),
				'size'        => I('size'),
				'star'        => I('star'),
				'concern'     => I('concern'),
				'favor'       => I('favor'),
				'keywords'    => I('keywords'),
				'description' => I('description'),
				'content'     => $_POST['content'],
				'thumb'       => $info['savepath'].$info['savename'],
			);
				
		    }
        }elseif(empty($haspic)&&!empty($haspic2)){
        	// 生成缩略图
        	$getpic = $info2['savepath'].$info2['savename'];//获取上传的图片 
            $image = new \Think\Image(); 
            $image->open($getpic);// 生成一个缩放后填充为150*150的缩略图并保存为thumb.jpg
            $image->thumb(156, 200,\Think\Image::IMAGE_THUMB_FIXED)->save($getpic);

        	if(!$info2) {               // 上传错误提示错误信息        
            $this->error($upload->getError());   
	        }else{                      // 上传成功 获取上传文件信息        
		        $data = array(
				'works_id'    => I('works_id'),
				'title'       => I('title'),
				'artistname'  => I('artistname'),
				'createyear'  => I('createyear'),
				'pubtime'     => time(),
				'cate_id'     => I('cate_id'),
				'material'    => I('material'),
				'credit'      => I('credit'),
				'price'       => I('price'),
				'expressfee'  => I('expressfee'),
				'size'        => I('size'),
				'star'        => I('star'),
				'concern'     => I('concern'),
				'favor'       => I('favor'),
				'keywords'    => I('keywords'),
				'description' => I('description'),
				'content'     => $_POST['content'],
				'thumb2'      => $info2['savepath'].$info2['savename']
			);
				
		    }
        }elseif(!empty($haspic)&&!empty($haspic2)){
        	// 生成缩略图
        	$getpic = $info['savepath'].$info['savename'];//获取上传的图片 
        	$getpic2 = $info2['savepath'].$info2['savename'];//获取上传的图片 
            $image = new \Think\Image(); 
            $image->open($getpic);// 生成一个缩放后填充为150*150的缩略图并保存为thumb.jpg
            $image->thumb(421, 387,\Think\Image::IMAGE_THUMB_FIXED)->save($getpic);
            $image->open($getpic2);// 生成一个缩放后填充为150*150的缩略图并保存为thumb.jpg
            $image->thumb(156, 200,\Think\Image::IMAGE_THUMB_FIXED)->save($getpic2);

        	if(!$info||!$info2) {               // 上传错误提示错误信息        
            $this->error($upload->getError());   
	        }else{                      // 上传成功 获取上传文件信息        
		        $data = array(
				'works_id'    => I('works_id'),
				'title'       => I('title'),
				'artistname'  => I('artistname'),
				'createyear'  => I('createyear'),
				'pubtime'     => time(),
				'cate_id'     => I('cate_id'),
				'material'    => I('material'),
				'credit'      => I('credit'),
				'price'       => I('price'),
				'expressfee'  => I('expressfee'),
				'size'        => I('size'),
				'star'        => I('star'),
				'concern'     => I('concern'),
				'favor'       => I('favor'),
				'keywords'    => I('keywords'),
				'description' => I('description'),
				'content'     => $_POST['content'],
				'thumb'       => $info['savepath'].$info['savename'],
				'thumb2'      => $info2['savepath'].$info2['savename']
			);
				
		    }
        }
        // p($data);die;
		if(M('works')->add($data)){
			$this -> success('添加成功',U(MODULE_NAME.'/Works/index'));
		}else{
	        $this->error('添加失败');
		}
		 
	}
 
    //新闻编辑操作
    public function edit(){ 
       $this->cate_id = I('cate_id','','intval');
       //所属分类
	   $uid = session('uid');
	   $where = array('artist_id'=>$uid);
       $this->category = M('artistcate')->where($where)->select();
	   
       $id = I('id');
       $this->works = D('WorksRelation')->relation(true)->find($id);
       // p($this->works);die;
       
       $this->display();
    }

    //新闻编辑操作
    public function doEdit(){
    	$cate_id = I('search_cate_id','','intval');
    	$upload = new \Think\Upload();                             // 实例化上传类    
        $upload->maxSize   =  3145728 ;                            // 设置附件上传大小    
        $upload->exts      =  array('jpg', 'gif', 'png', 'jpeg');  // 设置附件上传类型   
        $upload->rootPath  =  './';
        $upload->savePath  =  'Uploads/Works/';                   // 设置附件上传目录    // 上传单个文件    
        $info   = $upload->uploadOne($_FILES['thumb']); 
        $info2   = $upload->uploadOne($_FILES['thumb2']); 
        $haspic = $info['savename']; 
        $haspic2 = $info2['savename']; 
        if(empty($haspic)&&empty($haspic2)){
            $data = array(
            	'id'          => I('id','','intval'),
				'works_id'    => I('works_id'),
				'title'       => I('title'),
				'artistname'  => I('artistname'),
				'createyear'  => I('createyear'),
				'pubtime'     => time(),
				'cate_id'     => I('cate_id'),
				'material'    => I('material'),
				'credit'      => I('credit'),
				'price'       => I('price'),
				'expressfee'  => I('expressfee'),
				'size'        => I('size'),
				'concern'     => I('concern'),
				'favor'       => I('favor'),
				'star'        => I('star'),
				'keywords'    => I('keywords'),
				'description' => I('description'),
				'content'     => $_POST['content'],
			);
        }elseif(!empty($haspic)&&empty($haspic2)){
        	// 生成缩略图
        	$getpic = $info['savepath'].$info['savename'];//获取上传的图片 
            $image = new \Think\Image(); 
            $image->open($getpic);// 生成一个缩放后填充为150*150的缩略图并保存为thumb.jpg
            $image->thumb(421, 387,\Think\Image::IMAGE_THUMB_FIXED)->save($getpic);

        	if(!$info) {               // 上传错误提示错误信息        
            $this->error($upload->getError());   
	        }else{                      // 上传成功 获取上传文件信息        
		        $data = array(
		        'id'          => I('id','','intval'),
				'works_id'    => I('works_id'),
				'title'       => I('title'),
				'artistname'  => I('artistname'),
				'createyear'  => I('createyear'),
				'pubtime'     => time(),
				'cate_id'     => I('cate_id'),
				'material'    => I('material'),
				'credit'      => I('credit'),
				'price'       => I('price'),
				'expressfee'  => I('expressfee'),
				'size'        => I('size'),
				'star'        => I('star'),
				'concern'     => I('concern'),
				'favor'       => I('favor'),
				'keywords'    => I('keywords'),
				'description' => I('description'),
				'content'     => $_POST['content'],
				'thumb'       => $info['savepath'].$info['savename'],
			);
				
		    }
        }elseif(empty($haspic)&&!empty($haspic2)){
        	// 生成缩略图
        	$getpic = $info2['savepath'].$info2['savename'];//获取上传的图片 
            $image = new \Think\Image(); 
            $image->open($getpic);// 生成一个缩放后填充为150*150的缩略图并保存为thumb.jpg
            $image->thumb(156, 200,\Think\Image::IMAGE_THUMB_FIXED)->save($getpic);

        	if(!$info2) {               // 上传错误提示错误信息        
            $this->error($upload->getError());   
	        }else{                      // 上传成功 获取上传文件信息        
		        $data = array(
		        'id'          => I('id','','intval'),
				'works_id'    => I('works_id'),
				'title'       => I('title'),
				'artistname'  => I('artistname'),
				'createyear'  => I('createyear'),
				'pubtime'     => time(),
				'cate_id'     => I('cate_id'),
				'material'    => I('material'),
				'credit'      => I('credit'),
				'price'       => I('price'),
				'expressfee'  => I('expressfee'),
				'size'        => I('size'),
				'star'        => I('star'),
				'concern'     => I('concern'),
				'favor'       => I('favor'),
				'keywords'    => I('keywords'),
				'description' => I('description'),
				'content'     => $_POST['content'],
				'thumb2'      => $info2['savepath'].$info2['savename']
			);
				
		    }
        }elseif(!empty($haspic)&&!empty($haspic2)){
        	// 生成缩略图
        	$getpic = $info['savepath'].$info['savename'];//获取上传的图片 
        	$getpic2 = $info2['savepath'].$info2['savename'];//获取上传的图片 
            $image = new \Think\Image(); 
            $image->open($getpic);// 生成一个缩放后填充为150*150的缩略图并保存为thumb.jpg
            $image->thumb(421, 387,\Think\Image::IMAGE_THUMB_FIXED)->save($getpic);
            $image->open($getpic2);// 生成一个缩放后填充为150*150的缩略图并保存为thumb.jpg
            $image->thumb(156, 200,\Think\Image::IMAGE_THUMB_FIXED)->save($getpic2);

        	if(!$info||!$info2) {               // 上传错误提示错误信息        
            $this->error($upload->getError());   
	        }else{                      // 上传成功 获取上传文件信息        
		        $data = array(
		        'id'          => I('id','','intval'),
				'works_id'    => I('works_id'),
				'title'       => I('title'),
				'artistname'  => I('artistname'),
				'createyear'  => I('createyear'),
				'pubtime'     => time(),
				'cate_id'     => I('cate_id'),
				'material'    => I('material'),
				'credit'      => I('credit'),
				'price'       => I('price'),
				'expressfee'  => I('expressfee'),
				'size'        => I('size'),
				'star'        => I('star'),
				'concern'     => I('concern'),
				'favor'       => I('favor'),
				'keywords'    => I('keywords'),
				'description' => I('description'),
				'content'     => $_POST['content'],
				'thumb'       => $info['savepath'].$info['savename'],
				'thumb2'      => $info2['savepath'].$info2['savename']
			);
				
		    }
        }
    	 
    	if(M('works')->save($data) !== false){
    		$this->success('修改成功',U(MODULE_NAME.'/Works/index',array('cate_id'=>$cate_id)));
    	}else{
    		$this->error('修改失败');
    	} 
    }

    public function rec2shop(){
    	$cate_id = I('cate_id','','intval');
    	$rec2shop = I('rec2shop','','intval');
    	$id = I('id','','intval');  //p($id);die;
    	if(M('works')->where(array('id'=>$id))->setField('rec2shop',$rec2shop)){
            $prevurl = $_SERVER['HTTP_REFERER'];
            // p($prevurl);die;
            redirect($prevurl.'/cate_id/'.$cate_id);
    	}else{
    		$this->error('发生意外情况！');
    	}
    }
}

 