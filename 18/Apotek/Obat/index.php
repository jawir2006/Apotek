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

// Ambil data obat (Obat) dari database
$query = "SELECT * FROM obat";
$result = mysqli_query($connection, $query);

if (!$result) {
    die("Query Error: " . mysqli_error($connection));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Obat Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Obat Home</a>
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
        <h2>Obat Data</h2>
        <a href="tambah_obat.php"" class=" btn btn-primary btn-login mb-3">Add Obat</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Stock</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['idObat']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['ket']; ?></td>
                        <td><?php echo $row['stok']; ?></td>
                        <td>
                            <a href="edit_obat.php?id=<?php echo $row['idObat']; ?>"
                                class=" btn btn-warning btn-login mb-3">Edit</a>
                            <a href="hapus_obat.php?id=<?php echo $row['idObat']; ?>"
                                class=" btn btn-danger btn-login mb-3">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>