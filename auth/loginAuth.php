<?php
session_start(); // Start the session
require "../config/database.php"; //harus include database file dulu
$id = htmlspecialchars($_POST["username"]);
$password = htmlspecialchars($_POST["password"]);
if(strlen($id) !== 4 || $id[0] !== 'T' || !ctype_digit(substr($id, 1))){
    $_SESSION['error'] = "Invalid ID format. Must be 'T' followed by 3 digits (e.g., T001).";
    header("Location: ../register.php");
    exit;
}
$query = "SELECT * FROM trainee WHERE TraineeId = '$id'";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result)>0){ //mysqlinumrows adalah fungsi untuk mengecek data yang direturn dari query, return type integer
    $row = mysqli_fetch_assoc($result); //memfetch data yang direturn dari query result
    if(password_verify($password, $row["TraineePassword"])){ //password verify untuk matching password
        $_SESSION["username"] = $row["TraineeID"];
        $_SESSION["name"] = $row["TraineeName"];
        $_SESSION["major"] = $row["TraineeMajor"];
        $_SESSION["batch"] = $row["TraineeBatch"];
        header("Location: ../dashboard.php"); 
        exit; //redirect ke dashboard
    }
    else{
        $_SESSION['error'] = "Incorrect password.";
        header("Location: ../index.php"); //redirect ke index
        exit;
    }
}
else{
    $_SESSION['error'] = "Username not found.";
    header("Location: ../register.php"); //redirect ke register
    exit;
}




?>