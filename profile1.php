<?php
error_reporting(0);
session_start();

if ($_SESSION['email'] == 0) {
  // code...
  include "sign-up.php";
}
else
{
include "db_connection.php";
$email = $_SESSION['email'];
 $sql2 = $conn->prepare("select * from students where email = '$email' ");
        $sql2->execute();
        $result2 = $sql2->get_result(); 
        $row2 = $result2->fetch_assoc();
        $stdName = $row2['username'];
        $stdId = $row2['id'];
        $firstName = $row2['firstName'];
        $lastName = $row2['lastName'];

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
       

if (isset($_POST['submit'])) {
  $image = $_POST['image'];
  // $productName = $_POST['Name'];
  // $productPrice = $_POST['Price'];
  
  // $productDes = $_POST['description'];
  // $pimage = $_POST['pimage'];

  if (isset($_FILES['image']['name'])) {
    $image = $_FILES['image']['name'];
    // if ($image!="") {
      # code...
    
    // $ext = end(explode('.', $image));
    // $image = "Millet-item-".rand(0000,9999).".".$ext;
    $sourcePath = $_FILES['image']['tmp_name'];
    $destinationPath = "images/".$image;

    $upload = move_uploaded_file($sourcePath,$destinationPath);

    if($upload == true)
    {
      echo "<script>Updated successfully</script>";
    }
  // }
  }
  else $image = "";

  $sql3 = $conn->prepare("select * from profiles where StudentId = '$stdId' ");
        $sql3->execute();
        $result3 = $sql3->get_result(); 
        $row3 = $result3->fetch_assoc();
        $stdid = $row3['StudentId'];

        if($stdid == $stdId)
        {
          $sql = mysqli_query($conn, "UPDATE `profiles` SET `Image`= '$image' WHERE StudentId = '$stdId' ");
            if($sql) echo "<script>alert('Profile updated');</script>";
            else echo "Submission Error";
        }
        else
        {
          $sql = mysqli_query($conn, "INSERT INTO `profiles`(`StudentId`, `Image`) VALUES ('$stdId','$image')");
            if($sql) echo "<script>alert('Profile updated');</script>";
            else echo "Error in submission";
        }      
} 
       
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
  .box{
    box-shadow: 1px 1px 9px 4px lightgray;
  }
</style>
</head>
<body>

<?php
    include("header.php");
    // include("db_connection.php");

    $profile = $conn->prepare("select Image from profiles where StudentId = '$stdId' ");
    $profile->execute();
        $profileResult = $profile->get_result(); 
        $row3 = $profileResult->fetch_assoc();
        $stdImage = $row3['Image'];
?>


<section class="container p-5">
  <div class="row box p-5">
    <div class="col-lg-6 col-md-4 col-sm-6 col-10 col-xs-10" align="center">

      <img src="images/<?php echo $stdImage;?>" class="col-lg-6 col-md-6 col-sm-10 col-xs-10">

      <form action="" method="post" enctype="multipart/form-data">
        <div class="pt-4" style="padding-left: 6em;">
            <input type="file" name="image" required>
        </div>
        <div class="pt-5">
              <input type="submit" name="submit" class="btn btn-primary pl-5 pr-5" value="Update">
        </div>
      </form>

    </div>
    <div class="col-lg-6 col-md-4 col-sm-6 col-10 col-xs-10">
     <div style="margin-top: 1em;">
       <h2 class="p-1" style="color: black;"><?php echo $stdName;?></h2>

       <table class="table table-borderless">
         <tr>
           <td>First Name</td>
           <td><b><?php echo $firstName;?></b></td>
         </tr>
         <tr>
           <td>Last Name</td>
           <td><b><?php echo $lastName;?></b></td>
         </tr>
         <tr>
          <tr>
           <td>User Name</td>
           <td><b><?php echo $stdName;?></b></td>
         </tr>
         <tr>
           <td>Email id</td>
           <td><b><?php echo $email;?></b></td>
         </tr>
       </table>
        <div align="right">
          <a data-toggle="modal" data-target="#myModal" class="p-1 btn btn-warning pl-3 pr-3">Change password</a>
        </div>
     </div>
    </div>
  </div>
</section>


<?php 
include("footer.php");

if (isset($_POST['changepassword'])) {
  // code...
$oldpassword =$_POST['oldpassword'];
$newpassword =$_POST['newpassword'];
// $newpassword =$_POST['newpassword'];

$sql = $conn->prepare("select * from students where id = '$stdId' ");
    $sql->execute();
        $result = $sql->get_result(); 
        $row = $result->fetch_assoc();
        $dbpassword = $row['password'];

        if ($dbpassword == $oldpassword) {
          // code...
          // echo "<script>alert('equal');</script>";
          $sql1 = $conn->prepare("update students set password = '$newpassword' where id = '$stdId' ");
          $sql1->execute();
          if($sql1 == TRUE) echo "<script>alert('Password Updated');</script>";
        }
        else echo "<script>alert('Old one not matched');</script>";

}


?>


<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal body -->
      <div class="modal-body">
       <form action="" method="post">
        <div class="p-2">
           <label for="cpass">Current Password</label><br>
           <input type="password" name="oldpassword" required id="cpass" style="border-bottom: 1px solid lightgray;width: 100%;">
        </div>
        <div class="p-2">
           <label for="npass">New Password</label><br>
           <input type="password" name="newpassword" required id="npass" style="border-bottom: 1px solid lightgray;width: 100%;">
        </div>
        <!-- <div class="p-2">
           <label for="npass">Confirm new Password</label><br>
           <input type="password" name="newpassword" required id="npass" style="border-bottom: 1px solid lightgray;width: 100%;">
        </div> -->

      
      </div>

      <!-- Modal footer -->
      <div class="" align="center" style="padding-bottom: 1em;">
       <input type="submit" name="changepassword" class="btn btn-success pl-5 pr-5">
      </div>
 </form>
    </div>
  </div>
</div>


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
<?php

}

?>