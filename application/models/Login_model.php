<?php
class Login_Model extends CI_Model {
  	public function ceklogin($table,$where){
  		return $this->db->get_where($table,$where);
  	}

    public function loginpengunjung($where){
      $this->db->where($where);
    return $this->db->get('pegawai')->num_rows();
    }
    public function hasil($NIP){
    $this->db->where('NIP',$NIP);
      return $this->db->get('pegawai')->result();
    }
  }
