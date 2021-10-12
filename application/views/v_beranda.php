<?php if ($this->session->userdata('level_user') == "admin") { ?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Beranda</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <?php
            echo validation_errors('<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> ', '</div>');
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?php echo $pendaftar ?></h3>
                            <p>Jumlah Pendaftar</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-earth"></i>
                        </div>
                        <a href="<?php echo base_url('pendaftar') ?>" class="small-box-footer">Lihat selengkapnya <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?php echo $diterima ?></h3>
                            <p>Siswa Diterima</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person"></i>
                        </div>
                        <a href="<?php echo base_url('pendaftar') ?>" class="small-box-footer">Lihat selengkapnya <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?php echo $cadangan ?></h3>
                            <p>Siswa Cadangan</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person"></i>
                        </div>
                        <a href="<?php echo base_url('pendaftar') ?>" class="small-box-footer">Lihat selengkapnya <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?php echo $tidakditerima ?></h3>
                            <p>Siswa Tidak Diterima</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person"></i>
                        </div>
                        <a href="<?php echo base_url('pendaftar') ?>" class="small-box-footer">Lihat selengkapnya <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">

            </div>
        </div>
    </section>
</div>

<?php } else if ($this->session->userdata('level_user') == "siswa") { ?>
<div class="content-wrapper">


    <section class="content mt-3">


        <div class="col-12">
            <button class="btn btn-light btn-block">
                <?php
                    $nama = $this->session->userdata('id_user');
                    $siswa = $this->m_user->status_user($nama);
                    $status = $siswa->status_user;
                    if ($status == 'diterima') {
                        echo "<div class='btn btn-success btn-sm'><h2><b>Selamat Anda Diterima!</b></h2><p>Silahkan Cetak Formulir dan Lakukan daftar ulang ke Lembaga Sertifikasi Profesi Informatika</p></div>";
                    } else if ($status == 'cadangan') {
                        echo "<div class='btn btn-warning btn-sm'><h2><b>Status Pendaftaran: Cadangan</b></h2><p>Cek Informasi Berikutnya via situs ini secara berkala!</p></div>";
                    } else if ($status == 'proses') {
                        echo "<div class='btn btn-warning btn-sm'><h2><b>Lengkapi Pendaftaran Anda!</b></h2></div>";
                    } else if ($status == 'ready') {
                        echo "<div class='btn btn-warning btn-sm'><h2><b>Pendaftaran anda sedang diproses!</b></h2></div>";
                    } else {
                        echo "<div class='btn btn-danger btn-sm'><h2><b>Mohon Maaf Pendaftaran anda Belum Diterima</b></h2><p>Lembaga Sertifikasi Profesi Informatika</p></div>";
                    }

                    ?>
            </button>
        </div>
    </section>
</div>
<?php } ?>