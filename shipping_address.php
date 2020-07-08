<?php
include 'db/db.php';
$sql = "SELECT * from shipping_address order by shipping_id desc LIMIT 1";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0) {
  foreach ($result as $row ) {
 $shipping_id = $row['shipping_id']+1;
  }
}
?>
<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/c7803b926f.js" crossorigin="anonymous"></script>



	<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}








label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}
.icon{
	padding-left: 10px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

<form style="width: 70%;height:500px;border-radius: 5px;border: 1px solid red;margin-left: 50px;margin-top: 60px;text-align: center;" class="shipping_form" method="POST">
	
	<div class="container">
    <input type="hidden" value="<?=$shipping_id?>">
		<h3>Shipping Address</h3>
		 <input type="hidden"  class="icon user_id" name="user_id" placeholder="user id" value="1">
		<div class="row">
			<div class="col"><label for="fname"><i class="fa fa-user"> First Name</i></label>
            <input type="text" class="icon first_name" name="fname" placeholder="First Name">
         	</div>
			<div class="col">
				<label for="lname"><i class="fa fa-user"> Last Name</i></label>
            <input type="text" id="fname" class="icon last_name" name="firstname" placeholder="Last Name">

			</div>
		</div>



		<div class="row" style="margin-top: 10px;">
			<div class="col"><label for="email"><i class="fa fa-user"> Email</i></label>
            <input type="text" class="icon email" name="email" placeholder="Email">
         	</div>
         	<div class="col"><label for="landmark"><i class="fas fa-address-card"> Landmark</i></label>
            <input type="text" class="icon land_mark" name="landmark" placeholder="Landmark">
         	</div>
			
		</div>


		<div class="row" style="margin-top: 10px;">
			<div class="col"><label for="city"><i class="fa fa-institution"> City</i></label>
            <input type="text" class="icon city" name="city" placeholder="City">
         	</div>
			<div class="col">
			<label for="state"><i class="fa fa-institution"> State</i></label>
            <input type="text" id="state" class="icon state" name="state" placeholder="State">

			</div>
			<div class="col"><label for="pincode"><i class="fa fa-institution"> Pincode</i></label>
            <input type="text" class="icon pincode" name="pincode" placeholder="pincode">
         	</div>
		</div>



		<div class="row" style="margin-top: 10px;">
			<div class="col"><label for="mobile"><i class="fas fa-mobile-alt"> Mobile</i></label>
            <input type="text" class="icon mobile" name="mobile" placeholder="Mobile">
         	</div>
			<div class="col">
				<label for="alternate-mobile"><i class="fas fa-mobile-alt"> Alternate Mobile</i></label>
            <input type="text" id="alternate-mobile" class="icon alt_mobile" name="alternatemobile" placeholder="Alternate-Mobile">

			</div>
		</div>


		<button  name="proceed" style=" width: 85%;height: 35px;background-color: #ef7722  ;border:none;color: white;margin-top: 30px;" class="checkout">
	Continue to Checkout</button>


	</div>
	






</form>




</body>
</html>



<script type="text/javascript">
  $(document).ready(function(){
    $('.checkout').click(function(e){
      e.preventDefault();
      var $form = $(this).closest(".shipping_form");
      var user_id = $form.find(".user_id").val();
      var first_name = $form.find(".first_name").val();
      var last_name = $form.find(".last_name").val();
      var email = $form.find(".email").val();
      var mobile = $form.find(".mobile").val();
      var alternate_mobile = $form.find(".alt_mobile").val();
      var landmark = $form.find(".land_mark").val();
     
      var city = $form.find(".city").val();
      var state = $form.find(".state").val();
      var pincode = $form.find(".pincode").val();   
      var shipping_id = $form.find(".shipping_id").val();
     
      $.ajax({
      	url:'ship_address.php',
      	method:'POST',
      	data:{user_id:user_id, first_name:first_name, last_name:last_name, email:email, mobile:mobile, alternate_mobile:alternate_mobile, landmark:landmark,  city:city, state:state, pincode:pincode,shipping_id:shipping_id},
      	success:function(response){
      		console.log(response);
      	}
      });
})
})
</script>
