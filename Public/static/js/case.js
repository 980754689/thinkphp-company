$(function(){
	$('.part3_box>li').hover(function(){
		$(this).children('.img1').stop().hide().siblings('.img2').stop().show().siblings('h4').css({'color':'#090909'})
	},function(){
		$(this).children('.img2').stop().hide().siblings('.img1').stop().show().siblings('h4').css({'color':'#828282'})
	})
})
