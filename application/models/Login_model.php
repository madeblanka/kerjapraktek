<?php

class Login_Model extends CI_Model {

public function ceklogin($username, $password) {
    $this->db->where("EMAIL = '$username' or USERNAME = '$username'");
    $this->db->where('PASSWORD', md5($password));
    $query = $this->db->get('USERNAME');
    return $query->row_array();
  }
}
