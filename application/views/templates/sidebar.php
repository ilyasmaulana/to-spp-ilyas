<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $title; ?></title>

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
        <li class="nav-item <?= ($title == "Admin") ? 'active' : '' ?>"">
          <a href=" <?= base_url('admin') ?>">
          <span class="icon">
            <i class="lni lni-dashboard"></i>
          </span>
          <span class="text">Dashboard</span>
          </a>
        </li>

        <!-- jika yg login adalah admin -->
        <?php if ($this->session->userdata('level') == "admin") : ?>
          <li class="nav-item nav-item-has-children">

            <!-- untuk atur garis biru vertikal -->
            <?php if ($title == "Siswa") : ?>
              <a href="#0" class="" data-bs-toggle="collapse" data-bs-target="#menu_1" aria-controls="menu_1" aria-expanded="true" aria-label="Toggle navigation">
              <?php elseif ($title == "Kelas") : ?>
                <a href="#0" class="" data-bs-toggle="collapse" data-bs-target="#menu_1" aria-controls="menu_1" aria-expanded="true" aria-label="Toggle navigation">
                <?php elseif ($title == "SPP") : ?>
                  <a href="#0" class="" data-bs-toggle="collapse" data-bs-target="#menu_1" aria-controls="menu_1" aria-expanded="true" aria-label="Toggle navigation">
                  <?php else : ?>
                    <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#menu_1" aria-controls="menu_1" aria-expanded="true" aria-label="Toggle navigation">
                    <?php endif; ?>
                    <!-- end garis biru vertikal -->

                    <span class="icon">
                      <i class="lni lni-laptop"></i>
                    </span>
                    <span class="text">Pages</span>
                    </a>
                    <!-- untuk menampilkan collapse  -->
                    <?php if ($title == "Siswa") : ?>
                      <ul id="menu_1" class="collapse show dropdown-nav">
                      <?php elseif ($title == "Kelas") : ?>
                        <ul id="menu_1" class="collapse show dropdown-nav">
                        <?php elseif ($title == "SPP") : ?>
                          <ul id="menu_1" class="collapse show dropdown-nav">
                          <?php else : ?>
                            <ul id="menu_1" class="collapse dropdown-nav">
                            <?php endif; ?>
                            <!-- End untuk menampilkan collapse  -->
                            <li>
                              <a href="<?= base_url('siswa') ?>" class="<?= ($title == "Siswa") ? 'active' : '' ?>"> Siswa </a>
                            </li>
                            <li>
                              <a href="<?= base_url('kelas') ?>" class="<?= ($title == "Kelas") ? 'active' : '' ?>"> Kelas </a>
                            </li>
                            <li>
                              <a href="<?= base_url('spp') ?>" class="<?= ($title == "SPP") ? 'active' : '' ?>"> SPP </a>
                            </li>
                            </ul>
          </li>
          <li class="nav-item <?= ($title == "Petugas") ? 'active' : '' ?>">
            <a href=" <?= base_url('petugas') ?>">
              <span class="icon">
                <i class="lni lni-user"></i>
              </span>
              <span class="text">Data Petugas</span>
            </a>
          </li>
          <li class="nav-item <?= ($title == "Pembayaran") ? 'active' : '' ?>">
            <a href=" <?= base_url('pembayaran') ?>">
              <span class="icon">
                <i class="lni lni-coin"></i>
              </span>
              <span class="text">Pembayaran</span>
            </a>
          </li>
        <?php elseif ($this->session->userdata('level') == "petugas") : ?>
          <li class="nav-item <?= ($title == "Pembayaran") ? 'active' : '' ?>">
            <a href=" <?= base_url('pembayaran') ?>">
              <span class="icon">
                <i class="lni lni-coin"></i>
              </span>
              <span class="text">Pembayaran</span>
            </a>
          </li>
        <?php else : ?>
          <!-- none -->
        <?php endif; ?>

        <li class="nav-item <?= ($title == "Laporan") ? 'active' : '' ?>">
          <a href=" <?= base_url('laporan') ?>">
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