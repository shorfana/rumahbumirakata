<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Admin Rakata</title>

	<!-- Main Styles -->
	<link rel="stylesheet" href="<?php echo base_url() ?>admin_template/assets/styles/style-horizontal.min.css">

	<!-- mCustomScrollbar -->
	<link rel="stylesheet" href="<?php echo base_url() ?>admin_template/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="<?php echo base_url() ?>admin_template/assets/plugin/waves/waves.min.css">

	<!-- Sweet Alert -->
	<link rel="stylesheet" href="<?php echo base_url() ?>admin_template/assets/plugin/sweet-alert/sweetalert.css">
	
	<!-- Percent Circle -->
	<link rel="stylesheet" href="<?php echo base_url() ?>admin_template/assets/plugin/percircle/css/percircle.css">

	<!-- Chartist Chart -->
	<link rel="stylesheet" href="<?php echo base_url() ?>admin_template/assets/plugin/chart/chartist/chartist.min.css">

	<!-- FullCalendar -->
	<link rel="stylesheet" href="<?php echo base_url() ?>admin_template/assets/plugin/fullcalendar/fullcalendar.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>admin_template/assets/plugin/fullcalendar/fullcalendar.print.css" media='print'>
	<link rel="stylesheet" href="<?php echo base_url() ?>admin_template/assets/plugin/select2/css/select2.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>admin_template/assets/plugin/dropify/css/dropify.min.css">

	<!-- Color Picker -->
	<link rel="stylesheet" href="<?php echo base_url() ?>admin_template/assets/color-switcher/color-switcher.min.css">
</head>

<body>
<header class="fixed-header">
	<div class="header-top">
		<div class="container">
			<div class="pull-left">
				<a href="index.html" class="logo">RakataAdmin</a>
			</div>
			<!-- /.pull-left -->
			<div class="pull-right">
				<div class="ico-item hidden-on-desktop">
					<button type="button" class="menu-button js__menu_button fa fa-bars waves-effect waves-light"></button>
				</div>
				<!-- /.ico-item hidden-on-desktop -->
				<div class="ico-item">
					<a href="#" class="ico-item fa fa-search js__toggle_open" data-target="#searchform-header"></a>
					<form action="#" id="searchform-header" class="searchform js__toggle"><input type="search" placeholder="Search..." class="input-search"><button class="fa fa-search button-search" type="submit"></button></form>
					<!-- /.searchform -->
				</div>
				<div class="ico-item">
					<a href="#" class="ico-item fa fa-bell notice-alarm js__toggle_open" data-target="#notification-popup"></a>
					<div id="notification-popup" class="notice-popup js__toggle" data-space="55">
						<h2 class="popup-title">Your Notifications</h2>
						<!-- /.popup-title -->
						<div class="content">
							<ul class="notice-list">
								<li>
									<a href="#">
										<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
										<span class="name">John Doe</span>
										<span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
										<span class="time">10 min</span>
									</a>
								</li>
							<!-- /.notice-list -->
							<a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
						</div>
						<!-- /.content -->
					</div>
					<!-- /#notification-popup -->
				</div>
				<!-- /.ico-item -->
				<div class="ico-item">
					<a href="#" class="ico-item fa fa-user js__toggle_open" data-target="#user-status"></a>
					<div id="user-status" class="user-status js__toggle">
						<a href="#" class="avatar"><img src="<?php echo base_url() ?>admin_template/http://placehold.it/80x80" alt=""><span class="status online"></span></a>
						<h5 class="name"><a href="profile.html">Emily Stanley</a></h5>
						<h5 class="position">Administrator</h5>
						<!-- /.name -->
						<div class="control-items">
							<div class="control-item"><a href="#" title="Settings"><i class="fa fa-gear"></i></a></div>
							<div class="control-item"><a href="#" class="js__logout" title="Log out"><i class="fa fa-power-off"></i></a></div>
						</div>
						<!-- /.control-items -->
					</div>
					<!-- /#user-status -->
				</div>
				<!-- /.ico-item -->
			</div>
			<!-- /.pull-right -->
		</div>
		<!-- /.container -->
	</div>
	<!-- /.header-top -->
		<nav class="nav-horizontal">
		<button type="button" class="menu-close hidden-on-desktop js__close_menu"><i class="fa fa-times"></i><span>CLOSE</span></button>
		<div class="container">
			
			<ul class="menu">
					<li class="current">
						<a href="<?php echo base_url() ?>admin"><i class="ico fa fa-home"></i><span>Dashboard</span></a>
					</li>
					
					<li class="has-sub">
						<a href="<?php echo base_url() ?>admin/data_rumah"><i class="ico fa fa-bar-chart"></i><span>Data Rumah</span></a>
					</li>
					<li class="has-sub">
						<a href="#"><i class="ico fa fa-th-large"></i><span>Blok Rumah</span></a>
						<ul class="sub-menu single">
							<li><a href="form-elements.html">A</a></li>
							<li><a href="form-advanced.html">B</a></li>
							<li><a href="form-fileupload.html">C</a></li>
							<li><a href="form-validation.html">D</a></li>
						</ul>
						<!-- /.sub-menu single -->
					</li>
					<li class="has-sub">
						<a href="#"><i class="ico fa fa-paper-plane"></i><span>Status Rumah</span></a>
						<ul class="sub-menu single">
							<li><a href="page-starter.html">Sudah Terjual</a></li>
							<li><a href="page-login.html">Belum Terjual</a></li>
						</ul>
						<!-- /.sub-menu single -->
					</li>
			</ul>
			<!-- /.menu -->
		</div>
		<!-- /.container -->
	</nav>
	<!-- /.nav-horizontal -->
</header>