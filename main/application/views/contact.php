<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
    <script type="text/javascript" src="<?php echo base_url();?>js/index.js"></script>
</head>
<body  style="background-image: url('<?php echo base_url(); ?>image/start.jpg');background-size:cover;">
<div class="container my-3">
<?php
if(isset($_SESSION['msg']))
{
?>
    <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
      <strong>😊</strong> <?php echo $_SESSION['msg']; ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>    
    </div>
  <?php
  }
  ?>
<h3 class="center text-info text-center mt-5 alert alert-dark">Contact Us</h3>
<div class="row">
    <div class="col-sm-6 offset-3">
      <form method="POST" action="contact">
                <h3 class="mx-1 contact_heading">Student Name</h3>
                  <div class="form-group">
                    <input type="text" name="student_name" class="form-control" id="addstudent" required autocomplete="off" aria-describedby="emailHelp">
                  </div>

                  <div id="stu_errro" class="text-danger"></div>


                  <h3 class="mx-1">Email</h3>
                  <div class="form-group">
                    <input type="email" name="email" class="form-control" id="addemail" autocomplete="off" required aria-describedby="emailHelp">
                  </div>

                    <div id="email_errro" class="text-danger"></div>

                  <h3 class="mx-1">Phone</h3>
                  <div class="form-group">
                    <input type="tel" name="phone" class="form-control" id="addphone" autocomplete="off" required aria-describedby="emailHelp">
                  </div>

                    <div id="phone_errro" class="text-danger"></div>

                    <h3 class="mx-1">How may i help you?</h3>
                  <div class="form-group">
                  <textarea class="form-control" name="query" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>

                    <div id="issuebk_errro" class="text-danger"></div>

                  <div class="row text-center">
                    <div class="col">
                    <input type="submit" id="addbtn3" value="Submit" name="submit" class=" mt-3 mb-3">
                    </div>
                    <div class="col">
                    <a href="home" class="text-center btn btn-warning rounded mt-3 mb-3">Cancel</a>
                    </div>
                    </div>
                    <!--this is for error showing if any occcur-->
                    <div id="adderror" class="mt-2 text-danger"></div>
                </form>
            </div>



      </form>
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