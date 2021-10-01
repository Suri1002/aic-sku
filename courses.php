
<?php
error_reporting();
session_start();

include "db_connection.php";
$email = $_SESSION['email'];
$sql2 = $conn->prepare("select * from students where email = '$email' ");
        $sql2->execute();
        $result2 = $sql2->get_result(); 
        $row2 = $result2->fetch_assoc();
        $stdName = $row2['username'];
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
</head>

<body>

<?php
    include("header.php");
?>


<section class="banner-section container pt-5" style="height: 50px;">
<div class="banner-carousel themeactive-carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":false, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>

<div class="slide-item">
<div class="image-layer lazy-image" data-bg="url('images/orange.jpg')"></div>
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

<section class="product-section style-two">
</section>
<section class="product-section style-two">
</section>
<section class="product-section style-two">
</section>
<section class="product-section style-two">
</section>
<section class="product-section style-two">
</section>
<section class="product-section style-two">
</section>




    

<br>


    <!--End Banner Section -->

    <!-- About Section -->
    
    <section class="container">
        <div class="container">

<div class="auto-container">
<div class="sec-title text-center" >

<div class="icon-box">
 
  <img src="images/logo-1.png" height="35px" width="35px"> 

</div>

</div>
</div>
            <h4 class="text-success text-center"><b>About Course</b></h4>
        </div>
        <div class="p-3" style="line-height: 2em;">
            Certificate Course in Innovation, Entrepreneurship & Venture Development program comprises of core courses, skill certification, capstone projects and Action Learning Segments. The objective of this course is to translate the learning in innovation and entrepreneurship into practice. This course grants students the necessary skills to travel the path of entrepreneurship and eventually setup ventures of their own or offer services in venture development domain. This outcome-oriented program is designed to deliver in phases and modules. This will simultaneously enable students to apply their entrepreneurial skills in real life situations, validate ideas, build innovations, test market and build a successful venture out of it. This program will be offered by Centre for Skill Development, Entrepreneurship and Incubation(CSDEI), Sri Krishnadevaraya University in association with AIC-SKU Confederation (AIC-SKU), an Atal Incubation Centre supported by Atal Innovation Mission, NITI Aayog, Govt. of India.
        </div>
    </section>
    <section class="container">
        <!-- <video controls width="100%" height="50%">
            <source src="https://youtu.be/seLncI1DFxM">
        </video> -->

        <iframe align="center" width="75%" height="360px" src="https://www.youtube.com/embed/JaUCiKTNBxQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>
<br><br>

<div class="auto-container">
<div class="sec-title text-center" >

<div class="icon-box" style="margin-bottom:-10px;">
 
  <img src="images/logo-1.png" height="35px" width="35px"> 

</div>
</div>
</div>


    <style type="text/css">
        .block{
            transition: .5s;

        }
        .block:hover{
            transition: .5s;
        }
        .box, .boxhover{
             transition: .5s;
            padding: 3em;
            background: lightblue;
            border-radius: 8px;
            box-shadow: 4px 5px 7px lightgray;
        }

        .block .boxhover{
            transition: .5s;
            display: none;
        }
        .block:hover .box{
            transition: .5s;
            display: none;
        }
        .block:hover .boxhover{
            transition: .5s;
            background: orange;
            display: block;
            
        }
    </style>

<!-- Modules -->

<div class="container pt-5">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 pb-2 block">
                <div class="box" align="center">
                <img src="images/1.png" alt="" style="width: 100px; margin: 0 auto; padding-top: 5px;border-radius: 20px;">
                    <h5 class="pt-4">Introduction to Entrepreneurship</h5>
                    <span class="h2 font-weight-bold mb-0">     &nbsp;</span> 
                    <!-- <h6>Time: 15 Hours</h6> -->
                </div>
                <div class="boxhover">
                    <!-- <h4>CREDITS: 1</h4> -->
                <p class="text-white"><h5>CREDITS :1</h5><br>Universal Human Values; Entrepreneurial Behavior &amp; Leadership; Entrepreneurship and economic development; and more....</p>   
                     
                </div>
            </div>  


 <div class="col-lg-4 col-md-4 col-sm-6 col-12 pb-2 block">
                <div class="box" align="center">
                <img src="images/2.png" alt="" style="width: 100px; margin: 0 auto; padding-top: 5px;border-radius: 20px;">
                    <h5 class="pt-4">Innovation through design thinking</h5>
                    <span class="h2 font-weight-bold mb-0">     &nbsp;</span>
                    <!-- <h6>Time: 15 Hours</h6> -->
                </div>
                <div class="boxhover">
                    <!-- <h4>CREDITS: 1</h4> -->
                <p class="text-white"><h5>CREDITS :1</h5><br>
Ideation- Generation, Articulation and Testing of Ideas; Contemporary Technology Tools & Trends; Design Innovations in the daily life Human v/s Product centered Design and more .....</p>         
                </div>
            </div>  



             <div class="col-lg-4 col-md-4 col-sm-6 col-12 pb-2 block">
                <div class="box" align="center">
                <img src="images/3.png" alt="" style="width: 100px; margin: 0 auto; padding-top: 5px;border-radius: 20px;">
                    <h5 class="pt-4" >Venture Development           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                   <span class="h2 font-weight-bold mb-0">     &nbsp;</span> 
                    <!-- <h6>Time: 15 Hours</h6> -->
                </div>
                <div class="boxhover">
                    <!-- <h4>CREDITS: 1</h4> -->
                <p class="text-white"><h5>CREDITS :1</h5><br>
Procedure of IP protection in India and Globally; Indiaâ€™s First National IPR Policy, its Vision and details; Significance of IP & International Treaties; Licensing of IP rights; Assignment vs Licensing; and more ....</p>         
                </div>
            </div> 







             <div class="col-lg-4 col-md-4 col-sm-6 col-12 pb-2 block">
                <div class="box" align="center">
                <img src="images/4.png" alt="" style="width: 100px; margin: 0 auto; padding-top: 5px;border-radius: 20px;">
                    <h5 class="pt-4">IPR &amp; Technology Transfe</h5>
<span class="h2 font-weight-bold mb-0">     &nbsp;</span> 
<span class="h2 font-weight-bold mb-0">     &nbsp;</span> 

                    <!-- <h6>Time: 15 Hours</h6> -->
                </div>
                <div class="boxhover">
                    <!-- <h4>CREDITS: 1</h4> -->
                <p class="text-white"><h5>CREDITS :1</h5><br>
Organizational Design and Management; Talent & Team Management; Fundamentals of Financial Management; Market Estimation & Forecasting; Pricing Strategy ; Venture Growth Strategies; and more...</p>         
                </div>
            </div>  


             <div class="col-lg-4 col-md-4 col-sm-6 col-12 pb-2 block">
                <div class="box" align="center">
                <img src="images/5.png" alt="" style="width: 100px; margin: 0 auto; padding-top: 5px;border-radius: 20px;">
                    <h5 class="pt-4" style="font-size: 139%;">Startup Establishment Module - Project Work/Internship    &nbsp;</h5>
                    <!-- <h6>Time: 15 Hours</h6> -->
                </div>
                <div class="boxhover">
                    <!-- <h4>CREDITS: 1</h4> -->
                <p class="text-white"><h5>CREDITS :1</h5><br>
                Action Learning Segment: Venture Establishment Phase at Incubators; involves activities pertaining to either work on own startup/ idea or working in association with an emerging startup.</p>         
                </div>
            </div>  


             <div class="col-lg-4 col-md-4 col-sm-6 col-12 pb-2 block">
                <div class="box" align="center">
                <img src="images/5.png" alt="" style="width: 100px; margin: 0 auto; padding-top: 5px;border-radius: 20px;">
                    <h5 class="pt-4" style="font-size: 139%;">Startup Establishment Module - Project Work/Internship    &nbsp;</h5>
                    <!-- <h6>Time: 15 Hours</h6> -->
                </div>
                <div class="boxhover">
                    <!-- <h4>CREDITS: 1</h4> -->
                <p class="text-white"><h5>CREDITS :1</h5><br>
                Action Learning Segment: Venture Establishment Phase at Incubators; involves activities pertaining to either work on own startup/ idea or working in association with an emerging startup.</p>         
                </div>
            </div> 

        </div>
</div>


<div class="container p-5">
     <?php 
        
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
                        <a href="sign-up.php" class="btn btn-success p-2">Register Now</a>
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
                        <a href="razorpay/index.php" class="btn btn-success p-2">Buy now</a>
                    </div>

            <?php
        }
         }      
    ?>   
</div>
          
<style type="text/css">
    .modules{
            box-shadow: 4px 5px 7px lightgray;
            padding: 10px;
    }
    .modules:hover{
        box-shadow: 4px 5px 10px lightgray;
    }
</style>
<br><br>

<div class="auto-container">
<div class="sec-title text-center" >

<div class="icon-box">
 
  <img src="images/logo-1.png" height="35px" width="35px"> 

</div>
</div>
</div>

<section class="container pt-5">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <a data-toggle="modal" data-target="#myModal1"> 
            <div class="p-3 modules" align="center">
                <img src="img/WhatsApp-Image-2021-07-14-at-12.12.25-PM.jpeg" width="20%">
                <div class="p-2">
                    <h5 class="text-center">Learning Outcomes</h5>
                   <span class="h2 font-weight-bold mb-0">     &nbsp;</span>
                </div>
            </div></a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <a data-toggle="modal" data-target="#myModal2"> 
             <div class="p-3 modules" align="center">
                <img src="img/details.png" width="20%">
                <div class="p-2">
                    <h5 class="text-center">Details of the course</h5>
                     <span class="h2 font-weight-bold mb-0">     &nbsp;</span>
                </div>
            </div></a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <a data-toggle="modal" data-target="#myModal3"> 
            <div class="p-3 modules" align="center">
                <img src="img/teach.jpg" width="20%">
                <div class="p-2">
                    <h5 class="text-center">Teaching & Infrastructure facility</h5>
                     <span class="h2 font-weight-bold mb-0">     &nbsp;</span>
                </div>
            </div></a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <a data-toggle="modal" data-target="#myModal4"> 
            <div class="p-3 modules" align="center">
                <img src="img/method-1.jpg" width="20%">
                <div class="p-2">
                    <h5 class="text-center">The implementation methodology</h5>
                     <span class="h2 font-weight-bold mb-0">     &nbsp;</span>
                     
                </div>
            </div></a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <a data-toggle="modal" data-target="#myModal5"> 
            <div class="p-3 modules" align="center">
                <img src="img/Eligilibity-1-300x296.jpg" width="20%">
                <div class="p-2">
                    <h5 class="text-center">Eligibilty & Selection</h5>
                    <span class="h2 font-weight-bold mb-0">     &nbsp;</span>
                </div>
            </div>
        </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <a data-toggle="modal" data-target="#myModal6"> 
            <div class="p-3 modules" align="center">
                <img src="img/Fees.jpg" width="20%">
                <div class="p-2">
                    <h5 class="text-center">Fees Structure</h5>
                     <span class="h2 font-weight-bold mb-0">     &nbsp;</span>
                </div>
            </div>
        </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <a data-toggle="modal" data-target="#myModal7"> 
            <div class="p-3 modules" align="center">
                <img src="img/Career.jpg" width="20%">
                <div class="p-2">
                    <h5 class="text-center">Career Prospects and Employment Opportunity</h5>
                    
                </div>
            </div></a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <a data-toggle="modal" data-target="#myModal8"> 
            <div class="p-3 modules" align="center">
                <img src="img/Awards.jpg" width="20%">
                <div class="p-2">
                    <h5 class="text-center">Awarding Diploma</h5>
                     <span class="h2 font-weight-bold mb-0">     &nbsp;</span>
                </div>
            </div></a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <a data-toggle="modal" data-target="#myModal9"> 
            <div class="p-3 modules" align="center">
                <img src="img/Other-Benefits-1.jpg" width="20%">
                <div class="p-2">
                    <h5 class="text-center">Other Benefits</h5>
                     <span class="h2 font-weight-bold mb-0">     &nbsp;</span>
                </div>
            </div></a>
        </div>
    </div>
</section>



<div class="auto-container" style="padding-top: 50px">
<div class="sec-title text-center" >

<div class="icon-box">
 
  <img src="images/logo-1.png" height="35px" width="35px"> 

</div>

</div>
</div>







<!-- Learning Outcomes -->

<div class="container">
  <div class="modal" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <!-- Modal body -->
        <div class="modal-body">
        By the end of this course, students will have a knowledge and understanding of Key concepts of entrepreneurship, innovation and new venture development
How to take an idea, build a prototype and launch to early customers in the market.Demonstrate how to Market and Idea/Prototype to early customers
Knowledge of IPR & Technology Transfer Knowledge of Business Models and Fund Raising Knowledge of Indian Start-up Ecosystem Working experience with Incubator as a startup
        </div>
       
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>  
</div>


<!-- Details of the course -->

<div class="container">
  <div class="modal" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <!-- Modal body -->
        <div class="modal-body">
        The course will be delivered through blended mode-online and offline methods. At least 15 % of the course shall be delivered on contact mode.
Candidates completing of all the five modules with assignments and assessments successfully will be awarded a <b>Certificate Course in " Innovation, Entrepreneurship & Venture Development"<b> by the University.
This course is jointly offered by CSDEI, in association with AIC-SKU, a world class Incubator supported by Atal Innovation Mission, NITI Aayog, Govt. of India.
 AIC-SKU will conduct the course curriculum at industry standards with continuous internal assessment. 
CSDEI will conduct the end examination and issue the certificates with grades and credits.
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>  
</div>


<!-- Teaching & Infrastructure facility -->

<div class="container">
  <div class="modal" id="myModal3">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <!-- Modal body -->
        <div class="modal-body">
        Sri Krishnadevaraya University happens to be the only state funded University in the country, to have a three years of standing since the establishment of Atal Incubation Centre by Atal Innovation Mission, NITI Aayog, Govt. of India in 2017. 
        The program will be offered under the direct supervision of AIC-SKU and under administrative control of SKU. 
        Hard and soft resources of AIC-SKU will be used to deliver the program. AIC will draw the expertise within and outside such as engagement of successful start-ups, mentor-experts,  Intellectual Property and regulatory experts, design experts to teach and deliver the program.</div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>  
</div>


<!-- The implementation methodology -->

<div class="container">
  <div class="modal" id="myModal4">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <!-- Modal body -->
        <div class="modal-body">
        This Course will be implemented in AIC-SKU having a state of the art full-fledged incubation and innovation infrastructure and service facilities, as flagship program to standardize and quality delivery. 
        Program is intended to make students to traverse a path from Ideation to inception and venture incorporation of new start-ups in responses to specific known market demand or problem identified through ideations and action learning segments.
         AIC-SKU will adopt a proctored online platform to have a regular review of quality of delivery and performance assessment.        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>  
</div>


<!-- Eligibilty & Selection -->

<div class="container">
  <div class="modal" id="myModal5">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <!-- Modal body -->
        <div class="modal-body">
        The minimum eligibility for undertaking this course would be 10th class pass with a minimum of 50% marks.
         Merit based transparent selection process shall be adopted to get the desired students.
          The medium of instruction will be English. Since the majority of the course will be delivered online, it is necessary for the candidate to have a good laptop/PC or a smart phone with a reasonably good internet connection.
         The instructions regarding the course would be communicated through a valid E Mail ID.        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>  
</div>


<!-- Fees Structure -->

<div class="container">
  <div class="modal" id="myModal6">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <!-- Modal body -->
        <div class="modal-body">
        Fee for each module is Rs.1999/- inclusive of taxes.
Fee for the Entire Course (5 Modules) is Rs. 9499/- inclusive of taxes, for One time Registration
For those candidates who register for the entire course and complete all the modules in a single attempt, Rs.499/- will be refunded.        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>  
</div>


<!-- Career Prospects and Employment Opportunity -->

<div class="container">
  <div class="modal" id="myModal7">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <!-- Modal body -->
        <div class="modal-body">
        The objective of this program is to prepare young minds towards self-employment and create employment opportunity for others through enterprise development.
         It is expected that, more job creators will come out and probably start and thrive with their own start-ups launched during the study period.
         Successful candidates will find lots of opportunities to team up with start-ups as co-founder or core team because of their close understanding and working experience in innovation and entrepreneurship throughout their study period. 
        Furthermore, they will be preferred to get the assignment to coordinate and associate with pre-incubation centres in academics such as Entrepreneurship Development Cells (EDC), TBI, IEDC, New Gen IEDC, Start-up Cell, Innovation Cell etc...
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>  
</div>


<!-- Awarding Diploma -->

<div class="container">
  <div class="modal" id="myModal8">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <!-- Modal body -->
        <div class="modal-body">
        The total credits for this course will be 05.  Each module is segmented to be delivered in 15 hours.
         The duration of this course is 60 hours. The examination will be conducted in TWO parts- Continuous Internal Assessment (CIA) that includes assignments & quizzes.
          A maximum of 02 CIA activities will be conducted per module. A total of 8 CIA activities will be conducted during the course. Each CIA activity will carry a maximum of 0.25 credits. Therefore, all the CIA activities would carry 02 credits.  
        The Certificate will be issued only to those candidates successfully completing all the FIVE modules and securing a minimum of 50% marks
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>  
</div>


<!-- Other Benefits -->

<div class="container">
  <div class="modal" id="myModal9">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <!-- Modal body -->
        <div class="modal-body">
        All the Successful candidates are eligible to work as interns in their domains with a access for free counseling and guidance  through a network of experts/mentors with AIC-SKU.
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
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