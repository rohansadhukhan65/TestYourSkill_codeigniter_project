<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>

    <!-- Bootstrap CSS
    ============================ -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>js/index.js"></script>
</head>

<body class="bg-primary">



    <div class="container">
        <div class="submain shadow card p-5 bg-light">
  
            <h1 class="text-primary py-1 mb-5 font-weight-light"> Admin Login</h1>

            <!-- Login Form
            ======================= -->
            <form action="<?php echo base_url('index.php/Online_exam_admin/adminlog'); ?>" method="POST">
                <div class="undermain">
                    <input type="email" name="email" required autocomplete="off">
                    <label for="user">Email</label>
                </div>
                <div class="undermain">
                    <input type="password" name="pass" required autocomplete="off">
                    <label for="user">password</label>
                </div>
                <input type="submit" name="submit" value="login" class="btn mt-5 btn-primary shadow my-3" style="border-radius: 10px;">
            </form>
            <!-- Login Form End -->

        </div>
    </div>



    <!-- Optional JavaScript
    =================================== -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS
    =============================================================== -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>