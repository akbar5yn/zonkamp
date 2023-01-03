<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('videoModel');
        $this->load->model('KategoriContent');
    }

    public function index()
    {

        if ($this->session->userdata('email') == false) {
            redirect('auth');
        }
        $data['title'] = 'Zona Kampus';

        // $data['videos'] = $this->videoModel->getAllVideos();
        // $data['comments'] = $this->videoModel->getComment($id_content);
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data_base = [
            'videos' => $this->videoModel->getAllVideos(),
            'comments' => $this->videoModel->getComment(),
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
        ];

        $this->load->view('templates/templates_user/user_header', $data);
        $this->load->view('user/index', $data_base);
        $this->load->view('templates/templates_user/user_footer');
    }

    public function search()
    {
        if ($this->session->userdata('email') == false) {
            redirect('auth');
        }
        if (empty($_POST['keyword'])) {
            $this->load->view('user/no_result');
            $data['keyword'] = null;
        } else {
            $data['keyword'] = $this->input->post('keyword');
            // redirect('user/no_result');
        }

        $data['title'] = 'Zona Kampus';

        $data_base = [
            'search' => $this->KategoriContent->get_keyword($data['keyword']),
            'videos' => $this->videoModel->getAllVideos(),
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
        ];

        $this->load->view('templates/templates_user/user_header', $data);
        $this->load->view('user/search', $data_base);
        $this->load->view('templates/templates_user/user_footer');
    }
    public function no_result()
    {
        if (empty($_POST['keyword'])) {
            // $this->load->view('user/no_result');
            $data['keyword'] = null;
        } else {
            $data['keyword'] = $this->input->post('keyword');
            // redirect('user/no_result');
        }

        $data['title'] = 'Zona Kampus';
        $data_base = [
            'search' => $this->KategoriContent->get_keyword($data['keyword']),
            'videos' => $this->videoModel->getAllVideos(),
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
        ];

        $this->load->view('templates/templates_user/user_header', $data);
        $this->load->view('user/no_result', $data_base);
        $this->load->view('templates/templates_user/user_footer');
    }

    public function comment(){
        
        $this->form_validation->set_rules('komentar', 'Comment', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Zona Kampus';

            $data_base = [
                'videos' => $this->videoModel->getAllVideos(),
                'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            ];

            $this->load->view('templates/templates_user/user_header', $data);
            $this->load->view('user/index', $data_base);
            $this->load->view('templates/templates_user/user_footer');
        } else {
            $coment = [
                'id_content' => $this->input->post('id_content', true),
                'id_user' => $this->input->post('id_user', true),
                'komentar' => $this->input->post('komentar', true),
            ];
            $this->db->insert('comments', $coment);
            redirect('user/index');
        }
    }

    public function tampilComment($id_content){
        // // $user = $this->->get_user($id_comment);
        // $comments = $this->videoModel->getComment($id_comment);
        // 'getDataVideo' => $this->videoModel->getVideo($id_content),

        // // Simpan data ke dalam session
        // $this->session->set_userdata('comment_id', $comments->id_content);
        // // $this->session->set_userdata('name', $comments->name);
        $data['title'] = 'Zona Kampus';

        $data_base = [
            'videos' => $this->videoModel->getAllVideos(),
            'comments' => $this->videoModel->getComment($id_content),
            // 'comments' => $this->videoModel->getComment(),
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
        ];

        $this->load->view('templates/templates_user/user_header', $data);
        $this->load->view('user/index', $data_base);
        $this->load->view('templates/templates_user/user_footer');
    }
}
