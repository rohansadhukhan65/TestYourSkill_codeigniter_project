<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>start</title>


    <!-- Bootstrap CSS
    ========================== -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">


    <!-- Fontawsome CDN
    ======================== -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- Fontawsome CDN End -->



</head>
<script>
    //this is written so that back button of browser could not work, this work only when we go to another page or link from this page
    window.history.forward();

    function noback() {
        window.history.forward();
    }
</script>

<body>

    <!-- Nav -->
    <?php $this->load->view('user/NavBars/navAlogin'); ?>
    <!-- Nav End -->



    <div class="container">

        <div class="mt-5 pt-5">
            <h3 class="text-center text-primary font-weight-light">Topic : <span class="font-weight-bold"> <?php echo $_REQUEST['topic'] ?></span> </h3>
        </div>



        <div class=" mt-5 ">
            <div class="row">
                <div class="col-lg-8 text-center mt-5">
                    <h4 class="text-warning">Total Number Of Question</h4>

                </div>
                <div class="col-lg-2 text-center mt-5">
                    <h4 class="text-start text-warning"><?php echo $_SESSION['q_count']?> Qs</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 text-center">
                    <h4 class="text-danger">Total Exam Time</h4>

                </div>
                <div class="col-lg-4 ml-2 text-center">
                    <h4 class="text-start text-danger">10 mins</h4>
                </div>
            </div>
            <div class="mb-3 mt-5 pt-5">
                <a href="start_exam" class="text-decoration-none">
                    <button style="border: none; outline:none; border-radius:15px;" type="button" class="shadow font-weight-light text-light btn-lg btn-success m-auto d-block">Start Exam <i class="fas fa-arrow-circle-right"></i> </button>
                </a>
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