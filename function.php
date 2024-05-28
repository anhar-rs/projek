<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


if (!function_exists('query')) {
    function query($query) {
        global $conn;

        // Melakukan query ke database
        $result = mysqli_query($conn, $query);

        // Mengecek apakah query berhasil
        if (!$result) {
            // Menangani error jika query gagal
            die('Query Error: ' . mysqli_error($conn));
        }

        // Mengambil hasil query dan menyimpannya dalam array
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }
}


// Cek dan deklarasikan fungsi login jika belum ada
// Cek dan deklarasikan fungsi login jika belum ada
if (!function_exists('login')) {
    function login($data) {
        global $conn;

        $email = strtolower(stripslashes($data["email"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);

        // cek email sudah ada atau belum
        $result = mysqli_query($conn, "SELECT email FROM akun WHERE email = '$email'");

        if (mysqli_fetch_assoc($result)) {
            echo "<script>
                    alert('Email sudah terdaftar!')
                  </script>";
            return false;
        }

        // enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        // tambahkan user baru ke database
        mysqli_query($conn, "INSERT INTO akun VALUES('', '$email', '$password')");

        return mysqli_affected_rows($conn);
    }
}
// Cek dan deklarasikan fungsi registrasi jika belum ada
if (!function_exists('registrasi')) {
    function registrasi($data) {
        global $conn;

        $username = strtolower(stripslashes($data["email"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);

        // cek username sudah ada atau belum
        $result = mysqli_query($conn, "SELECT username FROM akun WHERE email = '$username'");

        if( mysqli_fetch_assoc($result) ) {
            echo "<script>
                    alert('username sudah terdaftar!')
                  </script>";
            return false;
        }

        // cek konfirmasi password
        if( $password !== $password2 ) {
            echo "<script>
                    alert('konfirmasi password tidak sesuai!');
                  </script>";
            return false;
        }

        // enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        // tambahkan userbaru ke database
        mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

        return mysqli_affected_rows($conn);
    }
}
?>






