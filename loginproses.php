<?php
if (isset($_POST['Login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $nim = $_POST['nim']; 

    if ($user == "admin" && $pass == "rahasia") {
        echo "<h2>Login berhasil untuk NIM $nim, selamat datang!</h2>";
    } else {
        echo "<h2>Login gagal untuk NIM $nim, maaf coba lagi</h2>";
    }
}
?>