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
        <?= $this->session->flashdata('petugas_message'); ?>
      </div>
      <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->

    <div class="tables-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <div class="card-style mb-30">
            <a href="<?= base_url('petugas/addPetugas') ?>" class="main-btn primary-btn rounded-md btn-hover my-3">Tambah Data Petugas</a>
            <div class="table-wrapper table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>
                      <h6>NO</h6>
                    </th>
                    <th>
                      <h6>Username</h6>
                    </th>
                    <th>
                      <h6>Nama Petugas</h6>
                    </th>
                    <th>
                      <h6>Level</h6>
                    </th>
                    <th>
                      <h6>Aktif</h6>
                    </th>
                    <th>
                      <h6>Aksi</h6>
                    </th>
                  </tr>
                  <!-- end table row-->
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach ($petugas as $p) : ?>
                    <tr>
                      <td>
                        <p><?= $no; ?></p>
                      </td>
                      <td>
                        <p><?= $p['username']; ?></p>
                      </td>
                      <td>
                        <p><?= $p['nama_petugas']; ?></p>
                      </td>
                      <td>
                        <p><?= $p['level']; ?></p>
                      </td>
                      <td>
                        <div class="form-check form-switch toggle-switch">
                          <?php if ($p['is_active'] == "Y") : ?>
                            <a href="<?= base_url('petugas/changeIsActive/') . $p['id_petugas']; ?>">
                              <input class="form-check-input" type="checkbox" id="toggleSwitch1" checked />
                            </a>
                          <?php else : ?>
                            <input class="form-check-input" type="checkbox" id="toggleSwitch1" />
                          <?php endif; ?>
                        </div>
                      </td>
                      <td>
                        <div class="action">
                          <a href="<?= base_url('petugas/deletePetugas/') . $p['id_petugas']; ?>" class="text-danger mx-2" onclick="return confirm('Yakin ingin hapus data?')">
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