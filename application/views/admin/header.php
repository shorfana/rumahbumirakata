<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Home - Ninja Admin Template</title>

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

	<!-- Color Picker -->
	<link rel="stylesheet" href="assets/color-switcher/color-switcher.min.css">
</head>

<body>
<header class="fixed-header">
	<div class="header-top">
		<div class="container">
			<div class="pull-left">
				<a href="index.html" class="logo">NinjaTeam</a>
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
				<div class="ico-item fa fa-arrows-alt js__full_screen"></div>
				<!-- /.ico-item fa fa-fa-arrows-alt -->
				<div class="ico-item toggle-hover js__drop_down ">
					<span class="fa fa-th js__drop_down_button"></span>
					<div class="toggle-content">
						<ul>
							<li><a href="#"><i class="fa fa-github"></i><span class="txt">Github</span></a></li>
							<li><a href="#"><i class="fa fa-bitbucket"></i><span class="txt">Bitbucket</span></a></li>
							<li><a href="#"><i class="fa fa-slack"></i><span class="txt">Slack</span></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i><span class="txt">Dribbble</span></a></li>
							<li><a href="#"><i class="fa fa-amazon"></i><span class="txt">Amazon</span></a></li>
							<li><a href="#"><i class="fa fa-dropbox"></i><span class="txt">Dropbox</span></a></li>
						</ul>
						<a href="#" class="read-more">More</a>
					</div>
					<!-- /.toggle-content -->
				</div>
				<!-- /.ico-item -->
				<div class="ico-item">
					<a href="#" class="ico-item fa fa-envelope notice-alarm js__toggle_open" data-target="#message-popup"></a>
					<div id="message-popup" class="notice-popup js__toggle" data-space="55">
						<h2 class="popup-title">Recent Messages<a href="#" class="pull-right text-danger">New message</a></h2>
						<!-- /.popup-title -->
						<div class="content">
							<ul class="notice-list">
								<li>
									<a href="#">
										<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
										<span class="name">John Doe</span>
										<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
										<span class="time">10 min</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
										<span class="name">Harry Halen</span>
										<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
										<span class="time">15 min</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
										<span class="name">Thomas Taylor</span>
										<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
										<span class="time">30 min</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
										<span class="name">Jennifer</span>
										<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
										<span class="time">45 min</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
										<span class="name">Helen Candy</span>
										<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
										<span class="time">45 min</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
										<span class="name">Anna Cavan</span>
										<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
										<span class="time">1 hour ago</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="avatar bg-success"><i class="fa fa-user"></i></span>
										<span class="name">Jenny Betty</span>
										<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
										<span class="time">1 day ago</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
										<span class="name">Denise Peterson</span>
										<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
										<span class="time">1 year ago</span>
									</a>
								</li>
							</ul>
							<!-- /.notice-list -->
							<a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
						</div>
						<!-- /.content -->
					</div>
					<!-- /#message-popup -->
				</div>
				<!-- /.ico-item -->
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
								<li>
									<a href="#">
										<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
										<span class="name">Anna William</span>
										<span class="desc">Like your post: “Facebook Messenger”</span>
										<span class="time">15 min</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="avatar bg-warning"><i class="fa fa-warning"></i></span>
										<span class="name">Update Status</span>
										<span class="desc">Failed to get available update data. To ensure the please contact us.</span>
										<span class="time">30 min</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
										<span class="name">Jennifer</span>
										<span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
										<span class="time">45 min</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
										<span class="name">Michael Zenaty</span>
										<span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
										<span class="time">50 min</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
										<span class="name">Simon</span>
										<span class="desc">Like your post: “Facebook Messenger”</span>
										<span class="time">1 hour</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="avatar bg-violet"><i class="fa fa-flag"></i></span>
										<span class="name">Account Contact Change</span>
										<span class="desc">A contact detail associated with your account has been changed.</span>
										<span class="time">2 hours</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
										<span class="name">Helen 987</span>
										<span class="desc">Like your post: “Facebook Messenger”</span>
										<span class="time">Yesterday</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
										<span class="name">Denise Jenny</span>
										<span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
										<span class="time">Oct, 28</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
										<span class="name">Thomas William</span>
										<span class="desc">Like your post: “Facebook Messenger”</span>
										<span class="time">Oct, 27</span>
									</a>
								</li>
							</ul>
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
						<a href="#" class="avatar"><img src="http://placehold.it/80x80" alt=""><span class="status online"></span></a>
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