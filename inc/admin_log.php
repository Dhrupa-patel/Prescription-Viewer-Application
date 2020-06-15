<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('http://localhost/PrescriptionViewer/inc/projectphotos/SignInBG.jpg'); background-repeat: no-repeat;background-size: cover;">
<div class="container">
	<br><br><br><p style="font:italic bold 50px/60px Algerian, serif ;color:#4d0019;">SIGN IN</p><br><br>
	  <form method="POST" action="#" >
		<div class="form-group">
		  <label for="name">NAME:</label>
			<input type="text" class="form-control" placeholder="Enter name" name="name" required>
		</div>
		<div class="form-group">
		  <label for="pwd">Password:</label>
			<input type="password" class="form-control" placeholder="Enter password" name="pwd" required>
		</div>
		<div class="form-group">        
			<button type="submit" class="btn btn-default">Submit</button>
		</div>
	  </form>
</div>
</body>
</html>
<?php
session_start();
error_reporting( error_reporting() & ~E_NOTICE );
$con=mysqli_connect("localhost","root","");
if($con){
	if($_SESSION['id']==1){
		mysqli_select_db($con,"prescription");
		mysqli_query($con," use prescription");
		$uname = $_POST['name'];
		$pass = $_POST['pwd'];
		$sql = "SELECT `Username`, `Password` FROM `login` WHERE Username='$uname' AND Password='$pass' ";
		$result = mysqli_query($con,$sql);
		if(mysqli_num_rows($result) > 0){
			header("Location: http://localhost/PrescriptionViewer/inc/admin");
		}
		else{
			echo mysqli_error($con);
		}
	}
	mysqli_close($con);
}
else{
echo "Not connected";
}
?>