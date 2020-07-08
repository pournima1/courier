-<?php
include 'db/db.php';
session_start();
echo $_SESSION['id'];
?>

<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Courier</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	
	<link class="rtl_switch_css" href="dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="dist/css/mdicons.min.css" rel="stylesheet" type="text/css">
	<!--<link class="rtl_switch_css" href="dist/css/app.min.css" rel="stylesheet" type="text/css">-->
	<link href="dist/css/theme.min.css" rel="stylesheet" type="text/css">
	<link href="dist/css/skins/light-skin.css" rel="stylesheet" type="text/css">
	<link href="dist/css/skins/dark-skin.css" rel="stylesheet" type="text/css">

	<link  href="dist/css/plugins/fullcalendar.css" rel="stylesheet" type="text/css">		
	<link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/27618fd587.js" crossorigin="anonymous"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>







</head>

<body>
	<style type="text/css">
		body{
			background-color: white; 
			font-family: 'PT Serif', serif;\
			font-si
		}
		.slider-img{
			width: 100%;
		}
		.img-slider{
			width: 100%;
		}

		.header-box{
			width: 100%;
			height: 10px;
			background-color: white; 
			
		}
		.nav-item{
			list-style: none;
			margin-left: 10px;
		}
		.select_input{
			height: 25px;
			margin-right: 35px;
		}
		
			
		

	</style>



<div class="header-box">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Mrunal</a>
  

  <div style="margin-top: 10px; float: right;margin-right: 10px;" class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    
  </div>
</nav>
</div>
<div class="slider-img">
	<img class="img-slider"src="images/10.jpeg">
</div>

<!--	<h1 style="color: white;margin-top:10px;position: absolute;">Login/Register</h1>
	
</div>--->

<center>
<div style="width: 95%;margin-top: -50%;position: relative;background-color: white;" class="row">
<div style="margin-top: 10px;height: 80%;" class="card z-depth-2 mb40">
					
	<div style="width: 40%;height: 500px;" class="col-md-4 cyan-dark">
		<form class="login-form" style="width: 80%;height: 400px;border-radius: 5px;border: 1px solid red;position: absolute;" method="POST">
				<div class="row">
					<label style="margin-top: 50px;">Email <label style="" class="icon_tag"> <i class="fas fa-envelope"></i>
					<input class="username" type="text" name="" placeholder="Email"> </label></label>


				</div>
				<div class="row">
					<label style="margin-top: 10px;margin-left: -20px;">Password <label style="" class="icon_tag"> <i class="fas fa-lock"></i>
					<input class="pass" type="text" name="" placeholder="Password"> </label></label>
				</div>




				<div class="row">
					<label> <input type="checkbox" name="remember" value="true"> keep me logged in!Forgot Password</label>
				</div>
				<div style="margin-top: 10px;" class="row">
					<button class="btn btn-info login">Login</button>
				</div>

			




		</form>

	</div>
					

	<div style="width: 60%;height: 500px;" class="col-md-8 cyan">
		<form class="register-form" style="width: 70%;height: 400px;border-radius: 5px;border: 1px solid red;position: absolute;" method="POST">
		<div class="row">
			<div class="card z-depth-2 mb40">
			<div class="col-md-6 cyan">
				<label style="margin-top: 10px;margin-left: -20px;">First Name <br> <label style="margin-top: 10px;" class="icon_tag"> <i class="fas fa-user"></i>
				<input class="fname" type="text" name="" placeholder="First Name"> </label></label>	
			</div>
			<div class="col-md-6 cyan-dark">
			 	<label style="margin-top: 10px;margin-left: -20px;">Last Name <br> <label style="margin-top: 10px;" class="icon_tag"> <i class="fas fa-user"></i>
				<input class="lname" type="text" name="" placeholder="Last Name"> </label></label>	
			</div>
			</div></div>
			<div  class="row">
			 	<label style=" margin-top: 10px;">Company <br> <label style="margin-top: 10px;" class="icon_tag"> <i class="fas fa-briefcase"></i>
				<input class="company" style="width:410px;" type="text" name="" placeholder="Company"> </label></label>
			</div>

			<div class="row">
				<div class="card z-depth-2 mb40">
				<div class="col-md-6 cyan">
					<label style="margin-top: 10px;margin-left: -20px;">Email <br> <label style="margin-top: 10px;" class="icon_tag"> <i class="fas fa-envelope"></i> 	
					<input class="email" type="text" name="" placeholder="Email"> </label></label>		
				</div>
				<div class="col-md-6 cyan-dark">
					<label style="margin-top: 10px;margin-left: -20px;">Phone <br> <label style="margin-top: 10px;" class="icon_tag"> <i class="fas fa-lock"></i>
					<input class="phone" type="text" name="" placeholder="Phone	"> </label></label>		
				</div></div></div>
				<div class="row">
				<h6 style="">Subscribe to our email list</h6>
				</div>

				<div class="row">
				<div class="card z-depth-2 mb40">
				<div class="col-md-6 cyan">
					<label style="margin-top: 10px;margin-left: -20px;">Password <br> <label style="margin-top: 10px;" class="icon_tag"> <i class="fas fa-lock"></i>
					<input class="password" type="text" name="" placeholder="Password"> </label></label>		
				</div>
				<div class="col-md-6 cyan-dark">
					<label style="margin-top: 10px;margin-left: -20px;">Confirm Password <br> <label style="margin-top: 10px;" class="icon_tag"> <i class="fas fa-lock"></i>
					<input class="cpass" type="text" name="" placeholder="Comfirm Password"> </label></label>		
				</div></div></div>


				<div style="margin-top: 10px;" class="row">
					<button class="btn btn-info register">Register</button>
				</div>




							

						</form>
					</div>
					
				</div></div>
</center>
</body>

	

<script type="text/javascript">


	$(document).ready(function(){
		$('.login').click(function(e){
			e.preventDefault();
			var $form = $(this).closest(".login-form");
			var username = $form.find(".username").val();
			var pass = $form.find(".pass").val();

			
			$.ajax({
				url:'login.php',
				method:'POST',
				data:{username:username, pass:pass},
				success:function(response){
					console.log(response);
					if (response == 1) {
						window.location.href = "shipping_address.php";
					}
					else{
						alert("Wrong username or Password");
					}

			}	
			})
			
		})
	})
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('.register').click(function(e){
			e.preventDefault();
			var $form = $(this).closest(".register-form");
			var firstname = $form.find(".fname").val();
			var lastname = $form.find(".lname").val();
			var company = $form.find(".company").val();
			var email = $form.find(".email").val();
			var password = $form.find(".password").val();
			var cpass = $form.find(".cpass").val();
			if (password !== cpass) {
				alert("confirm password do not match!");

			}
			else
			{

			$.ajax({
				url:'register.php',
				method:'POST',
 				data:{firstname:firstname, lastname:lastname, company:company, email:email, password:password, cpass:cpass},
					success:function(response){
					
						window.location.href = "shipping_address.php";
					
					
			}	
			})
			
			}

		
		})
	})
</script>
</html>