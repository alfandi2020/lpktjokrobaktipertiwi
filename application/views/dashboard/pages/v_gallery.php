<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h4>Gallery</h4>
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
                    <li class="breadcrumb-item">Gallery</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 box-col-12">
            <div class="card">
                <div class="card-body ">

                    <?= $this->session->flashdata('message_name') ?>
                    <div class="row justify-content-end">
                        <div class="col-2">
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalCenter1">Tambah foto</button>
                        </div>
                    </div>

                    <?php
                    if ($galleries) { ?>
                        <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
                            <?php
                            foreach ($galleries as $g) {
                            ?>
                                <div class="col mt-3">

                                    <span class="text-center"><?= $g->title ?></span>
                                    <a href="<?= base_url($g->url_foto) ?>" data-toggle="lightbox" data-caption="<?= $g->keterangan ?>" data-gallery="mygallery" data-size="sm">
                                        <img src="<?= base_url($g->url_foto) ?>" alt="<?= $g->keterangan ?>" class="img-fluid w-100 y rounded" />
                                    </a>
                                    <div class="mt-2 text-end">
                                        <a href="<?= base_url('dash/gallery/delete/' . $g->slug) ?>" class="btn btn-danger btn-xs btn-process" id="btnHapus">Hapus</a>
                                    </div>
                                </div>
                            <?php
                            } ?>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="row col-12 text-center mt-3">

                            <h5>Tidak ada galeri yang ditampilkan</h5>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalCenter1" tabindex="-1" aria-labelledby="exampleModalCenter1" style="display: none;" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="<?= base_url('dash/gallery/store') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="modal-toggle-wrapper">
                        <div class="row">
                            <p class="f-m-light mt-1">Diharapkan resolusi gambar yang diinput 900x550 untuk menjaga kerapian tampilan galeri</p>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="gallery_title" class="form-label">Judul foto</label>
                                <input type="text" class="form-control input-air-primary" name="gallery_title" placeholder="Masukkan teks foto" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="gallery_description" class="form-label">Keterangan foto</label>
                                <textarea type="text" class="form-control input-air-primary" name="gallery_description" placeholder="Masukkan keterangan foto" required></textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label class="form-label" for="gallery_image">Foto</label>
                                <input type="file" class="form-control input-air-primary" id="gallery_image" name="gallery_image" value="<?= $this->session->flashdata('gallery_image'); ?>" onchange="previewImage(this);" required>
                                <img id="preview" src="" alt="Image Preview" class="img-fluid mt-3">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-12">
                            <button type="button" class="btn btn-light btn-sm" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary btn-sm">Tambahkan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>
<script>
    function previewImage(input) {
        var preview = document.getElementById('preview');
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<script>
    $(document).ready(function() {
        $(".btn-process").on("click", function(e) {
            e.preventDefault();
            // const form = $(this).parents("form");

            Swal.fire({
                title: "Apakah anda yakin?",
                text: "Pastikan lagi",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                cancelButtonText: "Batal",
                confirmButtonText: "Hapus",
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = document.getElementById('btnHapus').getAttribute('href');
                };
            });
        });
    });
</script>