<?php
session_start();
include 'koneksi.php';

$result1 = mysqli_query($koneksi, "SELECT * FROM tbpemilik WHERE username='" . $_SESSION['username'] . "'");
$row = mysqli_fetch_array($result1);

$kdpemilik = $row['kdpemilik'];
$name = $_POST['namalengkap'];
$username = $_POST['username'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$password = $_POST['password'];
$pass2 = $_POST['comfrimpassword'];
$nama = $_FILES['fotoprofil']['name'];
$file_tmp = $_FILES['fotoprofil']['tmp_name'];


if ($password == $pass2){

    echo "UPDATE `tbpemilik` SET `nama`='$name',`nohp`='$nohp',`username`='$username',`password`='$password',`email`='$email',`alamat`='$alamat',`fotoprofil`='$nama' WHERE kdpemilik='$kdpemilik'";
    $ee = mysqli_query($koneksi,"UPDATE `tbpemilik` SET `nama`='$name',`nohp`='$nohp',`username`='$username',`password`='$password',`email`='$email',`alamat`='$alamat',`fotoprofil`='$nama' WHERE kdpemilik='$kdpemilik'");
//if ($ee){
//    echo " berhasil ";
//} else {
//    echo " gagal ";
//}
move_uploaded_file($file_tmp, 'img/'.$nama);

header("location:profilpemilik.php");

}

else{
    echo"<script>alert('Passwor Tidak sama');window.history.back();</script>";
}
?>
