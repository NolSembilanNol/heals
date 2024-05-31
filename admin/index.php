<?php
require_once('../koneksi.php');

require_once('../cek_sesi.php');
if( $sessionStatus == false) {
   header('Location: ../login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>HEALS</title>
        <link rel="stylesheet" href="..//assets/css/admin.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    </head>
    <body>
        <div class="menu-btn">
            <i class="fas fa-bars"></i>
        </div>
        <div class="side-bar">
            <header>
                <div class="close-btn">
                    <i class="fas fa-times"></i>
                </div>
            </header>
            <ul>
                <li data-content="dashboard"><i class="fas fa-home"></i> Dashboard</li>
                <li data-content="faskes"><i class="fas fa-hospital"></i>Faskes<i class="fas fa-angle-right dropdown"></i></li>
                <div class="sub-menu">
                    <a href="#" class="sub-item">Rumah Sakit</a>
                    <a href="#" class="sub-item">Puskesmas</a>
                    <a href="#" class="sub-item">Klinik</a>
                </div>
                <li data-content="profile"><i class="fas fa-user"></i> Profile<i class="fas fa-angle-right dropdown"></i></li>
                <div class="sub-menu">
                    <a href="#" class="sub-item">Update Profile</a>
                    <a href="#" class="sub-item">Ganti Password</a>
                </div>
                <li data-content="logout">
                    <a href="../logout.php">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
        <div class="main-content">
            <div id="dashboard" class="content">
                <h1>Welcome back, <?= $sessionName ?> 😎</h1>
                <div class="cards">
                    <div class="card">
                        <h2>Products</h2>
                        <i class="fas fa-box"></i>
                        <p>3</p>
                    </div>
                    <div class="card">
                        <h2>Users</h2>
                        <i class="fas fa-user"></i>
                        <p>5</p>
                    </div>
                    <div class="card">
                        <h2>Orders</h2>
                        <i class="fas fa-briefcase"></i>
                        <p>8</p>
                    </div>
                </div>
            </div>
            <div id="faskes" class="content" style="display: none">
                <h1>Settings</h1>
                <p>Blablabla.....</p>
            </div>
            <div id="profile" class="content" style="display: none">
                <h1>Profile</h1>
                <p>Blablabla.....</p>
            </div>
            <div id="logout" class="content" style="display: none">
                <h1>Logout</h1>
                <p>Blablabla.....</p>
            </div>
        </div>
        <script src="../assets/js/admin.js"></script>
    </body>
</html>
