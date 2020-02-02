<?php
include 'koneksi.php';
session_start();


$ceksewa = mysqli_query($koneksi, "SELECT a.*, c.kdkos, c.namakos, c.fotokos, c.kdpemilik, c.alamat from  tbkamar a
left join tbkos c on a.kdkos=c.kdkos where a.status='1'");
?>
<!doctype html>
<html lang="en">

  <head>
    <title>CARIKOS</title>
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
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>
  <style>
        body{
            background-color: white;
            background-size: cover;
        }
    </style>



  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="index1.php">CARIKOS</a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="active"><a href="index1.php" class="nav-link">Beranda</a></li>
                  <li><a href="about1.php" class="nav-link">Tentang</a></li>
                  <li><a href="contact1.php" class="nav-link">Kontak</a></li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Login
                        </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="daftarpenyewa.php">Penyewa</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="daftarpemilik.php">Pemilik</a>
                </div>
                  </li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="1" style="background-image: url('images/ai.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h1 class="mb-2">Bingung mau cari kos di Jember?</h1>
              <p>Dapatkan info kos murah serta info kos lainnya di Carikos</p>
              <p><a href="property1.php" class="btn btn-primary text-white px-4 py-3">Yuk cari kosmu sekarang!</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-white-6s">
      <div class="container">
      <h3 class="text-left" style="margin-top:-50px;"><strong>Rekomendasi untuk anda</strong></h3>
    <br>
        
        <div class="row">
<?php
$no = 1;
while ($p = mysqli_fetch_assoc($ceksewa)) {
  ?>
          
          <div class="col-md-4 mb-5">
            <div class="media-38289">
              <a href="property-single1.php?id=<?= $p['kdkamar']; ?>" class="d-block"><?php echo "<img src='img/" . $p['fotokos'] . "' alt='Image' class='img-fluid'>"?></a>
              
              <div class="text">
                <h4><a href="#"><?= $p['namakos']; ?></a></h4>
              <div class="text" >
                <h5><a href="#"><?= "Rp " . number_format($p['harga'], 0, ',', '.'); ?> / bulan</a></h5>
                <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span><?php echo $p['alamat']; ?></span></span>
          
              </div>
              
              </div>
            </div>
          </div>
          <?php
                $no++;
              } ?>
     

          
          
        </div>
      </div>
    </div>


    
    
    


    <footer class="site-footer">
      <div class="container">
        
        
          <div class="col-md-4">
            <br>
            
            <h3 class="text-white h5 mb-3">CARIKOS</h3>
            <p>Dapatkan "info kost murah" hanya di Carikos </p>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

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

