<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Setting extends CI_Model
{
    var $table = 'v_menu';
    var $column_order = array(null, 'menu_nama', 'menu_harga', 'menu_seo', 'kategori_nama');
    var $order = array(null, 'menu_nama', 'menu_harga', 'menu_seo', 'kategori_nama');

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function videotron()
    {
        $query = $this->db->where('Id', '1')->get('videotron')->row_array();
        return $query;
    }

    public function update_videotron($data, $id)
    {
        $query = $this->db->where('Id', $id)->get('videotron')->row_array();

        $videotron = $query["nama_video"];
        $path = "assets/asset_fr/video/" . $videotron;

        // var_dump($path);
        // exit;


        if (file_exists($path)) {
            unlink($path);
        }

        $config = array(
            'upload_path' => 'assets/asset_fr/video/',
            'allowed_types' => "mp4",
            'overwrite' => TRUE,
            'max_size' => "",
            'max_height' => "",
            'max_width' => "",
            'file_name' => $data["nama_video"]
        );

        // var_dump($config);exit;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('input_videotron')) {
            $error = array('error' => $this->upload->display_errors());

            $this->session->set_flashdata('message_name', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Videotron has not been uploaded yet.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
            // After that you need to used redirect function instead of load view such as 
            redirect("dash/settings/videotron/", $error);
        } else {
            $this->db->where('Id', $id);
            $this->db->update('videotron', $data);
            $this->session->set_flashdata('message_name', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			Videotron has been successfully updated.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
            // After that you need to used redirect function instead of load view such as 
            redirect("dash/settings/videotron/");
        }
    }
}
