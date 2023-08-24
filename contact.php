<?php

// Start the session
session_start();

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn->connect_error) {
  exit('Could not connect');

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap"
    rel="stylesheet">



  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css?ver=55" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <style>
    #map {
      height: 500px;
      width: 100%;
    }
    
    .contact .detail {
  width: 100%;
  background: #fff;
}

.contact .detail i {
  font-size: 20px;
  color: #556270;
  float: left;
  width: 44px;
  height: 44px;
  background: #edeff1;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50px;
  transition: all 0.3s ease-in-out;
}

.contact .detail h4 {
  padding: 0 0 0 60px;
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 5px;
  color: #556270;
}

.contact .detail p {
  padding: 0 0 0 60px;
  margin-bottom: 0;
  font-size: 14px;
  color: #8795a4;
}

.contact .detail .email,
.contact .detail .phone {
  margin-top: 40px;
}

.contact .detal .email:hover i,
.contact .detail .address:hover i,
.contact .detail .phone:hover i {
  background: #556270;
  color: #fff;
}
    

.header .logo {
            justify-content: center;
            align-items: center;
}

.navbar .dropdown_navbar {
        
            position: relative;
            display: inline-block;
        }
        .dropdown_navbar-content {
            display: none;
            position: absolute;
            min-width: 200px;
            background-color: #F0F8FF;
            z-index: 1;
        }
        .dropdown_navbar:hover .dropdown_navbar-content {
            display: block;
        }
}

.header .logo {
    position : center;
}

@media (max-width: 600px) {
            .container {
                flex-direction: column;
            }
        }


</style>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

<div class ="logo">
      <a href="index.php" class="logo me-auto"><img src="assets/img/logo header.png" alt="" class="img-fluid"  >
      </div>
      
        <nav id="navbar" class="navbar">
          <ul>
    
                                <?php
             if ($_SESSION ["name"]!=""){
                 echo '<li><a href="index.php"> Hi, &nbsp; <strong> '.$_SESSION ["name"].'</strong>!</li>';
                echo '<li><a href="about.php">About</a></li>';
          echo '<li><a href="projects.php">Projects</a></li>';
          
          echo '
              <div class="dropdown_navbar">
        <li><a href="#">Activities</a></li>
        <div class="dropdown_navbar-content">
           <a href="activities.php">Activities</a>
            <a href="gallery.php">Gallery</a>
            <a href="students.php">Students</a>
        </div>
    </div>';
               echo '  <li><a href="contact.php">Contact</a></li>';
 echo '<li><a href="logout.php"> <i style="font-size:24px" class="fas fa-sign-out-alt"></i> </a></li>'; 
    echo ' <li><a href="search.php"> <i style="font-size:24px" class="fa">&#xf002;</i> </a></li>';
 
          
             }
             else {
                echo '<li><a href="index.php"> Hi,  &nbsp; <strong> Guest </strong>!</li>';
                echo '<li><a href="about.php">About</a></li>';
          echo '<li><a href="projects.php">Projects</a></li>';
          
          echo '
              <div class="dropdown_navbar">
        <li><a href="#">Activities</a></li>
        <div class="dropdown_navbar-content">
           <a href="activities.php">Activities</a>
            <a href="gallery.php">Gallery</a>
            <a href="students.php">Students</a>
        </div>
    </div>';
               echo '  <li><a href="contact.php">Contact</a></li>';
                echo '<li><a href="login&regist.php">Log In </i></a></li>';
                    echo ' <li><a href="search.php"> <i style="font-size:24px" class="fa">&#xf002;</i> </a></li>';
  
             }
             ?>
            
           
            
            <ul>
                
        </nav>

        <!-- ======= Search Form ======= -->
        <!--<form class="search-form" action="/search" method="get">-->
        <!--  <input class="search-input" type="text" name="q" placeholder="Search..">-->
        <!--  <button class="search-button" type="submit">Search</button>-->
        <!--</form>-->

        <!-- End Search Form -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">


      <div class="container">
        <H1> Contact Us</H1>
        <div class="long-line"> </div>
        <div id="map">

          <script>
            function initMap() {
              var options = {
                center: { lat: 5.3579, lng: 100.3027 },
                zoom: 15
              };

              var map = new google.maps.Map(document.getElementById('map'), options);

              var logoIcon = {
                url: 'assets/img/logo.png',
                scaledSize: new google.maps.Size(50, 50),
              };

              var marker = new google.maps.Marker({
                position: { lat: 5.356906, lng: 100.303368 },
                map: map,
                icon: logoIcon,
                title: 'Universiti Sains Malaysia'
              });

              marker.addListener('click', function () {
                var infoWindow = new google.maps.InfoWindow({
                  content: 'Universiti Sains Malaysia'
                });
                infoWindow.open(map, marker);
              });
            }
          </script>

          <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMSYSdxRC5gv5eguy6H7OWfaUp1Fv5IYg&callback=initMap"
            async defer>
            </script>

        </div>
           
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="detail">
              <div class="address">
<br>
<br>
                <i class="fas fa-map-pin"></i>
                <h4>Location:</h4>
                <p>Universiti Sains Malaysia <br>
                  11800 USM Penang, Malaysia</p>
              </div>
<br>
              <div class="email">
                <i class="fas fa-envelope"></i>
                <h4>Email:</h4>
                <p>hello@usm.my </p>
              </div>
<br>
              <div class="phone">
                <i class="fas fa-phone"></i>
                <h4>Call:</h4>
                <p>+604-653 3888</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8">
        <img src="assets/img/usm.jpg" width= "100%"
          height = "70%" >
          </div>
          
        </div>
      </div>

 </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <div class="footer-info">
              <h3>Universiti Sains Malaysia</h3>
              <p>
                USM is a pioneering, transdisciplinary research intensive university that empowers future talents and
                enables the bottom billions to transform their socio-economic well-being.
              </p>
              <div class="social-links mt-3">
                <a href="https://twitter.com/USMOfficial1969" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/USMOfficial1969" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/usmofficial1969/" class="instagram"><i
                    class="bx bxl-instagram"></i></a>
                <a href="https://www.linkedin.com/school/universiti-sains-malaysia-official/mycompany/"
                  class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
              <br>
              <br>
            </div>
          </div>

          <div class="col">
            <div class="footer-info">
              <h3>Contact Info</h3>
              <p>
                Universiti Sains Malaysia <br>
                Gelugor, Penang <br>
                11800, Malaysia<br><br>
                <strong>Phone:</strong>+604-653 3888<br>
                <strong>Website:</strong><a href="http://www.usm.my/"> USM</a>
              </p>
            </div>
          </div>


          <div class="col">
            <div class="footer-info">
              <h3>Get in Touch</h3>
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="students.php">Students</a></li>
                <li><a href="activities.php">Activities</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact</a></li>
                <ul>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>2023 RCVIP USM </span></strong>. All Rights Reserved
      </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fa fa-arrow-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>