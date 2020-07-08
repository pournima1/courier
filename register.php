<?php
include ('db/db.php');

	if(isset($_POST['firstname'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$company = $_POST['company'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpass = $_POST['cpass'];
	
$sql = "INSERT INTO register (first_name, last_name, company,email,password,confirm_password,status) 
  			  VALUES('$firstname','$lastname', '$company','$email', '$password','$cpass','1')";
	$result = mysqli_query($conn, $sql);
	
	}
?>
