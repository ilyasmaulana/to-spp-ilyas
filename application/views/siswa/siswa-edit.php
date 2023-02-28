<!-- ========== section start ========== -->
<section class="section">
  <div class="container-fluid">
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
      <div class="row align-items-center">

        <div class="col-md-6 mb-3">
          <div class="titlemb-30">
            <h2><?= $title; ?></h2>
          </div>
        </div>

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
          <form method="post" action="<?= base_url('siswa/updateSiswa/') . $siswa['nisn']; ?>" class="card-style mb-30">
            <div class="row">
              <div class="col">
                <div class="input-style-1">
                  <label>NISN</label>
                  <input type="text" name="nisn" value="<?= $siswa['nisn']; ?>" readonly />
                </div>
                <div class="input-style-1">
                  <label>NIS</label>
                  <input type="text" name="nis" value="<?= $siswa['nis']; ?>" required />
                </div>
                <div class="input-style-1">
                  <label>Nama Siswa</label>
                  <input type="text" name="nama" value="<?= $siswa['nama']; ?>" required />
                </div>
                <div class="select-style-1">
                  <label>Kelas</label>
                  <div class="select-position">
                    <select name="id_kelas">
                      <option value="">Pilih Kelas</option>
                      <?php foreach ($kelas as $k) : ?>
                        <?php if ($siswa['id_kelas'] == $k['id_kelas']) : ?>
                          <option value="<?= $k['id_kelas']; ?> " selected><?= $k['nama_kelas']; ?></option>
                        <?php endif; ?>
                        <option value="<?= $k['id_kelas']; ?>"><?= $k['nama_kelas']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="input-style-1">
                  <label>Alamat</label>
                  <input type="text" name="alamat" value="<?= $siswa['alamat']; ?>" required />
                </div>
                <div class="input-style-1">
                  <label>No Telepon</label>
                  <input type="text" name="no_telp" value="<?= $siswa['no_telp']; ?>" required />
                </div>
                <div class="select-style-1">
                  <label>Tahun Masuk</label>
                  <div class="select-position">
                    <select name="id_spp">
                      <option value="">Pilih Tahun</option>
                      <?php foreach ($spp as $s) : ?>
                        <?php if ($siswa['id_spp'] == $s['id_spp']) : ?>
                          <option value="<?= $s['id_spp']; ?>" selected><?= $s['tahun']; ?></option>
                        <?php endif; ?>
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