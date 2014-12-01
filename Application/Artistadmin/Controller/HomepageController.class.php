<?php
namespace Artistadmin\Controller;
class HomepageController extends CommonController{
	//名家评论 列表
	public function comment(){
		$artist_id = session('uid');
		$where = array('artist_id'=>$artist_id);
        $this->list = M('celebritycomment')->where($where)->order('pubtime desc')->select();
        $this->display();
	}

    //名家评论 删除
    public function deleteComment(){
    	$artist_id = I('artist_id');
        $prevurl = $_SERVER['HTTP_REFERER']; 
        $id = (int)$_GET['id'];
        $result = M('celebritycomment')->delete($id);
        if($result){
            // redirect($prevurl);
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }

	//添加 名家评论
	public function addComment(){ 
       $this->display();
	}

	//添加名家评论表单处理
	public function doAddComment(){ 
		$artist_id = session('uid');
	        $data = array(
				'artist_id'     => $artist_id,
				'title'         => I('title'),
				'content'       => $_POST['content'],
				'celebrityname' => I('celebrityname'),
				'pubtime'       => time()
			 );
		if(M('celebritycomment')->add($data)){
			$this->success('修改成功',U(MODULE_NAME.'/Homepage/comment',array('artist_id'=>$artist_id)));
		}else{
	        $this->error('添加失败');
		}
	}

    //名家评论编辑操作
    public function editComment(){ 
       $this->artist_id = session('uid');
       $id = I('id');
       $this->comment = M('celebritycomment')->find($id);
       $this->display();
    }

    //名家评论编辑操作
    public function doEditComment(){
    	$artist_id = session('uid');
    	$data = array(
    		    'id'          => I('id'),
	            'artist_id'     => $artist_id,
				'title'         => I('title'),
				'content'       => $_POST['content'],
				'celebrityname' => I('celebrityname')
			 );
    	if(M('celebritycomment')->save($data) !== false){
    		$this->success('修改成功',U(MODULE_NAME.'/Homepage/comment',array('artist_id'=>$artist_id)));
    	}else{
    		$this->error('修改失败');
    	} 
    }

    //个人动态 列表
	public function dynamic(){
		$artist_id = session('uid');
		$where = array('artist_id'=>$artist_id);
        $this->list = M('dynamic')->where($where)->order('pubtime desc')->select();
        $this->display();
	}

    //个人动态 删除
    public function deleteDynamic(){
    	$artist_id = I('artist_id');
        $prevurl = $_SERVER['HTTP_REFERER']; 
        $id = (int)$_GET['id'];
        $result = M('dynamic')->delete($id);
        if($result){
            // redirect($prevurl);
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }

	//添加 个人动态
	public function addDynamic(){ 
       $this->display();
	}

	//个人动态表单处理
	public function doAddDynamic(){ 
		$artist_id = session('uid');
	        $data = array(
				'artist_id'     => $artist_id,
				'title'         => I('title'),
				'content'       => $_POST['content'],
				'celebrityname' => I('celebrityname'),
				'pubtime'       => time()
			 );
		if(M('dynamic')->add($data)){
			$this->success('修改成功',U(MODULE_NAME.'/Homepage/dynamic',array('artist_id'=>$artist_id)));
		}else{
	        $this->error('添加失败');
		}
	}

    //个人动态编辑操作
    public function editDynamic(){ 
       $this->artist_id = session('uid');
       $id = I('id');
       $this->comment = M('dynamic')->find($id);
       $this->display();
    }

    //个人动态编辑操作
    public function doEditDynamic(){
    	$artist_id = session('uid');
    	$data = array(
    		    'id'            => I('id'),
	            'artist_id'     => $artist_id,
				'title'         => I('title'),
				'content'       => $_POST['content'],
				'celebrityname' => I('celebrityname'),
			 );
    	if(M('dynamic')->save($data) !== false){
    		$this->success('修改成功',U(MODULE_NAME.'/Homepage/dynamic',array('artist_id'=>$artist_id)));
    	}else{
    		$this->error('修改失败');
    	}
    }

    //视频列表
    public function video(){
        $artist_id = session('uid');
        $where = array('artist_id'=>$artist_id);
        $this->list = M('video')->where($where)->order('pubtime desc')->select();
        $this->display();
    }

    //彻底删除
    public function deleteVideo(){
        $artist_id = I('artist_id');
        $prevurl = $_SERVER['HTTP_REFERER']; 
        $id = (int)$_GET['id'];
        $result = M('video')->delete($id);
        if($result){
            // redirect($prevurl);
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }

    //添加视频
    public function addVideo(){
       $this->display();
    }

    //添加视频表单处理
    public function doAddVideo(){ 
        $artist_id = session('uid');
        $upload = new \Think\Upload();                             // 实例化上传类    
        $upload->maxSize   =  3145728 ;                            // 设置附件上传大小    
        $upload->exts      =  array('jpg', 'gif', 'png', 'jpeg');  // 设置附件上传类型   
        $upload->rootPath  =  './';
        $upload->savePath  =  'Uploads/Enlighten/';                   // 设置附件上传目录    // 上传单个文件    
        $info   = $upload->uploadOne($_FILES['picurl1']); 
        $haspic = $info['savename']; 

        if(empty($haspic)){
             $data = array(
                'title'       => I('title'),
                'content'     => $_POST['content'],
                'pubtime'     => time(), 
                'artist_id'   => $artist_id,
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
                    'artist_id'   => $artist_id,
                    'summary'     => $_POST['summary'],
                    'keywords'    => I('keywords'),
                    'description' => I('description'),
                    'picurl'   => $info['savepath'].$info['savename'],  
                ); 
            }
        } 
        if(M('video')->add($data)){
            $this -> success('添加成功',U(MODULE_NAME.'/Homepage/video',array('artist_id'=>$artist_id)));
        }else{
            $this->error('添加失败');
        }
         
    }
 
    //视频编辑操作
    public function editVideo(){
        $id = I('id');
        $this->video = M('video')->find($id);
        $this->display();
    }

    //视频编辑操作
    public function doEditVideo(){
        $artist_id = session('uid');
        $upload = new \Think\Upload();                             // 实例化上传类    
        $upload->maxSize   =  3145728 ;                            // 设置附件上传大小    
        $upload->exts      =  array('jpg', 'gif', 'png', 'jpeg');  // 设置附件上传类型   
        $upload->rootPath  =  './';
        $upload->savePath  =  'Uploads/Video/';                   // 设置附件上传目录    // 上传单个文件    
        $info   = $upload->uploadOne($_FILES['picurl1']); 
        $haspic = $info['savename']; 

        if(empty($haspic)){
             $data = array(
                'id'          => I('id'),
                'title'       => I('title'),
                'content'     => $_POST['content'],
                'artist_id'   => $artist_id,
                'summary'     => $_POST['summary'],
                'keywords'    => I('keywords'),
                'description' => I('description')
            );
        }else{
            // 生成缩略图
            $getpic = $info['savepath'].$info['savename'];//获取上传的图片 
            $image = new \Think\Image(); 
            $image->open($getpic);// 生成一个缩放后填充为150*150的缩略图并保存为thumb.jpg
            $image->thumb(207, 120,\Think\Image::IMAGE_THUMB_FIXED)->save($getpic);

            if(!$info) {               // 上传错误提示错误信息        
            $this->error($upload->getError());   
            }else{                      // 上传成功 获取上传文件信息        
            
                $data = array(
                    'id'          => I('id'),
                    'title'       => I('title'),
                    'content'     => $_POST['content'],
                    'artist_id'   => $artist_id,
                    'summary'     => $_POST['summary'],
                    'keywords'    => I('keywords'),
                    'description' => I('description'),
                    'picurl'      => $info['savepath'].$info['savename'],  
                ); 
            }
        } 
         
        if(M('video')->save($data) !== false){
            $this->success('修改成功',U(MODULE_NAME.'/Homepage/video',array('artist_id'=>$artist_id)));
        }else{
            $this->error('修改失败');
        } 
    }
    // 年份列表
    public function years(){
        $artist_id = session('uid');
        $where = array('artist_id'=>$artist_id);
        $this->list = M('years')->where($where)->order('year desc')->select();
        $this->display();
    }
    // 添加年份
    public function addYear(){
        $this->display();
    }

    // 添加年份 表单处理
    public function doAddYear(){
        $artist_id = session('uid');
        $data = array(
            'artist_id' => $artist_id,
            'year'      => I('year')
            );
        if(M('years')->add($data) !== false){
            $this->success('添加成功',U(MODULE_NAME.'/Homepage/years',array('artist_id'=>$artist_id)));
        }else{
            $this->error('添加失败');
        } 
    }

    // 修改年份
    public function editYear(){
        $id = I('id');
        $this->year = M('years')->find($id);
        $this->display();
    }

    // 修改年份 表单处理
    public function doEditYear(){
        $artist_id = session('uid');
        $data = array(
            'id' => I('id'),
            'year' => I('year')
            );
        if(M('years')->save($data) !== false){
            $this->success('修改成功',U(MODULE_NAME.'/Homepage/years',array('artist_id'=>$artist_id)));
        }else{
            $this->error('修改失败');
        } 
    }

    public function yearslist(){
        $artist_id = session('uid');
        $where = array('artist_id'=>$artist_id);
        $this->list = D('YearsRelation')->relation(true)->where($where)->select();
        $this->display();
    }

    // 添加事迹
    public function addStory(){
        $artist_id = session('uid');
        $where = array('artist_id'=>$artist_id);
        $this->years = M('years')->where($where)->order('year desc')->select();
        $this->display();
    }

    // 添加事迹 表单处理
    public function doAddStory(){
        $artist_id = session('uid');
        $data = array(
            'year_id' => I('year'),
            'month'   => I('month'),
            'day'     => I('day'),
            'story'   => I('story'),
            'artist_id' => $artist_id
            );
        if(M('yearslist')->add($data) !== false){
            $this->success('修改成功',U(MODULE_NAME.'/Homepage/yearslist',array('artist_id'=>$artist_id)));
        }else{
            $this->error('修改失败');
        } 

    }

    // 修改事迹
    public function editStory(){
        $id = I('id');
        $artist_id = session('uid');
        $where = array('artist_id'=>$artist_id);
        $this->years = M('years')->where($where)->order('year desc')->select();
        $this->story = D('YearsRelation')->relation(true)->find($id);
        $this->display();
    }

    // 修改事迹 表单处理
    public function doEditStory(){
        $artist_id = session('uid');
        $data = array(
            'id'      => I('id'),
            'year_id' => I('year'),
            'month'   => I('month'),
            'day'     => I('day'),
            'story'   => I('story')
            );
        if(M('yearslist')->save($data) !== false){
            $this->success('修改成功',U(MODULE_NAME.'/Homepage/yearslist',array('artist_id'=>$artist_id)));
        }else{
            $this->error('修改失败');
        } 
    }

    //删除
    public function deleteStory(){
        $artist_id = I('artist_id');
        $prevurl = $_SERVER['HTTP_REFERER']; 
        $id = (int)$_GET['id'];
        $result = M('yearslist')->delete($id);
        if($result){
            // redirect($prevurl);
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }

    // 附件管理
    public function attachment(){
        $works_id = I('works_id','','intval');
        $this->assign('works_id',$works_id);
        // p($works_id);die;
        $this->attachment = M('videoattach')->where(array('works_id'=>$works_id))->select();
        $this->display();
    }

    // 添加附件
    public function addAttachment(){
        $works_id = I('works_id','','intval');
        $this->works = M('video')->find($works_id);
        $this->display();
    }

    // 添加附件 表单处理
    public function doAddAttachment(){ 
        $upload = new \Think\Upload();                             // 实例化上传类    
        $upload->maxSize   =  3145728 ;                            // 设置附件上传大小    
        $upload->exts      =  array('jpg', 'gif', 'png', 'jpeg','txt','zip','rar');  // 设置附件上传类型   
        $upload->rootPath  =  './';
        $upload->savePath  =  'Uploads/Works/';                   // 设置附件上传目录    // 上传单个文件    
        $info   = $upload->uploadOne($_FILES['picurl']); 
        $info2   = $upload->uploadOne($_FILES['attachment']); 
        $haspic = $info['savename']; 
        $haspic2 = $info2['savename']; 
        if(empty($haspic)&&empty($haspic2)){
            $data = array(
            'works_id' => I('works_id'),
            'name' => I('name'),
            'credits' => I('credits')
            );
        }elseif(!empty($haspic)&&empty($haspic2)){
            // 生成缩略图
            $getpic = $info['savepath'].$info['savename'];//获取上传的图片 
            $image = new \Think\Image(); 
            $image->open($getpic);// 生成一个缩放后填充为150*150的缩略图并保存为thumb.jpg
            $image->thumb(127, 90,\Think\Image::IMAGE_THUMB_FIXED)->save($getpic);

            if(!$info) {               // 上传错误提示错误信息        
            $this->error($upload->getError());   
            }else{                      // 上传成功 获取上传文件信息        
                $data = array(
                    'works_id' => I('works_id'),
                    'name' => I('name'),
                    'picurl' => $info['savepath'].$info['savename'],
                    'credits' => I('credits')
                    );
            }
        }elseif(empty($haspic)&&!empty($haspic2)){
            if(!$info2) {               // 上传错误提示错误信息        
                $this->error($upload->getError());   
            }else{                      // 上传成功 获取上传文件信息        
                $data = array(
                    'works_id' => I('works_id'),
                    'name' => I('name'),
                    'attachment' => $info2['savepath'].$info2['savename'],
                    'credits' => I('credits')
                    );
            }
        }elseif(!empty($haspic)&&!empty($haspic2)){
            // 生成缩略图
            $getpic = $info['savepath'].$info['savename'];//获取上传的图片
            $image = new \Think\Image(); 
            $image->open($getpic);// 生成一个缩放后填充为150*150的缩略图并保存为thumb.jpg
            $image->thumb(127, 90,\Think\Image::IMAGE_THUMB_FIXED)->save($getpic);

            if(!$info||!$info2) {               // 上传错误提示错误信息        
            $this->error($upload->getError());   
            }else{                      // 上传成功 获取上传文件信息        
                $data = array(
                  'works_id' => I('works_id'),
                  'name' => I('name'),
                  'picurl' => $info['savepath'].$info['savename'],
                  'attachment' => $info2['savepath'].$info2['savename'],
                  'credits' => I('credits')
                );
            }
        }
        // p($data);die;
        if(M('videoattach')->add($data) !== false){
            $this->success('添加成功',U(MODULE_NAME.'/Homepage/attachment',array('works_id'=>I('works_id'))));
        }else{
            $this->error('添加失败');
        } 
    }

    // 附件修改
    public function editAttachment(){
        $id = I('id');
        $works_id = I('works_id');
        $this->works = M('works')->find($works_id);
        $this->attachment = M('videoattach')->find($id);
        $this->display();
    }

    // 附件修改 表单处理
    public function doEditAttachment(){
        $upload = new \Think\Upload();                             // 实例化上传类    
        $upload->maxSize   =  3145728 ;                            // 设置附件上传大小    
        $upload->exts      =  array('jpg', 'gif', 'png', 'jpeg','txt','zip','rar');  // 设置附件上传类型
        $upload->rootPath  =  './';
        $upload->savePath  =  'Uploads/Works/';                   // 设置附件上传目录    // 上传单个文件    
        $info   = $upload->uploadOne($_FILES['picurl']); 
        $info2   = $upload->uploadOne($_FILES['attachment']); 
        $haspic = $info['savename']; 
        $haspic2 = $info2['savename'];  
        if(empty($haspic)&&empty($haspic2)){
            $data = array(
            'id' => I('id'),
            'name' => I('name'),
            'credits' => I('credits')
            );
        }elseif(!empty($haspic)&&empty($haspic2)){
            // 生成缩略图
            $getpic = $info['savepath'].$info['savename'];//获取上传的图片 
            $image = new \Think\Image(); 
            $image->open($getpic);// 生成一个缩放后填充为150*150的缩略图并保存为thumb.jpg
            $image->thumb(127, 90,\Think\Image::IMAGE_THUMB_FIXED)->save($getpic);

            if(!$info) {               // 上传错误提示错误信息        
            $this->error($upload->getError());   
            }else{                      // 上传成功 获取上传文件信息   
                $data = array(
            'id' => I('id'),
            'name' => I('name'),
            'picurl' => $info['savepath'].$info['savename'],
            'credits' => I('credits')
            );
            }
        }elseif(empty($haspic)&&!empty($haspic2)){
            if(!$info2) {               // 上传错误提示错误信息        
                $this->error($upload->getError());   
            }else{                      // 上传成功 获取上传文件信息        
                $data = array(
                    'id' => I('id'),
                    'name' => I('name'),
                    'attachment' => $info2['savepath'].$info2['savename'],
                    'credits' => I('credits')
                    );
            }
        }elseif(!empty($haspic)&&!empty($haspic2)){
            // 生成缩略图
            $getpic = $info['savepath'].$info['savename'];//获取上传的图片
            $image = new \Think\Image(); 
            $image->open($getpic);// 生成一个缩放后填充为150*150的缩略图并保存为thumb.jpg
            $image->thumb(127, 90,\Think\Image::IMAGE_THUMB_FIXED)->save($getpic);

            if(!$info||!$info2) {               // 上传错误提示错误信息        
            $this->error($upload->getError());   
            }else{                      // 上传成功 获取上传文件信息        
                $data = array(
                  'id' => I('id'),
                  'name' => I('name'),
                  'picurl' => $info['savepath'].$info['savename'],
                  'attachment' => $info2['savepath'].$info2['savename'],
                  'credits' => I('credits')
                );
            }
        }
        // p($data);die;
        if(M('videoattach')->save($data) !== false){
            $this->success('修改成功',U(MODULE_NAME.'/Homepage/attachment',array('works_id'=>I('works_id'))));
        }else{
            $this->error('修改失败');
        } 
    }
    
    // 主页大图设置
    public function setBg(){
        $artist_id = session('uid');
        $this->artist = M('user')->find($artist_id);
        $this->display();
    }

    // 主页大图设置 
    public function editSetBg(){
        $artist_id = session('uid');
        $this->artist = M('user')->find($artist_id);
        $this->display();
    }

    // 主页大图设置 表单处理
    public function doEditBg(){
        $artist_id = session('uid');
        $upload = new \Think\Upload();                             // 实例化上传类    
        $upload->maxSize   =  3145728 ;                            // 设置附件上传大小    
        $upload->exts      =  array('jpg', 'gif', 'png', 'jpeg');  // 设置附件上传类型   
        $upload->rootPath  =  './';
        $upload->savePath  =  'Uploads/Homepage/';                   // 设置附件上传目录    // 上传单个文件    
        $info   = $upload->uploadOne($_FILES['picurl2']); 
        $haspic = $info['savename']; 

        if(empty($haspic)){
             $this->error('没有图片被上传！');
        }else{
            // 生成缩略图
            $getpic = $info['savepath'].$info['savename'];//获取上传的图片 
            $image = new \Think\Image(); 
            $image->open($getpic);// 生成一个缩放后填充为150*150的缩略图并保存为thumb.jpg
            $image->thumb(988, 393,\Think\Image::IMAGE_THUMB_FIXED)->save($getpic);

            if(!$info) {               // 上传错误提示错误信息        
               $this->error($upload->getError());   
            }else{                      // 上传成功 获取上传文件信息        
               $homepagebg = $info['savepath'].$info['savename']; 
               if(M('user')->where(array('id'=>$artist_id))->setField('homepagebg',$homepagebg)){
                    $this->success('修改成功',U(MODULE_NAME.'/Homepage/setBg'));
                }else{
                    $this->error('修改失败');
                } 
            }
        } 
     }
  
}