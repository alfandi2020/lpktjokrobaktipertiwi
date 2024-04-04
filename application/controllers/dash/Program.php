<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Program extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('string');
        $this->load->helper('date');
        $this->load->model('M_Auth');
        $this->load->model('M_Program');

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
            'title' => 'Program',
            'pages' => 'dashboard/pages/program/v_program',
            'programs' => $this->M_Program->list_dashboard('program'),
            'user' => $this->M_Auth->cek_user($this->session->userdata('username'))
        ];
        $this->load->view('dashboard/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add Program',
            'pages' => 'dashboard/pages/program/v_create',
            'user' => $this->M_Auth->cek_user($this->session->userdata('username'))
        ];
        $this->load->view('dashboard/index', $data);
    }

    public function create_cp()
    {
        $data = [
            'title' => 'Add Program',
            'pages' => 'dashboard/pages/program/v_create',
            'user' => $this->M_Auth->cek_user($this->session->userdata('username'))
        ];
        $this->load->view('dashboard/index', $data);
    }

    public function store()
    {
        $user_id = $this->session->userdata('user_id');
        $nama_program_id = trim($this->input->post('nama_program_id'));
        $nama_program_en = trim($this->input->post('nama_program_en'));
        $nama_program_jp = trim($this->input->post('nama_program_jp'));

        // pembuatan slug dari nama produk
        $out = explode(" ", $nama_program_id);
        $slug = preg_replace("/[^A-Za-z0-9\-]/", "", strtolower(implode("-", $out)));

        $now = date('Y-m-d H:i:s');

        $old_slug = $this->uri->segment(4);

        if ($old_slug) {

            $data = [
                'nama_program_id' => $nama_program_id,
                'nama_program_en' => $nama_program_en,
                'nama_program_jp' => $nama_program_jp,
                'keterangan_id' => trim($this->input->post('keterangan_program_id')),
                'keterangan_en' => trim($this->input->post('keterangan_program_en')),
                'keterangan_jp' => trim($this->input->post('keterangan_program_jp')),
                'content_id' => trim($this->input->post('content_id')),
                'content_en' => trim($this->input->post('content_en')),
                'content_jp' => trim($this->input->post('content_jp')),
                'slug' => trim($slug),
                'updated_at' => $now,
                'updated_by' => $user_id
            ];

            $this->M_Program->update_program($data, $old_slug);

            $this->session->set_flashdata('message_name', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            The program updated successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            // After that you need to used redirect function instead of load view such as 
            redirect("dash/program/customer");
        } else {

            $photo = $_FILES['program_photo']['name']; // Nama file 

            // Mendapatkan extension
            $pathInfo = pathinfo($photo);
            $extension = $pathInfo['extension']; // Extension file
            $newPhotoFileName = $slug . '.' . $extension;

            $data = [
                'nama_program_id' => $nama_program_id,
                'nama_program_en' => $nama_program_en,
                'nama_program_jp' => $nama_program_jp,
                'keterangan_id' => trim($this->input->post('keterangan_program_id')),
                'keterangan_en' => trim($this->input->post('keterangan_program_en')),
                'keterangan_jp' => trim($this->input->post('keterangan_program_jp')),
                'content_id' => trim($this->input->post('content_id')),
                'content_en' => trim($this->input->post('content_en')),
                'content_jp' => trim($this->input->post('content_jp')),
                'photo' => $newPhotoFileName,
                'slug' => trim($slug),
                'created_at' => $now,
                'created_by' => $user_id,
            ];
            // echo '<pre>';
            // print_r($data);
            // echo '</pre>';
            // exit;
            $this->db->select('count(Id) as id');
            $this->db->where('slug', $data["slug"]);
            $query_check1 = $this->db->get('program')->row_array();
            $query_check2 = $this->db->get('program_customers')->row_array();

            $hasil1 = $query_check1["id"];
            $hasil2 = $query_check2["id"];

            if ($hasil1 > 0 || $hasil2 > 0) {
                $this->session->set_flashdata('message_name', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                The program is already available.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
                redirect('dash/program/create');
            } else {

                $config = array(
                    'upload_path' => 'assets/images/programs/',
                    'allowed_types' => "gif|jpg|png|jpeg|JPEG|JPG|PNG|GIF",
                    'overwrite' => TRUE,
                    'max_size' => "99999999999",
                    'max_height' => "3000",
                    'max_width' => "2500",
                    'file_name' => $data["photo"]
                );

                // var_dump($config);exit;
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('program_photo')) {
                    $error = array('error' => $this->upload->display_errors());

                    $this->session->set_flashdata('message_name', '<div class="alert alert-danger fade show" role="alert">
                    Error message: ' . $this->upload->display_errors() . '.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>');
                    // After that you need to used redirect function instead of load view such as 
                    redirect("dash/program/create", $error);
                } else {

                    $this->M_Program->add_program($data);

                    $this->session->set_flashdata('message_name', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    The program inserted successfully.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>');
                    // After that you need to used redirect function instead of load view such as 
                    redirect("dash/program/create");
                }
            }
        }
    }

    public function store_cp()
    {
        $user_id = $this->session->userdata('user_id');
        $nama_program_id = trim($this->input->post('nama_program_id'));
        $nama_program_en = trim($this->input->post('nama_program_en'));
        $nama_program_jp = trim($this->input->post('nama_program_jp'));

        // pembuatan slug dari nama produk
        $out = explode(" ", $nama_program_id);
        $slug = preg_replace("/[^A-Za-z0-9\-]/", "", strtolower(implode("-", $out)));

        $now = date('Y-m-d H:i:s');

        $old_slug = $this->uri->segment(4);

        if ($old_slug) {

            $data = [
                'nama_program_id' => $nama_program_id,
                'nama_program_en' => $nama_program_en,
                'nama_program_jp' => $nama_program_jp,
                'keterangan_id' => trim($this->input->post('keterangan_program_id')),
                'keterangan_en' => trim($this->input->post('keterangan_program_en')),
                'keterangan_jp' => trim($this->input->post('keterangan_program_jp')),
                'content_id' => trim($this->input->post('content_id')),
                'content_en' => trim($this->input->post('content_en')),
                'content_jp' => trim($this->input->post('content_jp')),
                'slug' => trim($slug),
                'updated_at' => $now,
                'updated_by' => $user_id
            ];

            $this->M_Program->update_program($data, $old_slug);

            $this->session->set_flashdata('message_name', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            The program updated successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            // After that you need to used redirect function instead of load view such as 
            redirect("dash/program/customer");
        } else {

            $photo = $_FILES['program_photo']['name']; // Nama file 

            // Mendapatkan extension
            $pathInfo = pathinfo($photo);
            $extension = $pathInfo['extension']; // Extension file
            $newPhotoFileName = $slug . '.' . $extension;

            $data = [
                'nama_program_id' => $nama_program_id,
                'nama_program_en' => $nama_program_en,
                'nama_program_jp' => $nama_program_jp,
                'keterangan_id' => trim($this->input->post('keterangan_program_id')),
                'keterangan_en' => trim($this->input->post('keterangan_program_en')),
                'keterangan_jp' => trim($this->input->post('keterangan_program_jp')),
                'content_id' => trim($this->input->post('content_id')),
                'content_en' => trim($this->input->post('content_en')),
                'content_jp' => trim($this->input->post('content_jp')),
                'photo' => $newPhotoFileName,
                'slug' => trim($slug),
                'created_at' => $now,
                'created_by' => $user_id,
            ];
            // echo '<pre>';
            // print_r($data);
            // echo '</pre>';
            // exit;
            $this->db->select('count(Id) as id');
            $this->db->where('slug', $data["slug"]);
            $query_check1 = $this->db->get('program')->row_array();
            $query_check2 = $this->db->get('program_customers')->row_array();

            $hasil1 = $query_check1["id"];
            $hasil2 = $query_check2["id"];

            if ($hasil1 > 0 || $hasil2 > 0) {
                $this->session->set_flashdata('message_name', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                The program is already available.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
                redirect('dash/program/create_cp');
            } else {

                $config = array(
                    'upload_path' => 'assets/images/programs/',
                    'allowed_types' => "gif|jpg|png|jpeg|JPEG|JPG|PNG|GIF",
                    'overwrite' => TRUE,
                    'max_size' => "99999999999",
                    'max_height' => "3000",
                    'max_width' => "2500",
                    'file_name' => $data["photo"]
                );

                // var_dump($config);exit;
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('program_photo')) {
                    $error = array('error' => $this->upload->display_errors());

                    $this->session->set_flashdata('message_name', '<div class="alert alert-danger fade show" role="alert">
                    Error message: ' . $this->upload->display_errors() . '.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>');
                    // After that you need to used redirect function instead of load view such as 
                    redirect("dash/program/create_cp", $error);
                } else {

                    $this->M_Program->add_program($data);

                    $this->session->set_flashdata('message_name', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    The program inserted successfully.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>');
                    // After that you need to used redirect function instead of load view such as 
                    redirect("dash/program/create_cp");
                }
            }
        }
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit program',
            'pages' => 'dashboard/pages/program/v_create',
            'program' => $this->M_Program->detail_program_edit($id, 'program'),
            'user' => $this->M_Auth->cek_user($this->session->userdata('username'))
        ];

        $this->load->view('dashboard/index', $data);
    }

    public function edit_cp($id)
    {
        $data = [
            'title' => 'Edit program',
            'pages' => 'dashboard/pages/program/v_create',
            'program' => $this->M_Program->detail_program_edit($id, 'program_customers'),
            'user' => $this->M_Auth->cek_user($this->session->userdata('username')),
        ];

        $this->load->view('dashboard/index', $data);
    }

    public function customer()
    {
        $data = [
            'title' => 'Program',
            'pages' => 'dashboard/pages/program/v_program',
            'programs' => $this->M_Program->list_dashboard('program_customers'),
            'user' => $this->M_Auth->cek_user($this->session->userdata('username'))
        ];
        $this->load->view('dashboard/index', $data);
    }


    public function update_photo($slug)
    {
        $user_id = $this->session->userdata('user_id');

        $cek = $this->M_Program->is_available($slug, 'program');

        $foto = $cek["photo"];
        $path = "assets/images/programs/" . $foto;

        if (file_exists($path)) {
            unlink($path);
        }

        $now = date('Y-m-d H:i:s');

        $photo = $_FILES['program_photo']['name']; // Nama file 
        // Mendapatkan extension
        $pathInfo = pathinfo($photo);
        $extension = $pathInfo['extension']; // Extension file
        $newPhotoFileName = $slug . '.' . $extension;

        $config = array(
            'upload_path' => 'assets/images/programs/',
            'allowed_types' => "gif|jpg|png|jpeg|JPEG|JPG|PNG|GIF|WEBP",
            'overwrite' => TRUE,
            'max_size' => "99999999999",
            'max_height' => '2000',
            'max_width' => '2500',
            'file_name' => $newPhotoFileName
        );

        // var_dump($config);exit;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('program_photo')) {
            $error = array('error' => $this->upload->display_errors());

            $this->session->set_flashdata('message_error', 'Error message: ' . $this->upload->display_errors());

            // After that you need to used redirect function instead of load view such as 
            redirect($_SERVER['HTTP_REFERER'], $error);
        } else {

            $data = array(
                'photo' => $newPhotoFileName,
                'updated_at' => $now,
                'updated_by' => $user_id
            );

            $this->M_Program->update_photo($data, $slug, 'program');

            $this->session->set_flashdata('message_name', 'The photo has been successfully modified.');
            // After that you need to used redirect function instead of load view such as 

            redirect('dash/program/edit/' . $slug);
        }
    }

    public function update_photo_cp($slug)
    {
        $user_id = $this->session->userdata('user_id');

        $cek = $this->M_Program->is_available($slug, 'program_customers');

        $foto = $cek["photo"];
        $path = "assets/images/programs/" . $foto;

        if (file_exists($path)) {
            unlink($path);
        }

        $now = date('Y-m-d H:i:s');

        $photo = $_FILES['program_photo']['name']; // Nama file 
        // Mendapatkan extension
        $pathInfo = pathinfo($photo);
        $extension = $pathInfo['extension']; // Extension file
        $newPhotoFileName = $slug . '.' . $extension;

        $config = array(
            'upload_path' => 'assets/images/programs/',
            'allowed_types' => "gif|jpg|png|jpeg|JPEG|JPG|PNG|GIF|WEBP",
            'overwrite' => TRUE,
            'max_size' => "99999999999",
            'max_height' => '2000',
            'max_width' => '2500',
            'file_name' => $newPhotoFileName
        );

        // var_dump($config);exit;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('program_photo')) {
            $error = array('error' => $this->upload->display_errors());

            $this->session->set_flashdata('message_error', 'Error message: ' . $this->upload->display_errors());

            // After that you need to used redirect function instead of load view such as 
            redirect($_SERVER['HTTP_REFERER'], $error);
        } else {

            $data = array(
                'photo' => $newPhotoFileName,
                'updated_at' => $now,
                'updated_by' => $user_id
            );

            $this->M_Program->update_photo($data, $slug, 'program_customers');

            $this->session->set_flashdata('message_name', 'The photo has been successfully modified.');
            // After that you need to used redirect function instead of load view such as 

            redirect('dash/program/edit_cp/' . $slug);
        }
    }
}
