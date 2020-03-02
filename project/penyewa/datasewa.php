<?php
session_start();
include 'inc/header.php';
$dasewa = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from tbpenyewa  where nopenyewa='$_SESSION[kode]'"));
$ceksewa = mysqli_query($koneksi, "SELECT a.*, b.harga, c.namakos, c.kdpemilik, c.kdkos from sewa a 
left join tbkamar b on a.kdkamar=b.kdkamar
left join tbkos c on b.kdkos=c.kdkos where a.nopenyewa='$_SESSION[kode]'");

if (isset($_GET['aksi'])) {
  if ($_GET['aksi'] == 'batal') {
    $id = $_GET['id'];
    $datahps = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM sewa WHERE kode_sewa='$id'"));
    
    $kk = mysqli_query($koneksi, "UPDATE sewa set `status_sewa`='0' where kode_sewa='$id'");
    if ($kk) {
      $up = mysqli_query($koneksi, "UPDATE tbkamar set `status`='1' where kdkamar='$datahps[kdkamar]'");
      echo "<script>alert('Berhasil Membatalkan Penyewaan'); window.location='datasewa.php';</script>";

    } else {
      echo "<script>alert('Gagal Membatalkan Penyewaan'); window.location='datasewa.php';</script>";
    }
  }
}
?>
<div class="container">
  <div class="card-group" style="margin-top: 100px; margin-bottom: 50px;">
    <div class="card" style="background-color: #fff; ">
      <div style="text-align:left;" class="card-body">
        <h5 class="card-title">Data Penyewaan Kamar Anda</h5>
        <div class="table-responsive m-t-10">
          <table id="myTable" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Kos</th>
                <th>Harga Kamar</th>
                <th>Kode Kamar</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $nt = ['Batal', 'Menunggu Konfirmasi', 'Di terima', 'Di Tolak', 'Selesai'];
              $no = 1;
              while ($p = mysqli_fetch_assoc($ceksewa)) {
                ?>
                <tr>
                  <td><?= $no; ?></td>
                  <td><?= $p['namakos']; ?></td>
                  <td><?= "Rp " . number_format($p['harga'], 0, ',', '.'); ?></td>
                  <td>
                    <?= $p['kdkamar'] ?>
                  </td>
                  <td>
                    <?= $p['tgl_mulai'] ?>
                  </td>
                  <td>
                    <?= $p['tgl_selesai'] ?>
                  </td>
                  <td>
                    <?= $nt[$p['status_sewa']] ?>
                  </td>
                  <td>
                    <?php
                      $status = $p['status_sewa'];
                      if ($status == "1") { ?>

                      <a href="datasewa.php?id=<?= $p['kode_sewa']; ?>&aksi=batal" onclick="return confirm('Apakah anda yakin ingin membatalkan penyewaan ini?')">Batalkan</a>&nbsp;
                      <a href="pesan.php?kodekos=<?= $p['kdkos']; ?>" >Chat Pemilik</a>&nbsp;
                    <?php
                      } else {
                        echo "-";
                      }
                      ?>
                  </td>
                </tr>
              <?php
                $no++;
              } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    </center>
  </div>
</div>
<?php
include "inc/footer.php";
?>