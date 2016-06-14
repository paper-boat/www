$(function(){
	  //下拉
	  $(".prod").each(function(index,ele){
          $(this).addClass("n"+(index+1))
          $(this).css("background","url(http://localhost/statics/images/images/menu0"+(index+1)+".png) no-repeat")
        })
              $(".prod").hover(function(){
              	
                var index=$(this).index()
                 $(this).css("background","url(http://localhost/statics/images/images/menu"+(index+1)+".png) no-repeat")
                $(".prod ul").css("display","").eq(index).css("display","block")
                },function(){
                	var index=$(this).index()
                 $(".prod ul").css("display","")
                 $(this).css("background","url(http://localhost/statics/images/images/menu0"+(index+1)+".png) no-repeat")
                })
})