<?php
session_start();
$_SESSION['id']=1;
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('http://localhost/PrescriptionViewer/inc/projectphotos/BG1.jpg'); background-repeat: no-repeat;background-size: cover;">

<div class="container">
  <p style="font:italic bold 50px/60px Algerian, serif ;color:#223300;">REGISTRATION FORM FOR RECEPTIONIST<a style='float:right;' href='/PrescriptionViewer/inc/Home'>HOME</a></p>
  <form action="/PrescriptionViewer/inc/rcp" method="POST">
    <div class="form-group">
      <label for="ID">ID:</label>
      <input type="text" class="form-control" name="ID" pattern="^[r]\d{2,}" placeholder="Enter ID" required>
    </div>
	<div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" placeholder="Enter name" required>
    </div>
	   <div class="radio">
		<label for="gender">Gender:</label>
      <label><input type="radio" value="Male" name="gender" checked>Male</label>
      <label><input type="radio" value="Female" name="gender">Female</label>
    </div>
	<div class="form-group">
      <label for="age">Age:</label>
      <input type="number" class="form-control" name="Age" placeholder="Enter Age" min=18 max=55">
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Enter email">
    </div>
		<div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" name="Address" placeholder="Enter Address">
    </div>
		<div class="form-group">
      <label for="mob">Mobile Number:</label>
      <input type="mob" class="form-control" name="mob" placeholder="Enter Mobile Number" pattern="[0-9]{10}">
    </div>
		<div class="form-group">
      <label for="uname">UserName:</label>
      <input type="text" class="form-control" name="uname" placeholder="Enter username" pattern="[a-zA-z0-9_0]{5,15}">
    </div>
	<div class="form-group">
      <label for="pwd">Password:</label>         
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" pattern="[a-zA-z0-9!@#$%^&*~`]{8,20}">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body> 
</html>
