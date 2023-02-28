<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
{

  public function getAllSiswa()
  {
    $this->db->select('*');
    $this->db->from('siswa');
    $this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
    $this->db->join('spp', 'spp.id_spp = siswa.id_spp');
    $this->db->order_by('tahun', 'DESC');
    return $this->db->get()->result_array();
  }

  public function getSiswaById($id)
  {
    $this->db->select('*');
    $this->db->from('siswa');
    $this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
    $this->db->join('spp', 'spp.id_spp = siswa.id_spp');
    $this->db->where('siswa.nisn', $id);
    return $this->db->get()->row_array();
  }

  public function getAllKelas()
  {
    return $this->db->get('kelas')->result_array();
  }

  public function getAllSpp()
  {
    return $this->db->get('spp')->result_array();
  }

  public function insertSiswa()
  {
    $data = [
      'nisn' => $this->input->post('nisn'),
      'nis' => $this->input->post('nis'),
      'nama' => $this->input->post('nama', true),
      'id_kelas' => $this->input->post('id_kelas'),
      'alamat' => $this->input->post('alamat', true),
      'no_telp' => $this->input->post('no_telp'),
      'id_spp' => $this->input->post('id_spp')
    ];

    $this->db->insert('siswa', $data);
  }

  public function updateSiswa()
  {
    $id = $this->input->post('nisn');
    $data = [
      'nis' => $this->input->post('nis'),
      'nama' => $this->input->post('nama', true),
      'id_kelas' => $this->input->post('id_kelas'),
      'alamat' => $this->input->post('alamat', true),
      'no_telp' => $this->input->post('no_telp'),
      'id_spp' => $this->input->post('id_spp')
    ];

    $this->db->where('nisn', $id);
    $this->db->update('siswa', $data);
  }
}
