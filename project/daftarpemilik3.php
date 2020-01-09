<?php
session_start();
include 'koneksi.php';
$hasil = mysqli_query($koneksi, "SELECT * FROM tbpemilik WHERE username='".$_SESSION['username']."'");
             $isi = mysqli_fetch_array($hasil);

             $pemilik = $isi['kdpemilik'];
             
             $result1 = mysqli_query($koneksi, "SELECT * FROM `tbkos` WHERE kdpemilik='$pemilik'");



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
                 <p style="color: #91b029 ;"> Kembali</p> 
                </a>
              </nav>

              <section>
                <form action="" method="POST" enctype="multipart/form-data">
                <div class="container">
    <div class="card-group" style="padding: 40px 20px">
         <div class="card">
             <div class="container">
            <div class="card-body">
            <div class="row">
               <div class="col-md-12 form-group">
                  <label>Nama kos</label>
                 <select name="kdkos"  class="form-control w-100">
                 <option value="#">Pilih Kos</option>
                 <?php while ($row = mysqli_fetch_array($result1)) { ?>
                 
                   
                     <?php
                     echo "<option value=".$row["kdkos"].">".$row["namakos"]."</option>";
                     
                    }
                   
                     ?>
                 </select>
               </div>
               <div class="container">
               <input class="btn btn-primary" type="submit" style="float:right" name="pilih" value="Pilih">
                  </div>
             </div>

            </div>
    </div>
    </form>
<?php
if (isset($_POST['pilih'])) {
  
$kdkos = @$_POST['kdkos'];

$result2 = mysqli_query($koneksi, "SELECT * FROM `tbkos` WHERE kdkos='$kdkos'");
$row1 = mysqli_fetch_array($result2);  

?>    
<form action="cekkosup.php" method="POST" enctype="multipart/form-data">
<div class="container">
    <div class="card-group">
         <div class="card">
             <div class="container">
            <div class="card-body">
                 <h5 class="card-title">Isi data kos</h5>
                 <div class="daftar">
                 <input type="text" placeholder="nama kos" name="namakos" id="nama kos" value="<?php echo $row1['namakos'];?>" required>
                 <input type="text" placeholder="alamat lengkap kos" name="alamatkos" id="alamat lengkap kos" value="<?php echo $row1['alamat'];?>" required>
                 <input type="text" placeholder="alamat lengkap kos" name="kampus" id="jarak terdekat ke kampus satuan kos" value="<?php echo $row1['kampus'];?>" onkeypress="return hanyaAngka(event)" required>
                 <script>
                function hanyaAngka(evt) {
                    var charCode = (evt.which) ? evt.which : event.keycode
                    if (charCode > 31 && (charCode < 48 || charCode > 57))

                    return false;
                    return true;
                }
                </script>
                </div>
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
               <?php
            $kamarmandi= $row1['kamarmandi'];
            $cekstatus="";
            if ($kamarmandi==0) {
              $cekstatus="";
            }
            else {
              $cekstatus="checked";
            }
            ?>
               <div class="form-check">
                <?php echo "<input class='form-check-input' type='checkbox' name='mandiluar' value='1' id='defaultCheck1' ".$cekstatus.">";?>
                <label class="form-check-label" for="defaultCheck1">
                  Kamar mandi luar
                </label>
               </div>
               <?php
            $dapur= $row1['dapur'];
            $cekstatus="";
            if ($dapur==0) {
              $cekstatus="";
            }
            else {
              $cekstatus="checked";
            }
            ?>
               <div class="form-check">
               <?php echo "<input class='form-check-input' type='checkbox' name='dapur' value='1' id='defaultCheck1' ".$cekstatus.">";?>
               <label class="form-check-label" for="defaultCheck1">
                  Dapur
                </label>
               </div>
               <?php
            $jemuran= $row1['jemuran'];
            $cekstatus="";
            if ($jemuran==0) {
              $cekstatus="";
            }
            else {
              $cekstatus="checked";
            }
            ?>
               <div class="form-check">
               <?php echo "<input class='form-check-input' type='checkbox' name='jemuran' value='1' id='defaultCheck1' ".$cekstatus.">";?>
               <label class="form-check-label" for="defaultCheck1">
                  Ruang Jemur
                </label>
               </div>
               <?php
            $tv= $row1['televisi'];
            $cekstatus="";
            if ($tv==0) {
              $cekstatus="";
            }
            else {
              $cekstatus="checked";
            }
            ?>
               <div class="form-check">
               <?php echo "<input class='form-check-input' type='checkbox' name='tv' value='1' id='defaultCheck1' ".$cekstatus.">";?>
               <label class="form-check-label" for="defaultCheck1">
                  Tv
                </label>
               </div>
               <?php
            $parkiran= $row1['Parkiran'];
            $cekstatus="";
            if ($parkiran==0) {
              $cekstatus="";
            }
            else {
              $cekstatus="checked";
            }
            ?>
               <div class="form-check">
               <?php echo "<input class='form-check-input' type='checkbox' name='parkiran' value='1' id='defaultCheck1' ".$cekstatus.">";?>
               <label class="form-check-label" for="defaultCheck1">
                  Parkiran  
                </label>
               </div>
               <?php
            $wifi= $row1['wifi'];
            $cekstatus="";
            if ($wifi==0) {
              $cekstatus="";
            }
            else {
              $cekstatus="checked";
            }
            ?>
               <div class="form-check">
               <?php echo "<input class='form-check-input' type='checkbox' name='wifi' value='1' id='defaultCheck1' ".$cekstatus.">";?>
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
      <?php
            $warungmakan= $row1['warungmakan'];
            $cekstatus="";
            if ($warungmakan==0) {
              $cekstatus="";
            }
            else {
              $cekstatus="checked";
            }
            ?>
      <div class="form-check">
                <?php echo "<input class='form-check-input' type='checkbox' name='warungmakan' value='1' id='defaultCheck1' ".$cekstatus.">";?>
               <label class="form-check-label" for="defaultCheck1">
                  Warung makan
                </label>
               </div>
               <?php
            $minimarket= $row1['minimarket'];
            $cekstatus="";
            if ($minimarket==0) {
              $cekstatus="";
            }
            else {
              $cekstatus="checked";
            }
            ?>
               <div class="form-check">
               <?php echo "<input class='form-check-input' type='checkbox' name='ninimarket' value='1' id='defaultCheck1' ".$cekstatus.">";?>
               <label class="form-check-label" for="defaultCheck1">
                  Mini market
                </label>
               </div>
               <?php
            $atm= $row1['atm'];
            $cekstatus="";
            if ($atm==0) {
              $cekstatus="";
            }
            else {
              $cekstatus="checked";
            }
            ?>
               <div class="form-check">
               <?php echo "<input class='form-check-input' type='checkbox' name='atm' value='1' id='defaultCheck1' ".$cekstatus.">";?>
               <label class="form-check-label" for="defaultCheck1">
                  ATM/ bank
                </label>
               </div>
               <?php
            $masjid= $row1['masjid'];
            $cekstatus="";
            if ($masjid==0) {
              $cekstatus="";
            }
            else {
              $cekstatus="checked";
            }
            ?>
               <div class="form-check">
               <?php echo "<input class='form-check-input' type='checkbox' name='masjid' value='1' id='defaultCheck1' ".$cekstatus.">";?>
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
               <input class="btn btn-primary" type="submit" name="Daftar" value="Edit kos">
               <a href="cekkosdel.php?id=<?php echo $kdkos?>" class="btn btn-primary" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus </a>&nbsp;
               <br>
              <br>
              </div> 
              </form>
           
         </div>
  </div>
</div>
<br>
              <br>
</div>


                </section>
              <?php } ?>
      

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
	