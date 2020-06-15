<?php
session_start();
error_reporting( error_reporting() & ~E_NOTICE );
$con=mysqli_connect("localhost","root","");
if($con){
	if($_SESSION['check']==3){
		mysqli_select_db($con,"prescription");
		$Id=$_POST['ID'];
		$Mor_name=$_POST['Morning'];
		$Aft_name=$_POST['Afternoon'];
		$Nig_name=$_POST['Night'];
		$days=$_POST['days'];
		$dosage=$_POST['dosage'];
		mysqli_query($con," use prescription");
		$sql = "SELECT `pat_id` FROM `prescribe` WHERE pat_id='$Id' ";
		$sql1= "SELECT `pat_name` FROM `patient` WHERE pat_id='$Id' ";
		$result = mysqli_query($con,$sql);
		$result1= mysqli_query($con,$sql1);
		$row1= mysqli_fetch_assoc($result1);
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)) {
			$s="UPDATE `prescribe` SET `pat_id`='".$Id."',`Mor_name`='".$Mor_name."',`Aft_name`='".$Aft_name."',`Nig_name`='".$Nig_name."',`days`='".$days."',`dosage`='".$dosage."' WHERE pat_id='".$row['pat_id']."'";	
		}
		}
		else{
		$s="INSERT INTO `prescribe`(`pat_id`, `Mor_name`, `Aft_name`,`Nig_name`,`days`,`dosage`) VALUES ('".$Id."','".$Mor_name."','".$Aft_name."','".$Nig_name."','".$days."','".$dosage."')";
		}
		$p=mysqli_query($con,$s);
		$_SESSION['id']=$Id;
		$_SESSION['name']= $row1['pat_name'];
		header('Location:http://localhost/PrescriptionViewer/inc/certificate');
	}
	else{
		header('Location:http://localhost/PrescriptionViewer/inc/Home');
	}
	mysqli_close($con);
}
else{
echo "not created";
}
?>
