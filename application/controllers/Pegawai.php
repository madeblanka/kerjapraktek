<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
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

    public function add()
    {
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
            redirect('/pegawai/edit/'.$pegawai->NIP);
        } else {
            $this->load->view("pegawai/edit_form", $data);
        }

    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if ($this->pegawai->delete($id)) {
            redirect(site_url('pegawai'));
        }
    }
}
