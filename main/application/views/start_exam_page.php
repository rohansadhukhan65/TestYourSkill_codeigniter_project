<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>start exam</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
</head>
<script>
    //this is written so that back button of browser could not work, this work only when we go to another page or link from this page
    window.history.forward();
    function noback() {
        window.history.forward();
    }
</script>
<body onload="timeout()"  style="background-image: url('<?php echo base_url(); ?>image/start.jpg');background-size:cover;">
<div class="container">
<?php
if(isset($_SESSION['msg']))
{
?>
<h4 class="text-center alert alert-warning mt-5 text-danger"><?php  echo $_SESSION['msg'];?></h4>
<div class="text-center">
<a href="studentlog" class="btn btn-md btn-primary mt-5">Login</a><br>
</div>
<div class="text-center">
<h5  class="text-center text-primary fixed-bottom">@2021 TestYourSkill</h5>
</div>
<?php
}
else
{
?>
<div class="mt-5">
<h3 class="text-center mt-5 alert alert-warning">Welcome
<?php 
if(isset($_SESSION['std_name']))
{ 
echo $_SESSION['std_name'];
}
?>
</h3>
</div>
<?php
$i=1;
?>
<div class=" m-5 text-danger text-end fixed-top"><h5 class="ml-3">Time Left</h5>
<h4 class="ml-4" id="time_show"></h4>
</div>
<div class="card mt-5 border-success">
<form id="myform" action="exam_result" method="POST">
<?php
foreach($ques as $row)
{
    $o=1;
?>
<div class="card-header bg-warning">
<?php
    echo $i.". ";echo$row->question;
?>
</div>
<div class="card-body" style="background-color:thistle;">
<div class="row">
<div class="col-lg-1">
<!-- we echo $i so that we can select only one option of particular question -->
<input type="radio" name="q[<?php echo $i?>]" value="<?php echo $o;?>,<?php echo $row->q_id;?>">   
<!-- We passed $o as a option number so that we can match the correct answer with it...-->
</div>
<div class="col">
<?php echo $row->op1;?>
</div>
</div>

<div class="row">
<div class="col-lg-1">
<input type="radio" name="q[<?php echo $i?>]" value="<?php echo $o+1;?>,<?php echo $row->q_id;?>">
</div>
<div class="col">
<?php echo $row->op2;?>
</div>
</div>

<div class="row">
<div class="col-lg-1">
<input type="radio" name="q[<?php echo $i?>]" value="<?php echo $o+2;?>,<?php echo $row->q_id;?>">
</div>
<div class="col">
<?php echo $row->op3;?>
</div>
</div>

<div class="row">
<div class="col-lg-1">
<input type="radio" name="q[<?php echo $i?>]" value="<?php echo $o+3;?>,<?php echo $row->q_id;?>">
</div>
<div class="col">
<?php echo $row->op4;?>
</div>
</div>
</div>
<?php
$i+=1;
}
?>
<script type="text/javascript">
var timeleft=600; // convert into second
function timeout()
{ 
    var minute=Math.floor(timeleft/60); // floor function print only intiger of float value 
    var second=timeleft%60;
    var min=checktime(minute);// we do this so that it show 2 digit in time minute
    var sec=checktime(second);// same for second
    if(timeleft==0)
    {
        clearTimeout(tm);
        $("input[type='submit']").click();
    }
    else
    {
        document.getElementById("time_show").innerText=min+":"+sec;
    }
    timeleft--;
    if(timeleft!=-1)
    {
        var tm=setTimeout(function(){timeout()},1000);
    }
}
function checktime(time)
{
    if(time<10)
    {
        time="0"+time;
    }
    return time;
}
</script>
<input type="submit" name="submit" value="submit" class="mb-4">
</form>
</div><br><br>
<div class="text-center">
<a href="student_logout" class="btn btn-warning">Logout</a>
</div><br>
<div class="text-center">
<h5  class="text-center text-primary">@2021 TestYourSkill</h5>
</div>
<?php
}
?>
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