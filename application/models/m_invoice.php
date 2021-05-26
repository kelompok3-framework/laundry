<?php 

class M_invoice extends CI_Model{

	public function index()
	{
		date_default_timezone_set('Asia/Jakarta');
		$nota = $this->input->post('nota');
		$nama_pemesan = $this->input->post('nama_pemesan');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');
		$tgl_selesai = $this->input->post('tgl_selesai');
		
		$session = $_SESSION;
		$invoice = array(
			'nota' 					=> $nota,
			'id_pegawai' 			=> $this->session->userdata('id_pegawai'),
			'nama_pemesan' 			=> $nama_pemesan,
			'alamat' 				=> $alamat,
			'no_telp' 				=> $no_telp,
			'tgl_pemesanan' 		=> date('Y-m-d H:i:s'),	
			'tgl_selesai' 			=> $tgl_selesai,
		);

		$this->db->insert('pemesanan', $invoice);
		$id_pemesanan = $this->db->insert_id();

		foreach ($this->cart->contents() as $item){
			$data = array(
				'id_pemesanan'		=> $id_pemesanan,
				'id_kategori'		=> $item['id'],
				'nama_kategori'			=> $item['name'],
				'jumlah'			=> $item['qty'],
				'harga'				=> $item['price'],
			);

			$this->db->insert('detail_pemesanan', $data);
		}
		return TRUE;
	}
}
