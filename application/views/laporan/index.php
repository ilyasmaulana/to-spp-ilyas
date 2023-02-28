<!-- ========== section start ========== -->
<section class="section">
  <div class="container-fluid">
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
      <div class="row align-items-center">

        <!-- Start Content -->
        <div class="col-md-6">
          <div class="titlemb-30 mb-3">
            <h2><?= $title; ?></h2>
          </div>

        </div>
        <!-- End Content -->

        <?= $this->session->flashdata('laporan_message'); ?>
      </div>
      <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->

    <div class="tables-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <div class="card-style mb-30">
            <div class="table-wrapper table-responsive">

              <a href="<?= base_url('laporan/cetak'); ?>" target="_blank" role="button" class="main-btn primary-btn rounded-md btn-hover mb-2"><i class="lni lni-printer"></i> Cetak</a>
              <a href="<?= base_url('laporan/cetakBulan'); ?>" target="_blank" role="button" class="main-btn warning-btn text-dark rounded-md btn-hover mb-2"><i class="lni lni-printer"></i> Cetak Bulan ini</a>
              <a href="<?= base_url('laporan/cetakTahun'); ?>" target="_blank" role="button" class="main-btn secondary-btn rounded-md btn-hover mb-2"><i class="lni lni-printer"></i> Cetak Tahun ini</a>

              <?php if (empty($pembayaran or $pembKepsek)) : ?>
                <h1 class="my-3 text-center">Data belum ada</h1>
              <?php else : ?>
                <table class="table">
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
              <!-- end table -->
            </div>
          </div>
          <!-- end card -->
        </div>
        <!-- end col -->
      </div>
    </div>
  </div>
  <!-- end container -->
</section>
<!-- ========== section end ========== -->