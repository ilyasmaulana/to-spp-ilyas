<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kelas_model', 'km');

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
		$data['title'] = "Kelas";
		$data['kelas'] = $this->km->getAllKelas();

		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/navbar');
		$this->load->view('kelas/index', $data);
		$this->load->view('templates/footer');
	}

	public function addKelas()
	{
		$data['title'] = "Tambah Data Kelas";

		$this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'required|trim');
		$this->form_validation->set_rules('kompetensi_keahlian', 'Jurusan', 'required|trim');

		if ($this->form_validation->run() == false) {

			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/navbar');
			$this->load->view('kelas/kelas-tambah', $data);
			$this->load->view('templates/footer');
		} else {
			$this->km->insertKelas();

			$this->session->set_flashdata('kelas_message', '<div class="alert-box info-alert">
                  <div class="alert">
                    <p class="text-success">Data berhasil ditambahkan</p>
                  </div>
                </div>');
			redirect('kelas');
		}
	}


	public function updateKelas($id)
	{
		$data['title'] = "Ubah Data Kelas";

		$this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'required|trim');
		$this->form_validation->set_rules('kompetensi_keahlian', 'Jurusan', 'required|trim');

		if ($this->form_validation->run() == false) {

			$data['kelas'] = $this->km->getAllKelasById($id);

			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/navbar');
			$this->load->view('kelas/kelas-edit', $data);
			$this->load->view('templates/footer');
		} else {
			$this->km->updateKelas();

			$this->session->set_flashdata('kelas_message', '<div class="alert-box info-alert">
                  <div class="alert">
                    <p class="text-success">Data berhasil diubah</p>
                  </div>
                </div>');
			redirect('kelas');
		}

		
	}

	public function deleteKelas($id)
	{
		$this->db->delete('kelas', ['id_kelas' => $id]);
		redirect('kelas');
	}
}
