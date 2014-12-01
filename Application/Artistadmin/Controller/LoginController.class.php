<?php 
namespace Artistadmin\Controller;
use Think\Controller;
class LoginController extends Controller{
	//登陆页
	public function index(){
		$this->display();
	} 

    //登陆表单处理
	public function login(){
		   if(!IS_POST) E('页面不存在'); 
       $code   = I('code'); 
       $verify = new \Think\Verify();
       if(!$verify->check($code))  $this->error('验证码错误');

       $username = I('username');
       $pwd      = I('password','','md5');
       $usertype = 'artist';
       $db       = M('user');
       $where    = array('username'=>$username, 'password'=>$pwd,'usertype'=>$usertype);
       $result   = $db->where($where)->find(); 
   	   if(!$result){ 
   	   	$this ->error('用户名或密码错误');
   	   } 
   	   
   	   //更新最后一次登录时间和IP
   	   $data = array(
            'id' => $result['id'],
            'logintime' => time(),
            'loginip' => get_client_ip(),
   	   	); 
   	   $db->save($data);

   	   session('uid',$result['id']);
   	   session('username',$result['username']); 
   	   session('logintime',date('Y-m-d H:i:s',$result['logintime']));
   	   session('loginip',$user['loginip']);

   	   // p($_SESSION);die;
   	   redirect(__MODULE__);
		 
	}

	
}


 ?>