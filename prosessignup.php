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

$name=$_POST['name'];
$email=$_POST['email'];
$role='Student';
$password=$_POST['password'];


$sql = "INSERT INTO login (name, email, role, password) VALUES ('$name','$email','$role','$password')";

$result = mysqli_query($conn, $sql);

if ($result != null) {
	//echo "Data Tersimpan. Silakan <a href='login.php'> Login. </a> " ;
   header('location: login&regist.php');
}  
  else
 {
    $error_message = "Your password or Email didn't match <br> Please try again";
    
}

?>