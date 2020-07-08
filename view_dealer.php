<?php

include('db/db.php');

?>

<?php

  if(isset($_POST['proceed']))
  {
     $frompin1 = $_POST['frompin'];
     $topin1 = $_POST['topin'];
      $Weight = $_POST['Weight'];
      $Length = $_POST['Length'];
      $Width = $_POST['Width'];
      $Height = $_POST['Height'];
  }

 $sql1 = "SELECT from_pin.id,from_pin.id_courier_service_details,from_pin.pincode,to_pin.id,to_pin.id_courier_service_details,to_pin.pincode FROM from_pin INNER JOIN to_pin ON from_pin.pincode=to_pin.pincode where from_pin.pincode='$frompin1' and to_pin.pincode='$topin1'";
 
 $result = mysqli_query($conn,$sql1);
      if(mysqli_num_rows($result) > 0){
        foreach ($result as $row ) {
         $courier_id=$row['id_courier_service_details'];
         
        }
      }
      else{
        $courier_id = '';

      }
?>
  










<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/4f954c4fbf.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>	
	<style type="text/css">
		body{
			background:url('images/10.jpeg');
			background-repeat: no-repeat;
			background-size: cover; 
			font-family: 'PT Serif', serif;
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
  

  <div style="margin-top: 10px; float: right;margin-right: 10px;  " class="collapse navbar-collapse" id="navbarColor03">
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

<br><br><br>

<style type="text/css">
	/* Using the ITCSS (http://itcss.io/) architecture for CSS */


/* 1. Settings - Preprocessors variables, fonts, imports, etc. */

@import url(https://fonts.googleapis.com/css?family=Poppins);
@import url(https://fonts.googleapis.com/css?family=Montserrat);

/* 2. Tools - mixins */


/* 3. Generic - very generic CSS rules */

* {
  box-sizing: border-box;
  font-family: Montserrat;
  font-size: 14px;
}

::selection{background-color: white;}

i {
  font-size: 20px;
}


/* 4. Elements - HTML Elements of the page h1-h6, etc. */

body {
  margin: 0;
  padding: 0;
  background-color: #222;
  color: #666;
}

a {
  color: #235ba8;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

input {}

input:focus {}

input[type="submit"],
input[type="button"] {}


/* 5. Objects - wrappers, cards, etc. */

.random-background {
  background-color: #36a88e;
  /*top colour*/
  background-image: -webkit-linear-gradient(top, #36a88e, #f35b47);
  background-image: -moz-linear-gradient(top, #36a88e, #f35b47);
  background-image: -o-linear-gradient(top, #36a88e, #f35b47);
  background-image: linear-gradient(to bottom, #36a88e, #f35b47);
  height: 200vh;
  width: 100vw;
}

.itemlist{ 
  max-width:1024px;  
  margin:auto; 
  padding:20px;
  display:flex;
  flex-wrap: wrap;
}

.itemlist-item-wrapper{width: calc(90% / 3); display:inline-block; font-size: 20px !important; margin:1% 0.5% 0.5% 0.5%; background-color:white; padding:10px;
box-sizing: content-box;}

@media(max-width: 800px){
  .itemlist{ width:auto; margin:auto; padding:0;}
  .itemlist-item-wrapper{width:48%; margin:auto; margin-bottom:0.5%; padding:30px;}
}

@media(max-width: 600px){
  .itemlist{ width:auto; margin:auto; padding:0;}
  .itemlist-item-wrapper{width:auto; margin:auto; margin-bottom:2%;}
}


.lightbox-blanket {
  background-color: rgba(30, 30, 30, 0.9);
  display: block;
  height: 100vh;
  position: fixed;
  overflow-y: scroll;
  top: 0;
  width: 100vw;
  z-index: 20;
}

.pop-up-container {
  height: 100%;
  width: auto;
  display: table;
  margin: auto;
  position: static;
}

@media (max-width:400px) {
  .pop-up-container {
    width: 96%;
    margin: 2%;
  }
}

.pop-up-container-vertical {
  height: 100%;
  vertical-align: middle;
  display: table-cell;
}

.pop-up-wrapper {
  -webkit-box-shadow: -45px 49px 83px 1px rgba(0, 0, 0, 0.45);
  -moz-box-shadow: -45px 49px 83px 1px rgba(0, 0, 0, 0.45);
  box-shadow: -45px 49px 83px 1px rgba(0, 0, 0, 0.45);
  display: block;
  margin: 20px auto;
  width: auto;
  position: relative;
}

.pop-up-wrapper {
  background-color: white;
  display: block;
  padding: 50px;
}

.go-back {
  position: absolute;
  left: 10px;
  top: 10px;
  color:#222;
  width: 0;
  height: 0;
  border-top: 60px solid #CAE00D;
  border-right: 60px solid transparent;
}

.go-back i {
  font-size:20px;
  position: relative;
  top: -52px;
  left: 10px;
}

.product-details {
  max-width: 600px;
}

.product-left {
  display: inline-block;
  padding-right: 4%;
  vertical-align: top;
  width: 46%;
}

.product-right {
  display: inline-block;
  vertical-align: top;
  width: 49%;
}

.product-bottom{border-top:1px solid #ccc; position:relative; padding-top:20px;}

@media (max-width:650px){
  .product-left, .product-right, .product-bottom{
    width:100%;}
  .product-left{padding-right:0;}
  .product-info{display:inline-block; width:60%; vertical-align:top;}
   .product-image{display:inline-block; width:39%; vertical-align:top;}
}

@media (max-width:512px){
  .product-info, .product-image{width:100%;}
}

.product-manufacturer {
  color:#222;
  font-size: 70px;
  font-weight: bold;
  line-height: 1;
  margin: -2px;
}

.product-title {
  font-size: 28px;
  color: #888;
}

.product-price {
  color:#222;
  font-size: 24px;
  letter-spacing: 1px;
}

.product-price-cents {
  text-decoration: underline;
  vertical-align: top;
  padding-left:3px;
}

.product-image {
  padding: 10px 10px 0 10px;
}

.product-image img {
  width: 100%;
    height: 100%;
    object-fit: contain;
    height: 295px;
}

.product-description {line-height:1.5;}

.product-available {
  margin-top: 25px;
}

.product-rating{
  margin-top:25px;
}

i.fa-star{color:#aaa; display:inline-block;}
i.fa-star.rating{color: rgb(232, 217, 31);}
.product-rating-details{display:inline-block; padding-left: 10px;}
@media(max-width:515px){
  .product-rating-details{padding-left:0;}
}
.product-extended {
  color: #235ba8;
  padding-left: 5px;
}
.product-quantity{margin-top:25px;
  margin-bottom:25px;}

.product-checkout{position:absolute; left:0;font-size: 12px; text-transform: uppercase;}
.product-checkout-actions{position:absolute; right:0;}
.product-checkout-total, .product-checkout-total-amount{font-size: 20px; color: #C17A41;}
.product-checkout-total * {display:inline-block;}
.product-checkout-actions{}

/* 6. Components - buttons, menus, images, etc. */
.product-quantity-label{text-transform:uppercase;}
.product-quantity *{display:inline-block;}

#product-quantity-input{background-color: #eee;border: none; width:2.5em; text-align: center;}
.product-quantity-subtract, .product-quantity-add{margin-left: 20px; padding-left:5px; padding-right: 5px;}
.product-quantity-subtract{margin-right:20px;}


.toast{
  position: fixed;
  top: -50px;
  left: calc(50vw - 50px);
  z-index:25;
  padding:5px 10px;
  border-radius: 15px;
}

.toast-success{
  background-color: green;
  color:white;
  font-size: 9pt;
}

.toast-transition{
  top: calc(50px);
  transition:top 1s;
}


/* 7. Trumps - text helpers, often !important */

.hidden {
  display: none;
}
</style>


  


  <div class="random-background">
    
    
    <div class="itemlist">
      
      <?php 
          $sql2 = "SELECT * FROM courier_service_details where id = '$courier_id'";
          

          $result2 = mysqli_query($conn,$sql2);
          if (mysqli_num_rows($result2) > 0 ) {
            foreach ($result2 as $row ) {


              $rate_per_kg = $row['rate_per_kg'];
              $rate = $rate_per_kg * $Weight;
              $id = $row['id'];

             ?>
              

 <div class="itemlist-item-wrapper">
<form class="view_dealer" method="POST">
        <div class="product-details">
          <div class="">
            <div class="product-info">
              <div class="product-title" item-data="5">
               <?=$row['name']?> 
              </div>
              <div class="product-price" price-data="169" item-data="5">
                ₹<span class="product-price-rupees"><?=$rate?></span><span class="product-price-cents"></span>
                <input type="hidden"  class="id" value="<?=$id?>" >
              </div>
            </div>
            <div class="product-image" item-data="5">
              <div class="container">
                <div class="row">
                  <h6>Same day pickup if you book today by 12 PM</h6>
                  <h6>Dealer Name</h6>
                  
                </div>
                <div class="row">
                  <div class="col"><i class="fas fa-home"></i>Collection Service</div>
                  <div class="col"><i class="fas fa-print"></i><br>Printer Required</div>
                  <div class="col"><i class="fas fa-info-circle"></i><br>More Info</div>
                </div>

                <div class="row">
                  <button name="book" style="width: 95%;height: 35px;background-color: #eb7722;border: none;color: white;" class="book" >Book Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>



      </form>
      </div>
    





             <?php
            }

           } 
           else
           {
            ?>
            <center>
            <div style="width: 300px; height: 50px; background-color: white;text-align: center;margin-top: 20px;"> Data not found!

            </div>
             
           </center>
              <?php
           }



       ?>
     
      
      
     


    </div>


</div>	

  </div>


</body>
<script type="text/javascript">
  $(document).ready(function(){
    $('.book').click(function(e){
      e.preventDefault();
     var $form = $(this).closest(".view_dealer");
     var id = $form.find(".id").val();
    
     console.log(id);

     $.ajax({
      url:'sessionstore.php',
      method:'POST',
      data:{id:id},
      success:function(data){
        console.log(data);
        if (data == 1) {
            window.location.href = "registration.php";
          }
          else{
            alert("Something went wrong!");
          }

      }
     })




})


    })

</script>



<script type="text/javascript">
function open_reg(){
window.location.href = "registration.php";
}

</script>





<script type="text/javascript">
	//Go Back
function OpenProduct(i){
  var i = $('.product-image[item-data="'+i+'"] img');
  var lbi = $('.lightbox-blanket .product-image img');
  console.log($(i).attr("src"));
  $(lbi).attr("src", $(i).attr("src"));
 // var price =  $(i).attr("price-data");
 // var lbprice = $('.lightbox-blanket .product-info .product-price');
 // if(lbprice){
 //   price = price.split["."];
 //   $(lbprice).html("$" + price[0] + "<span class='product-price-cents'>"+price[1] +"</span>");
 //}
  
  $(".lightbox-blanket").toggle();
  
  
  $("#product-quantity-input").val("0");
  CalcPrice (0);
  
}
function GoBack(){
  $(".lightbox-blanket").toggle();
}

//Calculate new total when the quantity changes.
function CalcPrice (qty){
  var price = $(".product-price").attr("price-data");
  var total = parseFloat((price * qty)).toFixed(2);
  $(".product-checkout-total-amount").text(total);
}

//Reduce quantity by 1 if clicked
$(document).on("click", ".product-quantity-subtract", function(e){
  var value = $("#product-quantity-input").val();
  //console.log(value);
  var newValue = parseInt(value) - 1;
  if(newValue < 0) newValue=0;
  $("#product-quantity-input").val(newValue);
  CalcPrice(newValue);
});

//Increase quantity by 1 if clicked
$(document).on("click", ".product-quantity-add", function(e){
  var value = $("#product-quantity-input").val();
  //console.log(value);
  var newValue = parseInt(value) + 1;
  $("#product-quantity-input").val(newValue);
  CalcPrice(newValue);
});

$(document).on("blur", "#product-quantity-input", function(e){
  var value = $("#product-quantity-input").val();
  //console.log(value);
  CalcPrice(value);
});


function AddToCart(e){
  e.preventDefault();
  var qty = $("#product-quantity-input").val();
  if(qty === '0'){return;}
  var toast = '<div class="toast toast-success">Added '+ qty +' to cart.</div>';  
  $("body").append(toast);
  setTimeout(function(){ 
  $(".toast").addClass("toast-transition");
    }, 100);
  setTimeout(function(){      
    $(".toast").remove();
  }, 3500);
}
</script>
</html>