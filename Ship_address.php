<?php
session_start();

include ('db/db.php');
if (isset($_POST['user_id'])) {
		
	$user_id = $_POST['user_id'];
   $first_name = $_POST['first_name'];

	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$alternate_mobile = $_POST['alternate_mobile'];
	$landmark = $_POST['landmark'];
	
	$city = $_POST['city'];
	$state = $_POST['state'];	
	 $pincode = $_POST['pincode'];
	 $shipping_id =$_POST['shipping_id'];
  	$_SESSION['shipping_id'] = $shipping_id;

	 $sql = "INSERT INTO shipping_address (user_id, first_name, last_name, email, mobile, alternate_mobile, landmark, city, state, pincode, status) 
  			  VALUES('$user_id','$first_name','$last_name', '$email', '$mobile','$alternate_mobile','$landmark','$city','$state',$pincode,'1')";
	if(mysqli_query($conn, $sql))
	{
		echo "1";
	}
	else{
		echo "2";
	}








}















?>