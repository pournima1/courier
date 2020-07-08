<?php

include('db/db2.php');
session_start();

if (!isset($_COOKIE['user_id'])) {
	header('location:index.php');
}








?>
<?php



?><!DOCTYPE html>
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
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/jquery-ui.css">
		<link rel="stylesheet" href="css/main.css">
		<script src="js/likes.js"></script>
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

.list-unstyled{  
                /*background-color:#fff;*/  
                cursor:pointer;  
                height: 50%;
                overflow-x: auto;
                position: absolute;
                width: 100%;
                margin-top: %;
                margin-left: 0%;

           }  
           .list-unstyled-li{  
                padding:12px;  
                background: white;
           }  
           .list-unstyled a:hover {
                text-decoration: none;
                font-weight: bold;
           }
           .list-unstyled a{
                text-decoration: none;
                font-weight: bold;
           }

           .plus{
            color: #F76404;
           }



            .list-unstyled2{  
                /*background-color:#fff;*/  
                cursor:pointer;  
                height: 80%;
                overflow-x: auto;
                position: absolute;
                width: 100%;
                /*margin-top: -17%;
                margin-left: 40%;*/
                text-decoration: none;
                margin-left: -9%;

           }  
           .list-unstyled-li2{  
                padding:12px;  
                background: white;
           }  
           .list-unstyled2 a{
               text-decoration: none;
               list-style: none;
                color: black;
                  font-weight: bold;
           }
           .list-unstyled2 a .list-unstyled-li2{
               text-decoration: none;
                color: black;
                list-style: none;
           }


           .list-unstyled2 a:hover{
                text-decoration: none;
                list-style: none;
           }
           .list-unstyled2:hover{
            text-decoration: none;
            list-style: none;
           }
           .plus2{
            color: #F76404;
           }
           .list-unstyled-li2{
            text-decoration: none;
           }

           .search_icon{
            width: 25px;
            height: 25px;
           }


#countryList{
	position:absolute;margin-top:-51%;
	width: 28%;margin-left: 8%;
	height: 300px;background-color: ;display: ;
}


.box_promotion{
	display: none;
}

.pramotion_box{
	display: none;
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


.list-unstyled{  
                /*background-color:#fff;*/  
                cursor:pointer;  
                height: 50%;
                overflow-x: auto;
                position: absolute;
                width: 100%;
                margin-top: %;
                margin-left: 0%;

           }  
           .list-unstyled-li{  
                padding:12px;  
                background: white;
           }  
           .list-unstyled a:hover {
                text-decoration: none;
                font-weight: bold;
           }
           .list-unstyled a{
                text-decoration: none;
                font-weight: bold;
           }

           .plus{
            color: #F76404;
           }



            .list-unstyled2{  
                /*background-color:#fff;*/  
                cursor:pointer;  
                height: 80%;
                overflow-x: auto;
                position: absolute;
                width: 100%;
                /*margin-top: -17%;
                margin-left: 40%;*/
                text-decoration: none;
                margin-left: -9%;

           }  
           .list-unstyled-li2{  
                padding:12px;  
                background: white;
           }  
           .list-unstyled2 a{
               text-decoration: none;
               list-style: none;
                color: black;
                  font-weight: bold;
           }
           .list-unstyled2 a .list-unstyled-li2{
               text-decoration: none;
                color: black;
                list-style: none;
           }


           .list-unstyled2 a:hover{
                text-decoration: none;
                list-style: none;
           }
           .list-unstyled2:hover{
            text-decoration: none;
            list-style: none;
           }
           .plus2{
            color: #F76404;
           }
           .list-unstyled-li2{
            text-decoration: none;
           }

           .search_icon{
            width: 25px;
            height: 25px;
           }



#countryList{
	position:absolute;
	margin-top:-880px;
	width: 85%;
	margin-left: 8%;
	height: 400px;
	background-color: ;display: ;
}




.box_promotion{
	display: block;
}



.pramotion_box{
	display: block;
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




	<body>

		<div id="load_screen">
	<div  id="loading">
		<center><img style="width: 90px;height: 90px;" src="img/logo/DEGREE LOGO.png"></center>
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
								
								

								<li><a href="pages/post_news.php"><span class="lnr lnr-camera"></span><span>POST NEWS</span></a></li>

								<li><a href="pages/notification.php"><i class="fas fa-bell"></i></span><span></span></a></li>

								<!---<li><i class="fas fa-bell open_menu"></i></span><span></span></li>-->

								
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

			<div class="container main-menu" id="main-menu open_menu">
				<div class="row align-items-center ">
					<nav id="nav-menu-container" class="">
						<ul class="nav-menu">
							<li>
								<center><img class="img_logo"  style="width: 80px;height: 80px;" src="img/logo/DEGREE LOGO.png"><br>
								<label class="clg_news_name" style="color: white;margin-top: 10px;"><?=$_COOKIE['user_name']?></label></center>
							</li>
							<li class="menu-active"><a href="index1.php">Home</a></li>
							<li><a href="pages/profile.php">Profile</a></li>
							
						
						<li><a href="pages/about.php">About</a></li>
						<li><a href="pages/contact_us.php">Contact</a></li>


						<li><a href="pages/setting.php">Setting</a></li>
						<li><a href="login/logout.php">Logout</a></li>
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







<script type="text/javascript">
	$(".open_menu").click(function(){
		//$('#mobile-nav-toggle').click();

	});
</script>









		</header>

		<div class="site-main-container">
			<!-- Start top-post Area -->
			<section class="top-post-area pt-10">
				<div class="container no-padding">
					<div class="row small-gutters">

						<?php
						include('db/db.php');
						$sql2 = "SELECT * FROM main_post where status = '1'";
						$result = mysqli_query($conn, $sql2);
						if(mysqli_num_rows($result) > 0){
							foreach($result as $row){
								?>
							<div class="col-lg-8 top-post-left">
							<div class="feature-image-thumb relative">
								<div class=""></div>
								<img class="img-fluid img1_post" src="img/<?=$row['post_img'];?>" alt="">
							</div>
							<div class="top-post-details">
								<!--<ul class="tags">
									<li><a href="#">Food Habit</a></li>
								</ul>-->
								<a href="image-post.html">
									<h3><?=$row['caption']?></h3>
								</a>
								<ul class="meta">
									<li><a href="#"><span class="lnr lnr-user"></span>2 Views</a></li>
									<li><a href="#"><span class="lnr lnr-heart"></span>0 Likes</a></li>
									<li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
								</ul>
							</div>
						</div>


								<?php
							}

						}
						else{
							?>

                       <div class="col-lg-8 top-post-left">
							<div class="feature-image-thumb relative">
								<div class=""></div>
								<img class="img-fluid" src="img/banner/banner size less.jpg" alt="">
							</div>
							<div class="top-post-details">
								<ul class="tags">
								
								</ul>
								<a href="image-post.html">
								
								</a>
								<ul class="meta">
							
								</ul>
							</div>
						</div>

							<?php
						}
						?>


                       <?php
						$sql3 = "SELECT * FROM main_post2 where status = '1'";
						$result3 = mysqli_query($conn, $sql3);
						if(mysqli_num_rows($result3) > 0){
							foreach($result as $row){
								?>
								<div class="col-lg-4 top-post-right">
							<div class="single-top-post">
								<div class="feature-image-thumb relative">
									<div class=""></div>
									<img style="height:240px;" class="img-fluid" src="img/<?=$row['post_img'];?>" alt="">
								</div>
								<div class="top-post-details">
									<!--<ul class="tags">
										<li><a href="#">Food Habit</a></li>
									</ul>-->
									<a href="image-post.html">
										<h4><?=$row['caption']?></h4>
									</a>
									<ul class="meta">
									<li><a href="#"><span class="lnr lnr-user"></span>2 Views</a></li>
									<li><a href="#"><span class="lnr lnr-heart"></span>0 Likes</a></li>
									<li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
									</ul>
								</div>
							</div>




								<?php
							}
						}
						else{
							?>
							<div class="col-lg-4 top-post-right">
							<div class="single-top-post">
								<div class="feature-image-thumb relative">
									<div class=""></div>
									<img class="img-fluid" src="img/banner/low-01.jpg" alt="">
								</div>
								<div class="top-post-details">
									<ul class="tags">
										
									</ul>
									<a href="image-post.html">
									
									</a>
									<ul class="meta">
									
									</ul>
								</div>
							</div>


							<?php
						}
						?>

          <?php
						$sql4 = "SELECT * FROM main_post3 where status = '1'";
						$result4 = mysqli_query($conn, $sql4);
						if(mysqli_num_rows($result4) > 0){
							foreach($result4 as $row){
								?>

                               <div class="single-top-post mt-10">
								<div class="feature-image-thumb relative">
									<div class=""></div>
									<img style="height:240px;" class="img-fluid" src="img/<?=$row['post_img'];?>" alt="">
								</div>
								<div class="top-post-details">
									<!--<ul class="tags">
										<li><a href="#">Food Habit</a></li>
									</ul>--->
									<a href="image-post.html">
										<h4><?=$row['caption']?></h4>
									</a>
									<ul class="meta">
									<li><a href="#"><span class="lnr lnr-user"></span>2 Views</a></li>
									<li><a href="#"><span class="lnr lnr-heart"></span>0 Likes</a></li>
									<li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
									</ul>
								</div>
							</div>
						</div>



								<?php
							}
						}
						else{
							?>
							<div class="single-top-post mt-10">
								<div class="feature-image-thumb relative">
									<div class=""></div>
									<img class="img-fluid" src="img/banner/low-01.jpg" alt="">
								</div>
								<div class="top-post-details">
									<ul class="tags">
										
									</ul>
									<a href="image-post.html">
										
									</a>
									<ul class="meta">
									
									</ul>
								</div>
							</div>
						</div>



							<?php
						}
						?>














						<!--<div class="col-lg-12">
							<div class="news-tracker-wrap">
								<h6><span>Breaking News:</span>   <a href="#">Astronomy Binoculars A Great Alternative</a></h6>
							</div>-->
						</div>
					</div>
				</div>
			</section>














			<div style="" id="countryList">
  
              </div> 





			<!-- End top-post Area -->
			<!-- Start latest-post Area -->


			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-8 post-list">
							<!-- Start latest-post Area -->
							<div class="latest-post-wrap">
								<h4 class="cat-title">Latest News</h4>

<!----- Start Post---->

								<?php
								include('db/db.php');
								$sql = "SELECT * FROM img_post where post_status='Active' order by post_id desc";
								$result = mysqli_query($conn, $sql);
								if (mysqli_num_rows($result) > 0) {
									foreach ($result as $row) {
										?>
								<?php $short_info = $row['short_info'];?>
								<?php $time_date = $row['time_date'];?>
								<?php $user_id = $row['user_id'];?>

								<div class="single-latest-post row align-items-center">
									<div class="col-lg-5 post-left">
										<div class="feature-img relative">
											<div class=""></div>
											<a href="image?post=<?=$row['post_id']?>"><img class="img-fluid post_img" src="img/<?=$row['img']?>" alt=""></a>
										</div>
										<ul class="tags">
											<?php
											/*$user_id = $row['user_id'];
											$sql = "SELECT * FROM login where user_id = '$user_id'";
											$result = mysqli_query($conn, $sql);
											if (mysqli_num_rows($result) > 0) {
												foreach ($result as $row) {
													$user_name = $row['user_name'];
												}
											}*/
											?>



											<!--<li><a href="#"><?=$user_name?></a></li>--->
										</ul>
									</div>
									<div class="col-lg-7 post-right">
										<a href="image?post=<?=$row['post_id']?>">
											<?php $post_id = $row['post_id']?>
											<h4 style="color: black"><?=$row['caption']?></h4>
										</a>



										<form class="form-submit" method="POST">
										<ul class="meta">

											<?php
											include('db/db.php');
											$sql = "SELECT count(views_ip) as view FROM views where post_id='$post_id'";
											$res = mysqli_query($conn, $sql);
											if (mysqli_num_rows($res) > 0) {
												foreach ($res as $row) {
													?>

													<li><a href="#"><span class="lnr lnr-user"></span><span><?=$row['view'];?></span> Views</a></li>
													<?php
												}
											}

											?>

											<?php
											include('db/db.php');
											$sql = "SELECT count(user_id) as likes FROM likes where post_id='$post_id'";
											$res = mysqli_query($conn, $sql);
											if (mysqli_num_rows($res) > 0) {
												foreach ($res as $row) {
													?>

													<input type="hidden" class="post_id" value="<?=$post_id?>">
													<input type="hidden" class="user_id" value="<?=$user_id?>">
												<li><span class="lnr lnr-heart likes_btn"></span><span><?=$row['likes'];?></span> Likes</li>



													<?php
												}
											}

											?>



											<?php
											include('db/db.php');
											$sql = "SELECT count(comment) as comment FROM comments where post_id='$post_id'";
											$res = mysqli_query($conn, $sql);
											if (mysqli_num_rows($res) > 0) {
												foreach ($res as $row) {
													?>

													<li><a href="#"><span class="lnr lnr-bubble"></span><span><?=$row['comment'];?></span> Comment</a></li>
													<?php
												}
											}

											?>



										</ul>
											</form>


										<p class="excert">
											<?=$short_info?>
										</p>

										
										<br>

								
										<?php
										$sql_pro = "SELECT * FROM pramotion_post where end_date > CURDATE() order by rand() LIMIT 1";
										$result_pro = mysqli_query($conn, $sql_pro);
										if (mysqli_num_rows($result_pro) > 0) {
											foreach ($result_pro as $row) {
												?>
												<div style="background-color: #EAEDED;" class="single-sidebar-widget pramotion_box">
									<h6 class="title">Pramotion</h6>
									<div class="editors-pick-post">
												<div class="feature-img-wrap relative">
													<div class="feature-img relative">
														<div class=""></div>
														<center><img style="width: 80%;height: 80%;" class="img-fluid post_img" src="data:image/jpeg;base64,<?=base64_encode($row['pro_img'])?>" alt=""></center>
													</div>
													<!--<ul class="tags">
														<li><a href="#">Travel</a></li>
													</ul>--->
												</div>
												<div style="margin-left: 20px;" class="details">
													<a  href="">
														<h4 class="mt-20" style="color:black;"><?=$row['pro_caption']?></h4>
													</a>
													<!---<ul class="meta">
														<li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
														<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
														<li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
													</ul>--->
													<p class="excert">
														<?=$row['short_description']?>
													</p>
												</div>


									</div>
								</div>

												<?php
											}
											// code...
										}

										 ?>

											
											
										
									</div>
								</div>



									<?php
								}
								}
								?>

<!----End Post ---->









							<div class="col-lg-12 ad-widget-wrap mt-30 mb-30">
								<img class="img-fluid" src="img/banner-ad.jpg" alt="">
							</div>





							</div>



						</div>
						<div class="col-lg-4">
							<div class="sidebars-area">
								<div class="single-sidebar-widget editors-pick-widget">
									<h6 class="title">Pramotion</h6>
									<div class="editors-pick-post">




										<?php
										$sql_pro = "SELECT * FROM pramotion_post where end_date > CURDATE() order by pro_id desc";
										$result_pro = mysqli_query($conn, $sql_pro);
										if (mysqli_num_rows($result_pro) > 0) {
											foreach ($result_pro as $row) {
												?>

												   <center><div class="feature-img-wrap relative">
													<div class="feature-img relative">
														<div class=""></div>
	                                             <img style="width: 60%;height: 60%;" class="img-fluid post_img" src="data:image/jpeg;base64,<?=base64_encode($row['pro_img'])?>" alt="">
													</div>
													<!--<ul class="tags">
														<li><a href="#">Travel</a></li>
													</ul>--->
												</div></center>
												<div class="details">
													<a href="image-post.html">
														<h4 class="mt-20" style="color:black;"><?=$row['pro_caption']?></h4>
													</a>
													<!---<ul class="meta">
														<li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
														<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
														<li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
													</ul>--->
													<p class="excert">
														<?=$row['short_description']?>
													</p>
												</div>


												<?php
											}
											// code...
										}

										 ?>








									</div>
								</div>

								<div class="single-sidebar-widget ads-widget">
									<img class="img-fluid" src="img/sidebar-ads.jpg" alt="">
								</div>
								<div class="single-sidebar-widget newsletter-widget">
									<h6 class="title">FeedBack</h6>
									<p>
										Give us yours feedback.
									</p>
									<div class="form-group d-flex flex-row">
										<div class="col-autos">
											<div class="input-group">
												<input class="form-control" style="color:black;" placeholder="feedback" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" type="text">
											</div>
										</div>
										<a href="#" style="height:36px;margin-top:13px;" class="bbtns">Send</a>
									</div>
									<!----<p>
										You can unsubscribe us at any time
									</p>--->
								</div>
							


								</div>
								<!----<div class="single-sidebar-widget social-network-widget">
									<h6 class="title">Social Networks</h6>
									<ul class="social-list">
										<li class="d-flex justify-content-between align-items-center fb">
											<div class="icons d-flex flex-row align-items-center">
												<i class="fa fa-facebook" aria-hidden="true"></i>
												<p>983 Likes</p>
											</div>
											<a href="#">Like our page</a>
										</li>
										<li class="d-flex justify-content-between align-items-center tw">
											<div class="icons d-flex flex-row align-items-center">
												<i class="fa fa-twitter" aria-hidden="true"></i>
												<p>983 Followers</p>
											</div>
											<a href="#">Follow Us</a>
										</li>
										<li class="d-flex justify-content-between align-items-center yt">
											<div class="icons d-flex flex-row align-items-center">
												<i class="fa fa-youtube-play" aria-hidden="true"></i>
												<p>983 Subscriber</p>
											</div>
											<a href="#">Subscribe</a>
										</li>
										<li class="d-flex justify-content-between align-items-center rs">
											<div class="icons d-flex flex-row align-items-center">
												<i class="fa fa-rss" aria-hidden="true"></i>
												<p>983 Subscribe</p>
											</div>
											<a href="#">Subscribe</a>
										</li>
									



									</ul>
								</div>-->
							</div>
						</div>









					</div>
				</div>
			</section>


</form>












			<!-- End latest-post Area -->
		</div>

		<!-- start footer Area -->
		<footer class="footer-area section-gap">
			<div class="container">
				<div class="row">
					
					<div class="col-lg-2 col-md-6 single-footer-widget">
						<h4>About</h4>
						<ul>
							<li><a href="about.php">About us</a></li>
							<li><a href="contact_us.php">Contact US</a></li>
							
						</ul>
					</div>
					<div class="col-lg-2 col-md-6 single-footer-widget">
						<h4>Privacy</h4>
						<ul>
							<li><a href="pages/pivacy_policy.php">Privacy Policy</a></li>
							<li><a href="pages/terms_and_condition.php">Terms and Condition</a></li>
							
						</ul>
					</div>
					<div class="col-lg-2 col-md-6 single-footer-widget">
						
					</div>
					<div class="col-lg-3 col-md-6 single-footer-widget">
						<h4>Instragram Feed</h4>
						<ul class="instafeed d-flex flex-wrap">
					
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							
						</ul>
					</div>
				</div>

			</div>
		</footer>
		<!-- End footer Area -->
		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="js/easing.min.js"></script>
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/mn-accordion.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/mail-script.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>


<script>

	$(document).ready(function(){
		$('.likes_btn').click(function(){
			var $form = $(this).closest(".form-submit");
			var user_id  = $form.find('.user_id').val();
			var post_id  = $form.find('.post_id').val();
			   alert(post_id);

				 $.ajax({
					 url:'',
					 method:'POST',
					 data:{user_id:user_id, post_id:pos}
				 })

		});
	});






</script>


<script>  
 $(document).ready(function(){  
 	$('#countryList').hide();
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