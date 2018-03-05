$(function(){
	$('.main_left>div').click(function(){
		var index=$(this).index();
		$(this).css({'background':'#f5f5f5','color':'#e21e1e'}).siblings('div').css({'background':'#fff','color':'#333'});
		$('.main_right').children('div').eq(index).css({'display':'block'}).siblings('div').css({'display':'none'})
	})
	
	$('.page>a').click(function(){
		$(this).css({'background':'#CCCCCC','color':'white'}).siblings('a').css({'background':'white','color':'#333'})
	})
})
