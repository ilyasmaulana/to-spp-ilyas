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

        <?= $this->session->flashdata('kelas_message'); ?>
      </div>
      <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->

    <div class="tables-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <div class="card-style mb-30">
            <a href="<?= base_url('kelas/addKelas') ?>" class="main-btn primary-btn rounded-md btn-hover my-3">Tambah Data Kelas</a>
            <div class="table-wrapper table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>
                      <h6>NO</h6>
                    </th>
                    <th>
                      <h6>Nama Kelas</h6>
                    </th>
                    <th>
                      <h6>Jurusan</h6>
                    </th>
                    <th>
                      <h6>Aksi</h6>
                    </th>
                  </tr>
                  <!-- end table row-->
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach ($kelas as $k) : ?>
                    <tr>
                      <td>
                        <p><?= $no; ?></p>
                      </td>
                      <td>
                        <p><?= $k['nama_kelas']; ?></p>
                      </td>
                      <td>
                        <p><?= $k['kompetensi_keahlian']; ?></p>
                      </td>
                      <td>
                        <div class="action">
                          <a href="<?= base_url('kelas/updateKelas/') . $k['id_kelas']; ?>" class="text-primary mx-2">
                            <i class="lni lni-pencil-alt"></i>
                          </a>
                          <a href="<?= base_url('kelas/deleteKelas/') . $k['id_kelas']; ?>" class="text-danger mx-2" onclick="return confirm('Yakin ingin hapus data?')">
                            <i class="lni lni-trash-can"></i>
                          </a>
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