<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h4>Program</h4>
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
                    <li class="breadcrumb-item">Program</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid starts-->
<?php
if ($this->uri->segment(3) == "customer") {
    $create = "create_cp";
    $edit = "edit_cp";
} else {
    $create = "create";
    $edit = "edit";
} ?>
<div class="container-fluid">
    <div class="row">
        <!-- Zero Configuration  Starts-->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header card-no-border">
                    <div class="card-header-right">
                        <a href="<?= base_url('dash/program/' . $create) ?>" type="button" class="btn btn-primary">Create new</a>
                    </div>
                </div>

                <!-- <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message_name') ?>"></div> -->
                <div class="card-body">

                    <?= $this->session->flashdata('message_name') ?>
                    <div class="table-responsive">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>
                                    <th>Num.</th>
                                    <th>Judul</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($programs as $p) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?>.</td>
                                        <td><?= $p->nama_program ?></td>
                                        <td>
                                            <a href="<?= base_url('dash/program/' . $edit . '/' . $p->slug) ?>" class="btn btn-primary btn-sm">Edit</a>
                                            <!-- <button class="btn btn-success sweet-8" type="button" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-8']);">Login successfully</button> -->
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
        </div>
    </div>
</div>