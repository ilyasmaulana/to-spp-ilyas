<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
  <title>Sign In | PlainAdmin Demo</title>

  <!-- ========== All CSS files linkup ========= -->
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/lineicons.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/materialdesignicons.min.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/fullcalendar.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/main6.css') ?>" />
</head>

<body>


  <!-- ========== signin-section start ========== -->
  <section class="signin-section">
    <div class="container-fluid">

      <div class="row justify-content-center mt-5">
        <div class="col-lg-4 col-md-6 col-sm-8">
          <div class="signin-wrapper mt-5 pt-4">
            <div class="form-wrapper">
              <h2 class="text-center my-3">Sign In</h2>
              <form action="<?= base_url('auth') ?>" method="post">
                <!-- pesan error -->
                <?= $this->session->flashdata('auth_message'); ?>
                <div class="row">
                  <div class="col-12">
                    <div class="input-style-1">
                      <label>Username</label>
                      <input type="text" name="username" placeholder="Username" required />
                    </div>
                  </div>
                  <!-- end col -->
                  <div class="col-12">
                    <div class="input-style-1">
                      <label>Password</label>
                      <input type="password" name="password" placeholder="Password" required />
                    </div>
                  </div>
                  <!-- end col -->
                  <div class="col-12">
                    <button type="submit" class="main-btn primary-btn btn-hover w-100 text-center ">
                      Sign In
                    </button>
                  </div>
                </div>
                <!-- end row -->
              </form>
            </div>
          </div>
        </div>
        <!-- end col -->
      </div>
      <!-- end row -->
    </div>
  </section>
  <!-- ========== signin-section end ========== -->

  <!-- ========= All Javascript files linkup ======== -->
  <script src="<?= base_url('assets/') ?>js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/Chart.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/dynamic-pie-chart.js"></script>
  <script src="<?= base_url('assets/') ?>js/moment.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/fullcalendar.js"></script>
  <script src="<?= base_url('assets/') ?>js/jvectormap.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/world-merc.js"></script>
  <script src="<?= base_url('assets/') ?>js/polyfill.js"></script>
  <script src="<?= base_url('assets/') ?>js/main.js"></script>
</body>

</html>