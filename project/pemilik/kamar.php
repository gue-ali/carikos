<?php
include '../koneksi.php';
session_start();
?>
<!doctype html>
<html lang="en">

  <head>
    <title>Login Penyewa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../fonts/icomoon/style.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../css/aos.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.css">

    <style>
        body{
            background-image: url("../images/penyewa.png");
            background-size: cover;
        }
    </style>

  </head>

  <body>
        <nav class="navbar navbar-light bg-transparant">
                <a class="navbar-brand" href="profilpenyewa.php">
                 <p style="color: #91b029 ;">< Kembali</p> 
                </a>
              </nav>
             <?php
              $result1 = mysqli_query($koneksi, "SELECT * FROM `tbkos` WHERE 1");
          ;
          ?>
<div class="container">
    <center>
    <form action="cekkamar.php" method="POST" enctype="multipart/form-data">
    <div class="card-group col-sm-6">
         <div class="card">
             <div class="container">
            <div style="text-align:left;" class="card-body">
            <h5 class="card-title">Fasilitas Kamar</h5>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="kasur" value="1" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Kasur
                </label>
               </div>
               <div class="form-check">
                <input class="form-check-input" type="checkbox" name="kursi" value="1" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Kursi belajar
                </label>
               </div>
               <div class="form-check">
                <input class="form-check-input" type="checkbox" name="lemari" value="1" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Lemari
                </label>
               </div>
               <div class="form-check">
                <input class="form-check-input" type="checkbox" name="meja" value="1" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Meja Belajar
                </label>
               </div>
                    <div class="form-check">
                <input class="form-check-input" type="checkbox" name="kamarmandi" value="1" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Kamar mandi dalam
                </label>
                  </div>
                  <div class="form-check">
                <input class="form-check-input" type="checkbox" name="cermin" value="1" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  cermin
                </label>
                  </div>
                  <div class="row">
               <div class="col-md-12 form-group">
                  <label>nama kos</label>
                 <select name="kdkos"  class="form-control w-100">
                 <?php while ($row = mysqli_fetch_array($result1)) {
                 
                     echo "<option value=".$row["kdkos"].">".$row["namakos"]."</option>";
                    }
                     ?>
                 </select>
               </div>
               <div class="col-md-12 form-group">
                 <input type="text" placeholder="harga" name="harga" id="harga">
                 <input type="text" placeholder="luas kamar" name="luas" id="luas kamar">
                 
                </div>
               <br>
               <h5 class="col-md-12 form-group">Masukkan foto dalam/ luar kos</h5>
               <div class="col-md-12 form-group">
               <input type="file" name="foto">
                 </div>
                 <div class= "col-md-12 form-group">
                 <input type="file" name="fotofotos">
               </div>
              
               <input class="btn btn-primary" type="submit" name="Daftar" value="Simpan">
         </div>
    </center>
  </div>
</div>
</div>
      


        <script src="../js/jquery.js"></script>
        <script src="../js/jquery-3.3.1.min.js"></script>
        <script src="../js/jquery-migrate-3.0.0.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/owl.carousel.min.js"></script>
        <script src="../js/jquery.sticky.js"></script>
        <script src="../js/jquery.waypoints.min.js"></script>
        <script src="../js/jquery.animateNumber.min.js"></script>
        <script src="../js/jquery.fancybox.min.js"></script>
        <script src="../js/jquery.stellar.min.js"></script>
        <script src="../js/jquery.easing.1.3.js"></script>
        <script src="../js/bootstrap-datepicker.min.js"></script>
        <script src="../js/aos.js"></script>
    
        <script src="../js/main.js"></script>
  </body>
</html>