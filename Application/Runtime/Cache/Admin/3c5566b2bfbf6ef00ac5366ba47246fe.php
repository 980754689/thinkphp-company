<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>登录</title>
<link rel="stylesheet" type="text/css" href="/Public/login/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="/Public/login/css/demo.css" />
<!--必要样式-->
<link rel="stylesheet" type="text/css" href="/Public/login/css/component.css" />
</head>
<body>
	<div class="container demo-1">
		<div class="content">
			<div id="large-header" class="large-header">
				<canvas id="demo-canvas"></canvas>
				<div class="logo_box">
					<h3>欢迎你</h3>
					<form action="<?php echo U('Public/dologin');?>" method="post">
						<div class="input_outer">
							<span class="u_user"></span>
							<input name="username" class="text" style="color: #FFFFFF !important" type="text" placeholder="请输入账户">
						</div>
						<div class="input_outer">
							<span class="us_uer"></span>
							<input name="password_hash" class="text" style="color: #FFFFFF !important; position:absolute; z-index:100;"value="" type="password" placeholder="请输入密码">
						</div>
						<div class="input_outer">
							<span class="us_yan"></span>
							<input name="code" class="text" style="color: #FFFFFF !important; position:absolute; z-index:100;" type="text" placeholder="请输入验证码">
						</div>
						<div class="mb2">
							<img class="act-but " style="cursor:pointer;height:46px;width:330px" src="<?php echo U('Public/Verify_c');?>" title="点击刷新验证码" id="imgVerify" onclick="fleshVerify();"/>
						</div>
						<div class="mb2">
							<input class="act-but submit" type="submit" style="color: #FFFFFF;width: 330px" value="登录"/>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!-- /container -->
	<script src="/Public/login/js/TweenLite.min.js"></script>
	<script src="/Public/login/js/EasePack.min.js"></script>
	<script src="/Public/login/js/rAF.js"></script>
	<script src="/Public/login/js/demo-1.js"></script>
	<script src="/Public/static/js/jquery-1.11.1.min.js"></script>

	<script>
		function fleshVerify() {
        //重新加载验证码
        $('#imgVerify').attr(
            'src',
            "<?php echo U('Public/Verify_c');?>"
            );
    	}
	</script>
	<div style="text-align:center;"></div>
</body>
</html>