<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="LPK Tjokro Bakti Pertiwi" />
    <meta property="og:title" content="LPK Tjokro Bakti Pertiwi" />
    <meta property="og:description" content="LPK Tjokro Bakti Pertiwi" />
    <meta property="og:image" content="https://lpktjokrobaktipertiwi.id" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/asset_fr/images/log.png" />


    <!-- PAGE TITLE HERE -->
    <title><?= $title ?> - <?= $lang['nama_yayasan_text'] ?></title>


    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
    <script src="<?= base_url() ?>assets/asset_fr/js/html5shiv.min.js"></script>
    <script src="<?= base_url() ?>assets/asset_fr/js/respond.min.js"></script>
    <![endif]-->

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/asset_fr/css/plugins.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/asset_fr/css/style.css">
    <link class="skin" rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/asset_fr/css/skin/skin-3.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/asset_fr/css/templete.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Google Font -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Playfair+Display:400,400i,700,700i,900,900i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap');
    </style>

    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/asset_fr/plugins/revolution/revolution/css/revolution.min.css">

</head>

<body id="bg">
    <div class="page-wraper roboto-condensed">
        <div id="loading-area"></div>
        <!-- header -->
        <header class="site-header mo-left header-transparent overlay header">
            <div class="top-bar">
                <div class="container">
                    <div class="row d-flex justify-content-between align-items-center p-2">
                        <div class="dlab-topbar-left">
                            <ul>
                                <li><?= anchor('language/change/id', 'ID') ?></li>
                                <li><?= anchor('language/change/en', 'EN') ?></li>
                                <li><?= anchor('language/change/jp', '日本語') ?></li>
                            </ul>
                        </div>

                        <div class="dlab-topbar-right topbar-social">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/profile.php?id=61551065793688" class="site-button-link facebook hover" title="Facebook">
                                        <img src="https://lpktjokrobaktipertiwi.id/assets/images/logo/logo_facebook.png" alt="" style="width: 20px; height: 20px;">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/lpktjokrobaktipertiwi/" class="site-button-link instagram hover" title="Instagram">
                                        <img src="https://lpktjokrobaktipertiwi.id/assets/images/logo/logo_instagram.png" alt="" style="width: 20px; height: 20px;">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/watch?v=4LqqBQxU-1Q" class="site-button-link youtube hover" title="Youtube">
                                        <img src="https://lpktjokrobaktipertiwi.id/assets/images/logo/logo_youtube.png" alt="" style="width: 20px; height: 20px;">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main header -->
            <div class="sticky-header main-bar-wraper navbar-expand-lg">
                <div class="main-bar clearfix ">
                    <div class="container clearfix">
                        <!-- website logo -->
                        <div class="logo-header mostion logo-white">
                            <a href="<?= base_url('customer') ?>"><img src="<?= base_url() ?>assets/asset_fr/images/logo_gandeng.png" alt=""></a>
                        </div>
                        <!-- nav toggle button -->
                        <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <!-- extra nav -->
                        <!-- <div class="extra-nav">
                            <div class="extra-cell">
                                <button id="quik-search-btn" type="button" class="site-button-link"><i class="la la-search"></i></button>
                            </div>
                        </div> -->
                        <!-- Quik search -->
                        <!-- <div class="dlab-quik-search ">
                            <form action="#">
                                <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                                <span id="quik-search-remove"><i class="ti-close"></i></span>
                            </form>
                        </div> -->
                        <!-- main nav -->
                        <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                            <div class="logo-header d-md-block d-lg-none">
                                <a href="<?= base_url('customer') ?>"><img src="<?= base_url() ?>assets/asset_fr/images/logo-8.png" alt=""></a>
                            </div>
                            <ul class="nav navbar-nav">
                                <li class="<?= ($this->uri->segment(1) == 'customer' && !$this->uri->segment(2)) ? 'active' : '' ?>">
                                    <a href="<?= base_url('customer') ?>"><?= $lang['home_text'] ?></a>
                                </li>
                                <li class="<?= ($this->uri->segment(2) == 'profile') ? 'active' : '' ?>">

                                    <a href="javascript:;"><?= $lang['profile'] ?><i class="fas fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="<?= base_url('customer/visi_misi') ?>"><?= strtoupper($lang['visi_misi']) ?></a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('program') ?>"><?= strtoupper($lang['program_text']) ?></a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('customer/legality') ?>"><?= strtoupper($lang['our_legality']) ?></a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('customer/philosopy') ?>">PHILOSOPY</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="<?= ($this->uri->segment(2) == 'service') ? 'active' : '' ?>">
                                    <a href="javascript:;">
                                        <?= $lang['services'] ?>
                                        <i class="fas fa-chevron-down"></i>
                                    </a>
                                    <ul class="sub-menu">
                                        <?php
                                        $programs = $this->M_Program->lists_customers($language);

                                        foreach ($programs as $pr) {
                                        ?>
                                            <li>
                                                <a href="<?= base_url('program/detail/') . $pr->slug ?>"><?= strtoupper($pr->nama_program) ?></a>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <li class="<?= ($this->uri->segment(2) == 'contact') ? 'active' : '' ?>">
                                    <a href="<?= base_url('cust/id/contact') ?>"><?= $lang['contact_text'] ?></a>
                                </li>
                                <li class="<?= ($this->uri->segment(2) == 'values') ? 'active' : '' ?>">
                                    <a href="<?= base_url('customer/values') ?>"><?= $lang['values_text'] ?></a>
                                </li>
                                <li class="<?= ($this->uri->segment(2) == 'contact') ? 'active' : '' ?>">
                                    <?php
                                    if (empty($this->session->userdata('username'))) {
                                        $url_auth = base_url('auth');
                                        $url_text = $lang['login_text'];
                                    } else {
                                        $url_auth = base_url('dashboard');
                                        $url_text = $lang['dashboard_text']; ?>
                                    <?php
                                    }
                                    ?>
                                    <a href="<?= $url_auth ?>" target="_blank"><?= $url_text ?></a>
                                </li>
                            </ul>
                            <div class="dlab-social-icon">
                                <ul>
                                    <li><a class="site-button circle fab fa-facebook-f" href="javascript:void(0);"></a></li>
                                    <li><a class="site-button  circle fab fa-twitter" href="javascript:void(0);"></a></li>
                                    <li><a class="site-button circle fab fa-linkedin-in" href="javascript:void(0);"></a></li>
                                    <li><a class="site-button circle fab fa-instagram" href="javascript:void(0);"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main header END -->
        </header>
        <!-- header END -->