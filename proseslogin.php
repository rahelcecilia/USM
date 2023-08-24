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

$email=$_POST['email'];
$password=$_POST['password'];


$sql = "SELECT * from login where email = '" . $email . "' AND password='" . $password . "'";

$result = mysqli_query($conn, $sql);


if ($row=mysqli_fetch_object($result))
  
{

  echo "Login berhasil...";
  // Set session variables
$_SESSION["id_user"] = $row->id_user;
$_SESSION["name"] = $row->name;
$_SESSION["role"] = $row->role;

  header('location: index.php');
}

else {
  
    echo header ('location: password_didnt_match.php') ;
   

}
?>

