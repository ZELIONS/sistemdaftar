<?php
require("config.php");

$id=$_GET['id'];
$select=mysqli_query($conn,"SELECT * FROM pendaftar where id=$id");

$row = mysqli_fetch_assoc($select);
$name = $row['name'];
$nisn = $row['nisn'];
$alamat = $row['alamat'];
$nama_ayah = $row['nama_ayah'];
$nama_ibu = $row['nama_ibu'];
$tempat_lahir = $row['tempat_lahir'];
$tanggal_lahir = $row['tanggal_lahir'];
$acc_id = $row['acc_id'];

$insert=mysqli_query($conn,"INSERT INTO siswa_baru(name,nisn,alamat,nama_ayah,nama_ibu,tempat_lahir,tanggal_lahir)values('$name','$nisn','$alamat','$nama_ayah','$nama_ibu','$tempat_lahir','$tanggal_lahir')");
if($insert){
    $delete=mysqli_query($conn,"DELETE FROM pendaftar where id=$id");
    header("location:../halaman_admin.php");
}
?>