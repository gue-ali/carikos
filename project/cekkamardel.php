<?php
include 'koneksi.php';
session_start();
$kdkos = $_GET['id'];
echo "DELETE FROM `tbkamar` WHERE kdkamar=$kdkos";

$ee = mysqli_query($koneksi,"DELETE FROM `tbkamar` WHERE kdkamar='$kdkos'");

header("location:profilpemilik.php?aksi=berhasil+menghapus");
?>