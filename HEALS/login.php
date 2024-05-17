<?php
session_start();
require 'koneksi.php';

// Jika pengguna sudah login dan memiliki sesi aktif, langsung redirect ke anggota.php
if (isset($_SESSION['session_email'])) {
    header("Location: anggota.php");
    exit();
}

// Proses login setelah submit form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Tangkap data dari form
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $ingataku = isset($_POST['ingataku']) ? 1 : 0;

    // Validasi email dan password
    if ($email == '' || $password == '') {
        header("Location: login.html?error=1");
        exit();
    } else {
        // Lakukan query untuk mencocokkan email dan password
        $query_sql = "SELECT * FROM db_user WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $query_sql);

        if ($result && mysqli_num_rows($result) > 0) {
            // Jika login berhasil, atur sesi
            $_SESSION['session_email'] = $email;
            $_SESSION['session_password'] = $password;

            // Atur cookie jika diperlukan
            if ($ingataku == 1) {
                setcookie('email', $email, time() + (86400 * 30), "/");
                setcookie('password', $password, time() + (86400 * 30), "/");
            }

            // Periksa apakah pengguna adalah admin
            $row = mysqli_fetch_assoc($result);
            if ($row['capacity'] == 'admin') {
                header("Location: admin.html");
            } else {
                header("Location: anggota.php");
            }
            exit();
        } else {
            // Jika login gagal, kembalikan ke halaman login dengan pesan error
            header("Location: login.html?error=1");
            exit();
        }
    }
} else {
    // Jika bukan metode POST, berikan pesan error
    echo "Error: Metode yang tidak valid.";
}
?>
