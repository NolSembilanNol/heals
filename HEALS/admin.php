<?php
session_start();

// Mengecek apakah ada sesi aktif
if (isset($_SESSION['session_email'])) {
    require 'koneksi.php'; // Sertakan file koneksi.php yang berisi koneksi ke database

    // Tangkap email dari sesi
    $email = $_SESSION['session_email'];

    // Query untuk memeriksa kapasitas pengguna berdasarkan email
    $query_sql = "SELECT * FROM db_user WHERE email = '$email'";
    $result = mysqli_query($conn, $query_sql);

    // Mengecek apakah query berhasil dieksekusi dan baris hasil ditemukan
    if ($result && mysqli_num_rows($result) > 0) {
        // Mengambil data pengguna dari hasil query
        $user_data = mysqli_fetch_assoc($result);

        // Mengecek kapasitas pengguna
        $capacity = $user_data['capacity'];

        // Menampilkan sapaan sesuai dengan kapasitas pengguna
        if ($capacity == 'admin') {
            echo "<h1>Hai Admin</h1>";
        } elseif ($capacity == 'fasilitator') {
            echo "<h1>Hai Fasilitator</h1>";
        } else {
            // Jika kapasitas tidak diketahui, tampilkan sapaan umum
            echo "<h1>Hai " . $_SESSION['session_email'] . "</h1>";
        }
    } else {
        // Jika tidak ada baris hasil, tampilkan sapaan umum
        echo "<h1>Hai " . $_SESSION['session_email'] . "</h1>";
    }
} else {
    // Jika tidak ada sesi aktif, tidak ada yang perlu ditampilkan
}
?>
