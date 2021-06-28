<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
  <script type="text/javascript" src="<?php echo base_url(); ?>js/index.js"></script>


  <!-- Fontawsome CDN
  ======================== -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <!-- Fontawsome CDN End -->


</head>

<body style="background-image: url('<?php echo base_url(); ?>image/start.jpg');background-size:cover;">

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
        <li class="nav-item ">
          <a class="nav-link" href="<?php echo base_url() ?>"><i class="fas h5 fa-home"></i> Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('index.php/Online_exam/contact') ?>"> Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('index.php/Online_exam/about') ?>"> About Us</a>
        </li>
        <li class="nav-item  active">
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




  <div class="container my-3">
    <?php
    if (isset($_SESSION['msg'])) {
    ?>
      <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
        <strong>Thank you 🤗</strong> <?php echo $_SESSION['msg']; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php
    }
    ?>
    <h3 class="center text-info text-center mt-5 alert alert-warning">Give Feedback</h3>
    <div class="row">
      <div class="col-sm-6 offset-3">
        <form onsubmit="return feed(event)" method="POST">
          <h3 class="mx-1 contact_heading">Name</h3>
          <div class="form-group">
            <input type="text" name="student_name" class="form-control" id="student_name_feed" required autocomplete="off" aria-describedby="emailHelp">
          </div>

          <div id="stu_error" class="text-danger"></div>


          <h3 class="mx-1">Email</h3>
          <div class="form-group">
            <input type="email" name="email" class="form-control" id="addemail" autocomplete="off" required aria-describedby="emailHelp">
          </div>

          <div id="email_errro" class="text-danger"></div>


          <h3 class="mx-1">Share your experience</h3>
          <div class="form-group">
            <textarea class="form-control" name="experience" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <div id="issuebk_errro" class="text-danger"></div>

          <div class="row text-center">
            <div class="col">
              <input type="submit" id="addbtn3" name="submit" value="Submit" class="mt-3 mb-3">
            </div>
            <div class="col">
              <a href="home" class="text-center btn btn-warning rounded mt-3 mb-3">Cancel</a>
            </div>
          </div>
          <!--this is for error showing if any occcur-->
          <div id="adderror" class="mt-2 text-danger"></div>
        </form>
      </div>
    </div>
  </div>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>