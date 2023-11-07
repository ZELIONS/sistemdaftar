<?php
session_start();
$id=$_SESSION['user_id'];
require("config.php");

$name=$_POST['name'];
$nisn=$_POST['nisn'];
$alamat=$_POST['alamat'];
$nama_ayah=$_POST['nama-ayah'];
$nama_ibu=$_POST['nama-ibu'];
$tempat_lahir=$_POST['tempat-lahir'];
$tanggal_lahir=$_POST['tanggal-lahir'];
$insert=mysqli_query($conn,"INSERT INTO pendaftar(name, nisn,alamat,nama_ayah,nama_ibu,tempat_lahir,tanggal_lahir,acc_id)values('$name',$nisn,'$alamat','$nama_ayah','$nama_ibu', '$tempat_lahir','$tanggal_lahir',$id)");
if($insert){
    header("location:../syarat.php");
}

?>