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
          <form method="post" action="<?= base_url('siswa/addSiswa'); ?>" class="card-style mb-30">
            <div class="row">
              <div class="col">
                <div class="input-style-1">
                  <label>NISN</label>
                  <input type="text" name="nisn" required />
                </div>
                <div class="input-style-1">
                  <label>NIS</label>
                  <input type="text" name="nis" required />
                </div>
                <div class="input-style-1">
                  <label>Nama Siswa</label>
                  <input type="text" name="nama" required />
                </div>
                <div class="select-style-1">
                  <label>Kelas</label>
                  <div class="select-position">
                    <select name="id_kelas">
                      <option value="">Pilih Kelas</option>
                      <?php foreach ($kelas as $k) : ?>
                        <option value="<?= $k['id_kelas']; ?>"><?= $k['nama_kelas']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="input-style-1">
                  <label>Alamat</label>
                  <input type="text" name="alamat" required />
                </div>
                <div class="input-style-1">
                  <label>No Telepon</label>
                  <input type="text" name="no_telp" required />
                </div>
                <div class="select-style-1">
                  <label>Tahun Masuk</label>
                  <div class="select-position">
                    <select name="id_spp">
                      <option value="">Pilih Tahun</option>
                      <?php foreach ($spp as $s) : ?>
                        <option value="<?= $s['id_spp']; ?>"><?= $s['tahun']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="main-btn primary-btn rounded-md btn-hover my-3">Save change</button>
            <a href="<?= base_url('siswa'); ?>" role="button" class="main-btn danger-btn rounded-md btn-hover my-3">Cancel</a>
          </form>
        </div>
      </div>
    </div>

  </div>
  <!-- end container -->
</section>
<!-- ========== section end ========== -->