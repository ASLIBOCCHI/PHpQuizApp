<?php
   session_start(); //start session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method = "POST" action = "./auth/loginAuth.php">
        <label for = "username">Username </label><br>
        <input type = "text" name = "username" id = "username" required><br>
        <label for = "password">Password : </label>
        <input type = "password" name = "password" id = "password" required><br>
        <input type = "submit" value = "Login">
    </form>
    <p>Don't have an account? <a href="./register.php">Register here</a></p>
</body>
</html>