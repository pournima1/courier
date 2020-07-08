<?php

include('db/db.php');

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


<form style="width: 50%; text-align: center;height: 370px;border-radius: 5px;border: 1px solid red;position: absolute;margin-top: -60%;margin-left: 50px;background-color: black; opacity: .6;font-size: 10px;" action="view_dealer.php" method="POST">
	

<center>
<div style="width: 100%; height: 50px;" class="row">
<div class="card z-depth-2 mb10">
					<div style="background-color:black; " class="col-xs-3 col-sm-4 green">
						<h3 style="font-size: 15px;color: white;">Get A Quotation</h3>
					</div>
					<div style="background-color: black;" class="col-xs-9 col-sm-8 orange">
						
						<button style="margin-top: 10px;">Domestic</button>
						<button style="margin-top: 10px;">International</button>
						<button style="margin-top: 10px;">Vehicles</button>
						<hr style="margin-top: -0px;">
					</div>

</div>
</div>
</center>

<center>
<div style="width: 100%; height: 50px;" class="row">
<div class="card z-depth-2 mb10">
			<div style="background-color:black; " class="col-xs-6 col-sm-6 green">
				<h4 style="margin-right:45%;margin-top: 85px;font-size: 10px;color: white;margin-top: 10px;">From*(Collection):</h4>
	             <select name="frompin" class="select_input">

	             	 <option>Enter your pickup pincode</option>

	             	<?php 	
	             	$sql = "SELECT * FROM from_pin where status='1' order by id desc";

	             	$result = mysqli_query($conn,$sql);

	             	if(mysqli_num_rows($result) > 0){
	             		foreach ($result as $row ) {
	             			?>
	             			 <option value="<?=$row['pincode'];?>"><?=$row['pincode'];?> - <?=$row['area']?> <?=$row['city'];?></option>




	             			<?php
	             
	             		}
	             	}
	             	?>

		           
		         </select>
			</div>
			<div style="background-color: black;" class="col-xs-6 col-sm-6 orange">
				<h4 style="margin-right:45%;margin-top: 85px;font-size: 10px;color: white;margin-top: 10px;">To*(Collection):</h4>		
					 <select name="topin" class="select_input">
		            <option>Enter your delivery pincode</option>


	             	<?php
	             	$sql = "SELECT * FROM to_pin where status='1' order by id desc";

	             	$result = mysqli_query($conn,$sql);

	             	if(mysqli_num_rows($result) > 0){
	             		foreach ($result as $row ) {
	             			?>
	             			 <option value="<?=$row['pincode'];?>"> <?=$row['pincode'];?> - <?=$row['area']?> <?=$row['city'];?></option>




	             			<?php
	             
	             		}
	             	}
	             	?>


		         </select> 	
			</div>
						

</div>
</div>
</center>
<style type="text/css">
	#yourBtn {
  position: relative;
  margin-top: 20px;
  font-family: calibri;
  width: 100px;
  padding: 10px;
  margin-right:70px;
  -moz-border-radius: 5px;
  border: 1px dashed #BBB;
  text-align: center;
  background-color: #DDD;
  cursor: pointer;
 
}
.kg_tag{
	width: 30px;
	height: 20px;
	background-color: white;
	position: absolute;
	margin-top: 25px;
	line-height: 20px;
}
</style>
<center>


<br>
<br>



<center>
<div style="width: 100%; height: 50px;margin-top: -10px;" class="row">
<div class="card z-depth-2">
			<div style="background-color:black; " class="col-xs-6 col-sm-3 green">
				<form action="#type your action here" method="POST" enctype="multipart/form-data" name="myForm">
				  <div id="yourBtn" onclick="getFile()">click to upload a file</div>
				  <div style='height: 0px;width: 0px; overflow:hidden;'><input id="upfile" type="file" value="upload" onchange="sub(this)"/></div>
				 
				</form>
			</div>

			<div style="background-color:black; " class="col-xs-6 col-sm-3 green">
				<form action="#type your action here" method="POST" enctype="multipart/form-data" name="myForm">
				  <div id="yourBtn" onclick="getFile()">click to upload a file</div>
				  <div style='height: 0px;width: 0px; overflow:hidden;'><input id="upfile" type="file" value="upload" onchange="sub(this)"/></div>
				 
				</form>
			</div>d



			<div  class="col-xs-6 col-sm-6 orange">
					<h4 style="position: absolute;font-size: 10px;color: white;margin-left: 70px;margin-top:28px;">Weight</h4>
					<input style="width: 50px;margin-left: 70px;margin-top: 25px;" type="text" name="Weight" placeholder="required">
					<label class="kg_tag">Kg</label>

			</div>

			
						
						

</div>
</div>
</center>

<br>
<br>





<br>
<style type="text/css">
	.cm_tag{
	width: 30px;
	height: 20px;
	background-color: white;
	margin-left: -3px;
	margin-top: -20px;
	line-height: 20px;
}
</style>

<h6 style="color: white;">****Enter Product Dimensions****</h6>

<div style="width: 100%; height: 50px;display: inline-flex;margin-left: 30px;margin-top: 15px;"class="row">


					<div style="margin-left: 10px;" class="col">
						<label style="color: white;">
					Length<input name="Length" style="width: 50px;margin-left: 10px;margin-top: -20px;color: black;" type="text"  placeholder="required">
					<label style="margin-top: -5px;color: black;" class="cm_tag">cm</label></label>

					</div>
					<div style="" class="col">
						<label style="margin-left: 10px;color: white;">Width
					<input name="Width" style="width: 50px;margin-left:0px;margin-top: -20px;color: black;" type="text" placeholder="required">
					<label style="color: black;" class="cm_tag">cm</label></label>

					</div>
					<div class="col">
						<label style="margin-left: 15px;color: white;">Height
					<input name="Height" style="width: 50px;margin-left:0px;margin-top: -20px;color: black;" type="text"  placeholder="required">
					<label style="color: black;" class="cm_tag">cm</label></label>

					</div>
				</div>



 <div class="row">
 	
	<button  name="proceed" style=" width: 85%;height: 35px;background-color: #ef7722  ;border:none;color: white;">
	Proceed Now</button>

	
</div>


</form>










<br>
</body>
<script src="dist/js/jquery.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script src="dist/js/bower.min.js"></script>

<script src="dist/js/plugins/fullcalendar/moment.min.js"></script>
<script src="dist/js/plugins/fullcalendar/fullcalendar.js"></script>

<!-- app -->
<script src="dist/js/app.min.js"></script>

<script src="demo/demo-calendar.js"></script>
</html>

<script type="text/javascript">
	function getFile() {
  document.getElementById("upfile").click();
}

function sub(obj) {
  var file = obj.value;
  var fileName = file.split("\\");
  document.getElementById("yourBtn").innerHTML = fileName[fileName.length - 1];
  document.myForm.submit();
  event.preventDefault();
}
</script>