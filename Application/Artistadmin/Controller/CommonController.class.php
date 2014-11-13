<?php 
namespace Artistadmin\Controller;
use Think\Controller;
class CommonController extends Controller{
	public function _initialize(){
		if(!isset($_SESSION['uid'])){
			$this->redirect(MODULE_NAME.'/Login/index');
		}
	}

	//编辑器图片上传处理
    public function c_upload(){   
        $folder = $_GET['folder']; 
        $config = array( 
            'exts'         =>  array("gif", "png", "jpg", "jpeg", "bmp"), //允许上传的文件后缀
            'savePath'     =>  $folder.'/',                               //保存路径 
            'autoSub'      =>  true,                                      //自动子目录保存文件
            'subName'      =>  array('date', 'Y-m-d'),                    //子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
        );
        $upload = new \Think\Upload($config);
        if($info=$upload->upload()){   
            echo json_encode(array(
                   'url'      =>$info['upfile']['savepath'].$info['upfile']['savename'],
                   'title'    => htmlspecialchars($_POST['pictitle'], ENT_QUOTES),
                   'original' => $info['upfile']['name'],
                   'state'    => 'SUCCESS',
                ));
        // 水印
        $image = new \Think\Image;
        $image->open('./Uploads/'.$info['upfile']['savepath'].$info['upfile']['savename']);
        $image->water('./Data/yaqi.png')->save('./Uploads/'.$info['upfile']['savepath'].$info['upfile']['savename']); 
        }else{
            echo json_encode($upload->getError());
        } 
        }

        
        /**
         * [c_page description]
         * @param  [type] $mtable   M方法的表
         * @param  [type] $dtable   D方法的关联模型
         * @param  [type] $name     遍历用的name
         * @param  string $order    排序
         * @param  string $where2   加筛选条件时用
         * @return [type]
         */
        public function c_page($mtable,$dtable,$name,$order='sort desc,id desc',$where2 = ''){  
	          $count = M($mtable)->where($where2)->count(); 
	          $page  = new \Think\Page($count,25);
	          $page->setConfig('prev','上一页');
	          $page->setConfig('next','下一页');
	          foreach($where2 as $key=>$val) {  
	           $Page->parameter   .=   "cate_id=".urlencode($val).'&';
	          } 
	          $limit = $page->firstRow.','.$page->listRows;
	          $this->pagecount = $count/$page->listRows;
	          $this->$name = D($dtable)->relation(true)->where($where2)->order($order)->limit($limit)->select();
	        // p($this->$name);die;
	          $this->page = $page->show(); 
	          $this->display(); 
        }

        // 排序
        public function c_sort(){

        }
}

 ?>