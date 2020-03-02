<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Login Penyewa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

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
<body class="hold-transition login-page">

  <!-- /.login-logo -->
  <div class="login-formreset">
  <h3 class="text-center"><b>Konfirmasi Password baru<b></h3>
  <div class="wrapper-main">
            <section class="section-default">

              <?php
                $selector = $_GET["selector"];
                $validator = $_GET["validator"];

                if (empty($selector) || empty($validator)) {
                  echo "Kami tidak bisa memvalidasi permintaan anda!";
                } else {
                  if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false ) {
                    ?>

                    <form action="resetpw1.php" method="post">
                      <input type="hidden" name="selector" value="<?php echo $selector; ?>">
                      <div>
                      <input type="hidden" name="validator" value="<?php echo $validator; ?>">
                      </div>
                      <center><input style="margin:10px 0;width:595px;text-align:center;" type="password" name="pwd"placeholder="Masukan password Baru.."><center>
                      <div>
                      <center><input style="margin:10px 0;width:595px;text-align:center;" type="password" name="pwd-repeat"placeholder="Ulangi password Baru.."><center>
                     
                      </div>
                      <div style="margin-top: 10px">
                      <button type="submit" class="btn btn-primary btn-block btn-flat" name="reset-password-submit">Reset</button>
                      </div>
                    </form>


                    <?php
                  }
                }
               ?>

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

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


</body>
</html>
