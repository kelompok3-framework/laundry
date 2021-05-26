<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    function select($data)
    {
        $item = array('username'=>$data['username'], 'password'=>md5($data['password']));
        $result = $this->db->get_where('user', $item);
        if($result->num_rows()>0){
            $user = $result->result()[0];
            $this->session->set_userdata('username', $user->username);
            if($user->level=="Admin"){
                $datauser = $this->db->get_where('pegawai', array('id_user'=>$user->id_user))->result_array()[0];
                $datauser['level'] = $user->level;
                return $datauser;
                $this->session->set_userdata('sessionuser',$datauser);
            }elseif($user->level=="Pegawai")
            {
                $datauser = $this->db->get_where('pegawai', array('id_user'=>$user->id_user))->result_array()[0];
                $datauser['level'] = $user->level;
                return $datauser;   
                $this->session->set_userdata('sessionuser',$datauser);
            }
            else{
                $datauser = $this->db->get_where('pelanggan', array('id_user'=>$user->id_user))->result_array()[0];
                $datauser['level'] = $user->level;
                return $datauser;
                $this->session->set_userdata('sessionuser',$datauser);
            }
        }else
            return $result->result();
    }    
}