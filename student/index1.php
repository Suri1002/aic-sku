<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="  ">
	<meta name="author" content="  ">
	<title> Student Dashboard </title>
	<link rel="favicon" href="assets1/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets1/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets1/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets1/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="assets1/css/style.css">


<link href="bootstrap.css" rel="stylesheet">
<link href="assets/web/css/revolution-slider.css" rel="stylesheet">
<link href="assets/web/css/style.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!-- <link href="assets/web/css/responsive.css" rel="stylesheet"> -->

<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i|Oxygen:400,700|Pacifico&amp;display=swap" rel="stylesheet"> -->
<!-- 
<meta name="description" content="GREETINGS ! Innovative Certification Courses Online learning is rapidly becoming one of the most cost-effective ways to educate the world’s rapidly expanding workforce. Register Now Enjoy Learning In times where small instructor-led classrooms tend to be the exception, electronic learning solutions can offer more collaboration and interaction with experts and peers, as well as a higher success rate than the Read More">
<link rel="canonical" href="http://course.conzurasolutions.com/"> -->
<!-- <meta property="og:site_name" content="-">
<meta property="og:type" content="article">
<meta property="og:title" content="Home -">
<meta property="og:description" content="GREETINGS ! Innovative Certification Courses Online learning is rapidly becoming one of the most cost-effective ways to educate the world’s rapidly expanding workforce. Register Now Enjoy Learning In times where small instructor-led classrooms tend to be the exception, electronic learning solutions can offer more collaboration and interaction with experts and peers, as well as a higher success rate than the Read More">
<meta property="og:url" content="http://course.conzurasolutions.com/">
<meta property="article:published_time" content="2021-07-15T14:33:45Z">
<meta property="article:modified_time" content="2021-08-19T05:09:36Z">
<meta name="twitter:card" content="summary">
<meta name="twitter:domain" content="course.conzurasolutions.com">
<meta name="twitter:title" content="Home -">
<meta name="twitter:description" content="GREETINGS ! Innovative Certification Courses Online learning is rapidly becoming one of the most cost-effective ways to educate the world’s rapidly expanding workforce. Register Now Enjoy Learning In times where small instructor-led classrooms tend to be the exception, electronic learning solutions can offer more collaboration and interaction with experts and peers, as well as a higher success rate than the Read More"> -->

</head>
<body>

	<?php
		include "header.php";
		$strconn=mysqli_connect("localhost","root","","aicsku");
		if(!$strconn)
			echo "Connection failed".mysqli_connect_error();
		else{}
	?>
	<?php
		$query = "SELECT * FROM subject LIMIT 1";
		$result = mysqli_query($strconn,$query);
		/*if($result)
		{
			echo "Sucess";
		}
		else{
			echo "failed";
		}*/
	?>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1> Dashboard</h1>
				</div>
			</div>
		</div>
	</header>

	<div id="courses">
		<section class="container">
			<h2>Available Courses</h2>
			<div class="row">
				<div class=" col-lg-8 col-md-4">
					<div class="featured-box">
					<a href="#">
						<i class="fa fa-cogs fa-2x"></i>
						<div class="text">
							<h3>CIEVD</h3>
							Certificate Course in Innovation, Entrepreneurship & Venture Development program comprises of core courses, skill certification, capstone projects and Action Learning Segments. 
							The objective of this course is to translate the learning in innovation and entrepreneurship into practice.  
						</div>
					</a>
					</div>
				</div>
			
				 <?php
			/*	while($row = mysqli_fetch_array($result))
				{
					echo '<div class="col-md-4">';
					echo '<div class="featured-box">';
					echo '<a href="new.php">';
					echo '<i class="fa fa-leaf fa-2x"></i>';
					echo '<div class="text">';
					echo '<h3>'.$row[0].'</h3>';
					echo $row[1];
					echo '</div>';
					echo '</a>';
					echo '</div>';
					echo '</div>';
				} */
				?> 
			</div>
		</section>
	</div>
<div class="container" >
	<div class="row">
	<div class=" col-lg-8 col-md-3" >
					<div class="featured-box">
					<a href="#">  </a>
						<i class="fa fa-user fa-2x"></i>
						<div class="text">
							<h3> Complete Your Profile </h3>
							complete your profile so people can know more about you! Go to Profile Settings
						</div>				
					</div>			

				</div>
				<div class="col-lg-4 col-md-3 " > 
					<div class="featured-box" id="percent" >75 Percent</div>
			</div>

			</div></div>

<!-- Dashboard overview -->

<div class="container" >
	<div class="row">
	<div class=" col-lg-4 col-md-3" >
					<div class="featured-box">
					<div class="text">	Enrolled Courses</div>
					<!-- <a href="#">  </a> -->
						<!-- <i class="fa fa-user fa-2x"></i> -->
						<div class="text">
							<h3> 1</h3>
						</div>				
					</div>
				</div>
				
				<div class=" col-lg-4 col-md-3" >
					<div class="featured-box">
					<div class="text">	Active Courses</div>
					<!-- <a href="#">  </a> -->
						<!-- <i class="fa fa-user fa-2x"></i> -->
						<div class="text">
							<h3> 1 </h3>
						</div>				
					</div>
				</div>

				<div class=" col-lg-4 col-md-3" >
					<div class="featured-box">
					<div class="text">	Completed Courses</div>

					<!-- <a href="#">  </a> -->
						<!-- <i class="fa fa-user fa-2x"></i> -->
						<div class="text">
							<h3> 0 </h3>
						</div>				
					</div>
				</div>
				
				<div class=" col-lg-4 col-md-3" >
					<div class="featured-box">
					<div class="text">	Total Students</div>
					<!-- <a href="#">  </a>
						<i class="fa fa-user fa-2x"></i> -->
						<div class="text">
							<h3> 10 </h3>
						</div>				
					</div>
				</div>

				<div class=" col-lg-4 col-md-3" >
					<div class="featured-box">
					<div class="text">Total Courses</div>

					<!-- <a href="#">  </a>
						<i class="fa fa-user fa-2x"></i> -->
						<div class="text">
							<h3> 0 </h3>
						</div>				
					</div>
				</div>

				<div class=" col-lg-4 col-md-3" >
					<div class="featured-box">
					<div class="text">Total Earnings</div>

					<!-- <a href="#">  </a>
						<i class="fa fa-user fa-2x"></i> -->
						<div class="text fas fa-rupee-sign">
							<h3  > 0  </h3>
						</div>				
					</div>
				</div>


			</div></div>


	<?php
		include "../footer.php";
	?>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>

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
