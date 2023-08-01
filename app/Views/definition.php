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
						<h1 class="text-white">Definition of Sabah Ethnic Music Works</h1>
					</div>
				</div>
			</div>
			<!-- Breadcrumb row -->
			<div class="breadcrumb-row">
				<div class="container">
					<ul class="list-inline">
						<li><a href="<?= base_url('/') ?>">Home</a></li>
						<li>Definition of Sabah Ethnic Music Works</li>
					</ul>
				</div>
			</div>
			<!-- Breadcrumb row END -->
			<!-- inner page banner END -->
			<div class="section-area section-sp1">
				<div class="container">


					<h3 style="text-align:center;"><br>VISION</h3>
					<p style="text-align:center;"><?php echo $data['vision_text']; ?></p>

					<h3 style="text-align:center;">MISSION</h3>
					<p style="text-align:center;"><?php echo $data['mission_text']; ?></p>

					<h3 style="text-align:center; ">MOTTO</h3>
					<p style="text-align:center;"><?php echo $data['motto_text']; ?></p>

					<h3 class="post-title"><br>Definition of Sabah Ethnic Music Works</h3>
					<p>1. Full lyrics in any language Sabah & Labuan Ethnicity. <br>
						2. The lyrics of half or several stanzas, several stanzas, or several words of
						Sabah and Labuan ethnic languages ​​are mixed with other languages.<br>
						3. Pronunciation and rhyming of Sabah & Labuan ethnic dialects.<br>
						4. Traditional dance music of Sabah Labuan ethnicity.<br>
						5. Instrumental music for items 1 to 4 above.</p>




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