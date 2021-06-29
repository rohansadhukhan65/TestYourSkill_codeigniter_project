<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>


    <!-- Bootstrap CSS
    ================================== -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/studentlogin.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">


    <!-- Fontawsome CDN
    ======================== -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- Fontawsome CDN End -->


    <style>
        .shadoww {
            box-shadow: 7px 2px 30px 18px rgba(0, 123, 255, 0.32);
            -webkit-box-shadow: 7px 2px 30px 18px rgba(0, 123, 255, 0.32);
            -moz-box-shadow: 7px 2px 30px 18px rgba(0, 123, 255, 0.32);
        }

        @media screen and (max-width: 768px) {
            .disapear {
                display: none;
            }

            body {
                background-color: #007bff;
            }
        }
    </style>

</head>

<body>

    <!--//! ================ Home Navigation ================ -->
    <?php $this->load->view('user/NavBars/nav.php'); ?>
    <!--//! ================ Home Navigation End ================ -->



    <div class="container my-5">

        <div class="card shadoww" style="border-radius: 25px;">
            <div class="row">

                <!-- Side Image Colum
                ======================= -->
                <div class="col-12 col-md-6 disapear">
                    <img class="p-3 ml-3" src="<?php echo base_url('image/userside/testskillstulogin.svg') ?>" width="90%" height="500px" alt="">
                </div>
                <!-- Side Image Colum end -->


                <!-- User login/Signup Colum
                ====================================== -->
                <div class="col-12 col-md-6 bg-primary" style="border-radius: 0px 25px 25px 0px;">
                    <div class="form-box    bg-primary">


                        <!-- Slider button login to signup and signup to login 
                        ======================================================================= -->
                        <div class="button-box   mr-4">
                            <div id="btn"></div>
                            <button type="button" class="toogle" id="btn1" onclick="login()">Log In</button>
                            <button type="button" class="toogle" id="btn2" onclick="register()">Register</button>
                        </div>
                        <!-- Slider button login to signup and signup to login End -->



                        <!-- Login Form 
                        ============================== -->
                        <form id="login" action="studentlog" class="mt-4 input-group" method="post" autocomplete="off">
                            <input type="email" name="email" class="input-field text-dark" placeholder="Enter email" required>
                            <input type="password" name="password" class="input-field text-dark" placeholder="Enter Password" required>
                            <input type="submit" name="submit" class="mt-5 btn btn-light text-primary font-weight-bold" value="Login">
                        </form>
                        <!-- Login Form End -->

                        <!-- Registration Form
                        ================================ -->
                        <form id="register" action="student_register" class="input-group" method="post" autocomplete="off">
                            <input type="text" name="name" class="input-field text-dark" placeholder="Full name" required>
                            <input type="email" name="email" class="input-field text-dark" placeholder="Email Id" required>
                            <input type="password" name="pass" class="input-field text-dark" placeholder="Password" required>
                            <input type="phone" name="phone" class="input-field text-dark" placeholder="Phone" required>
                            <input type="submit" name="submit" class="mt-4 btn btn-light text-primary font-weight-bold" value="Register">
                        </form>
                        <!-- Registration Form End -->


                    </div>
                </div>
                <!-- User login/Signup Colum End -->



            </div>
        </div>

    </div>




    <!-- Script For Log in Register Sliding
    ============================================================= -->
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";

            /* Changing color */
            document.getElementById("btn1").style.color = "#007bff"
            document.getElementById("btn2").style.color = "aliceblue"

            /* changing fontweight */
            document.getElementById("btn2").style.fontWeight = "lighter"
            document.getElementById("btn1").style.fontWeight = "bold"
        }

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "111px";

            /* Changing color */
            document.getElementById("btn2").style.color = "#007bff"
            document.getElementById("btn1").style.color = "aliceblue"

            /* changing fontweight */
            document.getElementById("btn2").style.fontWeight = "bold"
            document.getElementById("btn1").style.fontWeight = "lighter"
        }
    </script>
    <!-- Script For Log in Register Sliding End -->




    <!-- Bootstrap CDN
    ================================== -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>