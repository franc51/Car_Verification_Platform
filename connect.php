<?php
include "config.php";

if(isset($_POST['register-form'])){
	$name = $_POST['name'];
	$vinno = $_POST['vinno'];
	$result_question = $_POST['registration'];

	$query = "insert into $registration (name,vinno,result)values('$name','$vinno','$result_question') LIMIT 1";
	$result = mysqli_query($con,$query);
	print_r($query);
	if($result){
		
		echo '<script type="text/javascript">';
		echo 'alert("Registration successfull!");';
		echo 'window.location.href = "database.html";';
		echo '</script>';
	}else{
		echo '<script type="text/javascript">';
		echo 'alert("Registration failed!");';
		echo 'window.location.href = "database.html";';
		echo '</script>';
	}
}


	
?>