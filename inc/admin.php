<?php
	session_start();
	if($_SESSION['id']==1){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PRESCRIPTION VIEWER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('http://localhost/PrescriptionViewer/inc//projectphotos/AdminBG.jpg'); background-repeat: no-repeat;background-size: cover;">
<div class="container"  style=" position:absolute; margin-left:35%; bottom:280px;">
  <button type="button" onClick="location.href='/PrescriptionViewer/inc/Add_doc'" class="btn btn-primary btn-lg"><img src="http://localhost/PrescriptionViewer/inc/projectphotos/AddDoctorIcon.jpg" height="150px" width="150px" ></button>&nbsp;&nbsp;
  <button type="button" onClick="location.href='/PrescriptionViewer/inc/Add_recep'" class="btn btn-primary btn-lg"><img src="http://localhost/PrescriptionViewer/inc/projectphotos/AddReceptionistIcon.jpg" height="150px" width="150px" ></button>&nbsp;&nbsp;
</div>

</body>
</html>
<?php
	}
	else{
		header("Location: http://localhost/PrescriptionViewer/inc/Home");
	}

