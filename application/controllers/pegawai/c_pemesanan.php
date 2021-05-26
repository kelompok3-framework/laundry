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
		$data = $this->m_pemesanan->select();	
		$this->load->view('templates_admin/header');
		$this->load->view('templates_pegawai/sidebar');
        $this->load->view('pegawai/v_pemesanan', $data);
        $this->load->view('templates_admin/footer');
	}

	public function detail()
	{
		$data['pemesanan'] 						= $this->m_pemesanan->tampil_data()->result();
		$data['detail_pemesanan'] 				= $this->m_pemesanan->tampil_detail_pemesanan()->result();
		$data['kategori']						= $this->m_kategori->tampil_data()->result();
		$data['join_pemesanan_detail'] 			= $this->m_pemesanan->join_2_tabel()->result();
		$data['join_pemesanan_detail_kategori']	= $this->m_pemesanan->join_3_tabel()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_pegawai/sidebar');
        $this->load->view('pegawai/v_detailpemesanan', $data);
        $this->load->view('templates_admin/footer');
	}

	public function insert()
	{
		if ($this->input->post()) {
			//insert data ke database
			//memanggil model
			$data = $this->input->post();
			//memanggil model
			$this->m_pemesanan->insert_data($data);
			redirect('pegawai/c_pemesanan');
		}
		else{
			$data['kiloan'] = $this->m_kategori->tampil_data_kiloan()->result();
			$data['satuan'] = $this->m_kategori->tampil_data_satuan()->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_pegawai/sidebar');
			$this->load->view('pegawai/v_insertpemesanan',$data);
			$this->load->view('templates_admin/footer');
		}
	}

	 public function simpan()
    {
        $data = json_decode($this->security->xss_clean($this->input->raw_input_stream), true);      
        $result = $this->m_pemesanan->insert($data);
        redirect('pegawai/c_pemesanan');
    }

    public function getData(Type $var = null)
    {
        $this->load->model('m_kategori', 'm_kategori');
        echo json_encode(array('nama_kategori'=>$this->m_kategori->select(), 'data'=>$this->m_pemesanan->select()) );
    }

	public function update($id_pemesanan = null)
	{
		if ($id_pemesanan != null) {
			$data['pemesanan'] = $this->m_pemesanan->get_spesific($id_pemesanan);
			$this->load->view('templates_admin/header');
			$this->load->view('templates_pegawai/sidebar');
			$this->load->view('pegawai/v_updatepemesanan',$data);
			$this->load->view('templates_admin/footer');
		}else{
			if ($this->input->post()) {
				$input = $this->input->post();
				$this->m_pemesanan->update_data($input);
				redirect('pegawai/c_pemesanan');
			}
		}
	}

	public function hapus($id_pemesanan)
    {
        if ($id_pemesanan != null) {
			$data['pemesanan'] = $this->m_pemesanan->get_spesific($id_pemesanan);
			$this->load->view('templates_admin/header');
			$this->load->view('templates_pegawai/sidebar');
			$this->load->view('pegawai/v_hapuspesanan',$data);
			$this->load->view('templates_admin/footer');
		}else{
			if ($this->input->post()) {
				$input = $this->input->post();
				$this->m_pemesanan->delete($input);
				redirect('pegawai/c_pemesanan');
			}
		}
    }

	public function tambah_ke_pemesanan($id_kategori)
	{
		$kategori = $this->m_kategori->find($id_kategori);
		$data = array(
			'id'	=> $kategori->id_kategori,
			'qty'	=> 1,
			'price' => $kategori->harga,
			'name'	=> $kategori->nama_kategori
		);
		$this->cart->insert($data);
		redirect('pegawai/c_pemesanan/insert');
	}

	public function detail_pemesanan()
 	{
 		$this->load->view('templates_admin/header');
		$this->load->view('templates_pegawai/sidebar');
		$this->load->view('pegawai/v_datapemesanan');
		$this->load->view('templates_admin/footer');
 	}

 	public function update_pemesanan($id_kategori = null)
	{
		if ($id_kategori != null) {
			$data['kategori'] = $this->m_kategori->get_spesific($id_kategori);
			$this->load->view('templates_admin/header');
			$this->load->view('templates_pegawai/sidebar');
			$this->load->view('pegawai/v_updatedata',$data);
			$this->load->view('templates_admin/footer');
		}else{
			if ($this->input->post()) {
				$input = $this->input->post();
				$this->m_pemesanan->update_pemesanan($input);
				redirect('pegawai/c_pemesanan/detail_keranjang');
			}
		}
	}

	public function hapus_pemesanan()
 	{
 		$this->cart->destroy();
 		redirect('pegawai/c_pemesanan/insert');
 	}

 	public function pengisian_data()
 	{
 		$this->load->view('templates_admin/header');
		$this->load->view('templates_pegawai/sidebar');
		$this->load->view('pegawai/v_pengisiandata');
		$this->load->view('templates_admin/footer');
 	}

 	public function proses_pesanan(){
 		$is_processed = $this->m_invoice->index();
 		if($is_processed){
 			$this->cart->destroy();
 			$data['pemesanan'] 						= $this->m_pemesanan->tampil_data()->result();
			$data['detail_pemesanan'] 				= $this->m_pemesanan->tampil_detail_pemesanan()->result();
			$data['kategori']						= $this->m_kategori->tampil_data()->result();
			$data['join_pemesanan_detail'] 			= $this->m_pemesanan->join_2_tabel()->result();
			$data['join_pemesanan_detail_kategori']	= $this->m_pemesanan->join_3_tabel()->result();
	 		$this->load->view('templates_admin/header');
			$this->load->view('templates_pegawai/sidebar');
			$this->load->view('pegawai/v_selesai',$data);
			$this->load->view('templates_admin/footer');
 		}else{
 			echo "Maaf Pesanan Anda Gagal Diproses";
 		}
 		
 	}
	
}