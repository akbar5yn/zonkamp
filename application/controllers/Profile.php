<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
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

        $data_base = [
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'videoUser' => $this->videoModel->getVideoById(),
            // 'videos' => $this->videoModel->getAllVideos(),
            'total_video' => $this->videoModel->totalById(),
        ];

        $this->load->view('templates/user_profile/profile_header', $data);
        $this->load->view('profile_user/index', $data_base);
        $this->load->view('templates/user_profile/profile_footer');
    }

    // Edit Profile
    public function edit()
    {

        if ($this->session->userdata('email') == false) {
            redirect('auth');
        }
        $data['title'] = 'Zona Kampus';
        $data_base['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('email', 'Email', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/edit_profile/profile_header', $data);
            $this->load->view('profile_user/edit_profile', $data_base);
            $this->load->view('templates/edit_profile/profile_footer');
        } else {
            $username = $this->input->post('username');
            $deskripsi = $this->input->post('moto');
            $email = $this->input->post('email');


            // Cek apakah ada yang di update
            $edit_image = $_FILES['image']['name'];

            if ($edit_image) {
                $config['allowed_types'] = 'jpeg|jpg|png|svg';
                $config['max_size'] = '2048';
                $config['max_width'] = '542';
                $config['max_height'] = '542';
                $config['upload_path'] = './assets/img/profile/';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                    $this->session->set_flashdata('gagalEdit', '<div class="alert alert-danger" role="alert">
                                    Pastikan format tinggi dan lebar foto sesuai (542 x 542)</div>');
                    redirect('profile/edit');
                }
            }

            $this->db->set('username', $username);
            $this->db->set('moto', $deskripsi);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('editSuccess', '<div class="alert alert-success" role="alert">
            Congratulation, Your profile has been updated!</div>');
            redirect('profile/edit');
        }
    }

    public function edit_video($id_content)
    {
        if ($this->session->userdata('email') == false) {
            redirect('auth');
        }
        $data['title'] = 'Zona Kampus';
        $data_base = [
            'kategori' => $this->KategoriContent->getAllKategori(),
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'getDataVideo' => $this->videoModel->getVideo($id_content),
        ];

        $this->form_validation->set_rules('id_content', 'Idvideo', 'required|trim');

        $this->load->view('templates/templates_edit_video/edit_header', $data);
        $this->load->view('profile_user/edit_video', $data_base);
        $this->load->view('templates/templates_edit_video/edit_footer');
    }

    public function proses_edit_video()
    {
        if ($this->session->userdata('email') == false) {
            redirect('auth');
        }
        $data['title'] = 'Zona Kampus';
        $data_base = [
            'kategori' => $this->KategoriContent->getAllKategori(),
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
        ];

        $this->form_validation->set_rules('id_content', 'Idvideo', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/templates_edit_video/edit_header', $data);
            $this->load->view('profile_user/edit_video', $data_base);
            $this->load->view('templates/templates_edit_video/edit_footer');
        } else {
            $judul = $this->input->post('judul');
            $desc_content = $this->input->post('desc_content');
            $id_content = $this->input->post('id_content');
            $id_kategori = $this->input->post('id_kategori');


            // Cek apakah ada yang di update
            $edit_video = $_FILES['video']['name'];

            if ($edit_video) {
                $config['allowed_types'] = 'mp4';
                $config['max_size'] = '20000';
                $config['upload_path'] = './uploads/';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('video')) {
                    $data = $this->upload->data();
                    $new_video = base_url('./uploads/' . $data['raw_name'] . $data['file_ext']);
                    $this->db->set('content_link', $new_video);
                } else {
                    echo $this->upload->display_errors();
                    $this->session->set_flashdata('gagalEdit', 'Postingan gagal di edit');
                    redirect('profile/edit');
                }
            }

            $this->db->set('judul', $judul);
            $this->db->set('desc_content', $desc_content);
            $this->db->set('id_kategori', $id_kategori);
            $this->db->where('id_content', $id_content);
            $this->db->update('contents');

            $this->session->set_flashdata('editSuccess', 'Edit postingan berhasil');
            redirect('profile/index/');
        }
    }

    public function del_video($id_content)
    {
        $this->videoModel->del_video($id_content);
        $this->session->set_flashdata('delsuccess', 'Video berhasil di hapus');
        redirect('profile/index');
    }
}
