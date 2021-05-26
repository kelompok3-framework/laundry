<?php  
defined('BASEPATH') OR exit('No direct script acess allowed');

class Fungsi
{
	protected $CI;

	public function __construct()
	{
		$this->CI =& get_instance();
	}

	public function count_pegawai(){
		$this->CI->load->model('m_pegawai');
		return $this->CI->m_pegawai->get()->num_rows();
	}

	public function count_pemasukan(){
		$this->CI->load->model('m_transaksi');
		return $this->CI->m_transaksi->total_pemasukan();
		
	}

	public function count_transaksi(){
		$this->CI->load->model('m_transaksi');
		return $this->CI->m_transaksi->get()->num_rows();
	}

	public function count_kategori(){
		$this->CI->load->model('m_kategori');
		return $this->CI->m_kategori->get()->num_rows();
	}
}