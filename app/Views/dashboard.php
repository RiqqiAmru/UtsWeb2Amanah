<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header">
              <h5 class="m-0">Judul</h5>
            </div>
            <div class="card-body">
              <p>Ini adalah halaman sashboard untuk latihan uts WEB yang diampu oleh bu Amanah</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header">
              <h5 class="m-0">Creator</h5>
            </div>
            <div class="card-body">
              <p>Muhammad Riqqi Amru</p>
              <p>3P52</p>
              <p>21.230.0069</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>