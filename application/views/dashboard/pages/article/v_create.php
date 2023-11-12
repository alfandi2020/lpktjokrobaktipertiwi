<link href="http://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h4>Article </h4>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?= base_url() ?>">
                            <svg class="stroke-icon">
                                <use href="<?= base_url() ?>assets/svg/icon-sprite.svg#stroke-home"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?= base_url('article') ?>">Article</a>
                    </li>
                    <li class="breadcrumb-item">Create</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <?php
        if ($this->uri->segment(4) == true) {
        ?>
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <h5>Edit article</h5>
                    </div>
                    <form class="form theme-form dark-inputs" method="POST" action="<?= base_url('dash/article/store/' . $article['slug']) ?>">
                        <div class="card-body">
                            <?= $this->session->flashdata('message_name') ?>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="article_title">Title</label>
                                        <input class="form-control input-air-primary" id="article_title" name="article_title" type="text" placeholder="Enter title of article" value="<?= $article['judul'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="article_headline">Headline</label>
                                        <textarea class="form-control input-air-primary" id="article_headline" name="article_headline" name="article_title" rows="2" placeholder="Enter headline of article"><?= $article['headline'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="article_category" class="form-label">Category</label>
                                        <select class="form-select input-air-primary digits" id="article_category" name="article_category">
                                            <option <?php if ($article['id_category'] == "1") echo "selected"; ?> value="1">Tivo</option>
                                            <option <?php if ($article['id_category'] == "2") echo "selected"; ?> value="2">Roxo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="article_publish_date" class="form-label">Publish date</label>
                                        <input type="date" name="article_publish_date" id="article_publish_date" class="form-control input-air-primary" value="<?= $article['publish_date'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="article_content">Content</label>
                                        <input type="hidden" id="hiddenInput" name="content" value='<?= $article['content'] ?>'>
                                        <div id="article_content" style="min-height: 160px;"><?= $article['content'] ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary me-3" type="submit">Update</button>
                            <input class="btn btn-light" type="reset" value="Cancel">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <h5>Article photo</h5>
                    </div>
                    <form class="form theme-form dark-inputs" method="POST" action="<?= base_url('dash/article/update_photo' . $article['slug']) ?>" enctype="multipart/form-data">
                        <div class="card-body">
                            <?= $this->session->flashdata('message_name') ?>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="article_photo">Photo</label>
                                        <input type="file" class="form-control input-air-primary" id="article_photo" name="article_photo">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <img class="img-fluid top-radius-blog" src="<?= base_url('assets/images/articles/' . $article['photo']) ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary me-3" type="submit">Update</button>
                            <input class="btn btn-light" type="reset" value="Cancel">
                        </div>
                    </form>
                </div>
            </div>
        <?php
        } else {
        ?>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <h5>Create new article</h5>
                    </div>
                    <form class="form theme-form dark-inputs" method="POST" action="<?= base_url('dash/article/store') ?>" enctype="multipart/form-data">
                        <div class="card-body">
                            <?= $this->session->flashdata('message_name')  ?>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="article_title">Title</label>
                                        <input class="form-control input-air-primary" id="article_title" name="article_title" type="text" placeholder="Enter title of article">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="article_headline">Headline</label>
                                        <textarea class="form-control input-air-primary" id="article_headline" name="article_headline" name="article_title" rows="2" placeholder="Enter headline of article"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="article_category" class="form-label">Category</label>
                                        <select class="form-select input-air-primary digits" id="article_category" name="article_category">
                                            <option value="1">Tivo</option>
                                            <option value="2">Roxo</option>
                                            <option value="3">Wingo</option>
                                            <option value="4">Cuba</option>
                                            <option value="5">Koho</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="article_publish_date" class="form-label">Publish date</label>
                                        <input type="date" name="article_publish_date" id="article_publish_date" class="form-control input-air-primary">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="article_photo">Photo</label>
                                        <input type="file" class="form-control input-air-primary" id="article_photo" name="article_photo">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="article_content">Content</label>
                                        <input type="hidden" id="hiddenInput" name="content">
                                        <div id="article_content" style="min-height: 160px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary me-3" type="submit">Submit</button>
                            <input class="btn btn-light" type="reset" value="Cancel">
                        </div>
                    </form>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
</div>

<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    var quill = new Quill('#article_content', {
        theme: 'snow',
        modules: {
            toolbar: [
                [{
                    header: [1, 2, 3, 4, 5, 6, false]
                }],
                [{
                    font: []
                }],
                ["bold", "italic"],
                ["link", "blockquote", "code-block", "image"],
                [{
                    list: "ordered"
                }, {
                    list: "bullet"
                }],
                [{
                    script: "sub"
                }, {
                    script: "super"
                }],
                [{
                    color: []
                }, {
                    background: []
                }],
            ]
        },
    });
    quill.on('text-change', function(delta, oldDelta, source) {
        document.querySelector("input[name='content']").value = quill.root.innerHTML;
    });
</script>
<script>
    document.getElementById('article_content').addEventListener('input', function() {
        var content = this.innerHTML;
        document.getElementById('hiddenInput').value = content;
    });
</script>