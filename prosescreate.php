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
 
include "CRUD.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST["title"];
    $keyword = $_POST["keyword"]; 
    $team = $_POST["team"];
    $abstract = $_POST["abstract"];
    $background = $_POST["background"]; 
    $methods = $_POST["methods"];
    $results = $_POST["results"]; 
    $discussion = $_POST["discussion"]; 
    $conclusions = $_POST["conclusions"];
    $references = $_POST["references"];    
    $references2 = $_POST["references2"]; 
    $image = $_FILES["image"]; 
    $gambarName=uniqid() . ".jpg";
}

if ($_FILES["image"]["error"] === UPLOAD_ERR_OK) {
        $targetPath = "upload/" . $gambarName;
        
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetPath)) {
$title = addslashes($title);    
$keyword = addslashes($keyword);
$team = addslashes($team);
$abstract = addslashes($abstract);
$background = addslashes($background);
$methods = addslashes($methods);
$results = addslashes($results);
$discussion = addslashes($discussion);
$conclusions = addslashes($conclusions);
$references = addslashes($references);
$references2 = addslashes($references2);

             $result = createData($conn, $title, $keyword, $team, $abstract, $background, $methods, $results, $discussion, $conclusions, $references, $references2, $gambarName);
  
                if ($result) {
                    echo header ('location: projects.php') ;
                    exit();
                    } else {
                    echo "Terjadi kesalahan: " . mysqli_error($conn);
                    }
        } else {
            echo "Gagal mengunggah gambar.";
        }
    } else {
        echo "Error uploading image: " . $_FILES["image"]["error"];
    }

// Tutup koneksi database
$conn->close();
?>