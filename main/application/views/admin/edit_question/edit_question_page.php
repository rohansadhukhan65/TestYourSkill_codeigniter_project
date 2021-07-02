<?php $this->load->view('admin/base_header.php'); ?>
<!-- ====================== Main pahe Content Starts =============================== -->

<!-- Bread Crumps
========================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-6">
            <h4 class="page-title font-weight-light">Edit Question</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/Online_exam_admin/admin_home') ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/Online_exam_admin/edit_paper') ?>">Edit Paper</a></li>
                    <li class="breadcrumb-item active " aria-current="page">Edit Question</li>
                </ol>
            </nav>
        </div>
        <div class="col-6">
            <div class="text-right ">
                <h6>Time</h6>
                <h5 class="text-primary font-weight-light" id="clock"> </h5>
            </div>
        </div>
    </div>
</div>
<!-- Bread Crumps End -->


<!-- Body
=================================== -->

<div class="container">
    <div class="card shadow p-5" style="border-radius: 10px;">

        <!-- Success Message
        ======================== -->
        <?php if (!empty($alert)) {
            echo $alert;
        } ?>
        <!-- Success Message End -->

        <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="POST">

            <!-- topic chose select box
            =============================== -->
            <div class="form-group text-center ">
                <h5 class="mx-2">Select Topic</h5>
                <select style="border-radius: 10px; border-color:#72cd9c73;" class="form-select alert p-1 btn btn-outline-success" name="topic" require aria-label="Default select example">
                    <<option selected disabled>Choose</option>
                        <option id="Problem Set1" value="Problem Set1">Problem Set1</option>
                        <option id="Problem Set2" value="Problem Set2">Problem Set2</option>
                        <option id="Problem Set3" value="Problem Set3">Problem Set3</option>
                        <option id="Problems on Trains" value="Problems on Trains">Problems on Trains</option>
                        <option id="Height and Distance" value="Height and Distance">Height and Distance</option>
                        <option id="Simple Interest" value="Simple Interest">Simple Interest</option>
                        <option id="Countries and Sports" value="Countries and Sports">Countries and Sports</option>
                        <option id="Neighbouring Country" value="Neighbouring Country">Neighbouring Country</option>
                        <option id="Capital and Currencies" value="Capital and Currencies">Capital and Currencies</option>
                        <option id="Physics" value="Physics">Physics</option>
                        <option id="Chemistry" value="Chemistry">Chemistry</option>
                        <option id="Computer" value="Computer">Computer</option>
                        <option id="Time and Distance" value="Time and Distance">Time and Distance</option>
                        <option id="Time and Work" value="Time and Work">Time and Work</option>
                        <option id="Problems on Ages" value="Problems on Ages">Problems on Ages</option>
                        <option id="Spotting Errors" value="Spotting Errors">Spotting Errors</option>
                        <option id="Antonyms" value="Antonyms">Antonyms</option>
                        <option id="Spelling" value="Spelling">Spelling</option>
                        <option id="Number Series" value="Number Series">Number Series</option>
                        <option id="Verbal Classification" value="Verbal Classification">Verbal Classification</option>
                        <option id="Logical Games" value="Logical Games">Logical Games</option>
                        <option id="Series" value="Series">Series</option>
                        <option id="History" value="History">History</option>
                        <option id="Biology" value="Biology">Biology</option>
                        <option id="Current Afairs 2019" value="Current Afairs 2019">Current Affairs 2019</option>
                        <option id="Current Affairs 2020" value="Current Affairs 2020">Current Affairs 2020</option>
                        <option id="Current Affairs 2021" value="Current Affairs 2021">Current Affairs 2021</option>
                        <option id="Java Mcq Test1" value="Java Mcq Test1">Java Mcq Test1</option>
                        <option id="Java Mcq Test2" value="Java Mcq Test2">Java Mcq Test2</option>
                        <option id="Java Mcq Test3" value="Java Mcq Test3">Java Mcq Test3</option>
                        <option id="C Mcq Test1" value="C Mcq Test1">C Mcq Test1</option>
                        <option id="C Mcq Test2" value="C Mcq Test2">C Mcq Test2</option>
                        <option id="C Mcq Test3" value="C Mcq Test3">C Mcq Test3</option>
                        <option id="Php Mcq Test1" value="Php Mcq Test1">Php Mcq Test1</option>
                        <option id="Php Mcq Test2" value="Php Mcq Test2">Php Mcq Test2</option>
                        <option id="Php Mcq Test3" value="Php Mcq Test3">Php Mcq Test3</option>
                </select>
            </div>
            <!-- topic chose select box End -->



            <!-- text input for the Question
            ==================================== -->
            <div class="form-group">
                <h5 class="mx-1">Add Question</h5>
                <textarea style="border-radius: 10px;" class="form-control" name="ques" id="exampleFormControlTextarea1" rows="3"><?php echo $data->question; ?></textarea>
            </div>
            <!-- text input for the Question End -->


            <div class="row">

                <!-- text input for option A/1
                ====================================== -->
                <div class="col-lg-3">
                    <div class="form-group">
                        <h6 class="mx-1">Option A </h6>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="form-group">
                        <input style="border-radius: 10px;" type="text" name="op1" value="<?php echo $data->op1; ?>" class="form-control" id="addstudent" required autocomplete="off" aria-describedby="emailHelp">
                    </div>
                </div>
                <!-- text input for option A/1 End -->


                <!-- text input for option B/2
                ===================================== -->
                <div class="col-lg-3">
                    <div class="form-group">
                        <h6 class="mx-1">Option B </h6>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="form-group">
                        <input style="border-radius: 10px;" type="text" name="op2" value="<?php echo $data->op2; ?>" class="form-control" id="addstudent" required autocomplete="off" aria-describedby="emailHelp">
                    </div>
                </div>
                <!-- text input for option B/2 End -->


                <!-- text input for option C/3
                ==================================== -->
                <div class="col-lg-3">
                    <div class="form-group">
                        <h6 class="mx-1">Option C</h6>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="form-group">
                        <input style="border-radius: 10px;" type="text" name="op3" value="<?php echo $data->op3; ?>" class="form-control" id="addstudent" required autocomplete="off" aria-describedby="emailHelp">
                    </div>
                </div>
                <!-- text input for option C/3 End -->


                <!-- text input for option D/4
                =================================== -->
                <div class="col-lg-3">
                    <div class="form-group">
                        <h6 class="mx-1">Option D </h6>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="form-group">
                        <input style="border-radius: 10px;" type="text" name="op4" value="<?php echo $data->op4; ?>" class="form-control" id="addstudent" required autocomplete="off" aria-describedby="emailHelp">
                    </div>
                </div>
                <!-- text input for option D/4 End -->


                <!-- Text input for correct answer
                ======================================= -->
                <div class="col-lg-3">
                    <div class="form-group">
                        <h6 class="mx-1">Answer</h6>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="form-group">
                        <input style="border-radius: 10px;" type="text" name="ans" value="<?php echo $data->answer; ?>" class="form-control" id="addstudent" required autocomplete="off" aria-describedby="emailHelp">
                        <span class="text-primary">Choose the right option number or in digit like 1/2/3/4</span>
                    </div>
                </div>
                <!-- Text input for correct answer End -->

            </div>

            <!-- Add  button
            ======================= -->
            <div class="row">
                <div class="col-12">
                    <input type="submit" name="submit" value="Edit Question" id="addbtn3" style="border-radius: 10px;" class="ml-auto mr-auto btn btn-primary shadow my-3 w-50">
                </div>
            </div>
            <!-- Add  button End -->


        </form>
    </div>
</div>

<!-- Body Eds -->



<script>
    selectVal();

    function selectVal() {
        val = document.getElementById('<?php echo $data->topic; ?>').selected = 'selected';

    }
</script>
<!-- ====================== Main pahe Content Ends =============================== -->
<?php $this->load->view('admin/base_footer.php'); ?>