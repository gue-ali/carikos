<?php
session_start();
include 'inc/header.php';
$id = $_GET['id'];
$datasewa = mysqli_query($koneksi, "SELECT * FROM tbpenyewa WHERE username='".$_SESSION['username']."'");
$dasewa = mysqli_fetch_array($datasewa);
$ceksewa = mysqli_num_rows(mysqli_query($koneksi, "SELECT * from sewa  where nopenyewa='$_SESSION[kode]' and (status_sewa = '1' || status_sewa = '2')"));
if($ceksewa > 0){
  echo "<script>alert('Anda masih memiliki penyewaan yang masih menunggu konfirmasi / aktif, untuk saat ini anda tidak dapat menyewa kamar lain.'); window.location='../profilpenyewa.php';</script>";
}
$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT a.*, b.namakos, b.kdpemilik from tbkamar a left join tbkos b on a.kdkos=b.kdkos where a.kdkamar='$id'"));
echo $data['status'];
if ($data['status'] != '1') {
  echo "<script>alert('Untuk saat ini kamar yang anda pilih sedang tidak tersedia'); window.location='../profilpenyewa.php';</script>";
}
?>
<div class="container">
  <center>
    <form action="" method="POST">
      <div class="card-group col-sm-6" style="margin-top: 100px; margin-bottom: 50px;">
        <div class="card">
          <div class="container">
            <div style="text-align:left;" class="card-body">
              <h5 class="card-title">Form Penyewaan Kamar</h5>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label>Nama Kos Yang Di Sewa : </label>
                  <b>
                    <?= $data['namakos'] ?>
                  </b>
                </div>
                <div class="col-md-12 form-group">
                  <label>Kode Kamar : </label>
                  <b>
                    <?= $id ?>
                  </b>
                </div>
                <div class="col-md-12 form-group">
                  <label>Harga Kamar : </label>
                  <b>
                    <?= "Rp " . number_format($data['harga'], 0, ',', '.'); ?>
                  </b>
                </div>
                <div class="col-md-12 form-group">
                  <label>Silahkan Periksa Data Anda Di Bawah Ini </label>
                </div>
                <div class="col-md-12 form-group">
                  <label>Tanggal Mulai Kos</label>
                  <input type="date" required class="form-control" name="tgl" min="<?= date("Y-m-d") ?>">
                  <label>Nama Lengkap</label>
                  <input type="text" required class="form-control" placeholder="Nama Lengkap" name="nama" value="<?php echo $dasewa['nama']; ?>">
                  <label>No HP</label>
                  <input type="text" class="form-control" onkeypress="return hanyaAngka(event)" placeholder="No HP" maxlength="13" name="nohp" value="<?php echo $dasewa['nohp']; ?>" required>
                  <label>Email</label>
                  <input type="email" required class="form-control" placeholder="Masukkan Email Anda" name="email" value="<?php echo $dasewa['email']; ?>">
                  <label>Alamat</label>
                  <textarea required class="form-control" placeholder="Alamat Asal Anda" name="alamat"><?php echo $dasewa['alamat']; ?></textarea>

                </div>
                <br>
                <code class="col-md-12 form-group">Catatan : Setelah ada klik SEWA anda harus mengunjungi kos tersebut dan pemilik akan mengkonfirmasi penyewaan anda</code>

                <input class="btn btn-primary" style="float: right;" type="submit" name="btnsewa" value="Sewa">
              </div>
            </div>
            <script>
                function hanyaAngka(evt) {
                    var charCode = (evt.which) ? evt.which : event.keycode
                    if (charCode > 31 && (charCode < 48 || charCode > 57))

                    return false;
                    return true;
                }
                </script>
          </div></div></div></form>
          <?php
            if(isset($_POST['btnsewa'])){
              $kode = random_oke(8);
              $arr = [
                'nama' => $_POST['nama'],
                'nohp' => $_POST['nohp'],
                'email' => $_POST['email'],
                'alamat' => $_POST['alamat'],
              ];
              $endarr = json_encode($arr);
              $que = "INSERT into sewa(kode_sewa,kdkamar,nopenyewa,data_penyewa,tgl_mulai) VALUES('$kode','$id','$_SESSION[kode]','$endarr','$_POST[tgl]')";
              // echo $que;
              $kk = mysqli_query($koneksi, $que);
              if($kk){
              $up = mysqli_query($koneksi, "UPDATE tbkamar set `status`='2' where kdkamar='$id'");
                  echo "<script>alert('Penyewaan Berhasil. Silahkan Mengunjungi Kos agar penyewaan anda di konfirmasi oleh pemilik'); window.location='datasewa.php';</script>";

              }else {
                  echo "<script>alert('Penyewaan gagal');;</script>";

              }
            }
          ?>
  </center>
</div>
</div>
<?php
include "inc/footer.php";
?>