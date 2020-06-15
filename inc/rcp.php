<?php
session_start();
error_reporting( error_reporting() & ~E_NOTICE );
$con=mysqli_connect("localhost","root","");
if($con){
	if($_SESSION['id']==1){
		mysqli_select_db($con,"prescription");
		$Id=$_POST['ID'];
		$name=$_POST['name'];
		$gend=$_POST['gender'];
		$age=$_POST['Age'];
		$em=$_POST['email'];
		$address=$_POST['Address'];
		$mob=$_POST['mob'];
		$uname=$_POST['uname'];
		$password=$_POST['pwd'];
		mysqli_query($con," use prescription");
		$s="INSERT INTO `receptionist`(`rec_id`,`rec_name`,`rec_gender`, `rec_age`,`rec_email`,`rec_address`, `rec_mobile`,`rec_username`,`rec_password`) VALUES ('".$Id."','".$name."','".$gend."','".$age."','".$em."','".$address."','".$mob."','".$uname."','".$password."')";
		$p=mysqli_query($con,$s);
		session_destroy();
		header('Location:http://localhost/PrescriptionViewer/inc/admin ');
	}
	else{
		echo "Error";
	}
	mysqli_close($con);
}
else{
	echo "Not connected.";
}
?>
