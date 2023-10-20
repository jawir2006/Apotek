<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Program</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
    body {
        background-image: url('background-image.jpg');
        /* Ganti dengan gambar latar belakang yang sesuai */
        background-size: cover;
        background-position: center;
        color: #fff;
        background-color: #111;
    }

    .container {
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .btn-login,
    .btn-register {
        font-size: 20px;
        margin: 10px;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Welcome Apotek Program</h1>
        <a href="/Program-Client/login" class="btn btn-primary btn-login">
            <i class="fas fa-sign-in-alt"></i> Login
        </a>
        <a href="/Program-Client/register" class="btn btn-secondary btn-register">
            <i class="fas fa-user-plus"></i> Register
        </a>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>