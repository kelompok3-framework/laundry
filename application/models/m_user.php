<?php  

class M_user extends CI_Model{

    public function tampil_data()
    {
        return $this->db->get('user');
    }

    public function get_data($limit, $start, $keyword)
    {
        if($keyword){
            $this->db->like('username', $keyword);
            $this->db->or_like('level', $keyword);
            $this->db->or_like('status', $keyword);
            return $this->db->get('user', $limit, $start, $keyword);
        }
        return $this->db->get('user', $limit, $start);
    }

    public function baris()
    {
        return $this->db->get('user')->num_rows();
    }


	public function get_spesific($id_user)
	{
		return $this->db
					->where('id_user',$id_user)
					->get('user')
					->result();
	}

	public function update_data($data)
	{
		$item = [
            'status'=>$data['status']
        ];
        $this->db->where('id_user', $data['id_user']);
        if($this->db->update('user', $item))
            return true;
        else
            return false;
	}
}