<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('pagination');
        $this->load->helper('string');
        $this->load->helper('date');
        $this->load->model('M_Article');
        $this->load->model('M_Setting');
        $this->load->model('M_Program');
        $this->load->model('M_Partner');
    }

    public function index()
    {
        $config['base_url'] = base_url('article/index');
        // $config['page_query_string'] = TRUE;
        // $config['use_page_numbers'] = TRUE;
        $config['total_rows'] = $this->M_Article->get_published_count();
        $config['per_page'] = 10;
        $config['num_link'] = 5;
        $config['full_tag_open'] = '<div class="pagination-bx clearfix text-center"><ul class="pagination">';
        $config['full_tag_close'] = '</ul></div>';
        $config['first_link'] = TRUE;
        $config['last_link'] = TRUE;
        $config['first_tag_open'] = '<li class="previous">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li class="next">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] =  '<li> <a href="javascript:void(0);" class="active">';
        $config['cur_tag_close'] = '</a> </li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['display_pages'] = FALSE;

        $this->pagination->initialize($config);

        $from = $this->uri->segment(3);
        $limit = $config['per_page'];

        $language = detect_language();

        $data = [
            'title' => 'Article',
            'pages' => 'id/pages/v_article',
            'articles' => $this->M_Article->list_bydate($limit, $from, $language),
            'programs' => $this->M_Program->lists($language),
            'partners' => $this->M_Partner->lists(),
            'alamat' => $this->M_Setting->footer_section($language, 'alamat'),
            'telepon' => $this->M_Setting->footer_section($language, 'telepon'),
            'email' => $this->M_Setting->footer_section($language, 'email'),
            'lang' => $this->textlibrary->lang($language),
            'language' => $language
        ];
        $this->load->view('id/index', $data);
    }

    public function detail($id)
    {
        $language = detect_language();

        $data = [
            'title' => 'Article',
            'pages' => 'id/pages/v_article_detail',
            'article' => $this->M_Article->detail_article($id, $language),
            'alamat' => $this->M_Setting->footer_section($language, 'alamat'),
            'telepon' => $this->M_Setting->footer_section($language, 'telepon'),
            'email' => $this->M_Setting->footer_section($language, 'email'),
            'lang' => $this->textlibrary->lang($language),
            'language' => $language
        ];

        if (!$data['article']) {
            redirect('Custom404');
        } else {
            $this->load->view('id/index', $data);
        }
    }
}
