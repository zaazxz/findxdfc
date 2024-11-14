<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - FINDxDFC</title>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #121212;
            /* Latar belakang gelap */
            color: white;
            /* Warna teks putih */
            font-family: 'Chakra Petch', sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            text-align: center;
            padding: 20px 0;
            background-color: #1a1a1a;
            /* Warna header */
        }

        h1 {
            margin: 0;
        }

        .container {
            display: flex;
        }

        .wrapper {
            width: 100%;
        }

        section {
            margin: 20px auto;
            padding: 20px;
            background-color: #1e1e1e;
            /* Latar belakang section */
            border-radius: 8px;
            max-width: 800px;
        }

        section h2 {
            text-align: center;
            border-bottom: 2px solid #00faff;
            /* Garis bawah pada judul */
            padding-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border: 1px solid #444;
            /* Border tabel */
        }

        th {
            background-color: #333;
        }

        td a {
            color: #00faff;
            /* Warna link yang berbeda */
            text-decoration: none;
        }

        td a:hover {
            text-decoration: underline;
        }

        .crud-buttons {
            display: flex;
            justify-content: center;
        }

        .crud-buttons form {
            margin: 0 5px;
        }

        button {
            padding: 5px 10px;
            font-family: 'Chakra Petch', sans-serif;
            border: none;
            border-radius: 5px;
            background-color: #00faff;
            color: #121212;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #007f9a;
        }

        form input,
        form textarea {
            display: block;
            width: calc(100% - 20px);
            /* Menghindari overflow */
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #444;
            /* Border input */
            border-radius: 5px;
            background-color: #222;
            /* Latar belakang input */
            color: white;
            /* Warna teks input */
        }

        form input::placeholder,
        form textarea::placeholder {
            color: #888;
            /* Warna placeholder */
        }

        /* Style untuk tombol logout */
        .logout-button {
            background-color: #ff4d4d;
            /* Warna merah untuk tombol logout */
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
        }

        .logout-button:hover {
            background-color: #cc0000;
            /* Merah lebih gelap saat hover */
        }

        #type {
            margin-bottom: 10px;
            width: 100%;
            padding: 10px 0;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <header>
        <h1>Halaman Admin FINDxDFC</h1>
    </header>

    <div class="container">
    <div class="wrapper">
            <section>
                <h2>Tambah referensi Baru</h2>
                <form action="/pages/admin/reference/functions/create.php" method="POST">
                    <input type="text" name="name" placeholder="Nama Referensi" required>
                    <select name="type" id="type">
                        <option value="Osint">Osint</option>
                        <option value="Geoint">Geoint</option>
                        <option value="Socint">Socmint</option>
                        <option value="Humint">Humint</option>
                    </select>
                    <input type="text" name="link" placeholder="Tautan Referensi">
                    <button type="submit">Tambah Referensi</button>
                </form>
                <a href="../index.php" style="text-decoration: none;">
                        <button style="background-color: #cc0000; color: white; margin-top: 10px;">Kembali</button>
                </a>
            </section>
        </div>
    </div>

</body>

</html>