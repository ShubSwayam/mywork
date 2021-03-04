<?php
session_start();
$r_idD =  $_SESSION['Rid'];
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
    <section class="site-hero inner-page overlay" style="background-image: url(images/room.jpg)" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row site-hero-inner justify-content-center align-items-center">
                <div class="col-md-10 text-center" data-aos="fade">
                    <h1 class="heading mb-3">Rooms Booking</h1>

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
    <section class="section contact-section" id="next">
        <div class="container">
            <div class="row">
                <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                    <form action="#" method="post" class="bg-white p-md-5 p-4 mb-5 border">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control ">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="phone">mobile</label>
                                <input type="text" name="mobile" id="mobile" class="form-control ">
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="phone">Aadhaar Card</label>
                                <input type="text" name="Aadhaar" id="aadhaar" class="form-control ">
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="phone">Date</label>
                                <input type="date" name="date" id="date" class="form-control ">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control ">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="submit" name="submit" value="Send Message" class="btn btn-primary text-white font-weight-bold">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="row">
                        <div class="col-md-10 ml-auto contact-info">
                            <p><span class="d-block">Address:</span> <span> Village Nagukhedi, Ujjain Road , Dewas</span></p>
                            <p><span class="d-block">Phone:</span> <span> (+91) 9826019190</span><br>
                                <span> (+91) 6262440404</span><br>
                                <span> (+91) 6262889898</span>
                            </p>
                            <p><span class="d-block">Email:</span> <span> Theroyalpalace.com</span></p>
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




<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $Aadhaar = $_POST['Aadhaar'];
    $date = $_POST['date'];
    // print_r($name);
    // die();

    // if (!preg_match("/^[a-zA-Z-']*$/", $name)) {
    //     // $nameErr = "Only letters and white space allowed";
    //     echo "<script>alert('name Space not allowed in Name')</script>";
    //     exit();
    // }
    // if (!preg_match("/^[a-zA-Z-']*$/", $username)) {
    //     // $nameErr = "Only letters and white space allowed";
    //     echo "<script>alert('namespace not allowed Username')</script>";
    //     exit();
    // }
    // if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
    //     // $nameErr = "Only letters and white space allowed";
    //     echo "<script>alert('Enter Valid Email')</script>";
    //     exit();
    // }
    // if (!preg_match("/^[0-9]{10}+$/", $mobile)) {
    //     // $nameErr = "Only letters and white space allowed";
    //     echo "<script>alert('Enter Only Number')</script>";
    //     exit();
    // }


    $stmt = $link->prepare("INSERT INTO __rooms_create(`r_id`, `name`,`Aadhaar`,`email`,`mobile`,`date`) VALUE('$r_idD',?,?,?,?,?)");
    $stmt->bind_param("isiiss", $r_idD,  $name, $Aadhaar, $email, $mobile, $date);
    $stmt->execute();
    if ($stmt->error) exit($stmt->error. 'failur');
    print_r("Done");
    // $stmtS = $link->prepare("SELECT * FROM __master_users WHERE id=(last_insert_id())");
    // $stmtS->execute();
    // if ($stmtS->error) exit($stmtS->error);
    // $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    // echo "<script>alert('Registration Done')</script>";
    exit();
}
?>

</html>