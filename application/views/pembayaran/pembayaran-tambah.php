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

      </div>
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
    <!-- ========== title-wrapper end ========== -->

    <div class="row">
      <div class="col-lg-12">
        <div class="table-wrapper table-responsive">
          <form method="post" action="<?= base_url('pembayaran/addPembayaran/') . $siswa['nisn']; ?>" class="card-style mb-30">
          <input type="hidden" name="id_petugas" value="<?= $this->session->userdata('id_petugas'); ?>">
          <input type="hidden" name="id_kelas" value="<?= $siswa['id_kelas']; ?>">
          <input type="hidden" name="id_spp" value="<?= $siswa['id_spp']; ?>">
            <div class="row">
              <div class="col">
                <div class="input-style-1">
                  <label>NISN</label>
                  <input type="text" name="nisn" value="<?= $siswa['nisn']; ?>" required />
                </div>
                <div class="input-style-1">
                  <label>Nama Siswa</label>
                  <input type="text" name="nama" value="<?= $siswa['nama']; ?>" required />
                </div>
                <div class="input-style-1">
                  <label>Nominal</label>
                  <input type="text" name="nominal" value="<?= $siswa['nominal']; ?>" required />
                </div>
              </div>
              <div class="col">
                <div class="select-style-1">
                  <label>Bulan bayar</label>
                  <div class="select-position">
                    <select name="bulan">
                      <option value="">Pilih Bulan</option>
                      <option value="1">Januari</option>
                      <option value="2">Februari</option>
                      <option value="3">Maret</option>
                      <option value="4">April</option>
                      <option value="5">Mei</option>
                      <option value="6">Juni</option>
                      <option value="7">Juli</option>
                      <option value="8">Agustus</option>
                      <option value="9">September</option>
                      <option value="10">Oktober</option>
                      <option value="11">November</option>
                      <option value="12">Desember</option>
                    </select>
                  </div>
                </div>
                <div class="select-style-1">
                  <label>Tahun bayar</label>
                  <div class="select-position">
                    <select name="tahun">
                      <?php $year_now = mdate('%Y', time()); ?>
                      <option value="">Pilih Tahun</option>
                      <?php for ($i = $year_now; $i >= ($year_now - 5); $i--) :  ?>
                        <option value="<?= $i; ?>"><?= $i; ?></option>
                      <?php endfor; ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="main-btn primary-btn rounded-md btn-hover my-3">Save change</button>
            <a href="<?= base_url('pembayaran'); ?>" role="button" class="main-btn danger-btn rounded-md btn-hover my-3">Cancel</a>
          </form>
        </div>
      </div>
    </div>

  </div>
  <!-- end container -->
</section>
<!-- ========== section end ========== -->