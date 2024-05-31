<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In - HEALS</title>
    <link rel="stylesheet" href="assets/css/fasilitas_kesehatan-style.css">
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
            height: 150px; /* Sesuaikan dengan ukuran yang diinginkan */
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

    <h1 align="center">FASILITAS KESEHATAN DI KOTA MATARAM</h1>

    <!-- <div align="center">
        <form action="#" method="GET">
            <label for="search">Cari Lokasi:</label>
            <input type="text" id="search" name="search" placeholder="Masukkan nama lokasi...">
            <button type="submit">Cari</button>
        </form>
    </div> -->

    <hr>

    <!-- <div align="center">
        <h2>Pilih Kategori</h2>
        <ul class="kategori">
            <li><a href="#"><img src="assets/img/hospital.png" alt="Rumah Sakit"> Rumah Sakit</a></li><br>
            <li><a href="#">Rumah Sakit</a></li>
            <li><a href="#"><img src="assets/img/puskesmas.jpg" alt="Puskesmas"> Puskesmas</a></li><br>
            <li><a href="#">Puskesmas</a></li>
            <li><a href="#"><img src="assets/img/KLINIK.jpg" alt="Klinik"> Klinik</a></li><br>
            <li><a href="#">Klinik</a></li>
        </ul>
    </div> -->

    <!-- <div class="kategori">
        <div class="item">
            <img src="assets/img/hospital.png" alt="Rumah Sakit">
            <a href="#">Rumah Sakit</a>
        </div>
        <div class="item">
            <img src="assets/img/puskesmas.jpg" alt="Puskesmas">
            <a href="#">Puskesmas</a>
        </div>
        <div class="item">
            <img src="assets/img/KLINIK.jpg" alt="Klinik">
            <a href="#">Klinik</a>
        </div>
    </div> -->

    <div class="kategori">
        <!-- Gunakan tabel untuk menyusun gambar dan teks -->
        <table>
            <tr>
                <td><img src="assets/img/hospital.png" alt="Rumah Sakit"></td>
            </tr>
            <tr>
                <td><a href="rumah_sakit.php">Rumah Sakit</a></td>
            </tr>
            <tr>
                <td><img src="assets/img/puskesmas.jpg" alt="Puskesmas"></td>
            </tr>
            <tr>
                <td><a href="puskesmas.php">Puskesmas</a></td>
            </tr>
            <tr>
                <td><img src="assets/img/KLINIK.jpg" alt="Klinik"></td>
            </tr>
            <tr>
                <td><a href="klinik.php">Klinik</a></td>
            </tr>
        </table><br>


    <!-- <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63121.2073298344!2d116.0790294026341!3d-8.588743762613827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf591a7f5ec7%3A0x830b122bdd101dc5!2sKota%20Mataram%2C%20Nusa%20Tenggara%20Bar.!5e0!3m2!1sid!2sid!4v1714834449025!5m2!1sid!2sid"
        width="1260" height="550" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe> -->

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