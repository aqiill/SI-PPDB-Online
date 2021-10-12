<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Biodata extends CI_Controller
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
        $id_user = $this->session->userdata('id_user');
        $siswa = $this->m_user->detail($id_user);
        

        $data = array(
            'title'                 => 'Formulir Pendaftaran',
            'isi'                   => 'v_biodata',
            'siswa'                 => $siswa,
        );
        $this->load->view('layout/wrapper', $data, FALSE);

    }

    public function proses_daftar($id_user=null)
    {
        if (!isset($id_user)) show_404();
        $valid = $this->form_validation;

        $valid->set_rules(
            'nik',
            'NIK',
            'required|exact_length[16]',
            array(
                'required'        => 'NIK harus diisi',
                'exact_length'    => "NIK 16 digit"
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
            'sekolah',
            'Sekolah',
            'required',
            array(
                'required'        => 'Sekolah harus diisi'
            )
        );

        $valid->set_rules(
            'nama_wali',
            'Nama_Wali',
            'required',
            array(
                'required'        => 'Nama Wali harus diisi'
            )
        );

        $valid->set_rules(
            'kontak_wali',
            'Kontak_Wali',
            'required',
            array(
                'required'        => 'Kontak Wali harus diisi'
            )
        );

        $valid->set_rules(
            'hubungan_wali',
            'Hubungan_Wali',
            'required',
            array(
                'required'        => 'Hubungan Wali harus diisi'
            )
        );

        $valid->set_rules(
            'alamat_wali',
            'Alamat_Wali',
            'required',
            array(
                'required'        => 'Alamat Wali harus diisi'
            )
        );

        $valid->set_rules(
            'nilai_bhs',
            'Nilai',
            'required|numeric',
            array(
                'required'        => 'Nilai Bahasa Indonesia harus diisi',
                'numeric'           => 'Nilai diisi angka'
            )
        );

        $valid->set_rules(
            'nilai_mtk',
            'Nilai',
            'required|numeric',
            array(
                'required'        => 'Nilai Matematika harus diisi',
                'numeric'           => 'Nilai diisi angka'
            )
        );

        $valid->set_rules(
            'nilai_ipa',
            'Nilai',
            'required|numeric',
            array(
                'required'        => 'Nilai IPA harus diisi',
                'numeric'           => 'Nilai diisi angka'
            )
        );

        $valid->set_rules(
            'nilai_eng',
            'Nilai',
            'required|numeric',
            array(
                'required'        => 'Nilai Bahasa Inggris harus diisi',
                'numeric'           => 'Nilai diisi angka'
            )
        );

        $valid->set_rules(
            'alamat',
            'Alamat',
            'required',
            array(
                'required'        => 'Alamat harus diisi'
            )
        );

        if ($valid->run() === false) {    
            $this->session->set_flashdata('salah', validation_errors());
            redirect(base_url('Biodata'), 'refresh');
        } else {
            $i = $this->input;

            $nilai_bhs = $i->post('nilai_bhs');
            $nilai_mtk = $i->post('nilai_mtk');
            $nilai_ipa = $i->post('nilai_ipa');
            $nilai_eng = $i->post('nilai_eng');
            $nilai     = ($nilai_bhs+$nilai_mtk+$nilai_ipa+$nilai_eng)/4;

            $data = array(
                'nik'              => $i->post('nik'),
                'nama_user'        => $i->post('nama_user'),
                'sekolah'          => $i->post('sekolah'),
                'alamat'           => $i->post('alamat'),
                'nama_wali'        => $i->post('nama_wali'),
                'kontak_wali'      => $i->post('kontak_wali'),
                'hubungan_wali'    => $i->post('hubungan_wali'),
                'alamat_wali'      => $i->post('alamat_wali'),
                'status_user'      => 'ready',
                'nilai'            => $nilai,
            );
            $this->m_user->edit($data,$id_user);
            $this->session->set_flashdata('sukses', ' Data telah disimpan');
            redirect(base_url('Biodata'), 'refresh');
        }

    }

}