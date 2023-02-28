<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran_model extends CI_Model
{

  public function getAllPembayaran()
  {
    return $this->db->get('pembayaran')->result_array();
  }

  public function insertPembayaran()
  {
    $data = [
      'id_pembayaran' => time(),
      'id_petugas' => $this->input->post('id_petugas', true),
      'nisn' => $this->input->post('nisn', true),
      'tgl_bayar' => mdate('%Y-%m-%d', time()),
      'tahun_bayar' => $this->input->post('tahun', true),
      'bulan_bayar' => $this->input->post('bulan', true),
      'id_spp' => $this->input->post('id_spp'),
      'id_kelas' => $this->input->post('id_kelas'),
      'jumlah_bayar' => $this->input->post('nominal', true),
    ];

    $this->db->insert('pembayaran', $data);
  }
}
