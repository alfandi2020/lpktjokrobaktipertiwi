<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha512-Velp0ebMKjcd9RiCoaHhLXkR1sFoCCWXNp6w4zj1hfMifYB5441C+sKeBl/T/Ka6NjBiRfBBQRaQq65ekYz3UQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .shape_2 {
        background-color: #00AFEF;
        color: white;
    margin:10px;
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
    font-weight:bold;
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
                                                <a href="blog-single.html"><img
                                                        src="<?= base_url() ?>assets/asset_fr/images/<?= $f->photo ?>" alt=""></a>
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
    <!-- <div class="content-block">
        <div class="section-full content-inner bg-white">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="title"><?= $lang['facility'] ?></h2>
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
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div> -->

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
                <div class="row justify-content-center">
                    <div class="col-md-8 col-10 text-center">
                        <div class="section-head style2 text-center">
                                <h2 class="title">Alur Program YTP</h2>
                        </div>
                        <h5>ALUR PROGRAM PEMAGANGAN KE JEPANG</h5>
                        <img src="<?= base_url() ?>assets/asset_fr/flow1.png" alt="">
                        <!-- <table>
                            <thead>
                                <th>Alur Proses</th>
                                <th>Tempat Proses</th>
                                <th>Waktu</th>
                                <th>Keterangan</th>
                            </thead>
                            <tr>
                                <td><span class="site-button btnhover20">JOB ORDER</span><br><i style="color: black;font-size:40px;" class="fa-solid fa-arrow-down-long"></i></td>
                                <td>YTP</td>
                                <td>2 Minggu</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><span class="site-button btnhover20">INTERVIEW</span><br><i style="color: black;font-size:40px;" class="fa-solid fa-arrow-down-long"></i></td>
                                <td>YTP</td>
                                <td>1 Hari</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row">
                                        <div class="col-xl-3">
                                             <span class="shape_2"><p>MCU</p></P></span><br><i style="color: black;font-size:50px;" class="fa-solid fa-arrow-down-long"></i>
                                        </div>
                                        <div class="col">
                                            <i style="color: black;font-size:50px;" class="fa-solid fa-arrow-turn-down"></i>
                                        </div>
                                    </div>
                                </td>
                                <td>YTP & KLINIK</td>
                                <td>2 Minggu</td>
                                <td></td>
                            </tr>
                             <tr>
                                <td>
                                    <span class="site-button btnhover20 col-5">PEMANTAPAN <br> BAHASA JEPANG</span> <br> <br>
                                    <span class="site-button btnhover20 col-5">ON JOB <br> TRAINING</span><br><br>
                                     <span class="site-button btnhover20 col-5">PENGURUSAN <br> DOKUMEN</span>
                                </td>
                                <td>YTP <br> MTG</td>
                                <td>4 Bulan</td>
                                <td></td>
                            </tr>
                            
                        </table> -->
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
    <!-- Gallery -->
    <!-- <div class="content-block">
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
    </div> -->
            <div class="section-full content-inner bg-white">
				<div class="container-fluid">
					<div class="section-head style2 text-center">
						<h2 class="title">FOTO-FOTO OJT (DI INDONESIA DAN DI JEPANG)</h2>
						<!-- <p>There are many variations of passages of Lorem Ipsum typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p> -->
					</div>
					<div class="blog-carousel owl-none owl-carousel">
                        <?php for ($i = 0; $i < 4; $i++) { ?>
                            <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                                <div class="blog-post post-style-2">
                                    <div class="dlab-post-media dlab-img-effect">
                                        <a href="blog-single.html"><img src="<?= base_url() ?>assets/asset_fr/images/our-work/leather/pic1.jpg" alt=""></a>
                                    </div>
                                    <div class="dlab-post-info">
                                        <div class="dlab-post-meta">
                                            <ul>
                                                <!-- <li class="post-date"> <strong>10 Aug</strong> <span> 2016</span> </li> -->
                                                <!-- <li class="post-author"> By <a href="blog-single.html">demongo</a> </li> -->
                                            </ul>
                                        </div>
                                        <div class="dlab-post-title">
                                            <h4 class="post-title"><a href="blog-single.html">Kegiatan Unggulan</a></h4>
                                        </div>
                                        <div class="dlab-post-readmore">
                                            <a href="<?= base_url() ?>" title="READ MORE" rel="bookmark" class="site-button btnhover21">READ MORE</a>
                                            <!-- <button type="button" class="site-button btnhover21" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            View
                                            </button>
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
						<!-- <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
							<div class="blog-post post-style-2">
								<div class="dlab-post-media dlab-img-effect">
									<a href="blog-single.html"><img src="<?= base_url() ?>assets/asset_fr/images/our-work/leather/pic2.jpg" alt=""></a>
								</div>
								<div class="dlab-post-info">
									<div class="dlab-post-meta">
										<ul>
											<li class="post-date"> <strong>10 Aug</strong> <span> 2016</span> </li>
											<li class="post-author"> By <a href="blog-single.html">AARON</a> </li>
										</ul>
									</div>
									<div class="dlab-post-title ">
										<h4 class="post-title"><a href="blog-single.html">Seven Doubts You Should Clarify About</a></h4>
									</div>
									<div class="dlab-post-readmore">
										<a href="blog-single.html" title="READ MORE" rel="bookmark" class="site-button btnhover21">READ MORE</a>
									</div>
								</div>
							</div>
						</div>
						<div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.9s">
							<div class="blog-post post-style-2">
								<div class="dlab-post-media dlab-img-effect"> 
									<a href="blog-single.html"><img src="<?= base_url() ?>assets/asset_fr/images/our-work/leather/pic3.jpg" alt=""></a>
								</div>
								<div class="dlab-post-info">
									<div class="dlab-post-meta">
										<ul>
											<li class="post-date"> <strong>10 Aug</strong> <span> 2016</span> </li>
											<li class="post-author"> By <a href="blog-single.html">VICTORIA</a> </li>
										</ul>
									</div>
									<div class="dlab-post-title">
										<h4 class="post-title"><a href="blog-single.html">Seven Outrageous Ideas Industry</a></h4>
									</div>
									<div class="dlab-post-readmore">
										<a href="blog-single.html" title="READ MORE" rel="bookmark" class="site-button btnhover21">READ MORE</a>
									</div>
								</div>
							</div>
						</div> -->
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