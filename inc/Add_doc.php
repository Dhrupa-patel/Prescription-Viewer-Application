<?php
session_start();
if($_SESSION['id']==1){
$_SESSION['id']=2;
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
  <p style="font:italic bold 50px/60px Algerian, serif ;color:#223300;">REGISTRATION FORM FOR DOCTOR<a href='/PrescriptionViewer/inc/Home' style='float:right'>HOME</a></p> 
  <form action="/test/resources/views/inc/doc" method="POST">
    <div class="form-group">
      <label for="ID">ID:</label>
      <input type="text" class="form-control" name="ID" pattern="^[d]\d{2,}" placeholder="Enter ID" required>
    </div>
	<div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" placeholder="Enter name" required>
    </div>
	   <div class="radio">
		<label for="gender">Gender:</label>
      <label><input type="radio" name="gender" value="Male" checked>Male</label>
      <label><input type="radio" name="gender" value="Female">Female</label>
    </div>
	<div class="form-group">
      <label for="age">Age:</label>
      <input type="number" class="form-control" name="Age" placeholder="Enter Age" min=18 max=55>
    </div>
	<div class="form-group">
      <label for="name">Field:</label>
	 <div class="dropdown">
	  <select name = "Department">
	  <span class="caret"></span></button>
	  <ul class="dropdown-menu">
		<option value = "Gynaecology" selected>Gynaecology</option>
		<option value = "obstetrics">obstetrics</option>
		<option value = "paediatrics">paediatrics</option>
		<option value = "dermatology">dermatology</option>
		<option value = "opthalmology">opthalmology</option>
	    <option value = "orthopaedics">orthopaedics</option>
		<option value = "cardiology">cardiology</option>
		<option value = "neurology">neurology</option>
		<option value = "psychiatry">psychiatry</option>
	  </ul>
	  </select>
	</div> 
	</div>
	<br>
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
      <input type="tel" class="form-control" name="mob" placeholder="Enter Mobile Number" pattern="[0-9]{10}">
    </div>
		<div class="form-group">
      <label for="uname">UserName:</label>
      <input type="text" class="form-control" name="uname" placeholder="Enter username" pattern="[a-zA-z_]{5,15}"required>
    </div>
	<div class="form-group">
      <label for="pwd">Password:</label>         
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" pattern="[a-z0-9A-z@$#%&*^!~`]{8,20}"required>
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
