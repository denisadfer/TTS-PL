<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_transaksi extends CI_Model {
  function getDataTransaksi() {
    $query = $this->db->get('tb_transaksi');
    return $query->result();
  }

  function insertDataTransaksi($data) {
    $this->db->insert('tb_transaksi', $data);
  }

  function getDataTransaksiDetail($id) {
    $this->db->where('id', $id);
    $query = $this->db->get('tb_transaksi');
    return $query->row();
  }

  function updateDataTransaksi($id, $data) {
    $this->db->where('id', $id);
    $this->db->update('tb_transaksi', $data);  
  }

  function deleteDataTransaksi($id) {
    $this->db->where('id', $id);
    $this->db->delete('tb_transaksi');
  }

}