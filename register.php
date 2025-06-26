<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

    <strong>Register</strong>
    <?php if (isset($_SESSION['error'])): ?>
        <p style="color:red;"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></p>
    <?php endif; ?>

    <?php if (isset($_SESSION['success'])): ?>
        <p style="color:green;"><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></p>
    <?php endif; ?>

    <form action="./auth/registerAuth.php" method="POST">
        <label for="username">Username (TXXX)</label><br>
        <input type="text" name="username" id="username" required><br>

        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" required><br>

        <label for="name">Full Name</label><br>
        <input type="text" name="name" id="name" required><br>

        <label for="major">Major</label><br>
        <input type="text" name="major" id="major" required><br>

        <label for="batch">Batch (Ex: B28)</label><br>
        <input type="text" name="batch" id="batch" required><br><br>

        <input type="submit" value="Register">
    </form>

    <p>Already have an account? <a href="index.php">Login here</a></p>

</body>
</html>
