<?php
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

        $data['title'] = "Gallery | Ihya UL Ummah";
        $data['gallery'] = $this->Berita_model->getAllGallery();

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

        $data['title'] = "Artikel | Ihya UL Ummah";
        $data['artikel'] = $this->Berita_model->detailberitalimit();

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
}
