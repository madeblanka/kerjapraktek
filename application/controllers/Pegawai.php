<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pegawai_model');
        $this->load->model('Login_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
      $this->load->view('menuutama/index');
    }
    public function countdownkgb()
    {
      $data["pegawai"] = $this->Pegawai_model->getAll();
      $this->load->view("pegawai/countdownkgb", $data);
    }
    public function countdownkpb()
    {
      $data["pegawai"] = $this->Pegawai_model->getAll();
      $this->load->view("pegawai/countdownkpb", $data);
    }
    public function listpegawai()
    {
      $data['pegawai'] = $this->Pegawai_model->getAll();
      $this->load->view("pegawai/list", $data);
    }
    public function listapril()
    {
      $data["pegawai"] = $this->Pegawai_model->getapril();
      $this->load->view("pegawai/listapril", $data);
    }

    public function listoktober()
    {
      $data["pegawai"] = $this->Pegawai_model->getoktober();
      $this->load->view("pegawai/listoktober", $data);
    }

    public function list_detail($NIP = null)
    {
      if (!isset($NIP)) redirect('pegawai/list_detail');

      $pegawai = $this->Pegawai_model;
      $validation = $this->form_validation;

      $validation->set_rules($pegawai->rules());

      $data["pegawai"] = $pegawai->getById($NIP);
      if (!$data["pegawai"]) show_404();
      if ($validation->run()) {
          // var_dump($pegawai);
          $pegawai->update();
          $this->session->set_flashdata('success', 'Berhasil disimpan');
          redirect('pegawai/list_detail/'.$pegawai->NIP);
      } else {
          $this->load->view("pegawai/list_detail", $data);
      }
    
    }
    public function grafik(){
      $data['pegawai']=$this->Pegawai_model->eselongrafik();
      return $this->load->view('pegawai/grafikeselon', $data);
    }
    public function waktu()
    {
        $this->load->view("pegawai/datetime");
    }
    public function printlist()
    {
      $data["pegawai"] = $this->Pegawai_model->getAll();
      $this->load->view("printlist/dist/index", $data);
    }
    public function add()
    {
      if($this->session->userdata('status') != "login"){
        $message = "Silahkan Login Dahulu";
        echo "<script type='text/javascript'>alert('$message');window.location.href='../pegawai';</script>";
      }

        $pegawai = $this->Pegawai_model;
        $validation = $this->form_validation;
        $validation->set_rules($pegawai->rules());

        if ($validation->run()) {
            $pegawai->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("pegawai/new_form");
    }

    public function edit($NIP = null)
    {
      if($this->session->userdata('status') != "login"){
        $message = "Silahkan Login Dahulu";
        echo "<script type='text/javascript'>alert('$message');window.location.href='../../pegawai';</script>";
      }

        if (!isset($NIP)) redirect('Pegawai');

        $pegawai = $this->Pegawai_model;
        $validation = $this->form_validation;

        $validation->set_rules($pegawai->rules());

        $data["pegawai"] = $pegawai->getById($NIP);
        if (!$data["pegawai"]) show_404();
        if ($validation->run()) {
            // var_dump($pegawai);
            $pegawai->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('pegawai/edit/'.$pegawai->NIP);
        } else {
            $this->load->view("pegawai/edit_form", $data);
        }

    }

    public function delete($NIP=null)
    {
      if($this->session->userdata('status') != "login"){
        $message = "Silahkan Login Dahulu";
        echo "<script type='text/javascript'>alert('$message');window.location.href='../../pegawai';</script>";
      }
       elseif (!isset($NIP)) show_404();
        if ($this->Pegawai_model->delete($NIP)) {
            redirect(site_url('pegawai'));
        }
    }
    public function dashboard()
    {
        $this->load->view('pegawai/dashboard');
    }
}
