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
    }

    public function index()
    {
        $data = [
            'title' => 'Home',
            'pages' => 'id/pages/v_home',
            'articles' => $this->M_Article->lists(),
            'videotron' => $this->M_Setting->videotron()
        ];

        $this->load->view('id/index', $data);
    }
}
