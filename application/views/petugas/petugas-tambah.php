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
          <form method="post" action="<?= base_url('petugas/addPetugas'); ?>" class="card-style mb-30">
            <div class="row">
              <div class="col">
                <div class="input-style-1">
                  <label>Username</label>
                  <input type="text" name="username" required />
                </div>
                <div class="input-style-1">
                  <label>Password</label>
                  <input type="password" name="password" required />
                </div>
                <div class="input-style-1">
                  <label>Nama Petugas</label>
                  <input type="text" name="nama_petugas" required />
                </div>
              </div>
              <div class="col">
                <div class="select-style-1">
                  <label>Level</label>
                  <div class="select-position">
                    <select name="level">
                      <option value="">Pilih Level</option>
                      <option value="admin">Administrator</option>
                      <option value="petugas">Petugas</option>
                      <option value="kepsek">Kepala Sekolah</option>
                    </select>
                  </div>
                </div>
                <div class="select-style-1">
                  <label>Aktif ?</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="is_active" value="Y" id="1">
                    <label class="form-check-label" for="1">
                      Aktif
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="is_active" value="N" id="2">
                    <label class="form-check-label" for="2">
                      Tidak Aktif
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <button type="submit" class="main-btn primary-btn rounded-md btn-hover my-3">Save change</button>
            <a href="<?= base_url('petugas'); ?>" role="button" class="main-btn danger-btn rounded-md btn-hover my-3">Cancel</a>
          </form>
        </div>
      </div>
    </div>

  </div>
  <!-- end container -->
</section>
<!-- ========== section end ========== -->