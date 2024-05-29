<?php

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// Fungsi untuk menjalankan query dan mengembalikan hasilnya
if (!function_exists('query')) {
    // Fungsi untuk menjalankan query dan mengembalikan hasilnya
    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }
}

// Fungsi untuk login
if (!function_exists('login')) {
    function login() {
        global $conn;

        session_start(); // Mulai session

        if (isset($_SESSION["login"])) {
            header("Location: index.php");
            exit;
        }

        if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
            $id = $_COOKIE['id'];
            $key = $_COOKIE['key'];

            // Ambil username berdasarkan id
            $result = mysqli_query($conn, "SELECT username FROM akun WHERE id = $id");
            $row = mysqli_fetch_assoc($result);

            // Cek cookie dan username
            if ($key === hash('sha256', $row['username'])) {
                $_SESSION['login'] = true;
                header("Location: index.php");
                exit;
            }
        }

        if (isset($_POST["login"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];

            $result = mysqli_query($conn, "SELECT * FROM akun WHERE username = '$username'");

            // Cek username
            if (mysqli_num_rows($result) === 1) {
                // Cek password
                $row = mysqli_fetch_assoc($result);
                if (password_verify($password, $row["password"])) {
                    // Set session
                    $_SESSION["login"] = true;

                    // Cek remember me
                    if (isset($_POST['remember'])) {
                        // Buat cookie
                        setcookie('id', $row['id'], time() + 60);
                        setcookie('key', hash('sha256', $row['username']), time() + 60);
                    }

                    header("Location: index.php");
                    exit;
                }
            }

            $error = true;
        }
    }
}
// Fungsi untuk registrasi
if (!function_exists('login')) {
    function login() {
        // Konten fungsi login
    }
}

// Fungsi untuk registrasi
// Fungsi untuk registrasi
if (!function_exists('registrasi')) {
    function registrasi($data) {
        global $conn;

        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        
        // Periksa apakah kunci "password2" ada dalam array $data
        if (isset($data["password2"])) {
            $password2 = mysqli_real_escape_string($conn, $data["password2"]);
        } else {
            // Jika kunci "password2" tidak ada, berikan pesan kesalahan
            echo "<script>alert('Field konfirmasi password tidak ditemukan!');</script>";
            return false;
        }

        // Cek apakah username sudah ada
        $result = mysqli_query($conn, "SELECT username FROM akun WHERE username = '$username'");
        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('Username sudah terdaftar!');</script>";
            return false;
        }

        // Cek kesesuaian konfirmasi password
        if ($password !== $password2) {
            echo "<script>alert('Konfirmasi password tidak sesuai!');</script>";
            return false;
        }

        // Enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        // Tambahkan user baru ke database
        $query = "INSERT INTO akun (username, password) VALUES ('$username', '$password')";
        if (mysqli_query($conn, $query)) {
            return true;
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
            return false;
        }
    }
}
?>