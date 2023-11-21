<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Industry - Factory & Industrial HTML Template" />
	<meta property="og:title" content="Industry - Factory & Industrial HTML Template" />
	<meta property="og:description" content="Industry - Factory & Industrial HTML Template" />
	<meta property="og:image" content="https://industry.dexignzone.com/xhtml/social-image.png" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON -->
	<!-- <link rel="icon" href="images/favicon.ico" type="image/x-icon" /> -->
	<link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/asset_fr/images/log.png" />

	<!-- PAGE TITLE HERE -->
	<title><?= ($title == "Home") ? $lang['home_text'] : $title ?> - <?= $lang['nama_yayasan_text'] ?></title>

	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="<?= base_url() ?>assets/asset_fr/js/html5shiv.min.js"></script>
	<script src="<?= base_url() ?>assets/asset_fr/js/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/asset_fr/css/plugins.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/asset_fr/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/asset_fr/css/skin/skin-3.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/asset_fr/css/templete.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
		<header class="site-header mo-left header-transparent box-header header">
			<!-- <header class="site-header mo-left header-transparent header"> -->
			<div class="top-bar text-black">
				<div class="container">
					<div class="row d-flex justify-content-between">
						<div class="dlab-topbar-left">
							<ul>
								<li><?= anchor('language/change/id', '<span class="flag-icon flag-icon-id">') ?></li>
								<li><?= anchor('language/change/en', '<span class="flag-icon flag-icon-gb-eng">') ?></li>
								<li><?= anchor('language/change/jp', '<span class="flag-icon flag-icon-jp">') ?></li>
							</ul>
						</div>
						<div class="dlab-topbar-right topbar-social">
							<ul>
								<li>
									<a href="https://wa.me/628176877606" target="_blank" class="site-button-link twitter hover" title="Admin 1">
										<i class="fa fa-whatsapp"></i>
									</a>
								</li>
								<li>
									<a href="https://wa.me/6285714243325" target="_blank" class="site-button-link twitter hover" title="Admin 2">
										<i class="fa fa-whatsapp"></i>
									</a>
								</li>
								<li>
									<a href="https://wa.me/6281227640349" target="_blank" class="site-button-link twitter hover" title="Admin 3">
										<i class="fa fa-whatsapp"></i>
									</a>
								</li>
								<li>
									<a href="https://wa.me/628119401954" target="_blank" class="site-button-link twitter hover" title="Admin 4">
										<i class="fa fa-whatsapp"></i>
									</a>
								</li>
								<li>
									<a href="https://www.facebook.com/profile.php?id=61551065793688" class="site-button-link facebook hover" title="Facebook">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li>
									<a href="https://www.instagram.com/lpktjokrobaktipertiwi/" class="site-button-link instagram hover" title="Instagram">
										<i class="fab fa-instagram"></i>
									</a>
								</li>
								<!-- <li>
									<a href="#" class="site-button-link linkedin hover">
										<i class="fab fa-linkedin-in"></i>
									</a>
								</li> -->
								<li>
									<a href="https://www.youtube.com/@ytpbaktipertiwi9643" class="site-button-link youtube hover" title="Youtube">
										<i class="fab fa-youtube"></i>
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
						<div class="logo-header mostion logo-dark">
							<a href="<?= base_url() ?>">
								<img src="<?= base_url() ?>assets/asset_fr/images/logo_gandeng.png" alt="">
							</a>
						</div>
						<!-- nav toggle button -->
						<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
							<span></span>
							<span></span>
							<span></span>
						</button>
						<!-- extra nav -->
						<div class="extra-nav">
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
							<a href="<?= $url_auth ?>" class="site-button radius-no"><?= $url_text ?></a>
						</div>
						<!-- Quik search -->
						<div class="dlab-quik-search ">
							<form action="#">
								<input name="search" value="" type="text" class="form-control" placeholder="Type to search">
								<span id="quik-search-remove">
									<i class="ti-close"></i></span>
							</form>
						</div>
						<!-- main nav -->
						<div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
							<div class="logo-header d-md-block d-lg-none">
								<a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/asset_fr/images/logo_gandeng.png" alt=""></a>
							</div>
							<ul class="nav navbar-nav">
								<li>
									<a href="<?= base_url('dash/program/register') ?>"><?= $lang['registration_text'] ?></a>
								</li>
								<li>
									<a href="#kegiatan"><?= $lang['activity_text'] ?></a>
								</li>
								<li>
									<a href="#program"><?= $lang['program_text'] ?></a>
								</li>
								<li>
									<a href="#artikel"><?= $lang['article_text'] ?></a>
								</li>
								<li>
									<a href="#kontak"><?= $lang['contact_text'] ?></a>
								</li>
								<li>
									<a href="<?= base_url('home/tentang') ?>"><?= $lang["about_text"] ?></a>
								</li>
								<li id="authButton">
									<a href="<?= $url_auth ?>"><?= $url_text ?></a>
								</li>
							</ul>
							<div class="dlab-social-icon">
								<!-- <ul>
									<li><a class="site-button facebook circle-sm outline fab fa-facebook-f" href="javascript:void(0);"></a></li>
									<li><a class="site-button twitter circle-sm outline fab fa-twitter" href="javascript:void(0);"></a></li>
									<li><a class="site-button linkedin circle-sm outline fab fa-linkedin-in" href="javascript:void(0);"></a></li>
									<li><a class="site-button instagram circle-sm outline fab fa-instagram" href="javascript:void(0);"></a></li>
								</ul> -->
								<ul>
									<li>
										<a href="https://wa.me/628176877606" target="_blank" class="site-button whatsapp hover" title="Admin 1">
											<i class="fa fa-whatsapp"></i>
										</a>
									</li>
									<li>
										<a href="https://wa.me/6285714243325" target="_blank" class="site-button whatsapp hover" title="Admin 2">
											<i class="fa fa-whatsapp"></i>
										</a>
									</li>
									<li>
										<a href="https://wa.me/6281227640349" target="_blank" class="site-button whatsapp hover" title="Admin 3">
											<i class="fa fa-whatsapp"></i>
										</a>
									</li>
									<li>
										<a href="https://wa.me/628119401954" target="_blank" class="site-button whatsapp hover" title="Admin 4">
											<i class="fa fa-whatsapp"></i>
										</a>
									</li>
									<li>
										<a href="https://www.facebook.com/profile.php?id=61551065793688" class="site-button facebook hover" title="Facebook">
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a href="https://www.instagram.com/lpktjokrobaktipertiwi/" class="site-button instagram hover" title="Instagram">
											<i class="fab fa-instagram"></i>
										</a>
									</li>
									<li>
										<a href="https://www.youtube.com/@ytpbaktipertiwi9643" class="site-button youtube hover" title="Youtube">
											<i class="fab fa-youtube"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- main header END -->
		</header>
		<!-- header END -->
		<!-- Content -->

		<?php if (isset($pages)) $this->load->view($pages) ?>
		<!-- <div class="section-full bg-white content-inner-1 project-area  bg-img-fix" style="background-image:url(<?= base_url('assets/asset_fr/') ?>images/background/bg9.jpg); background-size: cover;">
            <div class="container">
                <div class="section-head text-white style2 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.6s">
                    <h2 class="title m-b10">The Luxury Residence In Forest</h2>
                    <p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache <br />fanny pack nostrud. Photo booth anim 8-bit hella, </p>
                    <a href="contact-1.html" class="site-button btnhover20 m-r10 m-b10">Contact Us</a>
                    <a href="portfolio-details.html" class="site-button btnhover20 m-b10">View Portfolio</a>
                </div>
                <div class="project-carousel-1 owl-carousel wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                    <div class="item">
                        <div class="project-info-box">
                            <div class="project-media">
                                <img src="<?= base_url() ?>assets/asset_fr/images/our-services/construct/pic1.jpg" alt="" />
                            </div>
                            <div class="project-content">
                                <ul class="list-details">
                                    <li>
                                        <strong>Clients:</strong>
                                        <span>Ethan Hunt</span>
                                    </li>
                                    <li>
                                        <strong>Completion:</strong>
                                        <span>February 5th, 2017</span>
                                    </li>
                                    <li>
                                        <strong>Project Type:</strong>
                                        <span>Villa, Residence</span>
                                    </li>
                                    <li>
                                        <strong>Architects:</strong>
                                        <span>Logan Cee</span>
                                    </li>
                                    <li>
                                        <a href="portfolio-details.html" class="site-button btnhover20 m-t10">View Portfolio</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project-info-box">
                            <div class="project-media">
                                <img src="<?= base_url() ?>assets/asset_fr/images/our-services/construct/pic2.jpg" alt="" />
                            </div>
                            <div class="project-content">
                                <ul class="list-details">
                                    <li>
                                        <strong>Clients:</strong>
                                        <span>Ethan Hunt</span>
                                    </li>
                                    <li>
                                        <strong>Completion:</strong>
                                        <span>February 5th, 2017</span>
                                    </li>
                                    <li>
                                        <strong>Project Type:</strong>
                                        <span>Villa, Residence</span>
                                    </li>
                                    <li>
                                        <strong>Architects:</strong>
                                        <span>Logan Cee</span>
                                    </li>
                                    <li>
                                        <a href="portfolio-details.html" class="site-button btnhover20 m-t10">View Portfolio</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
		<!-- Content END -->
		<!-- Footer -->
		<footer class="site-footer" id="kontak">
			<div class="footer-top" style="background-image:url(<?= base_url('assets/asset_fr/') ?>images/background/bg2.png); background-size: contain;">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-5 col-xl-2 col-lg-2 col-sm-6 footer-col-4">
							<div class="widget widget_services border-0">
								<h5 class="footer-title text-white"><?= $lang['menu_text'] ?></h5>
								<ul>
									<li><a href="<?= base_url('home/tentang') ?>"><?= $lang['about_text'] ?></a></li>
									<li><a href="<?= base_url('article') ?>"><?= $lang['article_text'] ?></a></li>
									<!-- <li><a href="blog-grid-2.html">Manajemen</a></li> -->
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-7 col-xl-6 col-lg-3 col-sm-6 footer-col-4">
							<div class="widget widget_services border-0">
								<h5 class="footer-title text-white"><?= $lang['maps_text'] ?></h5>
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.992596261016!2d106.9171448!3d-6.1978163!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698bc764820fcb%3A0x4cd956d7d19d7448!2sYAYASAN%20TJOKRO%20PERSADA%20BAKTI%20PERTIWI!5e0!3m2!1sid!2sid!4v1697767053806!5m2!1sid!2sid" style="border:0;" height="250" width="500" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								<!-- <ul>
								<li><a href="help-desk.html">Help Desk </a></li>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="contact-1.html">Contact</a></li>
                                <li><a href="portfolio-details.html">Portfolio</a></li>
                                <li><a href="team-1.html">Team</a></li>
                            </ul> -->
							</div>
						</div>
						<div class="col-md-6 col-xl-4 col-lg-3 col-sm-6 footer-col-4">
							<div class="widget widget_getintuch">
								<h5 class="footer-title text-white "><?= $lang['contact_us_text'] ?></h5>
								<ul>
									<li>
										<i class="ti-location-pin"></i>
										<strong><?= $alamat['judul_setting'] ?></strong> <?= $alamat['content'] ?>
									</li>
									<li>
										<i class="ti-mobile"></i>
										<strong><?= $telepon['judul_setting'] ?></strong>
										<?= $telepon['content'] ?>
									<li>
										<i class="ti-email"></i>
										<strong><?= $email['judul_setting'] ?></strong> <?= $email['content'] ?>
									</li>
								</ul>
							</div>
						</div>
						<!-- <div class="col-md-12 col-xl-3 col-lg-4 col-sm-6 footer-col-4 ">
                        <div class="widget">
                            <h5 class="footer-title text-white">Subscribe To Our Newsletter</h5>
                            <div class="subscribe-form m-b20">
								<form class="dzSubscribe" action="script/mailchamp.php" method="post">
									<div class="dzSubscribeMsg"></div>
									<div class="input-group">
										<input name="dzEmail" required="required"  class="form-control" placeholder="Your Email Id" type="email">
										<span class="input-group-btn">
											<button name="submit" value="Submit" type="submit" class="site-button btnhover20 radius-xl">Subscribe</button>
										</span> 
									</div>
								</form>
							</div>
                        </div>
                    </div> -->
					</div>
				</div>
			</div>
			<!-- footer bottom part -->
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 text-left "> <span><?= $lang['copyright_text'] ?> © 2023 Fantecno Design DexignZone</span> </div>
						<!-- <div class="col-md-6 col-sm-6 text-right "> 
						<div class="widget-link "> 
							<ul>
								<li><a href="about-2.html"> About</a></li> 
								<li><a href="help-desk.html"> Help Desk</a></li> 
								<li><a href="privacy-policy.html"> Privacy Policy</a></li> 
							</ul>
						</div>
					</div> -->
					</div>
				</div>
			</div>
		</footer>
		<!-- Footer END -->
		<button class="scroltop style2 radius" type="button">
			<i class="fas fa-arrow-up"></i></button>
	</div>
	<!-- JAVASCRIPT FILES ========================================= -->
	<!-- JAVASCRIPT FILES ========================================= -->
	<script src="<?= base_url() ?>assets/asset_fr/js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
	<script src="<?= base_url() ?>assets/asset_fr/plugins/wow/wow.js"></script><!-- WOW JS -->

	<script src="<?= base_url() ?>assets/asset_fr/plugins/bootstrap/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP.MIN JS -->
	<script src="<?= base_url() ?>assets/asset_fr/plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
	<script src="<?= base_url() ?>assets/asset_fr/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
	<script src="<?= base_url() ?>assets/asset_fr/plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
	<script src="<?= base_url() ?>assets/asset_fr/plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
	<script src="<?= base_url() ?>assets/asset_fr/plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
	<script src="<?= base_url() ?>assets/asset_fr/plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
	<script src="<?= base_url() ?>assets/asset_fr/plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
	<script src="<?= base_url() ?>assets/asset_fr/plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
	<script src="<?= base_url() ?>assets/asset_fr/plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
	<script src="<?= base_url() ?>assets/asset_fr/plugins/lightgallery/js/lightgallery-all.min.js"></script><!-- Lightgallery -->
	<script src="<?= base_url() ?>assets/asset_fr/plugins/scroll/scrollbar.min.js"></script><!-- scroll -->
	<script src="<?= base_url() ?>assets/asset_fr/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
	<script src="<?= base_url() ?>assets/asset_fr/js/dz.carousel.min.js"></script><!-- SORTCODE FUCTIONS  -->
	<script src="<?= base_url() ?>assets/asset_fr/plugins/countdown/jquery.countdown.js"></script><!-- COUNTDOWN FUCTIONS  -->
	<script src="<?= base_url() ?>assets/asset_fr/js/dz.ajax.js"></script><!-- CONTACT JS  -->
	<script src="<?= base_url() ?>assets/asset_fr/plugins/rangeslider/rangeslider.js"></script><!-- Rangeslider -->

	<script src="<?= base_url() ?>assets/asset_fr/js/jquery.lazy.min.js"></script>
	<!-- REVOLUTION JS FILES -->
	<script src="<?= base_url() ?>assets/asset_fr/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script src="<?= base_url() ?>assets/asset_fr/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
	<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
	<script src="<?= base_url() ?>assets/asset_fr/plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="<?= base_url() ?>assets/asset_fr/plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	<script src="<?= base_url() ?>assets/asset_fr/plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="<?= base_url() ?>assets/asset_fr/plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="<?= base_url() ?>assets/asset_fr/plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="<?= base_url() ?>assets/asset_fr/plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
	<script src="<?= base_url() ?>assets/asset_fr/plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="<?= base_url() ?>assets/asset_fr/plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script src="<?= base_url() ?>assets/asset_fr/js/rev.slider.js"></script>
	<script>
		jQuery(document).ready(function() {
			'use strict';
			dz_rev_slider_14();
			$('.lazy').Lazy();
		}); /*ready*/
	</script>
	<script>
		// $(document).ready(function() {
		// 	// Menggunakan JavaScript untuk mendeteksi lebar layar
		// 	var screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

		// 	// Mendeteksi jenis perangkat berdasarkan lebar layar
		// 	var deviceType = screenWidth < 768 ? 'Mobile' : (screenWidth < 1024 ? 'Tablet' : 'Desktop');

		// 	// Menampilkan hasil deteksi perangkat
		// 	$('#deviceType').text('Device Type: ' + deviceType);
		// });
	</script>
	<script>
		// $(document).ready(function() {
		// 	function detectDeviceType() {
		// 		var screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		// 		var deviceType = screenWidth < 768 ? 'Mobile' : (screenWidth < 1024 ? 'Tablet' : 'Desktop');
		// 		$('#deviceType').text('Device Type: ' + deviceType);
		// 	}

		// 	// Panggil detectDeviceType saat halaman pertama dimuat
		// 	detectDeviceType();

		// 	// Tambahkan event listener untuk resize window
		// 	$(window).on('resize', function() {
		// 		// Panggil detectDeviceType saat ukuran layar berubah
		// 		detectDeviceType();
		// 	});
		// });
	</script>
	<script>
		$(document).ready(function() {
			function detectDeviceType() {
				var screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
				return screenWidth < 768 ? 'Mobile' : (screenWidth < 1024 ? 'Tablet' : 'Desktop');
			}

			function updateMenuVisibility() {
				var deviceType = detectDeviceType();
				var testingItem = $('#authButton');

				// Tampilkan elemen hanya jika perangkat dalam mode Mobile
				testingItem.css('display', deviceType === 'Mobile' ? 'block' : 'none');
			}

			// Panggil updateMenuVisibility saat halaman pertama dimuat
			updateMenuVisibility();

			// Tambahkan event listener untuk resize window
			$(window).on('resize', function() {
				// Panggil updateMenuVisibility saat ukuran layar berubah
				updateMenuVisibility();
			});
		});
	</script>
</body>

</html>