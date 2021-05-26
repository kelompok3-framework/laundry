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

		$baris = $this->m_kategori->baris();

		$config['base_url']		= 'http://localhost/laundry/admin/c_kategori/index';
		$config['total_rows']	= $baris;
		$config['per_page']		= 5;

		$config['full_tag_open'] = '<nav><ul class="pagination justify-content-end">';
		$config['full_tag_clodse'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"> <a class ="page-link" href = "#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(4);
		$keyword = $this->input->post('keyword');
		$data['kategori'] = $this->m_kategori->get_data($config['per_page'],$data['start'], $keyword)->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
        $this->load->view('admin/v_kategori', $data);
        $this->load->view('templates_admin/footer');
	}

	public function insert()
	{
		if ($this->input->post()) {
			//insert data ke database
			//memanggil model
			$data = $this->input->post();
			//memanggil model
			$this->m_kategori->insert_data($data);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                     Data Kategori Laundry berhasil ditambahkan
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>');
			redirect('admin/c_kategori');
		}
		else{
			$data['kategori'] = $this->m_kategori->tampil_data()->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/v_insertkategori',$data);
			$this->load->view('templates_admin/footer');
		}
	}

	public function update($id_kategori = null)
	{
		if ($id_kategori != null) {
			$data['kategori'] = $this->m_kategori->get_spesific($id_kategori);
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/v_updatekategori',$data);
			$this->load->view('templates_admin/footer');
		}else{
			if ($this->input->post()) {
				$input = $this->input->post();
				$this->m_kategori->update_data($input);
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                     Data Kategori Laundry berhasil diupdate
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>');
				redirect('admin/c_kategori');
			}
		}
	}

	public function delete($id_kategori)
	{
		$where = array('id_kategori'=> $id_kategori);
		$this->m_kategori->hapus_data($where,'kategori');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                     Data Kategori Laundry berhasil dihapus
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>');
		redirect('admin/c_kategori');
	}
	
}