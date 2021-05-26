<?php

class m_pemesanan extends CI_Model {
    function select()
    {
        $data= ['data'=>array(), 'selesai'=>array()];
        $query = $this->db->query("SELECT
                `pemesanan`.`id_pemesanan`,
                `pemesanan`.`nota`,
                `pemesanan`.`tgl_pemesanan`,
                `pemesanan`.`nama_pemesan`,
                `pemesanan`.`no_telp`,
                `pemesanan`.`alamat`,
                `pemesanan`.`status`
            FROM
                `pemesanan`
            WHERE
                status NOT IN ('Selesai', 'Batal') ORDER BY id_pemesanan DESC");
        $data['data'] = $query->result();
        $query = $this->db->query("SELECT
                `pemesanan`.`id_pemesanan`,
                `pemesanan`.`nota`,
                `pemesanan`.`tgl_pemesanan`,
                `pemesanan`.`nama_pemesan`,
                `pemesanan`.`no_telp`,
                `pemesanan`.`alamat`,
                `pemesanan`.`status`
            FROM
                `pemesanan`
            WHERE status  = 'Selesai' ORDER BY id_pemesanan DESC");
        $data['selesai'] = $query->result();
        $query = $this->db->query("SELECT
                `pemesanan`.`id_pemesanan`,
                `pemesanan`.`nota`,
                `pemesanan`.`tgl_pemesanan`,
                `pemesanan`.`nama_pemesan`,
                `pemesanan`.`no_telp`,
                `pemesanan`.`alamat`,
                `pemesanan`.`status`
            FROM
                `pemesanan`
            WHERE status  = 'Batal' ORDER BY id_pemesanan DESC");
        $data['batal'] = $query->result();
        return $data;
    }

    public function get_spesific($id_pemesanan)
    {
        return $this->db
                    ->where('id_pemesanan',$id_pemesanan)
                    ->get('pemesanan')
                    ->result();
    }

    public function find($id_pemesanan)
    {
        $hasil = $this->db->where('id_pemesanan',$id_pemesanan)->get('pemesanan');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        }else{
            return false;
        }
    }

    public function tampil_data()
    {
        return $this->db->get('pemesanan');
    }

    public function tampil_detail_pemesanan()
    {
        return $this->db->query("select * from detail_pemesanan");
    }

    function join_2_tabel()
    {
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->join('detail_pemesanan', 'pemesanan.id_pemesanan = detail_pemesanan.id_pemesanan');
        $query = $this->db->get();
        return $query;
    }

    function join_3_tabel()
    {
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->join('detail_pemesanan', 'pemesanan.id_pemesanan = detail_pemesanan.id_pemesanan', 'LEFT');
        $this->db->join('kategori','detail_pemesanan.id_kategori = kategori.id_kategori', 'LEFT');
        $query = $this->db->get();
        return $query;
    }

    function join_4_tabel()
    {
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->join('pegawai', 'pemesanan.id_pegawai = pegawai.id_pegawai', 'LEFT');
        $this->db->join('detail_pemesanan', 'pemesanan.id_pemesanan = detail_pemesanan.id_pemesanan', 'LEFT');
        $this->db->join('kategori','detail_pemesanan.id_kategori = kategori.id_kategori', 'LEFT');
        $query = $this->db->get();
        return $query;
    }
    
    function update_data($data)
    {
        $item = [
            'status'=>$data['status']
        ];
        $this->db->where('id_pemesanan', $data['id_pemesanan']);
        if($this->db->update('pemesanan', $item))
            return true;
        else
            return false;
    }

    function delete($data)
    {
        $item = [
            'status'=>$data['status']
        ];
        $this->db->where('id_pemesanan', $data['id_pemesanan']);
        if($this->db->update('pemesanan', $item))
            return true;
        else
            return false;
    }      

    function update_pemesanan($data)
    {
        $item = [
            'qty'=>$data['qty']
        ];
        $this->db->where('id_kategori', $data['id_kategori']);
        if($this->db->update('cart', $item))
            return true;
        else
            return false;
    }  
}