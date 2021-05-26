<?php  

class M_pegawai extends CI_Model{

	public function tampil_data()
	{
		return $this->db->get('pegawai');
	}

    public function getPegawai($limit, $start, $keyword)
    {
        if($keyword){
            $this->db->like('nip', $keyword);
            $this->db->or_like('nama', $keyword);
            $this->db->or_like('alamat', $keyword);
            $this->db->or_like('no_telp', $keyword);
            $this->db->or_like('jabatan', $keyword);
            return $this->db->get('pegawai', $limit, $start, $keyword);
        }
        return $this->db->get('pegawai', $limit, $start);
    }

	function insert_data($data)
    {
        $user= [
            'username'=>$data['username'],
            'password'=>$data['password'],
            'level' => 'Pegawai'
        ];
        $item = [
        	'nip'=>$data['nip'],
            'nama'=>$data['nama'],
            'alamat'=>$data['alamat'],
            'no_telp'=>$data['no_telp'],
            'jabatan'=>$data['jabatan']
        ];
        $this->db->trans_begin();
        $this->db->insert('user', $user);
        $item['id_user'] = $this->db->insert_id();
        $this->db->insert('pegawai', $item);

        if($this->db->trans_status()==true){
            $this->db->trans_commit();
            return true;
        }else{
            $this->db->trans_rollback();
            return false;
        }
            
    }

	public function get_spesific($id_pegawai)
	{
		return $this->db
					->where('id_pegawai',$id_pegawai)
					->get('pegawai')
					->result();
	}

    public function update_data($data)
    {
        $sql = "update pegawai set nip =?, nama=?, alamat=?, no_telp=?, jabatan=?, id_user=? where id_pegawai =?";
        $this->db->query($sql, array($data['nip'],$data['nama'],$data['alamat'],$data['no_telp'],$data['jabatan'],$data['id_user'],$data['id_pegawai']));
    }

   public function hapus_data($table, $where)
    {
        $spn = $this->db->delete($table, $where);
        return $spn;
    }

    public function baris()
    {
        return $this->db->get('pegawai')->num_rows();
    }

}