<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_model extends CI_Model
{

  public function getAllPembayaran()
  {
    // berdasarkan id petugas
    $id_petugas = $this->session->userdata('id_petugas');

    $this->db->select('*');
    $this->db->from('pembayaran');
    $this->db->join('siswa', 'pembayaran.nisn = siswa.nisn');
    $this->db->join('kelas', 'pembayaran.id_kelas = kelas.id_kelas');
    $this->db->where('pembayaran.id_petugas', $id_petugas);
    $this->db->order_by('pembayaran.id_pembayaran', 'DESC');
    return $this->db->get()->result_array();
  }

  public function getPembayaranForKepsek()
  {
    $this->db->select('*');
    $this->db->from('pembayaran');
    $this->db->join('siswa', 'pembayaran.nisn = siswa.nisn');
    $this->db->join('kelas', 'pembayaran.id_kelas = kelas.id_kelas');
    $this->db->order_by('pembayaran.id_pembayaran', 'DESC');
    return $this->db->get()->result_array();
  }

  public function getPembayaranByMonth($bulan)
  {
    // berdasarkan id petugas
    $id_petugas = $this->session->userdata('id_petugas');

    $this->db->select('*');
    $this->db->from('pembayaran');
    $this->db->join('siswa', 'pembayaran.nisn = siswa.nisn');
    $this->db->join('kelas', 'pembayaran.id_kelas = kelas.id_kelas');
    $this->db->where('MONTH(tgl_bayar)', $bulan);
    $this->db->where('pembayaran.id_petugas', $id_petugas);
    $this->db->order_by('pembayaran.id_pembayaran', 'DESC');
    return $this->db->get()->result_array();
  }

  public function getPembayaranByYear($tahun)
  {
    // berdasarkan id petugas
    $id_petugas = $this->session->userdata('id_petugas');

    $this->db->select('*');
    $this->db->from('pembayaran');
    $this->db->join('siswa', 'pembayaran.nisn = siswa.nisn');
    $this->db->join('kelas', 'pembayaran.id_kelas = kelas.id_kelas');
    $this->db->where('YEAR(tgl_bayar)', $tahun);
    $this->db->where('pembayaran.id_petugas', $id_petugas);
    $this->db->order_by('pembayaran.id_pembayaran', 'DESC');
    return $this->db->get()->result_array();
  }
}
