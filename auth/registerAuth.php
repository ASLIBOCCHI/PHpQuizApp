<?php
session_start(); //start session
require '../config/database.php'; //ini buat nunjukin kalau perlu connect database dulu
$id = $_POST["username"];
$plaintextPassword = $_POST["password"];
$password = password_hash($plaintextPassword, PASSWORD_BCRYPT);
$name = $_POST["name"];
$major = $_POST["major"];
$batch = $_POST["batch"];
if(strlen($id) !== 4 || $id[0] !== 'T' || !ctype_digit(substr($id, 1))){
    $_SESSION['error'] = "Invalid ID format. Must be 'T' followed by 3 digits (e.g., T001).";
    header("Location: ../register.php");
    exit;
}

function isValidPassword($password) {
    if(strlen($password) < 8){
        return false;
    }

    $hasNumber = false;
    $hasSymbol = false;

    for($i = 0; $i < strlen($password); $i++){
        $char = $password[$i];
        if(ctype_digit($char)){
            $hasNumber = true;
        } 
        elseif(!ctype_alpha($char)){
            $hasSymbol = true;
        }
    }

    return $hasNumber && $hasSymbol;
}

if(!isValidPassword($password)){
    $_SESSION['error'] = "Password must be at least 8 characters long and contain at least 1 number and 1 symbol.";
    header("Location: ../register.php");
    exit;
}
if(strlen($batch) !== 3 || $batch[0] !== 'B' || !ctype_digit(substr($batch, 1))){
    $_SESSION['error'] = "Invalid Batch format. Must be 'B' followed by 2 digits (e.g., B28).";
    header("Location: ../register.php");
    exit;
}
// Mengecek apakah TraineeId yang diberikan sudah ada di tabel trainee pada database
$check_exists = mysqli_query($conn, "SELECT * FROM trainee WHERE TraineeId =  '$id'");
if(mysqli_num_rows($check_exists) > 0){
    echo "TraineeId already exists. Please choose a different TraineeId.";
    exit();
}
//ingat, untuk sql harus pake backticks bukan petik 2 contoh `TraineeId` bukan "TraineeId"
$insertQuery = "INSERT INTO trainee (`TraineeId`, `TraineeName`, `TraineeMajor`, `TraineePassword`, `TraineeBatch`) VALUES ('$id', '$name', '$major', '$password', '$batch')";



if(mysqli_query($conn, $insertQuery)){
    echo "Registration successful!";
} 
else{
    echo "Error: " . mysqli_error($conn);
}

?>