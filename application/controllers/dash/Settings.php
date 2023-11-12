<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Settings extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('string');
        $this->load->helper('date');
        $this->load->model('M_Auth');
        $this->load->model('M_Setting');

        if (!$this->session->userdata('is_logged_in')) {

            $this->session->set_flashdata('message_name', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			You have to login first.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
            redirect('auth');
        } else {
            if ($this->session->userdata('role_id') == "2") {
                redirect('/');
            }
        }
    }

    public function videotron()
    {
        $data = [
            'title' => 'Videotron',
            'pages' => 'dashboard/pages/settings/v_videotron',
            'videotron' => $this->M_Setting->videotron(),
            'user' => $this->M_Auth->cek_user($this->session->userdata('username'))
        ];
        $this->load->view('dashboard/index', $data);
    }

    public function update_videotron($id)
    {

        $now = date('Y-m-d H:i:s');

        $data = array(
            'nama_video' => $_FILES["input_videotron"]["name"],
            'updated_at' => $now
        );

        // var_dump($data, $id);
        // exit;

        $this->M_Setting->update_videotron($data, $id);
    }

    public function create()
    {
        $data = [
            'title' => 'Create Article',
            'pages' => 'dashboard/pages/article/v_create',
            'user' => $this->M_Auth->cek_user($this->session->userdata('username'))
        ];
        $this->load->view('dashboard/index', $data);
    }

    public function store()
    {
        $user_id = $this->session->userdata('user_id');
        $article_title = trim($this->input->post('article_title'));

        // pembuatan slug dari nama produk
        $out = explode(" ", $article_title);
        $slug = preg_replace("/[^A-Za-z0-9\-]/", "", strtolower(implode("-", $out)));

        $now = date('Y-m-d H:i:s');

        $old_slug = $this->uri->segment(4);

        if ($old_slug) {

            $data = [
                'id_category' => $this->input->post('article_category'),
                'judul' => $article_title,
                'headline' => trim($this->input->post('article_headline')),
                'content' => trim($this->input->post('content')),
                'author' => $user_id,
                'publish_date' => $this->input->post('article_publish_date'),
                'slug' => trim($slug),
                'updated_at' => $now,
                'updated_by' => $user_id
            ];
            // echo '<pre>';
            // print_r($data);
            // echo '</pre>';
            // exit;

            $this->M_Article->update_article($data, $old_slug);
        } else {
            $data = [
                'id_category' => $this->input->post('article_category'),
                'judul' => $article_title,
                'headline' => trim($this->input->post('article_headline')),
                'content' => trim($this->input->post('content')),
                'author' => $user_id,
                'photo' => $_FILES["article_photo"]["name"],
                'publish_date' => $this->input->post('article_publish_date'),
                'slug' => trim($slug),
                'created_at' => $now,
                'created_by' => $user_id,
            ];
            $this->M_Article->add_article($data);
        }
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit article',
            'pages' => 'dashboard/pages/article/v_create',
            'article' => $this->M_Article->detail_article($id),
            'user' => $this->M_Auth->cek_user($this->session->userdata('username'))
        ];

        $this->load->view('dashboard/index', $data);
    }
}
