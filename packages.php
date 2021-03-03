<?php 
session_start();
if (isset($_SESSION['email']) == "") {
  echo "<script>alert('Booking Not Allowed , Wrong credentials.......  ')</script>";
  // header('Location: login.php');
  exit();
}
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
                      <li><a href="index.php">Home</a></li>
                      <li><a href="about.php">About</a></li>
                      <li><a href="services.php">Services</a></li>
                      <li><a href="accomodation.php">Accomodation</a></li>
                      <li class="active"><a href="packages.php">Packages</a></li>
                      <li><a href="contact.php">Contact</a></li>
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
          <h1 class="heading mb-3">Booking</h1>
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
  <section class="section bg-light" id="next">
    <div class="container">
      <div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="100">
        <a href="#" class="image d-block bg-image-2" style="background-image: url('images/img_1.jpg');"></a>
        <div class="text">
          <!-- <span class="d-block mb-4"><span class="display-4 text-primary">$199</span> <span class="text-uppercase letter-spacing-2">/ per night</span> </span> -->
          <h2 class="mb-4">Marriage Booking</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p><a href="marriage_booking.php" class="btn btn-primary text-white">Book Now</a></p>
        </div>
      </div>
      <div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="200">
        <a href="#" class="image d-block bg-image-2 order-2" style="background-image: url('images/img_2.jpg');"></a>
        <div class="text order-1">
          <span class="d-block mb-4"><span class="display-4 text-primary">$299</span> <span class="text-uppercase letter-spacing-2">/ per night</span> </span>
          <h2 class="mb-4">Party Booking</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p><a href="#" class="btn btn-primary text-white">Book Now</a></p>
        </div>
      </div>
      <div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="100">
        <a href="#" class="image d-block bg-image-2" style="background-image: url('images/img_1.jpg');"></a>
        <div class="text">
          <span class="d-block mb-4"><span class="display-4 text-primary">$199</span> <span class="text-uppercase letter-spacing-2">/ per night</span> </span>
          <h2 class="mb-4">Room Booking</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p><a href="#" class="btn btn-primary text-white">Book Now</a></p>
        </div>
      </div>
      <div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="200">
        <a href="#" class="image d-block bg-image-2 order-2" style="background-image: url('images/img_2.jpg');"></a>
        <div class="text order-1">
          <span class="d-block mb-4"><span class="display-4 text-primary">$299</span> <span class="text-uppercase letter-spacing-2">/ per night</span> </span>
          <h2 class="mb-4">Presidential Room</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p><a href="#" class="btn btn-primary text-white">Book Now</a></p>
        </div>
      </div>
    </div>
  </section>
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
        <p class="col-md-6 text-left">
          Copyright &copy; All rights reserved | Designed By <i class="icon-heart-o" aria-hidden="true"></i> <a href="#" target="_blank">Trushja infotech</a></p>
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