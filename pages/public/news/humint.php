<?php

// Including Connection 
include_once('../../../database/connection.php');

// Fetch Data
$all = mysqli_query($conn, "SELECT * FROM news WHERE category = 'Osint'");
$osint = mysqli_query($conn, "SELECT * FROM news WHERE category = 'Osint'");
$geoint = mysqli_query($conn, "SELECT * FROM news WHERE category = 'Geoint'");
$humint = mysqli_query($conn, "SELECT * FROM news WHERE category = 'Humint'");
$socmint = mysqli_query($conn, "SELECT * FROM news WHERE category = 'Socmint'");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- X-frame option -->
    <meta http-equiv="X-Frame-Options" content="SAMEORIGIN">

    <title>Berita Humint - FINDxDFC</title>
    <link rel="stylesheet" href="../../../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Container : Start -->
    <div id="container-custom">

        <!-- Header : Start -->

        <nav>
            <div class="nav-wrapper">
                <a href="../../../index.php">Beranda</a>
                <a href="../../public/news.php">Berita</a>
                <a href="../about.php">Tentang</a>
                <a href="../../admin/index.php">Administrator?</a>
            </div>
        </nav>

        <nav class="nav-wrapper-berita">
            <div>
                <a href="osint.php">Osint</a>
                <a href="geoint.php">Geoint</a>
                <a href="#">Humint</a>
                <a href="socmint.php">Socmint</a>
            </div>
        </nav>
        <!-- Header : End -->

        <!-- Wrapper : Start -->
        <div class="wrapper">

            <!-- Content : Start -->
            <div class="content-home">

                <!-- Welcome Section : Start -->
                <div id="welcome-section">
                    <h1 style="margin-bottom: 20px; text-align: center;">Berita Harian</h1>
                    <hr style="width: 80%; margin: auto;">

                    <!-- News Section : Start -->
                    <?php if ($humint->num_rows == 0) : ?>
                        <h1 style="text-align: center; margin: 20px;">Tidak ada Berita.</h1>
                    <?php endif ?>


                    <?php while ($row = mysqli_fetch_assoc($humint)) : ?>
                        <div class="news-section">
                            <div class="news-image">
                                <img src="../../admin/news/uploads/<?php echo $row['img'] ?>" alt="Image" style="width: 500px; height: 300px; object-fit: cover;">
                            </div>
                            <div class="news-text">
                                <h1 style="font-size: 48px;"><?php echo $row['title'] ?></h1>
                                <small style="margin-top: 20px;"><?php echo $row['created_at'] ?></small>
                                <a href="<?php echo $row['link'] ?>" style="margin-top: 20px; color: white; display: block;">Read More</a>
                            </div>
                        </div>
                    <?php endwhile ?>

                    <!-- News Section : End -->

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

    <script src="../../../js/script.js"></script>
    <script src="../../../js/dropdown.js"></script>
</body>

</html>