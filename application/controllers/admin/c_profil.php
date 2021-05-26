<?php  

class C_profil extends CI_Controller{

	function __construct()
	{
		parent::__construct();

		$this->my_login->check_login();
	}

	public function index()
	{
		$data['profil'] = $this->m_profil->tampil_data('profil')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
        $this->load->view('admin/v_profil', $data);
        $this->load->view('templates_admin/footer');
	}

	public function update($id_profil = null)
	{
		if ($id_profil != null) {
			$data['profil'] = $this->m_profil->get_spesific($id_profil);
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/v_updateprofil',$data);
			$this->load->view('templates_admin/footer');
		}else{
			if ($this->input->post()) {
				$input = $this->input->post();
				$this->m_profil->update_data($input);
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                     Data Profil Laundry Berhasil Diupdate
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>');
				redirect('admin/C_profil');
			}
		}
	}
}