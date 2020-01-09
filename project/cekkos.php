<?php
include 'koneksi.php';
session_start();
$result1 = mysqli_query($koneksi, "SELECT * FROM tbpemilik WHERE username='$_SESSION[username]'");
          $row = mysqli_fetch_array($result1);
//echo json_encode($row);
//echo $_SESSION["username"];

$namakos = $_POST['namakos'];
$alamatkos = $_POST['alamatkos'];
$gender = $_POST['gender'];
$ruangtamu = @$_POST['ruangtamu'];
$mandiluar = @$_POST['mandiluar'];
$dapur = @$_POST['dapur'];
$jemuran = @$_POST['jemuran'];
$tv = @$_POST['tv'];
$parkiran = @$_POST['parkiran'];
$warungmakan = @$_POST['warungmakan'];
$kampus = $_POST['kampus'];
$minimarket = @$_POST['minimarket'];
$atm = @$_POST['atm'];
$mesjid = @$_POST['mesjid'];
$wifi = @$_POST['wifi'];
$kdpemilik = $row["kdpemilik"];
$fotokos = $_FILES['fotokos']['name'];
$file_tmp = $_FILES['fotokos']['tmp_name'];
$fotokos1 = $_FILES['fotokos1']['name'];
$file_tmp1 = $_FILES['fotokos1']['tmp_name'];

if ($fotokos==null || $fotokos1==null) {
  echo"<script>alert('Harus memasukkan foto');window.history.back();</script>";   
}

else {
  //echo "INSERT INTO `tbkos`(`kdkos`, `namakos`, `alamat`, `jemuran`, `jeniskos`, `kamarmandi`, `Parkiran`, `kampus`, `dapur`, `televisi`, `wifi`, `warungmakan`, `masjid`, `atm`, `minimarket`, `kdpemilik`, `fotokos`, `fotokos1`) VALUES ('$kdadmin','$namakos','$alamatkos','$jemuran','$gender','$mandiluar','$parkiran','$kampus','$dapur','$tv','$wifi','$warungmakan','$mesjid','$atm','$minimarket','$kdpemilik','$fotokos','$fotokos1')";
  $ee = mysqli_query($koneksi,"INSERT INTO `tbkos`(`kdkos`, `namakos`, `alamat`, `jemuran`, `jeniskos`, `kamarmandi`, `Parkiran`, `kampus`, `dapur`, `televisi`, `wifi`, `warungmakan`, `masjid`, `atm`, `minimarket`, `kdpemilik`, `fotokos`, `fotokos1`) VALUES ('$kdadmin','$namakos','$alamatkos','$jemuran','$gender','$mandiluar','$parkiran','$kampus','$dapur','$tv','$wifi','$warungmakan','$mesjid','$atm','$minimarket','$kdpemilik','$fotokos','$fotokos1')");
  move_uploaded_file($file_tmp, 'img/'.$fotokos);
  move_uploaded_file($file_tmp1, 'img/'.$fotokos1);
  
  //if ($ee){
    //  echo " berhasil ";
  //} else {
    //  echo " gagal ";
  //}
  header("location:profilpemilik.php");  
}

?>