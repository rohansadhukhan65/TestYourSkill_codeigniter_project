<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
  <style>
    .main {
      position: relative;
      top: 5%;
      left: 14%;

    }

    .startbtn {
      border-radius: 25px;
      font-size: larger;
    }

    .centerimg {
      display: block;
      margin-left: auto;
      margin-right: auto;

      filter: drop-shadow(10px 14px 24px rgba(0, 0, 0, 0.466));

    }

    
  </style>
</head>

<body>
  <!-- style="background-image: url('<?php echo base_url(); ?>image/home3.jpg');background-size:cover;" -->


  <!--//! ================ Home Navigation ================ -->
  <nav class="navbar navbar-expand-lg shadow navbar-dark bg-primary">

    <a class="navbar-brand text-light font-weight-bold">TestYourSkill</a>

    <!-- Login button
    ======================== -->
    <div class="apear ml-auto mr-2">
      <a href="studentlog" class="btn px-4 text-primary btn-light">Login</a>
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
          <a class="nav-link" href="index">Home<span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="about">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="feedback">Feedback</a>
        </li>
      </ul>
    </div>
    <!-- Collapsable nav in mobile End -->

    <!-- Login button
    ======================== -->
    <div class="disapear">
      <a href="studentlog" class="btn px-4 text-primary btn-light">Login</a>
    </div>
    <!-- Login button end -->

  </nav>
  <!--//! ================ Home Navigation End ================ -->




  <!--//! ============== Main Body Of Home ================  -->
  <div class="row">
    <div class="col-12 col-md-6 disapear">
      <img class="centerimg mt-5" src="<?php echo base_url('image/userside/home.svg') ?>" height="500" alt="">
    </div>
    <div class="col-12 col-md-6">
      <div class="mt-5 pt-5">
        <h1 class="my-5 pt-5 text-primary text-center font-weight-light">
          Welcome to <span class="font-weight-bold">TestYourSkill</span>
        </h1>
        <p class="text-center text-primary">“Skills don’t die; only people do.”</p>
        <div class="mt-5 pt-3 text-center">
          <a href="studentlog" class="btn shadow font-weight-light startbtn w-50 btn-success">
            Get Started
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--//! ================ Main Body Of Home End ================ -->







  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>