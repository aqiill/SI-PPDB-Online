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
        <div class="card">
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
                <div class="container-fluid">
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="example1" cellspacing="0"
                            width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Asal Sekolah</th>
                                    <th>Status Pendaftaran</th>
                                    <th>Rata-Rata Ujian Sekolah</th>
                                    <th width="200px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                    foreach ($siswa as $value) { ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $value->nama_user ?></td>
                                    <td><?php echo $value->sekolah ?></td>
                                    <td><?php if($value->status_user=="ready"){echo "menunggu";}else{ echo $value->status_user; } ?></td>
                                    <td><?php echo $value->nilai ?></td>
                                    <td>
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $value->id_user ?>">
                                              <i class="fa fa-edit"></i> Status
                                            </button>
                                        <a href="<?php echo base_url('pendaftar/detail/' . $value->id_user) ?>"
                                            class="btn btn-primary btn-sm">
                                            <i class="fa fa-user"></i> Detail</a>

                                        <!-- <a href="<?php echo base_url('pendaftar/status/' . $value->id_user) ?>"
                                            class="btn btn-success btn-sm">
                                            <i class="fa fa-edit"></i> Status</a> -->
                                        <a href="<?php echo base_url('pendaftar/delete/' . $value->id_user) ?>"
                                            class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> Delete</a>
                                    </td>
                                </tr>

<!-- Modal -->
<div class="modal fade" id="edit<?= $value->id_user ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Status Pendaftaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form role="form" method="POST" action="<?php echo base_url('pendaftar/status/' . $value->id_user) ?>">
                <div class="col-sm-12 form-group">
                    <label><strong>Status Pendaftar<span class="text-danger"><small>
                                    *</small></span></strong></label>
                    <select name="status_user" class="form-control">
                        <option selected disabled>Pilih Status</option>
                      <option <?php if($value->status_user=="proses"){ echo "selected"; } ?> value="proses">Proses</option>
                      <option <?php if($value->status_user=="ready"){ echo "selected"; } ?> value="ready">Menunggu</option>
                      <option <?php if($value->status_user=="tidakditerima"){ echo "selected"; } ?> value="tidakditerima">Tidak Diterima</option>
                      <option <?php if($value->status_user=="cadangan"){ echo "selected"; } ?> value="cadangan">Cadangan</option>
                      <option <?php if($value->status_user=="diterima"){ echo "selected"; } ?> value="diterima">Diterima</option>
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                </div>
            </form>
      </div>
    </div>
  </div>
</div>

                                <?php $i++;
                                    } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
<?php } else {
?>

<?php

    $this->session->set_flashdata('sukses', ' Anda tidak berhak');
    redirect(base_url('beranda'), 'refresh');

    ?>

<?php
}
?>