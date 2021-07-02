<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">

  <!-- Fontawsome CDN
  ======================== -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <!-- Fontawsome CDN End -->

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


  <!--//! ================ Home Navigation ================ -->
  <?php  $this->load->view('user/NavBars/nav.php'); ?>
  <!--//! ================ Home Navigation End ================ -->


 

  <!--//! ============== Main Body Of Home ================  -->
  <div class="row"  

    <div class="col-12 col-md-6 disapear">
      <!-- Image Carausel
      ============================== -->
      <div id="carouselExampleCaptions" class="carousel slide ml-5" data-ride="carousel">

        <div class="carousel-inner p-5 ml-3">
          <div class="carousel-item active mt-4">
            <img style="opacity: 0.5;" src="<?php echo base_url('image/userside/home.svg') ?>" height="450" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block mb-5 pb-5">
              <h5 style="font-size: 30px;" class="text-dark ">"keep distance study hard"</h5>
              <p class="text-primary mb-5 font-weight-bold"> corona virus cant stop us to aquire knowldge.</p>
            </div>
          </div>
          <div class="carousel-item active mt-4">
            <img style="opacity: 0.3;" src="<?php echo base_url('image/userside/socialdistance.svg') ?>" height="450" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
      <!-- Image Carausel End -->
    </div>

    <div class="col-12 col-md-6">
      <div class="mt-5 pt-5">
        <h1 class="my-5 pt-5 text-dark text-center font-weight-light">
          Welcome to <span class="font-weight-bold text-primary">TestYourSkill</span>
        </h1>
        <p class="text-center text-dark apear font-weight-bold">“Skills don’t die; only people do.”</p>
        <div class="mt-5 pt-3 text-center">
          <a href="<?php echo base_url('index.php/Online_exam/studentlog') ?>" class="btn shadow font-weight-light startbtn w-50 btn-success">
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

  <script>
    $('.carousel').carousel({
      interval: 1500
    })
  </script>

</body>

</html>