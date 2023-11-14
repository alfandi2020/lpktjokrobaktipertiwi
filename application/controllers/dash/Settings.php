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

    public function index()
    {
        $data = [
            'title' => 'Setting',
            'pages' => 'dashboard/pages/settings/v_settings',
            'videotron' => $this->M_Setting->videotron(),
            'visi' => $this->M_Setting->visi(),
            'misi' => $this->M_Setting->misi(),
            'user' => $this->M_Auth->cek_user($this->session->userdata('username'))
        ];
        $this->load->view('dashboard/index', $data);
    }

    public function update_videotron($id)
    {

        $now = date('Y-m-d H:i:s');

        $data = array(
            'content' => $_FILES["input_videotron"]["name"],
            'updated_at' => $now
        );

        $this->M_Setting->update_videotron($data, $id);
    }

    public function update_visimisi()
    {
        $now = date('Y-m-d H:i:s');

        $data_visi = array(
            'content' => trim($this->input->post('visi')),
            'updated_at' => $now
        );

        $data_misi = array(
            'content' => trim($this->input->post('misi')),
            'updated_at' => $now
        );

        $this->M_Setting->update_visimisi($data_visi, $data_misi);
    }
}
