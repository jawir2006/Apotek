<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['idUser'])) {
    header('Location: ../login/index.php');
    exit();
}

include('../config.php'); // Menginclude file config.php

// Mendapatkan informasi pengguna dari sesi
$idUser = $_SESSION['idUser'];
$username = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Home Admin</title>
    <style>
    /* Latar belakang gelap */
    body {
        background-color: #111;
        color: #fff;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }

    .info {
        background-color: #222;
        border: 1px solid #444;
        padding: 20px;
        margin-bottom: 20px;
    }

    .info h2 {
        color: #007bff;
    }

    .stocks {
        background-color: #222;
        border: 1px solid #444;
        padding: 20px;
    }

    .stocks h2 {
        color: #007bff;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">User Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../Home/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../User/">User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Obat/">Obat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Pegawai/">Pegawai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="info">
            <h2>Welcome, <?php echo $username; ?>!</h2>
        </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>