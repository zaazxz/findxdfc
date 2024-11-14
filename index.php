<?php

// Including Connection 
include_once('database/connection.php');

// Fetch Data
$all = mysqli_query($conn, "SELECT * FROM reference");
$osint = mysqli_query($conn, "SELECT * FROM reference WHERE type = 'Osint'");
$geoint = mysqli_query($conn, "SELECT * FROM reference WHERE type = 'Geoint'");
$socmint = mysqli_query($conn, "SELECT * FROM reference WHERE type = 'Socmint'");
$humint = mysqli_query($conn, "SELECT * FROM reference WHERE type = 'Humint'");
$cybint = mysqli_query($conn, "SELECT * FROM reference WHERE type = 'Cybint'");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- X-frame option -->
    <meta http-equiv="X-Frame-Options" content="SAMEORIGIN">

    <title>Beranda - FINDxDFC</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Container : Start -->
    <div id="container-custom">

        <!-- Video : Start -->
        <video id="bg-vid" muted autoplay loop>
            <source src="assets/videos/background.mp4">
        </video>
        <!-- Video : End -->

        <!-- Header : Start -->
        <header>
            <h1>FINDxDFC</h1>
        </header>

        <nav>
            <?php if ($all->num_rows > 0) : ?>
                <button class="toggler-sidebar">☰</button>
            <?php endif ?>
            <div class="nav-wrapper">
                <a href="#">Beranda</a>
                <a href="/pages/public/news.php">Berita</a>
                <a href="/pages/public/about.php">Tentang</a>
                <a href="/pages/admin/index.php">Administrator?</a>
            </div>
        </nav>
        <!-- Header : End -->

        <!-- Blur : Start -->
        <div id="blur"></div>
        <!-- Blur : End -->

        <!-- Wrapper : Start -->
        <div class="wrapper">

            <!-- Sidebar : Start -->
            <?php if ($all->num_rows > 0) : ?>
                <sidebar id="sidebar">

                    <!-- Osint : Start -->
                    <div id="sidebar-osint">
                        <button id="btn-osint">Alat Osint</button>
                        <div id="osint-list">
                            <?php while ($row = mysqli_fetch_assoc($osint)) : ?>
                                <div class="tools-list">
                                    <div value='<?php echo $row['link'] ?>' style="cursor: pointer;"
                                        class="tools"><?php echo $row['name'] ?></div>
                                </div>
                            <?php endwhile ?>
                        </div>
                    </div>
                    <!-- Osint : End -->

                    <!-- Geoint : Start -->
                    <div id="sidebar-geoint">
                        <button id="btn-geoint">Alat Geoint</button>
                        <div id="geoint-list">
                            <?php while ($row = mysqli_fetch_assoc($geoint)) : ?>
                                <div class="tools-list">
                                    <div value='<?php echo $row['link'] ?>' style="cursor: pointer;" class="tools"><?php echo $row['name'] ?></div>
                                </div>
                            <?php endwhile ?>
                        </div>
                    </div>
                    <!-- Geoint : End -->

                    <!-- Socmint : Start -->
                    <div id="sidebar-socmint">
                        <button id="btn-socmint">Alat Socmint</button>
                        <div id="socmint-list">
                            <?php while ($row = mysqli_fetch_assoc($socmint)) : ?>
                                <div class="tools-list">
                                    <div value='<?php echo $row['link'] ?>' style="cursor: pointer;" class="tools"><?php echo $row['name'] ?></div>
                                </div>
                            <?php endwhile ?>
                        </div>
                    </div>
                    <!-- Socmint : End -->

                    <!-- Humint : Start -->
                    <div id="sidebar-humint">
                        <button id="btn-humint">Alat Humint</button>
                        <div id="humint-list">
                            <?php while ($row = mysqli_fetch_assoc($humint)) : ?>
                                <div class="tools-list">
                                    <div value='<?php echo $row['link'] ?>' style="cursor: pointer;" class="tools"><?php echo $row['name'] ?></div>
                                </div>
                            <?php endwhile ?>
                        </div>
                    </div>
                    <!-- Humint : End -->

                    <!-- Humint : Start -->
                    <div id="sidebar-cybint">
                        <button id="btn-cybint">Alat Cybint</button>
                        <div id="cybint-list">
                            <?php while ($row = mysqli_fetch_assoc($cybint)) : ?>
                                <div class="tools-list">
                                    <div value='<?php echo $row['link'] ?>' style="cursor: pointer;" class="tools"><?php echo $row['name'] ?></div>
                                </div>
                            <?php endwhile ?>
                        </div>
                    </div>
                    <!-- Humint : End -->


                </sidebar>
            <?php endif ?>
            <!-- Sidebar : End -->

            <!-- Content : Start -->
            <div class="content-home">

                <!-- Welcome Section : Start -->
                <div id="welcome-section">
                    <h1 style="margin-bottom: 20px; text-align: center;">FINDxDFC</h1>
                    <p>Open Source Intelligence (OSINT) adalah metode pengumpulan dan analisis informasi yang tersedia untuk umum dengan tujuan intelijen. Ini mencakup data dari situs web, media sosial, catatan publik, dan sumber terbuka lainnya. Alat profiling adalah alat khusus yang dirancang untuk mengumpulkan dan menganalisis informasi tentang individu, organisasi, atau jaringan. Alat-alat ini dapat membantu dalam berbagai tugas investigasi dan keamanan dengan memberikan wawasan berharga yang diperoleh dari data yang dapat diakses publik. Jelajahi situs kami untuk menemukan berbagai alat dan sumber daya terkait OSINT dan profiling.</p>
                </div>
                <!-- Welcome Section : End -->

                <!-- Welcome Section : Start -->
                <div id="iframe-section">
                    <h1 style="margin-bottom: 20px; text-align: center;" id="iframe-title">Osint Tools</h1>
                    <iframe src="https://en.wikipedia.org/wiki/Open-source_intelligence" frameborder="0" id="iframe-id" scrolling="yes"></iframe>
                </div>
                <!-- Welcome Section : End -->

            </div>
            <!-- Content : End -->

        </div>
        <!-- Wrapper : End -->


    </div>
    <!-- Container : End -->

    <!-- Loading Screen : Start -->
    <div id="loading-screen">
        <div class='track'>
            <div class='spinner'></div>
        </div>
    </div>
    <!-- Loading Screen : End -->

    <script src="js/script.js"></script>
    <script src="js/dropdown.js"></script>
</body>

</html>