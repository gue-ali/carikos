<?php
session_start();
include 'koneksi.php';

$result1 = mysqli_query($koneksi, "SELECT * FROM tbpenyewa WHERE username='" . $_SESSION['username'] . "'");
$row = mysqli_fetch_array($result1);
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

    <style>
        body{
            background-image: url("images/penyewa.png");
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
              
        <section>
            
                <form action="cekpenyewaup.php" method="POST" enctype="multipart/form-data">
                    <div class="login-form">
                        <h4>CARIKOS</h4>
                         <div class="textbox">
                             <input type="text" placeholder="nama lengkap" name="namalengkap" id="nama lengkap" value="<?php echo $row ['nama'];?>" required>
                         </div>
                         <div class="textbox">
                             <input type="text" placeholder="no ktp" name="noktp" id="nama lengkap" value="<?php echo $row ['noktp'];?>" required>
                         </div>
                         <div class="textbox">
                             <input type="text" placeholder="username" name="username" id="username" value="<?php echo $row ['username'];?>" required>
                         </div>
                         <div class="textbox">
                             <input type="text" placeholder="no. hp" name="nohp" id="no. hp" value="<?php echo $row ['nohp'];?>" required>
                         </div>
                         <div class="textbox">
                             <input type="text" placeholder="alamat" name="alamat" id="alamat" value="<?php echo $row ['alamat'];?>" required>
                         </div>
                         <div class="textbox">
                             <input type="text" placeholder="email" name="email" id="email" value="<?php echo $row ['email'];?>" required>
                         </div>
                         <div class="password">
                             <input type="password" placeholder="Password" name="password" id="password" required>
                         </div>
                         <div class="password">
                             <input type="password" placeholder="Commfrim password" name="commfrimpassword" id="password" required>
                             
                         <h5 class="textbox">masukkan foto profil</h5>
                    <div class="textbox">
                    <input type="file" name="fotoprofil" required>
                    </div>
                         
                         </div>
                         <div class="login-btn">
                             <input class="btn2" type="submit" name="Daftar" value="Edit" onclick="return confirm('Apakah anda yakin ingin mengedit data ini?')">
                         
                    
               </form>
                </section>
      


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

