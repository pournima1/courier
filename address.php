<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/696338a774.js" crossorigin="anonymous"></script>
	 <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
</head>


<body>
	<style type="text/css">
		body{
			background-color: #D6DBDF ;
			background-repeat: no-repeat;
			background-size: cover; 
			font-family: 'PT Serif', serif;
			font-si
		}
		.btn{
			width: 90px;
			height: 30px;
			background-color: #Eb7722; 
			float: right;
			margin-top: 10px;
			margin-right: 10px;
			line-height: 15px;
			color: white;

			
			
		}
		.effect5
{
  position: relative;
}
.effect5:before, .effect5:after
{
  z-index: -1;
  position: absolute;
  content: "";
  bottom: 25px;
  left: 10px;
  width: 50%;
  top: 80%;
  max-width:300px;
  background: #777;
  -webkit-box-shadow: 0 35px 20px #777;
  -moz-box-shadow: 0 35px 20px #777;
  box-shadow: 0 35px 20px #777;
  -webkit-transform: rotate(-8deg);
  -moz-transform: rotate(-8deg);
  -o-transform: rotate(-8deg);
  -ms-transform: rotate(-8deg);
  transform: rotate(-8deg);
}
.effect5:after
{
  -webkit-transform: rotate(8deg);
  -moz-transform: rotate(8deg);
  -o-transform: rotate(8deg);
  -ms-transform: rotate(8deg);
  transform: rotate(8deg);
  right: 10px;
  left: auto;
}

.box h3{
	text-align:center;
	position:relative;
	top:80px;
}
.box {
    width:100%;
    height:500px;
    background:#FFF;
    margin: auto;
    
}
	</style>




<div class="row">
	<div class="col">
		<form style="width: 90%; height: 500px;margin-top: 50px;margin-left: 10px; ">
			
			<div class="box effect5">
				<!---<button class="btn"data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add new</button>-->

	<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" onclick="openaddress()" >Address</button>
	<hr>

			 <script type="text/javascript">
  function openaddress(){
    window.location.href ="shipping_address.php";
  }
</script>

			
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Address</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="row">
      	<label style="padding: 30px; width: 90%; ">Add Your Address <input 
           
             ></label>
      </div>
      <div  style="margin-top: -30px;" class="row">
      	<div class="col">
      		<label style="padding: 10px;">Pincode<br><input class="form-control" type="text" name="" placeholder="Pincode"></label>
      	</div>
      	<div class="col">
      		<label style="padding: 10px;">State<br><input class="form-control"type="text" name="" placeholder="State"></label>
      	</div>
      	
      </div>
      <div style="display:none; ;" class="modal-body">
     
      
   
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    <style>
      #locationField, #controls {
        position: relative;
        width: 480px;
      }
      #autocomplete {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 99%;
      }
      .label {
        text-align: right;
        font-weight: bold;
        width: 100px;
        color: #303030;
        font-family: "Roboto";
      }
      #address {
        border: 1px solid #000090;
        background-color: #f0f9ff;
        width: 480px;
        padding-right: 2px;
      }
      #address td {
        font-size: 10pt;
      }
      .field {
        width: 99%;
      }
      .slimField {
        width: 80px;
      }
      .wideField {
        width: 200px;
      }
      #locationField {
        height: 20px;
        margin-bottom: 2px;
      }
    </style>
  </head>

 <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    <style>
      #locationField, #controls {
        position: relative;
        width: 480px;
      }
      #autocomplete {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 99%;
      }
      .label {
        text-align: right;
        font-weight: bold;
        width: 100px;
        color: #303030;
        font-family: "Roboto";
      }
      #address {
        border: 1px solid #000090;
        background-color: #f0f9ff;
        width: 480px;
        padding-right: 2px;
      }
      #address td {
        font-size: 10pt;
      }
      .field {
        width: 99%;
      }
      .slimField {
        width: 80px;
      }
      .wideField {
        width: 200px;
      }
      #locationField {
        height: 20px;
        margin-bottom: 2px;
      }
    </style>

    <div id="locationField">
      <input id="autocomplete"
             placeholder="Enter your address"
             onFocus="geolocate()"
             type="text"/>
    </div>

    <!-- Note: The address components in this sample are typical. You might need to adjust them for
               the locations relevant to your app. For more information, see
         https://developers.google.com/maps/documentation/javascript/examples/places-autocomplete-addressform
    -->

    <table id="address">
      <tr>
        <td class="label">Street address</td>
        <td class="slimField"><input class="field" id="street_number" disabled="true"/></td>
        <td class="wideField" colspan="2"><input class="field" id="route" disabled="true"/></td>
      </tr>
      <tr>
        <td class="label">City</td>
        <td class="wideField" colspan="3"><input class="field" id="locality" disabled="true"/></td>
      </tr>
      <tr>
        <td class="label">State</td>
        <td class="slimField"><input class="field" id="administrative_area_level_1" disabled="true"/></td>
        <td class="label">Zip code</td>
        <td class="wideField"><input class="field" id="postal_code" disabled="true"/></td>
      </tr>
      <tr>
        <td class="label">Country</td>
        <td class="wideField" colspan="3"><input class="field" id="country" disabled="true"/></td>
      </tr>
    </table>
 <script>
// This sample uses the Autocomplete widget to help the user select a
// place, then it retrieves the address components associated with that
// place, and then it populates the form fields with those details.
// This sample requires the Places library. Include the libraries=places
// parameter when you first load the API. For example:
// <script
// src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

var placeSearch, autocomplete;

var componentForm = {
  street_number: 'short_name',
  route: 'long_name',
  locality: 'long_name',
  administrative_area_level_1: 'short_name',
  country: 'long_name',
  postal_code: 'short_name'
};

function initAutocomplete() {
  // Create the autocomplete object, restricting the search predictions to
  // geographical location types.
  autocomplete = new google.maps.places.Autocomplete(
      document.getElementById('autocomplete'), {types: ['geocode']});

  // Avoid paying for data that you don't need by restricting the set of
  // place fields that are returned to just the address components.
  autocomplete.setFields(['address_component']);

  // When the user selects an address from the drop-down, populate the
  // address fields in the form.
  autocomplete.addListener('place_changed', fillInAddress);
}

function fillInAddress() {
  // Get the place details from the autocomplete object.
  var place = autocomplete.getPlace();

  for (var component in componentForm) {
    document.getElementById(component).value = '';
    document.getElementById(component).disabled = false;
  }

  // Get each component of the address from the place details,
  // and then fill-in the corresponding field on the form.
  for (var i = 0; i < place.address_components.length; i++) {
    var addressType = place.address_components[i].types[0];
    if (componentForm[addressType]) {
      var val = place.address_components[i][componentForm[addressType]];
      document.getElementById(addressType).value = val;
    }
  }
}

// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var geolocation = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
      var circle = new google.maps.Circle(
          {center: geolocation, radius: position.coords.accuracy});
      autocomplete.setBounds(circle.getBounds());
    });
  }
}
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_Gjdm_0nJk17UVBPoV5Im40uQeguoRAo&libraries=places&callback=initAutocomplete"
        async defer></script>
  </body>
</html>
  
  </body>
</html>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
<br><br>

<div style="width: 85%;height: 200px;margin-left: 10px;" class="container">
	<div class="row">
		<div class="col-1"><input type="radio" name=""> </div>
		<div class="col-8">
			<div class="row">
				<div class="col">
					First Name:Milind
				</div>
				<div class="col">
					Last Name:Vavare
				</div>
			</div>
			<div style="margin-top: 10px;" class="row">
				<div class="col">Pincode:411043</div>
				<div class="col">State:Maharashtra</div>
			</div>
		</div>
		<div class="col-3">
			<div style="margin-top:10px;" class="row">
				<i class="fas fa-edit"></i>
			</div>
			<div style="margin-top: 10px;" class="row">
				<i style="margin-top:2px; " class="fas fa-trash-alt"></i>
			</div>
		</div>
	</div>
</div>



			</div>


		</form>
	</div>
	

<style type="text/css">
	table, td, th {
  border: 1px solid black;
}
</style>

	<div class="col">
		<form style="width: 98%; height: 500px;border-radius: 5px;margin-top: 50px;margin-left: 10px;background-color: white;">
			<div class="box effect5">
				<div class="container">
					<table>
						<tr>
							<th>SKU</th>
							<th>Name</th>
							<th>Parcel/Details</th>
							<th>Quantity</th>
							<th>Totals</th>
						</tr>
						<tr>
							<td>DTDCPA</td>
							<td>DTDC Priority Air</td>
							<td>Weight(Kg):1<br>Length(cm):10<br>Width(cm):10<br>Height(cm):10<br>Content:Abcd<br>Value(Rs):50</td>
							<td><input style="width: 50px;" type="text" name=""></td>
							<td>Rs.108.00</td>
						</tr>
						<tr>
							<td>Subtotal</td>
							<td></td>
							<td></td>
							<td></td>
							<td>Rs.108.00</td>
						</tr>
						<tr>
							<td>Grand Total</td>
							<td></td>
							<td></td>
							<td></td>
							<td>Rs.108.00</td>
						</tr>
						
					</table>
					<div style="margin-top: 20px; " class="row">
						<div class="col-6">
						<label>If you have a coupon,enter the code here:<input class="form-control" type="text" name=""></label>
					    </div>
					    <div class="col-3"><button style="margin-top: 27px;">Apply Coupon</button></div>
					    <div class="col-3"><button>Update Cart</button></div>
					</div>

					<div style="margin-top: 20px; " class="row">
						<div class="col-6">
						<label>If you have Store Credits,enter the code here:<input class="form-control" type="text" name=""></label>
					    </div>
					    <div class="col-6"><button style="margin-top: 27px;">Apply Store Credit Code</button></div>
					    
					</div>

				</div>
			</div>
			
		</form>
	</div>
	
</div>


</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>