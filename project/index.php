<?php
include 'koneksi.php';
session_start();

$dasewa = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from tbpenyewa  where nopenyewa='$_SESSION[kode]'"));
$ceksewa = mysqli_query($koneksi, "SELECT a.*, c.kdkos, c.namakos, c.fotokos, c.kdpemilik, c.alamat from  tbkamar a
left join tbkos c on a.kdkos=c.kdkos where a.status='1'");

$ak = mysqli_query($koneksi, "SELECT a.*, c.namakos, c.kdpemilik from chat a left join tbkos c on a.kdkos=c.kdkos where a.id_penyewa='$_SESSION[kode]'");
$p = mysqli_fetch_assoc($ak);

$result = mysqli_query($koneksi, "SELECT * FROM tbpemilik WHERE username='".$_SESSION['username']."'");
$row = mysqli_fetch_array($result);


$result1 = mysqli_query($koneksi, "SELECT * FROM tbpenyewa WHERE username='".$_SESSION['username']."'");
$row1 = mysqli_fetch_array($result1);


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
                <a href="index.php">CARIKOS</a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <a href="index.php" class="nav-link" style="color: white;">Beranda</a>
                  <a href="#tentangs" class="nav-link item-scroll nav-item" style="color: white;">Tentang</a>
                  <a href="#kontak" class="nav-link" style="color: white;">Kontak</a>
                  <a href="penyewa/datapesan.php?id=<?= $p['id_chat']; ?>" class="nav-link" style="color: white;"><?= $p['noread_penyewa']; ?> Pesan</a>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Akun
                        </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                if ($row!="" ){
                echo '<a class="dropdown-item" href="profilpemilik.php"> '.$row['nama'].'</a>';
                echo '<div class="dropdown-divider"></div>';
               ?>
                <a href="index1.php?log+out+berhasil" class="dropdown-item" onclick="return confirm('Apakah anda yakin ingin log out?')">logout</a>&nbsp;
               
               <?php 
                } 

                elseif ($row1!="") {
                  echo '<a class="dropdown-item" href="profilpenyewa.php"> '.$row1['nama'].'</a>';
                  echo '<div class="dropdown-divider"></div>';
                  ?>
                  <a href="index1.php?log+out+berhasil" class="dropdown-item" onclick="return confirm('Apakah anda yakin ingin log out?')">logout</a>&nbsp;
                  <?php
                }                
                else  { 
                echo '<a class="dropdown-item" href="penyewa.php">Penyewa</a>';
                echo '<div class="dropdown-divider"></div>';
                echo '<a class="dropdown-item" href="daftarpemilik.php">Pemilik</a>';
                
              }
                ?>
                    
                        
                      </div>
                  </li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="1" style="background-image: url('images/Ai.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h1 class="mb-2">Bingung mau cari kos di Jember?</h1>
              <p>Dapatkan info kos murah serta info kos lainnya di Carikos</p>
              <p><a href="property.php" class="btn btn-primary text-white px-4 py-3">Yuk cari kosmu sekarang!</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

           
<section id="tentangs">
    <div class="kolom">
      <div class="container">
    <p><strong>Carikos - Aplikasi Pencari Info Kost di Area kampus </strong></p>
    <p >Carikos adalah sistem informasi pencarian kost di kabupaten jember berbasis web. fitur-fitur di dalam carikos yaitu fitur tambah kost, fitur filter kost, fitur pemesanan dan fitur chat. </p>
    <br>
    <br>
    <br>
    <br>
    <p><strong>Fitur Carikos </strong></p>
    <li>fitur tambah kos : fitur ini diperuntukkan untuk user pemilik kot agar dapaf menambahkan dan mempromosikan kost mereka</li>
    <li>fitur filter kost : fitur ini di peruntukkan untuk user pencari kost agar dapat mencari kost sesuai kebutuhan mereka</li>
    <li>fitur chat : fitur ini di buat agar pemilik kost dapat memberikan info kost dan pencari kost dapat mendapatkan info kost lebih lanjut</li>
     <li>fitur pemesanan : fitur ini di peruntukan untuk user pencari kost mengisu datadiri untuk melakukan pemesanan</li>
            </div>
            </div>
            </section>

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
              <a href="property-single.php?id=<?= $p['kdkamar']; ?>" class="d-block"><?php echo "<img src='img/" . $p['fotokos'] . "' alt='Image' class='img-fluid'>"?></a>
              <div class="text">
                <h5><strong><a href="#"><?= $p['namakos']; ?></a></strong></h5>
                <h5><a href="#"><?= "Rp " . number_format($p['harga'], 0, ',', '.'); ?></a></h5>
                <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span><?php echo $p['alamat']; ?></span></span>
                <br>
                <div class="row-left">
                <a href="penyewa/formsewa.php?id=<?= $p['kdkamar']; ?>" class="btn btn-success text-white px-4 py-3">Sewa</a>&nbsp;
                <a href="penyewa/pesan.php?kodekos=<?= $p['kdkos']; ?>" class="btn btn-info text-white px-4 py-3">Chat Pemilik</a>&nbsp;
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

    
    

   
    



   
            <footer class="site-footer" id="kontak">
      <div class="container">
        <div class="row">
        <div class="col-lg-4 ml-auto">
            <div class="bg-white p-3 p-md-5">
              <h3 class="text-black mb-4">CARIKOS</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block mb-3">
                  <span>Dapatkan "info kost murah" hanya di CariKos.</span></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 ml-auto">
            <ul class="list-unstyled menu-arrow">
            </ul>
          </div>
          <div class="col-lg-4 ml-auto">
            <div class="bg-white p-3 p-md-5">
              <h3 class="text-black mb-4">Info kontak</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block mb-3"><span class="d-block text-black">Telphone:</span><span>081515404068</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>carikos@gmail.com</span></li>
              </ul>
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

