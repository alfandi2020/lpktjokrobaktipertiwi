<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt">
        <div class="container">
            <div class="dlab-bnr-inr-entry mt-5">
                <h1 class="text-white mt-5"><?= $lang['about_text'] ?></h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline mt-5">
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
    </div>
</div>