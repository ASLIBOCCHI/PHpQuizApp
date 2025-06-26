<?php
session_start();
require 'config/database.php';
if(!isset($_SESSION['quiz_target_id'])){
    $_SESSION['error'] = "No quiz target set.";
    header("Location: quiz.php");
    exit;
}

$targetId = $_SESSION['quiz_target_id'];
$inputName = trim($_POST['name']);
$inputMajor = trim($_POST['major']);
$inputBatch = trim($_POST['batch']);
$query = "SELECT * FROM trainee WHERE TraineeId = '$targetId'";
$result = mysqli_query($conn, $query);
$correct = mysqli_fetch_assoc($result);
$isNameCorrect = strcasecmp($inputName, $correct['TraineeName']) === 0;
$isMajorCorrect = strcasecmp($inputMajor, $correct['TraineeMajor']) === 0;
$isBatchCorrect = strcasecmp($inputBatch, $correct['TraineeBatch']) === 0;
if($isNameCorrect && $isMajorCorrect && $isBatchCorrect){
    $_SESSION['quiz_score']++;
}
$_SESSION['quiz_count']++;
$_SESSION['last_result'] = [
    'id' => $targetId,
    'isNameCorrect' => $isNameCorrect,
    'isMajorCorrect' => $isMajorCorrect,
    'isBatchCorrect' => $isBatchCorrect,
    'correct' => $correct
];
header("Location: feedback.php");
exit;
?>