<?php
include 'koneksi.php';
session_start();
$result1 = mysqli_query($koneksi, "SELECT * FROM tbpemilik WHERE username='$_SESSION[username]'");
          $row = mysqli_fetch_array($result1);
//echo json_encode($row);
//echo $_SESSION["username"];
$kdkos=@$_POST['kdkos'];
$namakos = $_POST['namakos'];
$alamatkos = $_POST['alamatkos'];
$gender = $_POST['gender'];
$mandiluar = @$_POST['kamarmandi'];
$dapur = @$_POST['dapur'];
$jemuran = @$_POST['jemuran'];
$tv = @$_POST['tv'];
$parkiran = @$_POST['parkiran'];
$warungmakan = @$_POST['warungmakan'];
$kampus = @$_POST['kampus'];
$minimarket = @$_POST['minimarket'];
$atm = @$_POST['atm'];
$mesjid = @$_POST['mesjid'];
$wifi = @$_POST['wifi'];
$kdpemilik = $row["kdpemilik"];
$fotokos = $_FILES['fotokos']['name'];
$file_tmp = $_FILES['fotokos']['tmp_name'];
$fotokos1 = $_FILES['fotokos1']['name'];
$file_tmp1 = $_FILES['fotokos1']['tmp_name'];
//echo "UPDATE `tbkos` SET  `namakos` = '$namakos', `alamat` = '$alamatkos', `jemuran` = '$jemuran', `jeniskos` = '$jemuran', `kamarmandi` = '$mandiluar', `Parkiran` = '$parkiran', `kampus` = '$kampus', `dapur` = '$dapur', `televisi` = '$tv', `wifi` = '$wifi', `warungmakan` = '$warungmakan', `masjid` = '$mesjid', `atm` = '$atm', `minimarket` = '$minimarket',  `fotokos` = '$fotokos', `fotokos1` = '$fotokos1' WHERE `tbkos`.`kdkos` = '$kdkos'";
if ($fotokos!=null && $fotokos1==null) {
    $ee = mysqli_query($koneksi,"UPDATE `tbkos` SET  `namakos` = '$namakos', `alamat` = '$alamatkos', `jemuran` = '$jemuran', `jeniskos` = '$jemuran', `kamarmandi` = '$mandiluar', `Parkiran` = '$parkiran', `kampus` = '$kampus', `dapur` = '$dapur', `televisi` = '$tv', `wifi` = '$wifi', `warungmakan` = '$warungmakan', `masjid` = '$mesjid', `atm` = '$atm', `minimarket` = '$minimarket',  `fotokos` = '$fotokos' WHERE `tbkos`.`kdkos` = '$kdkos'");
    move_uploaded_file($file_tmp, 'img/'.$fotokos);
    
    
    header("location:profilpemilik.php");
}
else if ($fotokos==null && $fotokos1!=null) {
    $ee = mysqli_query($koneksi,"UPDATE `tbkos` SET  `namakos` = '$namakos', `alamat` = '$alamatkos', `jemuran` = '$jemuran', `jeniskos` = '$jemuran', `kamarmandi` = '$mandiluar', `Parkiran` = '$parkiran', `kampus` = '$kampus', `dapur` = '$dapur', `televisi` = '$tv', `wifi` = '$wifi', `warungmakan` = '$warungmakan', `masjid` = '$mesjid', `atm` = '$atm', `minimarket` = '$minimarket',  `fotokos1` = '$fotokos1' WHERE `tbkos`.`kdkos` = '$kdkos'");
    move_uploaded_file($file_tmp, 'img/'.$fotokos1);
    
    
    header("location:profilpemilik.php");
}
else if ($fotokos==null && $fotokos1!=null) {
    $ee = mysqli_query($koneksi,"UPDATE `tbkos` SET  `namakos` = '$namakos', `alamat` = '$alamatkos', `jemuran` = '$jemuran', `jeniskos` = '$jemuran', `kamarmandi` = '$mandiluar', `Parkiran` = '$parkiran', `kampus` = '$kampus', `dapur` = '$dapur', `televisi` = '$tv', `wifi` = '$wifi', `warungmakan` = '$warungmakan', `masjid` = '$mesjid', `atm` = '$atm', `minimarket` = '$minimarket' WHERE `tbkos`.`kdkos` = '$kdkos'");
    
    header("location:profilpemilik.php");
}
else {
    $ee = mysqli_query($koneksi,"UPDATE `tbkos` SET  `namakos` = '$namakos', `alamat` = '$alamatkos', `jemuran` = '$jemuran', `jeniskos` = '$jemuran', `kamarmandi` = '$mandiluar', `Parkiran` = '$parkiran', `kampus` = '$kampus', `dapur` = '$dapur', `televisi` = '$tv', `wifi` = '$wifi', `warungmakan` = '$warungmakan', `masjid` = '$mesjid', `atm` = '$atm', `minimarket` = '$minimarket',  `fotokos` = '$fotokos', `fotokos1` = '$fotokos1' WHERE `tbkos`.`kdkos` = '$kdkos'");
    move_uploaded_file($file_tmp, 'img/'.$fotokos);
    move_uploaded_file($file_tmp1, 'img/'.$fotokos1);
    
    header("location:profilpemilik.php");    
}

?>