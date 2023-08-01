<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from educhamp.themetrades.com/demo/admin/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:11:35 GMT -->

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

    <style>
        .pagination {
            margin-left: 50%;
            margin-top: 20px;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px) {
            .modal-content {
                width: 100%;
            }
        }
    </style>
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
                <h4 class="breadcrumb-title">Users</h4>
                <ul class="db-breadcrumb-list">
                    <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                    <li>Users</li>
                </ul>
            </div>
            <div class="row">
                <!-- Your Profile Views Chart -->
                <div class="col-lg-12 m-b30">
                    <div class="widget-box">
                        <div class="wc-title">
                            <h4>Register User</h4>
                        </div>
                        <div class="widget-inner">
                            <form class="edit-profile m-b30" action="<?php echo base_url('admin/register'); ?>" method="post">
                                <div class="">
                                    <div class="form-group row">
                                        <div class="col-sm-10  ml-auto">
                                            <h3>Personal Details</h3>
                                            <!-- flashdata for success -->
                                            <?php if (session()->getFlashdata('success')) : ?>
                                                <div class="alert alert-success">
                                                    <b><?php echo session()->getFlashdata('success') ?></b>
                                                </div>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Full Name</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" id="name" name="name" type="text" placeholder="Full Name" value="<?= set_value('name') ?>">
                                        </div>
                                        <?php if (isset($validation)) : ?>
                                            <small class="text-danger"><?= $validation->getError('name') ?></small>
                                        <?php endif; ?>
                                    </div>
                                    <div for="email" class="form-group row">
                                        <label class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="email" id="email" name="email" value="<?= set_value('email') ?>" placeholder="Email">
                                            <?php if (isset($validation)) : ?>
                                                <small class="text-danger"><?= $validation->getError('email') ?></small>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" id="password" name="password" value="<?= set_value('password') ?>" type="password" placeholder="Password">
                                        </div>
                                        <?php if (isset($validation)) : ?>
                                            <small class="text-danger"><?= $validation->getError('password') ?></small>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Re Type Password</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" id="confirm_password" name="confirm_password" value="<?= set_value('confirm_password') ?>" type="password" placeholder="Re Type Password">
                                        </div>
                                        <?php if (isset($validation)) : ?>
                                            <small class="text-danger"><?= $validation->getError('confirm_password') ?></small>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Phone No.</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" id="phone_no" name="phone_no" value="<?= set_value('phone_no') ?>" type="text" placeholder="Phone No.">
                                        </div>
                                        <?php if (isset($validation)) : ?>
                                            <small class="text-danger"><?= $validation->getError('phone_no') ?></small>
                                        <?php endif; ?>
                                    </div>

                                    <div class="seperator"></div>

                                    <div class="form-group row">
                                        <div class="col-sm-10 ml-auto">
                                            <h3>Address</h3>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Address</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" id="address" name="address" value="<?= set_value('address') ?>" type="text" placeholder="Address">
                                        </div>
                                        <?php if (isset($validation)) : ?>
                                            <small class="text-danger"><?= $validation->getError('address') ?></small>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">City</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" id="city" name="city" value="<?= set_value('city') ?>" type="text" placeholder="City">
                                        </div>
                                        <?php if (isset($validation)) : ?>
                                            <small class="text-danger"><?= $validation->getError('city') ?></small>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">State</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" id="state" name="state" value="<?= set_value('state') ?>" type="text" placeholder="State">
                                        </div>
                                        <?php if (isset($validation)) : ?>
                                            <small class="text-danger"><?= $validation->getError('state') ?></small>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Postcode</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" id="postcode" name="postcode" value="<?= set_value('postcode') ?>" type="text" placeholder="Postcode">
                                        </div>
                                        <?php if (isset($validation)) : ?>
                                            <small class="text-danger"><?= $validation->getError('postcode') ?></small>
                                        <?php endif; ?>
                                    </div>
                                    <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
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
                                </div>
                                <div class="">
                                    <div class="">
                                        <div class="row">
                                            <div class="col-sm-2">
                                            </div>
                                            <div class="col-sm-7">
                                                <button type="submit" class="btn">Register User</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Your User Register Views END-->
                <!-- Your Profile Views Chart -->
                <div class="col-lg-12 m-b30">
                    <div class="widget-box">
                        <div class="wc-title">
                            <h4>Current User</h4>
                        </div>
                        <div class="widget-inner">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped align-items-center">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center" style="min-width: 200px;">Name</th>
                                            <th class="text-center" style="min-width: 150px;">No Tel</th>
                                            <th class="text-center" style="min-width: 150px;">Email</th>
                                            <th class="text-center" style="min-width: 150px;">Address</th>
                                            <th class="text-center" style="min-width: 150px;">City</th>
                                            <th class="text-center" style="min-width: 150px;">Postcode</th>
                                            <th class="text-center" style="min-width: 150px;">State</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if ($users) : ?>
                                            <?php $i = 1 + (8 * ($currentPage - 1)); ?>
                                            <?php foreach ($users as $user) : ?>
                                                <tr>
                                                    <td class="text-center"><?= $i++; ?></td>
                                                    <td><?php echo $user['name']; ?></td>
                                                    <td><?php echo $user['phone_no']; ?></td>
                                                    <td><?php echo $user['email']; ?></td>
                                                    <td><?php echo $user['address']; ?></td>
                                                    <td><?php echo $user['city']; ?></td>
                                                    <td><?php echo $user['postcode']; ?></td>
                                                    <td><?php echo $user['state']; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                                <!-- Paginate -->
                                <div class="pagination">
                                    <?= $pager->links('users', 'pagination_bootstrap1'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Your User Register Views END-->
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
    <script src="<?= base_url('adminstyle/vendors/counter/waypoints-min.js') ?>"></script>
    <script src="<?= base_url('adminstyle/vendors/counter/counterup.min.js') ?>"></script>
    <script src="<?= base_url('adminstyle/vendors/imagesloaded/imagesloaded.js') ?>"></script>
    <script src="<?= base_url('adminstyle/vendors/masonry/masonry.js') ?>"></script>
    <script src="<?= base_url('adminstyle/vendors/masonry/filter.js') ?>"></script>
    <script src="<?= base_url('adminstyle/vendors/owl-carousel/owl.carousel.js') ?>"></script>
    <script src='<?= base_url('adminstyle/vendors/scroll/scrollbar.min.js') ?>'></script>
    <script src="<?= base_url('adminstyle/js/functions.js') ?>"></script>
    <script src="<?= base_url('adminstyle/vendors/chart/chart.min.js') ?>"></script>
    <script src="<?= base_url('adminstyle/js/admin.js') ?>"></script>
</body>

<!-- Mirrored from educhamp.themetrades.com/demo/admin/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:11:35 GMT -->

</html>