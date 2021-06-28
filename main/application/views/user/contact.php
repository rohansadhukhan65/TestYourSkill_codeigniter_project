<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">



  <!-- Fontawsome CDN
  ======================== -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <!-- Fontawsome CDN End -->

  <style>
    .contact_heading {
      font-size: 20px;
      font-weight: lighter !important;
    }

    .form-control {
      height: 30px;
      color: #007bff !important;
      border-radius: 10px !important;
    }
  </style>
</head>

<body>




  <!--//! ================ Home Navigation ================ -->
  <?php $this->load->view('user/nav.php'); ?>
  <!--//! ================ Home Navigation End ================ -->





  <div class="container my-3">
    <?php
    if (!empty($msg)) {
    ?>
      <div class="text-center alert alert-success alert-dismissible fade show mt-2" role="alert">
        <strong>😊</strong> <?php echo $msg; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php
    }
    ?>
    <h3 class="center h2 text-primary text-center my-4">Contact Us</h3>
    <div class="row">
      <div class="col-sm-4 offset-sm-4">
        <form method="POST" action="contact" class="text-primary mb-5">

          <!-- Student Name
          ===================== -->
          <div class="form-group">
            <h3 class="mx-1 contact_heading">Student Name</h3>
            <input type="text" name="student_name" class="form-control" id="addstudent" required autocomplete="off" aria-describedby="emailHelp">
          </div>
          <!-- Student Name End -->

          <!-- Email
          ===================== -->
          <div class="form-group">
            <h3 class="mx-1 contact_heading">Email</h3>
            <input type="email" name="email" class="form-control" id="addemail" autocomplete="off" required aria-describedby="emailHelp">
          </div>
          <!-- Email End -->

          <!-- Phone
          ====================== -->
          <div class="form-group">
            <h3 class="mx-1 contact_heading">Phone</h3>
            <input type="tel" name="phone" class="form-control" id="addphone" autocomplete="off" required aria-describedby="emailHelp">
          </div>
          <!-- Phone End -->

          <!-- query Input
          ========================= -->
          <div class="form-group">
            <h3 class="mx-1 contact_heading">How may i help you?</h3>
            <textarea class="form-control" name="query" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <!-- query Input -->


          <input style="border-radius: 10px !important; " type="submit" id="" value="Submit" name="submit" class="float-right p-1 btn btn-primary w-50">


        </form>
      </div>




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