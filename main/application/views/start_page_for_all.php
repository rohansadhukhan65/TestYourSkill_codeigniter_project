
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>start</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
    <script type="text/javascript" src="<?php echo base_url();?>js/index.js"></script>
</head>
<script>
    //this is written so that back button of browser could not work, this work only when we go to another page or link from this page
    window.history.forward();
    function noback() {
        window.history.forward();
    }
</script>
<body style="background-image: url('<?php echo base_url(); ?>image/start.jpg');background-size:cover;">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-warning">TestYourSkill</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="test">Home<span class="sr-only">(current)</span></a>
              </li>
          </ul>
        </div>
</nav>
<div class="container">
    
<div class="mt-5">
      <h3 class="text-center alert alert-info">Welcome To TestYourSkill</h3>
</div>       
<div class="card mt-5 border-warning" style="background-color: transparent;">
    <div class="row">
        <div class="col-lg-8 text-center mt-5">
            <h4>Total Number Of Question</h4> 

        </div>
        <div class="col-lg-2 text-center mt-5">
            <h4 class="text-start">10 Qs</h4>   
        </div>
    </div>
    <div class="row">
        <div class="col-lg-7 text-center">
            <h4>Total Exam Time</h4> 

        </div>
        <div class="col-lg-4 ml-2 text-center">
            <h4 class="text-start">10 mins</h4>   
        </div>
    </div>
    <div class="mb-3 mt-3">
    <a href="start_exam" class="text-decoration-none">
    <button type="button"  class="font-weight-bold text-warning btn btn-success m-auto d-block">Start Exam-></button>
    </a>
</div>
</div>
</div>
</div>


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
</body>
</html>