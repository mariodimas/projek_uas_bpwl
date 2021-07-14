<?php
class M_login extends CI_Model{
    private $table = 'login';
    function cek_login($table, $where){
        return $this->db->get_where($table, $where);
    }

    function daftar_user($table, $data){
        return $this->db->insert($table, $data);
    }
    
    function cek_username($table, $username){
        return $this->db->get_where($table, $username);
    }

    function set_password($table, $data){
        $this->db->where('username',$data['username']);
        return $this->db->update($table, $data);
    }
}
?>