<?php
session_start();
if (!isset($_SESSION['session_email'])) {
    header("Location: login.html");
    exit();
}

echo "Selamat datang, " . $_SESSION['session_email'] . "!";
?>

<a href="logout.php">Logout</a>
