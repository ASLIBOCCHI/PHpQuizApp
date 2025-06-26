<?php
$host = "localhost";
$database = "quiz";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $database);
if(!$conn){
    echo "Connection failed: " . mysqli_connect_error();
}

//  echo "Connected Successfully";  
 

?>
