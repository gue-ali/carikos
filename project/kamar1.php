<?php
include 'koneksi.php';
session_start();
?>
<!doctype html>
<html lang="en">

  <head>
    <title>Login Penyewa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">

    <style>
        body{
            background-image: url("images/penyewa.png");
            background-size: cover;
        }
    </style>

  </head>

  <body>
        <nav class="navbar navbar-light bg-transparant">
                <a class="navbar-brand" href="profilpemilik.php">
                 <p style="color: #91b029 ;" >< Kembali</p> 
                </a>
              </nav>
              <form action="" method="POST" enctype="multipart/form-data">
             <?php
             $hasil = mysqli_query($koneksi, "SELECT * FROM tbpemilik WHERE username='".$_SESSION['username']."'");
             $isi = mysqli_fetch_array($hasil);

             $pemilik = $isi['kdpemilik'];
             
             $result1 = mysqli_query($koneksi, "SELECT * FROM `tbkos` WHERE kdpemilik='$pemilik'");
          
         
         ?>
<div class="container">
    <center>
    
    <div class="card-group col-sm-6">
         <div class="card">
             <div class="container">
            <div style="text-align:left;" class="card-body">
            
    <div class="row">
               <div class="col-md-12 form-group">
                  <label><strong>Nama kos</strong></label>
                 
                 <select name="kdkos"  class="form-control w-100">
                 <option value="#">Pilih Kos</option>
                 <?php while ($row = mysqli_fetch_array($result1)) {
                 
                     echo "<option value=".$row["kdkos"].">".$row["namakos"]."</option>";
                    }
                     ?>
                 </select>
                 <br>
                 <input class="btn btn-primary" type="submit" name="pilih" value="Pilih">
               </div>
              

<?php

if (isset($_POST['pilih'])) {
  
$kdkos = @$_POST['kdkos'];

$result2 = mysqli_query($koneksi, "SELECT * FROM `tbkamar` WHERE kdkos='$kdkos'");
$row1 = mysqli_fetch_array($result2);

?>
         </div>
    </center>
  </div>
</div>
</div>
<?php


if (isset($_POST['pilih'])) {
  
$kdkos = @$_POST['kdkos'];

$ceksewa = mysqli_query($koneksi, "SELECT a.* from  tbkamar a where a.kdkos='$kdkos'");

?>
<div class="site-section bg-gray-6">
<div class="container">

<br>
  
  <div class="row">
<?php
$no = 1;
while ($p = mysqli_fetch_assoc($ceksewa)) {
?>
    
    <div class="col-md-4 mb-5">
      <div class="media-38289">
        <a href="kamar2.php?id=<?= $p['kdkamar']; ?>" class="d-block"><?php echo "<img src='img/" . $p['fotokamar'] . "' alt='Image' class='img-fluid'>"?></a>
        <div class="text">
          <h3 class="mb-3"><a href="#"><?= "Rp " . number_format($p['harga'], 0, ',', '.'); ?></a></h3>
          <p><?php echo $p['kdkamar']; ?></p>
          <br>
          <a href="kamar2.php?id=<?= $p['kdkamar']; ?>">Edit</a>&nbsp;
          
        </div>
      </div>
    </div>
    <?php
          $no++;
}
        } 
      }?>


    
    
  </div>
</div>
</div> 



        <script src="js/jquery.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery-migrate-3.0.0.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.animateNumber.min.js"></script>
        <script src="js/jquery.fancybox.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/bootstrap-datepicker.min.js"></script>
        <script src="js/aos.js"></script>
    
        <script src="js/main.js"></script>
  </body>
</html>