<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model(['m_login']);
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }


    public function index()
    {
        $valid = $this->form_validation;

        $valid->set_rules(
            'nisn',
            'NISN',
            'required',
            array(
                'required'        => ' NISN harus diisi'
            )
        );

        $valid->set_rules(
            'password',
            'Password',
            'required',
            array(
                'required'        => ' Password harus diisi',
                'min_length'      => ' Password minimal 6 karakter'
            )
        );


        if ($valid->run() === false) {
            $data = array(
                'title'         => 'PENDAFTARAN PESERTA DIDIK BARU',
            );
            $this->load->view('v_login', $data, FALSE);
        } else {
            $i              = $this->input;
            $nisn           = $i->post(htmlspecialchars('nisn'));
            $password       = $i->post(htmlspecialchars('password'));
            $cek_login      = $this->m_login->login($nisn, sha1($password));

            if ($cek_login->num_rows() > 0) {
                if (($cek_login->row()->level_user) == "admin") {
                    $this->session->set_userdata('nisn', $nisn);
                    $this->session->set_userdata('id_user', $cek_login->row()->id_user);
                    $this->session->set_userdata('nama_user', $cek_login->row()->nama_user);
                    $this->session->set_userdata('level_user', $cek_login->row()->level_user);
                    redirect(base_url('beranda'), 'refresh');
                } else {
                    $this->session->set_userdata('nisn', $nisn);
                    $this->session->set_userdata('id_user', $cek_login->row()->id_user);
                    $this->session->set_userdata('nama_user', $cek_login->row()->nama_user);
                    $this->session->set_userdata('level_user', $cek_login->row()->level_user);
                    redirect(base_url('beranda'), 'refresh');
                }
            } else {
                //kalau username dan password tidak cocok
                $this->session->set_flashdata('salah', ' Username dan Password tidak cocok');
                redirect(base_url('login'), 'refresh');
            }
        }
    }
}