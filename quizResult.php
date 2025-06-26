<?php

session_start();

if(!isset($_SESSION['quiz_count']) || $_SESSION['quiz_count'] < 10){
    header("Location: quiz.php");
    exit;
}

$score = $_SESSION['quiz_score'];
$max = $_SESSION['quiz_count'];
unset($_SESSION['quiz_score'], $_SESSION['quiz_count'], $_SESSION['last_result'], $_SESSION['quiz_target_id']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result of Quiz</title>
</head>
<body>
     <h1>🎉 Quiz Completed!</h1>
    <p>You scored <?= $score ?> out of <?= $max ?>!</p>

    <a href="dashboard.php">Back to Dashboard</a><br>
</body>
</html>