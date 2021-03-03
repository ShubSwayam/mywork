<?php
session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>The Royal Palace</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">
	<link rel="stylesheet" href="css/fancybox.min.css">
	<link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/custom-royal.css">
</head>

<body>
	<header class="site-header js-site-header">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-6 col-lg-4 site-logo" data-aos="fade"><a href="index.php">Royal Palace</a></div>
				<div class="col-6 col-lg-8">
					<div class="site-menu-toggle js-site-menu-toggle" data-aos="fade">
						<span></span>
						<span></span>
						<span></span>
					</div>
					<!-- END menu-toggle -->
					<div class="site-navbar js-site-navbar">
						<nav role="navigation">
							<div class="container">
								<div class="row full-height align-items-center">
									<div class="col-md-6 mx-auto">
										<ul class="list-unstyled menu">
											<li class="active"><a href="#"><?php echo $_SESSION['email']; ?></a></li>
											<li class="active"><a href="index.php">Home</a></li>
											<li><a href="about.php">About us</a></li>
											<li><a href="services.php">Services</a></li>
											<li><a href="accomodation.php">Accomodation</a></li>
											<li><a href="contact.php">Contact</a></li>
											<?php if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
											?>
												<li><a href="packages.php">Booking</a></li>
												<li><a href="logout.php">Logout</a></li>
											<?php } else { ?>
												<li><a href="login.php">Login</a></li>
											<?php } ?>
										</ul>
									</div>
								</div>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- END head -->
	<section class="site-hero inner-page overlay" style="background-image: url(images/hero_4.jpg)" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row site-hero-inner justify-content-center align-items-center">
				<div class="col-md-10 text-center" data-aos="fade">
					<h1 class="heading mb-3">About Us</h1>
				</div>
			</div>
		</div>
		<a class="mouse smoothscroll" href="#next">
			<div class="mouse-icon">
				<span class="mouse-wheel"></span>
			</div>
		</a>
	</section>
	<!-- END section -->
	<section class="py-5 bg-light" id="next">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
					<figure class="img-absolute">
						<img src="images/food-1.jpg" alt="Free Website Template by Templateux" class="img-fluid">
					</figure>
					<img src="images/img_1.jpg" alt="Image" class="img-fluid rounded">
				</div>
				<div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
					<h2 class="heading">Welcome!</h2>
					<p class="mb-4">Located Between Dewas with 36 rooms, roof top restaurant and 3 banquets always buzzing with energy, The Royal Palace is a landmark for the Dewas city.</p>
					<p><a href="#" class="btn btn-primary text-white py-2 mr-3">Learn More</a><!-- <span class="mr-3 font-family-serif"><em>or</em></span> <a href="https://vimeo.com/channels/staffpicks/93951774"  data-fancybox class="text-uppercase letter-spacing-1">See video</a></p> -->
				</div>
			</div>
		</div>
	</section>
	<section class="section slider-section bg-light">
		<div class="container">
			<div class="row justify-content-center text-center mb-5">
				<div class="col-md-7">
					<h2 class="heading" data-aos="fade-up">Photos</h2>
					<p data-aos="fade-up" data-aos-delay="100">We Have 32 living units with beautifully designed plush interiors. Several different rooms are designed to accommodate small size family to large. </p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
						<div class="slider-item">
							<a href="images/slider-1.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-1.jpg" alt="Image placeholder" class="img-fluid"></a>
						</div>
						<div class="slider-item">
							<a href="images/slider-2.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-2.jpg" alt="Image placeholder" class="img-fluid"></a>
						</div>
						<div class="slider-item">
							<a href="images/slider-3.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-3.jpg" alt="Image placeholder" class="img-fluid"></a>
						</div>
						<div class="slider-item">
							<a href="images/slider-4.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-4.jpg" alt="Image placeholder" class="img-fluid"></a>
						</div>
						<div class="slider-item">
							<a href="images/slider-5.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-5.jpg" alt="Image placeholder" class="img-fluid"></a>
						</div>
						<div class="slider-item">
							<a href="images/slider-6.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-6.jpg" alt="Image placeholder" class="img-fluid"></a>
						</div>
						<div class="slider-item">
							<a href="images/slider-7.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-7.jpg" alt="Image placeholder" class="img-fluid"></a>
						</div>
					</div>
					<!-- END slider -->
				</div>
			</div>
		</div>
	</section>
	<!-- END section -->
	<section class="section bg-image overlay" style="background-image: url('images/hero_4.jpg');">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12 col-md-6 text-center mb-4 mb-md-0 text-md-left" data-aos="fade-up">
					<h2 class="text-white font-weight-bold">A Best Place To Stay. Reserve Now!</h2>
				</div>
			</div>
		</div>
	</section>
	<footer class="section footer-section">
		<div class="container">
			<div class="row mb-4">
				<div class="col-md-3 mb-5">
					<ul class="list-unstyled link">
						<li><a href="about.php">About Us</a></li>
						<li><a href="#">Terms &amp; Conditions</a></li>
						<li><a href="packages.php">Rooms</a></li>
					</ul>
				</div>
				<div class="col-md-3 mb-5">
					<ul class="list-unstyled link">
						<li><a href="services.php">The Rooms &amp; Suites</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="contact.php">Contact Us</a></li>
					</ul>
				</div>
				<div class="col-md-3 mb-5 pr-md-5 contact-info">
					<p><span class="d-block"><span class="ion-ios-location h5 mr-3 text-primary"></span>Address:</span> <span> Village Nagukhedi, <br> Ujjain Road , Dewas</span></p>
					<p><span class="d-block"><span class="ion-ios-telephone h5 mr-3 text-primary"></span>Phone:</span> <span> (+91) 9826019190</span></p>
					<p><span class="d-block"><span class="ion-ios-email h5 mr-3 text-primary"></span>Email:</span> <span> Theroyalpalace.com</span></p>
				</div>
				<div class="col-md-3 mb-5">
					<p>Sign up for our newsletter</p>
					<form action="#" class="footer-newsletter">
						<div class="form-group">
							<input type="email" class="form-control" placeholder="Email...">
							<button type="submit" class="btn"><span class="fa fa-paper-plane"></span></button>
						</div>
					</form>
				</div>
			</div>
			<div class="row pt-5">
				<p class="col-md-6 text-left">Copyright &copy; All rights reserved | Designed By <i class="icon-heart-o" aria-hidden="true"></i> <a href="#" target="_blank">Trushja infotech</a></p>
				<p class="col-md-6 text-right social">
					<a href="https://www.facebook.com/theroyalpalace.trp/"><span class="fa fa-facebook"></span></a>
					<a href="#"><span class="fa fa-twitter"></span></a>
					<a href="https://www.instagram.com/theroyalpalace.trp/"><span class="fa fa-instagram"></span></a>
				</p>
			</div>
		</div>
	</footer>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/jquery.fancybox.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/jquery.timepicker.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>