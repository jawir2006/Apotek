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
$query = "SELECT * FROM user";
$result = mysqli_query($connection, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Users Control</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Users Control</a>
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
        <h2>User</h2>
        <div class="container">
            <a href="tambah_User.php"" class=" btn btn-primary btn-login mb-3">Add User</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID User</th>
                    <th>Username</th>
                    <th>Role User</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $row['idUser']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['role']; ?></td>
                        <td>
                            <a href="edit_User.php?id=<?php echo $row['idUser']; ?>" class="btn btn-warning">Edit</a>
                            <a href="hapus_User.php?id=<?php echo $row['idUser']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>