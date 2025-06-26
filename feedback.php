<?php
if(!isset($_SESSION['last_result'])){
    header("Location: quiz.php");
    exit;
}
$lastResult = $_SESSION["last_result"];


?>
<!DOCTYPE html>
<html>
<head><title>Feedback</title></head>
<body>
    <h2>Result for ID: <?= htmlspecialchars($lastResult['id']) ?></h2>

    <p><strong>Name:</strong>
        <?php
        if($lastResult['isNameCorrect']){
            echo 'Correct';
        } 
        else{
            echo 'Incorrect (Expected: ' . $lastResult['correct']['TraineeName'] . ')';
        }
        ?>
    </p>
    <p><strong>Major:</strong>
        <?php
        if($lastResult['isMajorCorrect']){
            echo 'Correct';
        } 
        else{
            echo 'Incorrect (Expected: ' . $lastResult['correct']['TraineeMajor'] . ')';
        }
        ?>
    </p>
    <p><strong>Batch:</strong>
        <?php
        if($lastResult['isBatchCorrect']){
            echo 'Correct';
        } 
        else{
            echo 'Incorrect (Expected: ' . $lastResult['correct']['TraineeBatch'] . ')';
        }
        ?>
    </p>

    <p>Current Score: <?= $_SESSION['quiz_score'] ?>/<?= $_SESSION['quiz_count'] ?></p>

    <?php if ($_SESSION['quiz_count'] < 10): ?>
        <a href="quiz.php">➡ Next Question</a>
    <?php else: ?>
        <a href="quizResult.php">🏁 See Final Score</a>
    <?php endif; ?>
</body>
</html>