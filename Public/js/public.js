var sW = $(window).width(), sH = $(window).height(), _r = 0.68;
$("#beyond").height(sH-sW*_r);
$.each($("#emojibox .scrollbox .longbox"),function(){
	var l = $(this).children('.emojitable').length;
	$(this).css("width",l*100+"%").children('.emojitable').css("width",100/l+"%");
})
$("#uploadbox").bind('click',function(){
	$('#photofile').trigger('click');
})
$("#photofile").on("change",function(){
	var f = this.files[0];
	if(!/image\/\w+/.test(f.type)){ 
		alert("亲只能传图片哦"); 
		return false; 
	} 
	var reader = new FileReader();
	reader.readAsDataURL(f);
	var img = new Image();
	img.src = getUrl(f);
	img.onload = function(){
		var position = sizereset(sW,sW*_r,img.width,img.height);
		this.height = position.h;
		$(img).addClass('veryCenter');
		$('.limitedbox').append($(img));
	}
})
var tX, tY, oX, oY, imghtml;
var isTouchStart = false;
var hasEmojiOut = false;
$(".emojitable div img").on('touchstart',function(e){
	e.stopPropagation();
	e.preventDefault();
	tX = e.originalEvent.changedTouches[0].pageX;
    tY = e.originalEvent.changedTouches[0].pageY;
	oX = $(this).offset().left;
	oY = $(this).offset().top;
	var src = $(this).attr("src").replace("emoji64","emoji160");
	imghtml = "<img src='"+src+"' class='emoji draging' style='left:"+oX+"px;top:"+oY+"px;transform:rotate({{rotate}}deg)' />";
	// $(imghtml).appendTo('body').dragInit();
	$(imghtml).appendTo('.limitedbox').dragInit();
	isTouchStart = true;
})

$.fn.dragInit = function(){
	var $this = $(this);
	$(document).on('touchmove.init',function(e){
		e.preventDefault();e.stopPropagation();
		var _oX = oX + e.originalEvent.changedTouches[0].pageX - tX,
			_oY = oY + e.originalEvent.changedTouches[0].pageY - tY;
		$this.css({"top":_oY,"left":_oX});
		if(e.originalEvent.changedTouches[0].pageY>sW*_r){}
		else{
			hasEmojiOut = true;
		}
	})
	$(document).on('touchend.init',function(e){
		$(this).off(".init");
		$this.removeClass('draging').beginAdjust();
		if(e.originalEvent.changedTouches[0].pageY>sW*_r){
			$this.removeEmoji();
		}
	})
}
var emojioX, emojioY, emojitX, emojitY;

// 给所有emoji绑定函数
$(document).on('touchstart','.emoji',function(e){
	e.preventDefault();e.stopPropagation();
	emojioX = $(this).offset().left;
	emojioY = $(this).offset().top;
	emojitX = e.originalEvent.changedTouches[0].pageX;
	emojitY = e.originalEvent.changedTouches[0].pageY;
	saveAdjust();//保存之前的调整结果
	$(this).beginAdjust();//当前emoji开始调整
})
$(document).on('touchmove','.emoji',function(e){
	e.preventDefault();e.stopPropagation();
	var _oX = emojioX + e.originalEvent.changedTouches[0].pageX - emojitX,
		_oY = emojioY + e.originalEvent.changedTouches[0].pageY - emojitY;
	$(this).css({"top":_oY,"left":_oX});
	if(!($(this).hasClass('draging'))){
		$(this).addClass('draging');
	}
	//切换removestate状态
	if(e.originalEvent.changedTouches[0].pageY>sW*_r){
		$("#beyond").addClass('removestate');
	}
	else{
		$("#beyond").removeClass('removestate');
		hasEmojiOut = true;
	}
})
$(document).on('touchend',".emoji",function(e){
	e.preventDefault();e.stopPropagation();
	if($(this).hasClass('draging')){
		$(this).removeClass('draging');
	}
	if($("#beyond").hasClass('removestate')){
		$(this).removeEmoji();
	}
})
var dx;
$(document).on('touchstart',".longbox",function(e){
	tX = e.originalEvent.changedTouches[0].pageX;
	hasEmojiOut = false;
})
$(document).on('touchmove',".longbox",function(e){
	dx = e.originalEvent.changedTouches[0].pageX - tX;
})
$(document).on('touchend',".longbox",function(e){
	// 如果第一次点在了表情上且移出去过，那么禁止滑动
	if(hasEmojiOut == false){
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
	}
})
$("input[type='range']").bind('touchmove',function(){
	var v = $(this).val();
	$(this).next('input[type="text"]').val(v);
})
$("#confirmbtn").bind('click',function(){
	saveAdjust();
	$("#beyond").removeClass('ctrlstate');
})
$("#resetbtn").bind('click',function(){
	var w = $(".emoji.adjusting")[0].naturalHeight;
	$(".emoji.adjusting").css({"width":w,"transform":"rotate(0)","-webkit-transform":"rotate(0)"}).attr({"data-size":1,"data-rotate":0});
	$("#sizerange").val(1).next('input[type="text"]').val(1);
	$("#rotaterange").val(0).next('input[type="text"]').val(0);
})
//选择section
$(".section div").bind('touchend',function(){
	var t = $(this).attr("data-tab");
	$("#emojibox").attr("data-showid",t);
})
$.fn.beginAdjust = function(){
	$("#beyond").addClass('ctrlstate');
	var vs = $(this).attr("data-size")?$(this).attr("data-size"):1,
	    vr = $(this).attr("data-rotate")?$(this).attr("data-rotate"):0;
	$("#sizerange").val(vs).next('input[type="text"]').val(vs);
	$("#rotaterange").val(vr).next('input[type="text"]').val(vr);
	$(this).bindCtrl();
}
$.fn.bindCtrl = function(){
	var $this = $(this),w = $(this)[0].naturalHeight;
	$(".emoji").removeClass('adjusting');
	$this.addClass('adjusting');
	$('.range').unbind(".control");
	$("#sizerange").bind('touchmove.control',function(){
		var v = $(this).val()/2;
		$this.css({"width":w*v});
	});
	$("#rotaterange").val($this.attr("data-rotate")).bind('touchmove.control',function(){
		var v = $(this).val();
		$this.css({"transform":"rotate("+v+"deg)","-webkit-transform":"rotate("+v+"deg)"});
	})
}
$.fn.removeEmoji = function(){
	$(this).remove();
	$("#beyond").removeClass('removestate ctrlstate');
}
function saveAdjust(){
	$(".emoji.adjusting").attr({"data-size":$("#sizerange").next("input[type='text']").val(),"data-rotate":$("#rotaterange").next("input[type='text']").val()});
}
function sizereset(maxwidth,maxheight,width,height){
	// alert(maxwidth+","+maxheight+","+width+","+height);
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