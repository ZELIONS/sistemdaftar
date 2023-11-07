<?php
session_start();
require("back/config.php");

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$id = $_SESSION['user_id'];
$admin_query = mysqli_query($conn, "SELECT level FROM user WHERE id = $id");

if ($admin_query) {
    $admin_data = mysqli_fetch_assoc($admin_query);
    $user_level = $admin_data['level'];

    if ($user_level == 2) {
        header('Location: login.php'); 
        exit;
    }
} else {
    
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #343a40; 
            color: #fff; 
        }
        .list-group-item {
            background-color: #23272b; 
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Selamat Datang <?php 
        $nama=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM user where id=$id"));
        echo $nama['username'];
        ?>
         </h1>
        <h2>Informasi Jurusan</h2>
        <ul class="list-group">
            <li class="list-group-item">
                <h3>Jurusan: Rekayasa Perangkat Lunak</h3>
                <strong>Akreditasi:</strong> A
                <br>
                <strong>Kurikulum:</strong> Merdeka
            </li>
        </ul>

        <ul class="list-group">
            <li class="list-group-item">
                <h3>Jurusan: Teknik Jaringan Aksen</h3>
                <strong>Akreditasi:</strong> A
                <br>
                <strong>Kurikulum:</strong> Merdeka
            </li>
        </ul>

        <ul class="list-group">
            <li class="list-group-item">
                <h3>Jurusan: Teknik Komputer dan Jaringan</h3>
                <strong>Akreditasi:</strong> A
                <br>
                <strong>Kurikulum:</strong> Merdeka
            </li>
        </ul>

        <ul class="list-group">
            <li class="list-group-item">
                <h3>Jurusan: Desain Komunikasi Visual</h3>
                <strong>Akreditasi:</strong> A
                <br>
                <strong>Kurikulum:</strong> Merdeka
            </li>
        </ul>
        <p><a href="halaman_daftar.php">Tertarik untuk bergabung? Daftar sekarang</a></p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
