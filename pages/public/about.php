<?php

// Including Connection 
include_once('../../database/connection.php');

// Fetch Data
$osint = mysqli_query($conn, "SELECT * FROM reference WHERE type = 'Osint'");
$geoint = mysqli_query($conn, "SELECT * FROM reference WHERE type = 'Geoint'");
$socmint = mysqli_query($conn, "SELECT * FROM reference WHERE type = 'Socmint'");
$humint = mysqli_query($conn, "SELECT * FROM reference WHERE type = 'Humint'");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- X-frame option -->
    <meta http-equiv="X-Frame-Options" content="SAMEORIGIN">

    <title>Berita - FINDxDFC</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;700&display=swap" rel="stylesheet">
    
</head>

<body>

    <!-- Container : Start -->
    <div id="container-custom">

        <!-- Header : Start -->
        <header>
            <h1>FINDxDataTrace</h1>
        </header>

        <nav>
            <div class="nav-wrapper">
                <a href="../../index.php">Beranda</a>
                <a href="/pages/public/news.php">Berita</a>
                <a href="#">Tentang</a>
                <a href="/pages/admin/index.php">Administrator?</a>
            </div>
        </nav>
        <!-- Header : End -->

        <!-- Wrapper : Start -->
        <div class="wrapper">

            <!-- Content : Start -->
            <div class="content-home">

                <!-- Welcome Section : Start -->
                <div id="welcome-section">
                    <h1 style="margin-bottom: 20px; text-align: center;">FINDxDFC</h1>
                    <p style="margin-bottom: 20px;">PT. DataTrace Forensics Lab adalah perusahaan yang bergerak di bidang layanan keamanan siber, khususnya dalam investigasi dan intelijen. Dengan pengalaman selama 10 tahun, perusahaan ini telah menjalin kerjasama dengan Digital Forensics Center UM Purwokerto untuk mengembangkan mobil bergerak yang difungsikan sebagai laboratorium forensik digital. Selain itu, DataTrace juga berfokus pada pengembangan perangkat lunak untuk forensik, memberikan layanan yang sangat dibutuhkan di era digital saat ini. Dalam perjalanan kariernya, PT. DataTrace telah berhasil menangani lebih dari 150 klien, menunjukkan reputasinya yang solid di industri ini.</p>

                    <p style="margin-bottom: 20px;">Perusahaan ini menawarkan berbagai layanan, termasuk Digital Forensics Lab Setup yang membantu organisasi dalam mempersiapkan unit laboratorium forensik untuk penanganan insiden kejahatan siber. Dengan lebih dari 130 kasus yang ditangani, DataTrace menunjukkan keahlian dan komitmennya dalam memberikan solusi yang tepat dan efektif. Selain itu, layanan Mobile Forensics yang mereka sediakan memungkinkan analisis digital pada perangkat smartphone dari berbagai jenis manufaktur, dengan bukti yang sudah mencapai 250 pada kategori ini.</p>

                    <p style="margin-bottom: 20px;">
                    Selain itu, FINDxDFC merupakan situs web gratis yang dihasilkan dari kolaborasi antara mahasiswa Universitas Muhammadiyah Purwokerto dan Digital Forensics Center. Situs ini bertujuan untuk mempermudah para profesional di bidang digital forensik dalam melakukan Open Source Intelligence (OSINT). FINDxDFC menyediakan berbagai alat dan sumber daya yang dirancang untuk mendukung pengumpulan serta analisis informasi publik. Dengan fokus pada berbagai jenis intelijen, termasuk OSINT, GEOINT, SOCMINT, dan HUMINT, FINDxDFC berkomitmen untuk memberikan solusi yang efektif untuk kebutuhan analisis dan investigasi.
                    </p>
                </div>
                <!-- Welcome Section : End -->

            </div>
            <!-- Content : End -->

        </div>
        <!-- Wrapper : End -->


    </div>
    <!-- Container : End -->

    <footer>
      <p style="font-size: 18px; font-weight: bold;">&copy; 2024 FINDxDFC. All rights reserved.</p>
      <!-- <p>
        <a href="privacy.html">Kebijakan Privasi</a> |
        <a href="terms.html">Syarat & Ketentuan</a> |
        <a href="contact.html">Kontak</a> |
        <a href="faq.html">FAQ</a>
      </p> -->
    </footer>

    <!-- Loading Screen : Start -->
    <div id="loading-screen">
        <div class='track'>
            <div class='spinner'></div>
        </div>
    </div>
    <!-- Loading Screen : End -->

    <script src="../../js/script.js"></script>
    <script src="../../js/dropdown.js"></script>
</body>

</html>