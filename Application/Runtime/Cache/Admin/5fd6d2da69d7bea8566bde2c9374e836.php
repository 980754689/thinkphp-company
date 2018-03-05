<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>控制台 - 后台管理系统</title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="/Public/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/Public/assets/css/font-awesome.min.css" />
		<link rel="stylesheet" href="/Public/assets/css/ace.min.css" />
		<link rel="stylesheet" href="/Public/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="/Public/assets/css/ace-skins.min.css" />
		<script src="/Public/assets/js/ace-extra.min.js"></script>
		<!-- uploadify -->
		<link rel="stylesheet" type="text/css" href="/Public/admin/uploadify/uploadify.css" />
		<script src="/Public/js/jquery-1.7.2.min.js"></script>
		<script src="/Public/admin/uploadify/jquery.uploadify.min.js"></script>
		<script src="/Public/admin/js/img.js"></script>
		<!-- ueditor -->
		<script type="text/javascript" src="/Public/admin/ueditor/1.4.3/ueditor.config.js"></script>
		<script type="text/javascript" src="/Public/admin/ueditor/1.4.3/ueditor.all.min.js"> </script>
		<script type="text/javascript" src="/Public/admin/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
		<script src="/Public/admin/js/new_add.js"></script>
		
		<script type="text/javascript">
			// 图片上传js
			var swf = "/Public/admin/uploadify/uploadify.swf";
			var img_upload_url = "<?php echo U('New/upload');?>";
		</script>

		
		
	</head>

	<body>
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="icon-leaf"></i>
							后台管理系统 </small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-ok"></i>
									还有4个任务完成
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">软件更新</span>
											<span class="pull-right">65%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:65%" class="progress-bar "></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">硬件更新</span>
											<span class="pull-right">35%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:35%" class="progress-bar progress-bar-danger"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">单元测试</span>
											<span class="pull-right">15%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:15%" class="progress-bar progress-bar-warning"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">错误修复</span>
											<span class="pull-right">90%</span>
										</div>

										<div class="progress progress-mini progress-striped active">
											<div style="width:90%" class="progress-bar progress-bar-success"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										查看任务详情
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-bell-alt icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-warning-sign"></i>
									8条通知
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink icon-comment"></i>
												新闻评论
											</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="btn btn-xs btn-primary icon-user"></i>
										切换为编辑登录..
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
												新订单
											</span>
											<span class="pull-right badge badge-success">+8</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-info icon-twitter"></i>
												粉丝
											</span>
											<span class="pull-right badge badge-info">+11</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										查看所有通知
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-envelope-alt"></i>
									5条消息
								</li>

								<li>
									<a href="#">
										<img src="/Public/assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												不知道写啥 ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>1分钟以前</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="/Public/assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												不知道翻译...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20分钟以前</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="/Public/assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												到底是不是英文 ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>下午3:15</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="inbox.html">
										查看所有消息
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="/Public/assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>欢迎光临,</small>
									<?php echo ($_SESSION['admin_user']['username']); ?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="icon-cog"></i>
										设置
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-user"></i>
										个人资料
									</a>
								</li>

								<li>
									<a href="<?php echo U('Home/index/index');?>" target="_self">
										<i class="icon-user"></i>
										前往前台页面
									</a>
								</li>


								<li class="divider"></li>

								<li>
									<a href="<?php echo U('Public/logout');?>">
										<i class="icon-off"></i>
										退出
									</a>
								</li>
							</ul>
						</li>

					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-success">
								<i class="icon-signal"></i>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button class="btn btn-danger">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->

					<ul class="nav nav-list">
						<li <?php if((CONTROLLER_NAME) == "Index"): ?>class="active"<?php endif; ?>>
							<a href="<?php echo U('Index/index');?>">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> 控制台 </span>
							</a>
						</li>

						<li>
							<a href="<?php echo U('Admin/index');?>" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 管理员管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu" <?php if((CONTROLLER_NAME) == "Admin"): ?>style="display:block"<?php endif; ?>>
								<li <?php if((CONTROLLER_NAME== 'Admin') and (ACTION_NAME== 'index')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Admin/index');?>">
										<i class="icon-double-angle-right"></i>
										管理员列表
									</a>
								</li>
								<li <?php if((CONTROLLER_NAME== 'Admin') and (ACTION_NAME== 'add')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Admin/add');?>"  >
										<i class="icon-double-angle-right icon-plus"></i>
										添加管理员
									</a>
								</li>
							</ul>
						</li>
		
						<!--
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 产品管理 </span>
								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu" <?php if((CONTROLLER_NAME) == "Product"): ?>style="display:block"<?php endif; ?>>
								<li <?php if((CONTROLLER_NAME== 'Product') and (ACTION_NAME== 'index')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Product/index');?>">
										<i class="icon-double-angle-right"></i>
										产品列表
									</a>
								</li>
								<li <?php if((CONTROLLER_NAME== 'Product') and (ACTION_NAME== 'add')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Product/add');?>"  >
										<i class="icon-double-angle-right icon-plus"></i>
										添加产品
									</a>
								</li>
							</ul>
						</li> 
						-->

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 案例管理 </span>
								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu" <?php if((CONTROLLER_NAME) == "Case"): ?>style="display:block"<?php endif; ?>>
								<li <?php if((CONTROLLER_NAME== 'Case') and (ACTION_NAME== 'index')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Case/index');?>">
										<i class="icon-double-angle-right"></i>
										案例列表
									</a>
								</li>
								<li <?php if((CONTROLLER_NAME== 'Case') and (ACTION_NAME== 'add')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Case/add');?>"  >
										<i class="icon-double-angle-right icon-plus"></i>
										添加案例
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 分类管理 </span>
								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu" <?php if((CONTROLLER_NAME) == "Type"): ?>style="display:block"<?php endif; ?>>
								<li <?php if((CONTROLLER_NAME== 'Type') and (ACTION_NAME== 'index')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Type/index');?>">
										<i class="icon-double-angle-right"></i>
										分类列表
									</a>
								</li>
								<li <?php if((CONTROLLER_NAME== 'Type') and (ACTION_NAME== 'add')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Type/add');?>"  >
										<i class="icon-double-angle-right icon-plus"></i>
										添加分类
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 我们的服务 </span>
								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu" <?php if((CONTROLLER_NAME) == "Service"): ?>style="display:block"<?php endif; ?>>
								<li <?php if((CONTROLLER_NAME== 'Service') and (ACTION_NAME== 'index')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Service/index');?>">
										<i class="icon-double-angle-right"></i>
										首页服务列表
									</a>
								</li>
								<li <?php if((CONTROLLER_NAME== 'Service') and (ACTION_NAME== 'add')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Service/add');?>"  >
										<i class="icon-double-angle-right icon-plus"></i>
										添加首页服务
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 服务项目 </span>
								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu" <?php if((CONTROLLER_NAME) == "Flow"): ?>style="display:block"<?php endif; ?>>
								<li <?php if((CONTROLLER_NAME== 'Flow') and (ACTION_NAME== 'fanwei')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Flow/fanwei');?>"  >
										<i class="icon-double-angle-right icon-plus"></i>
										服务范围
									</a>
								</li>
								<li <?php if((CONTROLLER_NAME== 'Flow') and (ACTION_NAME== 'youshi')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Flow/youshi');?>"  >
										<i class="icon-double-angle-right icon-plus"></i>
										服务优势
									</a>
								</li>
								<li <?php if((CONTROLLER_NAME== 'Flow') and (ACTION_NAME== 'index')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Flow/index');?>">
										<i class="icon-double-angle-right"></i>
										服务流程
									</a>
								</li>
								<li <?php if((CONTROLLER_NAME== 'Flow') and (ACTION_NAME== 'add')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Flow/add');?>"  >
										<i class="icon-double-angle-right icon-plus"></i>
										添加服务流程
									</a>
								</li>
								

							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 专家团队 </span>
								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu" <?php if((CONTROLLER_NAME) == "Team"): ?>style="display:block"<?php endif; ?>>
								<li <?php if((CONTROLLER_NAME== 'Team') and (ACTION_NAME== 'index')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Team/index');?>">
										<i class="icon-double-angle-right"></i>
										成员列表
									</a>
								</li>
								<li <?php if((CONTROLLER_NAME== 'Team') and (ACTION_NAME== 'add')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Team/add');?>">
										<i class="icon-double-angle-right"></i>
										添加成员
									</a>
								</li>
							</ul>
						</li>

						<!--
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 招商管理 </span>
								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu" <?php if((CONTROLLER_NAME) == "Order"): ?>style="display:block"<?php endif; ?>>
								<li <?php if((CONTROLLER_NAME== 'Order') and (ACTION_NAME== 'index')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Order/index');?>">
										<i class="icon-double-angle-right"></i>
										招商列表
									</a>
								</li>
							</ul>
						</li>
						-->

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 新闻管理 </span>
								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu" <?php if((CONTROLLER_NAME) == "New"): ?>style="display:block"<?php endif; ?>>
								<li <?php if((CONTROLLER_NAME== 'New') and (ACTION_NAME== 'index')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('New/index');?>">
										<i class="icon-double-angle-right"></i>
										新闻列表
									</a>
								</li>

								<li <?php if((CONTROLLER_NAME== 'New') and (ACTION_NAME== 'add')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('New/add');?>">
										<i class="icon-double-angle-right"></i>
										添加新闻
									</a>
								</li>
							</ul>
						</li>


						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 轮播图管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu" <?php if((CONTROLLER_NAME) == "Img"): ?>style="display:block"<?php endif; ?>>
								<li <?php if((CONTROLLER_NAME== 'Img') and (ACTION_NAME== 'index')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Img/index');?>">
										<i class="icon-double-angle-right"></i>
										轮播图列表
									</a>
								</li>
								<li <?php if((CONTROLLER_NAME== 'Img') and (ACTION_NAME== 'add')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Img/add');?>"  >
										<i class="icon-double-angle-right icon-plus"></i>
										添加轮播图
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 广告位管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu" <?php if((CONTROLLER_NAME) == "Advert"): ?>style="display:block"<?php endif; ?>>
								<li <?php if((CONTROLLER_NAME== 'Advert') and (ACTION_NAME== 'index')): ?>class="active"<?php endif; ?>>
								<a href="<?php echo U('Advert/index');?>">
									<i class="icon-double-angle-right"></i>
	                            	广告位列表
								</a>
								</li>

								<li <?php if((CONTROLLER_NAME== 'Img') and (ACTION_NAME== 'add')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Advert/add');?>"  >
										<i class="icon-double-angle-right icon-plus"></i>
										添加广告位
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 人才招聘 </span>

								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu" <?php if((CONTROLLER_NAME) == "Job"): ?>style="display:block"<?php endif; ?>>
								<li <?php if((CONTROLLER_NAME== 'Job') and (ACTION_NAME== 'index')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Job/index');?>">
										<i class="icon-double-angle-right"></i>
										招聘信息列表
									</a>
								</li>
								<li <?php if((CONTROLLER_NAME== 'Job') and (ACTION_NAME== 'add')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Job/add');?>"  >
										<i class="icon-double-angle-right icon-plus"></i>
										添加招聘信息
									</a>
								</li>
								<li <?php if((CONTROLLER_NAME== 'Job') and (ACTION_NAME== 'zhan')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Job/zhan');?>"  >
										<i class="icon-double-angle-right icon-plus"></i>
										人才战略
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 关于我们 </span>

								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu" <?php if((CONTROLLER_NAME) == "About"): ?>style="display:block"<?php endif; ?>>
								<li <?php if((CONTROLLER_NAME== 'About') and (ACTION_NAME== 'index')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('About/index');?>">
										<i class="icon-double-angle-right"></i>
										信息列表
									</a>
								</li>
								<li <?php if((CONTROLLER_NAME== 'About') and (ACTION_NAME== 'jianjie')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('About/jianjie');?>"  >
										<i class="icon-double-angle-right icon-plus"></i>
										公司简介
									</a>
								</li>
								<li <?php if((CONTROLLER_NAME== 'About') and (ACTION_NAME== 'wenhua')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('About/wenhua');?>"  >
										<i class="icon-double-angle-right icon-plus"></i>
										企业文化
									</a>
								</li>
								<li <?php if((CONTROLLER_NAME== 'About') and (ACTION_NAME== 'fazhan')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('About/fazhan');?>"  >
										<i class="icon-double-angle-right icon-plus"></i>
										发展历程
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 备案信息 </span>

								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu" <?php if((CONTROLLER_NAME) == "Copyright"): ?>style="display:block"<?php endif; ?>>
								<li <?php if((CONTROLLER_NAME== 'Copyright') and (ACTION_NAME== 'index')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Copyright/index');?>">
										<i class="icon-double-angle-right"></i>
										备案信息
									</a>
								</li>
							</ul>
						</li>

					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="<?php echo U('Index/index');?>">首页</a>
							</li>
							
	<li class="active">服务信息</li>

						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>

					<div class="page-content">
						<div class="page-header">
							
	<h1>
		服务信息
		<small>
			<i class="icon-double-angle-right"></i>
			服务范围
		</small>
	</h1>

						</div><!-- /.page-header -->
						
	<div class="row">
		<div class="col-md-12">
		<form action="<?php echo U('Flow/save_2');?>" class="form-horizontal" enctype="multipart/form-data" method="post">

			<div class="form-group">
				<label for="" class="col-sm-2 control-label">服务范围：</label>
				<div class="col-sm-4">
					<textarea style="width:600px;height:200px;margin:10px 3px 10px" name="fanwei"><?php echo ($arr["fanwei"]); ?></textarea>
				</div>
			</div>
				
			<div class="form-group">
			    <div class="col-sm-offset-2 col-sm-4">
					<input type="hidden" name="id" value="<?php echo ($arr["id"]); ?>">
					<button type="submit" class="btn btn-default">提 交</button>
			    </div>
			</div>
		</form>
		</div>
	</div>

					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="default" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; 选择皮肤</span>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
							<label class="lbl" for="ace-settings-navbar"> 固定导航条</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> 固定滑动条</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs">固定面包屑</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl">切换到左边</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
							<label class="lbl" for="ace-settings-add-container">
								切换窄屏
								<b></b>
							</label>
						</div>
					</div>
				</div><!-- /#ace-settings-container -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<!--
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		-->
		<!-- <![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='/Public/assets/js/jquery-2.0.3.min.js'>"+"<"+"script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='/Public/assets/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
		</script>
		<script src="/Public/assets/js/bootstrap.min.js"></script>
		<script src="/Public/assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="/Public/assets/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="/Public/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="/Public/assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="/Public/assets/js/jquery.slimscroll.min.js"></script>
		<script src="/Public/assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="/Public/assets/js/jquery.sparkline.min.js"></script>
		<script src="/Public/assets/js/flot/jquery.flot.min.js"></script>
		<script src="/Public/assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="/Public/assets/js/flot/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->

		<script src="/Public/assets/js/ace-elements.min.js"></script>
		<script src="/Public/assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,
						size: size
					});
				})

				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html', {tagValuesAttribute:'data-values', type: 'bar', barColor: barColor , chartRangeMin:$(this).data('min') || 0} );
				});




			  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
				{ label: "social networks",  data: 38.7, color: "#68BC31"},
				{ label: "search engines",  data: 24.5, color: "#2091CF"},
				{ label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
				{ label: "direct traffic",  data: 18.6, color: "#DA5430"},
				{ label: "other",  data: 10, color: "#FEE074"}
			  ]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.25
							},
							stroke: {
								color: '#fff',
								width: 2
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne",
						labelBoxBorderColor: null,
						margin:[-30,15]
					}
					,
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);

			 /**
			 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
			 so that's not needed actually.
			 */
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);



			  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
			  var previousPoint = null;

			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$tooltip.show().children(0).text(tip);
					}
					$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
				} else {
					$tooltip.hide();
					previousPoint = null;
				}

			 });






				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}

				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}

				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}


				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});


				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();

					var off2 = $source.offset();
					var w2 = $source.width();

					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}


				$('.dialogs,.comments').slimScroll({
					height: '300px'
			    });

				var agent = navigator.userAgent.toLowerCase();
				if("ontouchstart" in document && /applewebkit/.test(agent) && /android/.test(agent))
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				});

				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
						$(ui.item).css('z-index', 'auto');
					}
					}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});


			})
		</script>
	<div style="display:none"></div>
</body>
</html>