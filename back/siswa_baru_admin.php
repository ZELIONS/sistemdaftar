<?php
session_start();
include("config.php");
$id=$_SESSION['user_id'];
$name=$_POST['name'];
$nisn=$_POST['nisn'];
$alamat=$_POST['alamat'];
$nama_ayah=$_POST['nama-ayah'];
$nama_ibu=$_POST['nama-ibu'];
$tempat_lahir=$_POST['tempat-lahir'];
$tanggal_lahir=$_POST['tanggal-lahir'];
$jurusan=$_POST['jurusan'];
$insert=mysqli_query($conn,"INSERT INTO siswa_baru(name, nisn,alamat,nama_ayah,nama_ibu,tempat_lahir,tanggal_lahir,user_acc,jurusan)values('$name',$nisn,'$alamat','$nama_ayah','$nama_ibu', '$tempat_lahir','$tanggal_lahir',$id,'$jurusan')");
if($insert){
    header("location:../halaman_admin.php");
}
?>