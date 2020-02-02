<?php
session_start();
include 'inc/header.php';
$dasewa = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from tbpenyewa  where nopenyewa='$_SESSION[kode]'"));
$ceksewa = mysqli_query($koneksi, "SELECT a.*, c.namakos, c.kdpemilik from chat a left join tbkos c on a.kdkos=c.kdkos where a.id_penyewa='$_SESSION[kode]'");

if (isset($_GET['aksi'])) {
  if ($_GET['aksi'] == 'hapus') {
    $id = $_GET['id'];

    $kk = mysqli_query($koneksi, "DELETE from chat where id_chat='$id'");
    $kku = mysqli_query($koneksi, "DELETE from isi_chat where id_chat='$id'");
    if ($kk) {
      echo "<script>alert('Berhasil Menghapus Pesan'); window.location='datapesan.php';</script>";
    } else {
      echo "<script>alert('Gagal Menghapus Pesan'); window.location='datapesan.php';</script>";
    }
  }
}
?>
<div class="container">
  <div class="card-group" style="margin-top: 100px; margin-bottom: 50px;">
    <div class="card" style="background-color: #fff; ">
      <div style="text-align:left;" class="card-body">
        <h5 class="card-title">Data Pesan</h5>
        <div class="table-responsive m-t-10">
          <table id="myTable" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Kos</th>
                <th>Pesan Tidak Terbaca</th>
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
                  <td><?= $p['noread_penyewa']; ?> Pesan</td>
                  <td>
                    <a href="pesan.php?id=<?= $p['id_chat']; ?>">Buka Pesan</a>&nbsp;
                    <a href="datapesan.php?id=<?= $p['id_chat']; ?>&aksi=hapus" onclick="return confirm('Apakah anda yakin ingin Menhapus chat ini?')">Hapus</a>&nbsp;

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