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

  <title>About</title>
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
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css?ver=5" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<style>
  p {
    font-family: "Helvetica Neue", Arial, sans-serif;
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
 echo '<li><a href="logout.php"> <i style="font-size:24px" class="fa fa-sign-out"></i> </a></li>'; 
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
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <br>
        <br>
        <div class="row content">
          <div class="text-center">
            <h2 class="animate__animated animate__heartBeat">Universiti Sains Malaysia (USM)</h2>
          </div>
          <div class="col-lg-6">
            
            <img src="assets/img/usm gate.jpg" alt="" class="img-fluid">

          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <div style="text-align: justify;" class="info">
              <p>Universiti Sains Malaysia (USM) is a public research university located in Penang, Malaysia. It was
                founded in 1969 with the aim of promoting scientific and technological research and education in the
                country.
                <br> <br>
                USM offers undergraduate and postgraduate programs in various fields, including science, engineering,
                medicine, social sciences, and humanities. The university is known for its strong research programs and
                has established research centers in areas such as advanced materials, sustainable development, and
                medical
                technology.
                <br> <br>
                USM has a diverse student body and actively promotes internationalization through exchange programs,
                collaborations with foreign universities, and hosting international conferences and events. The
                university
                has also been recognized for its commitment to sustainability and has implemented various eco-friendly
                initiatives on campus.
                <br> <br>
                Overall, USM is a leading institution of higher education in Malaysia and the region, known for its
                research excellence, diverse student population, and commitment to sustainability.
              </p>
            </div>
          </div>
          <div class="text-center">
            <br>
            <br>
            <h2 class="animate__animated animate__heartBeat">Students Support Services</h2>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <div style="text-align: justify;">
              <br>
              <br>
              <p>USM provides various services for its students such as hostel accommodation, counseling/motivational
                guidance, sport and recreational amenities like soccer fields, 8-lane synthetic running track, an
                Astroturf hockey stadium and an Olympic-sized swimming pool.
                <br> <br>
                Cultural events/activities are organised at the Cultural Hall to foster closer ties among students.
                There are also various clubs and societies that cater to a wide array of interests. These include the
                Political Science Society, Computer Science Club, Indian Cultural Club, Navigator Society, Astronomy
                Club, Debating & Public Speaking Club, and Mass Communication Club to name a few.The Counseling Unit at
                USM offers support services to help develop students’ potential and capabilities
              </p>
            </div>
          </div>
          <div class="col-lg-6">
            <br>
            <img src="assets/img/USM.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </section>



    <!-- End About Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up" data-aos-once="true">

        <div class="section-title">
          <h2>Team</h2>
          <h3> Our Hardworking Team</h3>
        </div>
        <div class="row">

 <?php

          $sql = "SELECT * from team order by id_profile ASC";
          $result = mysqli_query($conn, $sql);


          while ($row = mysqli_fetch_assoc($result)) {
            echo "          

          <div class='col-lg-6 mt-4 '>
            <div class='member d-flex align-items-start'>
              <div class='pic'>
              <p>$row[big_image]</p> 
              </div>
              <div class='member-info'>
                <h4>$row[title]</h4>
                <span>$row[team_position]</span>
                <p><strong>RESEARCH CLUSTER : </strong> $row[research_cluster]</p>
                <div class='social'>
                  <a href='team.php?x=$row[id_profile]';>
                  <class='btn btn-success' style='color: white;'>Information</a>
                </div>
              </div>
            </div>
          </div>
          
          "
            ;
          }
          echo "  </div>  ";

          ?>
        </div>

      </div>
    </section><!-- End Team Section -->


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
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    AOS.init();
  </script>

</body>

</html>