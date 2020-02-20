<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_model extends CI_Model
{
    private $_table = "pegawai";
    public $NIP;
    public $NAMA;
    public $UMUR;
    public $ESELON;
    public $JABATAN;
    public $TAMATANJABATAN;
    public $IDPANGKAT;
    public $GOLPANGKAT;
    public $TAMATANPANGKAT;
    public $JENJANG_PENDIDIKAN;
    public $TAHUN_PENDIDIKAN;
    public $MSKRJA_GOLONGAN;
    public $MSKRJA_KESELURUHAN;
    public $JENIS_KELAMIN;
    public $CUTI;
    public $CUTI_DIPAKAI;
    public $CUTI_SISA;
    public $STATUS;
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

            ['field' => 'UMUR',
            'label' => 'UMUR',
            'rules' => 'numeric'],

            ['field' => 'ESELON',
            'label' => 'ESELON',
            'rules' => 'required'],

            ['field' => 'JABATAN',
            'label' => 'JABATAN',
            'rules' => 'required'],

            ['field' => 'TAMATANJABATAN',
            'label' => 'TAMATANJABATAN',
            'rules' => 'required'],

            ['field' => 'IDPANGKAT',
            'label' => 'IDPANGKAT',
            'rules' => 'required'],

            ['field' => 'TAMATANPANGKAT',
            'label' => 'TAMATANPANGKAT',
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

            ['field' => 'STATUS',
            'label' => 'STATUS',
            'rules' => 'required']

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function getapril()
    {
      $this->db->where('KENAIKANBERIKUTNYA LIKE', '%_04_%');
      $query = $this->db->get('pegawai');
      return $query->result();
    }
    public function getoktober()
    {
      $this->db->where('KENAIKANBERIKUTNYA LIKE', '%_10_%');
      $query = $this->db->get('pegawai');
      return $query->result();
    }

    public function eselongrafik(){
    $total = $this->db->query("select count(ESELON) from pegawai where ESELON = 'II.B'");
    }
    public function getById($NIP)
    {
        return $this->db->get_where($this->_table, ["NIP" => $NIP])->row();
    }

    public function save()
    {
      $kosong = "-";
        $post = $this->input->post();
        $this->NIP = $post["NIP"];
        $this->NAMA = $post["NAMA"];
        $this->UMUR = $post["UMUR"];
        $this->ESELON = $post["ESELON"];
        $this->JABATAN = $post["JABATAN"];
        $this->TAMATANJABATAN = $post["TAMATANJABATAN"];
        $this->IDPANGKAT = $post["IDPANGKAT"];
        $this->GOLPANGKAT = $post["GOLPANGKAT"];
        $this->TAMATANPANGKAT = $post["TAMATANPANGKAT"];
        //KENAIKAN JABATAN
        if ($post["IDPANGKAT"] == 18) {
          $this->PANGKATBERIKUTNYA = $kosong;
        }
        else {
        $this->PANGKATBERIKUTNYA = $post["TAMATANPANGKAT"] = date('d-m-Y', strtotime('+4 year', strtotime( $post["TAMATANPANGKAT"] )));
        }
        $this->KENAIKANTERAHIR = $post["KENAIKANTERAHIR"];
        $bulan = explode(" ",$post["MSKRJA_GOLONGAN"]);
        // print_r($bulan);
        if ($bulan[2] !=0)
        {
          $bulankurang = 24 - $bulan[2];
          // $bulankurang + $bulan[2] = $bulanfix
        }
        else
        {
          $bulankurang = 24;
        }
        // print_r($bulankurang);
        // KENAIKAN BERKALA
        if ($post["ESELON"] != "II.A" || $post["ESELON"] != "II.B" || $post["ESELON"] != "II.C" || $post["ESELON"] != "II.D" && $post["UMUR"]<= 60 )
        {
            $post["KENAIKANTERAHIR"] = date('d-m-Y', strtotime('+'.$bulankurang.'month', strtotime( $post["KENAIKANTERAHIR"] )));
        }
        elseif ($post["UMUR"]<=58)
        {
            $post["KENAIKANTERAHIR"] = date('d-m-Y', strtotime('+'.$bulankurang.'month', strtotime( $post["KENAIKANTERAHIR"] )));
        }
        else
        {
          $this->KENAIKANTERAHIR = $post["KENAIKANTERAHIR"];
        }

        $bulan = date('m',strtotime($post["KENAIKANTERAHIR"]));
        // $bulankenaikanterahir = substr($post["KENAIKANTERAHIR"],3,2);


        if ($bulan < '04' || $bulan == '10'|| $bulan == '11' || $bulan == '12') {
          $this->KENAIKANBERIKUTNYA = date('d-04-Y', strtotime($post["KENAIKANTERAHIR"]));
            // $pecah = explode('-',$post["KENAIKANTERAHIR"]);
            // $pecah[1] = $pembulatanapril;
            // $pecah = implode('-',$pecah);
            // $post["KENAIKANBERIKUTNYA"] = $pecah;
            // $this->KENAIKANBERIKUTNYA = $post["KENAIKANBERIKUTNYA"];
            // $april = mktime(0, 0, 0, 04, $pecah[0],$pecah[3]);
            // $fixapril = date("d-m-Y",$april);
            // $this->KENAIKANBERIKUTNYA = $fixapril;
            // $this->KENAIKANBERIKUTNYA = $post["KENAIKANTERAHIR"] = date('d-m-Y', strtotime('month 04'.$post["KENAIKANTERAHIR"]));
            // $this->KENAIKANBERIKUTNYA = $post["KENAIKANTERAHIR"] = date('d-m-Y',strtotime($april.'month', strtotime($post["KENAIKANTERAHIR"])));

        }
        elseif ($bulan >'10')  {
          $this->KENAIKANBERIKUTNYA = date('d-10-Y', strtotime($post["KENAIKANTERAHIR"]));
         // $pecah = explode('-',$post["KENAIKANTERAHIR"]);
         // $pecah[1] = $pembulatoktober;
         // $pecah = implode('-',$pecah);
         // $post["KENAIKANBERIKUTNYA"] = $pecah;
         // $this->KENAIKANBERIKUTNYA = $post["KENAIKANBERIKUTNYA"];
         //  $oktober = mktime(0, 0, 0, 10, $pecah[0],$pecah[3]);
         //  $fixoktorber = date("d-m-Y",$oktober);
         //  $this->KENAIKANBERIKUTNYA = $fixoktober;
         //  $this->KENAIKANBERIKUTNYA = $post["KENAIKANTERAHIR"] = date('d-m-Y', strtotime('month 10'.$post["KENAIKANTERAHIR"]));
         //  date('d-10-Y', strtotime($post["KENAIKANTERAHIR"]));
         //  $kenaikanterahir = '01-06-2019';
         // $kenaikan = date('d-m-Y', strtotime($kenaikanterahir));
         // $april = '04';
         // $oktober = '10';
         //
         // $bulankenaikanterahir = substr($kenaikanterahir,3,2);
          //
          // if ($bulankenaikanterahir<$april ||$bulankenaikanterahir == '10'|| $bulankenaikanterahir == '11' || $bulankenaikanterahir == '12') {
          //   if ($bulankenaikanterahir>$oktober) {
          //           $pecah = explode('-',$kenaikan);
          //            $pecah[1] = '04';
          //          $pecah = implode('-',$pecah);
          //       echo $pecah;
          //   }
          // }
          // else {
          //   $pecah = explode('-',$kenaikan);
          //  $pecah[1] = '10';
          //  $pecah = implode('-',$pecah);
          //     echo $pecah;
          // }
          //$this->KENAIKANBERIKUTNYA =  $post["KENAIKANTERAHIR"] = date('d-m-Y',strtotime($oktober.'month', strtotime($post["KENAIKANTERAHIR"])));
        }

        $this->JENJANG_PENDIDIKAN = $post["JENJANG_PENDIDIKAN"];
        $this->TAHUN_PENDIDIKAN = $post["TAHUN_PENDIDIKAN"];
        $this->MSKRJA_GOLONGAN = $post["MSKRJA_GOLONGAN"];
        $this->MSKRJA_KESELURUHAN = $post["MSKRJA_KESELURUHAN"];
        $this->JENIS_KELAMIN = $post["JENIS_KELAMIN"];
        $this->CUTI = $post["CUTI"];
        $this->CUTI_DIPAKAI = $post["CUTI_DIPAKAI"];
        $this->CUTI_SISA = $post["CUTI"] - $post["CUTI_DIPAKAI"];
        $this->STATUS = $post["STATUS"];
        $this->IMG = $this->_uploadImagePegawai();
        $this->db->insert($this->_table, $this);
    }

    public function kgbapril()
    {
      $hasil=$this->db->query("SELECT * FROM pegawai where KENAIKANBERIKUTNA like '%_04_%'");
          return $hasil;
    }
    public function kgboktober()
    {
      $hasil=$this->db->query("SELECT * FROM pegawai where KENAIKANBERIKUTNA like '%_10_%'");
          return $hasil;
    }
    public function update()
    {
        $post = $this->input->post();
        $this->NIP = $post["NIP"];
        $this->NAMA = $post["NAMA"];
        // $this->TMPT_LAHIR = $post["TMPT_LAHIR"];
        // $this->TGL_LAHIR = $post["TGL_LAHIR"];
        $this->UMUR = $post["UMUR"];
        $this->ESELON = $post["ESELON"];
        $this->JABATAN = $post["JABATAN"];
        $this->TAMATANJABATAN = $post["TAMATANJABATAN"];
        $this->IDPANGKAT = $post["IDPANGKAT"];
        $this->TAMATANPANGKAT = $post["TAMATANPANGKAT"];
        $this->JENJANG_PENDIDIKAN = $post["JENJANG_PENDIDIKAN"];
        $this->TAHUN_PENDIDIKAN = $post["TAHUN_PENDIDIKAN"];
        $this->MSKRJA_GOLONGAN = $post["MSKRJA_GOLONGAN"];
        $this->MSKRJA_KESELURUHAN = $post["MSKRJA_KESELURUHAN"];
        $this->JENIS_KELAMIN = $post["JENIS_KELAMIN"];
        $this->CUTI = $post["CUTI"];
        $this->CUTI_DIPAKAI = $post["CUTI_DIPAKAI"];
        $this->CUTI_SISA = $post["CUTI"] - $post["CUTI_DIPAKAI"];
        $this->STATUS = $post["STATUS"];
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

        return "defaultman.jpg";
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
    public function countAselon($where)
    {
      $this->db->where('ESELON',$where);
      return $this->db->get('pegawai')->num_rows();
    }

    public function total()
    {
      return $this->db->get('pegawai')->num_rows();
    }

}
