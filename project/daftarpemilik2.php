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
                 <p style="color: #91b029 ;"> Kembali</p> 
                </a>
              </nav>

              <section>
                <form action="cekkos.php" method="POST" enctype="multipart/form-data">
<div class="container">
    <div class="card-group">
         <div class="card">
             <div class="container">
            <div class="card-body">
                 <h5 class="card-title">Isi data kos</h5>
                 <div class="daftar">
                 <input type="text" placeholder="nama kos" name="namakos" id="nama kos" required>
                 <input type="text" placeholder="jarak ke kampus terdekat satuan meter" name="kampus" id="nama kos" onkeypress="return hanyaAngka(event)" required>
                 <input type="text" placeholder="alamat lengkap kos" name="alamatkos" id="alamat lengkap kos" required>                 
                </div>
                <script>
                function hanyaAngka(evt) {
                    var charCode = (evt.which) ? evt.which : event.keycode
                    if (charCode > 31 && (charCode < 48 || charCode > 57))

                    return false;
                    return true;
                }
                </script>
                <div class="row">
               <div class="col-md-12 form-group">
                  <label>Gender</label>
                 <select name="gender"  class="form-control w-100">
                   <option value="lk">Laki-laki</option>
                   <option value="pr">Perempuan</option>
                 </select>
               </div>
             </div>

            </div>
    </div>
         
     </div>
         <div class="card">
         <div class="card-body">
            
               <h5 class="card-title">Fasilitas Bersama</h5>
               <div class="form-check">
                <input class="form-check-input" type="checkbox" name="ruangtamu" value="1" id="defaultCheck1" >
                <label class="form-check-label" for="defaultCheck1">
                  Ruang tamu
                </label>
               </div>
               <div class="form-check">
                <input class="form-check-input" type="checkbox" name="mandiluar" value="1" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Kamar mandi luar
                </label>
               </div>
               <div class="form-check">
                <input class="form-check-input" type="checkbox" name="dapur" value="1" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Dapur
                </label>
               </div>
               <div class="form-check">
                <input class="form-check-input" type="checkbox" name="jemuran" value="1" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Ruang Jemur
                </label>
               </div>
               <div class="form-check">
                <input class="form-check-input" type="checkbox" name="tv" value="1" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Tv
                </label>
               </div>
               <div class="form-check">
                <input class="form-check-input" type="checkbox" name="parkiran" value="1" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Parkiran  
                </label>
               </div>
               <div class="form-check">
                <input class="form-check-input" type="checkbox" name="wifi" value="1" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  wifi  
                </label>
               </div>
               </div>           
      </div>
  <div class="card">
  <div class="container">
    <div class="card-body">
      <h5 class="card-title">Area Lingkungan</h5>
      <div class="form-check">
                <input class="form-check-input" type="checkbox" name="warungmakan" value="1" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Warung makan
                </label>
               </div>
               <div class="form-check">
                <input class="form-check-input" type="checkbox" name="minimarket" value="1" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Mini market
                </label>
               </div>
               <div class="form-check">
                <input class="form-check-input" type="checkbox" name="atm" value="1" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  ATM/ bank
                </label>
               </div>
               <div class="form-check">
                <input class="form-check-input" type="checkbox" name="masjid" value="1" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Masjid  
                </label>
               </div>
               <br>
               <h5 class="card-title">Masukkan foto dalam/ luar kos</h5>
               <div class="custom-file">
               <input type="file" name="fotokos">
                     </div>
                  <divclass="custom-file">
                 <input type="file" name="fotokos1">
                         </div>
               <div class="container">
               <input class="btn btn-primary" type="submit" name="Daftar" value="Simpan">
      </div>
               <br>
      
         </div>
  </div>
</div>
</div>
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

<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	