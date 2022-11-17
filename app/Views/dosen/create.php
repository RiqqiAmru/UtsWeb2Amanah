<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Create Dosen</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Create Dosen</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form action="<?php echo base_url('dosen/store'); ?>" method="post">
            <div class="card">
              <div class="card-body">
                <?php
                $input = [
                  'nama_dosen' => '',
                  'alamat' => '',
                  'no_telepon' => '',
                  'status' => '',
                ];
                if (!empty(session()->getFlashdata('input'))) {
                  $input = session()->getFlashdata('input');
                }
                $error = session()->getFlashdata('errors');
                if (!empty($error)) :  ?>
                  <div class="alert alert-danger" role="alert">
                    Whoops! Ada kesalahan saat input data, yaitu:

                    <ul>
                      <?php foreach ($error as $e) :  ?>
                        <li><?= esc($e) ?></li>
                      <?php endforeach ?>
                    </ul>
                  </div>
                <?php endif ?>
                <div class="form-group">
                  <label for="">Dosen Name</label>
                  <input type="text" class="form-control" name="nama_dosen" placeholder="Enter Dosen name" value="<?php echo $input['nama_dosen']; ?>">
                </div>
                <div class="form-group">
                  <label for="">Address</label>
                  <input type="text" class="form-control" name="alamat" placeholder="Enter Address" value="<?php echo $input['alamat']; ?>">
                </div>
                <div class="form-group">
                  <label for="">Telp Number</label>
                  <input type="text" class="form-control" name="no_telepon" placeholder="Enter Telp Number" value="<?php echo $input['no_telepon']; ?>">
                </div>
                <div class="form-group">
                  <label for="">Status</label>
                  <select name="status" id="" class="form-control">
                    <option value="">Pilih Kategori</option>
                    <option <?= $input['status'] == 'tetap' ? 'selected' : '' ?> value="Tetap">Tetap</option>
                    <option <?= $input['status'] == 'kontrak' ? 'selected' : '' ?> value="Kontrak">Kontrak</option>
                  </select>
                </div>
              </div>
              <div class="card-footer">
                <a href="<?= base_url('dosen'); ?>" class="btn btn-outline-info">Back</a>
                <button type="submit" class="btn btn-primary float-right">Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>