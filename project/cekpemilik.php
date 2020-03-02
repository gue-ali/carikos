<?php
include 'koneksi.php';

$query = "SELECT max(kdpemilik) as maxKode FROM tbpemilik";
 $hasil = mysqli_query($koneksi,$query);
 $data = mysqli_fetch_array($hasil);
 $kdadmin = $data['maxKode'];
 $noUrut = (int) substr($kdadmin, 1, 1);
 $noUrut++;
 $char = "k";
 $kdadmin = $char . sprintf("%01s", $noUrut);

$name = $_POST['namalengkap'];
$username = $_POST['username'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$password = $_POST['password'];
$pass2 = $_POST['confirmpassword'];

if ($password == $pass2){

    echo "INSERT INTO `tbpemilik`(`kdpemilik`, `nama`, `nohp`, `username`, `password`, `email`, `alamat`,`fotoprofil`) VALUES ('$kdadmin','$name','$nohp','$username','$password','$email','$alamat','index.png')";
    $ee = mysqli_query($koneksi,"INSERT INTO `tbpemilik`(`kdpemilik`, `nama`, `nohp`, `username`, `password`, `email`, `alamat`,`fotoprofil`) VALUES (NULL,'$name','$nohp','$username','$password','$email','$alamat','index.png')");
//if ($ee){
//    echo " berhasil ";
//} else {
//    echo " gagal ";
//}
header("location:daftarpemilik.php");
}

else{
    echo"<script>alert('Passwor Tidak sama');window.history.back();</script>";
}
?>
