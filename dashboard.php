<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to the Dashboard</h1>
    <p>Hello, <?php echo htmlspecialchars($_SESSION['name']); ?>!</p>
    <p>Your ID: <?php echo htmlspecialchars($_SESSION['username']); ?></p>
    <p>Your Major: <?php echo htmlspecialchars($_SESSION['major']); ?></p>
    <p>Your Batch: <?php echo htmlspecialchars($_SESSION['batch']); ?></p>
    <p>Time: <?php echo date("H:i:s"); ?></p>
    <a href="logout.php">Logout</a>

    <button onclick="location.href='quiz.php'">Start Quiz</button><br>
    <button onclick = "location.href = 'logout.php'">Logout</button>
</body>
</html>
