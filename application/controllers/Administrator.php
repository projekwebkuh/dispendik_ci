<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrator extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required', [
            'required' => '*Username harus di isi'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => '*Password harus di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $data['adtitle'] = 'Portal Admin Dispendik';
            $this->load->view('auth/v_login', $data);
        } else {
            // VALIDASI SUKSESS
            $this->_login();
        }
    }

    // maka akan mengarah kesini, UNTUK MENGECEK USERNAME DAN PASSWORD
    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('admin', ['username' => $username])->row_array();

        // jika admin ada di database lalu cek paswordnya
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username']
                ];
                $this->session->set_userdata($data);
                redirect('adminpage');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                Password salah!</div>');
                redirect('administrator');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Pengguna tidak di temukan, silahkan login dengan benar!</div>');
            redirect('administrator');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Berhasil Log out!</div>');
        redirect('administrator');
    }
}
