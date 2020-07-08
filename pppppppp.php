<?php
session_start();

     



?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="img/fav.png">
		<meta name="author" content="colorlib">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta charset="UTF-8">
		<title>CLG-NEWS</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<link rel="stylesheet" href="../css/linearicons.css">
		<link rel="stylesheet" href="../css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/magnific-popup.css">
		<link rel="stylesheet" href="../css/nice-select.css">
		<link rel="stylesheet" href="../css/animate.min.css">
		<link rel="stylesheet" href="../css/owl.carousel.css">
		<link rel="stylesheet" href="../css/jquery-ui.css">
		<link rel="stylesheet" href="../css/main.css">
		<script src="../js/likes.js"></script>
		<script src="https://kit.fontawesome.com/60f0245ba4.js" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<style type="text/css">
		@import url(https://fonts.googleapis.com/css?family=Open+Sans);



.search {
  width: 100%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  border: 3px solid #00B4CC;
  border-right: none;
  padding: 5px;
  height: 35px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;

}

.searchTerm:focus{
  color: #00B4CC;
}

.searchButton {
  width: 40px;
  height: 36px;
  border: 1px solid #00B4CC;
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 100%;
  position: absolute;
  top: 100%;
  left: 50%;
  transform: translate(-50%, -50%);
}
@media only screen and (max-width: 1400px) {
  
.img_logo{
	display: none;
}
.clg_news_name{
	display: none;
}
.img1_post{
	height: 500px;
}


}
@media only screen and (max-width: 600px) {
  
.img_logo{
	display: block;
}
.clg_news_name{
	display: block;
}

.img1_post{
	height: 250px;
}


}

	</style>

	<style>
div#load_screen{
	background: #000;
	opacity: 1;
	position: fixed;
    z-index:10;
	top: 0px;
	width: 100%;
	height: 1600px;
}
div#load_screen > div#loading{
	color:#FFF;
	width:120px;
	height:24px;
	margin: 300px auto;
}
.post_img{
	height: 250px;
}
</style>
<script>
window.addEventListener("load", function(){
	var load_screen = document.getElementById("load_screen");
	document.body.removeChild(load_screen);
});
</script>
<script>
window.addEventListener("load", function(){
	var load_screen = document.getElementById("load_screen");
	document.body.removeChild(load_screen);
});
</script>












	<body>
<div id="load_screen">
	<div  id="loading">
		<center><img style="width: 60px;height: 60px;border-radius: 50%;" src="../img/logo/logo.jpeg"></center>
	</div>

</div>


		<header>

			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-left no-padding">
							<ul>
								<button type="button" id="mobile-nav-toggle"><i class="lnr lnr-menu"></i><span class="menu-title"></span> </button>
								
							</ul>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
							<ul>
								<!--<li><a href="tel:+91000000000"><span class="lnr lnr-phone-handset"></span><span>+91 0000000000</span></a></li>-->
								<!--<li><a href="login/login.php"><span class="lnr lnr-user"></span><span>Login</span></a></li>-->
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="logo-wrap">
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
							<!--<a href="index.html">
							     <img class="img-fluid" src="img/logo.png" alt="">
							</a>-->
							<br>
				      <div class="wrap">
					   <div class="search">
					      <input type="text" class="searchTerm" id="country" placeholder="What are you looking for?">
<!--<input class="search_mobile"  type="text" placeholder="Search" id="country">-->


					      <button type="submit" class="searchButton">
					        <i class="fa fa-search"></i>
					     </button>
					   </div>
					</div>

			
						</div>
						<div class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding ads-banner">
							<img class="img-fluid" src="img/banner-ad.jpg" alt="">
						</div>
					</div>
				</div>
			</div>


			
			<?php
			if (isset($_SESSION['user_id'])) {
				?>

					<div class="container main-menu" id="main-menu open_menu">
				<div class="row align-items-center ">
					<nav id="nav-menu-container" class="">
						<ul class="nav-menu">
							<li>
								<center><img class="img_logo"  style="width: 80px;height: 80px;opacity:0.6;border-radius: 50%;" src="../img/logo/logo.jpeg"><br>
								<label class="clg_news_name" style="color: white;margin-top: 10px;"><?=$_COOKIE['user_name']?></label></center>
							</li>
							<li class="menu-active"><a href="../index1.php">Home</a></li>
							<li><a href="profile.php">Profile</a></li>
							
							<!---<li class="menu-has-children"><a href="">Post Types</a>
							<ul>
								<li><a href="standard-post.html">Standard Post</a></li>
								<li><a href="image-post.html">Image Post</a></li>
								<li><a href="gallery-post.html">Gallery Post</a></li>
								<li><a href="video-post.html">Video Post</a></li>
								<li><a href="audio-post.html">Audio Post</a></li>
							</ul>
						</li>-->
						<li><a href="about.php">About</a></li>
						<li><a href="contact_us.php">Contact</a></li>


						<li><a href="setting.php">Setting</a></li>
						<li><a href="../login/logout.php">Logout</a></li>
					</ul>
					</nav><!-- #nav-menu-container -->
					<div class="navbar-right">
						<!---<form class="Search">
							<input type="text" class="form-control Search-box" name="Search-box" id="Search-box" placeholder="Search">
							<label for="Search-box" class="Search-box-label">
								<span class="lnr lnr-magnifier"></span>
							</label>
							<span class="Search-close">
								<span class="lnr lnr-cross"></span>
							</span>
						</form>-->
					</div>
				</div>
			</div>


				<?php
			}
			else{
				?>

				<div  class="container main-menu" id="main-menu open_menu">
				<div class="row align-items-center ">
					<nav id="nav-menu-container" class="">
						<ul class="nav-menu">
							<li>
								<center><img class="img_logo"  style="width: 110px;height: 110px;;" src="../img/logo/yes.png"><br>
								<label class="clg_news_name" style="color: white;margin-top: 10px;">CLG-NEWS</label></center>
							</li>
							<li class="menu-active"><a href="../index.html">Home</a></li>
							
							<!---<li><a href="category.html">Category</a></li>
							<li class="menu-has-children"><a href="">Post Types</a>
							<ul>
								<li><a href="standard-post.html">Standard Post</a></li>
								<li><a href="image-post.html">Image Post</a></li>
								<li><a href="gallery-post.html">Gallery Post</a></li>
								<li><a href="video-post.html">Video Post</a></li>
								<li><a href="audio-post.html">Audio Post</a></li>
							</ul>
						</li>-->
						<li><a href="about.php">About</a></li>
						<li><a href="contact_us.php">Contact</a></li>
						<li><a href="../login/login.php">Login</a></li>
					</ul>
					</nav><!-- #nav-menu-container -->
					<div class="navbar-right">
						<!---<form class="Search">
							<input type="text" class="form-control Search-box" name="Search-box" id="Search-box" placeholder="Search">
							<label for="Search-box" class="Search-box-label">
								<span class="lnr lnr-magnifier"></span>
							</label>
							<span class="Search-close">
								<span class="lnr lnr-cross"></span>
							</span>
						</form>-->
					</div>
				</div>
			</div>


				<?php

			}



			?>
		</header>
		

  <div style="position: absolute;margin-top: 30px;width: 80%;margin-left: -25%;" id="countryList"></div> 












		<div class="site-main-container">
			<!-- Start top-post Area -->
	<section class="top-post-area pt-10">
				<div class="container no-padding">
					<div class="row small-gutters">
						<h5 style="margin-top: 10px;">About Us</h5>
						








						<!--<div class="col-lg-12">
							<div class="news-tracker-wrap">
								<h6><span>Breaking News:</span>   <a href="#">Astronomy Binoculars A Great Alternative</a></h6>
							</div>-->
						</div>
					</div>
						</section>
				</div>
		

		

</div>
	







		<script src="../js/vendor/bootstrap.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="../js/easing.min.js"></script>
		<script src="../js/hoverIntent.js"></script>
		<script src="../js/superfish.min.js"></script>
		<script src="../js/jquery.ajaxchimp.min.js"></script>
		<script src="../js/jquery.magnific-popup.min.js"></script>
		<script src="../js/mn-accordion.js"></script>
		<script src="../js/jquery-ui.js"></script>
		<script src="../js/jquery.nice-select.min.js"></script>
		<script src="../js/owl.carousel.min.js"></script>
		<script src="../js/mail-script.js"></script>
		<script src="../js/main.js"></script>
	</body>
</html>

<script>  
 $(document).ready(function(){  
      $('#country').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"search/search.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                      console.log(data);
                          $('#countryList').fadeIn();  
                          $('#countryList').html(data);  
                     }  
                });  
           } 
           else{
            $('#countryList').hide();
           } 
      });  
      $(document).on('click', '.list-unstyled-li', function(){  
           $('#country').val($(this).text());  
           $('#countryList').fadeOut();  

      });  
 });  



</script>