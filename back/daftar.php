<?php
require("config.php");
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$cek=mysqli_query($conn,"SELECT username from user where username='$username'");
if(mysqli_num_rows($cek) == 0){
    $insert=mysqli_query($conn,"INSERT INTO user (name,username,password,level)VALUES('$name','$username','$password','1')");
    if($insert){
        header("location:../login.php");
    }
}
else{
    echo "<p> username sudah terpakai!</p>";
    echo "<button <a text-decoration:'none' href='../daftar.php'>buat yang lain</a></button>";
}
?>