<?php
error_reporting(0);
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model');
        $this->load->library('pagination');
    }
    public function index()
    {
        $ip = $this->input->ip_address();
        $date = date('Y-m-d');
        $waktu = time();
        $timeinsert = date('Y-m-d H:i:s');

        // ceh ip, apakah user sudah pernah mengakses hari ini
        $s = $this->db->query("SELECT * FROM visitor WHERE ip='" . $ip . "' AND date='" . $date . "'")->num_rows();
        $ss = isset($s) ? ($s) : 0;

        // kalau belum ada, simpan data user tersebut ke database
        if ($ss == 0) {
            $this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('" . $ip . "','" . $date . "','1','" . $waktu . "','" . $timeinsert . "')");
        } else {
            $this->db->query("UPDATE visitor SET hits=hits+1, online='" . $waktu . "' WHERE ip='" . $ip . "' AND date='" . $date . "'");
        }

        $pengunjunghariini = $this->db->query("SELECT * FROM visitor WHERE date='" . $date . "' GROUP BY ip")->num_rows();
        $dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->row();
        $totalpengunjung = isset($dbpengunjung->hits) ? ($dbpengunjung->hits) : 0;
        $bataswaktu = time() - 300;
        $pengunjungonline = $this->db->query("SELECT * FROM visitor WHERE online > '" . $bataswaktu . "'")->num_rows();
        $data['pengunjunghariini'] = $pengunjunghariini;
        $data['totalpengunjung'] = $totalpengunjung;
        $data['pengunjungonline'] = $pengunjungonline;

        $data['title'] = 'Rumah Quran | Ihya UL Ummah';
        $data['artikel'] = $this->Berita_model->detailberitalimit();
        $data['gallery'] = $this->Berita_model->detailgallerylimit();

        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }

    public function about()
    {
        $ip = $this->input->ip_address();
        $date = date('Y-m-d');
        $waktu = time();
        $timeinsert = date('Y-m-d H:i:s');

        // ceh ip, apakah user sudah pernah mengakses hari ini
        $s = $this->db->query("SELECT * FROM visitor WHERE ip='" . $ip . "' AND date='" . $date . "'")->num_rows();
        $ss = isset($s) ? ($s) : 0;

        // kalau belum ada, simpan data user tersebut ke database
        if ($ss == 0) {
            $this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('" . $ip . "','" . $date . "','1','" . $waktu . "','" . $timeinsert . "')");
        } else {
            $this->db->query("UPDATE visitor SET hits=hits+1, online='" . $waktu . "' WHERE ip='" . $ip . "' AND date='" . $date . "'");
        }

        $pengunjunghariini = $this->db->query("SELECT * FROM visitor WHERE date='" . $date . "' GROUP BY ip")->num_rows();
        $dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->row();
        $totalpengunjung = isset($dbpengunjung->hits) ? ($dbpengunjung->hits) : 0;
        $bataswaktu = time() - 300;
        $pengunjungonline = $this->db->query("SELECT * FROM visitor WHERE online > '" . $bataswaktu . "'")->num_rows();
        $data['pengunjunghariini'] = $pengunjunghariini;
        $data['totalpengunjung'] = $totalpengunjung;
        $data['pengunjungonline'] = $pengunjungonline;

        $data['title'] = 'Tentang Kami | Ihya UL Ummah';

        $this->load->view('templates/header2', $data);
        $this->load->view('home/about', $data);
        $this->load->view('templates/footer');
    }

    public function donasi()
    {
        $data['title'] = 'Donasi | Ihya UL Ummah';

        $this->load->view('templates/header2', $data);
        $this->load->view('home/donasi');
        $this->load->view('templates/footer');
    }

    public function kontak()
    {
        $ip = $this->input->ip_address();
        $date = date('Y-m-d');
        $waktu = time();
        $timeinsert = date('Y-m-d H:i:s');

        // ceh ip, apakah user sudah pernah mengakses hari ini
        $s = $this->db->query("SELECT * FROM visitor WHERE ip='" . $ip . "' AND date='" . $date . "'")->num_rows();
        $ss = isset($s) ? ($s) : 0;

        // kalau belum ada, simpan data user tersebut ke database
        if ($ss == 0) {
            $this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('" . $ip . "','" . $date . "','1','" . $waktu . "','" . $timeinsert . "')");
        } else {
            $this->db->query("UPDATE visitor SET hits=hits+1, online='" . $waktu . "' WHERE ip='" . $ip . "' AND date='" . $date . "'");
        }

        $pengunjunghariini = $this->db->query("SELECT * FROM visitor WHERE date='" . $date . "' GROUP BY ip")->num_rows();
        $dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->row();
        $totalpengunjung = isset($dbpengunjung->hits) ? ($dbpengunjung->hits) : 0;
        $bataswaktu = time() - 300;
        $pengunjungonline = $this->db->query("SELECT * FROM visitor WHERE online > '" . $bataswaktu . "'")->num_rows();
        $data['pengunjunghariini'] = $pengunjunghariini;
        $data['totalpengunjung'] = $totalpengunjung;
        $data['pengunjungonline'] = $pengunjungonline;

        $data['title'] = 'Kontak | Ihya UL Ummah';

        $this->load->view('templates/header2', $data);
        $this->load->view('home/kontak', $data);
        $this->load->view('templates/footer');
    }

    public function program()
    {
        $ip = $this->input->ip_address();
        $date = date('Y-m-d');
        $waktu = time();
        $timeinsert = date('Y-m-d H:i:s');

        // ceh ip, apakah user sudah pernah mengakses hari ini
        $s = $this->db->query("SELECT * FROM visitor WHERE ip='" . $ip . "' AND date='" . $date . "'")->num_rows();
        $ss = isset($s) ? ($s) : 0;

        // kalau belum ada, simpan data user tersebut ke database
        if ($ss == 0) {
            $this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('" . $ip . "','" . $date . "','1','" . $waktu . "','" . $timeinsert . "')");
        } else {
            $this->db->query("UPDATE visitor SET hits=hits+1, online='" . $waktu . "' WHERE ip='" . $ip . "' AND date='" . $date . "'");
        }

        $pengunjunghariini = $this->db->query("SELECT * FROM visitor WHERE date='" . $date . "' GROUP BY ip")->num_rows();
        $dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->row();
        $totalpengunjung = isset($dbpengunjung->hits) ? ($dbpengunjung->hits) : 0;
        $bataswaktu = time() - 300;
        $pengunjungonline = $this->db->query("SELECT * FROM visitor WHERE online > '" . $bataswaktu . "'")->num_rows();
        $data['pengunjunghariini'] = $pengunjunghariini;
        $data['totalpengunjung'] = $totalpengunjung;
        $data['pengunjungonline'] = $pengunjungonline;
        $data['artikel'] = $this->Berita_model->getAllBeritaDesc();
        $data['title'] = "Berantas Buta Huruf Quran | Ihya UL Ummah";

        $this->load->view('templates/header2', $data);
        $this->load->view('home/program', $data);
        $this->load->view('templates/footer');
    }

    public function tahsin()
    {
        $ip = $this->input->ip_address();
        $date = date('Y-m-d');
        $waktu = time();
        $timeinsert = date('Y-m-d H:i:s');

        // ceh ip, apakah user sudah pernah mengakses hari ini
        $s = $this->db->query("SELECT * FROM visitor WHERE ip='" . $ip . "' AND date='" . $date . "'")->num_rows();
        $ss = isset($s) ? ($s) : 0;

        // kalau belum ada, simpan data user tersebut ke database
        if ($ss == 0) {
            $this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('" . $ip . "','" . $date . "','1','" . $waktu . "','" . $timeinsert . "')");
        } else {
            $this->db->query("UPDATE visitor SET hits=hits+1, online='" . $waktu . "' WHERE ip='" . $ip . "' AND date='" . $date . "'");
        }

        $pengunjunghariini = $this->db->query("SELECT * FROM visitor WHERE date='" . $date . "' GROUP BY ip")->num_rows();
        $dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->row();
        $totalpengunjung = isset($dbpengunjung->hits) ? ($dbpengunjung->hits) : 0;
        $bataswaktu = time() - 300;
        $pengunjungonline = $this->db->query("SELECT * FROM visitor WHERE online > '" . $bataswaktu . "'")->num_rows();
        $data['pengunjunghariini'] = $pengunjunghariini;
        $data['totalpengunjung'] = $totalpengunjung;
        $data['pengunjungonline'] = $pengunjungonline;

        $data['artikel'] = $this->Berita_model->getAllBeritaDesc();
        $data['title'] = "Tahsin Tilawah | Ihya UL Ummah";
        $this->load->view('templates/header2', $data);
        $this->load->view('home/tahsin', $data);
        $this->load->view('templates/footer');
    }

    public function tahfizh()
    {
        $ip = $this->input->ip_address();
        $date = date('Y-m-d');
        $waktu = time();
        $timeinsert = date('Y-m-d H:i:s');

        // ceh ip, apakah user sudah pernah mengakses hari ini
        $s = $this->db->query("SELECT * FROM visitor WHERE ip='" . $ip . "' AND date='" . $date . "'")->num_rows();
        $ss = isset($s) ? ($s) : 0;

        // kalau belum ada, simpan data user tersebut ke database
        if ($ss == 0) {
            $this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('" . $ip . "','" . $date . "','1','" . $waktu . "','" . $timeinsert . "')");
        } else {
            $this->db->query("UPDATE visitor SET hits=hits+1, online='" . $waktu . "' WHERE ip='" . $ip . "' AND date='" . $date . "'");
        }

        $pengunjunghariini = $this->db->query("SELECT * FROM visitor WHERE date='" . $date . "' GROUP BY ip")->num_rows();
        $dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->row();
        $totalpengunjung = isset($dbpengunjung->hits) ? ($dbpengunjung->hits) : 0;
        $bataswaktu = time() - 300;
        $pengunjungonline = $this->db->query("SELECT * FROM visitor WHERE online > '" . $bataswaktu . "'")->num_rows();
        $data['pengunjunghariini'] = $pengunjunghariini;
        $data['totalpengunjung'] = $totalpengunjung;
        $data['pengunjungonline'] = $pengunjungonline;

        $data['artikel'] = $this->Berita_model->getAllBeritaDesc();
        $data['title'] = "Tahfizh Quran | Ihya UL Ummah";
        $this->load->view('templates/header2', $data);
        $this->load->view('home/tahfizh', $data);
        $this->load->view('templates/footer');
    }

    public function gallery()
    {
        $ip = $this->input->ip_address();
        $date = date('Y-m-d');
        $waktu = time();
        $timeinsert = date('Y-m-d H:i:s');

        // ceh ip, apakah user sudah pernah mengakses hari ini
        $s = $this->db->query("SELECT * FROM visitor WHERE ip='" . $ip . "' AND date='" . $date . "'")->num_rows();
        $ss = isset($s) ? ($s) : 0;

        // kalau belum ada, simpan data user tersebut ke database
        if ($ss == 0) {
            $this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('" . $ip . "','" . $date . "','1','" . $waktu . "','" . $timeinsert . "')");
        } else {
            $this->db->query("UPDATE visitor SET hits=hits+1, online='" . $waktu . "' WHERE ip='" . $ip . "' AND date='" . $date . "'");
        }

        $pengunjunghariini = $this->db->query("SELECT * FROM visitor WHERE date='" . $date . "' GROUP BY ip")->num_rows();
        $dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->row();
        $totalpengunjung = isset($dbpengunjung->hits) ? ($dbpengunjung->hits) : 0;
        $bataswaktu = time() - 300;
        $pengunjungonline = $this->db->query("SELECT * FROM visitor WHERE online > '" . $bataswaktu . "'")->num_rows();
        $data['pengunjunghariini'] = $pengunjunghariini;
        $data['totalpengunjung'] = $totalpengunjung;
        $data['pengunjungonline'] = $pengunjungonline;

        // config pagination
        $config['base_url'] = 'https://rumahquran.info/home/gallery';
        $config['total_rows'] = $this->Berita_model->countAllGallery();
        $config['per_page'] = 5;

        // initialize
        $this->pagination->initialize($config);
        $detail = $this->Berita_model->getAllGallery();
        $data['start'] = $this->uri->segment(3);
        $detail1 = $this->Berita_model->getGallery($config['per_page'], $data['start']);
        $data['detail1'] = $detail1;
        $data['detail'] = $detail;

        $data['title'] = "Gallery | Ihya UL Ummah";

        $this->load->view('templates/header2', $data);
        $this->load->view('home/gallery', $data);
        $this->load->view('templates/footer');
    }

    public function artikel()
    {
        $ip = $this->input->ip_address();
        $date = date('Y-m-d');
        $waktu = time();
        $timeinsert = date('Y-m-d H:i:s');

        // ceh ip, apakah user sudah pernah mengakses hari ini
        $s = $this->db->query("SELECT * FROM visitor WHERE ip='" . $ip . "' AND date='" . $date . "'")->num_rows();
        $ss = isset($s) ? ($s) : 0;

        // kalau belum ada, simpan data user tersebut ke database
        if ($ss == 0) {
            $this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('" . $ip . "','" . $date . "','1','" . $waktu . "','" . $timeinsert . "')");
        } else {
            $this->db->query("UPDATE visitor SET hits=hits+1, online='" . $waktu . "' WHERE ip='" . $ip . "' AND date='" . $date . "'");
        }

        $pengunjunghariini = $this->db->query("SELECT * FROM visitor WHERE date='" . $date . "' GROUP BY ip")->num_rows();
        $dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->row();
        $totalpengunjung = isset($dbpengunjung->hits) ? ($dbpengunjung->hits) : 0;
        $bataswaktu = time() - 300;
        $pengunjungonline = $this->db->query("SELECT * FROM visitor WHERE online > '" . $bataswaktu . "'")->num_rows();
        $data['pengunjunghariini'] = $pengunjunghariini;
        $data['totalpengunjung'] = $totalpengunjung;
        $data['pengunjungonline'] = $pengunjungonline;

        // config pagination
        $config['total_rows'] = $this->Berita_model->countAllBerita();
        $config['per_page'] = 5;

        // initialize
        $this->pagination->initialize($config);
        $detail = $this->Berita_model->getAllBeritaDesc();
        $data['start'] = $this->uri->segment(3);
        $detail1 = $this->Berita_model->getBerita($config['per_page'], $data['start']);
        $data['detail1'] = $detail1;
        $data['detail'] = $detail;

        $data['title'] = "Artikel | Ihya UL Ummah";
        // $data['artikel'] = $this->Berita_model->detailberitalimit();

        $this->load->view('templates/header2', $data);
        $this->load->view('home/artikel', $data);
        $this->load->view('templates/footer');
    }
    public function detailartikel($id)
    {
        $ip = $this->input->ip_address();
        $date = date('Y-m-d');
        $waktu = time();
        $timeinsert = date('Y-m-d H:i:s');

        // ceh ip, apakah user sudah pernah mengakses hari ini
        $s = $this->db->query("SELECT * FROM visitor WHERE ip='" . $ip . "' AND date='" . $date . "'")->num_rows();
        $ss = isset($s) ? ($s) : 0;

        // kalau belum ada, simpan data user tersebut ke database
        if ($ss == 0) {
            $this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('" . $ip . "','" . $date . "','1','" . $waktu . "','" . $timeinsert . "')");
        } else {
            $this->db->query("UPDATE visitor SET hits=hits+1, online='" . $waktu . "' WHERE ip='" . $ip . "' AND date='" . $date . "'");
        }

        $pengunjunghariini = $this->db->query("SELECT * FROM visitor WHERE date='" . $date . "' GROUP BY ip")->num_rows();
        $dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->row();
        $totalpengunjung = isset($dbpengunjung->hits) ? ($dbpengunjung->hits) : 0;
        $bataswaktu = time() - 300;
        $pengunjungonline = $this->db->query("SELECT * FROM visitor WHERE online > '" . $bataswaktu . "'")->num_rows();
        $data['pengunjunghariini'] = $pengunjunghariini;
        $data['totalpengunjung'] = $totalpengunjung;
        $data['pengunjungonline'] = $pengunjungonline;

        $detail = $this->Berita_model->detailBerita($id);
        $data['artikel'] = $this->Berita_model->getAllBerita();
        $data['detail'] = $detail;
        $data['title'] = 'Detail Artikel | Ihya Ul Ummah';

        $this->load->view('templates/header2', $data);
        $this->load->view('home/detailartikel', $data);
        $this->load->view('templates/footer');
    }
    public function detailgallery($id)
    {
        $ip = $this->input->ip_address();
        $date = date('Y-m-d');
        $waktu = time();
        $timeinsert = date('Y-m-d H:i:s');

        // ceh ip, apakah user sudah pernah mengakses hari ini
        $s = $this->db->query("SELECT * FROM visitor WHERE ip='" . $ip . "' AND date='" . $date . "'")->num_rows();
        $ss = isset($s) ? ($s) : 0;

        // kalau belum ada, simpan data user tersebut ke database
        if ($ss == 0) {
            $this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('" . $ip . "','" . $date . "','1','" . $waktu . "','" . $timeinsert . "')");
        } else {
            $this->db->query("UPDATE visitor SET hits=hits+1, online='" . $waktu . "' WHERE ip='" . $ip . "' AND date='" . $date . "'");
        }

        $pengunjunghariini = $this->db->query("SELECT * FROM visitor WHERE date='" . $date . "' GROUP BY ip")->num_rows();
        $dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->row();
        $totalpengunjung = isset($dbpengunjung->hits) ? ($dbpengunjung->hits) : 0;
        $bataswaktu = time() - 300;
        $pengunjungonline = $this->db->query("SELECT * FROM visitor WHERE online > '" . $bataswaktu . "'")->num_rows();
        $data['pengunjunghariini'] = $pengunjunghariini;
        $data['totalpengunjung'] = $totalpengunjung;
        $data['pengunjungonline'] = $pengunjungonline;

        $detail = $this->Berita_model->detailGallery($id);
        $data['gallery'] = $this->Berita_model->getAllGallery();
        $data['detail'] = $detail;
        $data['title'] = 'Detail Gallery | Ihya Ul Ummah';

        $this->load->view('templates/header2', $data);
        $this->load->view('home/detailgallery', $data);
        $this->load->view('templates/footer');
    }

    public function arsipjuni()
    {
        $ip = $this->input->ip_address();
        $date = date('Y-m-d');
        $waktu = time();
        $timeinsert = date('Y-m-d H:i:s');

        // ceh ip, apakah user sudah pernah mengakses hari ini
        $s = $this->db->query("SELECT * FROM visitor WHERE ip='" . $ip . "' AND date='" . $date . "'")->num_rows();
        $ss = isset($s) ? ($s) : 0;

        // kalau belum ada, simpan data user tersebut ke database
        if ($ss == 0) {
            $this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('" . $ip . "','" . $date . "','1','" . $waktu . "','" . $timeinsert . "')");
        } else {
            $this->db->query("UPDATE visitor SET hits=hits+1, online='" . $waktu . "' WHERE ip='" . $ip . "' AND date='" . $date . "'");
        }

        $pengunjunghariini = $this->db->query("SELECT * FROM visitor WHERE date='" . $date . "' GROUP BY ip")->num_rows();
        $dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->row();
        $totalpengunjung = isset($dbpengunjung->hits) ? ($dbpengunjung->hits) : 0;
        $bataswaktu = time() - 300;
        $pengunjungonline = $this->db->query("SELECT * FROM visitor WHERE online > '" . $bataswaktu . "'")->num_rows();
        $data['pengunjunghariini'] = $pengunjunghariini;
        $data['totalpengunjung'] = $totalpengunjung;
        $data['pengunjungonline'] = $pengunjungonline;

        // config pagination
        $config['total_rows'] = $this->Berita_model->countAllArsipjuni();
        $config['per_page'] = 5;
        $config['base_url'] = 'http://localhost/rumahquran/home/arsipjuni';

// style
        $config['full_tag_open'] = '<nav"><ul class="pagination" style="display:flex;">';
        $config['full_tag_close'] = '</ul></nav>';
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-link Active"><a class="page-link" href="#"></a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'page-link');


        // initialize
        
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $detail = $this->Berita_model->getAllArsipjuniAsc($config['per_page'], $data['start']);
        // $detail1 = $this->Berita_model->getArsip($config['per_page'], $data['start']);
        // $data['detail1'] = $detail1;
        $data['detail'] = $detail;

        $data['title'] = "Arsip Juni | Ihya UL Ummah";
        // $data['artikel'] = $this->Berita_model->detailberitalimit();

        $this->load->view('templates/header2', $data);
        $this->load->view('home/arsipjuni', $data);
        $this->load->view('templates/footer');
    }

    public function arsipjuli()
    {
        $ip = $this->input->ip_address();
        $date = date('Y-m-d');
        $waktu = time();
        $timeinsert = date('Y-m-d H:i:s');

        // ceh ip, apakah user sudah pernah mengakses hari ini
        $s = $this->db->query("SELECT * FROM visitor WHERE ip='" . $ip . "' AND date='" . $date . "'")->num_rows();
        $ss = isset($s) ? ($s) : 0;

        // kalau belum ada, simpan data user tersebut ke database
        if ($ss == 0) {
            $this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('" . $ip . "','" . $date . "','1','" . $waktu . "','" . $timeinsert . "')");
        } else {
            $this->db->query("UPDATE visitor SET hits=hits+1, online='" . $waktu . "' WHERE ip='" . $ip . "' AND date='" . $date . "'");
        }

        $pengunjunghariini = $this->db->query("SELECT * FROM visitor WHERE date='" . $date . "' GROUP BY ip")->num_rows();
        $dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->row();
        $totalpengunjung = isset($dbpengunjung->hits) ? ($dbpengunjung->hits) : 0;
        $bataswaktu = time() - 300;
        $pengunjungonline = $this->db->query("SELECT * FROM visitor WHERE online > '" . $bataswaktu . "'")->num_rows();
        $data['pengunjunghariini'] = $pengunjunghariini;
        $data['totalpengunjung'] = $totalpengunjung;
        $data['pengunjungonline'] = $pengunjungonline;

        // config pagination
        $config['total_rows'] = $this->Berita_model->countAllArsipjuli();
        $config['per_page'] = 5;
        $config['base_url'] = 'http://localhost/rumahquran/home/arsipjuli';

// style
        $config['full_tag_open'] = '<nav"><ul class="pagination" style="display:flex;">';
        $config['full_tag_close'] = '</ul></nav>';
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-link Active"><a class="page-link" href="#"></a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'page-link');


        // initialize
        
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $detail = $this->Berita_model->getAllArsipjuliAsc($config['per_page'], $data['start']);
        // $detail1 = $this->Berita_model->getArsip($config['per_page'], $data['start']);
        // $data['detail1'] = $detail1;
        $data['detail'] = $detail;

        $data['title'] = "Arsip Juli | Ihya UL Ummah";
        // $data['artikel'] = $this->Berita_model->detailberitalimit();

        $this->load->view('templates/header2', $data);
        $this->load->view('home/arsipjuli', $data);
        $this->load->view('templates/footer');
    }

    public function arsipagustus()
    {
        $ip = $this->input->ip_address();
        $date = date('Y-m-d');
        $waktu = time();
        $timeinsert = date('Y-m-d H:i:s');

        // ceh ip, apakah user sudah pernah mengakses hari ini
        $s = $this->db->query("SELECT * FROM visitor WHERE ip='" . $ip . "' AND date='" . $date . "'")->num_rows();
        $ss = isset($s) ? ($s) : 0;

        // kalau belum ada, simpan data user tersebut ke database
        if ($ss == 0) {
            $this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('" . $ip . "','" . $date . "','1','" . $waktu . "','" . $timeinsert . "')");
        } else {
            $this->db->query("UPDATE visitor SET hits=hits+1, online='" . $waktu . "' WHERE ip='" . $ip . "' AND date='" . $date . "'");
        }

        $pengunjunghariini = $this->db->query("SELECT * FROM visitor WHERE date='" . $date . "' GROUP BY ip")->num_rows();
        $dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->row();
        $totalpengunjung = isset($dbpengunjung->hits) ? ($dbpengunjung->hits) : 0;
        $bataswaktu = time() - 300;
        $pengunjungonline = $this->db->query("SELECT * FROM visitor WHERE online > '" . $bataswaktu . "'")->num_rows();
        $data['pengunjunghariini'] = $pengunjunghariini;
        $data['totalpengunjung'] = $totalpengunjung;
        $data['pengunjungonline'] = $pengunjungonline;

        // config pagination
        $config['total_rows'] = $this->Berita_model->countAllArsipagustus();
        $config['per_page'] = 5;
        $config['base_url'] = 'http://localhost/rumahquran/home/arsipagustus';

// style
        $config['full_tag_open'] = '<nav"><ul class="pagination" style="display:flex;">';
        $config['full_tag_close'] = '</ul></nav>';
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-link Active"><a class="page-link" href="#"></a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'page-link');


        // initialize
        
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $detail = $this->Berita_model->getAllArsipagustusAsc($config['per_page'], $data['start']);
        // $detail1 = $this->Berita_model->getArsip($config['per_page'], $data['start']);
        // $data['detail1'] = $detail1;
        $data['detail'] = $detail;

        $data['title'] = "Arsip Agustus | Ihya UL Ummah";
        // $data['artikel'] = $this->Berita_model->detailberitalimit();

        $this->load->view('templates/header2', $data);
        $this->load->view('home/arsipagustus', $data);
        $this->load->view('templates/footer');
    }

    public function arsipseptember()
    {
        $ip = $this->input->ip_address();
        $date = date('Y-m-d');
        $waktu = time();
        $timeinsert = date('Y-m-d H:i:s');

        // ceh ip, apakah user sudah pernah mengakses hari ini
        $s = $this->db->query("SELECT * FROM visitor WHERE ip='" . $ip . "' AND date='" . $date . "'")->num_rows();
        $ss = isset($s) ? ($s) : 0;

        // kalau belum ada, simpan data user tersebut ke database
        if ($ss == 0) {
            $this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('" . $ip . "','" . $date . "','1','" . $waktu . "','" . $timeinsert . "')");
        } else {
            $this->db->query("UPDATE visitor SET hits=hits+1, online='" . $waktu . "' WHERE ip='" . $ip . "' AND date='" . $date . "'");
        }

        $pengunjunghariini = $this->db->query("SELECT * FROM visitor WHERE date='" . $date . "' GROUP BY ip")->num_rows();
        $dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->row();
        $totalpengunjung = isset($dbpengunjung->hits) ? ($dbpengunjung->hits) : 0;
        $bataswaktu = time() - 300;
        $pengunjungonline = $this->db->query("SELECT * FROM visitor WHERE online > '" . $bataswaktu . "'")->num_rows();
        $data['pengunjunghariini'] = $pengunjunghariini;
        $data['totalpengunjung'] = $totalpengunjung;
        $data['pengunjungonline'] = $pengunjungonline;

        // config pagination
        $config['total_rows'] = $this->Berita_model->countAllArsipagustus();
        $config['per_page'] = 5;
        $config['base_url'] = 'http://localhost/rumahquran/home/arsipseptember';

// style
        $config['full_tag_open'] = '<nav"><ul class="pagination" style="display:flex;">';
        $config['full_tag_close'] = '</ul></nav>';
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-link Active"><a class="page-link" href="#"></a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'page-link');


        // initialize
        
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $detail = $this->Berita_model->getAllArsipseptemberAsc($config['per_page'], $data['start']);
        // $detail1 = $this->Berita_model->getArsip($config['per_page'], $data['start']);
        // $data['detail1'] = $detail1;
        $data['detail'] = $detail;

        $data['title'] = "Arsip september | Ihya UL Ummah";
        // $data['artikel'] = $this->Berita_model->detailberitalimit();

        $this->load->view('templates/header2', $data);
        $this->load->view('home/arsipseptember', $data);
        $this->load->view('templates/footer');
    }

    public function arsipoktober()
    {
        $ip = $this->input->ip_address();
        $date = date('Y-m-d');
        $waktu = time();
        $timeinsert = date('Y-m-d H:i:s');

        // ceh ip, apakah user sudah pernah mengakses hari ini
        $s = $this->db->query("SELECT * FROM visitor WHERE ip='" . $ip . "' AND date='" . $date . "'")->num_rows();
        $ss = isset($s) ? ($s) : 0;

        // kalau belum ada, simpan data user tersebut ke database
        if ($ss == 0) {
            $this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('" . $ip . "','" . $date . "','1','" . $waktu . "','" . $timeinsert . "')");
        } else {
            $this->db->query("UPDATE visitor SET hits=hits+1, online='" . $waktu . "' WHERE ip='" . $ip . "' AND date='" . $date . "'");
        }

        $pengunjunghariini = $this->db->query("SELECT * FROM visitor WHERE date='" . $date . "' GROUP BY ip")->num_rows();
        $dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->row();
        $totalpengunjung = isset($dbpengunjung->hits) ? ($dbpengunjung->hits) : 0;
        $bataswaktu = time() - 300;
        $pengunjungonline = $this->db->query("SELECT * FROM visitor WHERE online > '" . $bataswaktu . "'")->num_rows();
        $data['pengunjunghariini'] = $pengunjunghariini;
        $data['totalpengunjung'] = $totalpengunjung;
        $data['pengunjungonline'] = $pengunjungonline;

        // config pagination
        $config['total_rows'] = $this->Berita_model->countAllArsipagustus();
        $config['per_page'] = 5;
        $config['base_url'] = 'http://localhost/rumahquran/home/arsipoktober';

// style
        $config['full_tag_open'] = '<nav"><ul class="pagination" style="display:flex;">';
        $config['full_tag_close'] = '</ul></nav>';
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-link Active"><a class="page-link" href="#"></a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'page-link');


        // initialize
        
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $detail = $this->Berita_model->getAllArsipoktoberAsc($config['per_page'], $data['start']);
        // $detail1 = $this->Berita_model->getArsip($config['per_page'], $data['start']);
        // $data['detail1'] = $detail1;
        $data['detail'] = $detail;

        $data['title'] = "Arsip oktober | Ihya UL Ummah";
        // $data['artikel'] = $this->Berita_model->detailberitalimit();

        $this->load->view('templates/header2', $data);
        $this->load->view('home/arsipoktober', $data);
        $this->load->view('templates/footer');
    }

}
