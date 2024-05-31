<?php
session_start();
if (!isset($_SESSION['session_email'])) {
    header("Location: login.php");
    exit();
}

echo "Selamat datang, " . $_SESSION['session_email'] . "!";
?>
<br><a href="index.php">Home</a><br><br>
<a href="logout.php">Logout</a>
