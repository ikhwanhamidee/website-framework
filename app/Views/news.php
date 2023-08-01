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
                        <h1 class="text-white">MRS News</h1>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb row -->
            <div class="breadcrumb-row">
                <div class="container">
                    <ul class="list-inline">
                        <li><a href="<?= base_url('/') ?>">Home</a></li>
                        <li>MRS News</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumb row END -->
            <!-- contact area -->
            <div class="content-block">
                <div class="section-area section-sp1">
                    <div class="container">
                        <div class="row">
                            <!-- Left part start -->
                            <div class="col-lg-8">
                                <?php foreach ($news as $new) : ?>
                                    <div class="blog-post blog-md clearfix">
                                        <div class="ttr-post-media">
                                            <a><img src="/assets/images/news/<?php echo $new['news_pic']; ?>"></a>
                                        </div>
                                        <div class="ttr-post-info">
                                            <ul class="media-post">
                                                <li><a><i class="fa fa-calendar"></i><?php echo $new['news_date']; ?></a></li>
                                                <li><a><i class="fa fa-user"></i><?php echo $new['news_author']; ?></a></li>
                                            </ul>
                                            <h5 class="post-title"><a href="<?php echo base_url('news-details/' . $new['id']); ?>"><?php echo $new['news_title']; ?></a></h5>
                                            <div class="post-extra">
                                                <a href="<?php echo base_url('news-details/' . $new['id']); ?>" class="btn-link">READ MORE</a>

                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                 <!-- Paginate -->
                                 <div class="pagination">
                                    <?= $pager->links('news', 'pagination_bootstrap1'); ?>
                                </div>
                            </div>
                            <!-- Left part END -->
                            <!-- Side bar start -->
                            <div class="col-lg-4 sticky-top">
                                <aside class="side-bar sticky-top">
                                    <div class="widget">
                                        <h6 class="widget-title">Search</h6>
                                        <div class="search-bx style-1">
                                            <form role="search">
                                                <div class="input-group">
                                                <input type="text" name="search" placeholder="Search" class="ttr-search-input" value='<?= $search ?>'>
                            
                                                    <span class="input-group-btn">
                                                        <button type="submit" class="fa fa-search text-primary"></button>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="widget recent-posts-entry">
                                        <h6 class="widget-title">Recent Posts</h6>
                                        <div class="widget-post-bx">
                                            <?php foreach ($news as $new) : ?>
                                                <div class="widget-post clearfix">
                                                    <div class="ttr-post-media"> <img src="/assets/images/news/<?php echo $new['news_pic']; ?>" width="200" height="143" alt=""> </div>
                                                    <div class="ttr-post-info">
                                                        <div class="ttr-post-header">
                                                            <h6 class="post-title"><a href="<?php echo base_url('news-details/' . $new['id']); ?>"><?php echo $new['news_title']; ?></a></h6>
                                                        </div>
                                                        <ul class="media-post">
                                                            <li><a><i class="fa fa-calendar"></i><?php echo $new['news_date']; ?></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>

                                        </div>

                                    </div>
                                </aside>
                            </div>
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

</body>

</html>