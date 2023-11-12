<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(<?= base_url() ?>assets/images/articles/<?= $article['photo'] ?>);">
        <div class="container">
            <div class="dlab-bnr-inr-entry mt-5">
                <h1 class="text-white mt-5">Article</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="index.html">Home</a></li>
                        <li>Article</li>
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
                <div class="dlab-post-meta m-b20">
                    <ul>
                        <li class="post-date"> <strong><?= format_indo($article['publish_date']) ?></span> </li>
                        <li class="post-author"> By <a href="javascript:void(0);">Harry</a> </li>
                    </ul>
                </div>
                <div class="dlab-post-title">
                    <h4 class="post-title m-t0"><a href="blog-single.html"><?= $article['judul'] ?></a></h4>
                </div>
                <div class="dlab-post-media dlab-img-effect zoom-slow">
                    <a href="blog-single.html">
                        <img src="<?= base_url() ?>assets/images/articles/<?= $article['photo'] ?>" alt="">
                    </a>
                </div>
                <div class="dlab-post-text">
                    <?= $article['content'] ?>
                </div>
                <div class="dlab-post-tags clear">
                    <div class="post-tags"> <a href="javascript:void(0);">Child </a> <a href="javascript:void(0);">Eduction </a> <a href="javascript:void(0);">Money </a> <a href="javascript:void(0);">Resturent </a> </div>
                </div>
            </div>
            <!-- blog END -->
        </div>
    </div>
</div>