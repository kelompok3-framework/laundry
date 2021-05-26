<?php 
class M_auth extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function login($data)
	{
		$sql = "select * from user where username =? and password = md5(?)";
		$res = $this->db->query($sql, array($data['username'], $data['password']));

		if($res->num_rows() > 0){
			//session
			$dataLogin = $res->row();
			$data = array('username'=>$dataLogin->username, 'level'=>$dataLogin->level,'id_user'=>$dataLogin->id_user);

			$this->session->set_userdata('sessionuser',$data);
			return true;
		}else{
			return false;
		}
	} 

	function cekuserdaftar($username)
	{
		$query = $this->db->query("SELECT * from user where username = '$username'");
		if($query->num_rows()==1)
		{
			return $query->result();
		}else{
			return false;
		}
	}

	function ceklogin($username,$password)
	{
		$query = $this->db->query("SELECT * from user where username = '$username' and password = '$password'");
		if($query->num_rows()==1)
		{
			return $query->result();
		}else{
			return false;
		}
	}

}