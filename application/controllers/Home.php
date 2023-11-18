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
        $this->load->model('M_Program');
        $this->load->model('M_Partner');
    }

    public function index()
    {
        $language = $this->session->userdata('language');

        if (!$language) {
            $language = "id";
        } else {
            $language = $language;
        }

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
            'lang' => $this->lang($language),
            'language' => $language
        ];

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        // exit;

        $this->load->view('id/index', $data);
    }

    public function tentang()
    {
        $data = [
            'title' => 'Tentang',
            'pages' => 'id/pages/v_about',
            'visi' => $this->M_Setting->visi(),
            'misi' => $this->M_Setting->misi(),
            'programs' => $this->M_Program->lists(),
            'alamat' => $this->M_Setting->alamat(),
            'telepon' => $this->M_Setting->telepon(),
            'email' => $this->M_Setting->email()
        ];

        $this->load->view('id/index', $data);
    }

    public function lang($language)
    {
        if ($language == "id") {
            $lang = [
                "about_text" => "Tentang",
                "login_text" => "Masuk",
                "dashboard_text" => "Dasbor",
                "activity_text" => "Kegiatan",
                "program_text" => "Program",
                "article_text" => "Artikel",
                "contact_text" => "Kontak",
                "training_title" => "Pendidikan",
                "training_content" => "Memberikan edukasi dan training kepada para pemuda indonesia dengan membuka dan melalui training overseas ke negara jepang, sehingga para pemuda tsb diharapkan ketika pulang nanti mampu memberikan kontribusi terbaik nya untuk negara indonesia. Diharapkan pada suatu hari nanti, dari hasil edukasi dan training yang di dapat, para pemuda indonesia tersebut juga mampu membuat lembaga atau program pendidikan sejenis.",
                "detail_text" => "Selengkapnya",
                "lpk_activity_title_text" => "KEGIATAN LPK TJOKRO BAKTI PERTIWI",
                "menu_text" => "Menu",
                "maps_text" => "Peta",
                "contact_us_text" => "Hubungi kami",
                "copyright_text" => "Hak cipta",
                "nama_yayasan_text" => "Yayasan Tjokro Persada Bakti Pertiwi",
                "home_text" => "Beranda"
            ];
        } else if ($language == "en") {
            $lang = [
                "about_text" => "About",
                "login_text" => "Login",
                "dashboard_text" => "Dashboard",
                "activity_text" => "Activity",
                "program_text" => "Program",
                "article_text" => "Article",
                "contact_text" => "Contact",
                "training_title" => "Training",
                "training_content" => "Providing education and training to Indonesian youth by opening and going through overseas training to Japan, so that it is hoped that when the youth return home they will be able to make their best contribution to Indonesia. It is hoped that one day, from the results of the education and training they receive, Indonesian youth will also be able to create similar educational institutions or programs.",
                "detail_text" => "Detail",
                "lpk_activity_title_text" => "TJOKRO BAKTI PERTIWI JOB TRAINING INSTITUTE ACTIVITIES",
                "menu_text" => "Menu",
                "maps_text" => "Maps",
                "contact_us_text" => "Contact us",
                "copyright_text" => "Copyright",
                "nama_yayasan_text" => "Tjokro Persada Bakti Pertiwi Foundation",
                "home_text" => "Homepage"
            ];
        } else if ($language == "jp") {
            $lang = [
                "about_text" => "について",
                "login_text" => "ログイン",
                "dashboard_text" => "ダッシュボード",
                "activity_text" => "活動",
                "program_text" => "プログラム",
                "article_text" => "記事",
                "contact_text" => "接触",
                "training_title" => "教育",
                "training_content" => "インドネシアの青少年に日本への海外研修を開設し、教育訓練を提供し、青少年が帰国した際にインドネシアに最大限の貢献ができることを期待しています。 いつかインドネシアの若者も、彼らが受けた教育や訓練の成果をもとに、同様の教育機関やプログラムを立ち上げることができるようになることが期待されています。",
                "detail_text" => "詳細",
                "lpk_activity_title_text" => "チョクロ・バクティ・ペルティウィ職業訓練機関の活動",
                "menu_text" => "メニュー",
                "maps_text" => "地図",
                "contact_us_text" => "お問い合わせ",
                "copyright_text" => "著作権",
                "nama_yayasan_text" => "チョクロ ペルサダ バクティ ペルティウィ財団",
                "home_text" => "ホームページ"
            ];
        }

        // Simpan preferensi bahasa dalam session
        $this->session->set_userdata('language', $language);
        return $lang;
    }
}
