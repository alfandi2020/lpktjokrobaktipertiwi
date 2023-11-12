<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('string');
        $this->load->helper('date');
        $this->load->model('M_Article');
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Article',
            'pages' => 'id/pages/v_article_detail',
            'article' => $this->M_Article->detail_article($id),
        ];
        $this->load->view('id/index', $data);
    }
}
