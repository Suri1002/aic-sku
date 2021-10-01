
<?php
session_start();
// error_reporting(0);

include("db_connection.php");

$error = "";

// Login Module

if(isset($_POST['login']))
{
    $admin = $_POST['username'];
    $password = $_POST['password'];
    

    $sql = $conn->prepare("select * from admin where name = ? ");
    $sql->bind_param("s", $admin);
    $sql->execute();
    $result = $sql->get_result();
    $row = $result->fetch_assoc();
    $Db_name = $row['name'];
    $Db_password = $row['password'];

    //if(count($result) >= 1)
    //{
        if($Db_name == $admin && $Db_password == $password){
        $_SESSION['name'] = $admin;
        echo "1";
        header('location:index.php');
        }
        else{
            $error = "Invalid Email id or password";
        }
    //}
    //else $mailerror = "Email is not registered, please create an account";;                       
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
    <style type="text/css">

    @media only screen and (max-width: 769px)
      { 
        .rightnav{display: none;}
      }

        input[type='text'],input[type='email'],input[type='password']
        {
            border: none;
            outline: none;
            border-bottom: 1px solid gray;
            width: 70%;
        }

        .error{width: 70%;}
         .btn-grad {background-image: linear-gradient(to right, #314755 0%, #26a0da  51%, #314755  100%);}
         .btn-grad {text-transform: uppercase;transition: 0.5s;background-size: 200% auto;color: white;box-shadow: 0 0 20px #eee;border-radius: 40px;display: block;width: 70%; border:none;}

          .btn-grad:hover {
            background-position: right center;
            color: #fff;
            text-decoration: none;
          }
         
         .model{
            box-shadow: 4px 3px 14px 7px lightgray;
            /*position: relative;*/
            width: 380px;
            /*height: 600px;*/
         }
         .text-grad{background: linear-gradient(to bottom right, #A22FCE, #FF7000); -webkit-background-clip: text; -webkit-text-fill-color: transparent;}
         .passerror{display: none;}
    </style>
</head>

<body>


<section class="container">
         <div class="col-lg-6 col-md-6 col-sm-6 col-12" align="center" style="padding-top: 3em;">
            <h5 class="text-center text-danger pt-2"><?php echo($error);?></h5>
           <!-- <h5 class="text-center text-danger pt-2"><?php echo "$mailerror";?></h5> -->
             <div class="model col-10 pt-4" style="border-radius: 20px;">
            <!-- <svg style="border-radius: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e7008a" fill-opacity="1" d="M0,192L80,160C160,128,320,64,480,85.3C640,107,800,213,960,240C1120,267,1280,213,1360,186.7L1440,160L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg> -->

            <h3 class="mb-4 text-center text-grad">LOGIN</h3>
            <form action="" method="post" class="pt-3">
                <div class="mb-4" align="center">
                    <!-- <label for="email" class="email">Email id</label><br> -->
                    <input type="text" class="text-center" name="username" placeholder="username" required>
                </div>

                <div class="mb-4" align="center">
                    <!-- <label for="email">Password</label><br> -->
                    <input type="password" class="text-center" name="password" placeholder="Your Password" required>

                </div>

                <div align="center" class="mt-4 mb-4 pb-4">
                    <input type="submit" class="btn-grad p-2" name="login" id="submit">
                </div>
            </form>
        </div>
        </div>
</section>
  

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