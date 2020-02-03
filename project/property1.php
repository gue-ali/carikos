<?php
session_start();
include 'koneksi.php';
$dasewa = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from tbpenyewa  where nopenyewa='$_SESSION[kode]'"));

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
      <div class="site-section-cover overlay" data-stellar-background-ratio="1" style="background-image: url('images/bg.jpeg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h1 class="mb-2">Pilih berdasarkan :</h1>
              <br>
              <section>
    <form action="" method="POST">
      <div class="birril">
        <div class="container">
          <div class="card-group">
          <div class="col-md-12 form-group">
                 <input  class="form-control w-100" type="text" placeholder="Jalan" name="jalan" id="Jalan">
               </div>
               <div class="col-md-12 form-group">
                 <select name="jeniskelamin"  class="form-control w-100">
                 <option value="#">Pilih jenis kelamin</option>
                   <option value="lk">Laki-laki</option>
                   <option value="pr">Perempuan</option>
                 </select>
               </div>
               
               <div class="col-md-12 form-group">
                 <select name="harga"  class="form-control w-100">
                 <option value="#">Pilih harga</option>
                   <option value="terendah">terendah-tertinggi</option>
                   <option value="tertinggi">tertinggi-terendah</option>
                 </select>
                 <br>
               <input class="btn btn-primary"  style="float:right" type="submit" name="pilih" value="cari">
               </div>
               

                </label>
              </div>
            </div>
      </form>

    </section>
            
              
            </div>
          </div>
        </div>
      </div>
    </div>
    

        <div style="padding-top: 50px">
      <div class="container">
      <div class="row">
        <?php
if (isset($_POST['pilih'])) {
  $gander = $_POST['jeniskelamin'];
  $jarak = $_POST['jalan'];
  $harga = $_POST['harga'];
  
  if ($gander=='lk') {
    
    $ceksewa = mysqli_query($koneksi, "SELECT a.*, c.* from  tbkamar a
    left join tbkos c on a.kdkos=c.kdkos where a.status='1' AND c.jeniskos='lk'");
      $no = 1;
    while ($p = mysqli_fetch_assoc($ceksewa)) {
      ?>
              <div class="col-md-4 mb-5">
                <div class="media-38289">
                  <a href="property-single.php?id=<?= $p['kdkamar']; ?>" class="d-block"><?php echo "<img src='img/" . $p['fotokos'] . "' alt='Image' class='img-fluid'>"?></a>
                  <div class="text">
                  
                <h5 class="mb-3"><strong><a href="#"><?= $p['namakos']; ?></a></strong></h5>
                    <h5 class="mb-3"><a href="#"><?= "Rp " . number_format($p['harga'], 0, ',', '.'); ?></a></h5>
                    <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span><?php echo $p['alamat']; ?></span></span>
                    <br>
                    <div class="row">
                <a href="daftarpenyewa.php" class="btn btn-success text-white px-4 py-3">Sewa</a>&nbsp;
                <a href="daftarpenyewa.php" class="btn btn-info text-white px-4 py-3">Chat Pemilik</a>&nbsp;
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
                </div>
              </div>
              
            </div>
          </div>
        </div>
    <?php
    }
    else if ($gander=='lk' && $jarak==$jarak) {
    
      $ceksewa = mysqli_query($koneksi, "SELECT a.*, c.* from  tbkamar a
      left join tbkos c on a.kdkos=c.kdkos where a.status='1' AND c.jeniskos='lk' c.alamat LIKE '%".$jarak."%'");
      $no = 1;
      while ($p = mysqli_fetch_assoc($ceksewa)) {
        ?>
                
                <div class="col-md-4 mb-5">
                  <div class="media-38289">
                    <a href="property-single.php?id=<?= $p['kdkamar']; ?>" class="d-block"><?php echo "<img src='img/" . $p['fotokos'] . "' alt='Image' class='img-fluid'>"?></a>
                    <div class="text">
                    
                <h5 class="mb-3"><strong><a href="#"><?= $p['namakos']; ?></a></strong></h5>
                      <h5 class="mb-3"><a href="#"><?= "Rp " . number_format($p['harga'], 0, ',', '.'); ?></a></h5>
                      <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span><?php echo $p['alamat']; ?></span></span>
                      <br>
                      <div class="row">
                <a href="daftarpenyewa.php" class="btn btn-success text-white px-4 py-3">Sewa</a>&nbsp;
                <a href="daftarpenyewa.php" class="btn btn-info text-white px-4 py-3">Chat Pemilik</a>&nbsp;
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
                  </div>
                </div>
                
              </div>
            </div>
          </div>
      <?php
      }
      else if ($gander=='lk' && $jarak==$jarak && $harga=='terendah') {
    
        $ceksewa = mysqli_query($koneksi, "SELECT a.*, c.* from  tbkamar a
        left join tbkos c on a.kdkos=c.kdkos where a.status='1' AND c.jeniskos='lk' c.alamat LIKE '%".$jarak."%' ORDER BY a.harga ASC");
          $no = 1;
        while ($p = mysqli_fetch_assoc($ceksewa)) {
          ?>
                  
                  <div class="col-md-4 mb-5">
                    <div class="media-38289">
                      <a href="property-single.php?id=<?= $p['kdkamar']; ?>" class="d-block"><?php echo "<img src='img/" . $p['fotokos'] . "' alt='Image' class='img-fluid'>"?></a>
                      <div class="text">
                      <h5 class="mb-3"><strong><a href="#"><?= $p['namakos']; ?></a><strong></h5>
                        <h5 class="mb-3"><a href="#"><?= "Rp " . number_format($p['harga'], 0, ',', '.'); ?></a></h5>
                        <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span><?php echo $p['alamat']; ?></span></span>
                        <br>
                        <div class="row">
                <a href="daftarpenyewa.php" class="btn btn-success text-white px-4 py-3">Sewa</a>&nbsp;
                <a href="daftarpenyewa.php" class="btn btn-info text-white px-4 py-3">Chat Pemilik</a>&nbsp;
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
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
        <?php
        }
       
          else if ($gander=='lk' && $jarak==$jarak && $harga=='tertinggi') {
    
            $ceksewa = mysqli_query($koneksi, "SELECT a.*, c.* from  tbkamar a
            left join tbkos c on a.kdkos=c.kdkos where a.status='1' AND c.jeniskos='lk' AND c.alamat LIKE '%".$jarak."%' ORDER BY c.harga DESC");
              $no = 1;
            while ($p = mysqli_fetch_assoc($ceksewa)) {
              ?>
                      
                      <div class="col-md-4 mb-5">
                        <div class="media-38289">
                          <a href="property-single.php?id=<?= $p['kdkamar']; ?>" class="d-block"><?php echo "<img src='img/" . $p['fotokos'] . "' alt='Image' class='img-fluid'>"?></a>
                          <div class="text">
                          <h5 class="mb-3"></strong><a href="#"><?= $p['namakos']; ?></a></strong></h5>
                            <h5 class="mb-3"><a href="#"><?= "Rp " . number_format($p['harga'], 0, ',', '.'); ?></a></h5>
                            <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span><?php echo $p['alamat']; ?></span></span>
                            <br>
                            <div class="row">
                <a href="daftarpenyewa.php" class="btn btn-success text-white px-4 py-3">Sewa</a>&nbsp;
                <a href="daftarpenyewa.php" class="btn btn-info text-white px-4 py-3">Chat Pemilik</a>&nbsp;
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
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
            <?php
            }

        else if ($gander=='lk' && $harga=='terendah') {
    
          $ceksewa = mysqli_query($koneksi, "SELECT a.*, c.* from  tbkamar a
          left join tbkos c on a.kdkos=c.kdkos where a.status='1' AND c.jeniskos='lk' ORDER BY c.harga ASC");
            $no = 1;
          while ($p = mysqli_fetch_assoc($ceksewa)) {
            ?>
                    
                    <div class="col-md-4 mb-5">
                      <div class="media-38289">
                        <a href="property-single.php?id=<?= $p['kdkamar']; ?>" class="d-block"><?php echo "<img src='img/" . $p['fotokos'] . "' alt='Image' class='img-fluid'>"?></a>
                        <div class="text">
                        <h5 class="mb-3"><strong><a href="#"><?= $p['namakos']; ?></a></strong></h5>
                          <h5 class="mb-3"><a href="#"><?= "Rp " . number_format($p['harga'], 0, ',', '.'); ?></a></h5>
                          <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span><?php echo $p['alamat']; ?></span></span>
                          <br>
                          <div class="row">
                <a href="daftarpenyewa.php" class="btn btn-success text-white px-4 py-3">Sewa</a>&nbsp;
                <a href="daftarpenyewa.php" class="btn btn-info text-white px-4 py-3">Chat Pemilik</a>&nbsp;
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
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
          <?php
          }

          else if ($gander=='lk' && $harga=='tertinggi') {
    
            $ceksewa = mysqli_query($koneksi, "SELECT a.*, c.* from  tbkamar a
            left join tbkos c on a.kdkos=c.kdkos where a.status='1' AND c.jeniskos='lk' ORDER BY c.harga DESC");
              $no = 1;
            while ($p = mysqli_fetch_assoc($ceksewa)) {
              ?>
                      
                      <div class="col-md-4 mb-5">
                        <div class="media-38289">
                          <a href="property-single.php?id=<?= $p['kdkamar']; ?>" class="d-block"><?php echo "<img src='img/" . $p['fotokos'] . "' alt='Image' class='img-fluid'>"?></a>
                          <div class="text">
                          <h5 class="mb-3"><strong><a href="#"><?= $p['namakos']; ?></a></strong></h5>
                            <h5 class="mb-3"><a href="#"><?= "Rp " . number_format($p['harga'], 0, ',', '.'); ?></a></h5>
                            <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span><?php echo $p['alamat']; ?></span></span>
                            <br>
                            <div class="row">
                <a href="daftarpenyewa.php" class="btn btn-success text-white px-4 py-3">Sewa</a>&nbsp;
                <a href="daftarpenyewa.php" class="btn btn-info text-white px-4 py-3">Chat Pemilik</a>&nbsp;
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
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
            <?php
            }
            else if ($jarak==$jarak) {
              $ceksewa = mysqli_query($koneksi, "SELECT a.*, c.* from  tbkamar a left join tbkos c on a.kdkos=c.kdkos WHERE c.alamat LIKE '%".$jarak."%' AND a.status='1'");
                $no = 1;
              while ($p = mysqli_fetch_assoc($ceksewa)) {
                ?>
                        
                        <div class="col-md-4 mb-5">
                          <div class="media-38289">
                            <a href="property-single.php?id=<?= $p['kdkamar']; ?>" class="d-block"><?php echo "<img src='img/" . $p['fotokos'] . "' alt='Image' class='img-fluid'>"?></a>
                            <div class="text">
                            <h5 class="mb-3"><strong><a href="#"><?= $p['namakos']; ?></a></strong></h5>
                              <h5 class="mb-3"><a href="#"><?= "Rp " . number_format($p['harga'], 0, ',', '.'); ?></a></h5>
                              <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span><?php echo $p['alamat']; ?></span></span>
                              <br>
                              <div class="row">
                        <a href="daftarpenyewa.php" class="btn btn-success text-white px-4 py-3">Sewa</a>&nbsp;
                        <a href="daftarpenyewa.php" class="btn btn-info text-white px-4 py-3">Chat Pemilik</a>&nbsp;
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
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>
              <?php
              }
     
        else if ($jarak==$jarak && $harga=='tertinggi') {
          $ceksewa = mysqli_query($koneksi, "SELECT a.*, c.* from  tbkamar a
          left join tbkos c on a.kdkos=c.kdkos where a.status='1' AND c.alamat LIKE '%".$jarak."%' ORDER BY a.harga DESC");
            $no = 1;
          while ($p = mysqli_fetch_assoc($ceksewa)) {
            ?>
                    
                    <div class="col-md-4 mb-5">
                      <div class="media-38289">
                        <a href="property-single.php?id=<?= $p['kdkamar']; ?>" class="d-block"><?php echo "<img src='img/" . $p['fotokos'] . "' alt='Image' class='img-fluid'>"?></a>
                        <div class="text">
                        <h5 class="mb-3"><strong><a href="#"><?= $p['namakos']; ?></a></strong></h5>
                          <h5 class="mb-3"><a href="#"><?= "Rp " . number_format($p['harga'], 0, ',', '.'); ?></a></h5>
                          <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span><?php echo $p['alamat']; ?></span></span>
                          <br>
                          <div class="row">
                <a href="daftarpenyewa.php" class="btn btn-success text-white px-4 py-3">Sewa</a>&nbsp;
                <a href="daftarpenyewa.php" class="btn btn-info text-white px-4 py-3">Chat Pemilik</a>&nbsp;
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
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
          <?php
          }
          else if ($jarak==$jarak && $harga=='terendah') {
            $ceksewa = mysqli_query($koneksi, "SELECT a.*, c.* from  tbkamar a
            left join tbkos c on a.kdkos=c.kdkos where a.status='1' AND c.alamat LIKE '%".$jarak."%' ORDER BY a.harga ASC ");
              $no = 1;
            while ($p = mysqli_fetch_assoc($ceksewa)) {
              ?>
                      
                      <div class="col-md-4 mb-5">
                        <div class="media-38289">
                          <a href="property-single.php?id=<?= $p['kdkamar']; ?>" class="d-block"><?php echo "<img src='img/" . $p['fotokos'] . "' alt='Image' class='img-fluid'>"?></a>
                          <div class="text">
                          <h5 class="mb-3"><strong><a href="#"><?= $p['namakos']; ?></a></strong></h5>
                            <h5 class="mb-3"><a href="#"><?= "Rp " . number_format($p['harga'], 0, ',', '.'); ?></a></h5>
                            <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span><?php echo $p['alamat']; ?></span></span>
                            <br>
                            <div class="row">
                <a href="daftarpenyewa.php" class="btn btn-success text-white px-4 py-3">Sewa</a>&nbsp;
                <a href="daftarpenyewa.php" class="btn btn-info text-white px-4 py-3">Chat Pemilik</a>&nbsp;
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
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
            <?php
            }
        else if ($harga=='terendah') {
          $ceksewa = mysqli_query($koneksi, "SELECT a.*, c.* from  tbkamar a
          left join tbkos c on a.kdkos=c.kdkos where a.status='1' ORDER BY harga ASC");
            $no = 1;
          while ($p = mysqli_fetch_assoc($ceksewa)) {
            ?>
                    
                    <div class="col-md-4 mb-5">
                      <div class="media-38289">
                        <a href="property-single.php?id=<?= $p['kdkamar']; ?>" class="d-block"><?php echo "<img src='img/" . $p['fotokos'] . "' alt='Image' class='img-fluid'>"?></a>
                        <div class="text">
                        <h5 class="mb-3"><a href="#"><?= $p['namakos']; ?></a></h5>
                          <h5 class="mb-3"><a href="#"><?= "Rp " . number_format($p['harga'], 0, ',', '.'); ?></a></h5>
                          <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span><?php echo $p['alamat']; ?></span></span>
                          <br>
                          <div class="row">
                <a href="daftarpenyewa.php" class="btn btn-success text-white px-4 py-3">Sewa</a>&nbsp;
                <a href="daftarpenyewa.php" class="btn btn-info text-white px-4 py-3">Chat Pemilik</a>&nbsp;
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
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
          <?php
          }
          else if ($harga=='tertinggi') {
            $ceksewa = mysqli_query($koneksi, "SELECT a.*, c.* from  tbkamar a
            left join tbkos c on a.kdkos=c.kdkos where a.status='1' ORDER BY harga DESC");
              $no = 1;
            while ($p = mysqli_fetch_assoc($ceksewa)) {
              ?>
                      
                      <div class="col-md-4 mb-5">
                        <div class="media-38289">
                          <a href="property-single.php?id=<?= $p['kdkamar']; ?>" class="d-block"><?php echo "<img src='img/" . $p['fotokos'] . "' alt='Image' class='img-fluid'>"?></a>
                          <div class="text">
                          <h5 class="mb-3"><strong><a href="#"><?= $p['namakos']; ?></a></strong></h5>
                            <h5 class="mb-3"><a href="#"><?= "Rp " . number_format($p['harga'], 0, ',', '.'); ?></a></h5>
                            <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span><?php echo $p['alamat']; ?></span></span>
                            <br>
                            <div class="row">
                <a href="daftarpenyewa.php" class="btn btn-success text-white px-4 py-3">Sewa</a>&nbsp;
                <a href="daftarpenyewa.php" class="btn btn-info text-white px-4 py-3">Chat Pemilik</a>&nbsp;
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
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
            <?php
            }
   else if ($gander=='pr') {
      $ceksewa = mysqli_query($koneksi, "SELECT a.*, c.* from  tbkamar a
      left join tbkos c on a.kdkos=c.kdkos where a.status='1' AND c.jeniskos='pr'");
        $no = 1;
      while ($p = mysqli_fetch_assoc($ceksewa)) {
        ?>
                
                <div class="col-md-4 mb-5">
                  <div class="media-38289">
                    <a href="property-single.php?id=<?= $p['kdkamar']; ?>" class="d-block"><?php echo "<img src='img/" . $p['fotokos'] . "' alt='Image' class='img-fluid'>"?></a>
                    <div class="text">
                    <h5 class="mb-3"><strong><a href="#"><?= $p['namakos']; ?></a></strong></h5>
                      <h5 class="mb-3"><a href="#"><?= "Rp " . number_format($p['harga'], 0, ',', '.'); ?></a></h5>
                      <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span><?php echo $p['alamat']; ?></span></span>
                      <br>
                      <div class="row">
                <a href="daftarpenyewa.php" class="btn btn-success text-white px-4 py-3">Sewa</a>&nbsp;
                <a href="daftarpenyewa.php" class="btn btn-info text-white px-4 py-3">Chat Pemilik</a>&nbsp;
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
                  </div>
                </div>
                
              </div>
            </div>
          </div>
      <?php
      }
      else if ($gander=='pr' && $jarak==$jarak) {
    
        $ceksewa = mysqli_query($koneksi, "SELECT a.*, c.* from  tbkamar a
        left join tbkos c on a.kdkos=c.kdkos where a.status='1' AND c.jeniskos='pr' AND c.alamat LIKE '%".$jarak."%'");
          $no = 1;
        while ($p = mysqli_fetch_assoc($ceksewa)) {
          ?>
                  
                  <div class="col-md-4 mb-5">
                    <div class="media-38289">
                      <a href="property-single.php?id=<?= $p['kdkamar']; ?>" class="d-block"><?php echo "<img src='img/" . $p['fotokos'] . "' alt='Image' class='img-fluid'>"?></a>
                      <div class="text">
                      <h5 class="mb-3"><strong><a href="#"><?= $p['namakos']; ?></a></strong></h5>
                        <h5 class="mb-3"><a href="#"><?= "Rp " . number_format($p['harga'], 0, ',', '.'); ?></a></h5>
                        <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span><?php echo $p['alamat']; ?></span></span>
                        <br>
                        <div class="row">
                <a href="daftarpenyewa.php" class="btn btn-success text-white px-4 py-3">Sewa</a>&nbsp;
                <a href="daftarpenyewa.php" class="btn btn-info text-white px-4 py-3">Chat Pemilik</a>&nbsp;
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
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
        <?php
        }
        else if ($gander=='pr' && $jarak==$jarak && $harga=='terendah') {
      
          $ceksewa = mysqli_query($koneksi, "SELECT a.*, c.* from  tbkamar a
          left join tbkos c on a.kdkos=c.kdkos where a.status='1' AND c.jeniskos='pr' AND c.alamat LIKE '%".$jarak."%' ORDER BY a.harga ASC");
            $no = 1;
          while ($p = mysqli_fetch_assoc($ceksewa)) {
            ?>
                    
                    <div class="col-md-4 mb-5">
                      <div class="media-38289">
                        <a href="property-single.php?id=<?= $p['kdkamar']; ?>" class="d-block"><?php echo "<img src='img/" . $p['fotokos'] . "' alt='Image' class='img-fluid'>"?></a>
                        <div class="text">
                        <h5 class="mb-3"><strong><a href="#"><?= $p['namakos']; ?></a></strong></h5>
                          <h5 class="mb-3"><a href="#"><?= "Rp " . number_format($p['harga'], 0, ',', '.'); ?></a></h5>
                          <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span><?php echo $p['alamat']; ?></span></span>
                          <br>
                          <div class="row">
                <a href="daftarpenyewa.php" class="btn btn-success text-white px-4 py-3">Sewa</a>&nbsp;
                <a href="daftarpenyewa.php" class="btn btn-info text-white px-4 py-3">Chat Pemilik</a>&nbsp;
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
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
          <?php
          }
          else if ($gander=='pr' && $jarak==$jarak && $harga=='tertinggi') {
      
            $ceksewa = mysqli_query($koneksi, "SELECT a.*, c.* from  tbkamar a
            left join tbkos c on a.kdkos=c.kdkos where a.status='1' AND c.jeniskos='pr' c.alamat LIKE '%.$jarak.%' ORDER BY a.harga DESC");
              $no = 1;
            while ($p = mysqli_fetch_assoc($ceksewa)) {
              ?>
                      
                      <div class="col-md-4 mb-5">
                        <div class="media-38289">
                          <a href="property-single.php?id=<?= $p['kdkamar']; ?>" class="d-block"><?php echo "<img src='img/" . $p['fotokos'] . "' alt='Image' class='img-fluid'>"?></a>
                          <div class="text">
                          <h5 class="mb-3"><strong><a href="#"><?= $p['namakos']; ?></a></strong></h5>
                            <h5 class="mb-3"><a href="#"><?= "Rp " . number_format($p['harga'], 0, ',', '.'); ?></a></h5>
                            <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span><?php echo $p['alamat']; ?></span></span>
                            <br>
                            <div class="row">
                <a href="daftarpenyewa.php" class="btn btn-success text-white px-4 py-3">Sewa</a>&nbsp;
                <a href="daftarpenyewa.php" class="btn btn-info text-white px-4 py-3">Chat Pemilik</a>&nbsp;
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
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
            <?php
            }
            else if ($gander=='pr' && $harga=='terendah') {
      
            $ceksewa = mysqli_query($koneksi, "SELECT a.*, c.* from  tbkamar a
            left join tbkos c on a.kdkos=c.kdkos where a.status='1' AND c.jeniskos='pr' ORDER BY c.harga ASC");
              $no = 1;
            while ($p = mysqli_fetch_assoc($ceksewa)) {
              ?>
                      
                      <div class="col-md-4 mb-5">
                        <div class="media-38289">
                          <a href="property-single.php?id=<?= $p['kdkamar']; ?>" class="d-block"><?php echo "<img src='img/" . $p['fotokos'] . "' alt='Image' class='img-fluid'>"?></a>
                          <div class="text">
                          <h5 class="mb-3"><strong><a href="#"><?= $p['namakos']; ?></a></strong></h5>
                            <h5 class="mb-3"><a href="#"><?= "Rp " . number_format($p['harga'], 0, ',', '.'); ?></a></h5>
                            <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span><?php echo $p['alamat']; ?></span></span>
                            <br>
                            <div class="row">
                <a href="daftarpenyewa.php" class="btn btn-success text-white px-4 py-3">Sewa</a>&nbsp;
                <a href="daftarpenyewa.php" class="btn btn-info text-white px-4 py-3">Chat Pemilik</a>&nbsp;
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
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
            <?php
            }
  
            else if ($gander=='pr' && $harga=='tertinggi') {
      
              $ceksewa = mysqli_query($koneksi, "SELECT a.*, c.* from  tbkamar a
              left join tbkos c on a.kdkos=c.kdkos where a.status='1' AND c.jeniskos='pr' ORDER BY c.harga DESC");
                $no = 1;
              while ($p = mysqli_fetch_assoc($ceksewa)) {
                ?>
                        
                        <div class="col-md-4 mb-5">
                          <div class="media-38289">
                            <a href="property-single.php?id=<?= $p['kdkamar']; ?>" class="d-block"><?php echo "<img src='img/" . $p['fotokos'] . "' alt='Image' class='img-fluid'>"?></a>
                            <div class="text">
                            <h5 class="mb-3"><strong><a href="#"><?= $p['namakos']; ?></a></strong></h5>
                              <h5 class="mb-3"><a href="#"><?= "Rp " . number_format($p['harga'], 0, ',', '.'); ?></a></h5>
                              <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span><?php echo $p['alamat']; ?></span></span>
                              <br>
                              <div class="row">
                <a href="daftarpenyewa.php" class="btn btn-success text-white px-4 py-3">Sewa</a>&nbsp;
                <a href="daftarpenyewa.php" class="btn btn-info text-white px-4 py-3">Chat Pemilik</a>&nbsp;
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
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>
              <?php
              }

  else {
    $ceksewa = mysqli_query($koneksi, "SELECT a.*, c.* from  tbkamar a
    left join tbkos c on a.kdkos=c.kdkos where a.status='1'");
    
      $no = 1;
    while ($p = mysqli_fetch_assoc($ceksewa)) {
      ?>
              
              <div class="col-md-4 mb-5">
                <div class="media-38289">
                  <a href="property-single.php?id=<?= $p['kdkamar']; ?>" class="d-block"><?php echo "<img src='img/" . $p['fotokos'] . "' alt='Image' class='img-fluid'>"?></a>
                  <div class="text">
                  <h5 class="mb-3"><strong><a href="#"><?= $p['namakos']; ?></a></strong></h5>
                    <h5 class="mb-3"><a href="#"><?= "Rp " . number_format($p['harga'], 0, ',', '.'); ?></a></h5>
                    <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span><?php echo $p['alamat']; ?></span></span>
                    <br>
                    <div class="row">
                <a href="daftarpenyewa.php" class="btn btn-success text-white px-4 py-3">Sewa</a>&nbsp;
                <a href="daftarpenyewa.php" class="btn btn-info text-white px-4 py-3">Chat Pemilik</a>&nbsp;
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
                </div>
              </div>
              
            </div>
          </div>
        </div>
    <?php
    }
    
  
}
    ?>    
    </div>
              </div>
</div>



<footer class="site-footer">
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

