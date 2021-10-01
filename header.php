<?php
session_start();
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>AIC-SKU</title>
</head>
<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v4.0"></script>
<div class="page-wrapper">



<header class="main-header header-style-four">
<div class="header-top style-two">
<div class="auto-container">
<div class="clearfix">

<div class="top-left">
<ul class="link-nav clearfix">
<li><a href="tel:+918328589345"><span class="icon fa fa-phone"></span>+918328589345 | +919044330022</a></li>
<li><a href="mailto:techexe@aic-sku.com"><span class="icon fa fa-envelope"></span>techexe@aic-sku.com</a></li>
</ul>
</div>

<div class="top-right">
<ul class="link-nav">
<!-- <li><a href="joinus.html" target="_blank"><span class="icon fa fa-sign-in"></span>Join Us</a></li> -->
</ul>
<ul class="social-icon-one">
<li><a href="https://www.youtube.com/channel/UCQmHJQDG8Iacs_R2WATdENg" target="_blank"><span class="fa fa-youtube"></span></a></li>
<li><a href="https://www.facebook.com/SriKrishnadevarayaUniversity/" target="_blank"><span class="fa fa-facebook"></span></a></li>
<li><a href="https://twitter.com/AicSku" target="_blank"><span class="fa fa-twitter"></span></a></li>
<li><a href="https://www.linkedin.com/company/aic-sku" target="_blank"><span class="fa fa-linkedin"></span></a></li>
<li><a href="live:aicsku.ap" target="_blank"><span class="fa fa-skype"></span></a></li>
</ul>
</div>
</div>
</div>
</div>

<div class="header-upper">
<div class="auto-container">
<div class="wrapper-box">

<div class="logo pull-left " >
<img src="assets/web/images/logo-5.png" style="width: 300px;" alt="" title=""><!-- <span id="hr" style="height: 100px;"></span> -->
<!-- <img src="assets/web/images/logo-2.png"  style="width: 250px;" alt=""> -->

</div>

<style type="text/css">
    #hr{
        border-left: 1px solid lightgray;
        height: 100px;
    }
</style>

<div class="logo-box">
</div>
<div class="logo-box">
<div class="logo">
<img src="assets/web/images/api1.png" style="width: 75px;"><span id="hr"></span>
<img src="assets/web/images/logo-3.png" style="width: 270px;">
</div>
</div>
</div>
<style type="text/css">
                    .linear-wipe {
    text-align: center;
    background: linear-gradient(to right, #000 20%, #e99a10 40%, #e99a10 60%, #000 80%);
        background-size: auto;
        background-clip: border-box;
    background-size: 200% auto;
    color: #000;
    background-clip: text;
    text-fill-color: transparent;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: shine 1s linear infinite;
}
                </style>


<br clear="all">

<style>
/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 10px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
  font-size: 18px;
}

/* Style the active class, and buttons on mouse-over */
.active, .btn:hover {
  background-color: #fa863e;
  color: white;
}
</style>


<div class="nav-outer" id="myDIV" >
<div style="position: absolute;  top: 50%;left: 50%; transform: translate(-50%,-50%); ">
<div class="mobile-nav-toggler" style="position: absolute; margin-bottom: 10%;"><span class="icon flaticon-menu-1"></span></div>


<nav class="main-menu navbar-expand-lg navbar-light">
<div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
<ul class="navigation clearfix" >

<li><a href="index.php" class="btn active">Home</a></li>
<li><a href="courses.php" class="btn">Course</a>
</li>
<!-- <li><a href="enroll.php">Enroll Now</a>
</li> -->
<?php

if (strlen($_SESSION['email'] == 0)) {
  ?>
<li><a href="sign-up.php" class="btn">Sign In / Register</a></li>
<?php
}
else{
    ?>
  
    <li class="dropdown"><a href="#"><i class="fa fa-user fa-2x"> </i></a>
                                        <ul>
                                            <!-- <li><a href="#">Research</a></li> -->
                                            <li><a href="dashboard.php">Dashboard</a></li>
                                            <li><a href="profile1.php">Profile</a></li>
                                              <li><a href="logout.php">Logout</a></li>
                                        </ul>
                                    </li>
    <?php

}
?>



<script>
// Add active class to the current button (highlight it)
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
</script>
</div>
</ul>

</div>
</nav>

</div>

</style>

</div>
</div>


<div class="sticky-header">
<div class="auto-container clearfix">




<div class="logo pull-left "  >
    <img src="assets/web/images/logo-5.png" style="width: 300px;" alt="" title="">

</div>


<div class="logo pull-left" style="float: right;">
<img src="assets/web/images/api1.png" style="width: 75px;">
 <img src="assets/web/images/logo-3.png" style="width: 270px;">
</div>
<br> 
<<<<<<< HEAD
<div style="position: absolute;  top: 50%;left: 50%; transform: translate(-50%,-50%); ">
<div class="pull-right" style="float: left;">
</div>

<nav class="main-menu clearfix">

</nav>
</div>
</div>
</div>

<div class="mobile-menu">
<div class="menu-backdrop"></div>
<div class="close-btn"><span class="icon flaticon-cancel"></span></div>
<nav class="menu-box">
<div class="nav-logo"><a href="index.html"><img src="assets/web/images/logo.png" alt="" title=""></a></div>
<div class="menu-outer"></div>

<div class="social-links">
<ul class="clearfix">
<li><a href="#"><span class="fa fa-twitter"></span></a></li>
<li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
<li><a href="#"><span class="fa fa-instagram"></span></a></li>
<li><a href="#"><span class="fa fa-youtube"></span></a></li>
</ul>
</div>
</nav>
</div>
</header>


<div class="form-back-drop"></div>

<section class="hidden-bar-two">
<div class="inner-box">
<div class="cross-icon"><span class="fa fa-times"></span></div>
<div class="logo"><img src="images/logo.html" alt=""></div>
<div class="title">
<h2>Let's stay in touch</h2>
</div>

<div class="appointment-form">
<form method="post" action="http://aic-sku.com/contact.html">
<div class="form-group">
<input type="text" name="text" value="" placeholder="Name" required>
</div>
<div class="form-group">
<input type="email" name="email" value="" placeholder="Email Address" required>
</div>
<div class="form-group">
<textarea placeholder="Message"></textarea>
</div>
<div class="form-group">
<button type="submit" class="theme-btn btn-style-one">Submit now</button>
</div>
</form>
</div>

<div class="contact-info-box">
<h4>Visit Our Office</h4>
<div class="text">Flat A, 20/7, Reynolds Neck Str, North Helenaville, FV77 8WS</div>
<h4>Contact Us</h4>
<ul>
<li><a href="#">info@bioxin.com</a></li>
<li><a href="#">+324 123 45 978 & 01</a></li>
</ul>
</div>
</div>
</section>

</body>
</html>
=======
<div style="position: absolute;  top: 50%;left: 50%; transform: 
>>>>>>> 52301c9 (2nd)
