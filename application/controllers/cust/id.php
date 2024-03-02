<?php
defined('BASEPATH') or exit('No direct script access allowed');

class id extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'language_helper'));
        $this->load->library(array('textlibrary', 'pagination'));
        $this->load->helper('date');
        $this->load->model(array('M_Article', 'M_Setting', 'M_Program', 'M_Partner', 'M_Visitor'));
        // $this->load->model('M_Article');
        // $this->load->model('M_Setting');
        // $this->load->model('M_Program');
        // $this->load->model('M_Partner');
    }
    public function index()
    {
        $language = $this->detect_language();
        $lang = $this->M_Setting->lang($language);

        $data = [
            'title' => $lang['home_text'],
            'pages' => 'id/pages/v_home',
            'articles' => $this->M_Article->lists($language),
            'programs' => $this->M_Program->lists($language),
            'partners' => $this->M_Partner->lists(),
            'videotron' => $this->M_Setting->videotron(),
            'alamat' => $this->M_Setting->footer_section($language, 'alamat'),
            'telepon' => $this->M_Setting->footer_section($language, 'telepon'),
            'email' => $this->M_Setting->footer_section($language, 'email'),
            'lang' => $lang,
            'facilities' => $this->M_Setting->facility($language),
            'language' => $language,
        ];

        $this->load->view('customers/head',$data);
        $this->load->view('customers/tes',$data);
        $this->load->view('customers/footer');
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
