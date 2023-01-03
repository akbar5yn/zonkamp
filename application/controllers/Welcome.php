<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('videoModel');
	}

	public function index()
	{
		// echo "selamat datang di zona kampus";
		$data['title'] = 'Zona Kampus';

		$this->load->view('templates/welcome/welcome_header', $data);
		$this->load->view('landing-page/welcome');
		$this->load->view('templates/welcome/welcome_footer');
	}

	public function about_us()
	{
		if ($this->session->userdata('email') == false) {
			redirect('auth');
		}
		$data['title'] = 'Zona Kampus';
		$data_base = [
			'videos' => $this->videoModel->getAllVideos(),
			'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
		];

		$this->load->view('templates/about_us/header', $data);
		$this->load->view('about_us/index', $data_base);
		$this->load->view('templates/about_us/footer');
	}
}
