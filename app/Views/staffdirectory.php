<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />

	<!-- DESCRIPTION -->
	<meta name="description" content="MRSBerhad : Music Rights Sabah" />

	<!-- OG -->
	<meta property="og:title" content="MRSBerhad : Music Rights Sabah" />
	<meta property="og:description" content="MRSBerhad : Music Rights Sabah" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="<?= base_url('assets/images/logo.png') ?>" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/images/logo.png') ?>" />
	<!-- PAGE TITLE HERE ============================================= -->
	<title>MRSBerhad : Music Right Sabah </title>

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/assets.css">

	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/typography.css">

	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">

	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">
	<!-- BOOTSTRAP ICONS ============================================= -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body id="bg">
	<div class="page-wraper">
		<div id="loading-icon-bx"></div>
		<?php include 'layout/header.php'; ?>
		<!-- Content -->
		<div class="page-content bg-white">
			<!-- inner page banner -->
			<div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg);">
				<div class="container">
					<div class="page-banner-entry">
						<h1 class="text-white">Directory MRSBerhad</h1>
					</div>
				</div>
			</div>
			<!-- Breadcrumb row -->
			<div class="breadcrumb-row">
				<div class="container">
					<ul class="list-inline">
						<li><a href="<?= base_url('/') ?>">Home</a></li>
						<li>Directory MRSBerhad</li>
					</ul>
				</div>
			</div>
			<!-- Breadcrumb row END -->
			<!-- inner page banner END -->
			<div class="section-area section-sp1">
				<div class="container">
					<?php foreach ($staffs as $staff) : ?>
						<div class="row magnific-image">

							<div class="blog-post blog-md clearfix">
								<div class="ttr-post-media">
									<a href="/assets/images/staff/<?php echo $staff['staff_pic']; ?>" class="magnific-anchor"><img src="/assets/images/staff/<?php echo $staff['staff_pic']; ?>" style="width:100%"></a>
								</div>
								<div class="ttr-post-info">
									<h5 class="post-title"><?php echo $staff['staff_name']; ?></h5>
									<p><?php echo $staff['staff_position']; ?></p>
									<ul class="media-post">
										<li><i class="fa fa-phone"></i><?php echo $staff['staff_contact']; ?></li>
									</ul>
								</div>
							</div>

						</div>
					<?php endforeach; ?>
				</div>
			</div>
			<!-- Content END-->
			<?php include 'layout/footer.php'; ?>
			<button class="back-to-top fa fa-chevron-up" style="color:black"></button>
		</div>
		<!-- External JavaScripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
		<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
		<script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
		<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendors/counter/waypoints-min.js"></script>
		<script src="assets/vendors/counter/counterup.min.js"></script>
		<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
		<script src="assets/vendors/masonry/masonry.js"></script>
		<script src="assets/vendors/masonry/filter.js"></script>
		<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
		<script src="assets/js/functions.js"></script>
		<script src="assets/js/contact.js"></script>
</body>

</html>