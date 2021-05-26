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
		$this->load->view('templates_admin/sidebar');
        $this->load->view('admin/v_pemesanan', $data);
        $this->load->view('templates_admin/footer');
	}

	public function detail()
	{
		$data['pemesanan'] 						= $this->m_pemesanan->tampil_data()->result();
		$data['detail_pemesanan'] 				= $this->m_pemesanan->tampil_detail_pemesanan()->result();
		$data['kategori']						= $this->m_kategori->tampil_data()->result();
		$data['pegawai']						= $this->m_pegawai->tampil_data()->result();
		$data['join_pemesanan_detail'] 			= $this->m_pemesanan->join_2_tabel()->result();
		$data['join_pemesanan_detail_kategori']	= $this->m_pemesanan->join_3_tabel()->result();
		$data['join_4_tabel']					= $this->m_pemesanan->join_4_tabel()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
        $this->load->view('admin/v_detailpemesanan', $data);
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
			redirect('admin/c_pemesanan');
		}
		else{
			$data['kiloan'] = $this->m_kategori->tampil_data_kiloan()->result();
			$data['satuan'] = $this->m_kategori->tampil_data_satuan()->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/v_insertpemesanan',$data);
			$this->load->view('templates_admin/footer');
		}
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
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/v_updatepemesanan',$data);
			$this->load->view('templates_admin/footer');
		}else{
			if ($this->input->post()) {
				$input = $this->input->post();
				$this->m_pemesanan->update_data($input);
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                     Data Pemesanan Berhasil Diupdate
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>');
				redirect('admin/c_pemesanan');
			}
		}
	}

	public function hapus($id_pemesanan)
    {
        if ($id_pemesanan != null) {
			$data['pemesanan'] = $this->m_pemesanan->get_spesific($id_pemesanan);
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/v_hapuspesanan',$data);
			$this->load->view('templates_admin/footer');
		}else{
			if ($this->input->post()) {
				$input = $this->input->post();
				$this->m_pemesanan->delete($input);
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                     Data Pemesanan berhasil dihapus
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>');
				redirect('admin/c_pemesanan');
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
		redirect('admin/c_pemesanan/insert');
	}

	public function detail_pemesanan()
 	{
 		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/v_datapemesanan');
		$this->load->view('templates_admin/footer');
 	}

	public function hapus_pemesanan()
 	{
 		$this->cart->destroy();
 		redirect('admin/c_pemesanan/insert');
 	}

 	public function pengisian_data()
 	{
 		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/v_pengisiandata');
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
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/v_selesai',$data);
			$this->load->view('templates_admin/footer');
 		}else{
 			echo "Maaf Pesanan Anda Gagal Diproses";
 		}
 		
 	}
	
}