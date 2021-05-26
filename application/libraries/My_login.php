<?php  
defined('BASEPATH') OR exit('No direct script acess allowed');

class My_login
{
	protected $CI;

	public function __construct()
	{
		$this->CI =& get_instance();
		//load model auth
		$this->CI->load->model('User_model');
	}

	public function do_login()
	{
		$data = $this->CI->input->post();
        $this->CI->session->set_userdata('id_user', $data->id_user);
        $this->CI->session->set_userdata('username', $data->username);
        $this->CI->session->set_userdata('level', $data->level);

        $result = $this->CI->User_model->select($data);

        if (count($result)==0) {
            $this->CI->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                     Login Gagal!
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>');
            redirect('authorization');
        } else {
            $this->CI->session->set_userdata($result);
            if($result['level']=="Admin")
                redirect('admin/c_dashboard');
            elseif($result['level']=="Pegawai")
                redirect('pegawai/c_dashboard');
            else
                redirect('member/c_dashboard');
        }
	}
	
	//fungsi check login 
	public function check_login()
	{
		//jika belum login, dikebalikan ke halaman login
		if($this->CI->session->userdata('username')==""){
			$this->CI->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                     Anda Belum Login!
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>');
			redirect('authorization');
		}
	}
}	