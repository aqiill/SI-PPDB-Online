<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model(['m_login', 'm_user']);
        $this->load->helper(array('form', 'url'));
    }


    public function index()
    {
        $pendaftar                   = $this->m_user->listing();
        $diterima                   = $this->m_user->listingditerima();
        $cadangan                   = $this->m_user->listingcadangan();
        $tidakditerima                   = $this->m_user->listingtidakditerima();

        $data = array(
            'title'                 => 'Beranda',
            'isi'                   => 'v_beranda',
            'pendaftar'             => count($pendaftar),
            'diterima'             => count($diterima),
            'cadangan'             => count($cadangan),
            'tidakditerima'             => count($tidakditerima),
        );
        $this->load->view('layout/wrapper', $data, FALSE);
    }
}