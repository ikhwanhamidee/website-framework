<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from educhamp.themetrades.com/demo/admin/add-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->

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
	<title>MRSBerhad : Music Rights Sabah Admin </title>

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('adminstyle/css/assets.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('adminstyle/vendors/calendar/fullcalendar.css') ?>">

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
					<a href="<?= base_url('admin/dashboard') ?>" class="ttr-logo">
						<img alt="" class="ttr-logo-mobile" src="<?= base_url('assets/images/logo.png') ?>" width="30" height="30">
						<img alt="" class="ttr-logo-desktop" src="<?= base_url('assets/images/logo.png') ?>" width="80" height="27" style="margin-left: 40px;">
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
								<li><a href="<?= base_url('admin/profile') ?>">My profile</a></li>
								<li><a href="<?php echo base_url('admin/logout'); ?>">Logout</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<!-- header right menu end -->
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
				<!-- <div class="ttr-sidebar-pin-button" title="Pin/Unpin Menu">
					<i class="material-icons ttr-fixed-icon">gps_fixed</i>
					<i class="material-icons ttr-not-fixed-icon">gps_not_fixed</i>
				</div> -->
				<div class="ttr-sidebar-toggle-button">
					<i class="ti-arrow-left"></i>
				</div>
			</div>
			<!-- side menu logo end -->
			<!-- sidebar menu start -->
			<nav class="ttr-sidebar-navi">
				<ul>
					<li>
						<a href="<?= base_url('admin/dashboard') ?>" class="ttr-material-button">
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
						<a href="<?= base_url('admin/members') ?>" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-layout-media-overlay-alt-2"></i></span>
							<span class="ttr-label">MRS Membership</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('admin/listofwork') ?>" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-clipboard"></i></span>
							<span class="ttr-label">List of Works</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('admin/staff') ?>" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-briefcase"></i></span>
							<span class="ttr-label">MRS Directory</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('admin/news') ?>" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-announcement"></i></span>
							<span class="ttr-label">MRS News</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('admin/gallery') ?>" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-image"></i></span>
							<span class="ttr-label">MRS Gallery</span>
						</a>
					</li>
					<li>
					<li>
						<a href="<?= base_url('admin/pages/home') ?>" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-settings"></i></span>
							<span class="ttr-label">Edit Page Content</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('admin/register') ?>" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-plus"></i></span>
							<span class="ttr-label">Users</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('admin/profile') ?>" class="ttr-material-button">
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
				<h4 class="breadcrumb-title">Edit Page</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Edit Page Content</li>
				</ul>
			</div>
			<div class="row">
				<!-- Edit Home -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Edit Page</h4>
						</div>
						<div class="widget-inner">
							<div class="edit-profile m-b30">
								<div class="row">
									<div class="seperator"></div>
									<div class="col-12 m-t20">
										<div class="ml-auto">
											<h3 class="m-form__section">New Page Info</h3>
										</div>
									</div>
									<div class="col-12">
										<table id="item-add" style="width:100%;">
											<tr class="list-item">
												<td>
													<form action="<?php echo base_url('admin/pages/update-page'); ?>" method="post" enctype="multipart/form-data">
														<div class="row">
															<input type="hidden" name="id" id="id" value="<?php echo $data['id']; ?>">
															<div class="col-md-6">
																<label class="col-form-label">Home Welcome Text</label>
																<div>
																	<input id="home_welcome_text" name="home_welcome_text" class="form-control" value="<?php echo $data['home_welcome_text']; ?>">
																</div>
															</div>
															<div class="col-md-6">
																<label class="col-form-label">Home Subtitle Bottom</label>
																<div>
																	<input id="home_subtitle_text" name="home_subtitle_text" class="form-control" value="<?php echo $data['home_subtitle_text']; ?>">
																</div>
															</div>
															<div class="col-md-6">
																<label class="col-form-label">Home Intro Text</label>
																<div>
																	<textarea id="intro_text" name="intro_text" class="form-control"><?php echo $data['intro_text']; ?> </textarea>
																</div>
															</div>
															<div class="col-md-6">
																<label class="col-form-label">Vision Text</label>
																<div>
																	<input id="vision_text" name="vision_text" class="form-control" value="<?php echo $data['vision_text']; ?>">
																</div>
															</div>
															<div class="col-md-6">
																<label class="col-form-label">Mission Text</label>
																<div>
																	<input id="mission_text" name="mission_text" class="form-control" value="<?php echo $data['mission_text']; ?>">
																</div>
															</div>
															<div class="col-md-6">
																<label class="col-form-label">Motto Text</label>
																<div>
																	<input id="motto_text" name="motto_text" class="form-control" value="<?php echo $data['motto_text']; ?>">
																</div>
															</div>
														</div>

												</td>
											</tr>
										</table>
									</div>
									<!-- flashdata for success -->
									<?php if (session()->getFlashdata('success')) : ?>
										<div class="alert alert-success">
											<b><?php echo session()->getFlashdata('success') ?></b>
										</div>
									<?php endif ?>
									<!-- flashdata for errors -->
									<?php if (session()->getFlashdata('errors')) : ?>
										<div class="alert alert-danger">
											<ul>
												<?php foreach (session()->getFlashdata('errors')  as $field => $error) : ?>
													<li><?= $error ?></li>
												<?php endforeach ?>
											</ul>
										</div>
									<?php endif ?>
									<div class="col-12 mt-3">
										<button type="submit" class="btn">Save changes</button>
									</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Edit Home END-->
			</div>
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
	<script src="<?= base_url('adminstyle/vendors/counter/waypoints-min.js') ?>a"></script>
	<script src="<?= base_url('adminstyle/vendors/counter/counterup.min.js') ?>"></script>
	<script src="<?= base_url('adminstyle/vendors/imagesloaded/imagesloaded.js') ?>"></script>
	<script src="<?= base_url('adminstyle/vendors/masonry/masonry.js') ?>"></script>
	<script src="<?= base_url('adminstyle/vendors/masonry/filter.js') ?>"></script>
	<script src="<?= base_url('adminstyle/vendors/owl-carousel/owl.carousel.js') ?>"></script>
	<script src="<?= base_url('adminstyle/vendors/scroll/scrollbar.min.js') ?>"></script>
	<script src="<?= base_url('adminstyle/js/functions.js') ?>"></script>
	<script src="<?= base_url('adminstyle/vendors/chart/chart.min.js') ?>"></script>
	<script src="<?= base_url('adminstyle/js/admin.js') ?>"></script>
	<script>
		// Pricing add
		function newMenuItem() {
			var newElem = $('tr.list-item').first().clone();
			newElem.find('input').val('');
			newElem.appendTo('table#item-add');
		}
		if ($("table#item-add").is('*')) {
			$('.add-item').on('click', function(e) {
				e.preventDefault();
				newMenuItem();
			});
			$(document).on("click", "#item-add .delete", function(e) {
				e.preventDefault();
				$(this).parent().parent().parent().parent().remove();
			});
		}
	</script>
</body>

<!-- Mirrored from educhamp.themetrades.com/demo/admin/add-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->

</html>