<?php
require 'config/database.php'; 
session_start();
if(!isset($_SESSION['username'])){
    header("Location: index.php");
    exit();
}
if(!isset($_SESSION['quiz_count'])){
    $_SESSION['quiz_count'] = 0;
    $_SESSION['quiz_score'] = 0;
}

if(!isset($_SESSION['used_ids'])){
    $_SESSION['used_ids'] = [];
}
if($_SESSION['quiz_count'] >= 10){
    header("Location: quizResult.php");
    exit;
}
$currentId = $_SESSION["username"];
$excludeIds = array_merge([$currentId], $_SESSION['used_ids']);
$excludeList = "'" . implode("','", $excludeIds) . "'";
$query = "SELECT * FROM trainee WHERE TraineeID NOT IN ($excludeList) ORDER BY RAND() LIMIT 1";

$result  = mysqli_query($conn, $query);
if(mysqli_num_rows($result) === 0){
    echo "No other trainees found.";
    exit;
}
$trainee = mysqli_fetch_assoc($result);
$_SESSION['quiz_target_id'] = $trainee['TraineeID'];
$_SESSION['used_ids'][] = $trainee['TraineeID'];




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz <?= $_SESSION['quiz_count'] + 1 ?>/10</title>
</head>
<body>
    <h2>Quiz <?= $_SESSION['quiz_count'] + 1 ?> of 10</h2>
     <p><strong>Trainee ID:</strong> <?= htmlspecialchars($trainee['TraineeID']) ?></p>
     <form action = "check.php" method = "POST">
        <label for = "name"> Name: </label><br>
        <input type  = "text" name = "name" id = "name" required> <br>
        <label for = "major"> Major: </label><br>
        <input type = "text" name = "major" id = "major" required> <br>
        <label for = "batch"> Batch: </label><br>
        <input type = "text" name = "batch" id = "batch" required> <br>
        <input type = "submit" value  = "Submit Answer">
     </form>
     <p>Current Score: <?= $_SESSION['quiz_score'] ?>/<?= $_SESSION['quiz_count'] ?></p>
</body>
</html>