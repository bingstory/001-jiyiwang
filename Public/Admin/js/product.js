
// $(document).ready(function(){ 
//         //判断表单是否为空
//         $('form').submit(function(){
        	
//             $(this).find('label#titleerror').html('');
//             $(this).find('label#selecterror').html('');
//             $(this).find('label#summaryerror').html('');
//             $(this).find('label#contenterror').html(''); 
//             $(this).find('label#picerror').html('');

        	 
//             var title = $(this).find("input[name=title]").val();
//             var select = $(this).find("select[name=cid]").val();
//             var summary = $(this).find("input[name=summary]").val();
//             var content = $(this).find("input[name=content]").val(); 
//             var pic = $(this).find("input#pic").val();

        	 
//             if(title == ''){
//                 $(this).find('label#titleerror').append("<span style='color:red;'>*还没填写产品名称</span>");
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
//                 $(this).find('label#contenterror').append("<span style='color:red;'>*你还没有上传文件</span>");
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
