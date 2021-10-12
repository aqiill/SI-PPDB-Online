<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->session->unset_userdata('nik');
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('level_user');
        $this->session->set_flashdata('sukses', ' Anda berhasil keluar');
        redirect(base_url('login'), 'refresh');
    }
}