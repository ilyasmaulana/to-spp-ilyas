<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Petugas_model', 'pm');
		$this->load->model('Kelas_model', 'km');

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
		$data['title'] = "Petugas";
		$data['petugas'] = $this->pm->getAllPetugas();

		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/navbar');
		$this->load->view('petugas/index', $data);
		$this->load->view('templates/footer');
	}

	public function addPetugas()
	{
		$data['title'] = "Tambah Data Petugas";

		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[petugas.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		$this->form_validation->set_rules('nama_petugas', 'Nama Petugas', 'required|trim');

		if ($this->form_validation->run() == false) {

			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/navbar');
			$this->load->view('petugas/petugas-tambah', $data);
			$this->load->view('templates/footer');
		} else {
			$this->pm->insertPetugas();

			$this->session->set_flashdata('petugas_message', '<div class="alert-box info-alert">
                  <div class="alert">
                    <p class="text-success">Data berhasil ditambahkan</p>
                  </div>
                </div>');
			redirect('petugas');
		}
	}

	public function deletePetugas($id)
	{
		$this->db->delete('petugas', ['id_petugas' => $id]);
		redirect('petugas');
	}
}
