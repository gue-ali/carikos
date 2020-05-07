<?php
include 'koneksi.php';

$query = "SELECT max(nopenyewa) as maxKode FROM tbpenyewa";
 $hasil = mysqli_query($koneksi,$query);
 $data = mysqli_fetch_array($hasil);
 $kdadmin = $data['maxKode'];
 $noUrut = (int) substr($kdadmin, 1, 1);
 $noUrut++;
 $char = "p";
 $kdadmin = $char . sprintf("%01s", $noUrut);

$name = $_POST['namalengkap'];
$noktp = $_POST['noktp'];
$username = $_POST['username'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$password = $_POST['password'];
$nama = $_FILES['fotoktp']['name'];
$file_tmp = $_FILES['fotoktp']['tmp_name'];
$password = $_POST['password'];
$pass2 = $_POST['confrimpassword'];

if ($password == $pass2){
mysqli_query($koneksi,"INSERT INTO `tbpenyewa`(`nopenyewa`, `noktp`, `nama`, `alamat`, `nohp`, `username`, `password`, `email`, `fotoktp`, `fotoprofil`) VALUES (NULL'$noktp','$name','$alamat','$nohp','$username','$password','$email','$nama','index.png')");
echo "INSERT INTO `tbpenyewa`(`nopenyewa`, `noktp`, `nama`, `alamat`, `nohp`, `username`, `password`, `email`, `fotoktp`, `fotoprofil`) VALUES ('$kdadmin','$noktp','$name','$alamat','$nohp','$username','$password','$email','$nama','index.png')";
header("location:daftarpenyewa.php");
move_uploaded_file($file_tmp, 'img/'.$nama);
}
else{
    echo"<script>alert('Passwor Tidak sama');window.history.back();</script>";
}
  

?>