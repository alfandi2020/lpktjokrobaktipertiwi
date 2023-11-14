<link href="http://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h4>Settings </h4>
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
                        <a href="<?= base_url('Settings') ?>">Article</a>
                    </li>
                    <li class="breadcrumb-item">Settings</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header pb-0 card-no-border">
                    <h5>Visi Misi</h5>
                </div>
                <form action="<?= base_url('dash/settings/update_visimisi') ?>" method="post" class="form theme-form dark-input">
                    <div class="card-body">

                        <?= $this->session->flashdata('message_visimisi') ?>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="visi" class="form-label">Visi</label>
                                    <textarea name="visi" id="" cols="30" rows="5" class="form-control"><?= $visi['content'] ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="">
                                    <label for="misi" class="form-label">Misi</label>
                                    <textarea name="misi" id="" cols="30" rows="6" class="form-control"><?= $misi['content'] ?></textarea>
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
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header pb-0 card-no-border">
                    <h5>Videotron</h5>
                </div>
                <form class="form theme-form dark-inputs" method="POST" action="<?= base_url('dash/settings/update_videotron/' . $videotron['Id']) ?>" enctype="multipart/form-data">
                    <div class="card-body">
                        <?= $this->session->flashdata('message_name') ?>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="input_videotron">Videotron</label>
                                    <input type="file" class="form-control input-air-primary" id="input_videotron" name="input_videotron">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="">
                                    <video width="100%" height="100%" loop="true" autoplay="autoplay" muted>
                                        <source src="<?= base_url() ?>assets/asset_fr/video/<?= $videotron['content'] ?>" type="video/mp4" />
                                    </video>
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
    </div>
</div>