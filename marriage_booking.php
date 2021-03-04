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
          <h1 class="heading mb-3">Marriage Booking</h1>
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


  <section class="section slider-section bg-light">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-7">
          <h2 class="heading" data-aos="fade-up">Select Your Date</h2>
          <hr>
          <form method="POST">
            <label for="picker">Date From</label>
            <input type="date" name="from" id="picker">

            <label for="picker1">Date To</label>
            <input type="date" name="to" id="picker1">

            <button class="btn btn-primary booking-btn coupon_question" onclick='myfunction()' type="submit" name="datePiick">click</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- END section -->

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




  <div class="container">
    <div class="card" id="displaytable" style="width: 18rem;">
      <!-- <img class="card-img-top" src="./images/room.jpg" alt="Card image cap">
      <div class="card-body"> -->
      <?php
      include_once './sql_con.php';

      if (isset($_POST['datePiick'])) {
        $to = $_POST['to'];
        $from =   $_POST['from'];
        $stmt = $link->prepare("SELECT * from __rooms where date between '$from ' AND ' $to' ORDER by date");
        $stmt->execute();
        $newus = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        $count_data = count($newus);
        if ($count_data == "0") {
          echo "<script>alert('Rooms Not Available')</script>";

      ?>
        <?php
        } else { ?>
          <?php
          foreach ($newus as $key => $val) {
            $titleD = $val['title'];
            $descriptionD = $val['description'];
            $r_idD = $val['r_id'];
          }
          ?>
          <img class="card-img-top" src="./images/room.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $r_idD; ?></h5>
            <?php $_SESSION['Rid'] = $r_idD; ?>
            <h5 class="card-title"><?php echo $titleD; ?></h5>
            <p class="card-text"><?php echo $descriptionD; ?></p>
            <a href="marriage_room_booking.php" class="btn btn-primary">Go somewhere</a>

        <?php }
      }
        ?>
          </div>
    </div>
  </div>


  <script type="text/javascript">
    function myfunction() {
      if (document.getElementById("displaytable").style.display === "none")
        document.getElementById("displaytable").style.display = "block";
      else
        document.getElementById("displaytable").style.display = "none";
    }
  </script>

</body>

</html>