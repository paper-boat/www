$(function(){
	var div=document.getElementsByClassName("imgbox")[0];
       	var oldimg=$("img",div)[0]
       	var aa=document.documentElement.clientWidth;
        var bb=document.documentElement.clientHeight;
       	div.ondblclick=function(){
            var mask=$("<div>")
            mask.style.cssText="width:100%;height:100%;position:fixed;background:#ccc;opacity:0.8;filter:alpha(opacity=80);left:0;top:0;"
		    document.body.appendChild(mask)
		    var closebtn=$("<div>")
		    closebtn.innerHTML="x"
		    closebtn.style.cssText="width:30px;height:30px;position:fixed;right:30px;top:30px;color:red;border:1px solid orange;border-radius:50%;text-align:center;line-height:30px;"
		   mask.appendChild(closebtn)
		   var img=$("<img>")
		   img.src=oldimg.src;
		   var wleft=(aa-oldimg.offsetWidth)/2
           var wtop=(bb-oldimg.offsetHeight)/2
		   img.style.cssText="display:block;position:fixed;left:"+wleft+"px;top:"+wtop+"px;width:100px;height:100px;"
		   document.body.appendChild(img)
		   new Drag(img)
		    closebtn.onclick=function(){
		    	document.body.removeChild(mask)
		    	document.body.removeChild(img)
		   }
		   	wheel(img,function(){
       		var left=this.offsetLeft;
       		var top=this.offsetTop;
       		var height=parseInt(getStyle(img,"height"))
       		var width=parseInt(getStyle(img,"width"))
       		height+=10;
       		width+=10;
       		left-=5;
       		top-=5;
       		img.style.height=height+"px"
       		img.style.width=width+"px"
       		img.style.left=left+"px";
       		img.style.top=top+"px";

       	},function(){
       		var left=this.offsetLeft;
       		var top=this.offsetTop;
            var height=parseInt(getStyle(img,"height"))
            var width=parseInt(getStyle(img,"width"))
       		width-=10;
       		height-=10;
       		left+=5;
       		top+=5;
       		img.style.height=height+"px"
       		img.style.width=width+"px"
       		img.style.left=left+"px";
       		img.style.top=top+"px";
       	})
       	}
       
})