<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(<?= base_url() ?>assets/images/programs/<?= $program['photo'] ?>);">
        <div class="container">
            <div class="dlab-bnr-inr-entry mt-5">
                <h1 class="text-white mt-5">Program</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="index.html">Home</a></li>
                        <li>Program</li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- contact area -->
    <div class="content-block">
        <div class="container max-w900">
            <!-- blog start -->
            <div class="blog-post blog-single mt-5">
                <!-- <div class="dlab-post-meta m-b20">
                    <ul>
                        <li class="post-date"> <strong><?= format_indo($article['publish_date']) ?></span> </li>
                        <li class="post-author"> Oleh <a href="javascript:void(0);"><?= $author['name'] ?></a> </li>
                    </ul>
                </div> -->
                <div class="dlab-post-title">
                    <h4 class="post-title m-t0"><a href="blog-single.html"><?= $program['nama_program'] ?></a></h4>
                </div>
                <div class="dlab-post-media dlab-img-effect zoom-slow">
                    <a href="blog-single.html">
                        <img src="<?= base_url() ?>assets/images/programs/<?= $program['photo'] ?>" alt="">
                    </a>
                </div>
                <div class="dlab-post-text">
                    <blockquote><?= $program['keterangan'] ?></blockquote>
                    <blockquote><?= $program['content'] ?></blockquote>
                </div>
                <div class="dlab-post-tags clear">
                    <!-- <div class="post-tags"> <a href="javascript:void(0);">Child </a> <a href="javascript:void(0);">Eduction </a> <a href="javascript:void(0);">Money </a> <a href="javascript:void(0);">Resturent </a> </div> -->
                </div>
            </div>
            <!-- blog END -->
        </div>
    </div>
</div>