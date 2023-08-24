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
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login & Sign Up</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
   <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">
  
    <link rel="stylesheet" href="assets/css/login&regist.css">
    <!--<link rel="stylesheet" href="assets/css/style.css">-->
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   
<body>
  
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="assets/img/research.jpeg" alt="">
      </div>
      <div class="back">
        <!--<img src="assets/img/USM.jpg" alt="">-->
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
            
          <form class="form-inline" role="form" method="POST" action="proseslogin.php" >
              
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
              </div>
              
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
              </div>
              
              <div class="button input-box">
                <input type="submit" value="Submit">
              </div>
              
              <div class="text sign-up-text">Don't have an account? <label for="flip">Signup now</label></div>
            </div>
        </form>
      </div>
      
     
          
        <div class="signup-form">
          <div class="title">Signup</div>
            <div class="input-boxes">
                 <form role="form" method="POST" action="prosessignup.php" >
              <div class="input-box">
                <i class="fa fa-user"></i>
                <input type="input" class="form-control" id="name" name="name" placeholder="Enter your name" required>
              </div>
              
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                   <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
              </div>
              
              <!--<div class="input-box">-->
              <!--  <i class="fas fa-address-card"></i>-->
              <!-- <input type="input" class="form-control" id="role" name="role" placeholder="Enter your role" required>-->
              <!--</div>-->
              
               <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
              </div>
              
              <div class="button input-box">
                <input type="submit" value="Submit">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>
