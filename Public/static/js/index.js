$(function(){
	$('.nav_right_ul>li').eq(0).children('a').css({'color':'#ffa633'});
	//banner轮播图
	var timer=null;
	var num=0;
	function bannerFn(){
		num++;
		if(num>1){
			num=0;
		}
		$('.banner>ul>li').eq(num).stop().fadeIn().siblings('li').stop().fadeOut();
		$('.banner>ol>li').eq(num).addClass('active').siblings('li').removeClass('active');
	}
	
	timer=setInterval(bannerFn,3000)
	
	//鼠标悬浮清楚定时器
	$('.banner').mouseover(function(){
		clearInterval(timer);
		$(this).children('span').stop().show();
	}).mouseout(function(){
		timer=setInterval(bannerFn,3000);
		$(this).children('span').stop().hide();
	});
	
	//鼠标悬浮显示左右箭头
	$('.banner>span').mouseover(function(){
		$('.banner>span').css({'background':'rgba(0,0,0,.7)','opacity':'1'})
	}).mouseout(function(){
		$('.banner>span').css({'background':'#000','opacity':'0.3'})
	})
	
	//点击箭头
	$('.banner .left').click(function(){
		num--;
		if(num<0){
			num=1;
		}
		$('.banner>ul>li').eq(num).stop().fadeIn().siblings('li').stop().fadeOut();
		$('.banner>ol>li').eq(num).addClass('active').siblings('li').removeClass('active');
	})
	
	$('.banner .right').click(function(){
		bannerFn()
	})
	
	
	//part1_ul
	$('.part1_ul>li').hover(function(){
		var index=$(this).index();
		$('.part1_ul_1').eq(index).stop().hide().siblings('.part1_ul_2').stop().show();
		$('.part1_ul_1').eq(index).children('p').css({'top':'135px'}).siblings('div').css({'top':'30px'}).siblings('img').css({'top':'50px'});
		$('.part1_ul_2').eq(index).children('img').stop().animate({'top':'50px'},200).siblings('p').stop().animate({'top':'135px'},200).siblings('span').stop().animate({'top':'190px'},200);
	},function(){
		var index=$(this).index();
		$('.part1_ul_2').eq(index).stop().hide().siblings('.part1_ul_1').stop().show();
		$('.part1_ul_2').eq(index).children('img').css({'top':'100px'}).siblings('p').css({'top':'225px'}).siblings('span').css({'top':'280px'});
		$('.part1_ul_1').eq(index).children('p').stop().animate({'top':'225px'},200).siblings('div').stop().animate({'top':'80px'},300).siblings('img').stop().animate({'top':'100px'},300);
	})
	
	
	//优势轮播图
	var a=0;
	$(".left").click(function(){
		a++;
		if(a>5){
			$(".part3_2_ul").css({'left':0});
			a=1
		}
		$(".part3_2_ul").stop().animate({'left':-360*a+'px'},300)
	})
	$(".right").click(function(){
		a--;
		if(a<0){
			$(".part3_2_ul").css({'left':"-1800px"});
			a=4
		}
		$(".part3_2_ul").stop().animate({'left':-360*a+'px'},300)
	})
	
	//云公子解决方案
	$(".part3_1>li").mouseover(function(){
		$(this).children('img').stop().hide().siblings('div').stop().show();
	}).mouseout(function(){
		$(this).children('div').stop().hide().siblings('img').stop().show();
	})
	

	//part5_ul
	$(".part5_ul>li").hover(function(){
		var $this=$(this),
			index=$this.index();
		$('.part5_1').eq(index).stop().hide().siblings('.part5_2').stop().show();
		$('.part5_1').eq(index).children('img').css({'top':'20px'}).siblings('h4').css({'top':'120px','fontSize':'30px'}).siblings('a').css({'top':'140px'});
		$('.part5_2').eq(index).children('.img').children('img').stop().animate({'left':'25px'},200);
		$('.part5_2').eq(index).children('h4').stop().animate({'top':'110px'},200).siblings('p').stop().animate({'top':'160px'},200).siblings('a').stop().animate({'top':'219px'},200);
	},function(){
		var $this=$(this),
			index=$this.index();
		$('.part5_2').eq(index).stop().hide().siblings('.part5_1').stop().show();
		$('.part5_2').eq(index).children('.img').children('img').stop().css({'left':'95px'});
		$('.part5_2').eq(index).children('h4').css({'top':'160px'}).siblings('p').css({'top':'235px'}).siblings('a').css({'top':'330px'});
		$('.part5_1').eq(index).children('img').stop().animate({'top':'90px'},200).siblings('h4').stop().animate({'top':'219px','fontSize':'18px'},200).siblings('a').animate({'top':'330px'},200);
	})
	
	//二维码
	$(".erweima").hover(function(){
		$(this).siblings('.hide').show();
	},function(){
		$(this).siblings('.hide').hide();
	})
	
	//弹出模态框
	$('.bot_right').click(function(){	
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
	
	$('.bot_right').click(function(event){
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
			 var res=/^((13[0-9])|(17[0-9])|(15[^4,\\D])|(18[0,0-9]))\\d{8}$/;
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