<?php
session_start();

if (!isset($_SESSION['idUser'])) {
    header('Location: ../login/index.php');
    exit();
}

include('../config.php');

$idUser = $_SESSION['idUser'];
$username = $_SESSION['username'];

// Mengambil daftar klien dari database
$query = "SELECT * FROM pegawai";
$result = mysqli_query($connection, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nama Pasien</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Nama Pasien</a>
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
    <!-- Tampilkan daftar klien dari database -->


    <div class="container">
        <h2>List Pegawai</h2>
        <div class="container">
            <a href="tambah_Pegawai.php"" class=" btn btn-primary btn-login mb-3">Add Pegawai</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Alamat</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $row['idPegawai']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['jabatan']; ?></td>
                        <td><?php echo $row['alamat']; ?></td>
                        <td>
                            <a href="edit_Pegawai.php?id=<?php echo $row['idPegawai']; ?>" class="btn btn-warning">Edit</a>
                            <a href="hapus_Pegawai.php?id=<?php echo $row['idPegawai']; ?>"
                                class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>