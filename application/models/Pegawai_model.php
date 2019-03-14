<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_model extends CI_Model
{
    private $_table = "pegawai";

    public $NIP;
    public $NAMA;
    public $TMPT_LAHIR;
    public $TGL_LAHIR;
    public $UMUR;
    public $ESELON;
    public $JABATAN;
    public $JENJANG_PENDIDIKAN;
    public $TAHUN_PENDIDIKAN;
    public $MSKRJA_GOLONGAN;
    public $MSKRJA_KESELURUHAN;
    public $JENIS_KELAMIN;
    public $CUTI;
    public $CUTI_DIPAKAI;
    public $CUTI_SISA;
    public $IMG = "defaultman.jpg";

    public function rules()
    {
        return [

            ['field' => 'NIP',
            'label' => 'NIP',
            'rules' => 'required'],

            ['field' => 'NAMA',
            'label' => 'NAMA',
            'rules' => 'required'],

            ['field' => 'TMPT_LAHIR',
            'label' => 'TMPT_LAHIR',
            'rules' => 'required'],

            ['field' => 'TGL_LAHIR',
            'label' => 'TGL_LAHIR',
            'rules' => 'required'],

            ['field' => 'UMUR',
            'label' => 'UMUR',
            'rules' => 'numeric'],

            ['field' => 'ESELON',
            'label' => 'ESELON',
            'rules' => 'required'],

            ['field' => 'JABATAN',
            'label' => 'JABATAN',
            'rules' => 'required'],

            ['field' => 'JENJANG_PENDIDIKAN',
            'label' => 'JENJANG_PENDIDIKAN',
            'rules' => 'required'],

            ['field' => 'TAHUN_PENDIDIKAN',
            'label' => 'TAHUN_PENDIDIKAN',
            'rules' => 'numeric'],

            ['field' => 'MSKRJA_GOLONGAN',
            'label' => 'MSKRJA_GOLONGAN',
            'rules' => 'required'],

            ['field' => 'MSKRJA_KESELURUHAN',
            'label' => 'MSKRJA_KESELURUHAN',
            'rules' => 'required'],

            ['field' => 'JENIS_KELAMIN',
            'label' => 'JENIS_KELAMIN',
            'rules' => 'required'],

            ['field' => 'CUTI',
            'label' => 'CUTI',
            'rules' => 'required'],

            ['field' => 'CUTI_DIPAKAI',
            'label' => 'CUTI_DIPAKAI',
            'rules' => 'required'],

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($NIP)
    {
        return $this->db->get_where($this->_table, ["NIP" => $NIP])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->NIP = $post["NIP"];
        $this->NAMA = $post["NAMA"];
        $this->TMPT_LAHIR = $post["TMPT_LAHIR"];
        $this->TGL_LAHIR = $post["TGL_LAHIR"];
        $this->UMUR = $post["UMUR"];
        $this->ESELON = $post["ESELON"];
        $this->JABATAN = $post["JABATAN"];
        $this->JENJANG_PENDIDIKAN = $post["JENJANG_PENDIDIKAN"];
        $this->TAHUN_PENDIDIKAN = $post["TAHUN_PENDIDIKAN"];
        $this->MSKRJA_GOLONGAN = $post["MSKRJA_GOLONGAN"];
        $this->MSKRJA_KESELURUHAN = $post["MSKRJA_KESELURUHAN"];
        $this->JENIS_KELAMIN = $post["JENIS_KELAMIN"];
        $this->CUTI = $post["CUTI"];
        $this->CUTI_DIPAKAI = $post["CUTI_DIPAKAI"];
        $this->CUTI_SISA = $post["CUTI"] - $post["CUTI_DIPAKAI"];
        $this->IMG = $this->_uploadImagePegawai();
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->NIP = $post["NIP"];
        $this->NAMA = $post["NAMA"];
        $this->TMPT_LAHIR = $post["TMPT_LAHIR"];
        $this->TGL_LAHIR = $post["TGL_LAHIR"];
        $this->UMUR = $post["UMUR"];
        $this->ESELON = $post["ESELON"];
        $this->JABATAN = $post["JABATAN"];
        $this->JENJANG_PENDIDIKAN = $post["JENJANG_PENDIDIKAN"];
        $this->TAHUN_PENDIDIKAN = $post["TAHUN_PENDIDIKAN"];
        $this->MSKRJA_GOLONGAN = $post["MSKRJA_GOLONGAN"];
        $this->MSKRJA_KESELURUHAN = $post["MSKRJA_KESELURUHAN"];
        $this->JENIS_KELAMIN = $post["JENIS_KELAMIN"];
        $this->CUTI = $post["CUTI"];
        $this->CUTI_DIPAKAI = $post["CUTI_DIPAKAI"];
        $this->CUTI_SISA = $post["CUTI"] - $post["CUTI_DIPAKAI"];
        if (!empty($_FILES["IMG"]["NAMA"])) {
          $this->IMG = $this->_uploadImagePegawai();
        } else {
          $this->IMG = $post["old_image"];
        }

        $this->db->update($this->_table, $this, array('NIP' => $post['NIP']));
    }

    public function delete($NIP)
    {
        $this->_deleteImagePegawai($NIP);
        return $this->db->delete($this->_table, array("NIP" => $NIP));
    }

    private function _uploadImagePegawai()
    {
        $config['upload_path']          = './upload/pegawai/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->NIP;
        $config['overwrite']			      = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('IMG')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }

    private function _deleteImagePegawai($NIP)
    {
      $pegawai = $this->getById($NIP);

      if ($pegawai->IMG != "default.jpg")
      {
	         $filename = explode(".", $pegawai->IMG)[0];
		       return array_map('unlink', glob(FCPATH."upload/pegawai/$filename.*"));
      }

    }

}
