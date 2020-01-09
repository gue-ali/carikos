<?php
session_start();
include 'koneksi.php';

$result1 = mysqli_query($koneksi, "SELECT * FROM tbpenyewa WHERE username='" . $_SESSION['username'] . "'");
$row = mysqli_fetch_array($result1);

$kdpenyewa = $row ['nopenyewa'];
$name = $_POST['namalengkap'];
$noktp = $_POST['noktp'];
$username = $_POST['username'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$password = $_POST['password'];
$pass2 = $_POST['commfrimpassword'];
$nama = $_FILES['fotoprofil']['name'];
$file_tmp = $_FILES['fotoprofil']['tmp_name'];

if ($password == $pass2){

$ee = mysqli_query($koneksi,"UPDATE `tbpenyewa` SET `nama`='$name',`alamat`='$alamat',`nohp`='$nohp',`username`='$username',`password`='$password',`email`='$email',`fotoprofil`='$nama' WHERE nopenyewa='$kdpenyewa'");
echo "UPDATE `tbpenyewa` SET `nama`='$name',`alamat`='$alamat',`nohp`='$nohp',`username`='$username',`password`='$password',`email`='$email',`fotoprofil`='$nama' WHERE nopenyewa='$kdpenyewa'";

header("location:profilpenyewa.php");
move_uploaded_file($file_tmp, 'img/'.$nama);


//if ($ee){
//    echo " berhasil ";
//} else {
//    echo " gagal ";
//}
}
else{
    echo"<script>alert('Password Tidak sama');window.history.back();</script>";
}
  

?>