<?php
$rawPassword = 'T003Computer Science';
$hashedPassword = password_hash($rawPassword, PASSWORD_BCRYPT);
echo $hashedPassword;
?>