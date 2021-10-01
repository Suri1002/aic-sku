
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
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i|Oxygen:400,700|Pacifico&amp;display=swap" rel="stylesheet">
</head>

<body>

<?php 
include("header.php");
include("db_connection.php");

$modId = $_GET['id'];
$sql = $conn->prepare("select * from modules where id = $modId");
$sql->execute();
$result = $sql->get_result();
$row = $result->fetch_assoc();
$name = $row['name'];


?>

    <div class="container mt-6 pt-5">
      <div class="row">
        <div class="col-xl-4 order-xl-2">
          <div class="card card-profile">
     <!--        <img src="../assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top"> -->
    <!--  <video src="https://youtu.be/_uQrJ0TkZlc" ></video> -->
     <video width="418" height="240" controls>
  <source src="https://youtu.be/_uQrJ0TkZlc" type="video/mp4">
</video>
 <div class="text-center">
                  <button type="button" class="btn btn-primary mt-4 p-2"><a href="class.php?id=<?php echo($modId);?>" class="text-white">CONTINUE COURSE</a></button>
                </div>
           
            
<div class="text-center">
  complete all lessons to mark this <br> course as complete
</div>



            <div class="card-body pt-0">
              <div>
               <hr class="my-4" />
               <h3 align="center">Material Includes</h3>

               <p align="center"> &#10004;Materials included</p>
             </div>
                  <hr class="my-4" />
             <div>
                <i class="ni ni-cart text-green"></i>
                <span class="nav-link-text">You have been enrolled on <font color="green">July 19, 2021.</font></span>
              </a>
               

             </div>
              
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <style>
.checked {
  color: orange;
}
</style>

              </div>
              <h1><?php echo($name);?></h1>
            </div>

           <table>

<tr>
<td> <h6 class="text-center pt-3">Duration</h6></td>
<td> <h6 class="text-center pt-3">Total Enrolled</h6></td>
<td> <h6 class="text-center pt-3">Last Update</h6></td>
</tr>

<tr>
<td class="text-center pt-3"><b>15h</b></td>
<td class="text-center pt-3"><b>8</b></td>
<td class="text-center pt-3"><b>July 16, 2021</b></td>

</tr>              
</table>                <hr class="my-4" />

<tr>
                        <h4 class="pl-2 p-2">Course Status</h4>
                        <span class="completion mr-2 pl-2">67%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 67%;"></div>
                          </div>
                          <p class="pl-2">67% Completed</p>
                        </div>
                      </div>

                </tr>
<br>
<tr>
<h2 class="p-2">What will i Learn?</h2>
 <h4 class="pb-4 p-3"> &#10004;<b>Benitfits of the course</b></h4>
</tr>
  <center>

    <?php

    $sql = $conn->prepare("select * from catogory where moduleId = $modId");
    $sql->execute();
    $result = $sql->get_result();
    


    // $catogoryname = $row['name'];


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
              $sql1 = $conn->prepare("select * from videos where catogoryId = $catogoryid");
              $sql1->execute();
              $result1 = $sql1->get_result();
              while( $row1 = $result1->fetch_assoc())
             {

              $videoName = $row1['name'];
              $description = $row1['description'];
        ?>
          <div id="collapse<?php echo($i);?>" class="collapse"
              data-parent="#accordion">
            <div class="card-body">
              <?php echo($videoName);?>
            </div>
          </div>

          <?php

            }
          ?>
        </div>

          <?php
          $i++;
        }
        ?>
      
      </div>
    </div>
  </center>
  
  <script>
    $('.card-header').click(function() {
      $(this).find('i').toggleClass('fas fa-plus fas fa-minus');
    });
  </script>







                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.min5438.js?v=1.2.0"></script>
  <script>
    // Facebook Pixel Code Don't Delete
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window,
      document, 'script', '../../../connect.facebook.net/en_US/fbevents.js');

    try {
      fbq('init', '111649226022273');
      fbq('track', "PageView");

    } catch (err) {
      console.log('Facebook Track Error:', err);
    }
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
  </noscript>

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