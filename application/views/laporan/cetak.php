<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
  <title>Tables | PlainAdmin Demo</title>

  <!-- ========== All CSS files linkup ========= -->
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/lineicons.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/materialdesignicons.min.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/fullcalendar.css') ?>" />
</head>

<body>

  <!-- ========== table components start ========== -->
  <section class="table-components">
    <div class="container-fluid">

      <!-- ========== tables-wrapper start ========== -->
      <div class="tables-wrapper">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <img src="<?= base_url('assets/img/kop.jpg'); ?>" width="100%" alt="">
            <h1 class="my-4"><?= $title; ?></h1>
            <?php if (empty($pembayaran or $pembKepsek)) : ?>
              <h1 class="my-3 text-center">Data belum ada</h1>
            <?php else : ?>
              <table class="table table-responsive table-bordered border-dark caption-top">
                <thead>
                  <tr>
                    <th>
                      <h6>NO</h6>
                    </th>
                    <th>
                      <h6>NISN</h6>
                    </th>
                    <th>
                      <h6>Nama Siswa</h6>
                    </th>
                    <th>
                      <h6>Kelas</h6>
                    </th>
                    <th>
                      <h6>Tanggal</h6>
                    </th>
                    <th>
                      <h6>Bulan</h6>
                    </th>
                    <th>
                      <h6>Tahun</h6>
                    </th>
                    <th>
                      <h6>No Telepon</h6>
                    </th>
                    <th>
                      <h6>Laporan</h6>
                    </th>
                  </tr>
                  <!-- end table row-->
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php if ($this->session->userdata('level') == "kepsek") : ?>
                    <!-- For Kepsek -->
                    <?php foreach ($pembKepsek as $p) : ?>
                      <tr>
                        <td>
                          <p><?= $no; ?></p>
                        </td>
                        <td>
                          <p><?= $p['nisn']; ?></p>
                        </td>
                        <td>
                          <p><?= $p['nama']; ?></p>
                        </td>
                        <td>
                          <p><?= $p['nama_kelas']; ?></p>
                        </td>
                        <td>
                          <p><?= $p['tgl_bayar']; ?></p>
                        </td>
                        <td>
                          <p><?= $p['bulan_bayar']; ?></p>
                        </td>
                        <td>
                          <p><?= $p['tahun_bayar']; ?></p>
                        </td>
                        <td>
                          <p><?= $p['no_telp']; ?></p>
                        </td>
                        <td>
                          <p><?= $p['jumlah_bayar']; ?></p>
                        </td>
                      </tr>
                      <?php $no++; ?>
                    <?php endforeach; ?>
                  <?php else : ?>
                    <!-- For Petugas -->
                    <?php foreach ($pembayaran as $p) : ?>
                      <tr>
                        <td>
                          <p><?= $no; ?></p>
                        </td>
                        <td>
                          <p><?= $p['nisn']; ?></p>
                        </td>
                        <td>
                          <p><?= $p['nama']; ?></p>
                        </td>
                        <td>
                          <p><?= $p['nama_kelas']; ?></p>
                        </td>
                        <td>
                          <p><?= $p['tgl_bayar']; ?></p>
                        </td>
                        <td>
                          <p><?= $p['bulan_bayar']; ?></p>
                        </td>
                        <td>
                          <p><?= $p['tahun_bayar']; ?></p>
                        </td>
                        <td>
                          <p><?= $p['no_telp']; ?></p>
                        </td>
                        <td>
                          <p><?= $p['jumlah_bayar']; ?></p>
                        </td>
                      </tr>
                      <?php $no++; ?>
                    <?php endforeach; ?>
                  <?php endif; ?>
                  <!-- end table row -->
                </tbody>
              </table>
            <?php endif; ?>
          </div>
          <!-- end card -->
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- ========== tables-wrapper end ========== -->
    </div>
    <!-- end container -->
  </section>
  <!-- ========== table components end ========== -->
  <!-- ======== main-wrapper end =========== -->

  <!-- ========= All Javascript files linkup ======== -->
  <script>
    window.print();
  </script>
  <script src="<?= base_url('assets/') ?>js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/Chart.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/dynamic-pie-chart.js"></script>
  <script src="<?= base_url('assets/') ?>js/moment.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/fullcalendar.js"></script>
  <script src="<?= base_url('assets/') ?>js/jvectormap.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/world-merc.js"></script>
  <script src="<?= base_url('assets/') ?>js/polyfill.js"></script>
  <script src="<?= base_url('assets/') ?>js/main.js"></script>
</body>

</html>