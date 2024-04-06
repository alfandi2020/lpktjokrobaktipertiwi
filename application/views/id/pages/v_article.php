<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt">
        <div class="container">
            <div class="dlab-bnr-inr-entry mt-5">
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li>
                            <a href="<?= base_url() ?>"><?= $lang['home_text'] ?></a>
                        </li>
                        <li><?= $lang['article_text'] ?></li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->

    <!-- contact area -->
    <div class="content-area">
        <div class="container">
            <!-- Artikel -->
            <?php

            if (!$articles) {
            ?>
                <h3>Content not yet available</h3>
                <?php
            } else {
                foreach ($articles as $a) {
                    $id_author = $a->author;

                    $author = $this->M_Article->author($id_author); ?>

                    <div class="blog-post blog-md clearfix">
                        <div class="dlab-post-media dlab-img-effect zoom-slow">
                            <a href="<?= base_url('article/detail/' . $a->slug) ?>"><img src="<?= base_url('assets/images/articles/' . $a->photo) ?>" alt="" class="w-100 h-50"></a>

                        </div>
                        <div class="dlab-post-info">
                            <div class="dlab-post-meta">
                                <ul>
                                    <li class="post-date"> <strong><?= $lang['format_tanggal']($a->publish_date) ?> </strong></li>
                                    <li class="post-author"> <?= $lang['by_text'] ?> <a href="javascript:void(0);"><?= $author['name'] ?></a> </li>
                                </ul>
                            </div>
                            <div class="dlab-post-title">
                                <h4 class="post-title"><a href="<?= base_url('article/detail/' . $a->slug) ?>"><?= $a->judul ?></a></h4>
                            </div>
                            <div class="dlab-post-text">
                                <p><?= $a->headline ?></p>
                            </div>
                            <div class="dlab-post-readmore" style="margin-left: 0px;">
                                <a href="<?= base_url('article/detail/' . $a->slug) ?>" title="<?= $lang['detail_text'] ?>" rel="bookmark" class="site-button"><?= $lang['detail_text'] ?>
                                    <i class="ti-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
            <!-- Artikel END -->

            <!-- Pagination  -->
            <?= $this->pagination->create_links(); ?>
            <!-- Pagination END -->
        </div>
    </div>
</div>