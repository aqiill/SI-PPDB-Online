<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model(['m_user']);
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }


    public function index()
    {
        $valid = $this->form_validation;


        $valid->set_rules(
            'nisn',
            'NISN',
            'required|exact_length[10]|is_unique[tb_user.nisn]',
            array(
                'required'        => 'NISN harus diisi',
                'exact_length'    => 'NISN harus 10 Digit',
                'is_unique'       => 'Akun dengan NISN '.$this->input->post('nisn').' sudah terdaftar!',
            )
        );

        $valid->set_rules(
            'nama_user',
            'Nama',
            'required',
            array(
                'required'        => 'Nama harus diisi'
            )
        );

        $valid->set_rules(
            'password',
            'Password',
            'required|min_length[8]',
            array(
                'required'        => 'Password harus diisi',
                'min_length'      => 'Password minimal 8 digit kombinasi huruf & angka'
            )
        );

        $valid->set_rules(
            'email',
            'Email',
            'required|valid_emails|is_unique[tb_user.email]',
            array(
                'required'        => 'Email harus diisi',
                'valid_emails'    => 'Email Tidak Valid!',
                'is_unique'       => 'Akun dengan Email '.$this->input->post('email').' sudah terdaftar!',
            )
        );

        if ($valid->run() === false) {
            //End Validasi
            $data = array(
                'title'      => 'PENDAFTARAN PESERTA DIDIK BARU',
            );
            $this->load->view('v_daftar', $data, FALSE);
            //Gak ada error
        } else {
            $i = $this->input;
            $data = array(
                'nisn'            => $i->post('nisn'),
                'nama_user'       => $i->post('nama_user'),
                'nik'             => '',
                'email'           => $i->post('email'),
                'password'        => sha1($i->post('password')),
                'sekolah'         => '',
                'status_user'     => 'proses',
                'level_user'      => 'siswa'

            );
            $this->m_user->daftar($data);
            $this->session->set_flashdata('sukses', ' Pendaftaran berhasil, silahkan login!');
            redirect(base_url('login'), 'refresh');
        }
    }
}