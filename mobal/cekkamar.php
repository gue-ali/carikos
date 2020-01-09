<?php
include 'koneksi.php';
session_start();
//echo json_encode($row);
//echo $_SESSION["username"];
$query = "SELECT max(kdkamar) as maxKode FROM tbkamar";
 $hasil = mysqli_query($koneksi,$query);
 $data = mysqli_fetch_array($hasil);
 $kdadmin = $data['maxKode'];
 $noUrut = (int) substr($kdadmin, 1, 1);
 $noUrut++;
 $char = "km";
 $kdadmin = $char . sprintf("%01s", $noUrut);

$harga = $_POST['harga'];
$luaskamar = $_POST['luas'];
$kasur = @$_POST['kasur'];
$kursi = @$_POST['kursi'];
$lemari = @$_POST['lemari'];
$meja = @$_POST['meja'];
$kamarmandi = @$_POST['kamarmandi'];
$parkiran = @$_POST['parkiran'];
$kdkos = $_POST['kdkos'];
$foto = $_FILES['foto']['name'];
$file_tmp = $_FILES['foto']['tmp_name'];
$cermin = @$_POST['cermin']
$fotofoto = $_FILES['foto1']['name'];
$file_tmp1 = $_FILES['foto1']['tmp_name'];
echo "INSERT INTO `tbkamar`(`kdkamar`, `lemari`, `kasur`, `mejabelajar`, `kursi`, `harga`, `luaskamar`, `cermin`, `kdkos`, `fotokamar`, `fotokamar1`) VALUES ('$kdadmin','$lemari','$kasur','$meja','$kursi','$harga','$luaskamar','$cermin','$kdkos','$foto','$fotofoto')";
$ee = mysqli_query($koneksi,"INSERT INTO `tbkamar`(`kdkamar`, `lemari`, `kasur`, `mejabelajar`, `kursi`, `harga`, `luaskamar`, `cermin`, `kdkos`, `fotokamar`, `fotokamar1`) VALUES ('$kdadmin','$lemari','$kasur','$meja','$kursi','$harga','$luaskamar','$cermin','$kdkos','$foto','$fotofoto')";
move_uploaded_file($file_tmp, 'img/'.$foto);
move_uploaded_file($file_tmp1, 'img/'.$foto1);

//if ($ee){
  //  echo " berhasil ";
//} else {
  //  echo " gagal ";
//}
//header("location:profilpemilik.php");