<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Program extends CI_Model
{
    var $table = 'v_menu';
    var $column_order = array(null, 'menu_nama', 'menu_harga', 'menu_seo', 'kategori_nama');
    var $order = array(null, 'menu_nama', 'menu_harga', 'menu_seo', 'kategori_nama');

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function lists($language)
    {
        $query = $this->db->select('nama_program_' . $language . ' as nama_program, keterangan_' . $language . ' as keterangan, photo, slug')->order_by('nama_program_' . $language, 'ASC')->get('program')->result();
        return $query;
    }
    public function lists_customers($language)
    {
        $query = $this->db->select('nama_program_' . $language . ' as nama_program, keterangan_' . $language . ' as keterangan, photo, slug')->order_by('Id', 'ASC')->get('program_customers')->result();
        return $query;
    }

    public function list_dashboard($table)
    {
        $query = $this->db->select('nama_program_id as nama_program, slug, nama_program_singkat_id')->order_by('nama_program_id', 'ASC')->get($table)->result();

        return $query;
    }

    public function add_program($data)
    {
        return $this->db->insert('program', $data);
    }

    public function detail_program($id, $language, $table)
    {
        $query = $this->db->select('nama_program_' . $language . ' as nama_program, keterangan_' . $language . ' as keterangan, content_' . $language . ' as content, slug, photo')->where('slug', $id)->get($table)->row_array();

        return $query;
    }

    public function detail_program_edit($id, $table)
    {
        $query = $this->db->select('nama_program_id, nama_program_en, nama_program_jp, keterangan_id, keterangan_en, keterangan_jp, content_id, content_en, content_jp, slug, photo')->where('slug', $id)->get($table)->row_array();

        return $query;
    }

    public function update_program($data, $old_slug)
    {
        $this->db->where('slug', $old_slug);
        return $this->db->update('program', $data);
    }

    public function video()
    {
        $query = $this->db->where('Id', '1')->get('videotron')->row_array();
        return $query;
    }

    public function max_number()
    {
        $query = $this->db->select('max(nomor_urut) as nomor_urut')->get('siswa')->row_array();
        return $query;
    }

    public function tambah_siswa($data)
    {
        $query = $this->db->insert('siswa', $data);

        return $query;
    }

    public function program_customer()
    {
        $query = $this->db->select('nama_program_id as nama_program, slug, nama_program_singkat_id')->order_by('nama_program_id', 'ASC')->get('program')->result();

        return $query;
    }

    public function is_available($id, $table)
    {
        return $this->db->select('photo')->where('slug', $id)->get($table)->row_array();
    }

    public function update_photo($data, $slug, $table)
    {
        return $this->db->where('slug', $slug)->update($table, $data);
    }
}
