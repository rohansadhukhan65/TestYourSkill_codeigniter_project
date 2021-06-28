<!DOCTYPE html>
<html lang="en">

<head>
    <!--  Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>

        TestYourSkill Admin

    </title>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=790">







    <!--  CSS
    ================================================== -->
    <link rel="stylesheet" href="https://bootadmin.org/style/vendor/library.min.css">
    <link rel="stylesheet" href="https://bootadmin.org/style/vendor/jqueryui-flat/jquery-ui.min.css">

    <!-- Fontawsome CDN
    ======================== -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- Fontawsome CDN End -->


    <link rel="stylesheet" href="https://bootadmin.org/style/core/style.min.css">





    <!-- Custom style
    ==================================================== -->
    <style>
        body {
            font-size: 14px !important;
        }

        #clock {
            font-size: 23px;
        }
    </style>



</head>

<body id="landing" class="sidebar-open">

    <!-- PreLoader -->
    <!-- <div class="loading">
        <div class="loading-center"><img src="https://bootadmin.org/images/loading/map.gif" alt="Loading" /></div>
    </div> -->
    <!-- Pre Loader end -->





    <div class="page-container animsition">
        <div id="dashboardPage">


            <!-- top Menu
            =============================================== -->
            <div class="topbar bg-primary">
                <div class="container-fluid">
                    <div class="row">

                        <!-- side nav control -->
                        <div class="col-md-5 hidden-xs">
                            <a href="#" class="menu-toggle wave-effect">
                                <i class="feather icon-menu"></i>
                            </a>
                        </div>
                        <!-- side nav control end -->

                        <!-- Mobile side nav control -->
                        <div class="col-md-7 text-center">
                            <ul>
                                <li class="mobile-menu-toggle">
                                    <a href="#" class="menu-toggle wave-effect">
                                        <i class="feather icon-menu"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Mobile side nav control end -->

                    </div>
                </div>
            </div>
            <!-- top Menu end -->




            <!-- side Menu
            =========================================== -->
            <div class="sidebar">

                <div class="logo">

                    <span class="logo-emblem"><i class="fas fa-clipboard h2"></i></span>
                    <span class="logo-full text-primary font-weight-bold"> TestYourSkill Admin</span>

                </div>

                <ul>

                    <!-- Side Menu Title -->
                    <li class="title">
                        <i class="feather icon-more-horizontal"></i>
                        <span class="menu-title">Menu</span>
                    </li>
                    <!-- Side Menu Title End -->


                    <!-- Side Menu Items -->
                    <li class="nav-item">
                        <a href="<?php echo base_url('index.php/Online_exam_admin/add_question'); ?>" class="nav-link wave-effect nav-single">
                            <i class="fas fa-plus-circle"></i>
                            <span class="menu-title">Add Question</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('index.php/Online_exam_admin/edit_paper'); ?>" class="nav-link wave-effect nav-single">
                            <i class="far fa-edit"></i>
                            <span class="menu-title">Edit Question</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('index.php/Online_exam_admin/student_details'); ?>" class="nav-link wave-effect nav-single">
                            <i class="fas fa-list"></i>
                            <span class="menu-title">Student Details</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('index.php/Online_exam_admin/result_details'); ?>" class="nav-link wave-effect nav-single">
                            <i class="fas fa-chart-pie"></i>
                            <span class="menu-title">Student Results</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('index.php/Online_exam_admin/student_query'); ?>" class="nav-link wave-effect nav-single">
                            <i class="fas fa-question-circle"></i>
                            <span class="menu-title">Student Query</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('index.php/Online_exam_admin/student_feedback'); ?>" class="nav-link wave-effect nav-single">
                            <i class="fas fa-comments"></i>
                            <span class="menu-title">Student Feedback</span>
                        </a>
                    </li>
                    <!-- Side Menu Items End -->

                </ul>
            </div>
            <!-- side Menu end -->








            <main class="mb-5">