<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    // private $param;

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url','language_helper'));
        $this->load->library('textlibrary');
        $this->load->helper('date');

        $this->load->model('M_Article');
        $this->load->model('M_Setting');
        $this->load->model('M_Program');
        $this->load->model('M_Partner');
    }

    public function index()
    {
        $language = $this->detect_language();

        $data = [
            'title' => 'Home',
            'pages' => 'id/pages/v_home',
            'articles' => $this->M_Article->lists($language),
            'programs' => $this->M_Program->lists($language),
            'partners' => $this->M_Partner->lists(),
            'videotron' => $this->M_Setting->videotron(),
            'alamat' => $this->M_Setting->footer_section($language, 'alamat'),
            'telepon' => $this->M_Setting->footer_section($language, 'telepon'),
            'email' => $this->M_Setting->footer_section($language, 'email'),
            'lang' => $this->textlibrary->lang($language),
            'language' => $language
        ];

        $this->load->view('id/index', $data);
    }

    public function tentang()
    {
        // $device = detect_device();
        $language = $this->detect_language();

        $data = [
            'title' => 'Tentang',
            'pages' => 'id/pages/v_about',
            'visi' => $this->M_Setting->footer_section($language, 'visi'),
            'misi' => $this->M_Setting->footer_section($language, 'misi'),
            'alamat' => $this->M_Setting->footer_section($language, 'alamat'),
            'telepon' => $this->M_Setting->footer_section($language, 'telepon'),
            'email' => $this->M_Setting->footer_section($language, 'email'),
            'programs' => $this->M_Program->lists($language),
            'lang' => $this->textlibrary->lang($language),
            'language' => $language
        ];

        $this->load->view('id/index', $data);
    }
    function detect_language()
    {
        $CI = &get_instance();
        $language = $CI->session->userdata('language');

        // Jika tidak ada bahasa di session, gunakan bahasa default

        if (!$language) {
            $language = "id";
        } else {
            $language = $language;
        }

        return $language;
    }
}
