<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model
{
    public function login($nisn, $password)
    {
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where(array(
            'nisn'       => $nisn,
            'password'  => $password
        ));
        $query = $this->db->get();
        return $query;
    }
    public function detail($id_user)
    {
        $this->db->select('nama_pembimbing,nama_dudi,level_user');
        $this->db->from('tb_user');
        $this->db->join('tb_dudi', 'tb_dudi.kode_dudi=tb_user.kode');
        $this->db->join('tb_pembimbing', 'tb_pembimbing.kode_pembimbing=tb_user.kode');
        $this->db->where('id_user', $id_user);
        $query = $this->db->get();
        return $query->row();
    }
}