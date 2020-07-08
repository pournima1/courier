<?php
include ('db/db.php');

	if(isset($_POST['username'])) {
	$user = $_POST['username'];
	$pass = $_POST['pass'];
	

	$sql = "SELECT * FROM login where email ='$user'  && password ='$pass'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0) {
		
		echo "1";

		}
		else
		{
			echo "2";
		}

	}
?>
