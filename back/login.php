<?php
session_start();
require("config.php");
$username=$_POST['username'];
$password=$_POST['password'];
$select=mysqli_query($conn,"SELECT * FROM user where username='$username'");
$row=mysqli_fetch_assoc($select);
$id=$row['id'];
if ($row['password']==$password){
    $cek_level=mysqli_query($conn, "SELECT level from user where id=$id");
    $level = mysqli_fetch_assoc($cek_level)['level'];
    if($level=='1'){
        $_SESSION['user_id']=$id;
        header("location:../halaman_pengguna.php");
    }
    elseif($level=='2'){
        $_SESSION['user_id']=$id;
        header("location:../halaman_admin.php");
    }
}
else{
    echo "<p> username atau password anda salah!</p>";
    echo "<a style='text-decoration:none' href='../login.php'> coba lagi</a><br><br>";
    echo "<a style='text-decoration:none' href='../daftar.php'>buat akun</a>";
}
?>