<?php
error_reporting(0);
session_start();

if ($_SESSION['email'] == 0) {
    # code...
    header("location:sign-up.php");
}

?>

<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>AIC-SKU</title>
<!-- Stylesheets -->
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
include("db_connection.php");
$sql = $conn->prepare("select * from modules");
$sql->execute();
$result = $sql->get_result();
                        
?>

<section class="product-section style-two" style="margin-bottom: -7em;">
    <div class="auto-container">
        <div class="sec-title text-center">
        
            <h1 style="color:#FF9933" class="pb-4"> Modules</h1>
        </div>
        <div class="mixitup-gallery">
         <div class="filter-list row clearfix">
            <?php
            $i = 1;
            while($row = $result->fetch_assoc())
            {
                $id = $row['id'];
                $name = $row['name'];
               

            ?>
            <div class="shop-item col-lg-3 col-md-6 mix mix_all 1">
                <div class="inner-box ">
                    <div class="image-box" align="center">
                             <img src="images/<?php echo($i);?>.png" alt="" style="width: 50px; margin: 0 auto; padding-top: 5px;">
                             <h5 class="p-2 pt-3" ><?php echo($name);?></h5>
                             <i class=" p-1 fa fa-user "> 8 </i> 
                             <i class="fa fa-clock-o">15H</i>
                             <h6> By Conzura</h6>
                    </div>
                    <div class="p-5" align="center">
                        <button class="btn btn-success"><a href="mod.php?id=<?php echo($id)?>" class="text-white">Continue</a></button>
                    </div>    
              </div>
            </div>
<?php
$i++;
}
?>
       </div>
        </section>


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