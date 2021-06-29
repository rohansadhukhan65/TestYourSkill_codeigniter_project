<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sutedent Test</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">

  <!-- Fontawsome CDN
  ======================== -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <!-- Fontawsome CDN End -->


</head>
</script>

<body>

  <!-- Nav -->
  <?php $this->load->view('user/NavBars/navAlogin'); ?>
  <!-- Nav End -->


  <div class="container">
    <h1 class="center text-primary text-center mt-5 text-monospace font-weight-light ">AVAILABLE TEST</h1>




    <div class="row my-5">


      <!-- General Aptitude
      ============================== -->
      <div class="col-sm-4">
        <div class="card ml-auto mr-auto shadow my-3" style="width: 18rem; border-radius:14px;">
          <img style="border-radius: 14px 14px 0px 0px;" src="<?php echo base_url() ?>image/img1.png" class="card-img-top" height="173px" alt="...">
          <div class="card-body" id="box1">
            <h5 class="card-title text-center text-monospace font-weight-light">General Aptitude</h5>

            <!-- Simple Math -->
            <a data-toggle="collapse" href="#SimpleMath" role="button" aria-expanded="false" aria-controls="collapseExample" class="text-decoration-none text-light"><i class="mr-3 fa fa-arrow-circle-right"></i<i class="mr-3 fas fa-arrow-circle-right"></i>Simple Math</a><br>
            <div class="collapse" id="SimpleMath">
              <div style="border-radius: 25px;" class="card shadow my-2 card-body bg-primary">
                <a href="<?php echo base_url('index.php/Online_exam/start_button_page?topic=Problem Set1'); ?>" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Problem Set 1</a>
                <a href="<?php echo base_url('index.php/Online_exam/start_button_page?topic=Problem Set2'); ?>" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Problem Set 2</a>
                <a href="<?php echo base_url('index.php/Online_exam/start_button_page?topic=Problem Set3'); ?>" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Problem Set 3</a>
              </div>
            </div>
            <!-- Simple Math End -->

            <!-- Arithematic Aptitude -->
            <a data-toggle="collapse" href="#arithematic_aptitude" role="button" aria-expanded="false" aria-controls="collapseExample" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Arithematic Aptitude</a><br>
            <div class="collapse" id="arithematic_aptitude">
              <div style="border-radius: 25px;" class="card shadow my-2 card-body bg-primary">
                <a href="<?php echo base_url('index.php/Online_exam/start_button_page?topic=Time and Distance'); ?>" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Time and Distance</a>
                <a href="<?php echo base_url('index.php/Online_exam/start_button_page?topic=Time and Work'); ?>" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Time and Work</a>
                <a href="<?php echo base_url('index.php/Online_exam/start_button_page?topic=Problems on Ages'); ?>" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Problems on Ages</a>
              </div>
            </div>
            <!-- Arithematic Aptitude End -->

            <!-- Online Aptitude Test -->
            <a data-toggle="collapse" href="#online_aptitude" role="button" aria-expanded="false" aria-controls="collapseExample" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Online Aptitude Test</a><br>
            <div class="collapse" id="online_aptitude">
              <div style="border-radius: 25px;" class="card shadow my-2 card-body bg-primary">
                <a href="<?php echo base_url('index.php/Online_exam/start_button_page?topic=Problems on Trains'); ?>" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Problems on Trains</a>
                <a href="<?php echo base_url('index.php/Online_exam/start_button_page?topic=Height and Distance'); ?>" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Height and Distance</a>
                <a href="<?php echo base_url('index.php/Online_exam/start_button_page?topic=Simple Interest'); ?>" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Simple Interest</a>
              </div>
            </div>
            <!-- Online Aptitude Test End -->

          </div>
        </div>
      </div>
      <!-- General Aptitude End -->



      <!-- Verbal & Reasoning
      ============================== -->
      <div class="col-sm-4">
        <div class="card ml-auto mr-auto shadow my-3" style="width: 18rem; border-radius:14px;">
          <img style="border-radius: 14px 14px 0px 0px;" src="<?php echo base_url() ?>image/verbal-reasoning-x2.png" class="card-img-top" height="173px" alt="...">
          <div class="card-body" id="box2">
            <h5 class="card-title text-center text-monospace font-weight-light">Verbal & Reasoning</h5>
            

            <!-- Verbal Ability -->
            <a data-toggle="collapse" href="#verbal_ability" role="button" aria-expanded="false" aria-controls="collapseExample" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Verbal Ability</a><br>
            <div class="collapse" id="verbal_ability">
                <div style="border-radius: 25px;" class="card shadow my-2 card-body bg-primary">
                  <a href="<?php echo base_url('index.php/Online_exam/start_button_page?topic=Spotting Errors'); ?>" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Spotting Errors</a>
                  <a href="<?php echo base_url('index.php/Online_exam/start_button_page?topic=Antonyms'); ?>" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Antonyms</a>
                  <a href="<?php echo base_url('index.php/Online_exam/start_button_page?topic=Spelling'); ?>" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Spelling</a>
                </div>
            </div>
            <!-- Verbal Ability eND -->


            <!-- Logical Reasoning -->
            <a data-toggle="collapse" href="#logical_reasoning" role="button" aria-expanded="false" aria-controls="collapseExample" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Logical Reasoning</a><br>
            <div class="collapse" id="logical_reasoning">
                <div style="border-radius: 25px;" class="card shadow my-2 card-body bg-primary">
                  <a href="<?php echo base_url('index.php/Online_exam/start_button_page?topic=Number Series'); ?>" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Number Series</a>
                  <a href="<?php echo base_url('index.php/Online_exam/start_button_page?topic=Verbal Classification'); ?>" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Verbal Classification</a>
                  <a href="<?php echo base_url('index.php/Online_exam/start_button_page?topic=Logical Games'); ?>" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Logical Games</a>
                </div>
            </div>
            <!-- Logical Reasoning End -->

            
            <!-- Non Verbal Reasoning -->
            <a data-toggle="collapse" href="#non_verbal_reasoning" role="button" aria-expanded="false" aria-controls="collapseExample" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Non Verbal Reasoning</a><br>
            <div class="collapse" id="non_verbal_reasoning">
                <div style="border-radius: 25px;" class="card shadow my-2 card-body bg-primary">
                  <a href="<?php echo base_url('index.php/Online_exam/start_button_page?topic=Series'); ?>" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Series</a>
                  <a href="<?php echo base_url('index.php/Online_exam/start_button_page?topic=History'); ?>" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>History</a>
                  <a href="<?php echo base_url('index.php/Online_exam/start_button_page?topic=Biology'); ?>" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Biology</a>
                </div>
            </div>
            <!-- Non Verbal Reasoning End -->
         
         
          </div>
        </div>
      </div>
      <!-- Verbal & Reasoning End -->




      <!-- Current Affairs & GK
      ============================== -->
      <div class="col-sm-4">
        <div class="card ml-auto mr-auto shadow my-3" style="width: 18rem; border-radius:14px;">
          <img style="border-radius: 14px 14px 0px 0px;" src="<?php echo base_url() ?>image/current.jpg" class="card-img-top" height="173px" alt="...">
          <div class="card-body" id="box3">
            <h5 class="card-title text-center text-monospace font-weight-light">Current Affairs & GK</h5>
           

            <!-- Basic General Knowledge -->
            <a data-toggle="collapse" href="#basic_general_knowledge" role="button" aria-expanded="false" aria-controls="collapseExample" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Basic General Knowledge</a><br>
            <div class="collapse" id="basic_general_knowledge">
                <div style="border-radius: 25px;" class="card shadow my-2 card-body bg-primary">
                  <a href="<?php echo base_url('index.php/Online_exam/start_button_page?topic=Countries and Sports'); ?>" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Countries and Sports</a>
                  <a href="<?php echo base_url('index.php/Online_exam/start_button_page?topic=Neighbouring Country'); ?>" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Neighbouring Country</a>
                  <a href="<?php echo base_url('index.php/Online_exam/start_button_page?topic=Capital and Currencies'); ?>" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Capital and Currencies</a>
                </div>
            </div>
            <!-- Basic General Knowledge End -->


            <!-- General Science -->
            <a data-toggle="collapse" href="#general_science" role="button" aria-expanded="false" aria-controls="collapseExample" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>General Science</a><br>
            <div class="collapse" id="general_science">
                <div style="border-radius: 25px;" class="card shadow my-2 card-body bg-primary">
                  <a href="<?php echo base_url('index.php/Online_exam/start_button_page?topic=Physics'); ?>" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Physics</a>
                  <a href="<?php echo base_url('index.php/Online_exam/start_button_page?topic=Chemistry'); ?>" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Chemistry</a>
                  <a href="<?php echo base_url('index.php/Online_exam/start_button_page?topic=Computer'); ?>" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Computer</a>
                </div>
            </div>
            <!-- General Science End -->


            <!-- Current Affairs -->
            <a data-toggle="collapse" href="#current_affairs" role="button" aria-expanded="false" aria-controls="collapseExample" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Current Affairs</a><br>
            <div class="collapse" id="current_affairs">
                <div style="border-radius: 25px;" class="card shadow my-2 card-body bg-primary">
                  <a href="<?php echo base_url('index.php/Online_exam/start_button_page?topic=Current Affairs 2019'); ?>" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Current Affairs 2019</a>
                  <a href="<?php echo base_url('index.php/Online_exam/start_button_page?topic=Current Affairs 2020'); ?>" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Current Affairs 2020</a>
                  <a href="<?php echo base_url('index.php/Online_exam/start_button_page?topic=Current Affairs 2021'); ?>" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Current Affairs 2021</a>
                </div>
            </div>
            <!-- Current Affairs End -->




          </div>
        </div>
      </div>
      <!-- Current Affairs & GK -->


      <!-- Java Programming
      ============================= -->
      <div class="col-sm-4">
        <div class="card ml-auto mr-auto shadow my-3" style="width: 18rem; border-radius:14px;">
          <img style="border-radius: 14px 14px 0px 0px;" src="<?php echo base_url() ?>image/java.jpg" class="card-img-top" height="173px" alt="...">
          <div class="card-body" id="box4">
            <h5 class="card-title text-center text-monospace font-weight-light">Java Programming</h5>
            <a href="start_button_page?topic=Java Mcq Test1" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Java MCQ Test1</a><br>
            <a href="start_button_page?topic=Java Mcq Test2" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Java MCQ Test2</a><br>
            <a href="start_button_page?topic=Java Mcq Test3" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>Java MCQ Test3</a><br>
          </div>
        </div>
      </div>
      <!-- Java Programming End -->


      <!-- C Programming
      ============================== -->
      <div class="col-sm-4">
        <div class="card ml-auto mr-auto shadow my-3" style="width: 18rem; border-radius:14px;">
          <img style="border-radius: 14px 14px 0px 0px;" src="<?php echo base_url() ?>image/c.png" class="card-img-top" height="173px" alt="...">
          <div class="card-body" id="box5">
            <h5 class="card-title text-center text-monospace font-weight-light">C Programming</h5>
            <a href="start_button_page?topic=C Mcq Test1" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>C MCQ Test1</a><br>
            <a href="start_button_page?topic=C Mcq Test2" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>C MCQ Test2</a><br>
            <a href="start_button_page?topic=C Mcq Test3" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>C MCQ Test3</a><br>
          </div>
        </div>
      </div>
      <!-- C Programming End -->


      <!-- PHP Programming
      ============================== -->
      <div class="col-sm-4">
        <div class="card ml-auto mr-auto shadow my-3" style="width: 18rem; border-radius:14px;">
          <img style="border-radius: 14px 14px 0px 0px;" src="<?php echo base_url() ?>image/php.jfif" class="card-img-top" height="173px" alt="...">
          <div class="card-body" id="box6">
            <h5 class="card-title text-center text-monospace font-weight-light">PHP Programming</h5>
            <a href="start_button_page?topic=Php Mcq Test1" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>PHP MCQ Test1</a><br>
            <a href="start_button_page?topic=Php Mcq Test2" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>PHP MCQ Test2</a><br>
            <a href="start_button_page?topic=Php Mcq Test3" class="text-decoration-none text-light"><i class="mr-3 fas fa-arrow-circle-right"></i>PHP MCQ Test3</a><br>
          </div>
        </div>
      </div>
      <!-- PHP Programming End -->


    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>