
$(function(){
	var img=$(".highslide img").attr("src")

	$(".highslide img").click(function(){
		 var height=$(this).height()*3
		var width=$(this).width()*3
		var aa=$("<div class='box'></div>").css({
			width:width,height:height,
			      background:"#fff",
				position:"absolute",
				 margin:"auto",
				 left:"0",right:"0",
				 marginTop:"18px",
				 textAlign:"center",
		  //       top:"0",left:"0",bottom:"0",right:"0",
		})
		var tt=$("<img src='"+img+"'></div>").css({
				height:height,
				width:width,
				background:"#fff",
				position:"absolute",
				 marginTop:"20px",
				margin:"auto",
		        left:"0",right:"0",
	        }).appendTo(aa)
		$("<div class='jyy'></div>").css({
			width:"100%",height:"100%",
			background:"#000",
			opacity:"0.7",
			position:"fixed",
			top:"0",left:"0",
			zIndex:"999"
		}).appendTo("body")
		$("<div class='jyy1'></div>").css({
			width:"100%",height:"100%",
			position:"fixed",
			top:"0",left:"0",
			zIndex:"999"
		}).appendTo("body").append(aa)

		aa.click(function(){
		aa.remove()
		$(".jyy1").remove()
		$(".jyy").remove()
	})
	})
	
	
})


