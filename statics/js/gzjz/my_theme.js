$(function(){
  $('#nav .bac').on('mouseenter mouseleave',function(e){
    console.log($(this));
    $(this).find('.nav-sub:animated').stop(true,true)
    $(this).find('.nav-sub').slideToggle(400);
    return false;
  })
})
