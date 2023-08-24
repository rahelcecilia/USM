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

if (isset($_GET['x'])) {
    $id = (int)$_GET['x'];
    
    $sql = "DELETE FROM project WHERE id_project= $id";
    $result = mysqli_query($conn, $sql);
    
    header("Location: delete.php");
    exit();
}


?>
   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
