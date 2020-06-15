<?php
session_start();
if($_SESSION['check']==3){
	?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</head>
<body style="background-image: url('http://localhost/PrescriptionViewer/inc/projectphotos/BG3.jpg');background-size: cover;">

<div class="container">

  <form action="/PrescriptionViewer/inc/presc_enter" method="POST">
    <p style="font:italic bold 50px/60px Algerian, serif ;color:#664400;">PRESCRIPTION FOR PATIENT<a href='/PrescriptionViewer/inc/Home' style='float:right'>HOME</a></p>
    <div class="form-group">
      <label for="ID">ID:</label>
      <input type="text" class="form-control" name="ID" pattern="^[p]\d{2,}" placeholder="Enter Patient ID" id="pat_id" required>
    </div>
	<!---<div class="form-group">
      <label for="name">Morning Medicine:</label>
      <textarea rows="3" cols="50" class="form-control" name="name">Enter name of Morning medicine</textarea>
    </div>--->
	<div class="form-group">
      <label for="name">Morning Medicine:</label>
	<div class="dropdown">
	  <select name = "Morning" id="morning">
	  <span class="caret"></span></button>
	  <ul class="dropdown-menu">
		<option value = "Hydrocodone" selected>Hydrocodone</option>
		<option value = "Generic Zocor">Generic Zocor</option>
		<option value = "Bupivacaine">Bupivacaine</option>
		<option value = "Etonogestrel">Etonogestrel</option>
		<option value = "Oxytocin">Oxytocin</option>
	    <option value = "Progesterone">Progesterone</option>
		<option value = "Miconazole">Miconazole</option>
		<option value = "Duloxetine Oral Capsule">Duloxetine Oral Capsule</option>
		<option value = "Celecoxib Oral Capsule">Celecoxib Oral Capsule</option>
		<option value = "Bisoprolol">Bisoprolol</option>
		<option value = "Acebutolol">Acebutolol</option>
	    <option value = "Expectorants">Expectorants</option>
		<option value = "Penicillin">Penicillin</option>
		<option value = "Insulin">Insulin</option>
		<option value = "Solu-medrol">Solu-medrol</option>
		<option value = "Protonix">Protonix</option>
		<option value = "Lovenox">Lovenox</option>
	    <option value = "Coumadin">Coumadin</option>
		<option value = "Morphine">Morphine</option>
		<option value = "Cipro">Cipro</option>
		<option value = "Toprol">Toprol</option>
		<option value = "Wellbutrin">Wellbutrin</option>
		<option value = "Actos">Actos</option>
	    <option value = "cardizem">cardizem</option>
		<option value = "atenolol">atenolol</option>
		<option value = "Zosyn">Zosyn</option>
		<option value = "Lisinopril">Lisinopril</option>
	  </ul>
	  </select>
	</div>
	</div>
	<div class="form-group">
      <label for="name">Afternoon Medicine:</label>
      <div class="dropdown">
	  <select name = "Afternoon" id="afternoon">
	  <span class="caret"></span></button>
	  <ul class="dropdown-menu">
		<option value = "Hydrocodone" selected>Hydrocodone</option>
		<option value = "Generic Zocor">Generic Zocor</option>
		<option value = "Bupivacaine">Bupivacaine</option>
		<option value = "Etonogestrel">Etonogestrel</option>
		<option value = "Oxytocin">Oxytocin</option>
	    <option value = "Progesterone">Progesterone</option>
		<option value = "Miconazole">Miconazole</option>
		<option value = "Duloxetine Oral Capsule">Duloxetine Oral Capsule</option>
		<option value = "Celecoxib Oral Capsule">Celecoxib Oral Capsule</option>
		<option value = "Bisoprolol">Bisoprolol</option>
		<option value = "Acebutolol">Acebutolol</option>
	    <option value = "Expectorants">Expectorants</option>
		<option value = "Penicillin">Penicillin</option>
		<option value = "Insulin">Insulin</option>
		<option value = "Solu-medrol">Solu-medrol</option>
		<option value = "Protonix">Protonix</option>
		<option value = "Lovenox">Lovenox</option>
	    <option value = "Coumadin">Coumadin</option>
		<option value = "Morphine">Morphine</option>
		<option value = "Cipro">Cipro</option>
		<option value = "Toprol">Toprol</option>
		<option value = "Wellbutrin">Wellbutrin</option>
		<option value = "Actos">Actos</option>
	    <option value = "cardizem">cardizem</option>
		<option value = "atenolol">atenolol</option>
		<option value = "Zosyn">Zosyn</option>
		<option value = "Lisinopril">Lisinopril</option>
	  </ul>
	  </select>
	</div>
    </div>
	<div class="form-group">
      <label for="name">Night Medicine:</label>
      <div class="dropdown">
	  <select name = "Night" id="night">
	  <span class="caret"></span></button>
	  <ul class="dropdown-menu">
		<option value = "Hydrocodone" selected>Hydrocodone</option>
		<option value = "Generic Zocor">Generic Zocor</option>
		<option value = "Bupivacaine">Bupivacaine</option>
		<option value = "Etonogestrel">Etonogestrel</option>
		<option value = "Oxytocin">Oxytocin</option>
	    <option value = "Progesterone">Progesterone</option>
		<option value = "Miconazole">Miconazole</option>
		<option value = "Duloxetine Oral Capsule">Duloxetine Oral Capsule</option>
		<option value = "Celecoxib Oral Capsule">Celecoxib Oral Capsule</option>
		<option value = "Bisoprolol">Bisoprolol</option>
		<option value = "Acebutolol">Acebutolol</option>
	    <option value = "Expectorants">Expectorants</option>
		<option value = "Penicillin">Penicillin</option>
		<option value = "Insulin">Insulin</option>
		<option value = "Solu-medrol">Solu-medrol</option>
		<option value = "Protonix">Protonix</option>
		<option value = "Lovenox">Lovenox</option>
	    <option value = "Coumadin">Coumadin</option>
		<option value = "Morphine">Morphine</option>
		<option value = "Cipro">Cipro</option>
		<option value = "Toprol">Toprol</option>
		<option value = "Wellbutrin">Wellbutrin</option>
		<option value = "Actos">Actos</option>
	    <option value = "cardizem">cardizem</option>
		<option value = "atenolol">atenolol</option>
		<option value = "Zosyn">Zosyn</option>
		<option value = "Lisinopril">Lisinopril</option>
	  </ul>
	  </select>
	</div>
    </div>
    <div class="form-group">
      <label for="days">days:</label>
      <input type="text" class="form-control" name="days" id="Day" placeholder="Enter number of days">
    </div>
		<div class="form-group">
      <label for="dosage">Dosage:</label>
      <input type="text" class="form-control" name="dosage" id="dosage" placeholder="Enter Dosage">
    </div>
	<button type="button" onclick="setup();" class="btn btn-default"> Click to send to firebase</button>	
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<script src="https://www.gstatic.com/firebasejs/4.12.1/firebase.js"></script>
<script>
  // Initialize Firebase
  function setup(){
  var config = {
    apiKey: "AIzaSyD7ididj0z2A4aCM7FiNgsQ6Uv3KjZA7M4",
    authDomain: "prescriptionviewer-3edc4.firebaseapp.com",
    databaseURL: "https://prescriptionviewer-3edc4.firebaseio.com",
    projectId: "prescriptionviewer-3edc4",
    storageBucket: "prescriptionviewer-3edc4.appspot.com",
    messagingSenderId: "535678479571"
  };
  firebase.initializeApp(config);
var pat= document.getElementById("pat_id");
var day= document.getElementById("Day");
var dosage= document.getElementById("dosage");
var med=document.getElementById("morning");
var Mor_med = med.options[med.selectedIndex].value;
var med=document.getElementById("afternoon");
var Aft_med = med.options[med.selectedIndex].value;
var med=document.getElementById("night");
var Nig_med = med.options[med.selectedIndex].value;
var firebaseref = firebase.database().ref();
var msg= pat.value;
var days= day.value;
var Dos= dosage.value;
firebaseref.child("patients").child(msg).set(msg);
firebaseref.child("patients").child(msg).child("Morning").set(Mor_med);
firebaseref.child("patients").child(msg).child("Afternoon").set(Aft_med);
firebaseref.child("patients").child(msg).child("Night").set(Nig_med);
firebaseref.child("patients").child(msg).child("Days").set(days);
firebaseref.child("patients").child(msg).child("Dosage").set(Dos);
 }
</script>
</body> 
</html>
<?php
}
else{
	header('Location:http://localhost/PrescriptionViewer/inc/Home ');
}
?>