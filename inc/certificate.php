<!DOCTYPE html>
<head></head>
<html>
<body>
<form action="/PrescriptionViewer/inc/Home" method="POST">
    <p style="font:italic bold 40px/30px Algerian, serif ;color:#004d4d;">RECEIPT</p>
	<button type="submit" class="btn btn-default">Submit</button><br>
<?php
session_start();
error_reporting( error_reporting() & ~E_NOTICE );
$con=mysqli_connect("localhost","root","");
if($con){
	if($_SESSION['check']===3){
		mysqli_select_db($con,"prescription");
		mysqli_query($con," use prescription");
		$pat=$_SESSION['id'];
		$sql = "SELECT * FROM `prescribe` WHERE pat_id='$pat'";
		$result = mysqli_query($con,$sql);
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)) {
			$cert_name=$row['pat_id'];	
			$output= "certs/".$cert_name.".jpg";
			$source= "templates/image.jpg";
			$im=imagecreatefromjpeg($source);
			$white = imagecolorallocate($im, 255, 255, 255);
			$black = imagecolorallocate($im, 0, 0, 0);
			//$white = imagecolorallocate($im, 255, 255, 255);
			putenv('GDFONTPATH=C:\xampp\htdocs\test\resources\views\inc\fonts');
			$font = "C:/xampp/htdocs/PrescriptionViewer/inc/fonts/arial.ttf";
			$text2= imagettftext($im,18,0,40,180,$black,$font,"Name of patient:");
			$text1= imagettftext($im,18,0,220,180,$black,$font,$_SESSION['name']);
			$text2= imagettftext($im,18,0,40,230,$black,$font,"Morning Medicine:");
			$text7= imagettftext($im,18,0,240,230,$black,$font,$row['Mor_name']);
			$text3= imagettftext($im,18,0,40,280,$black,$font,"Afternoon Medicine:");
			$text8= imagettftext($im,18,0,260,280,$black,$font,$row['Aft_name']);
			$text4= imagettftext($im,18,0,40,330,$black,$font,"Night Medicine:");
			$text9= imagettftext($im,18,0,210,330,$black,$font,$row['Nig_name']);
			$text5= imagettftext($im,18,0,40,380,$black,$font,"Days:");
			$text10= imagettftext($im,18,0,110,380,$black,$font,$row['days']);
			$text6= imagettftext($im,18,0,40,430,$black,$font,"Dosage:");
			$text11= imagettftext($im,18,0,130,430,$black,$font,$row['dosage']);
			imagejpeg($im,$output);
			}
		}
		else{
			echo mysqli_error($con);
		}
		session_destroy();
	}
	else{
		header('Location:http://localhost/PrescriptionViewer/inc/Home');
	}
}
else{
	mysqli_close($con);
}
?>
<img src="<?php echo $output; ?>" >
</form>
</body>
</html>