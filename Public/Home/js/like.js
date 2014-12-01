$(function(){
 $('.clicklike').click(function(){
 	  var ID = $(this).attr('data');
      $.ajax({
        type:'POST',
        url:URL,
        data:{
          id:ID,
        },
        success:function(response,status,xhr){
          $('#like'+ID).html(response);
          // alert(response);
        }
      });
 });
 $('.clickconcern').click(function(){
    var ID2 = $(this).attr('data');
      $.ajax({
        type:'POST',
        url:URL2,
        data:{
          id:ID2,
        },
        success:function(response,status,xhr){
          $('#concern'+ID2).html(response);
        }
      });
 });
});
