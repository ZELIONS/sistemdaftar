<?php
require("config.php");
session_start();
$admin_id=$_SESSION['user_id'];

$pendaftar_id=$_GET['id'];
$delete=mysqli_query($conn,"DELETE FROM pendaftar where id=$pendaftar_id");
if($delete){
    header("location:../halaman_admin.php");
}
?>