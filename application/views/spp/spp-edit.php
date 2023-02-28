<!-- ========== section start ========== -->
<section class="section">
  <div class="container-fluid">
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
      <div class="row align-items-center">

        <!-- Start Content -->
        <div class="col-md-6">
          <div class="titlemb-30">
            <h2><?= $title; ?></h2>
          </div>

        </div>
        <!-- End Content -->


        <!-- end col -->
        <div class="col-md-6">
          <div class="breadcrumb-wrapper mb-30">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#0">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Page
                </li>
              </ol>
            </nav>
          </div>
        </div>
        <!-- end col -->
      </div>
      <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->

    <div class="row">
      <div class="col-lg-8">
        <div class="table-wrapper table-responsive">
          <form method="post" action="<?= base_url('spp/updateSpp/') . $spp['id_spp']; ?>" class="card-style mb-30">
            <input type="hidden" name="id_spp" value="<?= $spp['id_spp']; ?>">
            <div class="input-style-1">
              <label>Tahun</label>
              <input type="text" name="tahun" value="<?= $spp['tahun']; ?>" required />
            </div>
            <div class="input-style-1">
              <label>Nominal</label>
              <input type="text" name="nominal" value="<?= $spp['nominal']; ?>" required />
            </div>
            <button type="submit" class="main-btn primary-btn rounded-md btn-hover my-3">Save change</button>
            <a href="<?= base_url('spp'); ?>" role="button" class="main-btn danger-btn rounded-md btn-hover my-3">Cancel</a>
          </form>
        </div>
      </div>
    </div>

  </div>
  <!-- end container -->
</section>
<!-- ========== section end ========== -->