<?php
class Login extends CI_Controller {
    public function index() {
        $this->load->view('login');
    }

    public function formlogin() {
        $user = $this->input->post('Username');
        $pass = $this->input->post('Password');

        $login = $this->user->ceklogin($user, $pass);

        if (!empty($login)) {
            // login berhasil
            $this->session->set_userdata($login);
            redirect(base_url('pegawai/list'));
        } else {
            // login gagal
            $this->session->set_flashdata('Gagal Login', 'Silahkan Cek Username Dan Email Anda');
            redirect(base_url('login'));
        }
    }
}
