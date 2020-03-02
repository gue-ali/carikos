<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CARIKOS</title>
  <meta name="description" content="Creative CV is a HTML resume template for professionals. Built with Bootstrap 4, Now UI Kit and FontAwesome, this modern and responsive design template is perfect to showcase your portfolio, skils and experience." />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/aos.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="styles/main.css" rel="stylesheet">
</head>
<?php
$result1 = mysqli_query($koneksi, "SELECT * FROM tbpenyewa WHERE username='" . $_SESSION['username'] . "'");
$row = mysqli_fetch_array($result1);
?>

<body id="top">
  <header>
    <div class="profile-page sidebar-collapse">
      <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
        <div class="container">
          <div class="navbar-translate"><a class="navbar-brand" href="index.php" rel="tooltip">kembali</a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link smooth-scroll" href="index1.php">log out</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <div class="page-content">
    <div>
      <div class="profile-page">
        <div class="wrapper">
          <div class="page-header page-header-small" filter-color="green">
            <div class="page-header-image" data-parallax="true" style="background-image: url('images/cc-bg-1.jpg');"></div>
            <div class="container">
              <div class="content-center">
                <div class="cc-profile-image"><a href="#"><?php echo "<img src='img/" . $row['fotoprofil'] . "' />"; ?></a></div>
                <div class="h2 title"><?php

                                      echo $row['nama'];
                                      ?>
                </div>

                <a class="btn btn-primary smooth-scroll mr-2" href="" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Edit profile</a>
                <a class="btn btn-primary smooth-scroll mr-2" href="penyewa/datasewa.php" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Data Sewa</a>
                <a class="btn btn-primary smooth-scroll mr-2" href="penyewa/datapesan.php" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Data Pesan</a>
                <a class="btn btn-primary smooth-scroll mr-2" href="penyewa/datakamar.php" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Data kamar sementara</a>


              </div>
            </div>
            <div class="section">

            </div>
          </div>
        </div>
      </div>
      <div class="section" id="about">
        <div class="container">
          <div class="card" data-aos="fade-up" data-aos-offset="10">
            <div class="row">
              <div class="col-lg-6 col-md-12">
                <div class="card-body">
                  <div class="h4 mt-0 title">Selamat Datang</div>
                  <p>Hello! I am Anthony Barnett. Web Developer, Graphic Designer and Photographer.</p>
                  <p>Creative CV is a HTML resume template for professionals. Built with Bootstrap 4, Now UI Kit and FontAwesome, this modern and responsive design template is perfect to showcase your portfolio, skills and experience. <a href="https://templateflip.com/templates/creative-cv/" target="_blank">Learn More</a></p>
                </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="card-body">
                  <div class="h4 mt-0 title">Tentang anda</div>

                  <div class="row mt-3">
                    <div class="col-sm-4"><strong class="text-uppercase">Alamat:</strong></div>
                    <div class="col-sm-8"> <?php echo $row['alamat']; ?> </div>
                  </div>

                  <div class="row mt-3">
                    <div class="col-sm-4"><strong class="text-uppercase">No. hp:</strong></div>
                    <div class="col-sm-8"> <?php echo $row['nohp']; ?> </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
                    <div class="col-sm-8"> <?php echo $row['email']; ?> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <footer class="footer">
        <div class="container text-center"><a class="cc-facebook btn btn-link" href="#"><i class="fa fa-facebook fa-2x " aria-hidden="true"></i></a><a class="cc-twitter btn btn-link " href="#"><i class="fa fa-twitter fa-2x " aria-hidden="true"></i></a><a class="cc-google-plus btn btn-link" href="#"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a><a class="cc-instagram btn btn-link" href="#"><i class="fa fa-instagram fa-2x " aria-hidden="true"></i></a></div>
        <div class="h4 title text-center">Anthony Barnett</div>
        <div class="text-center text-muted">
          <p>&copy; Creative CV. All rights reserved.<br>Design - <a class="credit" href="https://templateflip.com" target="_blank">TemplateFlip</a></p>
        </div>
      </footer>
      <script src="js/core/jquery.3.2.1.min.js"></script>
      <script src="js/core/popper.min.js"></script>
      <script src="js/core/bootstrap.min.js"></script>
      <script src="js/now-ui-kit.js?v=1.1.0"></script>
      <script src="js/aos.js"></script>
      <script src="scripts/main.js"></script>
</body>

</html>