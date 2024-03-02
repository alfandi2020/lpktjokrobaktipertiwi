<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(['string', 'date']);
        $this->load->model(['M_Auth', 'M_Gallery']);

        if (!$this->session->userdata('is_logged_in')) {
            $this->session->set_flashdata('message_name', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			You have to login first.
			<button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
			</div>');
            redirect('auth');
        } else {
            if ($this->session->userdata('role_id') == "2") {
                redirect('/');
            }
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Gallery',
            'pages' => 'dashboard/pages/v_gallery',
            'galleries' => $this->M_Gallery->list_dashboard(),
            'user' => $this->M_Auth->cek_user($this->session->userdata('username'))
        ];

        $this->load->view('dashboard/index', $data);
    }

    public function store()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // exit;

        $user_id = $this->session->userdata('user_id');
        $title = trim($this->input->post('gallery_title'));

        // pembuatan slug dari teks foto
        $slug = url_title($title, 'dash', true);

        $cek = $this->M_Gallery->detail($slug);

        if ($cek) {
            $this->session->set_flashdata('message_name', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Gagal unggah foto. Pesan eror: Sudah ada gambar dengan judul ' . $title . ' sebelumnya.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
            // After that you need to used redirect function instead of load view such as 
            redirect($_SERVER['HTTP_REFERER']);
        }

        $now = date('Y-m-d H:i:s');

        $photo = $_FILES['gallery_image']['name'];
        $path_info = pathinfo($photo);
        $extension = $path_info['extension'];
        $new_photo_file_name = $slug . '.' . $extension;
        $path = 'assets/asset_fr/images/gallery/';

        $config = [
            'upload_path' => $path,
            'allowed_types' => 'jpeg|jpg|JPEG|JPG|PNG|png',
            'overwrite' => TRUE,
            'max_size' => '99999999999',
            'max_height' => '3000',
            'max_width' => '3000',
            'file_name' => $new_photo_file_name,
        ];

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gallery_image')) {
            $error = $this->upload->display_errors();

            $this->session->set_flashdata('message_name', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Gagal unggah foto. Pesan eror: ' . $error  . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
            // After that you need to used redirect function instead of load view such as 
            redirect($_SERVER['HTTP_REFERER'], $error);
        } else {
            $data = [
                'title' => $title,
                'keterangan' => trim($this->input->post('gallery_description')),
                'url_foto' => $path . $new_photo_file_name,
                'created_by' => $user_id,
                'date_created' => $now,
                'slug' => trim($slug),
            ];

            if ($this->M_Gallery->add_image($data)) {
                $this->session->set_flashdata('message_name', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Berhasil unggah foto.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>');
                // After that you need to used redirect function instead of load view such as 
                redirect("dash/gallery");
            } else {
            }
        }
    }

    public function delete()
    {
        $slug = $this->uri->segment(4);

        $detail = $this->M_Gallery->detail($slug);

        $path = $detail['url_foto'];

        if (file_exists($path)) {
            unlink($path);
        }
        $this->M_Gallery->delete($slug);

        $this->session->set_flashdata('message_name', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Foto berhasil dihapus.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        // After that you need to used redirect function instead of load view such as 
        redirect("dash/gallery");
    }
}
