<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrator extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->load->model('Berita_model');
        $this->load->model('User_model');
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Administrator | Ihya UL Ummah';
        $data['users'] = $this->User_model->getAllUser();

        $this->load->view('administrator/header', $data);
        $this->load->view('administrator/index', $data);
        $this->load->view('administrator/footer');
    }
    public function adduser()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
            'is_unique' => 'username sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('nama_lengkap', 'Nama_lengkap', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
            'matches' => 'Kata Sandi tidak sama!',
            'min_length' => 'Kata Sandi Terlalu Pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data['title'] = 'Administrator | Ihya UL Ummah';
            $this->load->view('administrator/header', $data);
            $this->load->view('administrator/adduser');
            $this->load->view('administrator/footer');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'nama_lengkap' => htmlspecialchars($this->input->post('nama_lengkap', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'foto' => 'boy.png',
                'level' => 'Admin'
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Selamat, User Berhasil ditambah!</strong></div>');
            redirect('administrator/adduser');
        }
    }
    public function alluser()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Administrator | Ihya UL Ummah';
        $data['users'] = $this->User_model->getAllUser();

        $this->load->view('administrator/header', $data);
        $this->load->view('administrator/alluser', $data);
        $this->load->view('administrator/footer');
    }
    public function addartikel()
    {
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim', [
            'required' => 'Kategori harus diisi!'
        ]);
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim', [
            'required' => 'Judul harus diisi!'
        ]);
        $this->form_validation->set_rules('sub_judul', 'Sub_judul', 'required|trim', [
            'required' => 'Sub judul harus diisi!'
        ]);
        $this->form_validation->set_rules('isi_berita', 'Isi_berita', 'required|trim', [
            'required' => 'Isi berita harus diisi!'
        ]);
        // $this->form_validation->set_rules('gambar', 'Gambar', 'required', [
        //     'required' => 'Gambar belum dipilih!'
        // ]);
        $this->form_validation->set_rules('keterangan_gambar', 'Keterangan_gambar', 'required|trim', [
            'required' => 'Keterangan gambar harus diisi!'
        ]);

        if ($this->form_validation->run() == false) {
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data['title'] = 'Administrator | Ihya UL Ummah';

            $this->load->view('administrator/header', $data);
            $this->load->view('administrator/addartikel', $data);
            $this->load->view('administrator/footer');
        } else {
            $config['upload_path']          = './assets/img/artikel/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar')) {
                $gambar = '';
            } else {
                $gambar = $this->upload->data();
                $gambar = $gambar['file_name'];
            }
            $data = array(
                'kategori' => htmlspecialchars($this->input->post('kategori')),
                'judul' => htmlspecialchars($this->input->post('judul')),
                'sub_judul' => htmlspecialchars($this->input->post('sub_judul')),
                'headline' => 'Y',
                'isi_berita' => nl2br(htmlspecialchars($this->input->post('isi_berita'))),
                'keterangan_gambar' => htmlspecialchars($this->input->post('keterangan_gambar')),
                'tanggal' => date('Y-m-d'),
                'jam' => time(),
                'gambar' => $gambar,
                'user' => htmlspecialchars($this->input->post('user'))
            );
            $this->db->insert('artikel', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Artikel Berhasil ditambahkan!</strong></div>');
            redirect('administrator/addartikel');
        }
    }
    public function allpost()
    {
        $data['title'] = 'Administrator | Ihya UL Ummah';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['artikel'] = $this->Berita_model->getAllBerita();

        $this->load->view('administrator/header', $data);
        $this->load->view('administrator/allpost', $data);
        $this->load->view('administrator/footer');
    }
    public function editpost($id)
    {
        $data['title'] = 'Administrator | Ihya UL Ummah';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $detail = $this->Berita_model->detailBerita($id);
        $data['detail'] = $detail;

        $this->load->view('administrator/header', $data);
        $this->load->view('administrator/editpost', $data);
        $this->load->view('administrator/footer');
    }
    public function edit_post()
    {
        $config['upload_path']          = './assets/img/artikel/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('gambar')) {
            $gambar = '';
        } else {
            $gambarlama = $this->input->post('gambarlama');
            $gambar = $this->upload->data('file_name');
            if ($gambarlama != $gambar) {
                unlink(FCPATH . 'assets/img/artikel/' . $gambarlama);
            }
            $this->db->set('gambar', $gambar);
        }
        $id = $this->input->post('id_berita');
        $kategori = htmlspecialchars($this->input->post('kategori'));
        $judul = htmlspecialchars($this->input->post('judul'));
        $sub_judul = htmlspecialchars($this->input->post('sub_judul'));
        $isi_berita = nl2br(htmlspecialchars($this->input->post('isi_berita')));
        $keterangan_gambar = htmlspecialchars($this->input->post('keterangan_gambar'));
        $users = htmlspecialchars($this->input->post('user'));

        $data = array(
            'kategori' => $kategori,
            'judul' => $judul,
            'sub_judul' => $sub_judul,
            'headline' => 'Y',
            'isi_berita' => $isi_berita,
            'keterangan_gambar' => $keterangan_gambar,
            'tanggal' => date('Y-m-d'),
            'jam' => time(),
            'user' => $users
        );
        if (!empty($gambar)) {
            $data['gambar'] = $gambar;
        }
        $where = array('id_berita' => $id);
        $this->Berita_model->updateData('artikel', $where, $data);
        redirect('administrator/allpost');
    }
    public function hapus_artikel($id)
    {
        // $where = array('id_berita' => $id);
        // $this->Berita_model->hapus_data($where, 'artikel');
        $data = $this->Berita_model->ambil_id_gambar($id);
        $path = './assets/img/artikel/';
        @unlink($path . $data->gambar);
        if ($this->Berita_model->hapus_data($id) == TRUE) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil dihapus!</strong></div>');
        }
        redirect('administrator/allpost');
    }
    public function addgallery()
    {
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim', [
            'required' => 'Kategori harus diisi!'
        ]);
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim', [
            'required' => 'Judul harus diisi!'
        ]);
        $this->form_validation->set_rules('isi_berita', 'Isi_berita', 'required|trim', [
            'required' => 'Isi berita harus diisi!'
        ]);
        $this->form_validation->set_rules('keterangan_gambar', 'Keterangan_gambar', 'required|trim', [
            'required' => 'Keterangan gambar harus diisi!'
        ]);

        if ($this->form_validation->run() == false) {
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data['title'] = 'Administrator | Ihya UL Ummah';

            $this->load->view('administrator/header', $data);
            $this->load->view('administrator/addgallery', $data);
            $this->load->view('administrator/footer');
        } else {
            $config['upload_path']          = './assets/img/artikel/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar')) {
                $gambar = '';
            } else {
                $gambar = $this->upload->data();
                $gambar = $gambar['file_name'];
            }
            $data = array(
                'kategori' => htmlspecialchars($this->input->post('kategori')),
                'judul' => htmlspecialchars($this->input->post('judul')),
                'isi_berita' => nl2br(htmlspecialchars($this->input->post('isi_berita'))),
                'gambar' => $gambar,
                'keterangan_gambar' => htmlspecialchars($this->input->post('keterangan_gambar')),
                'tanggal' => date('Y-m-d'),
                'jam' => date('h:i A'),
                'user' => htmlspecialchars($this->input->post('user'))
            );
            $this->db->insert('gallery', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Gallery Berhasil ditambahkan!</strong></div>');
            redirect('administrator/addartikel');
        }
    }
    public function allgallery()
    {
        $data['title'] = 'Administrator | Ihya UL Ummah';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['gallery'] = $this->Berita_model->getAllGallery();

        $this->load->view('administrator/header', $data);
        $this->load->view('administrator/allgallery', $data);
        $this->load->view('administrator/footer');
    }
    public function editgallery($id)
    {
        $data['title'] = 'Administrator | Ihya UL Ummah';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $detail = $this->Berita_model->detailGallery($id);
        $data['detail'] = $detail;

        $this->load->view('administrator/header', $data);
        $this->load->view('administrator/editgallery', $data);
        $this->load->view('administrator/footer');
    }
    public function edit_gallery()
    {
        $config['upload_path']          = './assets/img/artikel/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('gambar')) {
            $gambar = '';
        } else {
            $gambarlama = $this->input->post('gambarlama');
            $gambar = $this->upload->data('file_name');
            if ($gambarlama != $gambar) {
                unlink(FCPATH . 'assets/img/artikel/' . $gambarlama);
            }
            $this->db->set('gambar', $gambar);
        }
        $id = $this->input->post('id_gallery');
        $kategori = htmlspecialchars($this->input->post('kategori'));
        $judul = htmlspecialchars($this->input->post('judul'));
        $isi_berita = nl2br(htmlspecialchars($this->input->post('isi_berita')));
        $keterangan_gambar = htmlspecialchars($this->input->post('keterangan_gambar'));
        $users = htmlspecialchars($this->input->post('user'));

        $data = array(
            'kategori' => $kategori,
            'judul' => $judul,
            'isi_berita' => $isi_berita,
            'keterangan_gambar' => $keterangan_gambar,
            'tanggal' => date('Y-m-d'),
            'jam' => date('h:i A'),
            'user' => $users
        );
        if (!empty($gambar)) {
            $data['gambar'] = $gambar;
        }
        $where = array('id_gallery' => $id);
        $this->Berita_model->updateData('gallery', $where, $data);
        redirect('administrator/allgallery');
    }
    public function hapus_gallery($id)
    {
        $data = $this->Berita_model->ambil_id_gambar_gallery($id);
        $path = './assets/img/artikel/';
        @unlink($path . $data->gambar);
        if ($this->Berita_model->hapus_data_gallery($id) == TRUE) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil dihapus!</strong></div>');
        }
        redirect('administrator/allgallery');
    }
}
