<?php  

class M_kategori extends CI_Model{

	function select()
    {
        $result = $this->db->get('kategori');
        if($result->num_rows()>0)
            return $result->result();
        else
            return $result->result();
    }

	public function tampil_data()
	{
		return $this->db->get('kategori');
	}

	public function tampil_data_kiloan()
	{
		return $this->db->query('select * from kategori where jenis = "Kiloan"');
	}

	public function tampil_data_satuan()
	{
		return $this->db->query('select * from kategori where jenis = "Satuan"');
	}

	public function get_data($limit, $start , $keyword)
	{
		if($keyword){
			$this->db->like('nama_kategori', $keyword);
	        $this->db->or_like('jenis', $keyword);
	        $this->db->or_like('harga', $keyword);
	        return $this->db->get('kategori', $limit, $start, $keyword);
		}
		return $this->db->get('kategori', $limit, $start);
	}

    public function baris()
    {
        return $this->db->get('kategori')->num_rows();
    }

	public function insert_data($data)
	{
		$sql = "insert into kategori(nama_kategori, jenis, harga) 
				values(?,?,?)";
		$this->db->query($sql, array($data['nama_kategori'],
									 $data['jenis'],
									 $data['harga']));
	}

	public function get_spesific($id_kategori)
	{
		return $this->db
					->where('id_kategori',$id_kategori)
					->get('kategori')
					->result();
	}

	public function find($id_kategori)
	{
		$result = $this->db->where('id_kategori', $id_kategori)
						   ->limit(1)
						   ->get('kategori');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}

	public function update_data($data)
	{
		$sql = "update kategori set nama_kategori =?, jenis=?, harga=? where id_kategori =?";
		$this->db->query($sql, array($data['nama_kategori'],$data['jenis'],$data['harga'],$data['id_kategori']));
	}

	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

}