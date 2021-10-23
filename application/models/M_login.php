<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
  
  function getDataLogin($username) {
    $this->db->where('username', $username);
    $query = $this->db->get('tb_users');
    //return $query->row();
    // if ($this->db->where('username', $username)) {
    //   redirect(base_url('home/main'));
    // } else {
    //   redirect(base_url(''));
    // }
  }

}