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
        $data['title'] = 'Rumah Quran | Ihya UL Ummah';
        $data['artikel'] = $this->Berita_model->detailberitalimit();
        $data['gallery'] = $this->Berita_model->detailgallerylimit();

        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }

    public function about()
    {
        $data['title'] = 'Tentang Kami | Ihya UL Ummah';

        $this->load->view('templates/header2', $data);
        $this->load->view('home/about');
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
        $data['title'] = 'Kontak | Ihya UL Ummah';

        $this->load->view('templates/header2', $data);
        $this->load->view('home/kontak');
        $this->load->view('templates/footer');
    }

    public function program()
    {
        $data['artikel'] = $this->Berita_model->getAllBeritaDesc();
        $data['title'] = "Berantas Buta Huruf Quran | Ihya UL Ummah";

        $this->load->view('templates/header2', $data);
        $this->load->view('home/program', $data);
        $this->load->view('templates/footer');
    }

    public function tahsin()
    {
        $data['artikel'] = $this->Berita_model->getAllBeritaDesc();
        $data['title'] = "Tahsin Tilawah | Ihya UL Ummah";
        $this->load->view('templates/header2', $data);
        $this->load->view('home/tahsin', $data);
        $this->load->view('templates/footer');
    }

    public function tahfizh()
    {
        $data['artikel'] = $this->Berita_model->getAllBeritaDesc();
        $data['title'] = "Tahfizh Quran | Ihya UL Ummah";
        $this->load->view('templates/header2', $data);
        $this->load->view('home/tahfizh', $data);
        $this->load->view('templates/footer');
    }

    public function gallery()
    {
        $data['title'] = "Gallery | Ihya UL Ummah";
        $data['gallery'] = $this->Berita_model->getAllGallery();

        $this->load->view('templates/header2', $data);
        $this->load->view('home/gallery', $data);
        $this->load->view('templates/footer');
    }

    public function artikel()
    {
        $data['title'] = "Artikel | Ihya UL Ummah";
        $data['artikel'] = $this->Berita_model->detailberitalimit();

        $this->load->view('templates/header2', $data);
        $this->load->view('home/artikel', $data);
        $this->load->view('templates/footer');
    }
    public function detailartikel($id)
    {
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
        $detail = $this->Berita_model->detailGallery($id);
        $data['gallery'] = $this->Berita_model->getAllGallery();
        $data['detail'] = $detail;
        $data['title'] = 'Detail Gallery | Ihya Ul Ummah';

        $this->load->view('templates/header2', $data);
        $this->load->view('home/detailgallery', $data);
        $this->load->view('templates/footer');
    }
}
