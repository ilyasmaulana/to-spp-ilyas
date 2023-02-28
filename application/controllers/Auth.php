<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function index()
	{
		$this->defaultPage();

		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['title'] = "Sign In";
			$this->load->view('auth/index', $data);
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$ceklogin = $this->db->get_where('petugas', ['username' => $username])->row_array();

		// cek username
		if ($ceklogin) {
			// jika user aktif
			if ($ceklogin['is_active'] == "Y") {
				// cocokkan password
				if (password_verify($password, $ceklogin['password'])) {
					$data = [
						'id_petugas' => $ceklogin['id_petugas'],
						'username' => $ceklogin['username'],
						'nama_petugas' => $ceklogin['nama_petugas'],
						'level' => $ceklogin['level']
					];
					$this->session->set_userdata($data);
					redirect('admin');
				} else {
					$this->session->set_flashdata('auth_message', '<div class="alert-box danger-alert">
                  <div class="alert">
                    <p class="text-danger text-center">Password anda salah!</p>
                  </div>
                </div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('auth_message', '<div class="alert-box danger-alert">
				<div class="alert">
				<p class="text-danger text-center">Akun anda di Suspend!</p>
				</div>
				</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('auth_message', '<div class="alert-box danger-alert">
                  <div class="alert">
                    <p class="text-danger text-center">Username tidak terdaftar!</p>
                  </div>
                </div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('id_petugas');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama_petugas');
		$this->session->unset_userdata('level');

		$this->session->set_flashdata('auth_message', '<div class="alert-box danger-alert">
                  <div class="alert">
                    <p class="text-danger text-center">Anda telah logout!</p>
                  </div>
                </div>');
		redirect('auth');
	}

	public function defaultPage()
	{
		if($this->session->userdata('username')){
			redirect('admin');
		}
		
	}
}
