<?php
session_start();
if (!isset($_SESSION['email'])) {
	// echo "<script>alert('Session has been Expired')</script>";
	// header('location: login.php');
	// header("Location: http://localhost/TheRoyalPalace");
	// header('Location: ' . $_SERVER['PHP_SELF']);
}
?>

<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
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
						<span class="center-toggle"></span>
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
	<section class="site-hero overlay" style="background-image: url(images/hero_4.jpg)" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row site-hero-inner justify-content-center align-items-center">
				<div class="col-md-10 text-center" data-aos="fade-up">
					<span class="custom-caption text-uppercase text-white d-block  mb-3">Welcome To
						<!-- <span class="fa fa-star text-primary"></span>   Hotel -->
					</span>
					<h1 class="heading">The Royal Palace</h1>
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
	<section id="next" class="py-5 bg-light">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
					<figure class="img-absolute">
						<img src="images/food-1.jpg" alt="Image" class="img-fluid">
					</figure>
					<img src="images/img_1.jpg" alt="Image" class="img-fluid rounded">
				</div>
				<div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
					<h2 class="heading">Welcome!</h2>
					<p class="mb-4">Located Between Dewas with 36 rooms, roof top restaurant and 3 banquets always buzzing with energy, The Royal Palace is a landmark for the Dewas city.</p>
					<p><a href="about.php" class="btn btn-primary text-white py-2 mr-3">Learn More</a> <!-- <span class="mr-3 font-family-serif"><em>or</em></span> <a href= "https://in.video.search.yahoo.com/yhs/search?fr=yhs-avast-securebrowser&hsimp=yhs-securebrowser&hspart=avast&p=cartoon+click+video+link#id=20&vid=83434943df320a9917ec338c351727bc&action=click"  data-fancybox class="text-uppercase letter-spacing-1">See video</a> -->
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="container">
			<div class="row justify-content-center text-center mb-5">
				<div class="col-md-7">
					<h2 class="heading" data-aos="fade-up">Accomodation</h2>
					<p data-aos="fade-up" data-aos-delay="100">As all the services are inhouse . There is nothing to get worried. </p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-4" data-aos="fade-up">
					<a href="#" class="room">
						<figure class="img-wrap">
							<i class="fa fa-wifi" aria-hidden="true"></i>
						</figure>
						<div class="p-3 text-center room-info">
							<h2>Free Wi-Fi</h2>
							<span class="text-uppercase letter-spacing-1">Lorem Ipsum is simply text printing industry. Lorem Ipsum has been the standard dummy text.</span>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-lg-4" data-aos="fade-up">
					<a href="#" class="room">
						<figure class="img-wrap">
							<i class="fa fa-car" aria-hidden="true"></i>
						</figure>
						<div class="p-3 text-center room-info">
							<h2>Car on Rent</h2>
							<span class="text-uppercase letter-spacing-1">Lorem Ipsum is simply text printing industry. Lorem Ipsum has been the standard dummy text.</span>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-lg-4" data-aos="fade-up">
					<a href="#" class="room">
						<figure class="img-wrap">
							<i class="fa fa-fire-extinguisher" aria-hidden="true"></i>
						</figure>
						<div class="p-3 text-center room-info">
							<h2>Fire Prevention</h2>
							<span class="text-uppercase letter-spacing-1">Lorem Ipsum is simply text printing industry. Lorem Ipsum has been the standard dummy text.</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<section class="section slider-section bg-light">
		<div class="container">
			<div class="row justify-content-center text-center mb-5">
				<div class="col-md-7">
					<h2 class="heading" data-aos="fade-up">Gallery</h2>
					<p data-aos="fade-up" data-aos-delay="100">We take care very good care of our clients . As far as any celebration or event is concern. </p>
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
					</div>
					<!-- END slider -->
				</div>
			</div>
		</div>
	</section>
	<!-- END section -->
	<section class="section testimonial-section">
		<div class="container">
			<div class="row justify-content-center text-center mb-5">
				<div class="col-md-7">
					<h2 class="heading" data-aos="fade-up">People Says</h2>
				</div>
			</div>
			<div class="row">
				<div class="js-carousel-2 owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
					<div class="testimonial text-center slider-item">
						<div class="author-image mb-3">
							<img src="images/person_1.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
						</div>
						<blockquote>
							<p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
						</blockquote>
						<p><em>&mdash; Jean Smith</em></p>
					</div>
					<div class="testimonial text-center slider-item">
						<div class="author-image mb-3">
							<img src="images/person_2.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
						</div>
						<blockquote>
							<p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
						</blockquote>
						<p><em>&mdash; John Doe</em></p>
					</div>
					<div class="testimonial text-center slider-item">
						<div class="author-image mb-3">
							<img src="images/person_3.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
						</div>
						<blockquote>
							<p>&ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.&rdquo;</p>
						</blockquote>
						<p><em>&mdash; John Doe</em></p>
					</div>
					<div class="testimonial text-center slider-item">
						<div class="author-image mb-3">
							<img src="images/person_1.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
						</div>
						<blockquote>
							<p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
						</blockquote>
						<p><em>&mdash; Jean Smith</em></p>
					</div>
					<div class="testimonial text-center slider-item">
						<div class="author-image mb-3">
							<img src="images/person_2.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
						</div>
						<blockquote>
							<p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
						</blockquote>
						<p><em>&mdash; John Doe</em></p>
					</div>
					<div class="testimonial text-center slider-item">
						<div class="author-image mb-3">
							<img src="images/person_3.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
						</div>
						<blockquote>
							<p>&ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.&rdquo;</p>
						</blockquote>
						<p><em>&mdash; John Doe</em></p>
					</div>
				</div>
				<!-- END slider -->
			</div>
		</div>
	</section>
	<section class="section blog-post-entry bg-light">
		<div class="container">
			<div class="row justify-content-center text-center mb-5">
				<div class="col-md-7">
					<h2 class="heading" data-aos="fade-up">Services</h2>
					<p data-aos="fade-up">We Have 32 living units with beautifully designed plush interiors. Several different rooms are designed to accommodate small size family to large. </p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">
					<div class="media media-custom d-block mb-4 h-100">
						<a href="#" class="mb-4 d-block"><img src="images/img_1.jpg" alt="Image placeholder" class="img-fluid"></a>
						<div class="media-body">
							<span class="meta-post">Appox. 40,000 sqft</span>
							<h2 class="mt-0 mb-3"><a href="#">The Sapphire Garden </a></h2>
							<p>The living units at the royal palace offer all the privacy, luxury and relaxation to provide our guests a home-away-from-home experience.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="200">
					<div class="media media-custom d-block mb-4 h-100">
						<a href="#" class="mb-4 d-block"><img src="images/img_2.jpg" alt="Image placeholder" class="img-fluid"></a>
						<div class="media-body">
							<span class="meta-post">Appox. 11,000 sqft</span>
							<h2 class="mt-0 mb-3"><a href="#">The Aquamarine Garden </a></h2>
							<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="300">
					<div class="media media-custom d-block mb-4 h-100">
						<a href="#" class="mb-4 d-block"><img src="images/img_3.jpg" alt="Image placeholder" class="img-fluid"></a>
						<div class="media-body">
							<span class="meta-post">Appox. 60,000 sqft</span>
							<h2 class="mt-0 mb-3"><a href="#">The Emerald Garden </a></h2>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. t is a paradisematic country, in which roasted parts of sentences.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section bg-image overlay" style="background-image: url('images/hero_4.jpg');">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12 col-md-6 text-center mb-4 mb-md-0 text-md-left" data-aos="fade-up">
					<h2 class="text-white font-weight-bold center-section">A Best Place To Stay. Reserve Now!</h2>
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
				<p class="col-md-6 text-left">
					Copyright &copy; All rights reserved | Designed By <i class="icon-heart-o" aria-hidden="true"></i> <a href="#" target="_blank">Trushja infotech</a>
				</p>
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