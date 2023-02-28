<!-- ========== section start ========== -->
<section class="section">
  <div class="container-fluid">
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
      <div class="row align-items-center">

        <!-- Start Content -->
        <div class="col-md-6 mb-3">
          <div class="titlemb-30">
            <h2><?= $title; ?></h2>
          </div>
        </div>
        <!-- End Content -->

        <?= $this->session->flashdata('siswa_message'); ?>
      </div>
      <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->
    <div class="row">
      <!-- end col -->
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
        <div class="card-style-3 mb-30">
          <div class="card-content">
            <h3 class="mb-2"><?= $siswa['nama']; ?></h3>
            <div class="row">
              <div class="col">
                <div class="my-2">
                  <h5> NISN </h5>
                  <p><?= $siswa['nisn']; ?></p>
                </div>
                <div class="my-2">
                  <h5> NIS </h5>
                  <p><?= $siswa['nis']; ?></p>
                </div>
                <div class="my-2">
                  <h5> Kelas </h5>
                  <p><?= $siswa['nama_kelas']; ?></p>
                </div>
              </div>
              <div class="col">
                <div class="my-2">
                  <h5> Alamat </h5>
                  <p><?= $siswa['alamat']; ?></p>
                </div>
                <div class="my-2">
                  <h5> No Telepon </h5>
                  <p><?= $siswa['no_telp']; ?></p>
                </div>
                <div class="my-2">
                  <h5> SPP </h5>
                  <p><?= $siswa['nominal']; ?></p>
                </div>
              </div>
            </div>
            <a href="<?= base_url('siswa'); ?>" role="button" class="main-btn danger-btn rounded-md btn-hover my-3">Cancel</a>
          </div>
        </div>
      </div>
      <!-- end col -->
    </div>
  </div>
  <!-- end container -->
</section>
<!-- ========== section end ========== -->