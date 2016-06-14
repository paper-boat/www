$(function(){
    $(".pager li a:first").css({background:"url(http://localhost/statics/images/images/dot2.jpg) no-repeat"})
     $(".pager li").hover(function(){
           var index=$(this).index()
          $(".slides li").fadeOut(100).eq(index).fadeIn(500)
            $(".pager li a").css("background","").eq(index).css("background","url(http://localhost/statics/images/images/dot2.jpg) no-repeat")
            },function(){
               num=$(this).index();
            })
            //自动轮播
            var t=setInterval(move,3000);
             var num=0;
            function move(){
             num++;
             if(num==$(".pager li").length){
              num=0;
             }
             if(num<0){
              num=$(".pager li").length-1
             }
            $(".slides li").fadeOut(100).eq(num).fadeIn()
            $(".pager li a").css("background","").eq(num).css("background","url(http://localhost/statics/images/images/dot2.jpg) no-repeat")
              }
  })