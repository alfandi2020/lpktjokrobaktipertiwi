<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    // private $param;

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->helper('date');

        $this->load->model('M_Article');
        $this->load->model('M_Setting');
        $this->load->model('M_Program');
        $this->load->model('M_Partner');
    }

    public function index()
    {
        $data = [
            'title' => 'Home',
            'pages' => 'id/pages/v_home',
            'articles' => $this->M_Article->lists(),
            'programs' => $this->M_Program->lists(),
            'partners' => $this->M_Partner->lists(),
            'videotron' => $this->M_Setting->videotron(),
            'alamat' => $this->M_Setting->alamat(),
            'telepon' => $this->M_Setting->telepon(),
            'email' => $this->M_Setting->email()
        ];

        $this->load->view('id/index', $data);
    }

    public function tentang()
    {
        $data = [
            'title' => 'Tentang',
            'pages' => 'id/pages/v_about',
            'visi' => $this->M_Setting->visi(),
            'misi' => $this->M_Setting->misi(),
            'programs' => $this->M_Program->lists(),
            'alamat' => $this->M_Setting->alamat(),
            'telepon' => $this->M_Setting->telepon(),
            'email' => $this->M_Setting->email()
        ];

        $this->load->view('id/index', $data);
    }
}
