<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('videoModel');
        $this->load->model('KategoriContent');
    }

    public function tipsAndTrik()
    {
        if ($this->session->userdata('email') == false) {
            redirect('auth');
        }
        $data['title'] = 'Zona Kampus';

        $id_kategori = array('id_kategori' => 1);
        $data_base = [
            'kategori' => $this->KategoriContent->getVideoTipsAndTriks($id_kategori)->result(),
            'videos' => $this->videoModel->getAllVideos(),
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
        ];

        $this->load->view('templates/templates_kategori/kategori_header', $data);
        $this->load->view('beranda_kategori/tips_and_trik', $data_base);
        $this->load->view('templates/templates_kategori/kategori_footer');
    }
    public function seputarTutorial()
    {
        if ($this->session->userdata('email') == false) {
            redirect('auth');
        }
        $data['title'] = 'Zona Kampus';

        $id_kategori = array('id_kategori' => 2);
        $data_base = [
            'kategori' => $this->KategoriContent->getVideoTipsAndTriks($id_kategori)->result(),
            'videos' => $this->videoModel->getAllVideos(),
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
        ];

        $this->load->view('templates/templates_kategori/kategori_header', $data);
        $this->load->view('beranda_kategori/seputar_tutorial', $data_base);
        $this->load->view('templates/templates_kategori/kategori_footer');
    }

    public function trending()
    {
        if ($this->session->userdata('email') == false) {
            redirect('auth');
        }
        $data['title'] = 'Zona Kampus';

        $id_kategori = array('id_kategori' => 3);
        $data_base = [
            'kategori' => $this->KategoriContent->getVideoTipsAndTriks($id_kategori)->result(),
            'videos' => $this->videoModel->getAllVideos(),
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
        ];

        $this->load->view('templates/templates_kategori/kategori_header', $data);
        $this->load->view('beranda_kategori/trending', $data_base);
        $this->load->view('templates/templates_kategori/kategori_footer');
    }
}
