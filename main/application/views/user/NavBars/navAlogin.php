<nav class="navbar navbar-expand-lg shadow navbar-dark bg-primary">
    <a class="navbar-brand h3" href="#">TestYourSkill</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item  active">
                <a class="nav-link" href="<?php echo base_url('index.php/Online_exam/student_test')?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item  ">
                <a href="<?php echo base_url('index.php/Online_exam/student_logout'); ?>" class="nav-link btn btn-light text-primary py-1 mx-5 mt-1"><i class="fas fa-sign-out-alt"></i> Logout</span></a>
            </li>
        </ul>

    </div>
</nav>