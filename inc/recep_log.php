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

  <form class="form-horizontal" action="#" method="POST">
    <br><br><p style="font:italic bold 50px/60px Algerian, serif ;color:#4d0019;">SIGN IN</p><br><br>
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">NAME:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="text" placeholder="Enter name" name="name" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
</body>
</html>
<?php
error_reporting( error_reporting() & ~E_NOTICE );
$con=mysqli_connect("localhost","root","");
if($con){
mysqli_select_db($con,"prescription");
mysqli_query($con," use prescription");
$uname = $_POST['name'];
$pass = $_POST['pwd'];
$sql = "SELECT `rec_username`, `rec_password` FROM `receptionist` WHERE rec_username='$uname' AND rec_password='$pass' ";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0){
header('Location:http://localhost/PrescriptionViewer/inc/addpat ');
}
else{
	echo mysqli_error($con);
}
}
else{
	mysqli_close($con);
}
?>