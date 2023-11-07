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


$select = mysqli_query($conn, "SELECT * FROM pendaftar");
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
        table {
            background-color: #23272b;
        }
        table th, table td {
            color: #fff; 
        }

        .custom-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff; 
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .custom-button:hover {
            background-color: #0056b3; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>PERMINTAAN PENDAFTARAN</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NISN</th>
                    <th>Alamat</th>
                    <th>Nama Ayah</th>
                    <th>Nama Ibu</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Account ID</th>
                    <th>Tindakan</th>
                    <th>Jurusan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($select)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $nisn = $row['nisn'];
                    $alamat = $row['alamat'];
                    $nama_ayah = $row['nama_ayah'];
                    $nama_ibu = $row['nama_ibu'];
                    $tempat_lahir = $row['tempat_lahir'];
                    $tanggal_lahir = $row['tanggal_lahir'];
                    $acc_id = $row['acc_id'];

                    echo "<tr>";
                    echo "<td>$id</td>";
                    echo "<td>$name</td>";
                    echo "<td>$nisn</td>";
                    echo "<td>$alamat</td>";
                    echo "<td>$nama_ayah</td>";
                    echo "<td>$nama_ibu</td>";
                    echo "<td>$tempat_lahir</td>";
                    echo "<td>$tanggal_lahir</td>";
                    echo "<td>$acc_id</td>";
                    echo "<td>";
                    echo "<button class='custom-button'><a href='back/hapus.php?id=$id' style='text-decoration:none; color:white'>Tolak</a></button>";
                    echo "<button class='custom-button'><a href='back/terima.php?id=$id' style='text-decoration:none; color:white'>Terima</a></button>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <?php
        $siswa_baru = mysqli_query($conn, "SELECT * FROM siswa_baru");
        ?>
        <h2>SISWA YANG TELAH DITERIMA</h2>
        <button class="custom-button"><a href="halaman_daftar_admin.php" style="text-decoration:none; color:white">Masukkan Pendaftar</a></button>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NISN</th>
                    <th>Alamat</th>
                    <th>Nama Ayah</th>
                    <th>Nama Ibu</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jurusan</th>

                </tr>
            </thead>
            <tbody>
                <?php
                while ($roww = mysqli_fetch_assoc($siswa_baru)) {
                    $name = $roww['name'];
                    $nisn = $roww['nisn'];
                    $alamat = $roww['alamat'];
                    $nama_ayah = $roww['nama_ayah'];
                    $nama_ibu = $roww['nama_ibu'];
                    $tempat_lahir = $roww['tempat_lahir'];
                    $tanggal_lahir = $roww['tanggal_lahir'];
                    echo "<tr>";
                    echo "<td>$name</td>";
                    echo "<td>$nisn</td>";
                    echo "<td>$alamat</td>";
                    echo "<td>$nama_ayah</td>";
                    echo "<td>$nama_ibu</td>";
                    echo "<td>$tempat_lahir</td>";
                    echo "<td>$tanggal_lahir</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
