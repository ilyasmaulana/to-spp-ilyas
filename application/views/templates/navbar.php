<!-- ======== main-wrapper start =========== -->
<main class="main-wrapper">
  <!-- ========== header start ========== -->
  <header class="header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-5 col-md-5 col-6">
          <div class="header-left d-flex align-items-center">
            <div class="menu-toggle-btn mr-20">
              <button id="menu-toggle" class="main-btn primary-btn btn-hover">
                <i class="lni lni-chevron-left me-2"></i> Menu
              </button>
            </div>
          </div>
        </div>
        <div class="col-lg-7 col-md-7 col-6">
          <div class="header-right">
            <!-- profile start -->
            <div class="profile-box ml-15">
              <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="profile-info">
                  <div class="info">
                    <!-- tambahkan div baru untuk role -->
                    <div class="text-end">
                      <h6><?= $this->session->userdata('nama_petugas'); ?></h6>
                      <p class="text-muted"><?= $this->session->userdata('level'); ?></p>
                    </div>
                    <!-- end role -->
                    <div class="image">
                      <img src="<?= base_url('assets'); ?>/images/profile/profile-image.png" alt="" />
                      <span class="status"></span>
                    </div>
                  </div>
                </div>
                <i class="lni lni-chevron-down"></i>
              </button>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                <li>
                  <a href="<?= base_url('auth/logout'); ?>"> <i class="lni lni-exit text-danger"></i> Logout </a>
                </li>
              </ul>
            </div>
            <!-- profile end -->
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- ========== header end ========== -->