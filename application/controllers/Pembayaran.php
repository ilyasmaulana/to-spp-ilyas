<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pembayaran_model', 'pm');
		$this->load->model('Siswa_model', 'smd');
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
		$data['title'] = "Pembayaran";
		$data['siswa'] = $this->smd->getAllSiswa();

		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/navbar');
		$this->load->view('pembayaran/index', $data);
		$this->load->view('templates/footer');
	}

	public function addPembayaran($id)
	{
		$this->form_validation->set_rules('tahun', 'Tahun bayar', 'required');
		$this->form_validation->set_rules('bulan', 'Bulan bayar', 'required');
		
		if ($this->form_validation->run() == false) {

			$data['title'] = "Bayar SPP";
			$data['siswa'] = $this->smd->getSiswaById($id);
			
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/navbar');
			$this->load->view('pembayaran/pembayaran-tambah', $data);
			$this->load->view('templates/footer');
		} else {
			$this->pm->insertPembayaran();

			$this->session->set_flashdata('Pembayaran_message', '<div class="alert-box info-alert">
                  <div class="alert">
                    <p class="text-success">Data berhasil ditambahkan</p>
                  </div>
                </div>');
			redirect('pembayaran');
		}
	}

}
