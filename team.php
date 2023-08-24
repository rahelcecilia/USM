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

  <title>Profile Team</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets2/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets2/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets2/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets2/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets2/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/profile.css?ver=5" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.9.1
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<style>

<style>

.about .row .img {
    width:10px;
    }
</style>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">
  
   <div class="profile">

   <  <?php
          $id_profile = $_GET['x'];
          $sql = "SELECT * from team where id_profile = $id_profile";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {

            echo " 
        <p>$row[small_image]</p>
        <h2><class='text-center'>$row[title]</h2>
       " ; 
}
?> 
</div>
      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
         <li><a href = about.php > <i class = "bi bi-arrow-left-short"></i>Go back</a></li>
          
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

 

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

      <?php
      $id_profile = $_GET['x'];
          $sql = "SELECT * from team where id_profile = $id_profile";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
         
            echo "  
        <div class='section-title'>
          <h2>$row[title]</h2>
        </div> 


   <div class='row'> 
       
       
          <div class='col-lg-6' data-aos='fade-right'>
          <div class ='img'>
           <p>$row[big_image]</p>
           </div>
          </div> 
         <div class='col-lg-6 pt-4 pt-lg-0 content' class = 'position' data-aos='fade-left'>
         
         <div class = 'row'>
         <div class ='col'>
         <h3>$row[position]</h3> 
         </div>
         <div class ='col right'> ";
                
             if ($_SESSION ["role"]=="Admin"){
                 echo "
         <a href='update.php?x=$row[id_profile]'><i class='fa fa-edit' style='font-size:24px'></i></a> "; }
         
         echo "
        </div>
        </div>
            <p class='fst-italic'>
           $row[university]
            </p>
            <div class='row'>
              <div class='col-lg-12'>
                <ul>
                  <li><strong>Email:</strong> <span>$row[email]</span></li>
                  <li><strong>Tel:</strong> <span>$row[tel]</span></li>
                  <li><strong>Fax:</strong> <span>$row[fax]</span></li>
                  <li><strong>Room:</strong> <span>$row[room]</span></li>
                  <li><strong>City:</strong> <span>$row[city]</span></li>
                  <li><strong>Research Cluster:</strong> <span>$row[research_cluster]</span></li>
                  <li><strong>Research Interest:</strong><span>$row[research_interest]</span></li>
                  <li><strong>Interests:</strong> <span>$row[interests]</span></li>
                </ul>
              </div>
              <br>
              <h3><strong>Academic Qualification :</strong></h3> 
       
           $row[academic_qualification] 
            
              
            </div>
            
          </div>
        </div>

      </div>
    </section>
    
    
    <!-- End About Section -->

    <!-- ======= Publications Section ======= -->
    <section id='publications' class='publications'>
      <div class='container'>

        <div class='section-title'>
          
        
";
}
          ?>
        </div>
        
       
      </div>
    </section>
    <!-- End Publications Section -->
  </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="copyright">
            <blockquote>
            &copy; Copyright <strong><span>2023 RCVIP USM </span></strong>. All Rights Reserved
          </div>
    </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets2/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets2/vendor/aos/aos.js"></script>
  <script src="assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets2/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets2/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets2/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets2/vendor/typed.js/typed.min.js"></script>
  <script src="assets2/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets2/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets2/js/main.js"></script>

</body>

</html>