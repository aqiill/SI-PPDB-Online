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
    <br>
    <div class="container">
        <div class="card card-outline card-primary"><br>
            <div align="center">
                <img src="<?php echo base_url('assets/dist/img/logo.png') ?>" width="30%">
            </div>
            <hr>
            <div class="card-header text-center">
                <b><?php echo $title ?></b><br>
            </div>
            <div class="card-body">
                <?php
                echo validation_errors('<div class="alert alert-danger text-center"><i class="fa fa-exclamation-triangle"></i> ', '</div>');
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
                <form method="post" class="needs-validation" novalidate>
                    <div class="row">
                        <div class="input-group mb-3 col-12">
                            <input type="number" class="form-control" name="nisn" placeholder="NISN" required>
                            <div class="invalid-feedback">
                                NISN harus diisi.
                            </div>
                            <div class="valid-feedback">
                                oke.
                            </div>
                        </div>
                        <div class="input-group mb-3 col-12">
                            <input type="text" class="form-control" name="nama_user" placeholder="Nama Lengkap" required>
                            <div class="invalid-feedback">
                                Nama harus diisi.
                            </div>
                            <div class="valid-feedback">
                                oke.
                            </div>
                        </div>
                        <div class="input-group mb-3 col-12">
                            <input type="email" class="form-control" name="email" placeholder="Email Aktif" required>

                            <div class="invalid-feedback">
                                Email harus diisi.
                            </div>
                            <div class="valid-feedback">
                                oke.
                            </div>
                        </div>
                        <div class="input-group mb-3 col-12">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                            <div class="invalid-feedback">
                                Password harus diisi.
                            </div>
                            <div class="valid-feedback">
                                oke.
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                        </div>
                    </div>
                </form>
                <br>
                <div class="social-auth-links text-center mt-2 mb-3">
                    <span> <a href="<?php echo base_url('login') ?>" class="btn btn-social-icon m-r-5">Sudah punya akun
                            ..?
                            Silahkan Login</a> </span>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/dist/js/adminlte.min.js') ?>"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
          'use strict'

          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.querySelectorAll('.needs-validation')

          // Loop over them and prevent submission
          Array.prototype.slice.call(forms)
            .forEach(function (form) {
              form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                  event.preventDefault()
                  event.stopPropagation()
                }

                form.classList.add('was-validated')
              }, false)
            })
        })()
    </script>
</body>

</html>