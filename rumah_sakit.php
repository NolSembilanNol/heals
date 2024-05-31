<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In - HEALS</title>
    <link rel="stylesheet" href="assets/css/rumah_sakit-style.css">
    <style>
        /* Gaya CSS tambahan untuk tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            box-shadow: none;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
            box-shadow: none;
        }
        th {
            background-color: #f2f2f2;
            box-shadow: none;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
            box-shadow: none;
        }
        tr:hover {
            background-color: #ddd;
            box-shadow: none;
        }
        img {
            width: 200px; /* Sesuaikan dengan ukuran yang diinginkan */
            height: 200px; /* Sesuaikan dengan ukuran yang diinginkan */
            box-shadow: none;
        }
    </style>
</head>

<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>HEALS</a></div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <!-- <li class="pilih">Pilih kategori</li> -->
                    <ul class="dropdown">
                        <!-- <li><a href="#">Rumah Sakit</a></li><br>
                        <li><a href="#">Puskesmas</a></li><br>
                        <li><a href="#">Klinik</a></li><br> -->

                    </ul>
                    <li><a href="#aboutus">About Us</a></li>
                    <li><a href="login.php" class="tbl-biru">Log In</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 align="center">FASILITAS RUMAH SAKIT DI KOTA MATARAM</h1>

    <hr>

    <div class="kategori">
        <!-- Gunakan tabel untuk menyusun gambar dan teks -->
        <table>
            <tr>
                <td><img src="assets/img/gedung-rsud-provinsi-ntb_169.jpeg" alt="Rumah Sakit Umum Daerah Provinsi NTB"></td>
            </tr>
            <tr>
                <td><a href="faskes_rsup.php">Rumah Sakit Umum Daerah Provinsi NTB</a></td>
            </tr>
            <tr>
                <td><img src="assets/img/rsud.jpg" alt="Rumah Sakit Umum Daerah Kota Mataram"></td>
            </tr>
            <tr>
                <td><a href="puskesmas.php">Rumah Sakit Umum Daerah Kota Mataram</a></td>
            </tr>
            <!-- <tr>
                <td><img src="assets/img/KLINIK.jpg" alt="Klinik"></td>
            </tr>
            <tr>
                <td><a href="klinik.php">Klinik</a></td>
            </tr> -->
        </table><br>

    <div id="aboutus">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>HEALS</h3>
                    <p>Website sistem informasi fasilitas kesehatan kota Mataram</p>
                </div>
                <div class="footer-section">
                    <h3>About</h3>
                    <p>Website ini dibuat untuk memenuhi tugas project kelompok Pemrograman Web 2024 </p>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>+628123456789</p>
                    <p>Kode Pos: 112233</p>
                </div>
            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="wrapper">
            &copy; 2024. <b>HEALS.</b> Pemrograman web
        </div>
    </div>

</body>

</html>
