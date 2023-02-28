<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Page</title>

  <!-- ========== All CSS files linkup ========= -->
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/lineicons.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/materialdesignicons.min.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/fullcalendar.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/main6.css') ?>" />
</head>

<body>
  <!-- ======== sidebar-nav start =========== -->
  <aside class="sidebar-nav-wrapper">
    <div class="navbar-logo">
      <a href="index.html">
        <div class="my-2">
          <h1 class="d-inline fw-bold">ILYAS</h1>
          <span class="h4 fw-light">Apps</span>
        </div>
      </a>
    </div>
    <!-- Sidebar -->
    <nav class="sidebar-nav">
      <ul>
        <li class="nav-item active">
          <a href="<?= base_url('admin') ?>">
            <span class="icon">
              <i class="lni lni-dashboard"></i>
            </span>
            <span class="text">Dashboard</span>
          </a>
        </li>

        <!-- jika yg login adalah admin -->
        <?php if ($this->session->userdata('level') == "admin") : ?>
          <li class="nav-item nav-item-has-children">
            <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_1" aria-controls="ddmenu_1" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon">
                <i class="lni lni-laptop"></i>
              </span>
              <span class="text">Pages</span>
            </a>
            <ul id="ddmenu_1" class="collapse dropdown-nav">
              <li>
                <a href="<?= base_url('siswa') ?>"> Siswa </a>
              </li>
              <li>
                <a href="<?= base_url('kelas') ?>"> Kelas </a>
              </li>
              <li>
                <a href="<?= base_url('spp') ?>"> SPP </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('petugas') ?>">
              <span class="icon">
                <i class="lni lni-user"></i>
              </span>
              <span class="text">Data Petugas</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('pembayaran') ?>">
              <span class="icon">
                <i class="lni lni-coin"></i>
              </span>
              <span class="text">Pembayaran</span>
            </a>
          </li>
        <?php elseif ($this->session->userdata('level') == "petugas") : ?>
          <li class="nav-item">
            <a href="<?= base_url('pembayaran') ?>">
              <span class="icon">
                <i class="lni lni-coin"></i>
              </span>
              <span class="text">Pembayaran</span>
            </a>
          </li>
        <?php else : ?>
          <!-- none -->
        <?php endif; ?>

        <li class="nav-item">
          <a href="<?= base_url('laporan') ?>">
            <span class="icon">
              <i class="lni lni-bar-chart"></i>
            </span>
            <span class="text">Laporan</span>
          </a>
        </li>
        <span class="divider">
          <hr />
        </span>
        <li class="nav-item">
          <a href="<?= base_url('auth/logout') ?>">
            <span class="icon">
              <i class="lni lni-exit text-danger"></i>
            </span>
            <span class="text">Logout</span>
          </a>
        </li>
      </ul>
    </nav>
  </aside>
  <div class="overlay"></div>
  <!-- ======== sidebar-nav end =========== -->