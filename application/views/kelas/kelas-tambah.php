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
        <!-- error message -->
        <?php if (validation_errors() == true) : ?>
          <div class="alert-box danger-alert">
            <div class="alert">
              <p class="text-danger">
                <?= validation_errors(); ?>
              </p>
            </div>
          </div>
        <?php endif; ?>
      </div>
      <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->

    <div class="row">
      <div class="col-lg-12">
        <div class="table-wrapper table-responsive">
          <form method="post" action="<?= base_url('kelas/addKelas'); ?>" class="card-style mb-30">
            <div class="input-style-1">
              <label>Nama Kelas</label>
              <input type="text" name="nama_kelas" required />
            </div>
            <div class="input-style-1">
              <label>Jurusan</label>
              <input type="text" name="kompetensi_keahlian" required />
            </div>
            <button type="submit" class="main-btn primary-btn rounded-md btn-hover my-3">Save change</button>
            <a href="<?= base_url('kelas'); ?>" role="button" class="main-btn danger-btn rounded-md btn-hover my-3">Cancel</a>
          </form>
        </div>
      </div>
    </div>

  </div>
  <!-- end container -->
</section>
<!-- ========== section end ========== -->