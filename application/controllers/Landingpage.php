<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landingpage extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Zona Kampus';

        // $data_base['user'] = $this->db->get_where('user', ['email' =>
        // $this->session->userdata('email')])->row_array();
        $this->load->view('templates/templates_landing_page/landingP_header', $data);
        $this->load->view('Views/landing-page');
        $this->load->view('templates/templates_landing_page/landingP_footer');
    }
}
