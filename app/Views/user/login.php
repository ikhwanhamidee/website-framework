<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="<?= base_url('assets/images/logo.png') ?>">
  <title>
    MRS Admin
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="<?= base_url('adminstyle/login/css/nucleo-icons.css') ?>" rel="stylesheet" />
  <link href="<?= base_url('adminstyle/login/css/nucleo-svg.css') ?>" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="<?= base_url('https://kit.fontawesome.com/42d5adcbca.js') ?>" crossorigin="anonymous"></script>
  <link href="<?= base_url('adminstyle/login/css/nucleo-svg.css') ?>" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="<?= base_url('adminstyle/login/css/argon-dashboard.css?v=2.0.4') ?>" rel="stylesheet" />
</head>

<body class="">
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Log In</h4>
                  <p class="mb-0">Enter your email and password to log in</p>
                  <?php if (session()->getFlashdata('error')) : ?>
                    <div class="alert alert-danger">
                      <?= session()->getFlashdata('error') ?>
                    </div>
                  <?php endif; ?>
                </div>
                <div class="card-body">
                  <form role="form" action="<?php echo base_url('admin/login'); ?>" method="post">
                    <div class="mb-3">
                      <label for="email" class="col-form-label text-md-end text-start">Email Address</label>
                      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
                    </div>
                    <div class="mb-3">
                      <label for="password" class="col-form-label text-md-end text-start">Password</label>
                      <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0" value="Login">Log in</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('assets/images/slider/slide1.jpg');
          background-size: cover;">
                <span class="mask bg-gradient-primary opacity-3"></span>
                <h4 class="mt-5 text-white font-weight-bolder position-relative">MRS Berhad</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="adminstyle/login/js/core/popper.min.js"></script>
  <script src="adminstyle/login/js/core/bootstrap.min.js"></script>
  <script src="adminstyle/login/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="adminstyle/login/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="adminstyle/login/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>