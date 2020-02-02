<?php
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi,"select * from tbpemilik where username='$username' and password='$password'");
$cek = mysqli_num_rows($query);

$query1 = mysqli_query($koneksi,"select * from tbpenyewa where username='$username' and password='$password'");
$cek1 = mysqli_num_rows($query1);

if ($cek > 0) {
    session_start();
    $data = mysqli_fetch_array($query);
    $_SESSION['kode'] = $data['kdpemilik'];
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';
    header("location:profilpemilik.php");
}

else if($cek==null){
    echo"<script>alert('username dan password salah');window.history.back();</script>";
}
    else {
    echo"<script>alert('username dan password tidak boleh kosong');window.history.back();</script>";
}
?>