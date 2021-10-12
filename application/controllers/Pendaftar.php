<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftar extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model(['m_login', 'm_user']);
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }


    public function index()
    {
        $siswa         = $this->m_user->listing();

        $data = array(
            'title'                 => 'Data Siswa',
            'isi'                   => 'v_pendaftar',
            'siswa'                 => $siswa,
        );

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function status($id_user)
    {
        $siswa = $this->m_user->detail($id_user);

        $valid = $this->form_validation;
        $valid->set_rules(
            'status_user',
            'Status Pendaftaran',
            'required',
            array(
                'required'        => 'Status Pendaftaran harus diisi'
            )
        );

        if ($valid->run() === false) {
            $data = array(
                'title'                 => 'Data Siswa',
                'isi'                   => 'pendaftar/v_edit',
                'siswa'                 => $siswa,
            );
        } else {
            $i = $this->input;
            $data = array(
                'status_user'           => $i->post('status_user'),
            );

            $this->m_user->edit($data,$id_user);
            $this->session->set_flashdata('sukses', ' Data telah diupdate');
            redirect(base_url('pendaftar'), 'refresh');
        }

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function detail($id_user)
    {

        $detail = $this->m_user->detail($id_user);
        $data = array(
            'title'      => $detail->nama_user,
            'detail'     => $detail,
            'isi'        => 'pendaftar/v_detail'
        );
        $this->load->view('layout/wrapper', $data, FALSE);
    }
}