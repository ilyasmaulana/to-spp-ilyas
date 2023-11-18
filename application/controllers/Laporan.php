<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Laporan_model', 'lm');
		$this->load->helper('date');

		if (!$this->session->userdata('username')) {
			$this->session->set_flashdata('auth_message', '<div class="alert-box danger-alert">
                  <div class="alert">
                    <p class="text-danger text-center">Silahkan login terlebih dahulu!</p>
                  </div>
                </div>');
			redirect('auth');
		}
	}

	public function index()
	{
		$data['title'] = "Laporan";
		$data['pembayaran'] = $this->lm->getAllPembayaran();
		$data['pembKepsek'] = $this->lm->getPembayaranForKepsek();

		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/navbar');
		$this->load->view('laporan/index', $data);
		$this->load->view('templates/footer');
	}
	
	public function cetak()
	{
		$data['title'] = "Laporan Pembayaran SPP Harian";
		$data['pembayaran'] = $this->lm->getAllPembayaran();
		$data['pembKepsek'] = $this->lm->getPembayaranForKepsek();

		$this->load->view('laporan/cetak', $data);
	}

	public function cetakBulan()
	{
		$bulan = mdate('%m', time());
		
		$data['title'] = "Laporan Pembayaran SPP Bulanan";
		$data['pembayaran'] = $this->lm->getPembayaranByMonth($bulan);
		$data['pembKepsek'] = $this->lm->getPembayaranForKepsekByMonth($bulan);

		$this->load->view('laporan/cetak', $data);
	}

	public function cetakTahun()
	{
		$tahun = mdate('%Y', time());

		$data['title'] = "Laporan Pembayaran SPP Tahunan";
		$data['pembayaran'] = $this->lm->getPembayaranByYear($tahun);
		$data['pembKepsek'] = $this->lm->getPembayaranForKepsekByYear($tahun);

		$this->load->view('laporan/cetak', $data);
	}

	

}
