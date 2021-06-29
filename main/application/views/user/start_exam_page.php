<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>start exam</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<script>
    //this is written so that back button of browser could not work, this work only when we go to another page or link from this page
    window.history.forward();

    function noback() {
        window.history.forward();
    }
</script>

<body onload="timeout()">


    <div class="container">
        <?php
        if (isset($_SESSION['msg'])) {
        ?>
            <!--  Message
            ============================ -->
            <h4 class="text-center  mt-5 text-danger"><?php echo $_SESSION['msg']; ?></h4>
            <div class="text-center">
                <a href="studentlog" class="btn btn-md btn-primary mt-5">Login</a><br>
            </div>
            <div class="text-center">
                <h5 class="text-center text-primary fixed-bottom">@2021 TestYourSkill</h5>
            </div>
            <!--  Message -->

        <?php
        } else {
        ?>

            <!-- Title Message
            =========================== -->
            <div class="mt-5">
                <!-- <h3 class="text-center text-primary mt-5">
                    Best of Luck ! <?php echo (isset($_SESSION['std_name'])) ? $_SESSION['std_name'] : ''; ?>
                </h3> -->
                <br>
                <h2 class="text-primary text-center mt-5 font-weight-bold"> <?php echo $_REQUEST['topic'] ?> </h2>


                <!-- Examination Information
                ====================================== -->
                <div class="d-flex my-5 mx-sm-5 px-sm-5">
                    <span class="text-danger font-weight-bold mr-auto">Total Exam Time : 10 mins</span>
                    <span class="text-warning font-weight-bold"> Number Of Question : 10 Qs </span>
                </div>
                <!-- Examination Information End -->

            </div>
            <!-- Title Message -->

            <?php $i = 1; ?>

            <!-- Timer
            ================== -->
            <div class="font-weight-bold m-5 text-danger text-end fixed-top">
                <h5 class="text-right font-weight-bold">Time Left</h5>
                <h4 class="text-right   font-weight-bold" id="time_show"></h4>
            </div>
            <!-- Timer End -->

            <div class=" mt-5 mx-5 ">
                <form id="myform" action="exam_result" method="POST">
                    <?php
                    foreach ($ques as $row) {
                        $o = 1;
                    ?>
                        <!-- Question -->
                        <div class="card-header shadow bg-primary text-light" style="border-radius: 10px;">
                            <?php echo $i . ". ";
                            echo $row->question; ?>
                        </div>
                        <!-- Question End -->


                        <div class="card-body mb-3" style="background-color:transparent;">

                            <!-- Option 1 -->
                            <div class="row">

                                <div class="col-lg-1">
                                    <!-- we echo $i so that we can select only one option of particular question -->
                                    <input type="radio" name="q[<?php echo $i ?>]" value="<?php echo $o; ?>,<?php echo $row->q_id; ?>">
                                    <!-- We passed $o as a option number so that we can match the correct answer with it...-->
                                </div>
                                <div class="col">
                                    <?php echo $row->op1; ?>
                                </div>
                            </div>
                            <!-- Option 1 End -->

                            <!-- Option 2 -->
                            <div class="row">
                                <div class="col-lg-1">
                                    <input type="radio" name="q[<?php echo $i ?>]" value="<?php echo $o + 1; ?>,<?php echo $row->q_id; ?>">
                                </div>
                                <div class="col">
                                    <?php echo $row->op2; ?>
                                </div>
                            </div>
                            <!-- Option 2 End -->

                            <!-- Option 3 -->
                            <div class="row">
                                <div class="col-lg-1">
                                    <input type="radio" name="q[<?php echo $i ?>]" value="<?php echo $o + 2; ?>,<?php echo $row->q_id; ?>">
                                </div>
                                <div class="col">
                                    <?php echo $row->op3; ?>
                                </div>
                            </div>
                            <!-- Option 3 End -->

                            <!-- Option 4 -->
                            <div class="row">
                                <div class="col-lg-1">
                                    <input type="radio" name="q[<?php echo $i ?>]" value="<?php echo $o + 3; ?>,<?php echo $row->q_id; ?>">
                                </div>
                                <div class="col">
                                    <?php echo $row->op4; ?>
                                </div>
                            </div>
                            <!-- Option 4 End -->

                        </div>
                    <?php
                        $i += 1;
                    }
                    ?>


                    <!-- Submit/Cancel Button
                    =========================== -->
                    <div class="d-flex my-5 px-sm-5 px-2">
                        <a style="border-radius: 10px;" href="<?php echo base_url('index.php/Online_exam/student_test'); ?>" class="btn btn-danger w-25"> Cancel </a>

                        <input style="border-radius: 10px;" type="submit" name="submit" value="Submit" class="btn btn-success ml-auto w-25">
                    </div>
                    <!-- Submit/Cancel Button End -->

                </form>
            </div>

            <div class="text-center my-5 ">
                <h5 class="text-center text-primary">@2021 TestYourSkill</h5>
            </div>
        <?php
        }
        ?>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


    <script type="text/javascript">
        var timeleft = 600; // convert into second
        function timeout() {
            var minute = Math.floor(timeleft / 60); // floor function print only intiger of float value 
            var second = timeleft % 60;
            var min = checktime(minute); // we do this so that it show 2 digit in time minute
            var sec = checktime(second); // same for second
            if (timeleft == 0) {
                clearTimeout(tm);
                $("input[type='submit']").click();
            } else {
                document.getElementById("time_show").innerText = min + ":" + sec;
            }
            timeleft--;
            if (timeleft != -1) {
                var tm = setTimeout(function() {
                    timeout()
                }, 1000);
            }
        }

        function checktime(time) {
            if (time < 10) {
                time = "0" + time;
            }
            return time;
        }
    </script>

</body>

</html>