<?php
session_start();
error_reporting( error_reporting() & ~E_NOTICE );
$con=mysqli_connect("localhost","root","");
if($con){
	if($_SESSION['check']==4){
		mysqli_select_db($con,"prescription");
		$Id=$_POST['ID'];
		$d_id=$_POST['DocID'];
		$name=$_POST['name'];
		$gend=$_POST['gender'];
		$em=$_POST['email'];
		$address=$_POST['Address'];
		$mob=$_POST['mob'];
		mysqli_query($con," use prescription");
		$s="INSERT INTO `patient`(`pat_id`,`doc_id`,`pat_name`, `pat_gender`,`pat_email`,`pat_address`, `pat_mobile`) VALUES ('".$Id."','".$d_id."','".$name."','".$gend."','".$em."','".$address."','".$mob."')";
		$p=mysqli_query($con,$s);
		session_destroy();
		header('Location:http://localhost/PrescriptionViewer/inc/addpat ');
	}
	else{
		header('Location:http://localhost/PrescriptionViewer/inc/Home ');
	}
	mysqli_close($con);
}
else{
echo "not created";
}

?>
