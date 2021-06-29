<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>

    <!-- Fontawsome CDN
  ======================== -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- Fontawsome CDN End -->


    <!-- Bootstrap CSS
    ============================= -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

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
        <h1 class="text-center mt-5 font-weight-light  text-primary">Your Performance</h1>
        <div>
            <?php
            if (isset($_SESSION['msg'])) {
                if ($result) {
            ?>
                    <table class="table table-hover mt-5 shadow">
                        <thead>
                            <tr>
                                <h2 class="text-center font-weight-bold text-monospace text-warning  mt-5">Results</h2>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($result as $key => $value) {
                            ?>
                                <tr class="border  font-weight-light">
                                    <th> <?php echo $key ?></th>
                                    <th><?php echo $value ?></th>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                <?php
                }
            } else {
                ?>
                <h3 class="text-center mt-5 pt-5 text-danger"> <i class="fas fa-exclamation-triangle"></i> <br> You did not attempt any question.</h3>
                <div class="text-center mt-5">
                    <a href="start_exam" class="btn btn-warning">Back to exam page</a>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="fixed-bottom mb-5 pb-5">
            <h5 class="text-center text-primary">@TestYourSkill</h5>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>