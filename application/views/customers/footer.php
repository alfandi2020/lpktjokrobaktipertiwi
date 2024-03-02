<!-- Footer -->

<footer class="site-footer" id="kontak">
    <div class="footer-top" style="background-image:url(<?= base_url('assets/asset_fr/') ?>images/background/bg2.png); background-size: contain;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-5 col-xl-2 col-lg-2 col-sm-6 footer-col-4">
                    <div class="widget widget_getintuch border-0">
                        <h5 class="footer-title text-white"><?= $lang['social_media'] ?></h5>
                        <ul>
                            <li style="padding-left: 0px;">
                                <a href="https://www.facebook.com/profile.php?id=61551065793688" target="_blank">
                                    <img src="<?= base_url('assets/images/logo/logo_facebook.png') ?>" alt="" style="width: 20px; height: 20px;">
                                    <span>&nbsp;LPK YTP</span>
                                </a>
                            </li>
                            <li style="padding-left: 0px;">
                                <a href="https://www.instagram.com/lpktjokrobaktipertiwi/" target="_blank">
                                    <img src="<?= base_url('assets/images/logo/logo_instagram.png') ?>" alt="" style="width: 20px; height: 20px;">
                                    <span>&nbsp;LPK YTP</span>
                                </a>
                            </li>
                            <li style="padding-left: 0px;">
                                <a href="https://www.youtube.com/watch?v=4LqqBQxU-1Q" target="_blank">
                                    <img src="<?= base_url('assets/images/logo/logo_youtube.png') ?>" alt="" style="width: 20px; height: 20px;">
                                    <span>&nbsp;LPK YTP</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget_services border-0">
                        <h5 class="footer-title text-white"><?= $lang['web_traffic'] ?></h5>
                        <p>
                            <i class="ti-user"></i><span>&nbsp;</span>
                            <?php
                            $this->load->model('M_Visitor');
                            $visitor_count = $this->M_Visitor->getTotalVisitors();
                            ?>
                            <strong> <?= $visitor_count . ' ' . $lang['visitor'] ?></strong>
                        </p>
                    </div>
                </div>

                <div class="col-md-3 col-7 col-xl-6 col-lg-3 col-sm-6 footer-col-4">
                    <div class="widget widget_services border-0">
                        <h5 class="footer-title text-white"><?= $lang['maps_text'] ?></h5>
                        <div class="responsive-iframe">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.992596261016!2d106.9171448!3d-6.1978163!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698bc764820fcb%3A0x4cd956d7d19d7448!2sYAYASAN%20TJOKRO%20PERSADA%20BAKTI%20PERTIWI!5e0!3m2!1sid!2sid!4v1697767053806!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-xl-4 col-lg-3 col-sm-6 footer-col-4">
                    <div class="widget widget_getintuch">
                        <h5 class="footer-title text-white "><?= $lang['contact_us_text'] ?></h5>
                        <?php

                        $alamat = $this->M_Setting->footer_section($language, 'alamat');
                        $telepon = $this->M_Setting->footer_section($language, 'telepon');
                        $email = $this->M_Setting->footer_section($language, 'email');
                        ?>
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
            </div>
        </div>
    </div>
    <!-- footer bottom part -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 text-left ">
                    <span><?= $lang['copyright_text'] ?> © 2023 Fantecno Design DexignZone</span>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer END -->
<button class="scroltop style3" type="button"><i class="fas fa-arrow-up"></i></button>
<div class="whatsapp-container">
    <a href="#" class="whatsapp-icon" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-whatsapp"></i>
    </a>
    <div class="additional-buttons">
        <?php
        $social = $this->M_Setting->chat();

        foreach ($social as $s) {
        ?>
            <a href="<?= $s->url . $s->contact_id ?>" class="additional-icon">
                <i class="<?= $s->icon ?>"></i><span> <?= $s->contact_name ?></span>
            </a>
        <?php
        }
        ?>
    </div>
</div>
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="<?= base_url() ?>assets/asset_fr/js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="<?= base_url() ?>assets/asset_fr/plugins/wow/wow.js"></script><!-- WOW JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
        dz_rev_slider_12();
        $('.lazy').Lazy();
    }); /*ready*/
</script>

</body>

</html>