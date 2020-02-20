<?php
class Login extends CI_Controller{

  function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
	}

	function login_coba(){
		$this->load->view('login.php');
	}
	public function aksi_login(){
		$username = $this->input->post('username');

		$password = $this->input->post('password');

		$where = array(
			'USERNAME' => $username,
			'PASSWORD' => md5($password)
			);

		$cek = $this->Login_model->ceklogin("holder",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => 'login',
				'role'=> 'admin'
				);

			$this->session->set_userdata($data_session);

			redirect(base_url('pegawai/dashboard'));

		}else{
			$this->session->set_flashdata('msg','Username atau Password salah !!!');
			redirect('pegawai');
		}
	}

  public function loginpengunjung(){
		$NIP = $this->input->post('NIP');

		$where = array(
			'NIP' => $NIP
			);

		$cek = $this->Login_model->loginpengunjung($where);
		// var_dump($cek); exit();
		if($cek > 0){

			$data_session = array(
				'nama' => $NIP,
				'status' => 'login',
				'role'=>'pegawai'
				);

	  $this->session->set_userdata($data_session);
      $data['pegawai'] = $this->Login_model->hasil($NIP);
      $this->load->view("pegawai/listp", $data);

		}else{
			
			$this->session->set_flashdata('msg','NIP tidak ditemukan !!!');
			redirect('pegawai');
		}
	}

 public	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('pegawai'));
	}
}
