<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt">
        <div class="container">
            <div class="dlab-bnr-inr-entry mt-5">
                <h1 class="text-white mt-5"><?= $lang['about_text'] ?></h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline mt-4">
                        <li><a href="index.html"><?= $lang['home_text'] ?></a></li>
                        <li><?= $lang['about_text'] ?></li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- contact area -->
    <div class="content-block">
        <!-- About Us -->
        <div class="section-full content-inner bg-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 m-b30">
                        <div class="our-story">
                            <span><?= $lang['visimisi_text'] ?></span>
                            <h2 class="title"><?= $visi['judul_setting'] ?></h2>
                            <p><?= $visi['content'] ?></p>
                            <h2 class="title"><?= $misi['judul_setting'] ?></h2>
                            <p><?= $misi['content'] ?></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 m-b30 our-story-thum">
                        <img src="<?= base_url() ?>assets/asset_fr/images/log.png" class="radius-sm" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- About Us End -->
        <!-- Abouts -->
        <div class="section-full box-about-list">
            <div class="row spno">
                <div class="col-lg-6 col-md-12">
                    <img style="margin-left:100px;" src="<?= base_url() ?>assets/asset_fr/images/log2.png" alt="" />
                </div>
                <div class="col-lg-6 col-md-12 bg-primary">
                    <div class="max-w700 m-auto p-tb50 p-lr20">
                        <div class="text-white">
                            <h2><?= $lang['programkami_text'] ?></h2>
                        </div>
                        <?php
                        foreach ($programs as $p) {
                        ?>
                            <div class="icon-bx-wraper m-b30 left">
                                <div class="icon-md">
                                    <a href="javascript:void(0);" class="icon-cell text-white">
                                        <i class="flaticon-factory"></i>
                                    </a>
                                </div>
                                <div class="icon-content">
                                    <h4 class="dlab-tilte"><?= $p->nama_program ?></h4>
                                    <p><?= $p->keterangan ?></p>
                                    <a href="<?= base_url('program/detail/' . $p->slug) ?>" class="btn btn-primary"><?= $lang['detail_text'] ?>...</a>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Abouts END -->
        <!-- Our Services -->
        <!-- <div class="section-full bg-gray content-inner">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="title"> Our Services</h2>
                    <p>There are many variations of passages of Lorem Ipsum typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
                <div class="section-content row">
                    <div class="col-xl-4 col-md-6 col-sm-12 service-box style3">
                        <div class="icon-bx-wraper" data-name="01">
                            <div class="icon-lg">
                                <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-robot-arm"></i></a>
                            </div>
                            <div class="icon-content">
                                <h2 class="dlab-tilte">Mechanical Works</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12 service-box style3">
                        <div class="icon-bx-wraper" data-name="02">
                            <div class="icon-lg">
                                <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-factory-1"></i></a>
                            </div>
                            <div class="icon-content">
                                <h2 class="dlab-tilte">Power & Energy</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12 service-box style3">
                        <div class="icon-bx-wraper" data-name="03">
                            <div class="icon-lg">
                                <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-fuel-station"></i></a>
                            </div>
                            <div class="icon-content">
                                <h2 class="dlab-tilte">Petroleum Refinery</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12 service-box style3">
                        <div class="icon-bx-wraper" data-name="04">
                            <div class="icon-lg">
                                <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-fuel-truck"></i></a>
                            </div>
                            <div class="icon-content">
                                <h2 class="dlab-tilte">Oil & Gas Industry</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12 service-box style3">
                        <div class="icon-bx-wraper" data-name="05">
                            <div class="icon-lg">
                                <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-conveyor-1"></i></a>
                            </div>
                            <div class="icon-content">
                                <h2 class="dlab-tilte">Automative Manufacturing</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12 service-box style3">
                        <div class="icon-bx-wraper" data-name="06">
                            <div class="icon-lg">
                                <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-engineer-1"></i></a>
                            </div>
                            <div class="icon-content">
                                <h2 class="dlab-tilte">Chemical Research</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Our Services End -->
        <!-- About progress -->
        <!-- <div class="section-full about-progress">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7 col-md-12 bg-white">
                        <div class="max-w700  m-auto content-inner">
                            <div class="section-head">
                                <h2 class="title">We provide the exceptional service we'd want to experience ourselves</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>
                            </div>
                            <div class="about-progress-box">
                                <h6 class="text-primary">Web Development<span class="progress-num pull-right">85%</span></h6>
                                <div class="about-progress-bar bg-gray-dark">
                                    <div class="about-progress bg-primary wow slideInLeft" data-wow-delay="0.2s" data-wow-duration="2s" style="width: 85%;"></div>
                                </div>
                            </div>
                            <div class="about-progress-box">
                                <h6 class="text-primary">Web Designer<span class="progress-num pull-right">80%</span></h6>
                                <div class="about-progress-bar bg-gray-dark">
                                    <div class="about-progress bg-primary wow slideInLeft" data-wow-delay="0.4s" data-wow-duration="2s" style="width: 80%;"></div>
                                </div>
                            </div>
                            <div class="about-progress-box">
                                <h6 class="text-primary">Performance<span class="progress-num pull-right">75%</span></h6>
                                <div class="about-progress-bar bg-gray-dark">
                                    <div class="about-progress bg-primary wow slideInLeft" data-wow-delay="0.6s" data-wow-duration="2s" style="width: 75%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 p-a0">
                        <img src="<?= base_url() ?>assets/asset_fr/images/about/pic5.jpg" alt="" class="img-cover " />
                    </div>
                </div>
            </div>
        </div> -->
        <!-- About progress END -->
    </div>
</div>