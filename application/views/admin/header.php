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
				<a href="#" class="logo">RakataAdmin</a>
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
				<!-- /.ico-item -->
				<div class="ico-item">
					<a href="#" class="ico-item fa fa-user js__toggle_open" data-target="#user-status"></a>
					<div id="user-status" class="user-status js__toggle">
						<a href="<?php echo base_url() ?>login/logout" class="avatar"><img src="<?php echo base_url() ?>admin_template/http://placehold.it/80x80" alt=""><span class="status online"></span></a>
						<h5 class="position">Administrator</h5>
						<!-- /.name -->
						<div class="control-items">
							<a href="<?php echo base_url() ?>Login/logout">logout</a>
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
					<li class="has-sub">
						<a href="<?php echo base_url() ?>admin/data_rumah"><i class="ico fa fa-bar-chart"></i><span>Data Rumah</span></a>
					</li>
					<li class="has-sub">
						<a href="#"><i class="ico fa fa-th-large"></i><span>Blok Rumah</span></a>
						<ul class="sub-menu single">
							<li><a href="<?php echo base_url() ?>admin/rumahBlokA">A</a></li>
							<li><a href="<?php echo base_url() ?>admin/rumahBlokB">B</a></li>
							<li><a href="<?php echo base_url() ?>admin/rumahBlokC">C</a></li>
							<li><a href="<?php echo base_url() ?>admin/rumahBlokD">D</a></li>
						</ul>
						<!-- /.sub-menu single -->
					</li>
					<li class="has-sub">
						<a href="#"><i class="ico fa fa-paper-plane"></i><span>Status Rumah</span></a>
						<ul class="sub-menu single">
							<li><a href="<?php echo base_url() ?>admin/rumah_terjual">Sudah Terjual</a></li>
							<li><a href="<?php echo base_url() ?>admin/rumah_belum_terjual">Belum Terjual</a></li>
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
