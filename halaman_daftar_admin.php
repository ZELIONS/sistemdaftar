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

    if ($user_level == 1) {
        header('Location: login.php'); 
        exit;
    }
} else {
    
}

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist\css\bootstrap.min.css">
    <style>
        .custom-button:hover {
            background-color: #007bff;
            color: #fff;
        }
        body {
            background-color: #292b2c; 
            color: #fff; 
        }
        h1, h2, p, label {
            color: #fff;
        }
        .form-control {
            background-color: #333; 
            color: #fff; 
        }
    </style>
    <title>Halaman Pendaftaran</title>
</head>

<body>
    <div class="container">

        <h2>Formulir Pendaftaran</h2>
        <form action="back/siswa_baru_admin.php" method="post">
            <div class="form-group">
                <label for="name">Nama Lengkap:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="nisn">NISN:</label>
                <input type="text" class="form-control" id="nisn" name="nisn" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="nama-ayah">Nama Ayah:</label>
                <input type="text" class="form-control" id="nama-ayah" name="nama-ayah" required>
            </div>

            <div class="form-group">
                <label for="nama-ibu">Nama Ibu:</label>
                <input type="text" class="form-control" id="nama-ibu" name="nama-ibu" required>
            </div>

            <div class="form-group">
                <label for="tempat-lahir">Tempat Lahir:</label>
                <input type="text" class="form-control" id="tempat-lahir" name="tempat-lahir" required>
            </div>



            <div class="form-group">
                <label for="tanggal-lahir">Tanggal Lahir:</label>
                <input type="date" class="form-control" id="tanggal-lahir" name="tanggal-lahir" required>
            </div>
            
            <div class="form-group">
                <label for="jurusan">Jurusan:</label>
             <select class="form-control" id="jurusan" name="jurusan" required>
                <option value="rpl">Rekayasa Perangkat Lunak (RPL)</option>
                <option value="tkj">Teknik Komputer Jaringan (TKJ)</option>
                <option value="tja">Teknik Jaringan Akses (TJA)</option>
                <option value="dkv">Desain Komunikasi Visual (DKV)</option>
            </select>
            </div>
            <button type="submit" class="btn btn-primary custom-button">Daftar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
