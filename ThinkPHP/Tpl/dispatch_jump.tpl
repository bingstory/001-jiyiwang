<?php
    if(C('LAYOUT_ON')) {
        echo '{__NOLAYOUT__}';
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>跳转提示</title>
<style type="text/css">
.system-message{width: 400px; height: 150px; margin: 0 auto; border: 5px solid #d8d4d4; border-radius: 13px; text-align: center;}
.system-message .title{text-align: center; background: #e3e3e3; height: 30px; line-height: 30px; margin-top: 1px; border-radius: 13px 13px 0 0; font-weight: 600;}
.error{font-weight: 600; color: red;}
.success{font-weight: 600; color: green;}
</style>
</head>
<body>
<div class="system-message">



<present name="message">
<p class="title"> 提示信息 </p>
<p class="success"><?php echo($message); ?></p>
<else/>
<p class="title"> 提示信息 </p>
<p class="error"><?php echo($error); ?></p>
</present>
<p class="detail"></p>
<p class="jump">
页面自动 <a id="href" href="<?php echo($jumpUrl); ?>">跳转</a> 等待时间： <b id="wait"><?php echo($waitSecond); ?></b>
</p>
</div>




<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	if(time <= 0) {
		location.href = href;
		clearInterval(interval);
	};
}, 1000);
})();
</script>
</body>
</html>
