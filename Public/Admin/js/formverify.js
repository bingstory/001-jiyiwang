// $(document).ready(function(){ 
//         //判断表单是否为空
//         $('form').submit(function(){
//         	$(this).find('label#nameerror').html('');
//         	$(this).find('label#pwderror').html('');
//         	$(this).find('div#codeerror').html('');
//             $(this).find('label#titleerror').html('');
//             $(this).find('label#selecterror').html('');
//             $(this).find('label#summaryerror').html('');
//             $(this).find('label#contenterror').html('');
             
//             $(this).find('label#picerror').html('');

//         	var username = $(this).find("input#username").val();
//         	var pwd = $(this).find("input#pwd").val();
//         	var code = $(this).find("input[name='code']").val();
//             var title = $(this).find("input[name=title]").val();
//             var select = $(this).find("select[name=cid]").val();
//             var summary = $(this).find("input[name=summary]").val();
//             var content = $(this).find("input[name=content]").val(); 
//             var pic = $(this).find("input#pic").val();

//         	if(username == ''){
//         		$(this).find('label#nameerror').append("<span style='color:red; font-size:12px;'>*请填写用户名</span>");
//         		$(this).find('label#nameerror').fadeIn('medium');
//         		return false;
//         	}
//         	if(pwd == ''){
//         		$(this).find('label#pwderror').append("<span style='color:red; font-size:12px;'>*请输入密码</span>");
//         		$(this).find('label#pwderror').fadeIn('medium');
//         		return false;
//         	}
//         	if(code == ''){
//         		$(this).find('label#codeerror').append("<span style='color:red; font-size:12px;'>*请输入验证码</span>");
//         		$(this).find('label#codeerror').fadeIn('medium');
//         		return false;
//         	}
//             if(title == ''){
//                 $(this).find('label#titleerror').append("<span style='color:red;'>*标题不能为空</span>");
//                 $(this).find('label#titleerror').fadeIn('medium');
//                 return false;
//             }
//              if(select == ''){
//                 $(this).find('label#selecterror').append("<span style='color:red;'>*请选择分类</span>");
//                 $(this).find('label#selecterror').fadeIn('medium');
//                 return false;
//             }
//             if(summary == ''){
//                 $(this).find('label#summaryerror').append("<span style='color:red;'>*摘要不能为空</span>");
//                 $(this).find('label#summaryerror').fadeIn('medium');
//                 return false;
//             }
//             if(content == ''){
//                 $(this).find('label#contenterror').append("<span style='color:red;'>*你还没有填写内容</span>");
//                 $(this).find('label#contenterror').fadeIn('medium');
//                 return false;
//             } 
//             if(pic == ''){
//                 $(this).find('label#picerror').append("<span style='color:red;'>*你还没有填写内容</span>");
//                 $(this).find('label#picerror').fadeIn('medium');
//                 return false;
//             }
//         });
// });
