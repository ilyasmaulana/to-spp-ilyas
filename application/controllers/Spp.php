<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Spp extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Spp_model', 'sm');

		if (!$this->session->userdata('username')) {
			$this->session->set_flashdata('auth_message', '<div class="alert-box danger-alert">
                  <div class="alert">
                    <p class="text-danger text-center">Silahkan login terlebih dahulu!</p>
                  </div>
                </div>');
			redirect('auth');
		}

		if ($this->session->userdata('level') != "admin") {
			redirect('admin/forbidden');
		}
	}

	public function index()
	{
		$data['title'] = "SPP";
		$data['spp'] = $this->sm->getAllSpp();

		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/navbar');
		$this->load->view('spp/index', $data);
		$this->load->view('templates/footer');
	}

	public function addSpp()
	{
		$data['title'] = "Tambah Data Spp";

		$this->form_validation->set_rules('tahun', 'Tahun', 'is_natural|trim');
		$this->form_validation->set_rules('nominal', 'Nominal', 'is_natural|trim');

		if ($this->form_validation->run() == false) {

			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/navbar');
			$this->load->view('spp/spp-tambah', $data);
			$this->load->view('templates/footer');
		} else {
			$this->sm->insertSpp();

			$this->session->set_flashdata('spp_message', '<div class="alert-box info-alert">
                  <div class="alert">
                    <p class="text-success">Data berhasil ditambahkan</p>
                  </div>
                </div>');
			redirect('Spp');
		}
	}


	public function updateSpp($id)
	{
		$data['title'] = "Ubah Data Spp";

		$this->form_validation->set_rules('tahun', 'Tahun', 'is_natural|trim');
		$this->form_validation->set_rules('nominal', 'Nominal', 'is_natural|trim');

		if ($this->form_validation->run() == false) {

			$data['spp'] = $this->sm->getAllSppById($id);

			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/navbar');
			$this->load->view('spp/spp-edit', $data);
			$this->load->view('templates/footer');
		} else {
			$this->sm->updateSpp();

			$this->session->set_flashdata('spp_message', '<div class="alert-box info-alert">
                  <div class="alert">
                    <p class="text-success">Data berhasil diubah</p>
                  </div>
                </div>');
			redirect('spp');
		}

		
	}

	public function deleteSpp($id)
	{
		$this->db->delete('Spp', ['id_Spp' => $id]);
		redirect('Spp');
	}
}
