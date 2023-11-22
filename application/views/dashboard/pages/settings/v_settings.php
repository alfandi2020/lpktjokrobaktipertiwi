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
                                    <textarea name="visi" id="" cols="30" rows="5" class="form-control"><?= $visi['content_id'] ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="">
                                    <label for="misi" class="form-label">Misi</label>
                                    <textarea name="misi" id="" cols="30" rows="6" class="form-control"><?= $misi['content_id'] ?></textarea>
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
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header pb-0 card-no-border">
                    <h5>Kategori konten</h5>
                </div>
                <form action="<?= base_url('dash/settings/add_category') ?>" method="post" class="form theme-form dark-input">
                    <div class="card-body">

                        <?= $this->session->flashdata('message_category') ?>
                        <div class="row">
                            <div class="col">
                                <!-- <div class=""> -->
                                <label for="category" class="form-label">Category</label>
                                <div class="input-group">
                                    <input class="form-control input-air-primary" type="text" placeholder="Article category" aria-label="Article category" aria-describedby="button-addon2" name="category_name">
                                    <button class="btn btn-primary" id="button-addon2" type="submit">Submit</button>
                                </div>
                                <!-- <input type="text" class="form-control input-air-primary" name="category_name"> -->
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Act.</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($categories as $c) {
                                        ?>
                                            <tr>
                                                <td><?= $no++; ?>.</td>
                                                <td><?= $c->category_name ?></td>
                                                <td>
                                                    <button class="btn btn-primary btn-sm">
                                                        Edit
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header pb-0 card-no-border">
                    <h5>Kontak</h5>
                </div>
                <form action="<?= base_url('dash/settings/update_contact') ?>" method="post" class="form theme-form dark-input">
                    <div class="card-body">

                        <?= $this->session->flashdata('message_contact') ?>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea name="alamat" id="" cols="30" rows="5" class="form-control"><?= $alamat['content_id'] ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="telepon" class="form-label">Telepon</label>
                                    <input type="hidden" id="hiddenInput" name="telepon" value='<?= $telepon['content_id'] ?>' class="form-control input-air-primary">
                                    <div id="input_telepon" style="min-height: 160px;"><?= $telepon['content_id'] ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="">
                                    <label for="email" class="form-label">Email</label>
                                    <!-- <textarea name="email" id="" cols="30" rows="6" class="form-control"><?= $email['content_id'] ?></textarea> -->
                                    <input type="hidden" id="hiddenInput" name="email" value='<?= $email['content_id'] ?>' class="form-control input-air-primary">
                                    <div id="input_email" style="min-height: 160px;"><?= $email['content_id'] ?></div>
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


<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    var quill = new Quill('#input_telepon', {
        theme: 'snow',
    });
    quill.on('text-change', function(delta, oldDelta, source) {
        document.querySelector("input[name='telepon']").value = quill.root.innerHTML;
    });

    document.getElementById('telepon').addEventListener('input', function() {
        var content = this.innerHTML;
        document.getElementById('hiddenInput').value = content;
    });
</script>
<script>
    var quill = new Quill('#input_email', {
        theme: 'snow',
    });
    quill.on('text-change', function(delta, oldDelta, source) {
        document.querySelector("input[name='email']").value = quill.root.innerHTML;
    });

    document.getElementById('email').addEventListener('input', function() {
        var content = this.innerHTML;
        document.getElementById('hiddenInput').value = content;
    });
</script>