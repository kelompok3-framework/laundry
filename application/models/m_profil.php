<?php  

class M_profil extends CI_Model{

	public function tampil_data()
	{
		return $this->db->get('profil');
	}

	public function get_spesific($id_profil)
	{
		return $this->db
					->where('id_profil',$id_profil)
					->get('profil')
					->result();
	}

	public function update_data($data)
	{
		$sql = "update profil set nama_laundry =?, alamat =?, no_telp=? where id_profil =?";
		$this->db->query($sql, array($data['nama_laundry'],$data['alamat'],$data['no_telp'],$data['id_profil']));
	}
}