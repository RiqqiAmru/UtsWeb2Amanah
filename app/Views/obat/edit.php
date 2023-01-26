<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?= d($validation) ?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form action="<?php echo base_url('obat/update/' . $obat[0]['id_obat']); ?>" method="post">
          <input type="hidden" name="id_obat" id="" value="">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="">Nama Obat</label>
                  <input type="text"
                    class="form-control <?= ($validation->hasError('nama_obat')) ? 'is-invalid' : ''; ?>"
                    value="<?= (old('nama_obat')) ? old('nama_obat') : $obat[0]['nama_obat'] ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('nama_obat'); ?>
                  </div>
                </div>
                <div class="form-group col-sm-6">
                  <label for="">Deskripsi Obat</label>
                  <input type="text"
                    class="form-control <?= ($validation->hasError('deskripsi_obat')) ? 'is-invalid' : ''; ?>"
                    name="deskripsi_obat" placeholder="Enter Deskripsi Obat"
                    value="<?= (old('deskripsi_obat')) ? old('deskripsi_obat') : $obat[0]['deskripsi_obat'] ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('deskripsi_obat'); ?>
                  </div>
                </div>

              </div>
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="">Jenis Obat</label>
                  <?php (old('jenis_obat') ? $jenisLama = old('jenis_obat') : $jenisLama = $obat[0]['jenis_obat']) ?>
                  <select name="jenis_obat" id=""
                    class="form-control <?= ($validation->hasError('jenis_obat')) ? 'is-invalid' : ''; ?>">
                    <option value="">Choose Jenis Obat</option>
                    <option <?= $jenisLama == 'Generic' ? 'selected' : '' ?> value="Generic">Generic</option>
                    <option <?= $jenisLama == 'NonGeneric' ? 'selected' : '' ?> value="NonGeneric">Non Generic
                    </option>
                  </select>
                  <div class="invalid-feedback">
                    <?= $validation->getError('jenis_obat'); ?>
                  </div>
                </div>
                <div class="form-group col-sm-6">
                  <label for="">Dosis Obat</label>
                  <input type="text"
                    class="form-control <?= ($validation->hasError('dosis_obat')) ? 'is-invalid' : ''; ?>"
                    name="dosis_obat" placeholder="Enter Dosis Obat"
                    value="<?= (old('dosis_obat')) ? old('dosis_obat') : $obat[0]['dosis_obat'] ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('dosis_obat'); ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group ">
                    <label for="">Status Obat</label>
                    <?php (old('status_obat') ? $statusLama = old('status_obat') : $statusLama = $obat[0]['status_obat']) ?>
                    <select name="status_obat" id=""
                      class="form-control <?= ($validation->hasError('status_obat')) ? 'is-invalid' : ''; ?>">
                      <option value="">Choose Product Status</option>
                      <option <?= $statusLama == 'Tersedia' ? 'selected' : '' ?> value="Tersedia">Tersedia
                      </option>
                      <option <?= $statusLama == 'Kosong' ? 'selected' : '' ?> value="Kosong">Kosong
                      </option>
                    </select>
                    <div class="invalid-feedback">
                      <?= $validation->getError('status_obat'); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <a href="<?= base_url('obat'); ?>" class="btn btn-outline-info">Back</a>
              <button type="submit" class="btn btn-primary float-right">Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>