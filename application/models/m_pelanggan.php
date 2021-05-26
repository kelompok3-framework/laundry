<?php 
/**
 * 
 */
class M_pelanggan extends CI_Model
{
    
    function __construct()
    {
        parent::__construct();
    }

    public function tampil_data()
    {
        return $this->db->get('pelanggan');
    }

    public function get_data($limit, $start, $keyword)
    {
        if($keyword){
            $this->db->like('nama', $keyword);
            $this->db->or_like('no_telp', $keyword);
            $this->db->or_like('jenis_kelamin', $keyword);
            $this->db->or_like('alamat', $keyword);
            return $this->db->get('pelanggan', $limit, $start, $keyword);
        }
        return $this->db->get('pelanggan', $limit, $start);
    }

    public function baris()
    {
        return $this->db->get('pelanggan')->num_rows();
    }

    function insert_data($data)
    {
        $user= [
            'username'=>$data['username'],
            'password'=>md5($data['password']),
            'level' => 'Member'
        ];
        $item = [
            'nama'=>$data['nama'],
            'no_telp'=>$data['no_telp'],
            'jenis_kelamin'=>$data['jenis_kelamin'],
            'alamat'=>$data['alamat']
        ];
        $this->db->trans_begin();
        $this->db->insert('user', $user);
        $item['id_user'] = $this->db->insert_id();
        $this->db->insert('pelanggan', $item);

        if($this->db->trans_status()==true){
            $this->db->trans_commit();
            return true;
        }else{
            $this->db->trans_rollback();
            return false;
        }
            
    }

    public function get_spesific($id_pelanggan)
    {
        return $this->db
                    ->where('id_pelanggan',$id_pelanggan)
                    ->get('pelanggan')
                    ->result();
    }

    public function hapus_data($table, $where)
    {
        $spn = $this->db->delete($table, $where);
        return $spn;
    }
}