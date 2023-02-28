<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas_model extends CI_Model
{

  public function getAllKelas()
  {
    return $this->db->get('kelas')->result_array();
  }

  public function getAllKelasById($id)
  {
    return $this->db->get_where('kelas', ['id_kelas' => $id])->row_array();
  }

  public function insertKelas()
  {
    $data = [
      'nama_kelas' => $this->input->post('nama_kelas', true),
      'kompetensi_keahlian' => $this->input->post('kompetensi_keahlian', true)
    ];

    $this->db->insert('kelas', $data);
  }

  public function updateKelas()
  {
    $id = $this->input->post('id_kelas');
    $data = [
      'nama_kelas' => $this->input->post('nama_kelas', true),
      'kompetensi_keahlian' => $this->input->post('kompetensi_keahlian', true)
    ];

    $this->db->where('id_kelas', $id);
    $this->db->update('kelas', $data);
  }
}
