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
  

  <title>Robotic, Computer Vision and Image Processing</title>
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
  <link href="assets/css/style.css?ver=25" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<style>
  .project-index  h2 {
       font-size: 3em;
  color: #e68523;
  margin-bottom: -0.2em;
  margin-top: -0.8em;
  text-align: center ;
  font-family: "Lucida Console", "Courier New", monospace;
  } 

 .project-index .projects-info p {
  text-align: center;
  color: rgba(255, 255, 255, 0.7);
  font-size: 14px;
  text-transform: lowercase;
  padding: 0;
  margin: 0;
  font-style: italic;
  }

  
  
.projects-index h2 {
    color : #4a5562;
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
  

        
          <a href="#" class="mx-2 js-search-open"></a>
        <i class="bi bi-list mobile-nav-toggle"></i>

      
        
         
      
        <!-- ======= Search Form ======= -->
        <!--<form action="search.php" class="search-form">-->
         
        <!-- <button class="btn js-search-close"></button>-->
        <!--</form>-->

        <!-- End Search Form -->

       
      </div>

   
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

     
        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>USM</span></h2>
              <p class="animate__animated animate__fadeInUp">USM IS A PIONEERING, TRANSDISCIPLINARY RESEARCH INTENSIVE
                UNIVERSITY THAT EMPOWERS FUTURE TALENTS AND ENABLES THE BOTTOM BILLIONS TO TRANSFORM THEIR
                SOCIO-ECONOMIC WELL-BEING.</p>
            </div>
          </div>
        </div>

        
</div>
  </section><!-- End Hero -->

  <main id="main">
<!-- ======= visi misi Section ======= -->
<section id="visimis" class="visimisi">
    <div class="container">
        <div class = "row gy-2 justify-content-center">
         
            <div class = "col-lg-6 col-md-6" class = "visi"  data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
                 <div class = visimisi-wrap>
                <h1>Vision</h1>
                <ul>
                <li><h6>Towards holistic and sustainability-inspired computing for a better tomorrow.</h6></li>
                <li><h6>Quality, Equality, Availability, Accessibility, Affordability, Appropriateness.</h6></li>
                <li><h6>Transforming Higher Education For a Sustainable Tomorrow.</h6></li>
                </ul>
            </div>
            </div>
        
            <div class = "col-lg-6 col-md-6" class = "misi"  data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
                 <div class = visimisi-wrap>
            <h1>Mission</h1>
            <h6>Providing holistic and sustainability-inspired computing in the quest for knowledge and excellence in education and research that nurtures individuals who can contribute effectively towards the transformation of the nation.</h6>
            </div>
            </div>
        
        </div>
    </div>    
</section> 


    <!-- ======= Projects Section ======= -->
    <section id="projects" class="project-index" >
      <div class="container" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
        <h2> Latest Projects </h2> <br>
        <div class="row-gutter">
          <div class="row projects-container">

            <?php

            $sql = "SELECT * from project order by id_project DESC LIMIT 2";
            $result = mysqli_query($conn, $sql);

            echo "<div class='row gy-2 justify-content-center'>";

            while ($row = mysqli_fetch_assoc($result)) {

              echo "  
              
      <div class='col-lg-6 col-md-6'>
        <div class='projects-wrap'>
            <a href='projects-detail.php?x=$row[id_project]';>
              <img src='./upload/$row[gambarName]' >
                <div class='projects-info'>     
                  <h3>$row[title]</h3> 
                  <br>
                  <br>
                  <p>$row[keyword]</p> 
                </div>
            </a> 
          </div>  
      </div>     

";
            }
            echo "</div>";
            ?>

      <div class = "col">
      <div class="description">  
        <br>
      <br>
      <h3 style="text-align: justify;"><strong>Provides various types and categories of research. Research that has been published can be read on this website. Here's the most recent research!</strong></h3>
      <br>
      <a href="projects.php" class="btn btn-primary">Read More</a>
          </div>
          </div>
            
          </div>
        
      </div>
      </div>
    </section>
    

  </main>


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

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>2023 RCVIP USM </span></strong>. All Rights Reserved
        </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="fa fa-arrow-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    AOS.init();
  </script>


</body>

</html>

</html>