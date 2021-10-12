<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function daftar($data)
    {
        $this->db->insert('tb_user', $data);
    }

    public function listing()
    {
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where('level_user', 'siswa');
        $this->db->order_by('nilai', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function listingditerima()
    {
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where('level_user', 'siswa');
        $this->db->where('status_user', 'diterima');
        $query = $this->db->get();
        return $query->result();
    }

    public function listingcadangan()
    {
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where('level_user', 'siswa');
        $this->db->where('status_user', 'cadangan');
        $query = $this->db->get();
        return $query->result();
    }

    public function listingtidakditerima()
    {
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where('level_user', 'siswa');
        $this->db->where('status_user', 'tidakditerima');
        $query = $this->db->get();
        return $query->result();
    }

    public function nama($nama)
    {
        $this->db->select('nama_user');
        $this->db->from('tb_user');
        $this->db->where('id_user', $nama);
        $query = $this->db->get();
        return $query->row();
    }

    public function status_user($nama)
    {
        $this->db->select('status_user');
        $this->db->from('tb_user');
        $this->db->where('id_user', $nama);
        $query = $this->db->get();
        return $query->row();
    }

    public function detail($id_user)
    {
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where('id_user', $id_user);
        $query = $this->db->get();
        return $query->row();
    }

    public function edit($data,$id_user)
    {
        $this->db->update('tb_user', $data,array('id_user' => $id_user));
    }

    public function delete($id_user)
    {
        $this->db->delete('tb_user',array('id_user' => $id_user));
    }
}