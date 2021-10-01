<html>
<head>
	<meta charset="utf-8">
	<title>Profile</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="assets/css/da-slider.css" />
	<link rel="stylesheet" href="assets/css/style.css">

	<style>
	th, td {
		padding:5px;   
	}
	</style>
</head>
<body>
	<?php
		include "header.php";
		$strconn=mysqli_connect("localhost","root","","aicsku");
		if(!$strconn)
			echo "Connection failed".mysqli_connect_error();
		else{}
		session_start();
		if(isset($_SESSION["username"]))
		{
			$username=$_SESSION["username"];
		}
		else{ echo 'session not started';}
	?>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1 >Update Profile</h1>
				</div>
			</div>
		</div>
	</header>
	<br>
	
	<?php

		$query = "SELECT firstName,lastName,email,username,password FROM students WHERE username='$username'";
		$result = mysqli_query($strconn,$query);
		while($row = mysqli_fetch_array($result))
		{
			$fname = $row["firstName"];
			$lname = $row["lastName"];
			// $mname = $row["MiddleName"];
			// $gender = $row["Gender"];
			$email = $row["email"];
			$username = $row["username"];
			$password = $row["password"];
		}
	
	?>

	<form method="POST" action="#">
		<table border=0 align="center">
			<tr>
				<td><label>Your First Name :</label></td>
				<td><input type="text" class="form-control" name="fname" value="<?php echo $fname;?>"></td>
			</tr>
			
			<tr>
				<td><label>Your Last Name :</label></td>
				<td><input type="text" class="form-control" name="lname" value="<?php echo $lname;?>"></td>
			</tr>
			
			<tr>
				<td><label>Email address :</label></td>
				<td><input type="email" class="form-control" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr>
				<td><label>Your User Name :</label></td>
				<td><input type="text" class="form-control" name="username" value="<?php echo $username;?>"></td>
			</tr>
			<tr>
				<td><label>Your Password :</label></td>
				<td><input type="password" class="form-control" name="pass" value="<?php echo $password;?>"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><button class="btn btn-block"name="btn">Update</button></td>
			</tr>
		</table>
	</form>
	<?php
	if(!empty($_POST['fname'])&&!empty($_POST['lname']))
	{
		if(isset($_POST['btn']))
		{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		// $gender = $_POST['gender'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['pass'];
		$query = "UPDATE students SET firstName='$fname',lastName='$lname',email='$email',username='$username',password='$password' WHERE username='$username'";
		$result = mysqli_query($strconn,$query);
		if($result)
		{
			echo "<div class='alert alert-success' role='alert'>Profile updated </div>";

		}
		else
		{
			echo "<div class='alert alert-danger' role='alert'>profile coudnt be updated</div>";

		}
		}
	}
	?>
	
</body>
</html>