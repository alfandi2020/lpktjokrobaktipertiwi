<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{
    // private $param;

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
            'videotron' => $this->M_Setting->videotron_customers(),
            'alamat' => $this->M_Setting->footer_section($language, 'alamat'),
            'telepon' => $this->M_Setting->footer_section($language, 'telepon'),
            'email' => $this->M_Setting->footer_section($language, 'email'),
            'lang' => $lang,
            'facilities' => $this->M_Setting->facility($language),
            'language' => $language,
        ];

        $this->load->view('customers/head', $data);
        $this->load->view('customers/v_home', $data);
        $this->load->view('customers/footer');
    }
    public function contact()
    { // $device = detect_device();
        $language = $this->detect_language();

        $lang = $this->M_Setting->lang($language);

        $data = [
            'title' => $lang['contact_us_text'],
            'pages' => 'id/pages/v_contact',
            'visi' => $this->M_Setting->footer_section($language, 'visi'),
            'misi' => $this->M_Setting->footer_section($language, 'misi'),
            'alamat' => $this->M_Setting->footer_section($language, 'alamat'),
            'telepon' => $this->M_Setting->footer_section($language, 'telepon'),
            'email' => $this->M_Setting->footer_section($language, 'email'),
            'programs' => $this->M_Program->lists($language),
            'lang' => $lang,
            'language' => $language
        ];
        $this->load->view('customers/head', $data);
        $this->load->view('customers/v_contact', $data);
        $this->load->view('customers/footer');
        // $this->load->view('customers/v_contact', $data);
    }
    public function philosopy()
    { // $device = detect_device();
        $language = $this->detect_language();

        $lang = $this->M_Setting->lang($language);

        $data = [
            'title' => $lang['contact_us_text'],
            'pages' => 'id/pages/v_contact',
            'visi' => $this->M_Setting->footer_section($language, 'visi'),
            'misi' => $this->M_Setting->footer_section($language, 'misi'),
            'alamat' => $this->M_Setting->footer_section($language, 'alamat'),
            'telepon' => $this->M_Setting->footer_section($language, 'telepon'),
            'email' => $this->M_Setting->footer_section($language, 'email'),
            'programs' => $this->M_Program->lists($language),
            'lang' => $lang,
            'language' => $language
        ];
        $this->load->view('customers/head', $data);
        $this->load->view('customers/v_philosopy', $data);
        $this->load->view('customers/footer');
        // $this->load->view('customers/v_contact', $data);
    }
    public function values()
    {
        $language = $this->detect_language();
        $lang = $this->M_Setting->lang($language);

        $data = [
            'title' => $lang['values_text'],
            'articles' => $this->M_Article->lists($language),
            'programs' => $this->M_Program->lists($language),
            'alamat' => $this->M_Setting->footer_section($language, 'alamat'),
            'telepon' => $this->M_Setting->footer_section($language, 'telepon'),
            'email' => $this->M_Setting->footer_section($language, 'email'),
            'lang' => $lang,
            'language' => $language,
            'article' => $this->M_Article->detail_article("keunggulan-lpk-yto", $language),
        ];

        $this->load->view('customers/head', $data);
        $this->load->view('id/pages/v_article_detail', $data);
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