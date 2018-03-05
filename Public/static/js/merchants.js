$(function(){
	$('.nav_right_ul>li').eq(3).children('a').css({'color':'#ffa633'});
	//弹出模态框
	$('.modalBtn').click(function(){
		$('.modalBox').stop().show();
	})
	
	//模态框隐藏
	$('.modalBox').click(function(){
		$(this).stop().hide();
		$('.form_item').children('input').val('').siblings('img').stop().hide().siblings('span').html('');
	})
	
	//取消冒泡
	$('.modalBox_con').click(function(event){
			if(event&&event.stopPropagation){
				event.stopPropagation();
			}else{
				event.cancelBubble=true;
			}
			$(this).stop().show();
		})
	
	$('.modalBtn').click(function(event){
		if(event&&event.stopPropagation){
			event.stopPropagation();
		}else{
			event.cancelBubble=true;
		}
		$('.modalBox').stop().show();
	})
	
	//模态框正则表达
	function fn(){
		$('#name').blur(function(){
			if($('#name').val()==''){
				$(this).siblings('.false').stop().show().siblings('.true').stop().hide().siblings('.lable').html('姓名不能为空');
			}else{
				$(this).siblings('.true').stop().show().siblings('.false').stop().hide().siblings('.lable').html('');
			}
		})
		
		$('#num').blur(function(){
			 var res=/^(0[0-9]{2,3}\-)?([2-9][0-9]{6,7})+(\-[0-9]{1,4})?$|(^(13[0-9]|15[0|3|6|7|8|9]|18[8|9])\d{8}$)/;
			var str=$('#num').val();
			if($('#num').val()==''){
				$(this).siblings('.false').stop().show().siblings('.true').stop().hide().siblings('.lable').html('号码不能为空');
			}else if(res.test(str)){
				$(this).siblings('.true').stop().show().siblings('.false').stop().hide().siblings('.lable').html('');
			}else{
				$(this).siblings('.false').stop().show().siblings('.true').stop().hide().siblings('.lable').html('号码错误,请检查后重新输入');
			}
		})
		
		$('#yzm').blur(function(){
			if($('#yzm').val()==''){
				$(this).siblings('.false').stop().show().siblings('.true').stop().hide().siblings('.lable').html('验证码不能为空');
			}else{
				$(this).siblings('.true').stop().show().siblings('.false').stop().hide().siblings('.lable').html('');
			}
		})
		
	}
	
	fn();
	
	$('#index_submit').click(function(){
		if($('#num').val()==''||$('#name').val()==''||$('#yzm').val()==''){
			alert('内容不能为空')
		}else{
			fn();
		}
	})
	
})
