$(function(){
	//合作流程
	$('.part1_ul>li').hover(function(){
		$(this).css({'color':'white','background':'#ffa633'}).children('.img').stop().hide().siblings('.img2').stop().show();		
	},function(){
		$(this).css({'color':'#535353','background':'#e4e4e4'}).children('.img2').stop().hide().siblings('.img').stop().show();
	})
	
	//产品详情
	$('.part2_ul>li').hover(function(){
		var index=$(this).index();
		$(this).children('.part2_ul_left').css({'background':'#db7d7d','color':'#ffffc7'}).siblings('.part2_ul_right').css({'background':'#db7d7d','color':'#ffffc7'});
		$('.part2_ul_left').eq(index).children('.img').stop().hide().siblings('.img2').stop().show();
	},function(){
		var index=$(this).index();
		$(this).children('.part2_ul_left').css({'background':'#e4e4e4','color':'#535353'}).siblings('.part2_ul_right').css({'background':'#e4e4e4','color':'#535353'});
		$('.part2_ul_left').eq(index).children('.img').stop().show().siblings('.img2').stop().hide();
	})
	
	
	//抢占流量入口
	$('.part4_ul_2').stop().hide();
	$('.part4_ul>li').hover(function(){
		$(this).children('.part4_ul_1').stop().hide().siblings('.part4_ul_2').stop().show();
	},function(){
		$(this).children('.part4_ul_2').stop().hide().siblings('.part4_ul_1').stop().show();
	})
})
