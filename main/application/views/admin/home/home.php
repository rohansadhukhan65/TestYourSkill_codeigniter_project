<?php $this->load->view('admin/base_header.php'); ?>
<!-- ====================== Main pahe Content Starts =============================== -->


<!-- Bread Crumps
========================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-6">
            <h4 class="page-title font-weight-light">Dashboard</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/Online_exam_admin/admin_home')?>">Home</a></li>
                    <li class="breadcrumb-item active " aria-current="page">Dashboard</li>
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


<div class="container-fluid text-center mt-5 pt-5">
    <h2 class="font-weight-light text-primary">TestYourSkill</h2>
    <div class="pt-3"><i class="fas fa-user-circle display-1 mb-3 shadow text-primary" style="border-radius: 50%;"></i></div>
    <h3 class="text-primary font-weight-light">Welcome Admin !</h3>
</div>




<!-- ====================== Main pahe Content Ends =============================== -->
<?php $this->load->view('admin/base_footer.php'); ?>