<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from educhamp.themetrades.com/demo/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:08:15 GMT -->

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />

	<!-- DESCRIPTION -->
	<meta name="description" content="MRSBerhad : Music Rights Sabah Admin" />

	<!-- OG -->
	<meta property="og:title" content="MRSBerhad : Music Rights Sabah Admin" />
	<meta property="og:description" content="MRSBerhad : Music Rights Sabah Admin" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="../error-404.html" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/images/logo.png') ?>" />

	<!-- PAGE TITLE HERE ============================================= -->
	<title>MRSBerhad : Music Rights Sabah Admin</title>

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="adminstyle/js/html5shiv.min.js"></script>
	<script src="adminstyle/js/respond.min.js"></script>
	<![endif]-->

	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('adminstyle/css/assets.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('adminstyle/vendors/calendar/fullcalendar.css') ?>">
	<!-- <link rel="stylesheet" href="<?= base_url('adminstyle/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('adminstyle/themify-icons/themify-icons.css') ?>"> -->

	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('adminstyle/css/typography.css') ?>">

	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('adminstyle/css/shortcodes/shortcodes.css') ?>">

	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('adminstyle/css/style.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('adminstyle/css/dashboard.css') ?>">
	<link class="skin" rel="stylesheet" type="text/css" href="<?= base_url('adminstyle/css/color/color-1.css') ?>">

</head>

<body class="ttr-opened-sidebar ttr-pinned-sidebar">

	<!-- header start -->
	<header class="ttr-header">
		<div class="ttr-header-wrapper">
			<!--sidebar menu toggler start -->
			<div class="ttr-toggle-sidebar ttr-material-button">
				<i class="ti-close ttr-open-icon"></i>
				<i class="ti-menu ttr-close-icon"></i>
			</div>
			<!--sidebar menu toggler end -->
			<!--logo start -->
			<div class="ttr-logo-box">
				<div>
					<a href="<?= base_url('user/dashboard') ?>" class="ttr-logo">
						<img class="ttr-logo-mobile" alt="" src="<?= base_url('assets/images/logo.png') ?>" width="30" height="30">
						<img class="ttr-logo-desktop" alt="" src="<?= base_url('assets/images/logo.png') ?>" width="80" height="27" style="margin-left: 40px;">
					</a>
				</div>
			</div>
			<!--logo end -->
			<div class="ttr-header-menu" style="margin-left: 20px;">
				<!-- header left menu start -->
				<ul class="ttr-header-navigation">
					<li>
						<p class="text-white m-3">Welcome, <?= session('name'); ?></p>
					</li>
				</ul>
				<!-- header left menu end -->
			</div>
			<div class="ttr-header-right ttr-with-seperator">
				<!-- header right menu start -->
				<ul class="ttr-header-navigation">
					<li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle"><i class="ti-menu"></i></a>
						<div class="ttr-header-submenu">
							<ul>
								<li><a href="<?= base_url('user/profile') ?>">My profile</a></li>
								<li><a href="<?php echo base_url('admin/logout'); ?>">Logout</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<!-- header right menu end -->
			</div>
		</div>
		<!--header search panel start -->
		<div class="ttr-search-bar">
			<form class="ttr-search-form">
				<div class="ttr-search-input-wrapper">
					<input type="text" name="qq" placeholder="search something..." class="ttr-search-input">
					<button type="submit" name="search" class="ttr-search-submit"><i class="ti-arrow-right"></i></button>
				</div>
				<span class="ttr-search-close ttr-search-toggle">
					<i class="ti-close"></i>
				</span>
			</form>
		</div>
		<!--header search panel end -->
		</div>
	</header>
	<!-- header end -->
	<!-- Left sidebar menu start -->
	<div class="ttr-sidebar">
		<div class="ttr-sidebar-wrapper content-scroll">
			<!-- side menu logo start -->
			<div class="ttr-sidebar-logo">
				<a href="#"><img alt="" src="<?= base_url('assets/images/logo.png') ?>" width="60" height="27"></a>
				<div class="ttr-sidebar-toggle-button">
					<i class="ti-arrow-left"></i>
				</div>
			</div>
			<!-- side menu logo end -->
			<!-- sidebar menu start -->
			<nav class="ttr-sidebar-navi">
				<ul>
					<li>
						<a href="<?= base_url('user/dashboard') ?>" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-home"></i></span>
							<span class="ttr-label">Dashboard</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('/') ?>" class="ttr-material-button" target="blank">
							<span class="ttr-icon"><i class="ti-world"></i></span>
							<span class="ttr-label">MRS Website</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('user/members') ?>" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-layout-media-overlay-alt-2"></i></span>
							<span class="ttr-label">MRS Membership</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('user/listofwork') ?>" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-clipboard"></i></span>
							<span class="ttr-label">List of Works</span>
						</a>
					</li>
					<!-- <li>
						<a href="#" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-settings"></i></span>
							<span class="ttr-label">Edit Page Content</span>
							<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
						</a>
						<ul>
							<li>
								<a href="<?= base_url('admin/pages/home') ?>" class="ttr-material-button"><span class="ttr-label">English</span></a>
							</li>
							<li>
								<a href="mailbox-compose.html" class="ttr-material-button"><span class="ttr-label">Malay</span></a>
							</li>
						</ul>
					</li> -->
					<li>
						<a href="<?= base_url('user/staff') ?>" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-briefcase"></i></span>
							<span class="ttr-label">MRS Directory</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('user/news') ?>" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-announcement"></i></span>
							<span class="ttr-label">MRS News</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('user/gallery') ?>" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-image"></i></span>
							<span class="ttr-label">MRS Gallery</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('user/pages/home') ?>" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-settings"></i></span>
							<span class="ttr-label">Edit Page Content</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('user/profile') ?>" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-user"></i></span>
							<span class="ttr-label">My Profile</span>
						</a>
					</li>
					<li class="ttr-seperate"></li>
				</ul>
				<!-- sidebar menu end -->
			</nav>
			<!-- sidebar menu end -->
		</div>
	</div>
	<!-- Left sidebar menu end -->

	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Dashboard</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Dashboard</li>
				</ul>
			</div>
			<!-- Card -->
			<div class="row">
				<div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-12">
					<div class="widget-card widget-bg1">
						<div class="wc-item">
							<h4 class="wc-title">
								MRS Membership
							</h4>
							<span class="wc-des">
								Current
							</span>
							<span class="wc-stats">
								<span class="counter"><?= $membercounts ?></span>
							</span>
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
								<?= $membercounts ?>
								</span>
							</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-12">
					<div class="widget-card widget-bg2">
						<div class="wc-item">
							<h4 class="wc-title">
								Total Works
							</h4>
							<span class="wc-des">
								Current
							</span>
							<span class="wc-stats counter">
							<?= $workcounts ?>
							</span>
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 88%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
								<?= $workcounts ?>
								</span>
							</span>
						</div>
					</div>
				</div>
			</div>
			<!-- Card END -->
		</div>
	</main>
	<div class="ttr-overlay"></div>

	<!-- External JavaScripts -->
	<script src="<?= base_url('adminstyle/js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('adminstyle/vendors/bootstrap/js/popper.min.js') ?>"></script>
	<script src="<?= base_url('adminstyle/vendors/bootstrap/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('adminstyle/vendors/bootstrap-select/bootstrap-select.min.js') ?>"></script>
	<script src="<?= base_url('adminstyle/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js') ?>"></script>
	<script src="<?= base_url('adminstyle/vendors/magnific-popup/magnific-popup.js') ?>"></script>
	<script src="<?= base_url('adminstyle/vendors/counter/waypoints-min.js') ?>"></script>
	<script src="<?= base_url('adminstyle/vendors/counter/counterup.min.js') ?>"></script>
	<script src="<?= base_url('adminstyle/vendors/imagesloaded/imagesloaded.js') ?>"></script>
	<script src="<?= base_url('adminstyle/vendors/masonry/masonry.js') ?>"></script>
	<script src="<?= base_url('adminstyle/vendors/masonry/filter.js') ?>"></script>
	<script src="<?= base_url('adminstyle/vendors/owl-carousel/owl.carousel.js') ?>"></script>
	<script src="<?= base_url('adminstyle/vendors/scroll/scrollbar.min.js') ?>"></script>
	<script src="<?= base_url('adminstyle/js/functions.js') ?>"></script>
	<script src="<?= base_url('adminstyle/vendors/chart/chart.min.js') ?>"></script>
	<script src="<?= base_url('adminstyle/js/admin.js') ?>"></script>
	<script src="<?= base_url('adminstyle/vendors/calendar/moment.min.js') ?>"></script>
	<script src="<?= base_url('adminstyle/vendors/calendar/fullcalendar.js') ?>"></script>
	<!-- <script src='adminstyle/vendors/switcher/switcher.js'></script> -->
	<script>
		$(document).ready(function() {

			$('#calendar').fullCalendar({
				header: {
					left: 'prev,next today',
					center: 'title',
					right: 'month,agendaWeek,agendaDay,listWeek'
				},
				defaultDate: '2019-03-12',
				navLinks: true, // can click day/week names to navigate views

				weekNumbers: true,
				weekNumbersWithinDays: true,
				weekNumberCalculation: 'ISO',

				editable: true,
				eventLimit: true, // allow "more" link when too many events
				events: [{
						title: 'All Day Event',
						start: '2019-03-01'
					},
					{
						title: 'Long Event',
						start: '2019-03-07',
						end: '2019-03-10'
					},
					{
						id: 999,
						title: 'Repeating Event',
						start: '2019-03-09T16:00:00'
					},
					{
						id: 999,
						title: 'Repeating Event',
						start: '2019-03-16T16:00:00'
					},
					{
						title: 'Conference',
						start: '2019-03-11',
						end: '2019-03-13'
					},
					{
						title: 'Meeting',
						start: '2019-03-12T10:30:00',
						end: '2019-03-12T12:30:00'
					},
					{
						title: 'Lunch',
						start: '2019-03-12T12:00:00'
					},
					{
						title: 'Meeting',
						start: '2019-03-12T14:30:00'
					},
					{
						title: 'Happy Hour',
						start: '2019-03-12T17:30:00'
					},
					{
						title: 'Dinner',
						start: '2019-03-12T20:00:00'
					},
					{
						title: 'Birthday Party',
						start: '2019-03-13T07:00:00'
					},
					{
						title: 'Click for Google',
						url: 'http://google.com/',
						start: '2019-03-28'
					}
				]
			});

		});
	</script>
</body>

<!-- Mirrored from educhamp.themetrades.com/demo/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->

</html>