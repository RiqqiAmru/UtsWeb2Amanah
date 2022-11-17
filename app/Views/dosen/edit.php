<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Dosen</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Dosen</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form action="<?php echo base_url('Dosen/update'); ?>" method="post">
            <div class="card">
              <div class="card-body">
                <?php
                $errors = session()->getFlashdata('errors');
                if (!empty($errors)) { ?>
                  <div class="alert alert-danger" role="alert">
                    Whoops! Ada kesalahan saat input data, yaitu:
                    <ul>
                      <?php foreach ($errors as $e) : ?>
                        <li><?= esc($e) ?></li>
                      <?php endforeach ?>
                    </ul>
                  </div>
                <?php } ?>

                <input type="hidden" name="id_dosen" value="<?php echo $dosen['id_dosen']; ?>">
                <div class="form-group">
                  <label for="">Dosen Name</label>
                  <input value="<?= $dosen['nama_dosen'] ?>" type="text" class="form-control" name="nama_dosen" placeholder="Enter Dosen name">
                </div>
                <div class="form-group">
                  <label for="">Address</label>
                  <input value="<?= $dosen['alamat'] ?>" type="text" class="form-control" name="alamat" placeholder="Enter Address">
                </div>
                <div class="form-group">
                  <label for="">Telp Number</label>
                  <input value="<?= $dosen['no_telepon'] ?>" type="text" class="form-control" name="no_telepon" placeholder="Enter Telp Number">
                </div>
                <div class="form-group">
                  <label for="">Status</label>
                  <select name="status" id="" class="form-control">
                    <option value="">Pilih Kategori</option>
                    <option <?= $dosen['status'] == 'tetap' ? 'selected' : '' ?> value="Tetap">Tetap</option>
                    <option <?= $dosen['status'] == 'kontrak' ? 'selected' : '' ?> value="Kontrak">Kontrak</option>
                  </select>
                </div>

              </div>
              <div class="card-footer">
                <a href="<?php echo base_url('dosen'); ?>" class="btn btn-outline-info">Back</a>
                <button type="submit" class="btn btn-primary float-right">Update</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <?= $this->endSection() ?>