  <!--//! ================ Home Navigation ================ -->
  <nav class="navbar navbar-expand-lg shadow navbar-dark bg-primary">

      <a class="navbar-brand text-light font-weight-bold">TestYourSkill</a>

      <!-- Login button
    ======================== -->
      <div class="apear ml-auto mr-2">
          <a href="<?php echo base_url('index.php/Online_exam/studentlog') ?>" class="btn px-4 text-primary btn-light">Login</a>
      </div>
      <!-- Login button end -->

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Collapsable nav in mobile
    ====================================== -->
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto ml-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                  <a class="nav-link" href="<?php echo base_url() ?>"><i class="fas h5 fa-home"></i> Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link" href="<?php echo base_url('index.php/Online_exam/contact') ?>">Contact Us</a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link" href="<?php echo base_url('index.php/Online_exam/about') ?>">About Us</a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link" href="<?php echo base_url('index.php/Online_exam/feedback') ?>"> Feedback</a>
              </li>
          </ul>
      </div>
      <!-- Collapsable nav in mobile End -->

      <!-- Login button
    ======================== -->
      <div class="disapear">
          <a href="<?php echo base_url('index.php/Online_exam/studentlog') ?>" class="btn px-4 text-primary btn-light">Login</a>
      </div>
      <!-- Login button end -->

  </nav>
  <!--//! ================ Home Navigation End ================ -->