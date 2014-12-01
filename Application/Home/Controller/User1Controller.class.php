<?php
namespace Home\Controller;
use Think\Controller;
class User1Controller extends Controller {
	public function index(){
       if(!isset($_SESSION['userid'])){$this->redirect('/'.MODULE_NAME.'/login');}
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
            session('fusername',$name);
            session('realname',$user1['realname']);
            session('userid',$user1['id']);
            $data = array(
                'id' => session('userid'),
                'logintime' => time()
                );
            M('user')->save($data);
            $this->ajaxReturn('ok');
        }elseif($user2){
            session('fusername',$name);
            session('userid',$user2['id']);
            session('realname',$user2['realname']);
            $data = array(
                'id' => session('userid'),
                'logintime' => time()
                );
            M('user')->save($data);
            $this->ajaxReturn('ok');
        }elseif($user3){
            session('fusername',$name);
            session('userid',$user3['id']);
            session('realname',$user3['realname']);
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
        if(!isset($_SESSION['userid'])){$this->redirect('/'.MODULE_NAME.'/login');}
        $userid = session('userid');
        $this->user = M('user')->find($userid);
        $this->display();
    }

    // 个人中心
    public function grzx(){
        if(!isset($_SESSION['userid'])){$this->redirect('/'.MODULE_NAME.'/login');}
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
        if(!isset($_SESSION['userid'])){$this->redirect('/'.MODULE_NAME.'/login');}
        $this->display();
    }

    // 购物车
    public function shoppingCart(){
        if(!isset($_SESSION['userid'])){$this->redirect('/'.MODULE_NAME.'/login');}
        $this->display();
    }

    // 交易记录
    public function orderDetail(){
        if(!isset($_SESSION['userid'])){$this->redirect('/'.MODULE_NAME.'/login');}
        $this->display();
    }

    // 网站留言管理
    public function leaveMessage(){
        if(!isset($_SESSION['userid'])){$this->redirect('/'.MODULE_NAME.'/login');}
        $userid = session('userid');
        $count = M('siteliuyan')->where(array('user_id'=>$userid))->count();
        $page = new \Think\Page($count,3);
        $page->setConfig('prev','');
        $page->setConfig('next','');
        $limit = $page->firstRow.','.$page->listRows;
        $this->message = M('siteliuyan')->where(array('user_id'=>$userid))->limit($limit)->select();
        $this->page = $page->show();
        // p($this->message);die;
        $this->display();
    }

    // 网站留言 表单处理
    public function doLeaveMessage(){
        $data = array(
            'user_id' => session('userid'),
            'title'   => I('title'),
            'phone' => I('phone'),
            'content' => I('content'),
            'pubtime' => time()
            );
        M('siteliuyan')->add($data);
        redirect($_SERVER['HTTP_REFERER']);
    }

    // 积分管理
    public function creditsManage(){
        if(!isset($_SESSION['userid'])){$this->redirect('/'.MODULE_NAME.'/login');}
        $userid = session('userid');
        $this->user = M('user')->find($userid);
        $this->display();
    }

    // 购买兑换
    public function buyfor(){
        if(!isset($_SESSION['userid'])){$this->redirect('/'.MODULE_NAME.'/login');}
        $userid = session('userid');
        $this->user = M('user')->find($userid);
        $this->username = session('fusername');
        $this->trade_no = randomkeys_num(8).randomkeys_alpha(2);
        $this->display();
    }

    // 赠票资质
    public function invoiceInfo(){
        if(!isset($_SESSION['userid'])){$this->redirect('/'.MODULE_NAME.'/login');}
        $this->display();
    }

    // 收获地址
    public function shippingAddress(){
        if(!isset($_SESSION['userid'])){$this->redirect('/'.MODULE_NAME.'/login');}
        $user_id = session('userid');
        $this->addr = M('shippingaddr')->where(array('user_id'=>$user_id))->order('id desc')->select();
        $this->display();
    }

    // 收获地址 表单处理
    public function doShippingAddress(){
        $ischeck = I('ischeck');
        $user_id = session('userid');
        $name = I('name');
        $province = I('province');
        $city = I('city');
        $county = I('area');
        $detailaddr = I('detailaddr');
        $phone = I('phone');
        $fixedphone1 = I('fp1');
        $fixedphone2 = I('fp2');
        $fixedphone3 = I('fp3');
        $defaultaddr = I('defaultaddr');
        $count = M('shippingaddr')->where(array('user_id'=>$user_id))->count();
        if($count >= 5){ 
            $this->ajaxReturn(0);
        }else{
            if($defaultaddr == 1){
                $data = array(
                    'user_id'     => $user_id,
                    'name'        => $name,
                    'province'    => $province,
                    'city'        => $city,
                    'county'      => $county,
                    'detailaddr'  => $detailaddr,
                    'phone'       => $phone,
                    'pubtime'     => time(),
                    'fixedphone1'  => $fixedphone1,
                    'fixedphone2'  => $fixedphone2,
                    'fixedphone3'  => $fixedphone3,
                    'defaultaddr' => $defaultaddr
                    );
                // p($data);die;
                M('shippingaddr')->where(array('user_id'=>$user_id))->setField('defaultaddr','0');
                M('shippingaddr')->add($data);
            }else{
                $data = array(
                    'user_id'    => $user_id,
                    'name'       => $name,
                    'province'   => $province,
                    'city'       => $city,
                    'county'     => $county,
                    'detailaddr' => $detailaddr,
                    'phone'      => $phone,
                    'pubtime'    => time(),
                    'fixedphone1'  => $fixedphone1,
                    'fixedphone2'  => $fixedphone2,
                    'fixedphone3'  => $fixedphone3,
                    );
                // p($data);die;
                M('shippingaddr')->add($data);
            }

            $addr = M('shippingaddr')->where(array('user_id'=>$user_id))->order('id desc')->select();
            if(empty($ischeck)){
            foreach ($addr as $k => $v) {
                if($v['defaultaddr'] == 1){
                $response .= '<li> <span class="fl_l sh_t1">'.$v['name'].'</span><span class="fl_l sh_t2">'.$v['province'].' '. $v['city'].' '.$v['county'].'</span><span class="fl_l sh_t3">'.$v['detailaddr'].'</span><span class="fl_l sh_t4">430200</span><span class="fl_l sh_t5">'.$v['phone'].'</span><span class="fl_r sh_t6"><a href="'.__MODULE__.'/User1/editShippingAddr/id/'.$v['id'].'">修改</a> | <a href="'.__MODULE__.'/User1/deleteShippingAddr/id/'.$v['id'].'">删除</a></span></li>';
                }else{
                    $response .= '<li> <span class="fl_l sh_t1">'.$v['name'].'</span><span class="fl_l sh_t2">'.$v['province'].' '. $v['city'].' '.$v['county'].'</span><span class="fl_l sh_t3">'.$v['detailaddr'].'</span><span class="fl_l sh_t4">430200</span><span class="fl_l sh_t5">'.$v['phone'].'</span><span class="fl_r sh_t6"><a href="'.__MODULE__.'/User1/editShippingAddr/id/'.$v['id'].'">修改</a> | <a href="'.__MODULE__.'/User1/deleteShippingAddr/id/'.$v['id'].'">删除</a></span></li>';
                }
            }
            }else{
                foreach ($addr as $k => $v) {
                    if($v['defaultaddr'] == 1){
                        $response .=  '<p class="child"><input name="addr" type="radio"  value="'.$v['id'].'" checked="checked" />'.$v['province'].' '.$v['city'].' '.$v['county'].' '.$v['detailaddr'].' '.$v['phone'].' <span><a href="'.__MODULE__.'/User1/editShippingAddr/id/'.$v['id'].'"><!--修改--></a></span> <span><a href="'.__MODULE__.'/User1/deleteShippingAddr/id/'.$v['id'].'">删除</a></span></p>';
                    }else{
                        $response .=  '<p class="child"><input name="addr" type="radio"  value="'.$v['id'].'" />'.$v['province'].' '.$v['city'].' '.$v['county'].' '.$v['detailaddr'].' '.$v['phone'].' <span><a href="'.__MODULE__.'/User1/editShippingAddr/id/'.$v['id'].'"><!--修改--></a></span> <span><a href="'.__MODULE__.'/User1/deleteShippingAddr/id/'.$v['id'].'">删除</a></span></p>';
                    }
            }
            }
            // p('111'.$data);die;
            $this->ajaxReturn($response);
        }
    }

    // ajax返回修改地址
    public function returnAddr(){
        $id = I('id');
        $addr = M('shippingaddr')->find($id);
        $response = '
        <p>所在地区： <span>*</span> 
                      <select name="province" id="province2" style="height:30px;width:80px;" value="'.$addr['province'].'"></select>
                        <select name="city" id="city2" style="height:30px;width:80px;" value="'.$addr['city'].'"></select>
                        <select name="area" id="area2" style="height:30px;width:80px;" value="'.$addr['county'].'"></select>
                        <input name="detailaddr" id="detailaddr2" placeholder="详细地址" type="text"  value="'.$addr['detailaddr'].'"/>
                        <script language="javascript" defer>new PCAS("province","city","area");</script>
        </p>
        <p>收货人姓名：  <span>*</span> <input name="name2" type="text" placeholder=" 长度不超过25个字符" value="'.$addr['name'].'"/></p>
        <p>手机号码： &nbsp;&nbsp;&nbsp;&nbsp;<input id="phone2" name="" type="text" placeholder=" 电话号码、手机号码必须填一项" value="'.$addr['phone'].'" /></p>
        <p><input class="J_CheckBoxItem" id="defaultaddr" type="checkbox" name="setDefault" value="1" style=" height:10px; width:14px"/>设置为默认收货地址</p>
             <span class="fl_l anliu1"><img style="cursor:pointer;" id="esubmit" src="'.__PUBLIC__.'/Home/images/anl.jpg" width="70" height="28" /></span>';
        $this->ajaxReturn($response);
    }

    // 删除地址
    public function deleteShippingAddr(){
        $id = I('id');
        M('shippingaddr')->delete($id);
        $prevurl = $_SERVER['HTTP_REFERER'];
        redirect($prevurl);
    }

    // 修改地址
    public function editShippingAddr(){
        $id = I('id');
        $this->addr = M('shippingaddr')->find($id);
        $this->display();
    }

    // 修改地址 表单处理
    public function doEditShippingAddr(){
        $user_id = session('userid');
        $id = I('id'); //p($user_id);die;
        $name = I('name');
        $province = I('province');
        $city = I('city');
        $county = I('area');
        $detailaddr = I('detailaddr');
        $phone = I('phone');
        $fixedphone1 = I('fp1');
        $fixedphone2 = I('fp2');
        $fixedphone3 = I('fp3');
        $defaultaddr = I('setDefault');   // p($defaultaddr);die;
        if($defaultaddr == 1){
                $data = array(
                    'id'          => $id,
                    'name'        => $name,
                    'province'    => $province,
                    'city'        => $city,
                    'county'      => $county,
                    'detailaddr'  => $detailaddr,
                    'phone'       => $phone,
                    'fixedphone1' => $fixedphone1,
                    'fixedphone2' => $fixedphone2,
                    'fixedphone3' => $fixedphone3,
                    'defaultaddr' => $defaultaddr
                    );
                // p($user_id);die;
                M('shippingaddr')->where(array('user_id'=>$user_id))->setField('defaultaddr',0);
                M('shippingaddr')->save($data);
            }else{
                $data = array(
                    'id'         => $id,
                    'name'       => $name,
                    'province'   => $province,
                    'city'       => $city,
                    'county'     => $county,
                    'detailaddr' => $detailaddr,
                    'phone'      => $phone,
                    'fixedphone1'  => $fixedphone1,
                    'fixedphone2'  => $fixedphone2,
                    'fixedphone3'  => $fixedphone3,
                    );
                // p($data);die;
                M('shippingaddr')->save($data);
            }
            $this->redirect(MODULE_NAME.'/User1/shippingAddress');
    }

    // 退换货品
    public function exchangeGoods(){
        if(!isset($_SESSION['userid'])){$this->redirect('/'.MODULE_NAME.'/login');}
        $this->display();
    }

    // 交易记录
    public function jyjl(){
        $userid = session('userid');
        $count = D('OrderView')->where(array('userid'=>$userid,'isjifen'=>array('neq','yes')))->count();
        $page = new \Think\Page($count,10);
        $page->setConfig('prev','');
        $page->setConfig('next','');
        $limit = $page->firstRow.','.$page->listRows;
        $this->orderlist = D('OrderView')->where(array('userid'=>$userid,'isjifen'=>array('neq','yes')))->limit($limit)->select();
        $this->page = $page->show();
        $this->display();
    }
}