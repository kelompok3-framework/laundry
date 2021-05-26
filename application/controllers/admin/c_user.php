<?php  

class C_user extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		//memanggil librari fungsi pengecekan status login
		$this->my_login->check_login();
	}

	public function index()
	{
		$baris = $this->m_user->baris();

		$config['base_url']		= 'http://localhost/laundry/admin/c_user/index';
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
		$data['user'] = $this->m_user->get_data($config['per_page'],$data['start'], $keyword)->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
        $this->load->view('admin/v_user', $data);
        $this->load->view('templates_admin/footer');
	}

	public function update($id_user = null)
	{
		if ($id_user != null) {
			$data['user'] = $this->m_user->get_spesific($id_user);
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/v_updateuser',$data);
			$this->load->view('templates_admin/footer');
		}else{
			if ($this->input->post()) {
				$input = $this->input->post();
				$this->m_user->update_data($input);
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                     Data User Berhasil Diupdate
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>');
				redirect('admin/c_user');
			}
		}
	}
	
}