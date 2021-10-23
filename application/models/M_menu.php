<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_menu extends CI_Model {
  function getDataMenu() {
    $query = $this->db->get('tb_menu');
    return $query->result();
  }

  function insertDataMenu($data) {
    $this->db->insert('tb_menu', $data);
  }

  function getDataMenuDetail($id) {
    $this->db->where('id', $id);
    $query = $this->db->get('tb_menu');
    return $query->row();
  }

  function updateDataMenu($id, $data) {
    $this->db->where('id', $id);
    $this->db->update('tb_menu', $data);
  }

  function deleteDataMenu($id) {
    $this->db->where('id', $id);
    $this->db->delete('tb_menu');
  }
}