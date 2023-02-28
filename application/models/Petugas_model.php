<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas_model extends CI_Model
{

  public function getAllPetugas()
  {
    return $this->db->get('petugas')->result_array();
  }

  public function getAllPetugasById($id)
  {
    return $this->db->get_where('petugas', ['id_petugas' => $id])->row_array();
  }

  public function insertPetugas()
  {
    $data = [
      'username' => $this->input->post('username', true),
      'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
      'nama_petugas' => $this->input->post('nama_petugas', true),
      'level' => $this->input->post('level'),
      'is_active' => $this->input->post('is_active')
    ];

    $this->db->insert('petugas', $data);
  }

  public function updatePetugas()
  {
    $id = $this->input->post('id_Petugas');
    $data = [
      'tahun' => $this->input->post('tahun', true),
      'nominal' => $this->input->post('nominal', true)
    ];

    $this->db->where('id_Petugas', $id);
    $this->db->update('Petugas', $data);
  }
}
