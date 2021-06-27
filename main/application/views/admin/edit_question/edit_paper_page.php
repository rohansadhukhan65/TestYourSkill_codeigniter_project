<?php $this->load->view('admin/base_header.php'); ?>
<!-- ====================== Main pahe Content Starts =============================== -->

<!-- Bread Crumps
========================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-6">
            <h4 class="page-title font-weight-light">Edit Paper</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/Online_exam_admin/admin_home') ?>">Home</a></li>
                    <li class="breadcrumb-item active " aria-current="page">Edit Paper</li>
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

        <!-- Alert
        ================ -->
        <?php if(!empty($alert)){ echo $alert; } ?>
        <!-- Alert -->


        <!-- Question Table 
        ================================ -->
        <table class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th class="bg-primary" style="color:white;">No.</th>
                    <th class="bg-primary" style="color:white;">Topic</th>
                    <th class="bg-primary" style="color:white;">Question </th>
                    <th class="bg-primary" style="color:white;">Action</th>

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
                        <th class="font-weight-light"><?php echo $row->topic ?></th>
                        <td class="font-weight-light"><?php echo $row->question ?></td>
                        <th>
                            <a href="edit_question?id=<?php echo $row->q_id ?>" type="button" class="btn-outline-info font-weight-light btn-sm" style="text-decoration: none;">Edit</a>&nbsp;&nbsp;
                            <a href="delete_question?id=<?php echo $row->q_id ?>" type="button" class="btn-outline-danger font-weight-light mt-2 btn-sm" style="text-decoration: none;">Delete</a>
                        </th>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <!-- Question Table End -->
    </div>
</div>

<!-- Body Eds -->


<!-- ====================== Main pahe Content Ends =============================== -->
<?php $this->load->view('admin/base_footer.php'); ?>