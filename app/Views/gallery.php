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

    <style>
        .column {
            float: left;
            width: 25%;
            padding: 5px;
        }
    </style>
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
                        <h1 class="text-white">Gallery</h1>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb row -->
            <div class="breadcrumb-row">
                <div class="container">
                    <ul class="list-inline">
                        <li><a href="<?= base_url('/') ?>">Home</a></li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumb row END -->
            <!-- contact area -->
            <div class="content-block">

                <!-- Objective ==== -->
                <div class="section-area section-sp1">
                    <div class="container">
                        <div class="row magnific-image">
                        <?php foreach ($gallerys as $gallery) : ?>
                            <div class="column">
                                <a href="/assets/images/gallery/<?php echo $gallery['pic_name']; ?>" class="magnific-anchor"><img src="/assets/images/gallery/<?php echo $gallery['pic_name']; ?>" style="width:100%"></a>
                            </div>
                            <?php endforeach; ?>
                        </div>
                         <!-- Paginate -->
                     <div class="pagination">
                                    <?= $pager->links('gallerys', 'pagination_bootstrap1'); ?>
                                </div>
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
            <!-- <script src='assets/vendors/switcher/switcher.js'></script> -->
</body>

</html>