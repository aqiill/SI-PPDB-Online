<?php

echo form_open(base_url('biodata/proses_daftar/' . $siswa->id_user),array('class' => 'needs-validation','novalidate'=>''));
?>


<div class="content-wrapper">
    <?php if ($siswa->status_user !='proses'){ ?> 
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                        <div class="col-sm-12">
                            <a href="#" onclick="return window.print()" class="btn btn-primary float-right"><i class="fas fa-print"></i> Cetak Formulir</a>
                        </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="card-body">
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


                    <div class="accordion" id="accordionExample">
                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <h2 class="mb-0 text-center">
                            <?php if ($siswa->status_user =='proses'){ ?> 
                                Lengkapi Formulir Pendaftaran
                            <?php }else{ ?>
                                Formulir Pendaftaran Peserta Didik Baru
                            <?php } ?>
                          </h2>
                        </div>
                        <div class="card-header" id="headingOne">
                          <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Biodata Calon Siswa
                            </button>
                          </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                          <div class="card-body">
                            <div class="row">
                                <div class="input-group mb-3 col-6">
                                    <input type="text" class="form-control" placeholder="NISN" name="nisn"
                                        value="<?php echo $siswa->nisn; ?>" selected disabled>
                                </div>
                                <div class="input-group mb-3 col-6">
                                    <input type="text" class="form-control" placeholder="NIK" <?php if ($siswa->status_user !='proses'){echo 'disabled';} ?> required name="nik"
                                        value="<?php echo $siswa->nik; ?>" >
                                    <div class="invalid-feedback">
                                    NIK harus diisi.
                                    </div>
                                </div>
                                <div class="input-group mb-3 col-6">
                                    <input type="text" class="form-control" placeholder="Nama" <?php if ($siswa->status_user !='proses'){echo 'disabled';} ?> required name="nama_user"
                                        value="<?php echo $siswa->nama_user; ?>">
                                    <div class="invalid-feedback">
                                    Nama harus diisi
                                    </div>
                                </div>
                                <div class="input-group mb-3 col-6">
                                    <input type="text" class="form-control" placeholder="Asal Sekolah" <?php if ($siswa->status_user !='proses'){echo 'disabled';} ?> required name="sekolah" value="<?php echo $siswa->sekolah; ?>">
                                    <div class="invalid-feedback">
                                    Asal Sekolah harus diisi.
                                    </div>
                                </div>
                                <div class="input-group mb-3 col-12">
                                    <input type="text" class="form-control" required name="alamat" <?php if ($siswa->status_user !='proses'){echo 'disabled';} ?> placeholder="Alamat"
                                        value="<?php echo $siswa->alamat; ?>">
                                    <div class="invalid-feedback">
                                    Alamat harus diisi.
                                    </div>
                                </div>
                            </div>

                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingTwo">
                          <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Data Orang Tua/Wali
                            </button>
                          </h2>
                        </div>
                        <div id="collapseTwo" class="collapse <?php if ($siswa->status_user !='proses'){echo 'show';} ?>" aria-labelledby="headingTwo" data-parent="#accordionExample">
                          <div class="card-body">
                            <div class="row">
                                <div class="input-group mb-3 col-6">
                                    <input type="text" class="form-control" placeholder="Nama Ortu/Wali" <?php if ($siswa->status_user !='proses'){echo 'disabled';} ?> required name="nama_wali"
                                        value="<?php echo $siswa->nama_wali; ?>">
                                    <div class="invalid-feedback">
                                    Nama Ortu/Wali harus diisi.
                                    </div>
                                </div>
                                <div class="input-group mb-3 col-6">
                                    <input type="number" class="form-control" <?php if ($siswa->status_user !='proses'){echo 'disabled';} ?> placeholder="Hp Ortu/Wali 628xxx" required name="kontak_wali"
                                        value="<?php echo $siswa->kontak_wali; ?>">
                                    <div class="invalid-feedback">
                                    Hp Wali harus diisi.
                                    </div>
                                </div>
                                <div class="input-group mb-3 col-6">
                                    <select  <?php if ($siswa->status_user !='proses'){echo 'disabled';} ?> name="hubungan_wali" class="custom-select">
                                      <option selected disabled="">Hubungan dengan Ortu/Wali</option>
                                      <option <?php if($siswa->hubungan_wali=="ayah"){ echo "selected"; } ?> value="ayah">Ayah</option>
                                      <option <?php if($siswa->hubungan_wali=="ibu"){ echo "selected"; } ?> value="ibu">Ibu</option>
                                      <option <?php if($siswa->hubungan_wali=="saudara/i"){ echo "selected"; } ?> value="saudara/i">Saudara/i</option>
                                      <option <?php if($siswa->hubungan_wali=="lainnya"){ echo "selected"; } ?> value="lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3 col-6">
                                    <input type="text" class="form-control" <?php if ($siswa->status_user !='proses'){echo 'disabled';} ?> required name="alamat_wali" placeholder="Alamat Ortu/Wali"
                                        value="<?php echo $siswa->alamat_wali; ?>">
                                    <div class="invalid-feedback">Alamat Ortu/Wali.</div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingThree">
                          <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Nilai Ujian Sekolah
                            </button>
                          </h2>
                        </div>
                        <div id="collapseThree" class="collapse  <?php if ($siswa->status_user !='proses'){echo 'show';} ?>" aria-labelledby="headingThree" data-parent="#accordionExample">
                          <div class="card-body">
                            <?php if ($siswa->nilai =="" || $siswa->status_user=="proses"): ?>
                                <div class="row">
                                    <div class="input-group mb-3 col-12">
                                        <p class="text-danger">Masukkan Nilai 0-100 tanpa koma!</p>
                                    </div>
                                    <div class="input-group mb-3 col-6">
                                        <input type="number" <?php if ($siswa->status_user !='proses'){echo 'disabled';} ?> class="form-control" required placeholder="Bahasa Indonesia" name="nilai_bhs">
                                        <div class="invalid-feedback">Nilai Bahasa Indonesia Harus diisi.</div>
                                    </div>
                                    <div class="input-group mb-3 col-6">
                                        <input type="number" <?php if ($siswa->status_user !='proses'){echo 'disabled';} ?> class="form-control" required placeholder="Matematika" name="nilai_mtk">
                                        <div class="invalid-feedback">Nilai Matematika Harus diisi.</div>
                                    </div>
                                    <div class="input-group mb-3 col-6">
                                        <input type="number" <?php if ($siswa->status_user !='proses'){echo 'disabled';} ?> class="form-control" required placeholder="IPA" name="nilai_ipa">
                                        <div class="invalid-feedback">Nilai IPA Harus diisi.</div>
                                    </div>
                                    <div class="input-group mb-3 col-6">
                                        <input type="number" <?php if ($siswa->status_user !='proses'){echo 'disabled';} ?> class="form-control" required placeholder="Bahasa Inggris" name="nilai_eng">
                                        <div class="invalid-feedback">Nilai Bahasa Inggris Harus diisi.</div>
                                    </div>
                                </div>
                            <?php endif ?>
                            <?php if ($siswa->nilai !=""): ?>
                                <div class="text-center">
                                    <h2>Rata-Rata Nilai 4 Mata Pelajaran Anda:</h2><br>
                                    <h1><?php echo $siswa->nilai; ?></h1>
                                </div>
                            <?php endif ?>
                          </div>
                        </div>
                      </div>

                      <?php if ($siswa->status_user =='diterima'): ?>
                      <div class="card">
                        <div id="collapseThree" class="collapse  <?php if ($siswa->status_user !='proses'){echo 'show';} ?>" aria-labelledby="headingThree" data-parent="#accordionExample">
                          <div class="card-body text-center">
                            <h2 class="text-success"><b>Selamat Anda Diterima!</b></h2><p>Silahkan Cetak Formulir dan Lakukan daftar ulang ke Lembaga Sertifikasi Profesi Informatika</p>
                          </div>
                        </div>
                      </div>
                      <?php endif ?>

                      <?php if ($siswa->status_user =='proses'): ?>
                        <button type="submit" class="btn btn-danger btn-block">Simpan Permanent!</button>  
                      <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>