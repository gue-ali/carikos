<?php
session_start();
include 'inc/header.php';
$dasewa = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from tbpemilik  where kdpemilik='$_SESSION[kode]'"));
$ceksewa = mysqli_query($koneksi, "SELECT a.*, b.harga, c.namakos, c.kdpemilik, d.nama as namapenyewa from sewa a 
left join tbkamar b on a.kdkamar=b.kdkamar
left join tbpenyewa d on a.nopenyewa=d.nopenyewa
left join tbkos c on b.kdkos=c.kdkos where c.kdpemilik='$_SESSION[kode]' order by a.create_at desc");

if (isset($_GET['aksi'])) {
  $id = $_GET['id'];
  $datahps = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM sewa WHERE kode_sewa='$id'"));
  if ($_GET['aksi'] == 'acc') {

    $kk = mysqli_query($koneksi, "UPDATE sewa set `status_sewa`='2' where kode_sewa='$id'");
    if ($kk) {
      $up = mysqli_query($koneksi, "UPDATE tbkamar set `status`='0' where kdkamar='$datahps[kdkamar]'");
      echo "<script>alert('Berhasil Menerima Penyewaan'); window.location='datasewa.php';</script>";
    } else {
      echo "<script>alert('Gagal Menerima Penyewaan'); window.location='datasewa.php';</script>";
    }
  } else if ($_GET['aksi'] == 'reject') {

    $kk = mysqli_query($koneksi, "UPDATE sewa set `status_sewa`='3' where kode_sewa='$id'");
    if ($kk) {
      $up = mysqli_query($koneksi, "UPDATE tbkamar set `status`='1' where kdkamar='$datahps[kdkamar]'");
      echo "<script>alert('Berhasil Menolak Penyewaan'); window.location='datasewa.php';</script>";
    } else {
      echo "<script>alert('Gagal Menolak Penyewaan'); window.location='datasewa.php';</script>";
    }
  } else if ($_GET['aksi'] == 'selesai') {
    $tdy = date('Y-m-d');
    $kk = mysqli_query($koneksi, "UPDATE sewa set `status_sewa`='4',tgl_selesai='$tdy' where kode_sewa='$id'");
    if ($kk) {
      $up = mysqli_query($koneksi, "UPDATE tbkamar set `status`='1' where kdkamar='$datahps[kdkamar]'");
      echo "<script>alert('Berhasil Menyelesai Penyewaan'); window.location='datasewa.php';</script>";
    } else {
      echo "<script>alert('Gagal Menyelesai Penyewaan'); window.location='datasewa.php';</script>";
    }
  }
}
?>
<div class="container">
  <div class="card-group" style="margin-top: 100px; margin-bottom: 50px;">
    <div class="card" style="background-color: #fff; ">
      <div style="text-align:left;" class="card-body">
        <h5 class="card-title">Data Penyewaan Kos Anda</h5>
        <div class="table-responsive m-t-10">
          <table id="myTable" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Kos</th>
                <th>Kode Kamar</th>
                <th>Nama Penyewa</th>
                <th>Data Penyewa</th>
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
                  <td>
                    <?= $p['kdkamar'] ?>
                  </td>
                  <td><?= $p['namapenyewa'] ?></td>
                  <td>
                    <?= $p['tgl_mulai'] ?>
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

                      <a href="datasewa.php?id=<?= $p['kode_sewa']; ?>&
                      \aksi=reject" style="color: red;" onclick="return confirm('Apakah anda yakin ingin menolak penyewaan ini?')">Tolak</a>&nbsp;
                      <a href="datasewa.php?id=<?= $p['kode_sewa']; ?>&aksi=acc" onclick="return confirm('Apakah anda yakin ingin menerima penyewaan ini?')">Terima</a>&nbsp;
                    <?php
                      } else  if ($status == "2") { ?>
                      <a href="datasewa.php?id=<?= $p['kode_sewa']; ?>&aksi=selesai" onclick="return confirm('Apakah anda yakin ingin Menyelesaikan penyewaan ini?')">Selesaikan</a>&nbsp;
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