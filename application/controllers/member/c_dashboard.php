<?php  

class C_dashboard extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		//memanggil librari fungsi pengecekan status login
		//$this->my_login->check_login();
	}

	public function index()
	{
		$data['profil'] = $this->m_profil->tampil_data('profil')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_member/sidebar');
        $this->load->view('member/v_dashboard', $data);
        $this->load->view('templates_admin/footer');
	}
}