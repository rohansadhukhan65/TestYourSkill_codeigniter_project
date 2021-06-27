<?php $this->load->view('admin/base_header.php'); ?>
<!-- ====================== Main pahe Content Starts =============================== -->

<!-- Bread Crumps
========================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-6">
            <h4 class="page-title font-weight-light">Student Details</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/Online_exam_admin/admin_home') ?>">Home</a></li>
                    <li class="breadcrumb-item active " aria-current="page">Student Details</li>
                </ol>
            </nav>
        </div>
        <div class="col-6">
            <div class="text-right ">
                <h6 class=" ">Time</h6>
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


        <!-- Refresh Button
        ============================ -->
        <div class="mr-auto">
            <a href="student_details" class="text-info  font-weight-light py-1"><i class="fas fa-sync"></i> Refresh Table</a>
        </div>
        <!-- Refresh Button -->


        <!-- Search Student Details By Name
        ============================================== -->
        <form action="student_search" method="POST" class="d-flex ml-auto form-inline">
            <input style="border-radius: 10px;" class="form-control mr-sm-2" type="search" name="search" placeholder="name" aria-label="Search">
            <input style="border-radius: 10px;" class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit" value="Search">
        </form>
        <!-- Search Student Details By Name End -->


        <!-- Student Details Table
        ================================== -->
        <div class="my-3">
            <?php if ($data) { ?>


                <!-- Students Data
                ======================= -->
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr class="bg-primary">
                            <th scope="col" style="color: white;">Sl. No.</th>
                            <th scope="col" style="color: white;">Name</th>
                            <th scope="col" style="color: white;">Email</th>
                            <th scope="col" style="color: white;">Phone</th>
                            <th scope="col" style="color: white;">Registerd Date</th>
                            <th scope="col" style="color: white;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($data as $row) {
                        ?>
                            <tr>
                                <th scope="row"><?php echo $i;
                                                $i += 1; ?></th>
                                <th><?php echo $row->name ?></th>
                                <td><?php echo $row->email ?></td>
                                <td><?php echo $row->phone ?></td>
                                <td><?php echo $row->date ?></td>
                                <th><a href="delete_student?id=<?php echo $row->std_id ?>" type="button" class="btn-outline-danger btn-sm" style="text-decoration: none;">Delete</a>
                                </th>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <!-- Students Data End -->

            <?php } else {
            ?>
                <div class="text-center fade h2 show mt-2" role="alert">
                    <i class="fas text-danger display-1 mb-5 fa-exclamation"></i> <br>
                    <strong class="text-danger font-weight-light">No records found</strong>
                </div>
            <?php } ?>
        </div>
        <!-- Student Details Table End -->

    </div>
</div>

<!-- Body Eds -->





<!-- ====================== Main pahe Content Ends =============================== -->
<?php $this->load->view('admin/base_footer.php'); ?>