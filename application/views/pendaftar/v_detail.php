<?php
if ($this->session->userdata('level_user') !== "admin") {
    $this->session->set_flashdata('salah', ' Anda tidak berhak');
    redirect(base_url('beranda'), 'refresh');
}

?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-6 ">
                                    Detail Siswa
                                </div>
                                <div class="col-6 text-right">
                                    <a href="<?php echo base_url('pendaftar') ?>" class="btn btn-primary btn-sm">
                                    <i class="fa fa-arrow-left"></i> Kembali</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-12 form-group">
                                        <table>
                                            <tr>
                                                <td width="200px">Nama Siswa</td>
                                                <td width="20px">:</td>
                                                <td><b><?php echo $detail->nama_user ?></b></td>
                                            </tr>
                                            <tr>
                                                <td width="200px">NISN</td>
                                                <td width="20px">:</td>
                                                <td><b><?php echo $detail->nisn ?></b></td>
                                            </tr>
                                            <tr>
                                                <td width="200px">NIK</td>
                                                <td width="20px">:</td>
                                                <td><b><?php echo $detail->nik ?></b></td>
                                            </tr>
                                            <tr>
                                                <td width="200px">Email</td>
                                                <td width="20px">:</td>
                                                <td><b><?php echo $detail->email ?></b></td>
                                            </tr>
                                            <tr>
                                                <td width="200px">Asal Sekolah</td>
                                                <td width="20px">:</td>
                                                <td><b><?php echo $detail->sekolah ?></b></td>
                                            </tr>
                                            <tr>
                                                <td width="200px">Status Pendaftaran</td>
                                                <td width="20px">:</td>
                                                <td><b><?php if($detail->status_user=="ready"){echo "menunggu";}else{echo $detail->status_user; } ?></b></td>
                                            </tr>
                                            <tr>
                                                <td width="200px">Alamat</td>
                                                <td width="20px">:</td>
                                                <td><b><?php echo $detail->alamat ?></b></td>
                                            </tr>
                                            <tr>
                                                <td width="200px">Nilai</td>
                                                <td width="20px">:</td>
                                                <td><b><?php echo $detail->nilai ?></b></td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="col-sm-12 form-group">
                                        <table>
                                            <tr>
                                                <td width="200px">Nama Orang Tua/Wali</td>
                                                <td width="20px">:</td>
                                                <td><b><?php echo $detail->nama_wali ?></b></td>
                                            </tr>
                                            <tr>
                                                <td width="200px">Hubungan Orang Tua/Wali</td>
                                                <td width="20px">:</td>
                                                <td><b><?php echo $detail->hubungan_wali ?></b></td>
                                            </tr>
                                            <tr>
                                                <td width="200px">Kontak Orang Tua/Wali</td>
                                                <td width="20px">:</td>
                                                <td><b><?php echo $detail->kontak_wali ?></b></td>
                                            </tr>
                                            <tr>
                                                <td width="200px">Alamat Orang Tua/Wali</td>
                                                <td width="20px">:</td>
                                                <td><b><?php echo $detail->alamat_wali ?></b></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>