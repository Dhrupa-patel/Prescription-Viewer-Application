<?php
session_start();
if($_SESSION['check']==4){
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

  <form action="/PrescriptionViewer/inc/pat" method="POST">
    <p style="font:italic bold 50px/60px Algerian, serif ;color:#004d4d;">ADD PATIENT<a href='/PrescriptionViewer/inc/Home' style='float:right'>HOME</a></p>
    <div class="form-group">
      <label for="ID">ID:</label>
      <input type="text" class="form-control" name="ID" pattern="^[p]\d{2,}" placeholder="Enter ID(eg:p01)" required>
    </div>
	<div class="form-group">
      <label for="DocID">DOC_ID:</label>
      <input type="text" class="form-control" name="DocID" pattern="^[d]\d{2,}" placeholder="Enter doctor ID(eg:d01)" required>
    </div>
	<div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" placeholder="Enter name" required >
    </div>
	   <div class="radio">
		<label for="gender">Gender:</label>
      <label><input type="radio" value="Male" name="gender" checked>Male</label>
      <label><input type="radio" value="Female" name="gender">Female</label>
    </div>
	
	 <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Enter email" required>
    </div>
		<div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" name="Address" placeholder="Enter Address" required>
    </div>
		<div class="form-group">
      <label for="mob">Mobile Number:</label>
      <input type="mob" class="form-control" name="mob" placeholder="Enter Mobile Number" required>
	  </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
</body> 
</html>
<?php
}
else{
	header('Location:http://localhost/PrescriptionViewer/inc/Home');
}
?>

