<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
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

  <form class="payment_form" method="POST">
<div class="row">
  <div class="col-75">
    <div class="container">
    
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="user_id"><i class="fa fa-user"></i> user_id</label>
            <input type="text" class="user_id" name="user_id" placeholder="fname">

            <label for="fname"><i class="fa fa-user"></i> First Name</label>
            <input type="text" id="fname" class="fname" name="firstname" placeholder="fname">
            <label for="fname"><i class="fa fa-user"></i> Last Name</label>
            <input type="text" id="lname" class="lname" name="firstname" placeholder="lname">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" class="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Landmark</label>
            <input type="text" id="adr" class="landmark" name="Landmark" placeholder="542 W. 15th Street">
            <label for="area"><i class="fa fa-institution"></i> area</label>
            <input type="text" id="area" class="area" name="area" placeholder="area">

            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" class="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" class="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Pincode</label>
                <input type="text" id="zip" class="pincode" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            
            <label for="cname">Mobile</label>
            <input type="text" id="cname" class="mobile" name="mobile" placeholder="mobile">
            <label for="ccnum">Alternate Mobile</label>
            <input type="text" id="ccnum" class="alternatemobile" name="alternatemobile" placeholder="AlternateMobile">
            
              </div>
            
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn checkout">
      
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div>
  </div>
</div>
</form>
</body>


<script type="text/javascript">


  $(document).ready(function(){
    $('.checkout').click(function(e){
      e.preventDefault();
      var $form = $(this).closest(".payment_form");
      var user_id = $form.find(".user_id").val();
      var first_name = $form.find(".fname").val();
      var last_name = $form.find(".lname").val();
      var email = $form.find(".email").val();
      var mobile = $form.find(".mobile").val();
      var alternate_mobile = $form.find(".alternatemobile").val();
      var landmark = $form.find(".landmark");
      var area = $form.find(".area").val();
      var city = $form.find(".city").val();
      var state = $form.find(".state").val();
      var pincode = $form.find(".pincode").val();
     
    

      
       $.ajax({
        url:'payment1.php',
        method:'POST',
        data:{user_id:user_id,first_name:first_name,last_name:last_name,email:email,mobile:mobile,alternate_mobile:alternate_mobile,landmark:landmark,area:area,city:city,state:state,pincode:pincode},
        success:function(response){
          console.log(response);
          
      } 
      })






      
    })
  })
</script>

</html>
