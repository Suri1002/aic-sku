
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>  
<script>   
$(document).ready(function(){  
    $("#flip").click(function(){  
        $("#panel").slideToggle("slow");  
    });  
});  
</script>
<style type="text/css">
  #panel {  
    padding: 10px;  
    display:none;  
} 
</style>
<body>

<?php 
include("header.php");
$modid = $_SESSION['id'];

?>

<style type="text/css">
  #boldtype{
    text-transform: uppercase;
    font-weight: bold;
  }
  #flip{
    border: 1px solid lightgray;
    padding: 1em;
    width: 100%;
    cursor: pointer;
  }
</style>

<section class="container pt-5">
<div class="row">
   <?php 
        include("db_connection.php");
                 
    ?>
  <div class="col-lg-4 col-md-4 col-sm-12 col-12">

            <center>
  <?php
    $sql = $conn->prepare("select * from catogory where moduleId = $modid");
    $sql->execute();
    $result = $sql->get_result();

    ?>

    <div class="container">
      <div id="accordion">
        <?php
        $i = 1;
        while($row = $result->fetch_assoc())
        {
          $catogoryname = $row['name'];
          $catogoryid = $row['id'];
          ?>

           <div class="card">
          <button class="card-header collapsed card-link"
              data-toggle="collapse"
              data-target="#collapse<?php echo($i);?>">
            <b class="header-title float-left">
              <?php echo($catogoryname);?>
            </b>
            <!-- <i class="fas fa-plus float-right "></i> --><span style="font-size: 18px;float: right;">+</span>
          </button>
          <?php
              // $description2 = $description1 = $summary = "";
              $sql1 = $conn->prepare("select * from videos where catogoryId = $catogoryid");
              $sql1->execute();
              $result1 = $sql1->get_result();
              while( $row1 = $result1->fetch_array())
             {
              $videoId = $row1['id'];
              // $_SESSION['videoid'] = $videoId;
              $videoName = $row1['name'];
        ?> 
          <div id="collapse<?php echo($i);?>" class="collapse"
              data-parent="#accordion">
            <div class="card-body">
             <li> <a id="boldtype" href="class_video.php?name=<?php echo($videoName);?>"> <?php echo($videoName);?></a></li>
            </div>

          <?php
          $sql2 = $conn->prepare("select * from quiz where catogoryid = $catogoryid limit 1");
              $sql2->execute();
              $result2 = $sql2->get_result();
              $row2 = $result2->fetch_array();

              $quizId = $row2['id'];
        ?>
       

          </div>

          

          <?php
            }
            
?>
             <div id="collapse<?php echo($i);?>" class="card-body collapse" data-parent="#accordion">
             <li> <a id="boldtype" href="quizes.php?id=<?php echo($quizId);?>"> Quiz</a></li>
            </div>
<?php
$i++;
          
?>
        </div>

          <?php
        }
        ?>
      
      </div>
    </div>
  </center>
  </div>
 
  <div class="col-lg-8 col-md-8 col-sm-12 col-12">
    <?php
    $videoId = $_GET['name'];

              $sql = $conn->prepare("select * from videos where name = '$videoId' ");
              $sql->execute();
              $result = $sql->get_result();
              $row = $result->fetch_assoc();
             
              $videoId = $row['id'];
              $videoName = $row['name'];
              $video = $row['video'];
              // $description = $row['description'];
              $description1 = $row['description1'];
              $description2 = $row['description2'];
              $summary = $row['summary'];
        ?> 
        <div class="container p-5">
          <p style="text-align: justify;"><?php echo($description1);?></p>
        </div>
        <div class="pt-2 pb-2 float-left">
          <button onclick="goBack()" class="btn btn-danger">Previous</button>
              <script>
              function goBack() {
              window.history. back();
              }
              </script>
        </div>
        <div class="pt-2 pb-2 float-right">
          <button onclick="goBack()" class="btn btn-success">Next</button>
              <script>
              function goBack() {
              window.history. farword();
              }
              </script>
        </div>
        <div class="">
          <video controls width="100%">
            <source src="Admin/examples/videos/<?php echo($video);?>" type="">
          </video>
        </div>
        <div class="container p-3">
          <p style="text-align: justify;"><?php echo($description2);?></p>
        </div>
        <div class="container pl-3 pr-3 pb-3">
          <h3>Summary</h3>
          <p style="text-align: justify;" class="container pt-2"><?php echo($summary);?></p>
        </div>
  </div>
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
