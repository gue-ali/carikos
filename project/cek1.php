<?php
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];


$query1 = mysqli_query($koneksi,"select * from tbpenyewa where username='$username' and password='$password'");
$cek1 = mysqli_num_rows($query1);


if ($cek1 > 0) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';
    header("location: index.php");
}
else if($cek1==null){
    echo"<script>alert('username dan password salah');window.history.back();</script>";
}
else {
    echo"<script>alert('username dan password tidak boleh kosong');window.history.back();</script>";
}
?>