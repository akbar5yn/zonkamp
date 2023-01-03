<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Zona Kampus';

        $data_base['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/templates_admin/admin_header', $data);
        $this->load->view('admin/index', $data_base);
        $this->load->view('templates/templates_admin/admin_footer');
    }
}
