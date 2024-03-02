<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Gallery extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function lists($language)
    {
        $query = $this->db->select('judul_' . $language . ' as judul, headline_' . $language . ' as headline, content_' . $language . ' as content, photo, author, publish_date, slug, id_category')->where_not_in('id_category', array(7, 8))->order_by('judul_' . $language, 'ASC')->get('article')->result();
        return $query;
    }

    public function list_dashboard()
    {
        return $this->db->get('galeri_customers')->result();
    }

    public function add_image($data)
    {
        return $this->db->insert('galeri_customers', $data);
    }

    public function detail($slug)
    {
        return $this->db->where('slug', $slug)->get('galeri_customers')->row_array();
    }

    public function delete($slug)
    {
        return $this->db->where('slug', $slug)->delete('galeri_customers');
    }
}
