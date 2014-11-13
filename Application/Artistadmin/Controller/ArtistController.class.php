<?php
namespace Artistadmin\Controller;
class ArtistController extends CommonController{
	// 艺术家信息
	public function index(){
		$id = session('uid');
		$this->artist = M('user')->find($id);
		$this->display();
	}

	// 艺术家信息 编辑
	public function editInfo(){
		$id = session('uid');
		$this->artist = M('user')->find($id);
		$this->display();
	}

	// 艺术家信息 编辑表单处理
	public function doEdit(){
		$upload = new \Think\Upload();                             // 实例化上传类    
        $upload->maxSize   =  3145728 ;                            // 设置附件上传大小    
        $upload->exts      =  array('jpg', 'gif', 'png', 'jpeg');  // 设置附件上传类型   
        $upload->rootPath  =  './';
        $upload->savePath  =  'Uploads/Artist/portrait/';                   // 设置附件上传目录    // 上传单个文件    
        $info   = $upload->uploadOne($_FILES['portrait']); 
        $info2   = $upload->uploadOne($_FILES['homeportrait']); 
        $haspic = $info['savename']; 
        $haspic2 = $info2['savename']; 
        if(empty($haspic)&&empty($haspic2)){
            $data = array(
			'id'           => I('id'),
			'chinesename'  => I('chinesename'),
			'graduate'     => I('graduate'),
			'birthday'     => I('birthday'),
			'achievement'  => I('achievement'),
			'represent'    => I('represent'),
			'summary'      => I('summary'),
			'introduction' => $_POST['introduction'],
			);
        }elseif(!empty($haspic)&&empty($haspic2)){
        	// 生成缩略图
        	$getpic = $info['savepath'].$info['savename'];//获取上传的图片 
            $image = new \Think\Image(); 
            $image->open($getpic);// 生成一个缩放后填充为150*150的缩略图并保存为thumb.jpg
            $image->thumb(193, 177,\Think\Image::IMAGE_THUMB_FIXED)->save($getpic);

        	if(!$info) {               // 上传错误提示错误信息        
            $this->error($upload->getError());   
	        }else{                      // 上传成功 获取上传文件信息        
		        $data = array(
				'id'           => I('id'),
				'chinesename'  => I('chinesename'),
				'portrait'     => $info['savepath'].$info['savename'],
				'graduate'     => I('graduate'),
				'birthday'     => I('birthday'),
				'achievement'  => I('achievement'),
				'represent'    => I('represent'),
				'summary'      => I('summary'),
				'introduction' => $_POST['introduction'],
				);
				
		    }
        }elseif(empty($haspic)&&!empty($haspic2)){
        	// 生成缩略图
        	$getpic = $info2['savepath'].$info2['savename'];//获取上传的图片 
            $image = new \Think\Image(); 
            $image->open($getpic);// 生成一个缩放后填充为150*150的缩略图并保存为thumb.jpg
            $image->thumb(193, 177,\Think\Image::IMAGE_THUMB_FIXED)->save($getpic);

        	if(!$info2) {               // 上传错误提示错误信息        
            $this->error($upload->getError());   
	        }else{                      // 上传成功 获取上传文件信息        
		        $data = array(
				'id'           => I('id'),
				'chinesename'  => I('chinesename'),
				'homeportrait'     => $info2['savepath'].$info2['savename'],
				'graduate'     => I('graduate'),
				'birthday'     => I('birthday'),
				'achievement'  => I('achievement'),
				'represent'    => I('represent'),
				'summary'      => I('summary'),
				'introduction' => $_POST['introduction'],
				);
				
		    }
        }elseif(!empty($haspic)&&!empty($haspic2)){
        	// 生成缩略图
        	$getpic = $info['savepath'].$info['savename'];//获取上传的图片 
        	$getpic2 = $info2['savepath'].$info2['savename'];//获取上传的图片 
            $image = new \Think\Image(); 
            $image->open($getpic);// 生成一个缩放后填充为150*150的缩略图并保存为thumb.jpg
            $image->thumb(193, 177,\Think\Image::IMAGE_THUMB_FIXED)->save($getpic);
            $image->open($getpic2);// 生成一个缩放后填充为150*150的缩略图并保存为thumb.jpg
            $image->thumb(493, 318,\Think\Image::IMAGE_THUMB_FIXED)->save($getpic2);

        	if(!$info||!$info2) {               // 上传错误提示错误信息        
            $this->error($upload->getError());   
	        }else{                      // 上传成功 获取上传文件信息        
		        $data = array(
				'id'           => I('id'),
				'chinesename'  => I('chinesename'),
				'portrait'     => $info['savepath'].$info['savename'],
				'homeportrait' => $info2['savepath'].$info2['savename'],
				'graduate'     => I('graduate'),
				'birthday'     => I('birthday'),
				'achievement'  => I('achievement'),
				'represent'    => I('represent'),
				'summary'      => I('summary'),
				'introduction' => $_POST['introduction'],
				);
				
		    }
        }
		p($data);die;
		if(M('user')->save($data) !== false){
    		$this->success('修改成功',U(MODULE_NAME.'/Artist/index'));
    	}else{
    		$this->error('修改失败');
    	} 
	}
}