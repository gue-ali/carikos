<?php
include 'koneksi.php';

$kdkamar=$_POST['kdkamar'];
$lemari = @$_POST['lemari']; 
$kasur = @$_POST['kasur'];
$mejabelajar = @$_POST['meja'];
$kursi = @$_POST['kursi'];
$harga = $_POST['harga'];
$luas = $_POST['luas'];
$foto = $_FILES['foto']['name'];
$file_tmp = $_FILES['foto']['tmp_name'];
$foto1 = $_FILES['foto1']['name'];
$file_tmp1 = $_FILES['foto1']['tmp_name'];

//echo"<p>INSERT INTO `tbkamar`(`kdkamar`, `lemari`, `kasur`, `mejabelajar`, `kursi`, `harga`, `luaskamar`, `cermin`, `kdkos`, `fotokamar`, `fotokamar1`, `status`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12])</p>";
//echo"INSERT INTO `tbkamar`(`kdkamar`, `lemari`, `kasur`, `mejabelajar`, `kursi`, `harga`, `luaskamar`, `cermin`, `kdkos`, `fotokamar`, `fotokamar1`, `status`) VALUES ('$kdadmin','$lemari','$kasur','$mejabelajar','$kursi','$harga','$luas','$cermin','$kdkos','$foto','$foto1','0')";
if ($foto!=null && $foto1==null) {

$ee = mysqli_query($koneksi,"UPDATE `tbkamar` SET `lemari`='$lemari',`kasur`='$kasur',`mejabelajar`='$mejabelajar',`kursi`='$kursi',`harga`='$harga',`luaskamar`='$luas',`fotokamar`='$foto' WHERE kdkamar='$kdkamar'");
echo "UPDATE `tbkamar` SET `lemari`='$lemari',`kasur`='$kasur',`mejabelajar`='$mejabelajar',`kursi`='$kursi',`harga`='$harga',`luaskamar`='$luas',`fotokamar`='$foto' WHERE kdkamar='$kdkamar'";
move_uploaded_file($file_tmp, 'img/'.$foto);
/* 
 if ($ee){
  echo " berhasil ";
} else {
  echo " gagal ";
}*/
header("location:profilpemilik.php");
}
elseif ($foto==null && $foto1!=null) {
  
$ee = mysqli_query($koneksi,"UPDATE `tbkamar` SET `lemari`='$lemari',`kasur`='$kasur',`mejabelajar`='$mejabelajar',`kursi`='$kursi',`harga`='$harga',`luaskamar`='$luas',`fotokamar1`='$foto1' WHERE kdkamar='$kdkamar'");
move_uploaded_file($file_tmp1, 'img/'.$foto1);
echo "UPDATE `tbkamar` SET `lemari`='$lemari',`kasur`='$kasur',`mejabelajar`='$mejabelajar',`kursi`='$kursi',`harga`='$harga',`luaskamar`='$luas',`fotokamar1`='$foto1' WHERE kdkamar='$kdkamar'";
header("location:profilpemilik.php");
}
elseif ($foto!=null && $foto1!=null) {
  
  $ee = mysqli_query($koneksi,"UPDATE `tbkamar` SET `lemari`='$lemari',`kasur`='$kasur',`mejabelajar`='$mejabelajar',`kursi`='$kursi',`harga`='$harga',`luaskamar`='$luas',`fotokamar`='$foto',`fotokamar1`='$foto1' WHERE kdkamar='$kdkamar'");
  move_uploaded_file($file_tmp1, 'img/'.$foto1);
  move_uploaded_file($file_tmp, 'img/'.$foto);
  echo "UPDATE `tbkamar` SET `lemari`='$lemari',`kasur`='$kasur',`mejabelajar`='$mejabelajar',`kursi`='$kursi',`harga`='$harga',`luaskamar`='$luas',`fotokamar`='$foto',`fotokamar1`='$foto1' WHERE kdkamar='$kdkamar'";
  header("location:profilpemilik.php");
  }
else {
  
$ee = mysqli_query($koneksi,"UPDATE `tbkamar` SET `lemari`='$lemari',`kasur`='$kasur',`mejabelajar`='$mejabelajar',`kursi`='$kursi',`harga`='$kursi',`luaskamar`='$luas' WHERE kdkamar='$kdkamar'");

echo "UPDATE `tbkamar` SET `lemari`='$lemari',`kasur`='$kasur',`mejabelajar`='$mejabelajar',`kursi`='$kursi',`harga`='$harga',`luaskamar`='$luas' WHERE kdkamar='$kdkamar'";
header("location:profilpemilik.php");
 }
?>