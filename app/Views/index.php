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

    <!-- FAVICONS ICON (LOGO DEKAT TITLE)============================================= -->
    <link rel="icon" href="<?= base_url('assets/images/logo.png') ?>" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/images/logo.png') ?>" />

    <!-- PAGE TITLE HERE ============================================= -->
    <title>MRSBerhad : Music Rights Sabah</title>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/assets.css') ?>">

    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/typography.css') ?>">

    <!-- SHORTCODES ============================================= (color dekat tengah)-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/shortcodes/shortcodes.css') ?>">

    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
    <link class="skin" rel="stylesheet" type="text/css" href="<?= base_url('assets/css/color/color-1.css') ?>">

    <!-- REVOLUTION SLIDER CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendors/revolution/css/layers.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendors/revolution/css/settings.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendors/revolution/css/navigation.css') ?>">
    <!-- REVOLUTION SLIDER END -->

    <!-- BOOTSTRAP ICONS ============================================= -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">


</head>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-icon-bx"></div>
        <!-- Header Top ==== -->
        <header class="header rs-nav header-transparent">
            <div class="top-bar">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="topbar-left">
                            <ul>
                                <li><a href="<?= base_url('/contactInfo') ?>"><i class="fa fa-question-circle"></i>Ask a Question</a></li>
                                <li><i class="fa fa-envelope-o"></i>sabah.mrsberhad@gmail.com</a></li>
                            </ul>
                        </div>
                        <div class="topbar-right">
                            <ul>
                                <li>
                                    <select class="header-lang-bx">
                                        <option data-icon="flag flag-uk">English</option>
                                        <!-- <option data-icon="flag flag-us">Malay</option> -->
                                    </select>
                                </li>
                                <!-- <li><a href="#">Login</a></li>
							<li><a href="#">Register</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sticky-header navbar-expand-lg">
                <div class="menu-bar clearfix">
                    <div class="container clearfix">
                        <!-- Header Logo ==== -->
                        <div class="menu-logo">
                            <a href="<?= base_url('/') ?>"><img src="<?= base_url('assets/images/logo.png') ?>" alt=""></a>
                        </div>
                        <!-- Mobile Nav Button ==== -->
                        <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <!-- Author Nav ==== -->
                        <div class="secondary-menu">
                            <div class="secondary-inner">
                                <ul>
                                    <li><a href="https://www.facebook.com/mrsberhad" target="blank" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/mrssabah3?s=11&t=JMPDIDtEQOn1HeL1dWNkzQ" target="blank" class="btn-link"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://instagram.com/musicrightssabah?igshid=MzRlODBiNWFlZA==" target="blank" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="https://www.tiktok.com/@mrssabah3?_t=8dbgUhbOmu2&_r=1" target="blank" class="btn-link"><i class="bi bi-tiktok"></i></a></li>



                                </ul>
                            </div>
                        </div>
                        <!-- Search Box ==== -->

                        <!-- Navigation Menu ==== -->
                        <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
                            <div class="menu-logo">
                                <a href="<?= base_url('/') ?>"><img src="<?= base_url('assets/images/logo.png') ?>"></a>
                            </div>
                            <ul class=" nav navbar-nav">
                                <!-- <li><a href="index.php">News </a> -->
                                </li>
                                <li><a href="javascript:;">About Us <i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="<?= base_url('/objective') ?>">Objectives</a></li>
                                        <li><a href="<?= base_url('/definition') ?>">Definition of Sabah Ethnic Music Works</a></li>
                                        <li><a href="https://www.myipo.gov.my/en/copyright-basic/" target="_blank">Copyright Protected</a></li>
                                        <li><a href="<?= base_url('/gallery') ?>">Gallery</a></li>
                                    <li><a href="<?= base_url('/news') ?>">News</a></li>
                                    </ul>
                                </li>
                                <li class="add-mega-menu"><a href="javascript:;">Membership <i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu add-menu">
                                        <li class="add-menu-left">
                                            <ul>
                                                <li><a href="<?= base_url('/whyRegister') ?>">Why Should you register as an MRS Member? </a></li>
                                                <li><a href="<?= base_url('/eligibleMember') ?>">Who is eligible to become a member?</a></li>
                                                <li><a href="<?= base_url('/MRSmembers') ?>">MRS Membership</a></li>
                                                <li><a href="<?= base_url('/listWorks') ?>">List of Work</a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="javascript:;">Licence <i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="<?= base_url('/licensing') ?>">Licensing</a></li>
                                        <li><a href="<?= base_url('/licensingPurpose') ?>">Purpose of Licensing</a></li>
                                        <li><a href="https://www.myipo.gov.my/ms/akta-hak-cipta-1987/" target="_blank">LAWS OF MALAYSIA COPYRIGHT ACT 1987</a></li>
                                        <li><a href="<?= base_url('/copyrightInfringement') ?>">Copyright Infringement</a></li>
                                        <li><a href="<?= base_url('assets/documents/TARIF.pdf') ?>" target="blank">Tariff</a></li>
                                    </ul>
                                </li>

                                <li><a href="javascript:;">Form <i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Licence Application<i class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="<?= base_url('/outletPremises') ?>">Outlet & Premises</a></li>
                                                <li><a href="<?= base_url('/singleEvent') ?>">Single Event</a></li>
                                                <li><a href="#">New Media</a></li>
                                            </ul>
                                        <li><a href="<?= base_url('/membershipsApplication') ?>">Membership Application</a></li>
                                </li>

                            </ul>
                            </li>
                            <li><a href="javascript:;">Contact Us <i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="<?= base_url('/contactInfo') ?>">Contact Information</a></li>
                                    <li><a href="<?= base_url('/staffDirectory') ?>">Directory MRSBerhad</a></li>
                                </ul>
                            </li>
                            </ul>
                            <div class="nav-social-link">
                                <a href="https://www.facebook.com/mrsberhad"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/mrssabah3?s=11&t=JMPDIDtEQOn1HeL1dWNkzQ"><i class="fa fa-twitter"></i></a>
                                <a href="https://instagram.com/musicrightssabah?igshid=MzRlODBiNWFlZA=="><i class="fa fa-linkedin"></i></a>
                                <a href="https://www.tiktok.com/@mrssabah3?_t=8dbgUhbOmu2&_r=1"><i class="bi bi-tiktok"></i></a>
                            </div>
                        </div>
                        <!-- Navigation Menu END ==== -->
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Top END ==== -->
        <!-- Content -->
        <div class="page-content bg-white">
            <!-- Main Slider -->
            <div class="rev-slider">
                <div id="rev_slider_486_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery36" data-source="gallery" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
                    <!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
                    <div id="rev_slider_486_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
                        <ul> <!-- SLIDE  -->
                            <li data-index="rs-100" data-transition="parallaxvertical" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="error-404.html" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="A STUDY ON HAPPINESS" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="Science says that Women are generally happier">
                                <!-- MAIN IMAGE -->
                                <img src="assets/images/slider/slide1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina />

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-shape tp-shapewrapper " id="slide-100-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"from":"opacity:0;","speed":1,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1,"to":"opacity:0;","ease":"Power4.easeOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;background-color:rgba(2, 0, 11, 0.80);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption Newspaper-Title   tp-resizeme" id="slide-100-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['250','250','250','240']" data-fontsize="['50','50','50','30']" data-lineheight="['55','55','55','35']" data-width="full" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]" style="z-index: 6; font-family:rubik; font-weight:700; text-align:center; white-space: normal;">
                                    <?php echo $data['home_welcome_text']; ?>
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption Newspaper-Subtitle   tp-resizeme" id="slide-100-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['210','210','210','210']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap; color:#fff; font-family:rubik; font-size:18px; font-weight:400;">
                                    "<?php echo $data['motto_text']; ?>"
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption Newspaper-Subtitle   tp-resizeme" id="slide-100-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['320','320','320','290']" data-width="['800','800','700','420']" data-height="['100','100','100','120']" data-whitespace="unset" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; text-transform:capitalize; white-space: unset; color:#fff; font-family:rubik; font-size:18px; line-height:28px; font-weight:400;">
                                    <?php echo $data['home_subtitle_text']; ?>
                                </div>
                                <!-- LAYER NR. 4 -->


                            </li>
                            <li data-index="rs-200" data-transition="parallaxvertical" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="assets/images/slider/slide1.jpg" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="A STUDY ON HAPPINESS" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="Science says that Women are generally happier">
                                <!-- MAIN IMAGE -->
                                <img src="assets/images/slider/slide2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina />

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-shape tp-shapewrapper " id="slide-200-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"from":"opacity:0;","speed":1,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:1;","ease":"Power4.easeOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;background-color:rgba(2, 0, 11, 0.80);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption Newspaper-Title   tp-resizeme" id="slide-200-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['250','250','250','240']" data-fontsize="['50','50','50','30']" data-lineheight="['55','55','55','35']" data-width="full" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]" style="z-index: 6; font-family:rubik; font-weight:700; text-align:center; white-space: normal;text-transform:uppercase;">
                                    <?php echo $data['home_welcome_text']; ?>
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption Newspaper-Subtitle   tp-resizeme" id="slide-200-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['210','210','210','210']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap;text-transform:uppercase; color:#fff; font-family:rubik; font-size:18px; font-weight:400;">
                                    "<?php echo $data['motto_text']; ?>"
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption Newspaper-Subtitle   tp-resizeme" id="slide-200-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['320','320','320','290']" data-width="['800','800','700','420']" data-height="['100','100','100','120']" data-whitespace="unset" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; text-transform:capitalize; white-space: unset; color:#fff; font-family:rubik; font-size:18px; line-height:28px; font-weight:400;">
                                    <?php echo $data['home_subtitle_text']; ?>
                                </div>
                                <!-- LAYER NR. 4 -->


                            </li>
                            <!-- SLIDE  -->
                        </ul>
                    </div><!-- END REVOLUTION SLIDER -->
                </div>
            </div>
            <!-- Main Slider -->
            <div class="content-block">

                <!-- Popular Courses END -->
                <div class="section-area section-sp2 bg-fix ovbl-dark join-bx text-center" style="background-image:url(assets/images/background/bg1.jpg);">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="join-content-bx text-white">
                                    <h2>Introduction of <br> MRS</h2>

                                    <p><?php echo $data['intro_text']; ?></p>
                                    <!-- <a href="#" class="btn button-md">Join Now</a> -->
                                    <div class="mw800 m-auto">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="cours-search-bx m-b30">
                                                    <div class="icon-box">
                                                        <h3><i class="ti-user"></i><span class="counter"><?= $membercounts ?></span></h3>
                                                    </div>
                                                    <span class="cours-search-text">Registered Members</span>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-4 col-sm-6">
								<div class="cours-search-bx m-b30">
									<div class="icon-box">
										<h3><i class="ti-book"></i><span class="counter">2662 </span></h3>
									</div>
									<span class="cours-search-text">Registered Works</span>
								</div>
							</div> -->
                                            <div class="col-md-6">
                                                <div class="cours-search-bx m-b30">
                                                    <div class="icon-box">
                                                        <h3><i class="ti-layout-list-post"></i><span class="counter"><?= $workcounts ?></span></h3>
                                                    </div>
                                                    <span class="cours-search-text">Registered Works</span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6>SHARE </h6>
                                    <ul class="list-inline contact-social-bx">
                                        <li><a href="https://www.facebook.com/mrsberhad" target="blank" class="btn outline radius-xl"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/mrssabah3?s=11&t=JMPDIDtEQOn1HeL1dWNkzQ" target="blank" class="btn outline radius-xl"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://instagram.com/musicrightssabah?igshid=MzRlODBiNWFlZA==" target="blank" class="btn outline radius-xl"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="https://www.tiktok.com/@mrssabah3?_t=8dbgUhbOmu2&_r=1" target="blank" class="btn outline radius-xl"><i class="bi bi-tiktok"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact area END -->
        </div>
        <!-- Content END-->
        <?php include 'layout/footer.php'; ?>
        <button class="back-to-top fa fa-chevron-up" style="color:black"></button>
    </div>

    <!-- External JavaScripts -->
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/bootstrap/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/bootstrap-select/bootstrap-select.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/magnific-popup/magnific-popup.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/counter/waypoints-min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/counter/counterup.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/imagesloaded/imagesloaded.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/masonry/masonry.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/masonry/filter.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/owl-carousel/owl.carousel.js') ?>"></script>
    <script src="<?= base_url('assets/js/functions.js') ?>"></script>
    <script src="<?= base_url('assets/js/contact.js') ?>"></script>
    <!-- Revolution JavaScripts Files -->
    <script src="<?= base_url('assets/vendors/revolution/js/jquery.themepunch.tools.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/revolution/js/jquery.themepunch.revolution.min.js') ?>"></script>
    <!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="<?= base_url('assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/revolution/js/extensions/revolution.extension.carousel.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/revolution/js/extensions/revolution.extension.migration.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/revolution/js/extensions/revolution.extension.parallax.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/revolution/js/extensions/revolution.extension.video.min.js') ?>"></script>
    <script>
        jQuery(document).ready(function() {
            var ttrevapi;
            var tpj = jQuery;
            if (tpj("#rev_slider_486_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_486_1");
            } else {
                ttrevapi = tpj("#rev_slider_486_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "assets/vendors/revolution/js/",
                    sliderLayout: "fullwidth",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "on",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "on",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "uranus",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            }
                        },

                    },
                    viewPort: {
                        enable: true,
                        outof: "pause",
                        visible_area: "80%",
                        presize: false
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [768, 600, 600, 600],
                    lazyType: "none",
                    parallax: {
                        type: "scroll",
                        origo: "enterpoint",
                        speed: 400,
                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 46, 47, 48, 49, 50, 55],
                        type: "scroll",
                    },
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        });
    </script>
</body>

</html>