<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna_m extends CI_Model
{
    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('pengguna');
        $this->db->where('email',$post['email']);
        $this->db->where('password',$post['password']);
        $query = $this->db->get();
        
        return $query;
    }
}
