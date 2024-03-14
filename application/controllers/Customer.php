<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{
    // private $param;

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'language_helper', 'date'));
        $this->load->library(array('textlibrary', 'pagination'));
        $this->load->model(array('M_Article', 'M_Setting', 'M_Program', 'M_Partner', 'M_Visitor', 'M_Gallery'));
    }

    public function index()
    {
        $language = $this->detect_language();
        $lang = $this->M_Setting->lang($language);

        $data = [
            'title' => $lang['home_text'],
            'articles' => $this->M_Article->lists($language),
            'programs' => $this->M_Program->lists($language),
            'services' => $this->M_Program->lists_customers($language),
            'partners' => $this->M_Partner->lists(),
            'galleries' => $this->M_Gallery->list_dashboard(),
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

    public function visi_misi()
    {
        // $device = detect_device();
        $language = $this->detect_language();

        $lang = $this->M_Setting->lang($language);

        $data = [
            'title' => $lang['visi_misi'],
            'pages' => 'id/pages/v_visi_misi',
            'visi' => $this->M_Setting->footer_section($language, 'visi'),
            'misi' => $this->M_Setting->footer_section($language, 'misi'),
            'lang' => $lang,
            'language' => $language
        ];


        $this->load->view('customers/head', $data);
        $this->load->view('id/pages/v_visi_misi', $data);
        $this->load->view('customers/footer');
    }

    public function program()
    {
        $language = $this->detect_language();
        $lang = $this->M_Setting->lang($language);

        $data = [
            'title' => $lang['program_text'],
            'pages' => 'id/pages/v_program',
            'programs' => $this->M_Program->lists($language),
            'alamat' => $this->M_Setting->footer_section($language, 'alamat'),
            'telepon' => $this->M_Setting->footer_section($language, 'telepon'),
            'email' => $this->M_Setting->footer_section($language, 'email'),
            'lang' => $lang,
            'language' => $language
        ];

        $this->load->view('customers/head', $data);
        $this->load->view('id/pages/v_program', $data);
        $this->load->view('customers/footer');
    }

    public function program_detail($id)
    {
        $language = $this->detect_language();
        $lang = $this->M_Setting->lang($language);

        $data = [
            'title' => $lang['program_text'],
            'services' => $this->M_Program->lists_customers($language),
            'program' => $this->M_Program->detail_program($id, $language),
            'programs' => $this->M_Program->lists($language),
            'alamat' => $this->M_Setting->footer_section($language, 'alamat'),
            'telepon' => $this->M_Setting->footer_section($language, 'telepon'),
            'email' => $this->M_Setting->footer_section($language, 'email'),
            'lang' => $lang,
            'language' => $language
        ];

        $this->load->view('customers/head', $data);
        $this->load->view('id/pages/v_program_customer_detail', $data);
        $this->load->view('customers/footer');
    }

    public function legality()
    {
        $language = $this->detect_language();
        $lang = $this->M_Setting->lang($language);

        $data = [
            'title' => $lang['our_legality'],
            'pages' => 'id/pages/v_legal',
            'lang' => $lang,
            'legalitas' => $this->M_Setting->footer_section($language, 'legalitas'),
            'language' => $language,
        ];

        $this->load->view('customers/head', $data);
        $this->load->view('id/pages/v_legal', $data);
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
        $this->load->view('id/pages/v_contact', $data);
        $this->load->view('customers/footer');
        // $this->load->view('customers/v_contact', $data);
    }

    public function philosopy()
    {
        $language = $this->detect_language();
        $lang = $this->M_Setting->lang($language);

        $data = [
            'title' => $lang['philosophy_text'],
            'lang' => $lang,
            'philosophy' => $this->M_Setting->footer_section($language, 'philosophy'),
            'language' => $language,
        ];

        $this->load->view('customers/head', $data);
        $this->load->view('customers/v_philosopy', $data);
        $this->load->view('customers/footer');
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
            'article' => $this->M_Article->values("keunggulan-lpk-tjokro-bakti-pertiwi", $language),
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
