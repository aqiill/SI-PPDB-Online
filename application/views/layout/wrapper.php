<?php
if ($this->session->userdata('username') == "" && $this->session->userdata('id_user') == "" && $this->session->userdata('level_user') == "") {
    $this->session->set_flashdata('salah', ' Silahkan login dahulu');
    redirect(base_url('login'), 'refresh');
}

require_once('head.php');
require_once('sidebar.php');
require_once('content.php');
require_once('footer.php');