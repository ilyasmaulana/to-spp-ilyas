<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Spp_model extends CI_Model
{

  public function getAllSpp()
  {
    $this->db->order_by('tahun', 'DESC');
    return $this->db->get('spp')->result_array();
  }

  public function getAllSppById($id)
  {
    return $this->db->get_where('spp', ['id_spp' => $id])->row_array();
  }

  public function insertSpp()
  {
    $data = [
      'tahun' => $this->input->post('tahun', true),
      'nominal' => $this->input->post('nominal', true)
    ];

    $this->db->insert('spp', $data);
  }

  public function updateSpp()
  {
    $id = $this->input->post('id_spp');
    $data = [
      'tahun' => $this->input->post('tahun', true),
      'nominal' => $this->input->post('nominal', true)
    ];

    $this->db->where('id_spp', $id);
    $this->db->update('spp', $data);
  }
}
