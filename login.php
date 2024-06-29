<?php
session_start();

// Data username dan password yang benar
$valid_username = 'admin';
$valid_password = 'password123';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        echo "Username dan Password harus diisi!";
    } else {
        if ($username == $valid_username && $password == $valid_password) {
            // Login berhasil
            $_SESSION['username'] = $username;
            header('Location: welcome.php');
            exit;
        } else {
            echo "Username atau Password salah!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="post" action="login.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
