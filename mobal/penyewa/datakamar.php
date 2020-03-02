<?php
session_start();
include 'inc/header.php';
$dasewa = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from tbpenyewa  where nopenyewa='$_SESSION[kode]'"));
$ceksewa = mysqli_query($koneksi, "SELECT a.*, c.kdkos, c.namakos, c.kdpemilik from  tbkamar a
left join tbkos c on a.kdkos=c.kdkos where a.status='1'");

?>
<div class="container">
  <div class="card-group" style="margin-top: 100px; margin-bottom: 50px;">
    <div class="card" style="background-color: #fff; ">
      <div style="text-align:left;" class="card-body">
        <h5 class="card-title">Data Kamar Sementara</h5>
        <div class="table-responsive m-t-10">
          <table id="myTable" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Kos</th>
                <th>Kode Kamar</th>
                <th>harga</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              while ($p = mysqli_fetch_assoc($ceksewa)) {
                ?>
                <tr>
                  <td><?= $no; ?></td>
                  <td><?= $p['namakos']; ?></td>
                  <td><?= $p['kdkamar']; ?></td>
                  <td><?= "Rp " . number_format($p['harga'], 0, ',', '.'); ?></td>
                  <td>
                    <a href="formsewa.php?id=<?= $p['kdkamar']; ?>">Sewa</a>&nbsp;
                    <a href="pesan.php?kodekos=<?= $p['kdkos']; ?>">Chat Pemilik</a>&nbsp;

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