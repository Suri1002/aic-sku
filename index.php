<?php
session_start();
error_reporting(0);

include "db_connection.php";
$sql = $conn->prepare("select * from payment where payment_status = 'complete' ");
$sql->execute();
$result = $sql->get_result(); 
$row = $result->fetch_assoc();
$ct = count($row);
// echo "<script>alert($ct);</script>";


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>AIC-SKU COURSES</title>


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
.container {
  position: relative;
  font-family: Arial;
}

.text-block {
  position: absolute;
  left: 1%;
  top: 10%;
  bottom: 20%;
/*  right: 10%;
*/  /*background-color: green;*/
  color: white;
  font-weight: :bolder;
  /*font-size: 200%;*/
  padding-left: 20px;
  padding-right: 20px;
}
span{
  font-size: 50px;
}
</style>

<link href="assets/web/css/bootstrap.css" rel="stylesheet">
<link href="assets/web/css/revolution-slider.css" rel="stylesheet">
<link href="assets/web/css/style.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="assets/web/css/responsive.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i|Oxygen:400,700|Pacifico&amp;display=swap" rel="stylesheet">

<meta name="description" content="GREETINGS ! Innovative Certification Courses Online learning is rapidly becoming one of the most cost-effective ways to educate the world’s rapidly expanding workforce. Register Now Enjoy Learning In times where small instructor-led classrooms tend to be the exception, electronic learning solutions can offer more collaboration and interaction with experts and peers, as well as a higher success rate than the Read More">
<link rel="canonical" href="http://course.conzurasolutions.com/">
<meta property="og:site_name" content="-">
<meta property="og:type" content="article">
<meta property="og:title" content="Home -">
<meta property="og:description" content="GREETINGS ! Innovative Certification Courses Online learning is rapidly becoming one of the most cost-effective ways to educate the world’s rapidly expanding workforce. Register Now Enjoy Learning In times where small instructor-led classrooms tend to be the exception, electronic learning solutions can offer more collaboration and interaction with experts and peers, as well as a higher success rate than the Read More">
<!-- <meta property="og:url" content="http://course.conzurasolutions.com/">
 --><meta property="article:published_time" content="2021-07-15T14:33:45Z">
<meta property="article:modified_time" content="2021-08-19T05:09:36Z">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Home -">
<meta name="twitter:description" content="GREETINGS ! Innovative Certification Courses Online learning is rapidly becoming one of the most cost-effective ways to educate the world’s rapidly expanding workforce. Register Now Enjoy Learning In times where small instructor-led classrooms tend to be the exception, electronic learning solutions can offer more collaboration and interaction with experts and peers, as well as a higher success rate than the Read More">

<body>
<?php include("header.php");?>


<section class="banner-section container pt-5" style="height: 30px;" class="col-lg-3 col-md-6 col-sm-12 col-12";>
<div class="banner-carousel themeactive-carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":false, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>

<div class="slide-item">
<div class="image-layer lazy-image" data-bg="url('images/orange.jpg') " ></div>
<div class="auto-container">
<div class="content-box">
<h4>Indulge in Knowledge</h4>
<h2>Visualize your potential</h2>
<div class="text">If you want to teach people a new way of thinking,
dont bother trying to teach them.
Instead give them a tool, the use of which will lead to new ways of thinking.</div>
</div>
</div>
</div>

<div class="slide-item">
<div class="image-layer lazy-image" data-bg="url('images/blue.jpg')"></div>
<div class="auto-container">
<div class="content-box">
<h4>Register Now</h4>
<h2>Enjoy Learning</h2>
<div class="text">In times where small instructor-led classrooms tend to be the exception,
electronic learning solutions can offer more collaboration and interaction with experts and peers,
as well as a higher success rate than the live alternative.</div>
</div>
</div>
</div>

<div class="slide-item">
<div class="image-layer lazy-image" data-bg="url('images/green.jpg')">      
  </div>
<div class="auto-container">
<div class="content-box">
<h4>Innovative Certification Courses</h4>
<h2>Trending </h2>
<div class="text">Online Education is Rapidly becoming one of the most cost-efective ways to educate the worlds
                   rapidly expanding workforce.</div>
</div>
</div>
</div>
</div>
</section>



<section class="product-section style-two" style="margin-top:700px" >
<div class="auto-container">
<div class="sec-title text-center" >
<div class="icon-box"> 
  <img src="images/logo-1.png" height="35px" width="35px"> 
</div>

<!-- <section class="banner-section container pt-5" style="height: 50px;"> -->
<h1 style="color:#FF9933" class="pt-2"> Our Core System</h1>
 <h2 style="color:#000080;font-weight: bold;"> Services We Offer </h2>
</div>

<div class="mixitup-gallery pt-4">
<div class="filter-list row clearfix">
<div class="shop-item col-lg-4 col-md-6 mix mix_all 1">
<div class="inner-box">
<div class="image-box"><img src="images/1.png" alt="" style="width: 100px; margin: 0 auto; padding-top: 5px;">
<h3 style="text-align: center; font-size: 18px; color: #000;">Premium Learning Chance</h3>
<p style="text-align: center;">Get your hands on High-Quality Courses</p>
</div>
</div>
</div>

<div class="shop-item col-lg-4 col-md-6 mix mix_all 1">
<div class="inner-box">
<div class="image-box"><img src="images/2.png" alt="" style="width: 100px; margin: 0 auto; padding-top: 5px;">
<h3 style="text-align: center; font-size: 18px; color: #000;">Assistance from Experts</h3>
<p style="text-align: center;">Directed by professionals and other expert lecturers</p>
</div>
</div>
</div>

<div class="shop-item col-lg-4 col-md-6 mix mix_all 2">
<div class="inner-box">
<div class="image-box"><img src="images/3.png" alt="" style="width: 100px; margin: 0 auto; padding-top: 5px;">
<h3 style="text-align: center; font-size: 18px; color: #000;">Upskill your self</h3>
<p style="text-align: center;">Improved expertised on new concepts.</p>
</div>
</div>
</div>

<div class="shop-item col-lg-4 col-md-6 mix mix_all 4">
<div class="inner-box">
<div class="image-box"><img src="images/4.png" alt="" style="width: 100px; margin: 0 auto; padding-top: 5px;">
<h3 style="text-align: center; font-size: 18px; color: #000;">Access support Content</h3>
<p style="text-align: center;">Access to various forms of Media and Resources.</p>
</div>
</div>
</div>

<div class="shop-item col-lg-4 col-md-6 mix mix_all 4">
<div class="inner-box">
<div class="image-box">
<img src="images/5.png" alt="" style="width: 100px; margin: 0 auto; padding-bottom: 5px; ">
<h3 style="text-align: center; font-size: 18px; color: #000;">Earn a Valuable Certificate</h3>
<p style="text-align: center; ">Recieve a valuable Certificate to improve your skills</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>



<hr style="margin-top:-60px;">
<section class="product-section">
  <h3 class="centered" style="margin-top: 3px ">Get indulged in our<br>
   Certificate Course on Innovation, Entrepreneurship & Venture Development (CIEVD) </h3> <br>
<div class="container">
  <div class="col-lg-12 col-md-10 col-sm-12">
  
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#cievd" style="font-weight:bolder;" >CIEVD</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#modules" style="font-weight:bolder;" >MODULES</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#brochure" style="font-weight:bolder;" >BROCHURE</a>
    </li>
  </ul>

  <!-- Tab panes -->
  
  <div class="tab-content">
    <div id="cievd" class="container tab-pane active"><br>
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
          <img src="img/modules.png" height="15px" alt="image" style="padding-bottom: 20px;" />
        </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-12"> 
      <h3 class="pt-6 pb-2 text-center">About CIEVD</h3>
      <p style="padding-left:100px;">Certificate Course in Innovation, Entrepreneurship & Venture Development program comprises of core courses, skill certification, capstone projects and Action Learning Segments. The objective of this course is to translate the learning in innovation and entrepreneurship into practice</p>
    </div>
</div>
</div>
    <div id="modules" class="container tab-pane "><br>
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
        <img src="img/modules.png" alt="" style="padding-bottom: 20px;" />
        </div>
      
      <div class="col-lg-6 col-md-6 col-sm-12 col-12" style="padding-left:150px;">
      <h3 class="pt-6 pb-2 ">List of Modules</h3>
        <li>Introduction to Entrepreneurship </li>
       <li>Innovation through design thinking</li>
       <li>Venture development</li>
       <li>IPR & Technology Transfer</li>
        <li>Startup Establishment</li>
    </div>
</div>
</div>
    <div id="brochure" class="container tab-pane "><br>
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12 col-12">  
          <img src="img/brochure.png" alt="image" style="padding-bottom: 20px;">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <a href="" style="font-size: 50px;text-align:center;">Download</a>
        </div>
    </div>
    </div>
  </div>
</div>
</div>
</section>

<?php


?>


<div class="auto-container" >
<div class="sec-title text-center pb-3">

<div class="icon-box">
 
  <img src="images/logo-1.png" height="35px" width="35px"> 

</div>
</div>
</div>

    <div class="container" style="text-align:center;">
        <img src="img/course.jfif" width="100%" alt="" style="opacity:0.9;height: 500px;">    
            
              <div class="text-block">
                <span class="course-count">10</span> <span>+</span>
              <h4 >Learners Till Date</h4>
          </div>
        </div>



<div class="auto-container pt-5">
<div class="sec-title text-center pb-3">

<div class="icon-box">
 
  <img src="images/logo-1.png" height="35px" width="35px"> 

</div>
</div>
</div>

<?php include("footer.php");?>


<script>
  $('.course-count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 5000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
</script>



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