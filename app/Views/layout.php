<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>SI Akademis</title>
  <style type="text/css" id="debugbar_dynamic_style"></style>
  <link rel="stylesheet" href="<?= base_url() ?>/css/adminlte.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/css/all.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script type="text/javascript" id="debugbar_dynamic_script"></script>
  <!-- ini belom ketemu file nya -->
  <script type="text/javascript" id="debugbar_loader" data-time="1" src="<?php echo base_url('plugins/'); ?>/index.php?debugbar"></script>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-user"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="<?php echo base_url('auth/logout'); ?>" class="dropdown-item">
              Logout
            </a>
          </div>
        </li>
      </ul>
    </nav>

    <!-- sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <a href="<?php echo base_url('/'); ?>" class="brand-link">
        <img src="<?php echo base_url(); ?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Dashboard</span>
      </a>

      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?php echo base_url(); ?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Riqqi</a>
          </div>
        </div>
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="<?php echo base_url('/'); ?>" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('dosen'); ?>" class="nav-link">
                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                <p>Dosen</p>
              </a>
            </li>

            <li class="nav-header">ACCOUNT</li>
            <li class="nav-item">
              <a href="<?php echo base_url('auth/logout'); ?>" class="nav-link">
                <i class="nav-icon far fa-circle text-danger"></i>
                <p class="text">Logout</p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>
    <!-- end sidebar -->

    <?= $this->renderSection('content') ?>

    <!-- footer -->
    <aside class="control-sidebar control-sidebar-dark">
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>

    <footer class="main-footer">
      <div class="float-right d-none d-sm-inline">
        Sistem Informasi Akademi
      </div>
      <strong>Copyright &copy; 20214-2022 <a href="<?php echo base_url('/'); ?>">Riqqi</a>.</strong> All rights reserved.
    </footer>
  </div>

  <script src="<?php echo base_url('plugins'); ?>/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url('plugins'); ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>/js/adminlte.min.js"></script>
</body>

</html>

<!-- end footer -->