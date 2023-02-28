<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Siswa_model', 'smd');
		
		if (!$this->session->userdata('username')) {
			$this->session->set_flashdata('auth_message', '<div class="alert-box danger-alert">
                  <div class="alert">
                    <p class="text-danger text-center">Silahkan login terlebih dahulu!</p>
                  </div>
                </div>');
			redirect('auth');
		}

		if($this->session->userdata('level') != "admin"){
			redirect('admin/forbidden');
		}
	}

	public function index()
	{
		$data['title'] = "Siswa";
		$data['siswa'] = $this->smd->getAllSiswa();

		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/navbar');
		$this->load->view('siswa/index', $data);
		$this->load->view('templates/footer');
	}

	public function detailSiswa($id)
	{
		$data['title'] = "Siswa Detail";
		$data['siswa'] = $this->smd->getSiswaById($id);

		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/navbar');
		$this->load->view('siswa/siswa-detail', $data);
		$this->load->view('templates/footer');
	}

	public function addSiswa()
	{
		$this->form_validation->set_rules('nisn', 'NISN', 'is_natural|trim|min_length[5]|is_unique[siswa.nisn]');
		$this->form_validation->set_rules('nis', 'NIS', 'is_natural|trim');
		$this->form_validation->set_rules('nama', 'Nama Siswa', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('no_telp', 'No Telepon', 'is_natural|trim');

		if ($this->form_validation->run() == false) {
			$data['title'] = "Tambah Data Siswa";
			$data['siswa'] = $this->smd->getAllSiswa();
			$data['kelas'] = $this->smd->getAllKelas();
			$data['spp'] = $this->smd->getAllSpp();

			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/navbar');
			$this->load->view('siswa/siswa-tambah', $data);
			$this->load->view('templates/footer');
		} else {
			$this->smd->insertSiswa();

			$this->session->set_flashdata('siswa_message', '<div class="alert-box info-alert">
                  <div class="alert">
                    <p class="text-success">Data berhasil ditambahkan</p>
                  </div>
                </div>');
			redirect('siswa');
		}
	}


	public function updateSiswa($id)
	{
		$this->form_validation->set_rules('nis', 'NIS', 'is_natural|trim');
		$this->form_validation->set_rules('nama', 'Nama Siswa', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('no_telp', 'No Telepon', 'is_natural|trim');

		if ($this->form_validation->run() == false) {
			$data['title'] = "Ubah Data Siswa";
			$data['siswa'] = $this->smd->getSiswaById($id);
			$data['kelas'] = $this->smd->getAllKelas();
			$data['spp'] = $this->smd->getAllSpp();

			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/navbar');
			$this->load->view('siswa/siswa-edit', $data);
			$this->load->view('templates/footer');
		} else {
			$this->smd->updateSiswa();

			$this->session->set_flashdata('siswa_message', '<div class="alert-box info-alert">
                  <div class="alert">
                    <p class="text-success">Data berhasil diubah</p>
                  </div>
                </div>');
			redirect('siswa');
		}
	}

	public function deleteSiswa($id)
	{
		$this->db->delete('siswa', ['nisn' => $id]);
		redirect('siswa');
	}
}
