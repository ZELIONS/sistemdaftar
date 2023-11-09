<?php
require("back/config.php");
session_start();
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
$nama_siswa = mysqli_fetch_assoc($data_siswa = mysqli_query($conn, "SELECT name FROM user WHERE id=$id"));
?>

<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>

        .custom-button:hover {
            background-color: #007bff;
            color: #fff; 
        }
        body {
            background-color: #343a40; 
            color: #fff; 
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Selamat <?php echo $nama_siswa['name']; ?>! Anda telah mengirim data pendaftaran di SMK Telkom Medan</h1>
        <h2>Syarat Registrasi - 10 April 2024</h2>
        <p>Berikut adalah daftar syarat yang harus Anda bawa saat registrasi pada tanggal 10 April 2024:</p>
        <ol>
            <li>Fotokopi Kartu Keluarga</li>
            <li>Fotokopi Raport</li>
            <li>Kartu Indonesia Pintar</li>
            <li>Fotokopi KTP Ayah/Ibu</li>
        </ol>
        <p>Pastikan Anda membawa semua syarat di atas saat datang untuk registrasi.</p>
        <button class="btn btn-primary custom-button"><a href="halaman_pengguna.php" style="text-decoration:none; color:white">Kembali</a></button>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
