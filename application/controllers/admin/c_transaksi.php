<?php  

class C_pemesanan extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		//memanggil librari fungsi pengecekan status login
		$this->my_login->check_login();
	}

	public function index()
	{
		$data['transaksi'] = $this->m_transaksi->tampil_data();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
        $this->load->view('admin/v_transaksi', $data);
        $this->load->view('templates_admin/footer');
	}

	public function detail($id_transaksi)
	{
		$data['invoice'] = $this->m_transaksi->ambil_id_invoice($id_transaksi);
		$data['pesanan'] = $this->m_transaksi->ambil_id_pesanan($id_transaksi);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_invoice', $data);
		$this->load->view('templates_admin/footer');
	}
}