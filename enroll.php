
<?php
session_start();
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>

    
<meta charset="utf-8">
<title>AIC-SKU COURSES</title>
<!-- Stylesheets -->
<link href="assets/web/css/bootstrap.css" rel="stylesheet">
<link href="assets/web/css/revolution-slider.css" rel="stylesheet">
<link href="assets/web/css/style.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="assets/web/css/responsive.css" rel="stylesheet">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i|Oxygen:400,700|Pacifico&amp;display=swap" rel="stylesheet">


	<!-- All in One SEO 4.1.3.3 -->
    <meta name="description" content="GREETINGS ! Innovative Certification Courses Online learning is rapidly becoming one of the most cost-effective ways to educate the world’s rapidly expanding workforce. Register Now Enjoy Learning In times where small instructor-led classrooms tend to be the exception, electronic learning solutions can offer more collaboration and interaction with experts and peers, as well as a higher success rate than the Read More">
    <link rel="canonical" href="http://course.conzurasolutions.com/">
    <meta property="og:site_name" content="-">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Home -">
    <meta property="og:description" content="GREETINGS ! Innovative Certification Courses Online learning is rapidly becoming one of the most cost-effective ways to educate the world’s rapidly expanding workforce. Register Now Enjoy Learning In times where small instructor-led classrooms tend to be the exception, electronic learning solutions can offer more collaboration and interaction with experts and peers, as well as a higher success rate than the Read More">
    <meta property="og:url" content="http://course.conzurasolutions.com/">
    <meta property="article:published_time" content="2021-07-15T14:33:45Z">
    <meta property="article:modified_time" content="2021-08-19T05:09:36Z">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:domain" content="course.conzurasolutions.com">
    <meta name="twitter:title" content="Home -">
    <meta name="twitter:description" content="GREETINGS ! Innovative Certification Courses Online learning is rapidly becoming one of the most cost-effective ways to educate the world’s rapidly expanding workforce. Register Now Enjoy Learning In times where small instructor-led classrooms tend to be the exception, electronic learning solutions can offer more collaboration and interaction with experts and peers, as well as a higher success rate than the Read More">
    <script type="application/ld+json" class="aioseo-schema">
        {"@context":"https:\/\/schema.org","@graph":[{"@type":"WebSite","@id":"http:\/\/course.conzurasolutions.com\/#website","url":"http:\/\/course.conzurasolutions.com\/","publisher":{"@id":"http:\/\/course.conzurasolutions.com\/#organization"},"potentialAction":{"@type":"SearchAction","target":"http:\/\/course.conzurasolutions.com\/?s={search_term_string}","query-input":"required name=search_term_string"}},{"@type":"Organization","@id":"http:\/\/course.conzurasolutions.com\/#organization","url":"http:\/\/course.conzurasolutions.com\/"},{"@type":"BreadcrumbList","@id":"http:\/\/course.conzurasolutions.com\/#breadcrumblist","itemListElement":[{"@type":"ListItem","@id":"http:\/\/course.conzurasolutions.com\/#listItem","position":"1","item":{"@type":"WebPage","@id":"http:\/\/course.conzurasolutions.com\/","name":"Home","description":"GREETINGS ! Innovative Certification Courses Online learning is rapidly becoming one of the most cost-effective ways to educate the world\u2019s rapidly expanding workforce. Register Now Enjoy Learning In times where small instructor-led classrooms tend to be the exception, electronic learning solutions can offer more collaboration and interaction with experts and peers, as well as a higher success rate than the Read More","url":"http:\/\/course.conzurasolutions.com\/"}}]},{"@type":"WebPage","@id":"http:\/\/course.conzurasolutions.com\/#webpage","url":"http:\/\/course.conzurasolutions.com\/","name":"Home -","description":"GREETINGS ! Innovative Certification Courses Online learning is rapidly becoming one of the most cost-effective ways to educate the world\u2019s rapidly expanding workforce. Register Now Enjoy Learning In times where small instructor-led classrooms tend to be the exception, electronic learning solutions can offer more collaboration and interaction with experts and peers, as well as a higher success rate than the Read More","inLanguage":"en-US","isPartOf":{"@id":"http:\/\/course.conzurasolutions.com\/#website"},"breadcrumb":{"@id":"http:\/\/course.conzurasolutions.com\/#breadcrumblist"},"datePublished":"2021-07-15T14:33:45+00:00","dateModified":"2021-08-19T05:09:36+00:00"}]}
    </script>
<style type="text/css">
    .inner-box{
box-shadow: 2px 2px 5px rgb(185, 185, 185) ;
border-top-left-radius:20%;
border-bottom-right-radius:20%;
}
p{
    font-size: 1.2em;  
    text-align: left;  
}
h5{
    font-weight:bold;
}
.inner-box img{
    border-top-left-radius: 20%;
}
</style>
</head>
<body >

<?php include('header.php'); ?>

<section class="product-section style-two" style="margin-top:50px">
    <div class="auto-container">
                <div class="sec-title text-center">
            <h2 style="color:#3336ff">Start your new venture by purchasing</h2>
        </div>

             <div class="row">
                                          
                        
            <?php
                        include("db_connection.php");
                        $sql = $conn->prepare("select * from products");
                        $sql->execute();
                        $result = $sql->get_result();
                        while($row = $result->fetch_assoc())
                        {

            ?>
            
           
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 pt-5" align="center">
                    <div class="inner-box"> 
                        <div>
                            <img style="height: 200px;width: 100%;" src="Admin/examples/products/<?php echo($row['productImage']);?>" alt="<?php echo($row['productImage']);?>">
                        </div>      
                            <div class="p-4" >                             
                                <p class="text-center"><b><?php echo($row['productName']);?></b></p>
                                <h6 class="pb-2 text-center">Rs&nbsp;<?php echo($row['productPrice']);?></h6>
                                <button class="btn btn-success">BUY COURSE</button>
                            </div>
                       
                    </div>
                </div>
             
              
                <?php
                }          
                ?>
                <div class="pt-5" align="center">
                    <a href="courses_modules.php" class="btn btn-success">Enroll Now</a>
                </div>
                  </div>   
       
    </div>
</section>

<?php include('footer.php'); ?>

    
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