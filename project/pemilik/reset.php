<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

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

    <style>
        body{
            background-image: url("../images/penyewa.png");
            background-size: cover;
        }
    </style>

  </head>
</head>
<nav class="navbar navbar-light bg-transparant">
                <a class="navbar-brand" href="../index.php">
                 <p style="color: #91b029 ;">< Kembali</p> 
                </a>
              </nav>
<body class="hold-transition login-page">
<div class="login-box">
  
  <!-- /.login-logo -->
  s
  <div class="login-formreset" >
    <center><h3 class="login-formset">Reset Password</h3></center>
    <section class="section-default">
    <center><p>Sistem akan mengirim email kepada alamat email yang anda dan akan memberi petunjuk untuk mereset password anda.</p></center>
                <form action="resetpwd.php" method="post">
                <center><input style="margin:20px 0;width:595px;text-align:center;" type="text" name="email" placeholder="Masukan Email"></center>
                  <button type="submit" class="btn btn-primary btn-block btn-flat" name="reset-request-submit">Kirim Link Verifikasi</button>
                  </br>
                  <?php
                if (isset($_GET["reset"])) {
                  if ($_GET["reset"] == "success") {
                    echo '<div style="background:rgba(51,255,51,0.4);padding:10px 0px 1px 0px;text-align:center;color:black;"><p>Email Terkirim!</p></div>';
                  }
                  elseif ($_GET["reset"] == "error") {
                    echo '<div style="background:rgba(255,0,51,0.4);padding:10px 0px 1px 0px;text-align:center;color:black;"><p>Harap Isi Email Anda!</p></div>';
                  }
                  elseif ($_GET["reset"] == "ada") {
                    echo '<div style="background:rgba(255,0,51,0.4);padding:10px 0px 1px 0px;text-align:center;color:black;"><p>Email Tidak Di Temukan!</p></div>';
                  }
                }

                 ?>
                 
                </form>
                
            </section>
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

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


</body>
</html>