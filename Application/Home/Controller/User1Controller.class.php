<?php
namespace Home\Controller;
use Think\Controller;
class User1Controller extends Controller {
	public function index(){
       if(!isset($_SESSION['userid'])){
            $this->redirect('/'.MODULE_NAME.'/login');
        }
	}
 
    // 邮箱注册
    public function regByEmail(){
    	$this->display();
    }

    // 邮箱注册
    public function doRegByEmail(){
        // p($_POST);
        $data = array(
            'username' => I('username'),
            'email'    => I('email'),
            'password' => I('password'),
            'regtime'  => time()
            );
        M('user')->add($data);
        redirect(__ROOT__);
    }

    // 登陆
    public function loginform(){
    	$name = I('name');
        $password = I('password','','md5');
        $where1 = array('usertype'=>'normal','username'=>$name,'password'=>$password);
        $where2 = array('usertype'=>'normal','email'=>$name,'password'=>$password);
        $where3 = array('usertype'=>'normal','phone'=>$name,'password'=>$password);
        $user1 = M('user')->where($where1)->find();
        $user2 = M('user')->where($where2)->find();
        $user3 = M('user')->where($where3)->find();
        if($user1){
            session('normalusername',$name);
            session('userid',$user1['id']);
            $data = array(
                'id' => session('userid'),
                'logintime' => time()
                );
            M('user')->save($data);
            $this->ajaxReturn('ok');
        }elseif($user2){
            session('normalusername',$name);
            session('userid',$user2['id']);
            $data = array(
                'id' => session('userid'),
                'logintime' => time()
                );
            M('user')->save($data);
            $this->ajaxReturn('ok');
        }elseif($user3){
            session('normalusername',$name);
            session('userid',$user3['id']);
            $data = array(
                'id' => session('userid'),
                'logintime' => time()
                );
            M('user')->save($data);
            $this->ajaxReturn('ok');
        }else{
            $this->ajaxReturn('error');
        }
    }

    // 退出
    public function logout(){
        session_unset();
        session_destroy();
        // $prevurl = $_SERVER['HTTP_REFERER'];
        redirect(__ROOT__);
    }

    // 个人主页
    public function homepage(){
        if(!isset($_SESSION['userid'])){
            $this->redirect('/'.MODULE_NAME.'/login');
        }
        $userid = session('userid');
        $this->user = M('user')->find($userid);
        $this->display();
    }

    // 个人中心
    public function grzx(){
        $userid = session('userid');
        $this->user = M('user')->find($userid);
        $this->display();
    }
    
    // 修改个人中心 
    public function modifyPersonInfo(){
        $userid = session('userid');
        $user = M('user')->find($userid);
        $province = $user['province'];
        $city = $user['city'];
        $county = $user['county'];

        $upload = new \Think\Upload();                             // 实例化上传类    
        $upload->maxSize   =  3145728 ;                            // 设置附件上传大小    
        $upload->exts      =  array('jpg', 'gif', 'png', 'jpeg');  // 设置附件上传类型   
        $upload->rootPath  =  './';
        $upload->savePath  =  'Uploads/PersonInfo/';                   // 设置附件上传目录    // 上传单个文件    
        $info   = $upload->uploadOne($_FILES['picurl1']); 
        $haspic = $info['savename']; 
        // p($haspic);die;
        if(empty($haspic)){
             $data = array(
                'id'         => session('userid'),
                'username'   => I('username'),
                'realname'   => I('realname'),
                'gender'     => I('gender'),
                'phone'      => I('phone'),
                'email'      => I('email'),
                'address'    => I('address'),
                'dianhua'    => I('dianhua'),
                'province'   => I('province',$province),
                'city'       => I('city',$city),
                'county'     => I('area',$county),
                'modifytime' => time(),
            );
        }else{
            // 生成缩略图
            $getpic = $info['savepath'].$info['savename'];//获取上传的图片 
            $image = new \Think\Image(); 
            $image->open($getpic);// 生成一个缩放后填充为150*150的缩略图并保存为thumb.jpg
            $image->thumb(199, 128,\Think\Image::IMAGE_THUMB_FIXED)->save($getpic);

            if(!$info) {                // 上传错误提示错误信息        
            $this->error($upload->getError());   
            }else{                      // 上传成功 获取上传文件信息   
                $data = array(
                    'id'         => session('userid'),
                    'username'   => I('username'),
                    'realname'   => I('realname'),
                    'gender'     => I('gender'),
                    'phone'      => I('phone'),
                    'email'      => I('email'),
                    'address'    => I('address'),
                    'dianhua'    => I('dianhua'),
                    'province'   => I('province',$province),
                    'city'       => I('city',$city),
                    'county'     => I('area',$county),
                    'portrait'   => $info['savepath'].$info['savename'],
                    'modifytime' => time(),
                    );
            }
        } 
        // p($data);die;
        $prevurl = $_SERVER['HTTP_REFERER'];
        if(M('user')->save($data)){
            redirect($prevurl);
        }else{
            redirect($prevurl);
        }
        
    }

    // 账户安全
    public function accountSafety(){
        $this->display();
    }

    // 购物车
    public function shoppingCart(){
        $this->display();
    }

    // 交易记录
    public function orderDetail(){
        $this->display();
    }

    // 留言管理
    public function leaveMessage(){
        $this->display();
    }

    // 积分管理
    public function creditsManage(){
        $this->display();
    }

    // 购买兑换
    public function buyfor(){
        $this->display();
    }

    // 赠票资质
    public function invoiceInfo(){
        $this->display();
    }

    // 收获地址
    public function shippingAddress(){
        $this->display();
    }

    // 退换货品
    public function exchangeGoods(){
        $this->display();
    }
}