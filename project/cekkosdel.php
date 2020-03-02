<?php
include 'koneksi.php';
session_start();
$kdkos = $_GET['id'];
echo "DELETE FROM `tbkos` WHERE kdkos=$kdkos";

$ee = mysqli_query($koneksi,"DELETE FROM `tbkos` WHERE kdkos='$kdkos'");

header("location:profilpemilik.php?aksi=berhasil+menghapus");
?>