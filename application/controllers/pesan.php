<?php  

class Pesan extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		//memanggil librari fungsi pengecekan status login
		$this->my_login->check_login();
	}

	public function index()
	{
	
	}

	public function add()
	{
		$redirect_page = $this->input->post('redirect_page');
		$data = array(
			'id'	=> $this->input->post('id'),
			'qty'	=> $this->input->post('qty'),
			'price' => $this->input->post('price'),
			'name'	=> $this->input->post('name'),
		);
		$this->cart->insert($data);
		redirect($redirect_page, 'refresh');
	}

	public function delete($rowid)
	{
		$this->cart->remove($rowid);
		redirect('pegawai/c_pemesanan/detail_pemesanan');
	}

	public function update()
	{
		$i =1;
		foreach ($this->cart->contents() as $items) {
			$data = array(
			'rowid' => $items['rowid'],
			'qty' => $this->input->post($i . '[qty]'),
		);
			$this->cart->update($data);
			$i++;
		}
		redirect('pegawai/c_pemesanan/detail_pemesanan');	
	}
}