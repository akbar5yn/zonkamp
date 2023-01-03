<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upload extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('videoModel');
        $this->load->model('KategoriContent');
        $this->load->model('IdUpload');
    }
    public function index()
    {
        if ($this->session->userdata('email') == false) {
            redirect('auth');
        }
        $data['title'] = 'Zona Kampus';
        $data_base = [
            'videos' => $this->videoModel->getAllVideos(),
            'kategori' => $this->KategoriContent->getAllKategori(),
            'userId' => $this->IdUpload->getIdUser(),
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
        ];

        $this->load->view('templates/templates_upload/upload_header', $data);
        $this->load->view('upload/upload', $data_base);
        $this->load->view('templates/templates_upload/upload_footer');
    }

    public function upload_video()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'mp4';
        $config['max_size'] = '20000';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('video')) {
            $data['upload_error'] = $this->upload->display_errors();
            $this->session->set_flashdata('failed', 'Video gagal di unggah');
            redirect('upload/');

            $this->load->view('upload/index', $data);
        } else {
            $data = $this->upload->data();
            $image_path = base_url('./uploads/' . $data['raw_name'] . $data['file_ext']);
            $this->videoModel->insertVideo($image_path);
            $this->session->set_flashdata('success', 'Video Berhasil di unggah');
            redirect('user/index');
        }
    }
}
