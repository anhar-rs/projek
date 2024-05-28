<?php 
session_start();

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

require 'function.php';

if (isset($_POST["login"])) {
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Menggunakan prepared statements untuk keamanan
        $stmt = mysqli_prepare($conn, "SELECT * FROM akun WHERE email = ?");
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        // cek email
        if (mysqli_num_rows($result) === 1) {
            // cek password
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row["password"])) {
                // set session
                $_SESSION["login"] = true;

                header("Location: index.php");
                exit;
            } else {
                // Password salah
                $error = "Email atau password salah!";
            }
        } else {
            // Email tidak ditemukan
            $error = "Email atau password salah!";
        }
    } else {
        $error = "Email dan password harus diisi.";
    }
}
?>