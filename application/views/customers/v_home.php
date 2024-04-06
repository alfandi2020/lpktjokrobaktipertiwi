<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha512-Velp0ebMKjcd9RiCoaHhLXkR1sFoCCWXNp6w4zj1hfMifYB5441C+sKeBl/T/Ka6NjBiRfBBQRaQq65ekYz3UQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .shape_2 {
        background-color: #00AFEF;
        color: white;
        margin: 10px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 80px;
        height: 80px;
        border: 1px solid;
        border-radius: 10px;
        overflow: hidden;
        transform: rotate(45deg);
    }

    .shape_2 p {
        transform: rotate(-45deg);
        /* width: 61%; */
        /* height: 61%; */
        /* flex-shrink: 0; */
        font-weight: bold;
    }

    .full {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
    }

    .full .content {
        background-color: rgba(0, 0, 0, 0.75) !important;
        height: 100%;
        width: 100%;
        display: grid;
    }

    .full .content img {
        left: 50%;
        transform: translate3d(0, 0, 0);
        animation: zoomin 1s ease;
        max-width: 100%;
        max-height: 100%;
        margin: auto;
    }

    .byebye {
        opacity: 0;
    }

    .byebye:hover {
        transform: scale(0.2) !important;
    }

    .gallery {
        display: grid;
        grid-column-gap: 8px;
        grid-row-gap: 8px;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        grid-auto-rows: 8px;
    }

    .gallery img {
        max-width: 100%;
        border-radius: 2px;
        /* box-shadow: 0 0 16px #333; */
        transition: all 1.5s ease;
    }

    .gallery img:hover {
        box-shadow: 0 0 15px #333;
    }

    .gallery .content {
        padding: 4px;
    }

    .gallery .gallery-item {
        transition: grid-row-start 300ms linear;
        transition: transform 300ms ease;
        transition: all 0.5s ease;
        cursor: pointer;
    }

    .gallery .gallery-item:hover {
        transform: scale(1.025);
    }

    @media (max-width: 600px) {
        .gallery {
            grid-template-columns: repeat(auto-fill, minmax(30%, 1fr));
        }
    }

    @media (max-width: 400px) {
        .gallery {
            grid-template-columns: repeat(auto-fill, minmax(50%, 1fr));
        }
    }

    @-moz-keyframes zoomin {
        0% {
            max-width: 50%;
            transform: rotate(-30deg);
            filter: blur(4px);
        }

        30% {
            filter: blur(4px);
            transform: rotate(-80deg);
        }

        70% {
            max-width: 50%;
            transform: rotate(45deg);
        }

        100% {
            max-width: 100%;
            transform: rotate(0deg);
        }
    }

    @-webkit-keyframes zoomin {
        0% {
            max-width: 50%;
            transform: rotate(-30deg);
            filter: blur(4px);
        }

        30% {
            filter: blur(4px);
            transform: rotate(-80deg);
        }

        70% {
            max-width: 50%;
            transform: rotate(45deg);
        }

        100% {
            max-width: 100%;
            transform: rotate(0deg);
        }
    }

    @-o-keyframes zoomin {
        0% {
            max-width: 50%;
            transform: rotate(-30deg);
            filter: blur(4px);
        }

        30% {
            filter: blur(4px);
            transform: rotate(-80deg);
        }

        70% {
            max-width: 50%;
            transform: rotate(45deg);
        }

        100% {
            max-width: 100%;
            transform: rotate(0deg);
        }
    }

    @keyframes zoomin {
        0% {
            max-width: 50%;
            transform: rotate(-30deg);
            filter: blur(4px);
        }

        30% {
            filter: blur(4px);
            transform: rotate(-80deg);
        }

        70% {
            max-width: 50%;
            transform: rotate(45deg);
        }

        100% {
            max-width: 100%;
            transform: rotate(0deg);
        }
    }
</style>
<div class="page-content bg-white">
    <!-- Slider -->
    <div class="main-slider style-two default-banner" id="home">
        <div class="tp-banner-container">
            <div class="tp-banner">
                <div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="reveal-add-on36" data-source="gallery" style="background:#ffffff;padding:0px;">
                    <!-- BACKGROUND VIDEO LAYER -->
                    <video width="100%" height="100%" loop="true" autoplay="autoplay" muted>
                        <source src="<?= base_url() ?>assets/asset_fr/video/<?= $videotron['content'] ?>" type="video/mp4" />
                    </video>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
                <!-- END REVOLUTION SLIDER -->
            </div>
        </div>
    </div>
    <!-- Slider END -->

    <!-- Facilities -->
    <div class="section-full content-inner bg-white">
        <div class="container-fluid">
            <div class="section-head style2 text-center">
                <h2 class="title"><?= $lang['facility'] ?></h2>
                <!-- <p>There are many variations of passages of Lorem Ipsum typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p> -->
            </div>
            <div class="blog-carousel owl-none owl-carousel">
                <?php foreach ($facilities as $f) { ?>
                    <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s">
                        <div class="blog-post post-style-2">
                            <div class="dlab-post-media dlab-img-effect">
                                <a href="blog-single.html"><img src="<?= base_url() ?>assets/asset_fr/images/<?= $f->photo ?>" alt="" class="w-100 h-50"></a>
                            </div>
                            <div class="dlab-post-info">
                                <div class="dlab-post-meta">
                                    <ul>
                                        <!-- <li class="post-date"> <strong>10 Aug</strong> <span> 2016</span> </li> -->
                                        <!-- <li class="post-author"> By <a href="blog-single.html">demongo</a> </li> -->
                                    </ul>
                                </div>
                                <div class="dlab-post-title">
                                    <h3 style="font-weight: bold;" class="dlab-tilte">
                                        <a href="blog-single.html"><?= $f->$language ?></a>
                                    </h3>
                                </div>
                                <!-- <div class="dlab-post-readmore">
                                                    <a href="<?= base_url() ?>" title="READ MORE" rel="bookmark"
                                                        class="site-button btnhover21">READ MORE</a>
                                                </div> -->
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- Programs -->
    <div class="content-block">

        <div class="section-full content-inner bg-white">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="title"><?= $lang['program_text'] ?></h2>
                    <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p> -->
                </div>
                <div class="row">
                    <?php
                    $duration = 2;
                    $delay = 0.3;
                    foreach ($services as $p) {
                    ?>
                        <div class="col-xl-4 col-md-6 col-sm-12 m-b30 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
                            <img src="<?= base_url() ?>assets/images/programs/<?= $p->photo ?>" alt="" style="display: flex;flex-wrap: wrap;align-content: center;" class="h-50 w-100" />
                            <div class="icon-bx-wraper bx-style-2 m-l40 p-a30 left bg-gray icon-bx-ho">
                                <div class="icon-bx-sm bg-primary m-b20">
                                    <span class="icon-cell">
                                        <i class="flaticon-robot-arm"></i>
                                    </span>
                                </div>
                                <div class="icon-content p-l40">
                                    <a href="<?= base_url('customer/program_detail/') . $p->slug ?>">
                                        <h5 class="dlab-tilte"><?= $p->nama_program ?></h5>
                                    </a>
                                    <p title="<?= $p->keterangan ?>"><?= substr($p->keterangan, 0, 100) ?>...</p>
                                </div>
                                <div class="dlab-post-readmore">
                                    <a href="<?= base_url('customer/program_detail/' . $p->slug) ?>" title="<?= $lang['detail_text'] ?>" rel="bookmark" class="site-button btnhover20"><?= $lang['detail_text'] ?>...</a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Program END -->

    <!---- flow --->
    <div class="content-block">
        <div class="section-full content-inner bg-white">
            <div class="row justify-content-center mb-5">
                <div class="section-head style2 text-center">
                    <h2 class="title"><?= $lang['alur_program_title'] ?></h2>
                </div>
                <!-- <div class="col-md-4 col-10 text-center">

                    <h5><?= $lang['alur_program_title_description']  ?></h5>
                    <div class="icon-bx-wraper service-box style5 shadow fly-box wow fadeInUp">
                        <?php
                        if ($language == "" || $language == "id") {
                        ?>
                            <img src="<?= base_url() ?>assets/asset_fr/alur-program-pemagangan-ke-jepang-(ID).jpg" alt="">
                        <?php } else if ($language == "jp") { ?>
                            <img src="<?= base_url() ?>assets/asset_fr/alur-program-pemagangan-ke-jepang-(JP).jpg" alt="">
                        <?php } else if ($language == "en") { ?>
                            <img src="<?= base_url() ?>assets/asset_fr/alur-program-pemagangan-ke-jepang-(EN).jpg" alt="">

                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-4 col-10 text-center">
                    <h5><?= $lang['alur_program_kemampuan_khusus']  ?></h5>
                    <div class="icon-bx-wraper service-box style5 shadow fly-box wow fadeInUp">
                        <?php
                        if ($language == "" || $language == "id") {
                        ?>
                            <img src="<?= base_url() ?>assets/asset_fr/ALUR-PROGRAM-TOKUTEI-GINOU-(ID).jpg" alt="">
                        <?php } else if ($language == "jp") { ?>
                            <img src="<?= base_url() ?>assets/asset_fr/ALUR-PROGRAM-TOKUTEI-GINOU-(JP).jpg" alt="">
                        <?php } else if ($language == "en") { ?>
                            <img src="<?= base_url() ?>assets/asset_fr/ALUR-PROGRAM-TOKUTEI-GINOU-(EN).jpg" alt="">

                        <?php } ?>
                    </div>
                </div>

            </div> -->
                <div class="row justify-content-center mb-5">

                    <div class="col-md-8 col-10 text-center">
                        <h3><?= $lang['alur_program_title_description']  ?></h3>
                        <div class="">
                            <?php
                            if ($language == "" || $language == "id") {
                            ?>
                                <img src="<?= base_url() ?>assets/asset_fr/ALUR_PROGRAM_PEMAGANGAN_KE_JEPANG_ID.PNG" alt="">
                            <?php
                            } else if ($language == "jp") { ?>
                                <img src="<?= base_url() ?>assets/asset_fr/ALUR_PROGRAM_PEMAGANGAN_KE_JEPANG_JP.PNG" alt="">
                            <?php
                            } else if ($language == "en") { ?>
                                <img src="<?= base_url() ?>assets/asset_fr/ALUR_PROGRAM_PEMAGANGAN_KE_JEPANG_EN.png" alt="">
                            <?php
                            } ?>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row justify-content-center">

                    <div class="col-md-8 col-10 text-center">
                        <h3><?= $lang['alur_program_kemampuan_khusus']  ?></h3>
                        <div class="">
                            <?php
                            if ($language == "" || $language == "id") {
                            ?>
                                <img src="<?= base_url() ?>assets/asset_fr/ALUR_PROGRAM_TOKUTEI_GINOU_KE_JEPANG_ID.PNG" alt="">
                            <?php
                            } else if ($language == "jp") { ?>
                                <img src="<?= base_url() ?>assets/asset_fr/ALUR_PROGRAM_TOKUTEI_GINOU_KE_JEPANG_JP.PNG" alt="">
                            <?php
                            } else if ($language == "en") { ?>
                                <img src="<?= base_url() ?>assets/asset_fr/ALUR_PROGRAM_TOKUTEI_GINOU_KE_JEPANG_EN.PNG" alt="">

                            <?php
                            } ?>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">

                    <div class="col-10 text-center">
                        <?php
                        if ($language == "" || $language == "id") {
                        ?>
                            <p>* Setelah permintaan diterima, pada dasarnya membutuhkan 6 bulan untuk pengiriman peserta ke Jepang</p>
                        <?php
                        } else if ($language == "jp") {
                        ?>
                            <p>※候補者募集要望をいただいた後、候補者を日本に派遣するまで、基本的6ヶ月かかります。</p>
                        <?php
                        } else if ($language == "en") {
                        ?>
                            <p>* Once the request is received, it basically takes 6 months for participants to be sent to Japan</p>
                        <?php
                        } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- flow end -->

        <!-- Gallery -->
        <div class="section-full content-inner bg-white">
            <div class="container-fluid">
                <div class="section-head style2 text-center">
                    <h2 class="title"><?= $lang['foto_foto_ojt_text'] ?></h2>
                </div>
                <div class="gallery" id="gallery">

                    <?php
                    foreach ($galleries as $g) {
                    ?>
                        <div class="col-12">
                            <div class="content"><img src="<?= base_url($g->url_foto) ?>" alt=""></div>
                        </div>
                    <?php
                    } ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js" integrity="sha512-Y2IiVZeaBwXG1wSV7f13plqlmFOx8MdjuHyYFVoYzhyRr3nH/NMDjTBSswijzADdNzMyWNetbLMfOpIPl6Cv9g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js" integrity="sha512-YibiFIKqwi6sZFfPm5HNHQYemJwFbyyYHjrr3UT+VobMt/YBo1kBxgui5RWc4C3B4RJMYCdCAJkbXHt+irKfSA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });

        var gallery = document.querySelector('#gallery');
        var getVal = function(elem, style) {
            return parseInt(window.getComputedStyle(elem).getPropertyValue(style));
        };
        var getHeight = function(item) {
            return item.querySelector('.content').getBoundingClientRect().height;
        };
        var resizeAll = function() {
            var altura = getVal(gallery, 'grid-auto-rows');
            var gap = getVal(gallery, 'grid-row-gap');
            gallery.querySelectorAll('.gallery-item').forEach(function(item) {
                var el = item;
                el.style.gridRowEnd = "span " + Math.ceil((getHeight(item) + gap) / (altura + gap));
            });
        };
        gallery.querySelectorAll('img').forEach(function(item) {
            item.classList.add('byebye');
            if (item.complete) {
                console.log(item.src);
            } else {
                item.addEventListener('load', function() {
                    var altura = getVal(gallery, 'grid-auto-rows');
                    var gap = getVal(gallery, 'grid-row-gap');
                    var gitem = item.parentElement.parentElement;
                    gitem.style.gridRowEnd = "span " + Math.ceil((getHeight(gitem) + gap) / (altura + gap));
                    item.classList.remove('byebye');
                });
            }
        });
        window.addEventListener('resize', resizeAll);
        gallery.querySelectorAll('.gallery-item').forEach(function(item) {
            item.addEventListener('click', function() {
                item.classList.toggle('full');
            });
        });
    </script>