$(function(){
            $('tr').hover(function(){
               $(this).addClass('bing-bgcolor2');
            },function(){
               $(this).removeClass('bing-bgcolor2');
            });
      });
function del(){
            var msg = "您真的要删除数据吗？\n删除后数据无法恢复\n请确认！";
            if(confirm(msg)==true){
               return true;
            }else{
               return false;
            }
         }