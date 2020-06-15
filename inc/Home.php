<?php
session_start();
$_SESSION['id']=1;
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
<body style="background-image: url('http://localhost/PrescriptionViewer/inc/projectphotos/BG.jpg'); background-repeat: no-repeat;background-size: cover;">
  <br><br><p style="font:italic bold 60px/70px Algerian, serif ;color:#191970;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRESCRIPTION VIEWER</p>
<form method="POST">
  <div class="container"  style=" position:absolute; margin-left:28%; bottom:200px;">
	<button type="button" onClick="location.href='/PrescriptionViewer/inc/admin_log'" class="btn btn-primary btn-lg"><img src="http://localhost/PrescriptionViewer/inc/projectphotos/Admin.jpeg" height="150px" width="150px" ></button>&nbsp;&nbsp;
  <button type="button" onClick="location.href='/PrescriptionViewer/inc/doctor_log'" class="btn btn-primary btn-lg"><img src="http://localhost/PrescriptionViewer/inc/projectphotos/Doctor.jpg" height="150px" width="150px" ></button>&nbsp;&nbsp;
  <button type="button" onClick="location.href='/PrescriptionViewer/inc/recep_log'" class="btn btn-primary btn-lg"><img src="http://localhost/PrescriptionViewer/inc/projectphotos/Receptionist.jpeg" height="150px" width="150px" ></button>&nbsp;&nbsp;

</div>
</form>
</body>
</html>
