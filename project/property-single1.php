<?php
session_start();
include 'koneksi.php';

$ceksewa = mysqli_query($koneksi, "SELECT a.*, c.* from  tbkamar a
left join tbkos c on a.kdkos=c.kdkos where a.status='1'");


$kdkamar = $_GET['id'];
$kamar = mysqli_query($koneksi, "SELECT a.*, c.* from  tbkamar a left join tbkos c on a.kdkos=c.kdkos where a.kdkamar='$kdkamar'");
$ka = mysqli_fetch_array($kamar);
?>

<!doctype html>
<html lang="en">

  <head>
    <title>Realtors &mdash; Website Template by Colorlib</title>
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
      
.slide {
  height: 100vh;
  min-height: 630px;
  background-size: cover; }
  </style>

  </head>

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
                  <li><a href="index1.php" class="nav-link">Beranda</a></li>
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
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/<?php echo $ka['fotokos'];?>" alt="First slide">
      <div class="carousel-caption" >
          <div class="row align-items-center justify-content-center text-center" style="margin-top:-350px;" >
            <div class="col-md-7">
              <span class="h4 text-primary mb-4 d-block"><?= "Rp " . number_format($ka['harga'], 0, ',', '.'); ?></span>
              <h1 class="mb-2"><?php echo $ka ['namakos']; ?></h1>
              <br>
              <a href="daftarpenyewa.php" class="btn btn-primary text-white px-4 py-3">Sewa </a>&nbsp;
                <a href="daftarpenyewa.php" class="btn btn-primary text-white px-4 py-3">Chat Pemilik</a>&nbsp;
                
              
            </div>
          </div>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/<?php echo $ka['fotokos1'];?>" alt="Second slide">
      <div class="carousel-caption" >
          <div class="row align-items-center justify-content-center text-center" style="margin-top:-350px;" >
            <div class="col-md-7">
              <span class="h4 text-primary mb-4 d-block"><?= "Rp " . number_format($ka['harga'], 0, ',', '.'); ?></span>
              <h1 class="mb-2"><?php echo $ka ['namakos']; ?></h1>
              <br>
              <a href="daftarpenyewa.php" class="btn btn-primary text-white px-4 py-3">Sewa </a>&nbsp;
                <a href="daftarpenyewa.php" class="btn btn-primary text-white px-4 py-3">Chat Pemilik</a>&nbsp;
                
              
            </div>
          </div>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/<?php echo $ka['fotokamar'];?>" alt="Third slide">
      <div class="carousel-caption" >
          <div class="row align-items-center justify-content-center text-center" style="margin-top:-350px;" >
            <div class="col-md-7">
              <span class="h4 text-primary mb-4 d-block"><?= "Rp " . number_format($ka['harga'], 0, ',', '.'); ?></span>
              <h1 class="mb-2"><?php echo $ka ['namakos']; ?></h1>
              <br>
              <a href="daftarpenyewa.php" class="btn btn-primary text-white px-4 py-3">Sewa </a>&nbsp;
                <a href="daftarpenyewa.php" class="btn btn-primary text-white px-4 py-3">Chat Pemilik</a>&nbsp;
                
              
            </div>
          </div>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/<?php echo $ka['fotokamar1'];?>" alt="fourth slide" width=4608px height=650px>
      <div class="carousel-caption" >
          <div class="row align-items-center justify-content-center text-center" style="margin-top:-350px;" >
            <div class="col-md-7">
              <span class="h4 text-primary mb-4 d-block"><?= "Rp " . number_format($ka['harga'], 0, ',', '.'); ?></span>
              <h1 class="mb-2"><?php echo $ka ['namakos']; ?></h1>
              <br>
              <a href="daftarpenyewa.php" class="btn btn-primary text-white px-4 py-3">Sewa </a>&nbsp;
                <a href="daftarpenyewa.php" class="btn btn-primary text-white px-4 py-3">Chat Pemilik</a>&nbsp;
                
              
            </div>
          </div>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
       

        <div class="container">
         <div class="card">
          <div class="container">
         <div class="card-body">
            
               <h5 class="card-title">Fasilitas Bersama</h5>
               <?php
            $kamarmandi= $ka['kamarmandi'];
            $cekstatus="";
            if ($kamarmandi==0) {
              $cekstatus="";
            }
            else {
              $cekstatus="checked";
            }
            ?>
               <div class="form-check">
                <?php echo "<input class='form-check-input' type='checkbox' name='mandiluar' value='1' id='defaultCheck1' ".$cekstatus." onclick='return false;'>";?>
                <label class="form-check-label" for="defaultCheck1">
                  Kamar mandi luar
                </label>
               </div>
               <?php
            $dapur= $ka['dapur'];
            $cekstatus="";
            if ($dapur==0) {
              $cekstatus="";
            }
            else {
              $cekstatus="checked";
            }
            ?>
               <div class="form-check">
               <?php echo "<input class='form-check-input' type='checkbox' name='dapur' value='1' id='defaultCheck1' ".$cekstatus." onclick='return false;'>";?>
               <label class="form-check-label" for="defaultCheck1">
                  Dapur
                </label>
               </div>
               <?php
            $jemuran= $ka['jemuran'];
            $cekstatus="";
            if ($jemuran==0) {
              $cekstatus="";
            }
            else {
              $cekstatus="checked";
            }
            ?>
               <div class="form-check">
               <?php echo "<input class='form-check-input' type='checkbox' name='jemuran' value='1' id='defaultCheck1' ".$cekstatus." onclick='return false;'>";?>
               <label class="form-check-label" for="defaultCheck1">
                  Ruang Jemur
                </label>
               </div>
               <?php
            $tv= $ka['televisi'];
            $cekstatus="";
            if ($tv==0) {
              $cekstatus="";
            }
            else {
              $cekstatus="checked";
            }
            ?>
               <div class="form-check">
               <?php echo "<input class='form-check-input' type='checkbox' name='tv' value='1' id='defaultCheck1' ".$cekstatus." onclick='return false;'>";?>
               <label class="form-check-label" for="defaultCheck1">
                  Tv
                </label>
               </div>
               <?php
            $parkiran= $ka['Parkiran'];
            $cekstatus="";
            if ($parkiran==0) {
              $cekstatus="";
            }
            else {
              $cekstatus="checked";
            }
            ?>
               <div class="form-check">
               <?php echo "<input class='form-check-input' type='checkbox' name='parkiran' value='1' id='defaultCheck1' ".$cekstatus." onclick='return false;'>";?>
               <label class="form-check-label" for="defaultCheck1">
                  Parkiran  
                </label>
               </div>
               <?php
            $wifi= $ka['wifi'];
            $cekstatus="";
            if ($wifi==0) {
              $cekstatus="";
            }
            else {
              $cekstatus="checked";
            }
            ?>
               <div class="form-check">
               <?php echo "<input class='form-check-input' type='checkbox' name='wifi' value='1' id='defaultCheck1' ".$cekstatus." onclick='return false;'>";?>
               <label class="form-check-label" for="defaultCheck1">
                  wifi  
                </label>
               </div>
               </div>           
      </div>
          </div>
          </div>
          <br>
          <br>
  <div class="container">        
  <div class="card">
  <div class="container">
    <div class="card-body">
      <h5 class="card-title">Area Lingkungan</h5><?php
            $warungmakan= $ka['warungmakan'];
            $cekstatus="";
            if ($warungmakan==0) {
              $cekstatus="";
            }
            else {
              $cekstatus="checked";
            }
            ?>
      <div class="form-check">
                <?php echo "<input class='form-check-input' type='checkbox' name='warungmakan' value='1' id='defaultCheck1' ".$cekstatus." onclick='return false;'>";?>
               <label class="form-check-label" for="defaultCheck1">
                  Warung makan
                </label>
               </div>
               <?php
            $kampus= $ka['kampus'];
            $cekstatus="";
            if ($kampus==0) {
              $cekstatus="";
            }
            else {
              $cekstatus="checked";
            }
            ?>
               <div class="form-check">
               <?php echo "<input class='form-check-input' type='checkbox' name='kampus' value='1' id='defaultCheck1' ".$cekstatus." onclick='return false;'>";?>
               <label class="form-check-label" for="defaultCheck1">
                  Kampus/ sekolah
                </label>
               </div>
               <?php
            $minimarket= $ka['minimarket'];
            $cekstatus="";
            if ($minimarket==0) {
              $cekstatus="";
            }
            else {
              $cekstatus="checked";
            }
            ?>
               <div class="form-check">
               <?php echo "<input class='form-check-input' type='checkbox' name='ninimarket' value='1' id='defaultCheck1' ".$cekstatus." onclick='return false;'>";?>
               <label class="form-check-label" for="defaultCheck1">
                  Mini market
                </label>
               </div>
               <?php
            $atm= $ka['atm'];
            $cekstatus="";
            if ($atm==0) {
              $cekstatus="";
            }
            else {
              $cekstatus="checked";
            }
            ?>
               <div class="form-check">
               <?php echo "<input class='form-check-input' type='checkbox' name='atm' value='1' id='defaultCheck1' ".$cekstatus." onclick='return false;'>";?>
               <label class="form-check-label" for="defaultCheck1">
                  ATM/ bank
                </label>
               </div>
               <?php
            $masjid= $ka['masjid'];
            $cekstatus="";
            if ($masjid==0) {
              $cekstatus="";
            }
            else {
              $cekstatus="checked";
            }
            ?>
               <div class="form-check">
               <?php echo "<input class='form-check-input' type='checkbox' name='masjid' value='1' id='defaultCheck1' ".$cekstatus." onclick='return false;'>";?>
               <label class="form-check-label" for="defaultCheck1">
                  Masjid  
                </label>
               </div>     
         </div>
  </div>
          </div>
  
</div>
</div>
<br>
<br>
  <div class="container">        
  <div class="card">
  <div class="container">
    <div class="card-body">
            <h5 class="card-title">Fasilitas Kamar</h5>
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
               <?php echo "<input class='form-check-input' type='checkbox' name='kasur' value='1' id='defaultCheck1' ".$cekstatus." onclick='return false;'>";?>
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
               <?php echo "<input class='form-check-input' type='checkbox' name='kursi' value='1' id='defaultCheck1' ".$cekstatus." onclick='return false;'>";?>
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
               <?php echo "<input class='form-check-input' type='checkbox' name='lemari' value='1' id='defaultCheck1' ".$cekstatus." onclick='return false;'>";?>
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
               <?php echo "<input class='form-check-input' type='checkbox' name='meja' value='1' id='defaultCheck1' ".$cekstatus." onclick='return false;'>";?>
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
               <?php echo "<input class='form-check-input' type='checkbox' name='cermin' value='1' id='defaultCheck1' ".$cekstatus." onclick='return false;'>";?>
               <label class="form-check-label" for="defaultCheck1">
                  cermin
                </label>
                  </div>
               </div>
               <div class="col-md-12 form-group">
                 <input type="text" placeholder="luas kamar" name="luas" id="luas kamar" value="<?php echo $ka['luaskamar'];?>m" readonly>
                 
                </div>
               </div>
              </div>
            </div>
           </div>
          </div>
          <br>
          <br>
    
    <div class="site-section bg-black">
      <div class="container">


        <div class="row justify-content-center">
          <div class="col-md-6 text-center">
            <h3 class="heading-29201 text-center text-white">Pilih lainnya</h3>
            
            
          </div>
        
        </div>
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
              
                <h3 class="mb-3"><a href="#"><?= $p['namakos']; ?></a></h3>
                <h3 class="mb-3"><a href="#"><?= "Rp " . number_format($p['harga'], 0, ',', '.'); ?></a></h3>
                <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span><?php echo $p['alamat']; ?></span></span>
                <br>
                
              </div>
            </div>
          </div>
          <?php
                $no++;
              } ?>
     

          
          
        </div>
      </div>
    </div>
    </div>
      </div>
    </div>


       
    <div class="site-section bg-primary">
      <div class="container block-13">
          <div class="testimonial-38920 d-flex align-items-start">
            <div>
              <h3 class="mb-4">Carikos</h3>
              <p>Carikos adalah sistem informasi pencarian kost di kabupaten jember berbasis web. fitur-fitur di dalam carikos yaitu fitur tambah kost, fitur filter kost, fitur pemesanan dan fitur chat.</p>
              <div class="mt-4">
              </div>
            
          </div>

         

          
        </div>
      </div>
    </div>

    

    <footer class="site-footer">
      <div class="container">
        
        
          <div class="col-md-4">
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

