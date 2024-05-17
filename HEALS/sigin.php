<?php
require 'koneksi.php';

$email = $_POST['email'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$capacity = $_POST['capacity'];

$query_sql = "INSERT INTO db_user (email, nama, password, capacity) VALUES ('$email', '$nama', '$password', '$capacity')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: login.html");
    exit();
} else {
    echo "Pendaftaran gagal: " . mysqli_error($conn);
}
?>
