var sW = $(window).width(), sH = $(window).height(), _r = 0.68;
	var position;// a global variable, which define imagebox's width, height
	var canvas = document.getElementById("canvas"),
	context = canvas.getContext('2d'),
	// ratio = getPixelRatio(context);
	ratio = 1;
	$("body").height(sH).width(sW);
	$.each($("#emojibox .scrollbox .longbox"),function(){
		var l = $(this).children('.emojitable').length;
		$(this).css("width",l*100+"%").children('.emojitable').css("width",100/l+"%");
	})
	$("#uploadbox").bind('touchend',function(){
		$('#photofile').trigger('click');
	})
	$("#photofile").bind("change",function(){
		loadingboxshow();
		$(".imagebox").empty();
		$("#ctrlbottom.ctrlbottom").removeClass('ctrlstate');
		if(position != undefined){
			context.clearRect(0,0,position.w*ratio,position.h*ratio);
		}
		var f = this.files[0];
		if(!/image\/\w+/.test(f.type)){ 
			alert("亲只能传图片哦"); 
			return false; 
		} 
		var reader = new FileReader();
		ImageOrientationFix({  
            image:getUrl(f)
            ,onFix:function(base64_str){  
                var img = new Image();
                img.src = base64_str;
                img.onload = function(){
					position = sizereset(sW,$(".innerbox").height(),this.width,this.height);
					console.log(position.h);
					this.height = position.h, this.width = position.w;
					ratio = this.naturalHeight/this.height;
					$('.innerbox .imagebox').css({
						"width":position.w+"px",
						"height":position.h+"px",
						"left":position.dx+"px"
					}).append($(this).addClass('userimage'));
					$(".canvasbox").css({
						"width":position.w+"px",
						"height":position.h+"px",
						"left":position.dx+"px"
					});
					canvas.style.width = position.w+"px";
					canvas.style.height = position.h+"px";
					canvas.setAttribute("width",position.w*ratio);
					canvas.setAttribute("height",position.h*ratio);
					loadingboxhide();
					if($("body").hasClass('init')){
						$("body").removeClass('init');
					}
				}
            }  
        });  
	})
	var oX, oY, imghtml;
	var isTouchStart = false, isTouchMove = false;
	$(".emojitable div img").bind('touchstart',function(e){
		isTouchStart = true;
		isTouchMove = false;
	})
	$(".emojitable div img").bind('touchmove',function(e){
		isTouchMove = true;
	})
	$(".emojitable div img").bind('touchend',function(e){
		if(isTouchStart&&!isTouchMove){
			$(".emoji").removeClass('adjusting');
			var src = $(this).attr("src").replace("emoji64","emoji160");
			// var src = $(this).attr("src").replace("emoji64","emoji160");
			imghtml = "<img src='"+src+"' class='emoji adjusting' style='left:"+(position.w/2-40)+"px;top:"+(position.h/2-40)+"px;' data-size='1' data-rotate='0' />";
			$(imghtml).appendTo('.imagebox');
			loadingboxshow();
			oX = $(this).offset().left;
			oY = $(this).offset().top;
			$("#emojibox").removeClass('show');
			$(".ctrlbottom").addClass('ctrlstate');
			$(".emoji.adjusting")[0].onload = function(){
				$(".emoji.adjusting").beginAdjust();
				loadingboxhide();
			}
		}
	})

	$.fn.dragInit = function(){

	}
	var emojioX, emojioY, emojitX, emojitY;

	// 给所有emoji绑定函数
	$(document).on('touchstart','.emoji',function(e){
		e.preventDefault();e.stopPropagation();
		emojioX = $(this).position().left;
		emojioY = $(this).position().top;
		emojitX = e.originalEvent.changedTouches[0].pageX;
		emojitY = e.originalEvent.changedTouches[0].pageY;
		if(!$(this).hasClass("adjusting")){
			$(this).beginAdjust();//当前emoji开始调整
		}
	})
	$(document).on('touchmove','.emoji',function(e){
		e.preventDefault();e.stopPropagation();
		var _oX = emojioX + e.originalEvent.changedTouches[0].pageX - emojitX,
			_oY = emojioY + e.originalEvent.changedTouches[0].pageY - emojitY;
		$(this).css({"top":_oY,"left":_oX});
	})
	$(document).on('touchend',".emoji",function(e){
		e.preventDefault();e.stopPropagation();
		if($(this).hasClass('draging')){
			$(this).removeClass('draging');
		}
	})
	
	$.fn.beginAdjust = function(){
		$(".emoji").not(this).removeClass('adjusting');
		$(this).addClass('adjusting');
		$("#ctrlbottom.ctrlbottom").addClass('ctrlstate');
		var vs = $(this).attr("data-size"),
		    vr = $(this).attr("data-rotate");
		$("#sizerange").val(vs);
		$("#rotaterange").val(vr);
		$(this).bindCtrl();
	}
	$.fn.bindCtrl = function(){
		var $this = $(this),w = $(this)[0].naturalHeight;
		$('.range').unbind(".control");
		$("#sizerange").bind('touchmove.control',function(){
			var v = $(this).val();
			$this.css({"width":w*v/2+"px"}).attr("data-size",v);
		});
		$("#rotaterange").val($this.attr("data-rotate")).bind('touchmove.control',function(){
			var v = $(this).val();
			$this.css({"transform":"rotate("+v+"deg)","-webkit-transform":"rotate("+v+"deg)"}).attr("data-rotate",v);
		})
	}
	$.fn.removeEmoji = function(){
		$(this).remove();
		$("#ctrlbottom.ctrlbottom").removeClass('ctrlstate');
	}

	function sizereset(maxwidth,maxheight,width,height){
	  var r = maxwidth/maxheight,
	      radio = width/height,
	      dx = dy = 0;
	  if(radio >= r){
	    width=maxwidth;
	    height=maxwidth/radio;
	    dy=(maxheight-height)/2;
	  }
	  else{
	    height=maxheight;
	    width=maxheight*radio;
	    dx = (maxwidth-width)/2;
	  }
	  var position = {
	    w:width,
	    h:height,
	    dx:dx,
	    dy:dy
	  }
	  return position;
	}
	function getUrl(file){
		var url;
		if (window.createObjectURL != undefined) {
			url = window.createObjectURL(file)
		} 
		else if (window.URL != undefined) {
			url = window.URL.createObjectURL(file)
		} 
		else if(window.webkitURL != undefined) {
			url = window.webkitURL.createObjectURL(file)
		}
		return url;
	}

		$("#savebtn").bind("click",function(){
			loadingboxshow();
			var img = $(".imagebox img");
			context.drawImage(img[0],0,0,img[0].naturalWidth,img[0].naturalHeight,0,0,ratio*position.w,ratio*position.h);
			context.save();
			$.each($(".emoji"),function(){
				var emoji = $(this);
				var angle = emoji.attr("data-rotate")*Math.PI/180;
				var left = emoji.position().left,
					top = emoji.position().top;
			 	var dx;
			 	if(angle<Math.PI/2&&angle>0||angle<-Math.PI/2){
			 		dx = 0.70710678*Math.cos(Math.PI/4-angle)*emoji.outerWidth();
			 	}
			 	else{
			 		dx = -0.70710678*Math.cos(angle+Math.PI/4)*emoji.outerWidth();
			 	}
			 	dx = dx < 0?-dx:dx;
			 	var xpos = left+dx;
			    var ypos = top+dx;
				context.save();
				context.translate(ratio*xpos, ratio*ypos);
				context.rotate(angle);
				context.translate(-ratio*xpos, -ratio*ypos);
				context.drawImage(emoji[0], ratio*(xpos-0.5*emoji.width()), ratio*(ypos-0.5*emoji.height()), ratio*emoji.width(), ratio*emoji.height());
				context.restore();
			});
			var image = getimage(canvas);
			$(image).css({
				"width":position.w,
				"height":position.h
			}).addClass("veryCenter").appendTo('#composeimagebox');
			$(".savebox").show();
		})
		
	function getPixelRatio(context){
	    var backingStore = context.backingStorePixelRatio ||
	          context.webkitBackingStorePixelRatio ||
	          context.mozBackingStorePixelRatio ||
	          context.msBackingStorePixelRatio ||
	          context.oBackingStorePixelRatio ||
	          context.backingStorePixelRatio || 1;
	    return (window.devicePixelRatio || 1) / backingStore;
	}
	function getimage(canvas){
		var image = new Image();
	    image.src = canvas.toDataURL("image/png");
	    $("#savebtn>a").attr("href",canvas.toDataURL("image/png"));
	    return image;
	}
	function loadingboxshow(){
		$(".loadingbox").show();
	}
	function loadingboxhide(){
		$(".loadingbox").hide();
	}
	$(".addemojibtn").bind('touchend',function(){
		$("#emojibox").toggleClass('show');
	})
	$("#removebtn").bind('touchend',function(){
		$(".emoji.adjusting").removeEmoji();
	})
	$("#resetbtn").bind('touchend',function(){
		var w = "80px";
		$(".emoji.adjusting").css({"width":w,"transform":"rotate(0)","-webkit-transform":"rotate(0)"}).attr({"data-size":1,"data-rotate":0});
		$("#sizerange").val(1);
		$("#rotaterange").val(0);
	})
	$("#returnbtn").bind('click',function(){
		$(".savebox").hide();
		$("#composeimagebox").empty();
	})
	$("#copybtn").bind('touchend',function(){
		var ori = $(".emoji.adjusting"),
		    clone = ori.clone();
		ori.removeClass('adjusting');
		clone.css({
			"left":ori.position().left+10+"px",
			"top" :ori.position().top+10+"px"
		}).appendTo('.imagebox');
		$("#ctrlbottom").removeClass('ctrlstate');
	})
	$("#indexbtn").bind('touchend',function(){
		var ori = $(".emoji.adjusting");
		if(!ori.is(':last-child')){
			var next = ori.next(".emoji");
			ori.insertAfter(next);
		}
	})
	$("#firstnewimage").bind('touchend',function(){
		$('#photofile').trigger('click');
	})
	$(".closebtn").bind('touchend',function(){
		$(".appinfo").hide();
	})
	$(".info").bind('touchend',function(){
		$(".appinfo").show();
	})
	var tX, dx;
	$(document).on('touchstart',".longbox",function(e){
		tX = e.originalEvent.changedTouches[0].pageX;
	})
	$(document).on('touchmove',".longbox",function(e){
		dx = e.originalEvent.changedTouches[0].pageX - tX;
	})
	$(document).on('touchend',".longbox",function(e){
			var p = $(this).attr("data-page")-0,
			maxp = $(this).children(".emojitable").length;
			if(p>=0 && p<maxp){
				var l;
				if(dx > 0 && p>0){
					l = $(".emojitable[data-index='"+(--p)+"']",this).position().left;
				}
				else if(dx<0 && p<maxp-1){
					l = $(".emojitable[data-index='"+(++p)+"']",this).position().left;
				}
				else{}
				$(this).attr("data-page",p).closest(".scrollbox").stop(true).animate({scrollLeft:l}, 300, function(){
					$(this).find('.pagenav a').removeClass('now').filter(":nth-child("+(p+1)+")").addClass('now');
				});
			}
	})
	//选择section
	$(".section div").bind('touchend',function(){
		var t = $(this).attr("data-tab");
		$("#emojibox").attr("data-showid",t);
	})