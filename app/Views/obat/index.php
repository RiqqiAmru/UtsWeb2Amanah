<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="content">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">

            <a href="<?= base_url('obat/create'); ?>" class="btn btn-primary float-right">Tambah</a>

          </div>
          <div class="card-body">

            <?php if (!empty(session()->getFlashdata('success'))) : ?>
            <div class="alert alert-success">
              <?= session()->getFlashdata('success') ?>
            </div>
            <?php endif ?>

            <?php if (!empty(session()->getFlashdata('info'))) : ?>
            <div class="alert alert-info">
              <?= session()->getFlashdata('info') ?>
            </div>
            <?php endif ?>

            <?php if (!empty(session()->getFlashdata('warning'))) : ?>
            <div class="alert alert-warning">
              <?= session()->getFlashdata('warning') ?>
            </div>
            <?php endif ?>

            <div class="row">
              <div class="col-md-4">
                <?= form_label('Jenis Obat') ?>
                <?= form_dropdown('Jenis Obat', ['' => '---pilih---', 'Generic' => 'Generic', 'NonGeneric' => 'Non Generic'], $jenis, ['class' => 'form-control', 'id' => 'jenis_obat']) ?>
              </div>
              <div class="col-md-4">
                <?= form_label('Status Obat') ?>
                <?= form_dropdown('Status Obat', ['' => '---pilih---', 'Tersedia' => 'Tersedia', 'Kosong' => 'Kosong'], $status, ['class' => 'form-control', 'id' => 'status_obat']) ?>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <?php
                  echo form_label('Search');
                  $formKeyword = [
                    'type'  => 'text',
                    'name'  => 'keyword',
                    'id'  => 'keyword',
                    'value' => $keyword,
                    'class' => 'form-control',
                    'placeholder' => 'Enter Keyword.'
                  ];
                  echo form_input($formKeyword);
                  ?>
                </div>
              </div>
            </div>

            <div class="table-responsive">
              <table class="table table-bordered table-hovered">
                <thead>
                  <tr align="center">
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama Obat</th>
                    <th>Deskripsi Obat</th>
                    <th>Jenis Obat</th>
                    <th>Dosis Obat</th>
                    <th>Status Obat</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($obat as $key => $row) : ?>
                  <tr>
                    <td><?php echo $key + 1; ?></td>
                    <td><?php echo $row['id_obat']; ?></td>
                    <td><?php echo $row['nama_obat']; ?></td>
                    <td><?php echo $row['deskripsi_obat']; ?></td>
                    <td><?php echo $row['jenis_obat']; ?></td>
                    <td><?php echo $row['dosis_obat']; ?></td>
                    <td><?php echo $row['status_obat']; ?></td>
                    <td>
                      <div class="btn-group">
                        <a href="<?= base_url('obat/show/' . $row['id_obat']); ?>" class="btn btn-sm btn-info">
                          <i class="fa fa-eye"></i>
                        </a>
                        <a href="<?= base_url('obat/edit/' . $row['id_obat']); ?>" class="btn btn-sm btn-success">
                          <i class="fa fa-edit"></i>
                        </a>
                        <a href="<?= base_url('obat/delete/' . $row['id_obat']); ?>" class="btn btn-sm btn-danger"
                          onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?');">
                          <i class="fa fa-trash-alt"></i>
                        </a>
                      </div>
                    </td>
                  </tr>
                  <?php endforeach ?>
                </tbody>
              </table>

            </div>
            <div class="row-mt-3 float-right">
              <div class="col-md">
                <?= $pager->links('default', 'bootstrap_pagination') ?>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>