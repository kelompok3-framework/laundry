<?php  

class C_kategori extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		//memanggil librari fungsi pengecekan status login
		$this->my_login->check_login();
	}

	public function index()
	{
		$data['kiloan'] = $this->m_kategori->tampil_data_kiloan()->result();
		$data['satuan'] = $this->m_kategori->tampil_data_satuan()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_member/sidebar');
		$this->load->view('member/v_kategori',$data);
		$this->load->view('templates_admin/footer');
	}
}