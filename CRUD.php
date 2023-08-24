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

<?php
function createData($conn, $title, $keyword, $team, $abstract, $background, $methods, $results, $discussion, $conclusions, $references, $references2, $gambarName) {
    
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

    global $conn;
    $sql = "INSERT INTO project (id_project,title,keyword,team,abstract,background,methods,results,discussion,conclusions,`references`,references2,gambarName) VALUES (NULL,'$title', '$keyword','$team','$abstract', '$background','$methods','$results','$discussion', '$conclusions','$references', '$references2', '$gambarName')";

    return mysqli_query($conn, $sql);
}

?>
