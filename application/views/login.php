<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="<?= base_url() ?>assets/images/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.png" type="image/x-icon">
  <title>Login - LPK Tjokro Bakti Pertiwi</title>
  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/font-awesome.css">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/vendors/icofont.css">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/vendors/themify.css">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/vendors/flag-icon.css">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/vendors/feather-icon.css">
  <!-- Plugins css start-->
  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/vendors/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/style.css">
  <link id="color" rel="stylesheet" href="<?= base_url() ?>assets/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/responsive.css">
</head>

<body>
  <!-- login page start-->
  <div class="container-fluid p-0">
    <div class="row m-0">
      <div class="col-12 p-0">
        <div class="login-card login-dark">
          <div>
            <!-- <div><a class="logo" href="index.html"><img class="img-fluid for-light" src="<?= base_url() ?>assets/images/logo/logo.png" alt="looginpage"><img class="img-fluid for-dark" src="<?= base_url() ?>assets/images/logo/logo_dark.png" alt="looginpage"></a></div> -->
            <?= $this->session->flashdata('massage')  ?>

            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success') ?>"></div>


            <?= $this->session->flashdata('message_name'); ?>
            <div class="login-main">
              <form action="<?= base_url('auth') ?>" class="theme-form" method="POST">
                <h4>LPK Tjokro Bakti Pertiwi</h4>
                <p>Silahkan masukan username & password</p>
                <div class="form-group">
                  <label for="" class="col-from-label">Menu</label>
                  <select name="menu" id="menu" class="form-select">
                    <option value="magang">Magang</option>
                    <option value="customer">Customer</option>
                  </select>
                </div>
                <div class="form-group">
                  <label class="col-form-label">Username</label>
                  <input class="form-control" value="<?= set_value('username'); ?>" name="username" required type="text" required="" placeholder="username">
                </div>
                <div class="form-group">
                  <label class="col-form-label">Password</label>
                  <div class="form-input position-relative">
                    <input class="form-control" value="<?= set_value('password'); ?>" type="password" required name="password" required="" placeholder="*********">
                    <div class="show-hide"><span class="show"> </span></div>
                  </div>
                </div>
                <div class="form-group mb-0">
                  <div class="checkbox p-0">
                    <input id="checkbox1" type="checkbox">
                    <label class="text-muted" for="checkbox1">Remember password</label>
                  </div>
                  <a class="link" href="forget-password.html">Lupa password?</a>
                  <div class="text-end mt-3">
                    <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                  </div>
                </div>
                <!-- <h6 class="text-muted mt-4 or">Or Sign in with</h6> -->
                <!-- <div class="social mt-4">
                    <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login" target="_blank"><i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn </a><a class="btn btn-light" href="https://twitter.com/login?lang=en" target="_blank"><i class="txt-twitter" data-feather="twitter"></i>twitter</a><a class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i class="txt-fb" data-feather="facebook"></i>facebook</a></div>
                  </div>
                  <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="sign-up.html">Create Account</a></p> -->
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <!-- Bootstrap js-->
    <script src="<?= base_url() ?>assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="<?= base_url() ?>assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="<?= base_url() ?>assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <!-- Sidebar jquery-->
    <script src="<?= base_url() ?>assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="<?= base_url() ?>assets/js/script.js"></script>
  </div>
</body>

</html>