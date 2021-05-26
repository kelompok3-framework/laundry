<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Authorization extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'UserModel');
    }

    public function index()
    {
        $title['title'] = ['header' => 'User Authorization', 'dash' => 'User_authorization'];
        $this->load->view('login', $title);
    }

    public function login()
    {
        $this->my_login->do_login();
    }

    public function registrasi()
    {
        $title['title'] = ['header' => 'User Registration', 'dash' => 'User_registrasi'];
        $this->load->view('templates_admin/header');
        $this->load->view('registrasi', $title);
        $this->load->view('templates_admin/footer');
    }

   public function insert()
    {
        if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
            //memanggil model
            $this->m_pelanggan->insert_data($data);
            redirect('authorization');
        }
        else{
            $this->load->view('templates_admin/header');
            $this->load->view('registrasi');
            $this->load->view('templates_admin/footer');
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect('authorization');
    }
}

/* End of file Controllername.php */
