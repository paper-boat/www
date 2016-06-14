$(function(){
      //
      $(".bannerbg:first").css({display:"block",zIndex:"13"})
       $(".currently:first").css("border","1px solid #fb823b")
       $(".currently").click(function(){
           var index=$(this).index()
           $(".bannerbg").css("display","none").eq(index).css("display","block")
           $(".currently").css("border","").eq(index).css("border","1px solid #fb823b")
       })
            var num=0;
            var cwidth=$(".currently").width()+20;
            function move(){
             num++;
             if(num==$(".currently").length){
              num=0;
               //$(".currently:first").appendTo($(".scroll_pic")).parent().css("left",0)
             }
             if(num<0){
              num=$(".currently").length-1
              //$(".currently:last").prependTo($(".scroll_pic")).css("left",-cwidth).animate({left:0})
             }
             // $(".bannerbg").css("opacity","").eq(num).css("opacity","1")
             // $(".currently").css("border","").eq(num).css("border","1px solid #fb823b")
             if(num<6){
            $(".bannerbg").css("display","none").eq(num).css("display","block")
             $(".scroll_pic").animate({left:0},function(){
              $(".currently").css("border","").eq(num).css("border","1px solid #fb823b")
            })
            }else{
            $(".bannerbg").css("display","none").eq(num).css("display","block")
             $(".scroll_pic").animate({left:-cwidth*(num-5)},500,function(){
              $(".currently").css("border","").eq(num).css("border","1px solid #fb823b")
            })
            }
            }
            $(".s_pre").click(function(){
                num-=2;
                move()
             })
            $(".s_next").click(function(){       
                move()
             
              })
  //下拉
              $(".prod").hover(function(){
                var index=$(this).index()
                $(".prod ul").css("display","").eq(index).css("display","block")
                },function(){
                 $(".prod ul").css("display","")
                })

     })







    // var bwidth=$(".bannerbg").width()
    //   var cwidth=$(".currently").width();
    //   $(".currently:first").css("border","1px solid #fb823b")
    //   $(".currently").click(function(){
    //     var index=$(this).index();
    //     $(".bannerbg").css("display","").eq(index).css("opacity","1")
    //     $(".currently").css("border","").eq(index).css("border","1px solid #fb823b")
    //   })


    //     $(".s_next").click(function(){
    //      /* $(".imagebg").finish()
    //       move1()*/
    //     $(".imagebg").animate({left:-bwidth},500,function(){
    //     $(".bannerbg:first").appendTo($(".imagebg")).parent().css("left",0)
    //     })

    //     $(".scroll_pic").animate({left:-cwidth},500,function(){
    //     $(".currently:first").appendTo($(".scroll_pic")).parent().css("left",0)
    //            })

    //     })
    //     $(".s_pre").click(function(){
    //       $(".imagebg").finish()
    //       $(".bannerbg:last").prependTo($(".imagebg")).css("left",-bwidth).animate({left:0})

    //       $(".scroll_pic").finish()
    //       $(".currently:last").prependTo($(".scroll_pic")).css("left",-cwidth).animate({left:0})

    //     })

