<?php
include 'koneksi.php';


$query = "SELECT max(kdkamar) as maxKode FROM tbkamar";
 $hasil = mysqli_query($koneksi,$query);
 $data = mysqli_fetch_array($hasil);
 $kdadmin = $data['maxKode'];
 $noUrut = (int) substr($kdadmin, 3, 3);
 $noUrut++;
 $char = "km";
 $kdadmin = $char . sprintf("%01s", $noUrut);

$lemari = @$_POST['lemari']; 
$kasur = @$_POST['kasur'];
$mejabelajar = @$_POST['meja'];
$kursi = @$_POST['kursi'];
$harga = $_POST['harga'];
$luas = $_POST['luas'];
$cermin = @$_POST['cermin'];
$kdkos = @$_POST['kdkos'];
$foto = $_FILES['foto']['name'];
$file_tmp = $_FILES['foto']['tmp_name'];
$foto1 = $_FILES['foto1']['name'];
$file_tmp1 = $_FILES['foto1']['tmp_name'];

//echo"<p>INSERT INTO `tbkamar`(`kdkamar`, `lemari`, `kasur`, `mejabelajar`, `kursi`, `harga`, `luaskamar`, `cermin`, `kdkos`, `fotokamar`, `fotokamar1`, `status`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12])</p>";
//echo"INSERT INTO `tbkamar`(`kdkamar`, `lemari`, `kasur`, `mejabelajar`, `kursi`, `harga`, `luaskamar`, `cermin`, `kdkos`, `fotokamar`, `fotokamar1`, `status`) VALUES ('$kdadmin','$lemari','$kasur','$mejabelajar','$kursi','$harga','$luas','$cermin','$kdkos','$foto','$foto1','0')";

if ($foto==null || $foto1==null) {
  echo"<script>alert('Harus memasukkan foto');window.history.back();</script>";   
}

else {
 
$ee = mysqli_query($koneksi,"INSERT INTO `tbkamar`(`kdkamar`, `lemari`, `kasur`, `mejabelajar`, `kursi`, `harga`, `luaskamar`, `cermin`, `kdkos`, `fotokamar`, `fotokamar1`, `status`) VALUES (NULL,'$lemari','$kasur','$mejabelajar','$kursi','$harga','$luas','$cermin','$kdkos','$foto','$foto1','1')");
move_uploaded_file($file_tmp, 'img/'.$foto);
move_uploaded_file($file_tmp1, 'img/'.$foto1);
//// if ($ee){
 //  echo " berhasil ";
//} else {
 //  echo " gagal ";
//}
header("location:profilpemilik.php"); 
}
?>