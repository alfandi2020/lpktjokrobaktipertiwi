<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha512-Velp0ebMKjcd9RiCoaHhLXkR1sFoCCWXNp6w4zj1hfMifYB5441C+sKeBl/T/Ka6NjBiRfBBQRaQq65ekYz3UQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <div class="content-block">
        <!-- Our Services -->
        <div class="section-full content-inner bg-white">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="title"><?= $lang['facility'] ?></h2>
                    <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p> -->
                </div>
                <div class="row">
                    <?php
                    foreach ($facilities as $f) {
                    ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 m-b30 mb-5 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">

                            <img src="<?= base_url() ?>assets/asset_fr/images/<?= $f->photo ?>" alt="" />
                            <div class="icon-bx-wraper bx-style-2 m-l40 p-a30 left bg-gray icon-bx-ho">
                                <div class="icon-bx-sm bg-primary m-b20">
                                    <span class="icon-cell">
                                        <i class="<?= $f->icon ?>"></i>
                                    </span>
                                </div>
                                <div class="icon-content p-l40">
                                    <h5 class="dlab-tilte">
                                        <?= $f->$language ?>
                                    </h5>
                                    <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing sed diam nibh euismod..</p> -->
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
                    foreach ($programs as $p) {
                    ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 m-b30 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
                            <img src="<?= base_url() ?>assets/images/programs/<?= $p->photo ?>" alt="" height="200px" class="" />
                            <div class="icon-bx-wraper bx-style-2 m-l40 p-a30 left bg-gray icon-bx-ho">
                                <div class="icon-bx-sm bg-primary m-b20">
                                    <span class="icon-cell">
                                        <i class="flaticon-robot-arm"></i>
                                    </span>
                                </div>
                                <div class="icon-content p-l40">
                                    <a href="<?= base_url('program/detail/') . $p->slug ?>">
                                        <h5 class="dlab-tilte"><?= $p->nama_program ?></h5>
                                    </a>
                                    <p title="<?= $p->keterangan ?>"><?= substr($p->keterangan, 0, 100) ?>...</p>
                                </div>
                                <div class="dlab-post-readmore">
                                    <a href="<?= base_url('program/detail/' . $p->slug) ?>" title="<?= $lang['detail_text'] ?>" rel="bookmark" class="site-button btnhover20"><?= $lang['detail_text'] ?>...</a>
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
    <!-- contact area END -->
    <!---- flow --->
    <div class="content-block">
        <div class="section-full content-inner bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-10 text-center">
                        <h2>Alur Program YTP</h2>
                        <!-- <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Itaque, repudiandae.
                        </p> -->
                    </div>
                </div>
                <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
                    <!-- <div class="col mt-3">
                        <a href="https://picsum.photos/id/300/1200/768" data-toggle="lightbox" data-caption="Foto 1" data-gallery="mygallery">
                            <img src="https://picsum.photos/id/300/400/533" alt="Foto 1" class="img-fluid w-100 rounded" />
                        </a>
                    </div>
                    <div class="col mt-3">
                        <a href="https://picsum.photos/id/301/1200/768" data-toggle="lightbox" data-gallery="mygallery">
                            <img src="https://picsum.photos/id/301/400/533" alt="Foto 2" class="img-fluid w-100 rounded" />
                        </a>
                    </div>
                    <div class="col mt-3">
                        <a href="https://picsum.photos/id/302/1200/768" data-toggle="lightbox" data-gallery="mygallery">
                            <img src="https://picsum.photos/id/302/400/533" alt="Foto 2" class="img-fluid w-100 rounded" />
                        </a>
                    </div>
                    <div class="col mt-3">
                        <a href="https://picsum.photos/id/304/1200/768" data-toggle="lightbox" data-gallery="mygallery">
                            <img src="https://picsum.photos/id/304/400/533" alt="Foto 2" class="img-fluid w-100 rounded" />
                        </a>
                    </div>
                    <div class="col mt-3">
                        <a href="https://picsum.photos/id/305/1200/768" data-toggle="lightbox" data-gallery="mygallery">
                            <img src="https://picsum.photos/id/305/400/533" alt="Foto 2" class="img-fluid w-100 rounded" />
                        </a>
                    </div>
                    <div class="col mt-3">
                        <a href="https://picsum.photos/id/306/1200/768" data-toggle="lightbox" data-gallery="mygallery">
                            <img src="https://picsum.photos/id/306/400/533" alt="Foto 2" class="img-fluid w-100 rounded" />
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery -->
    <div class="content-block">
        <div class="section-full content-inner bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-10 text-center">
                        <h2>Galeri foto</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Itaque, repudiandae.
                        </p>
                    </div>
                </div>
                <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
                    <div class="col mt-3">
                        <a href="https://picsum.photos/id/300/1200/768" data-toggle="lightbox" data-caption="Foto 1" data-gallery="mygallery">
                            <img src="https://picsum.photos/id/300/400/533" alt="Foto 1" class="img-fluid w-100 rounded" />
                        </a>
                    </div>
                    <div class="col mt-3">
                        <a href="https://picsum.photos/id/301/1200/768" data-toggle="lightbox" data-gallery="mygallery">
                            <img src="https://picsum.photos/id/301/400/533" alt="Foto 2" class="img-fluid w-100 rounded" />
                        </a>
                    </div>
                    <div class="col mt-3">
                        <a href="https://picsum.photos/id/302/1200/768" data-toggle="lightbox" data-gallery="mygallery">
                            <img src="https://picsum.photos/id/302/400/533" alt="Foto 2" class="img-fluid w-100 rounded" />
                        </a>
                    </div>
                    <div class="col mt-3">
                        <a href="https://picsum.photos/id/304/1200/768" data-toggle="lightbox" data-gallery="mygallery">
                            <img src="https://picsum.photos/id/304/400/533" alt="Foto 2" class="img-fluid w-100 rounded" />
                        </a>
                    </div>
                    <div class="col mt-3">
                        <a href="https://picsum.photos/id/305/1200/768" data-toggle="lightbox" data-gallery="mygallery">
                            <img src="https://picsum.photos/id/305/400/533" alt="Foto 2" class="img-fluid w-100 rounded" />
                        </a>
                    </div>
                    <div class="col mt-3">
                        <a href="https://picsum.photos/id/306/1200/768" data-toggle="lightbox" data-gallery="mygallery">
                            <img src="https://picsum.photos/id/306/400/533" alt="Foto 2" class="img-fluid w-100 rounded" />
                        </a>
                    </div>
                </div>
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
</script>