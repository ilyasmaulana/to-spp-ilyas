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

        <?= $this->session->flashdata('pembayaran_message'); ?>
      </div>
      <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->

    <div class="tables-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <div class="card-style mb-30">
            
            <div class="table-wrapper table-responsive">
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
                      <h6>No Telpon</h6>
                    </th>
                    <th>
                      <h6>SPP</h6>
                    </th>
                    <th>
                      <h6>Aksi</h6>
                    </th>
                  </tr>
                  <!-- end table row-->
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach ($siswa as $s) : ?>
                    <tr>
                      <td>
                        <p><?= $no; ?></p>
                      </td>
                      <td>
                        <p><?= $s['nisn']; ?></p>
                      </td>
                      <td>
                        <p><?= $s['nama']; ?></p>
                      </td>
                      <td>
                        <p><?= $s['nama_kelas']; ?></p>
                      </td>
                      <td>
                        <p><?= $s['no_telp']; ?></p>
                      </td>
                      <td>
                        <p><?= $s['nominal']; ?></p>
                      </td>
                      <td>
                        <div class="action">
                          <a href="<?= base_url('pembayaran/addPembayaran/').$s['nisn']; ?>" role="button" class="main-btn warning-btn text-dark rounded-md btn-hover my-3">BAYAR</a>
                        </div>
                      </td>
                    </tr>
                    <?php $no++; ?>
                  <?php endforeach; ?>
                  <!-- end table row -->
                </tbody>
              </table>
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