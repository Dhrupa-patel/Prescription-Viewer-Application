<?php
session_start();
if($_SESSION['id']==1){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('http://localhost/PrescriptionViewer/inc/projectphotos/listBG.jpg');background-size: cover;">
<p style="font:italic bold 50px/60px Algerian, serif ;color:#003333;">LIST OF PATIENTS</p>
<?php
error_reporting( error_reporting() & ~E_NOTICE );
$con=mysqli_connect("localhost","root","");
if($con){
	mysqli_select_db($con,"prescription");
	mysqli_query($con," use prescription");
	$id=$_SESSION['ID'];
	$_SESSION['check']=3;
	$sql = "SELECT `pat_id`, `pat_name` FROM `patient` WHERE doc_id='$id'";
	$result = mysqli_query($con,$sql);
	echo "<table class='table table-hover table-bordered' style=' font: italic bold 20px/30px Algerian, serif'><tr><td>Patient_ID</td><td>Patient_name</td></tr>";
	if(mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr><td> " . $row["pat_id"]. "</td><td>" . $row["pat_name"]. "</td></tr>";
		}
	}
else{
echo mysqli_error($con);
}
echo "</table>";
}
else{
	mysqli_close($con);
}
}
else{
	header('Location:http://localhost/PrescriptionViewer/inc/Home');
}
?>
&nbsp;&nbsp;<button type="button" onClick="location.href='/PrescriptionViewer/inc/Prescribe'" class="btn btn-primary btn-lg">Prescribe</button>
</body>
</html>
