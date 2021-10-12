<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title ?></title>
    <link rel="shortcut icon" href="<?php echo base_url('assets/dist/img/icon.jpg'); ?>">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/login.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/background.css') ?>">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card card-outline card-primary"><br>
            <div align="center">
                <img src="<?php echo base_url('assets/dist/img/logo.png') ?>" width="50%">
            </div>
            <hr>
            <div class="card-header text-center">
                <a href="<?php echo base_url('login') ?>" class="h4"><b>PPDB</b><br>LSP INFORMATIKA</a>
            </div>
            <div class="card-body">
                <?php
                echo validation_errors('<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> ', '</div>');
                //Notifikasi
                if ($this->session->flashdata('sukses')) {
                    echo '<div class="alert alert-success"><i class="fa fa-check"></i>';
                    echo $this->session->flashdata('sukses');
                    echo '</div>';
                } else if ($this->session->flashdata('salah')) {
                    echo '<div class="alert alert-danger"><i class="fa fa-times"></i>';
                    echo $this->session->flashdata('salah');
                    echo '</div>';
                }
                ?>
                <form method="post">
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" name="nisn" placeholder="NISN">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                        </div>
                    </div>
                </form>
                <br>
                <div class="social-auth-links text-center mt-2 mb-3">
                    <span><a href="<?php echo base_url('daftar') ?>" class="btn btn-social-icon m-r-5">Belum punya akun
                            ..?
                            Klik Disini</a></span>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/dist/js/adminlte.min.js') ?>"></script>
</body>

</html>