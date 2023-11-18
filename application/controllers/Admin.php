<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

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
		$data['title'] = "Admin";
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/navbar');
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer');
	}

	public function forbidden()
	{
		$data['title'] = "Access Forbidden";
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/navbar');
		$this->load->view('admin/forbidden', $data);
		$this->load->view('templates/footer');
	}
}
