<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Textlibrary
{
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
                "lpk_activity_title_text" => "KEGIATAN <br> LPK TJOKRO BAKTI PERTIWI",
                "menu_text" => "Menu",
                "maps_text" => "Peta",
                "contact_us_text" => "Hubungi kami",
                "copyright_text" => "Hak cipta",
                "nama_yayasan_text" => "Yayasan Tjokro Persada Bakti Pertiwi",
                "home_text" => "Beranda",
                "visimisi_text" => "Visi dan Misi",
                "programkami_text" => "Program kami",
                "not_found_text" => "404: Tidak ditemukan",
                "registration_text" => "Pendaftaran",
                "register_text" => "Daftar",
                "success_text" => "Berhasil!",
                "failed_text" => "Gagal!",
                "confirm_title_text" => "Apakah Anda yakin?",
                "confirm_text" => "Pastikan data yang Anda masukkan telah benar.",
                "cancel_text" => "Batal",
                "registration_form_title" => "Data pribadi",
                "registration_instruction_text" => "Silahkan melakukan pendaftaran bila anda tertarik bergabung dengan kami.",
                "full_name_text" => "Nama lengkap",
                "age_text" => "Usia",
                "email_text" => "E-mail",
                "phone_text" => "Nomor telepon",
                "select_last_edu_text" => "Pendidikan terakhir",
                "select_text" => "Pilih",
                "add_text" => "Tambah",
                "gender_text" => "Jenis kelamin",
                "birthplace_text" => "Tempat lahir",
                "birthdate_text" => "Tanggal lahir",
                "body_height_text" => "Tinggi badan",
                "body_weight_text" => "Berat badan",
                "lang_skill_text" => "Kemampuan bahasa",
                "work_exp_text" => "Pengalaman kerja",
                "years_exp_text" => "Lama kerja",
                "skill_text" => "Keahlian",
                "hobby_text" => "Hobi",
                "select_program_text" => "Pilih program",
                "cv" => "CV",
                "email_success_txt" => "Pendaftaran telah berhasil. Info pendaftaran telah kami kirimkan ke email Anda."
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
                "home_text" => "Homepage",
                "visimisi_text" => "Vision and mission",
                "programkami_text" => "Our program",
                "not_found_text" => "404: Not found",
                "registration_text" => "Registration",
                "register_text" => "Register",
                "success_text" => "Success!",
                "failed_text" => "Failed!",
                "confirm_title_text" => "Are you sure?",
                "confirm_text" => "Make sure the data you enter is correct.",
                "cancel_text" => "Cancelled",
                "registration_form_title" => "Personal information",
                "registration_instruction_text" => "Please register if you are interested in joining us.",
                "full_name_text" => "Full name",
                "age_text" => "Age",
                "email_text" => "E-mail",
                "phone_text" => "Phone Number",
                "select_last_edu_text" => "Last Education",
                "select_text" => "Choose",
                "add_text" => "Add",
                "gender_text" => "Gender",
                "birthplace_text" => "Place of Birth",
                "birthdate_text" => "Date of Birth",
                "body_height_text" => "Height",
                "body_weight_text" => "Weight",
                "lang_skill_text" => "Language Skills",
                "work_exp_text" => "Work Experience",
                "years_exp_text" => "Years of Experience",
                "skill_text" => "Skills",
                "hobby_text" => "Hobbies",
                "select_program_text" => "Select program",
                "cv" => "CV",
                "email_success_txt" => "Registration successful. Registration information has been sent to your email."
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
                "home_text" => "ホームページ",
                "visimisi_text" => "ビジョンとミッション",
                "programkami_text" => "私たちのプログラム",
                "not_found_text" => "404お探しのページが見つかりませんでした",
                "registration_text" => "登録",
                "register_text" => "登録する",
                "success_text" => "成功",
                "failed_text" => "フェイル!",
                "confirm_title_text" => "本気ですか？",
                "confirm_text" => "入力したデータが正しいことを確認してください。",
                "cancel_text" => "キャンセル",
                "registration_form_title" => "個人情報",
                "registration_instruction_text" => "ご参加に興味がございましたら、ぜひご登録ください。",
                "full_name_text" => "フルネーム",
                "age_text" => "年齢",
                "email_text" => "Eメール",
                "phone_text" => "電話番号",
                "select_last_edu_text" => "最終学歴",
                "select_text" => "選択",
                "add_text" => "追加",
                "gender_text" => "性別",
                "birthplace_text" => "出生地",
                "birthdate_text" => "生年月日",
                "body_height_text" => "身長",
                "body_weight_text" => "体重",
                "lang_skill_text" => "言語スキル",
                "work_exp_text" => "職務経歴",
                "years_exp_text" => "経験年数",
                "skill_text" => "スキル",
                "hobby_text" => "趣味",
                "select_program_text" => "オプション",
                "cv" => "履歴書", "email_success_txt" => "登録が成功しました。登録情報はお使いのメールアドレスに送信されました。"
            ];
        }

        // Simpan preferensi bahasa dalam session
        // $this->session->set_userdata('language', $language);
        return $lang;
    }

    public function cek_session_lang()
    {
        $language = $this->session->userdata('language');

        if (!$language) {
            $language = "id";
        } else {
            $language = $language;
        }
    }
}
