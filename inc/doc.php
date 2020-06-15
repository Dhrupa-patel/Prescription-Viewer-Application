<?php
session_start();
error_reporting( error_reporting() & ~E_NOTICE );
$con=mysqli_connect("localhost","root","");
if($con){
	if($_SESSION['id']==2){
		mysqli_select_db($con,"prescription");
		$Id=$_POST['ID'];
		$name=$_POST['name'];
		$gend=$_POST['gender'];
		$age=$_POST['Age'];
		$department=$_POST['Department'];
		$em=$_POST['email'];
		$address=$_POST['Address'];
		$mob=$_POST['mob'];
		$uname=$_POST['uname'];
		$password=$_POST['pwd'];
		mysqli_query($con," use prescription");
		$s="INSERT INTO `doctor`(`ID`,`Name`,`Gender`, `Age`,`Department`,`email`,`Address`, `Mobile_No`,`Username`,`Password`) VALUES ('".$Id."','".$name."','".$gend."','".$age."','".$department."','".$em."','".$address."','".$mob."','".$uname."','".$password."')";
		$p=mysqli_query($con,$s);
		session_destroy();
		header('Location:http://localhost/PrescriptionViewer/inc/admin ');
	}
	mysqli_close($con);
}
else{
echo "not created";
}
?>
