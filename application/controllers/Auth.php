<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required', [
            'required' => 'username harus diisi!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'password harus diisi!'
        ]);
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Administrator | Ihya UL Ummah';

            $this->load->view('component/header', $data);
            $this->load->view('auth/index');
            $this->load->view('component/footer');
        } else {
            // validation success
            $this->_login();
        }
    }
    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            // usernya ada
            if ($user['level'] == 'Admin') {
                // cek password
                if (password_verify($password, $user['password'])) {
                    // data user
                    $data = [
                        'username' => $user['username'],
                        'level' => $user['level']
                    ];
                    $this->session->set_userdata($data);
                    redirect('administrator');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Password Salah!</strong></div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>username tidak terdaftar sebagai Admin</strong></div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>username belum terdaftar</strong></div>');
            redirect('auth');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil Logout!</strong></div>');
        redirect('auth');
    }
}
