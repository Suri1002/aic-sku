
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
              <h6 class="h2 text-white d-inline-block mb-0">Question upload</h6>
              
            </div>
           
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->

<?php
include("db_connection.php");

if(isset($_POST['submit'])) {

  $catogoryId = $_POST['catogoryId'];
  $question = $_POST['question'];
  $optiona = $_POST['optiona'];
  $optionb = $_POST['optionb'];
  $optionc = $_POST['optionc'];
  $optiond = $_POST['optiond'];
  $canswer = $_POST['canswer'];
  

  // echo "<script>alert($catogoryId)</script>";

  $sql = mysqli_query($conn, "INSERT INTO `quiz`(`question`, `option1`, `option2`, `option3`, `option4`, `canswer`, `catogoryid`) VALUES ('$question','$optiona','$optionb','$optionc','$optiond','$canswer','$catogoryId')");

  if($sql) echo "<script>alert('Video uploaded Successfully');</script>";
  else echo "Error in submission";
}

?>

<style type="text/css">
  .card{
    position: absolute;
    padding: 1em; 
    top: 28em;
    left: 50%;
    transform: translate(-50%, -50%);
    box-shadow: 5px 5px 10px lightgray;
  }
  .card input[type='text'],select{
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
              <h2 class="text-center"><b>Upload Questions</b></h2>
            </div>
           <div>
            <form action="" method="post" enctype="">
              <div class="p-2">
                <p>Choose Course Title</p>
                <select name="catogoryId">
                  <option></option>
                <?php

                        $sql = $conn->prepare("select * from catogory");
                        // $sql->bind_param("s", $email);
                        $sql->execute();
                        $result = $sql->get_result();
                        while($row = $result->fetch_assoc())
                        {
                          $name = $row['name'];
                          $id = $row['id'];
                          ?>
                          
                            <option value="<?php echo($id);?>"><?php echo($name);?></option>
                          

                          <?php
                        }

                      
                ?>
                </select>
              </div>
              <div class="p-2">
                <input type="text" class="p-2" name="question" placeholder="Question name" required>
              </div>
              <div class="p-2">
                <input type="text" class="p-2" name="optiona" placeholder="Option a" required>
              </div>
              <div class="p-2">
                <input type="text" class="p-2" name="optionb" placeholder="Option b" required>
              </div>
              <div class="p-2">
                <input type="text" class="p-2" name="optionc" placeholder="Option c" required>
              </div>
              <div class="p-2">
                <input type="text" class="p-2" name="optiond" placeholder="Option d" required>
              </div>
              <div class="p-2">
                <input type="text" class="p-2" name="canswer" placeholder="Enter Correct option" required>
              </div>
             <!--  <div class="p-2">
                <input type="text" class="p-2" name="description" placeholder="Description">
              </div> -->
              <!-- <div class="p-2">
                <input type="text" class="p-2" name="videoCategory" placeholder="Category">
              </div> -->
              <!-- <div class="p-3">
                <input type="file" name="video" required>
              </div> -->
                <div class="p-4" align="center">
                  <input type="submit" name="submit" value="Upload" class="btn btn-success" align="center">
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