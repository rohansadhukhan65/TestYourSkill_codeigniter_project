<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>about</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
  <script type="text/javascript" src="<?php echo base_url(); ?>js/index.js"></script>


  <!-- Fontawsome CDN
  ======================== -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <!-- Fontawsome CDN End -->

  <style>
    .card {
      border-radius: 25px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      margin-top: 21px;
    }

    .about_image {
      border-radius: 50%;
      margin-top: -27px;
      margin-left: auto;
      margin-right: auto;
      padding: 2px;

      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);


      background: #FFFFFF;
      /* fallback for old browsers */
      /* background: -webkit-linear-gradient(to right, #8e44ad, #c0392b); */
      /* Chrome 10-25, Safari 5.1-6 */
      /* background: linear-gradient(to right, #8e44ad, #c0392b); */
      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }

    .about_social {
      margin-left: auto;
      margin-right: auto;

    }
  </style>

</head>

<body>


  <!--//! ================ Home Navigation ================ -->
  <?php $this->load->view('user/NavBars/nav.php'); ?>
  <!--//! ================ Home Navigation End ================ -->




  <div class="container-fluid">
    <h3 class="center text-primary text-center my-5">About</h3>

    <div class="row">
      <div class="col-lg-4">
        <div class="card-body">
          <h5 class="font-weight-light">In the time of technology we dont have the time to waste.In nowdays we all want to learn various things in short time and also want
            to check our skills.And if you want to check your skill then you are in the Right place.TestYourSkill gives you the opportunity to test
            your skill on various things Like general knowledge, aptitude, verbal & Reasoning, Java programming, c programming and php programming
            with free of cost.</h5>
          </h6>
        </div>
      </div>

      <div class="col-lg-4 ">
        <div class="card-body">
          <h5 class="font-weight-light">Testskill takes yours little time to check your skill in mcq formats.
            In all subject you will get 10 question and get 10 minutes for the exam.
            You also get a certificate after completing your test.
            The certificate will sent to your email after the exam.With free test here some paid test will be available also.
            It is not costly too Much.By paid a little amount you can grab the oppertunity to solve various kinds of
            previous commpetitive exam question papers also.very soon paid course will be added in this website.
          </h5>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="card-body">
          <h5 class="font-weight-light">In this website all the questions are set by the admin of ours.
            They update the questions in every Month.So that we can keep you updated with time.
            They all add new questions so that you have not to face the same questions everytime.
            You all have the opportunity to give exam in new question which will help all of you in develop your skills,
            so it is obviously very important for all of you.
            And all the topic is very essential for any kinds of commpetitive.So don't waste your valueable time, come on TestYourSkill website
            and check your skills today.</h5>
        </div>
      </div>
    </div>

    <div class=" container-fluid  my-5 ">
      <div class=" my-2">

        <!--//! Rohan
        ================================= -->
        <div class="">
          <!-- Details Card
          ========================== -->
          <div class="card my-5 bg-primary text-light text-center">
            <!-- Image
            ============= -->
            <div class="about_image">
              <img class="about_image" src="<?php echo base_url("image/Rohan.jpg"); ?>" height="130" width="130" alt="">
            </div>

            <!-- Info
            =============== -->
            <div class="about-info my-4">
              <div class="about_social my-3">
                <a class="mx-3 h3" style="text-decoration: none; color:#FFFFFF;" target="_blank" href="https://www.facebook.com/rohan.sadhukhan.2/"><i class="fab fa-facebook-f"></i></a>
                <a class="mx-3 h3" style="text-decoration: none; color:#FFFFFF;" target="_blank" href="https://www.instagram.com/call.rohan/"><i class="fab fa-instagram"></i></a>
                <a class="mx-3 h3" style="text-decoration: none; color:#FFFFFF;" target="_blank" href="https://www.linkedin.com/in/rohan-sadhukhan/"><i class="fab fa-linkedin-in"></i></a>
              </div>
              <h3 class="my-4 h2 font-weight-light">Rohan Sadhukhan</h3>
              <p class=" mb-5 display-5 font-weight-light"><i class="fas fa-envelope mr-2"></i> sadhukhanrohan15@gmail.com</p>
            </div>
          </div>
          <!-- Details Card End -->
        </div>
        <!-- Rohan End -->

      </div>
    </div>


    <!-- optional Javascript -->
    <!-- jquery first, then popper.js, then bootstrap Js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/x+965dzo0rt7abk41JstqiaqvgRvzpbzo5smxkp4yfRvh+8abtte1pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-whaiffRlMfy6i5sRaxvfocifbuqy1xhdJ/yoi7fRnxMRbu5whdzyu1ha6zoblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-b0uglyR+jn6ckvvicob2joaf5i4l3gm9gu6hc1og6Ls7i6u/mkkadukabhlaxv9k" crossorigin="anonymous"></script>
</body>

</html>