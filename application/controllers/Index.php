<?php
class Index extends CI_Controller {
    public function __construct()
  {
		parent::__construct();
    $this->load->model('Pegawai_model');
    $this->load->library('form_validation');
	}

	public function index()
	{
    $data["pegawai"] = $this->Pegawai_model->getAll();
    $this->load->view("pegawai/list", $data);
	}
  public function login()
  {
    $this->load->view('login');
  }
}
