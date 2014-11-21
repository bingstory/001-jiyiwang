// function getAjaxReturn(){
	$(function(){
		$('#submitimg').click(function(){
	    var bol=false;
		$('label[name=username]').html('');
		$('label[name=email]').html('');
		$('label[name=password]').html('');
		$('label[name=code]').html('');
		$('label[name=confirmpwd]').html('');
		username   = $('input[name=username]').val();
		email      = $('input[name=email]').val();
		password   = $('input[name=password]').val();
		code       = $('input[name=code]').val();
		confirmpwd = $('input[name=confirmpwd]').val();
        // alert(username);
		if(username == ''){
			$('label[name=username]').html('<span style="color:red;">*用户名不能为空！</span>');
			return false;
		}
		if(email == ''){
			$('label[name=email]').html('<span style="color:red;">*邮箱不能为空！</span>');
			return false;
		}
		if (!email.match(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/)) {
			$('label[name=email]').html('<span style="color:red;">*邮箱格式不正确！</span>');
			$("#email").focus();
			return false;
		}
		if(password == ''){
			$('label[name=password]').html('<span style="color:red;">*密码不能为空！</span>');
			return false;
		}
		if(confirmpwd == ''){
			$('label[name=confirmpwd]').html('<span style="color:red;">*密码不能为空！</span>');
			return false;
		}
		if(code == ''){
			$('label[name=code]').html('<span style="color:red;">*验证码不能为空！</span>');
			return false;
		}
		if(password != confirmpwd ){
			$('label[name=confirmpwd]').html('<span style="color:red;">*两次密码不一致！</span>');
			return false;
		}
		// success_function(1111);
        $.ajax({
            type:'POST',
            // async:false,
            url:urlForCheckCode,
            data:{
              code:$('input[name=code]').val(),
            },
            success:function(response,status,xhr){
              if(response == 0){
              	$('label[name=code]').html('<span style="color:red;">*验证码错误！</span>');
              	// return fail_function(222);
              	$('head').append("<script>return false;</script>");
              }
            }
        });
        // alert(bing);
        
        
		if(!$("#items").is(":checked")){
			alert('请先同意集艺网《服务条款》');
			return false;
		}
		$('form[name=regForm]').submit();

});});

function getAjaxReturn1(){
	var bing;
	
	return bing;
}
function success_function(info)
{
   alert(info);
}
function fail_function(info)
{
   alert(info);
   var bing = '11111111111';
}


/**
    function getAjaxReturn(success_function,fail_function)
{
       var bol=false;
  $.ajax({
    type:"POST",
    url:"ajax/userexist.aspx",
    data:"username="+vusername.value,
    success:function(msg){
    if(msg=="ok"){   
      showtipex(vusername.id,"<img src='images/ok.gif'/><b><font color='#ffff00'>该用户名可以使用</font></b>",false)
      success_function(msg);
    }
    else
    {    
      showtipex(vusername.id,"<img src='images/cancel.gif'/><b><font color='#ffff00'>该用户已被注册</font></b>",false);
      vusername.className="bigwrong";
      fail_function(msg);
      //return false;
    }
    }
  });

function success_function(info)
{
alert(info);
}
funciont fail_function(info)
{
alert(info);
}
**/