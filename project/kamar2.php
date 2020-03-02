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
             <?php
             $kdkamar = $_GET['id'];
             $ceksewa = mysqli_query($koneksi, "SELECT a.* from  tbkamar a where a.kdkamar='$kdkamar'");
             $ka = mysqli_fetch_array($ceksewa);
             ?>
<div class="container">
    <center>
    <form action="cekkamarup.php" method="POST" enctype="multipart/form-data">
    <div class="card-group col-sm-6">
         <div class="card">
             <div class="container">
            <div style="text-align:left;" class="card-body">
            <h5 class="card-title">Fasilitas Kamar</h5>
            <p class="card-title">Kode Kamar :</p>
            <input type="text" placeholder="luas kamar" name="kdkamar" id="luas kamar" value="<?php echo $ka['kdkamar'];?>" readonly >
              <div class="form-check">
              <?php
            $kasur= $ka['kasur'];
            $cekstatus="";
            if ($kasur==0) {
              $cekstatus="";
            }
            else {
              $cekstatus="checked";
            }
            ?>
               <div class="form-check">
               <?php echo "<input class='form-check-input' type='checkbox' name='kasur' value='1' id='defaultCheck1' ".$cekstatus." >";?>
               <label class="form-check-label" for="defaultCheck1">
                  Kasur
                </label>
               </div>
               <?php
            $kursi= $ka['kursi'];
            $cekstatus="";
            if ($kursi==0) {
              $cekstatus="";
            }
            else {
              $cekstatus="checked";
            }
            ?>
               <div class="form-check">
               <?php echo "<input class='form-check-input' type='checkbox' name='kursi' value='1' id='defaultCheck1' ".$cekstatus." >";?>
               <label class="form-check-label" for="defaultCheck1">
                  Kursi belajar
                </label>
               </div>
               <?php
            $lemari= $ka['lemari'];
            $cekstatus="";
            if ($lemari==0) {
              $cekstatus="";
            }
            else {
              $cekstatus="checked";
            }
            ?>
               <div class="form-check">
               <?php echo "<input class='form-check-input' type='checkbox' name='lemari' value='1' id='defaultCheck1' ".$cekstatus." >";?>
               <label class="form-check-label" for="defaultCheck1">
                  Lemari
                </label>
               </div>
               <?php
            $meja= $ka['mejabelajar'];
            $cekstatus="";
            if ($meja==0) {
              $cekstatus="";
            }
            else {
              $cekstatus="checked";
            }
            ?>
               <div class="form-check">
               <?php echo "<input class='form-check-input' type='checkbox' name='meja' value='1' id='defaultCheck1' ".$cekstatus." >";?>
               <label class="form-check-label" for="defaultCheck1">
                  Meja Belajar
                </label>
               </div>
               <?php
            $cermin= $ka['cermin'];
            $cekstatus="";
            if ($cermin==0) {
              $cekstatus="";
            }
            else {
              $cekstatus="checked";
            }
            ?>
               <div class="form-check">
               <?php echo "<input class='form-check-input' type='checkbox' name='cermin' value='1' id='defaultCheck1' ".$cekstatus." >";?>
               <label class="form-check-label" for="defaultCheck1">
                  cermin
                </label>
                  </div>
               </div>
               <div class="col-md-12 form-group">
               <p class="card-title">Luas Kamar :</p>
                 <input type="text" placeholder="luas kamar satuan meter" name="luas" id="luas kamar" value="<?php echo $ka['luaskamar'];?>" >
                 <p class="card-title">Harga :</p>
                 <input type="text" placeholder="harga" name="harga" id="luas kamar" value="<?php echo $ka['harga'];?>" onkeypress="return hanyaAngka(event)" required>
                 <script>
                function hanyaAngka(evt) {
                    var charCode = (evt.which) ? evt.which : event.keycode
                    if (charCode > 31 && (charCode < 48 || charCode > 57))

                    return false;
                    return true;
                }
                </script>
                 
                </div>
               <br>
               <h5 class="col-md-12 form-group">Masukkan foto dalam/ luar kos</h5>
               <p class="col-md-12 form-group">Jika foto tidak ingin diubah maka kosongin saja</p>
               <div class="col-md-12 form-group">
               <input type="file" name="foto">
                 </div>
                 <div class= "col-md-12 form-group">
                 <input type="file" name="foto1">
               </div>
               <input class="btn btn-primary" type="submit" name="Daftar" value="Edit">
               <br>
               <a href="cekkamardel.php?id=<?php echo $kdkamar?>" class="btn btn-primary" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>&nbsp;
         </div>
    </center>
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