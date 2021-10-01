<?php
error_reporting(0);
session_start();
include "db_connection.php";
$email = $_SESSION['email'];
 $sql2 = $conn->prepare("select * from students where email = '$email' ");
        $sql2->execute();
        $result2 = $sql2->get_result(); 
        $row2 = $result2->fetch_assoc();
        $stdName = $row2['username'];

        $sql1 = $conn->prepare("select * from payment where name = '$stdName' and payment_status = 'complete'");
        $sql1->execute();
        $result1 = $sql1->get_result(); 
        $enrollCourseCount = 0;
        while($row1 = $result1->fetch_assoc())
        {
            $enrollCourseCount++;
        }


        $sql3 = $conn->prepare("select * from payment where payment_status = 'complete'");
        $sql3->execute();
        $result3 = $sql3->get_result(); 
        $CourseCount = 0;
        while($row3 = $result3->fetch_assoc())
        {
            $CourseCount++;
        }
        // $status = $row1['payment_status'];
        
       
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>AIC-SKU</title>
<!-- Stylesheets -->

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>


<link href="assets/web/css/bootstrap.css" rel="stylesheet">
<link href="assets/web/css/revolution-slider.css" rel="stylesheet">
<link href="assets/web/css/style.css" rel="stylesheet">
<link rel="shortcut icon" href="assets/web/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="assets/web/images/favicon.ico" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="assets/web/css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i|Oxygen:400,700|Pacifico&amp;display=swap" rel="stylesheet">
<style type="text/css">

.progress {
    width: 150px;
    height: 150px !important;
    float: left;
    line-height: 150px;
    background: none;
    margin: 20px;
    box-shadow: none;
    position: relative
}

.progress:after {
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    border: 12px solid #fff;
    position: absolute;
    top: 0;
    left: 0
}

.progress>span {
    width: 50%;
    height: 100%;
    overflow: hidden;
    position: absolute;
    top: 0;
    z-index: 1
}

.progress .progress-left {
    left: 0
}

.progress .progress-bar {
    width: 100%;
    height: 100%;
    background: none;
    border-width: 12px;
    border-style: solid;
    position: absolute;
    top: 0
}

.progress .progress-left .progress-bar {
    left: 100%;
    border-top-right-radius: 80px;
    border-bottom-right-radius: 80px;
    border-left: 0;
    -webkit-transform-origin: center left;
    transform-origin: center left
}

.progress .progress-right {
    right: 0
}

.progress .progress-right .progress-bar {
    left: -100%;
    border-top-left-radius: 80px;
    border-bottom-left-radius: 80px;
    border-right: 0;
    -webkit-transform-origin: center right;
    transform-origin: center right;
    animation: loading-1 1.8s linear forwards
}

.progress .progress-value {
    width: 90%;
    height: 90%;
    border-radius: 50%;
    background: #000;
    font-size: 24px;
    color: #fff;
    line-height: 135px;
    text-align: center;
    position: absolute;
    top: 5%;
    left: 5%
}

.progress.blue .progress-bar {
    border-color: #049dff
}

.progress.blue .progress-left .progress-bar {
    animation: loading-2 1.5s linear forwards 1.8s
}

.progress.yellow .progress-bar {
    border-color: #fdba04
}

.progress.yellow .progress-right .progress-bar {
    animation: loading-3 1.8s linear forwards
}

.progress.yellow .progress-left .progress-bar {
    animation: none
}

@keyframes loading-1 {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg)
    }

    100% {
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg)
    }
}

@keyframes loading-2 {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg)
    }

    100% {
        -webkit-transform: rotate(144deg);
        transform: rotate(144deg)
    }
}

@keyframes loading-3 {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg)
    }

    100% {
        -webkit-transform: rotate(135deg);
        transform: rotate(135deg)
    }
}
</style>
</head>

<body>

<?php
    include("header.php");
    include("db_connection.php");
?>

    <div class="container pt-5 pl-5 pr-5 pb-2" style="padding-top: 3.5em;padding-bottom: 1em;">
        <h2>Student Dashboard<hr style="width: 10%; background: green;height: 4px;border-radius: 50%;"></h2>
        
    </div>

<section class="container p-5">
<div class="row">
    <div  class="col-lg-6 col-md-6 col-sm-6 col-12">
        <p>Course completed status</p>
        <div class="row d-flex justify-content-center mt-100">
            <div class="col-md-6">
                <div class="progress yellow"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                    <div class="progress-value">10%</div>
                </div>
            </div>
        </div>
    </div>

    <div  class="col-lg-6 col-md-6 col-sm-6 col-12">
     <?php 

     $email = $_SESSION['email'];
        $sql2 = $conn->prepare("select * from students where email = '$email' ");
        $sql2->execute();
        $result2 = $sql2->get_result(); 
        $row2 = $result2->fetch_assoc();
        $stdName = $row2['username'];
        $_SESSION['stdName'] = $stdName;
        
        $sql1 = $conn->prepare("select * from payment where payment_status = 'complete' and name = '$stdName' ");
        $sql1->execute();
        $result1 = $sql1->get_result(); 
        $row1 = $result1->fetch_assoc();
        $status = $row1['payment_status'];

        if ($_SESSION['email'] == 0) {
    # code...
    // header("location:sign-up.php");
            ?>
                <div class="pt-4" align="center">
                        <a href="sign-up.php" class="btn btn-success p-2">Enroll Now</a>
                    </div>

            <?php

}
else{

        if($status == "complete"){
            ?>
                <div class="pt-4" align="center">
                        <a href="module.php" class="btn btn-success p-2">Continue to Course</a>
                    </div>

            <?php

        }
    
        else{
             ?>
                <div class="pt-4" align="center">
                        <a href="razorpay/index.php" class="btn btn-success p-2">Enroll now</a>
                    </div>

            <?php
        }
         }      
    ?> 
</div>
</div>
</section>

<style type="text/css">
    #modal{
        box-shadow: 2px 2px 14px 4px lightgray;
    }
</style>

<div class="container" >
    <div class="row">
    <div class=" col-lg-8 col-md-3" id="modal">
                    <div class="featured-box row" style="padding: 2em;">
                    <!-- <a href="#">  </a> -->
                        <i class="fa fa-user fa-2x"></i>
                        <div class="text pl-4" style="margin-top: -10px;">
                            <h3 class="pb-3">Complete Your Course</h3>
                            You are near to complete your course
                        </div>              
                    </div>          
    </div>
                <div class=" col-lg-4 col-md-3" id="modal">
                    <div class="featured-box" style="padding: 2em;">
                    
                       
                        <div class="text">
                            <h3>Course Status</h3>
                            10% Completed
                        </div>              
                    </div>          
                </div>

            </div>
    </div>


    <div class="container p-4">
    <div class="row">
                <div class=" col-lg-4 col-md-3 p-4" id="modal">
                    <div class="featured-box">
                    <div class="text" style="color: black;">    Enrolled Courses</div>
                    <!-- <a href="#">  </a> -->
                        <!-- <i class="fa fa-user fa-2x"></i> -->
                        <div class="text">
                            <h3 style="color: black;"><?php echo($enrollCourseCount);?></h3>
                        </div>              
                    </div>
                </div>
                
                <div class=" col-lg-4 col-md-3 p-4" id="modal">
                    <div class="featured-box">
                    <div class="text" style="color: black;">    Active Courses</div>
                    <!-- <a href="#">  </a> -->
                        <!-- <i class="fa fa-user fa-2x"></i> -->
                        <div class="text">
                            <h3 style="color: black;"><?php echo($enrollCourseCount);?></h3>
                        </div>              
                    </div>
                </div>

                <div class=" col-lg-4 col-md-3 p-4" id="modal">
                    <div class="featured-box">
                    <div class="text" style="color: black;">    Completed Courses</div>

                    <!-- <a href="#">  </a> -->
                        <!-- <i class="fa fa-user fa-2x"></i> -->
                        <div class="text">
                            <h3 style="color: black;"> 0 </h3>
                        </div>              
                    </div>
                </div>
                
                <div class=" col-lg-4 col-md-3 p-4" id="modal">
                    <div class="featured-box">
                    <div class="text" style="color: black;">    Total Students</div>
                    <!-- <a href="#">  </a>
                        <i class="fa fa-user fa-2x"></i> -->
                        <div class="text">
                            <h3 style="color: black;"><?php echo($CourseCount);?></h3>
                        </div>              
                    </div>
                </div>

                <div class=" col-lg-4 col-md-3 p-4" id="modal">
                    <div class="featured-box">
                    <div class="text" style="color: black;">Total Courses</div>

                    <!-- <a href="#">  </a>
                        <i class="fa fa-user fa-2x"></i> -->
                        <div class="text">
                            <h3 style="color: black;"> 1 </h3>
                        </div>              
                    </div>
                </div>

                <div class=" col-lg-4 col-md-3 p-4" id="modal">
                    <div class="featured-box">
                    <div class="text" style="color: black;">Total Earnings</div>

                    <!-- <a href="#">  </a>
                        <i class="fa fa-user fa-2x"></i> -->
                        <div class="text fas fa-rupee-sign">
                            <h3 style="color: black;"  > 0  </h3>
                        </div>              
                    </div>
                </div>
            </div>
        </div>

<div class="auto-container pt-3">
<div class="sec-title text-center">

<div class="icon-box">
 
  <img src="images/logo-1.png" height="35px" width="35px"> 

</div>
</div>
</div>

           <div id="courses" style="margin-top: -3em;">
        <section class="container">
             <h2 class="pb-5" style="padding-top: 1em;padding-bottom: 1em;">Available Courses<hr style="width: 10%; background: red;height: 4px;border-radius: 50%;"></h2>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 pt-4 pl-4 pr-4" id="modal">
                    <div class="">
                        <div class="">
                            <div class="featured-box">
                            
                                <i class="fa fa-cogs fa-2x"></i>
                                <div class="text">
                                    <h3>CIEVD</h3>
                                    Certificate Course in Innovation, Entrepreneurship & Venture Development program comprises of core courses, skill certification, capstone projects and Action Learning Segments. 
                                    The objective of this course is to translate the learning in innovation and entrepreneurship into practice. 
                                    <div class="pt-3" align="right" style="margin-top: 1em;"><a href="courses.php" class="btn btn-primary">Read More</a></div> 
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 pt-4 pl-4 pr-4" id="modal">
                    <div class="">
                        <div class="">
                            <div class="featured-box">
                            
                                <i class="fa fa-cogs fa-2x"></i>
                                <div class="text">
                                    <h3>CIEVD</h3>
                                    Certificate Course in Innovation, Entrepreneurship & Venture Development program comprises of core courses, skill certification, capstone projects and Action Learning Segments. 
                                    The objective of this course is to translate the learning in innovation and entrepreneurship into practice. 
                                    <div class="pt-3 pb-3" align="right" style="margin-top: 1em;"><a href="courses.php" class="btn btn-primary">Read More</a></div> 
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<div class="auto-container pt-5">
<div class="sec-title text-center">

<div class="icon-box">
 
  <img src="images/logo-1.png" height="35px" width="35px"> 

</div>
</div>
</div>

<?php include("footer.php");?>

<!--Scroll to top-->
<!-- <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div> -->

<script src="assets/web/js/jquery.js"></script> 
<script src="assets/web/js/popper.min.js"></script>
<script src="assets/web/js/bootstrap.min.js"></script>
<script src="assets/web/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/web/js/revolution.min.js"></script>
<script src="assets/web/js/jquery.fancybox.pack.js"></script>
<script src="assets/web/js/jquery.fancybox-media.js"></script>
<script src="assets/web/js/owl.js"></script>
<script src="assets/web/js/wow.js"></script>
<script src="assets/web/js/appear.js"></script>
<script src="assets/web/js/jquery.countdown.js"></script>
<script src="assets/web/js/isotope.js"></script>
<script src="assets/web/js/mixitup.js"></script>
<script src="assets/web/js/lazyload.js"></script>
<script src="assets/web/js/script.js"></script>
</body>

</html>