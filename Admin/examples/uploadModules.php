
<!DOCTYPE html>
<html>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<?php include("sidebar.php");?>
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Upload Modules</h6>
              
            </div>
           
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->

<?php
include("db_connection.php");

if (isset($_POST['upload'])) {
  $name = $_POST['name'];
  // $price = $_POST['price'];
  // $videoDescription = $_POST['videoDescription'];
  // $pimage = $_POST['pimage'];

  // if (isset($_FILES['video']['name'])) {
  //   $video = $_FILES['video']['name'];
  //   if ($video!="") {
  //     code...
    
  //   $ext = end(explode('.', $video));
  //   $video = "Millet-item-".rand(0000,9999).".".$ext;
  //   $sourcePath = $_FILES['video']['tmp_name'];
  //   $destinationPath = "videos/".$video;

  //   $upload = move_uploaded_file($sourcePath,$destinationPath);

  //   if($upload == true)
  //   {
  //     echo "<script>Video inserted successfully</script>";
  //   }
  // }
  // }
  // else $video = "";

  $sql = mysqli_query($conn, "INSERT INTO `modules`(`name`) VALUES ('$name')");
  if($sql == TRUE) echo "<script>alert('Module uploaded');</script>";
  else echo "Error in submission";
}

?>

<style type="text/css">
  .card{
    position: absolute;
    padding: 1em; 
    top: 22em;
    left: 50%;
    transform: translate(-50%, -50%);
    box-shadow: 5px 5px 10px lightgray;
  }
  .card input[type='text'],input[type='number']{
    border: none;
    outline: none;
    border-bottom: 1px solid gray;
    width: 100%;
  }

</style>

    <div class="container-fluid mt-6">
      <div class="row justify-content-center">
        <!-- <div class=" col "> -->
          <div class="card col-11 col-lg-4 cl-md-4 col-sm-6">
            <div class="card-header bg-transparent">
              <h2 class="text-center"><b>Upload Module</b></h2>
            </div>
           <div>
            <form action="" method="post" enctype="multipart/form-data">
              <div class="p-2">
                <input type="text" class="p-2" name="name" placeholder="Module Name" required>
              </div>
              <!-- <div class="p-2">
                <input type="number" class="p-2" name="price" placeholder="Price" required>
              </div> -->
              <!-- <div class="p-2">
                <input type="text" class="p-2" name="videoCategory" placeholder="Category">
              </div> -->
             
                <div class="p-4" align="center">
                  <input type="submit" name="upload" value="Upload" class="btn btn-success" align="center">
                </div>
            </form>
           
           </div>

          </div>
        <!-- </div> -->
      </div>
    
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  
</body>


<!-- Mirrored from demos.creative-tim.com/argon-dashboard/examples/icons.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Aug 2021 09:03:16 GMT -->
</html>