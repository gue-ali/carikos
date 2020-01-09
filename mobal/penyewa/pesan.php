<?php
session_start();
include 'inc/header.php';

if (isset($_GET['kodekos'])) {
  $id = $_GET['kodekos'];
  $cekgan = mysqli_query($koneksi, "SELECT * from chat where kdkos='$id' and id_penyewa='$_SESSION[kode]'");
  $htggan =  mysqli_num_rows($cekgan);

  if ($htggan <= 0) {
    $kode = random_oke(8);
    $que = "INSERT into chat(id_chat,kdkos,id_penyewa) VALUES('$kode','$id','$_SESSION[kode]')";
    $kk = mysqli_query($koneksi, $que);
    echo "<script>window.location='pesan.php?id=$kode';</script>";
  } else {
    $dat = mysqli_fetch_array($cekgan);
    $kode = $dat['id_chat'];
    echo "<script>window.location='pesan.php?id=$kode';</script>";
  }
}
$id = '';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}
$datch = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from chat  where id_chat='$id'"));

$ceksewa = mysqli_query($koneksi, "SELECT * from isi_chat where id_chat='$id' order by create_at asc");
$datlawan = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from tbkos  where kdkos='$datch[kdkos]'"));
?>
<div class="container">
  <div class="card-group" style="margin-top: 100px; margin-bottom: 50px;">
    <div class="card" style="background-color: #fff; ">
      <div style="text-align:left;" class="card-body">
        <h5 class="card-title">Data Pesan - </h5>
      </div>
      <div class="chat-main-box">
        <!-- .chat-left-panel -->
        <div class="chat-left-aside">
          <div class="open-panel"><i class="ti-angle-right"></i></div>
          <!-- .chat-left-panel -->
          <!-- .chat-right-panel -->
          <div class="chat-right-aside">
            <div class="chat-main-header">
              <div class="p-20 b-b">
                <!-- <h3 class="box-title">Chat Message</h3> -->
              </div>
            </div>
            <div class="chat-rbox">
              <ul class="chat-list p-20" style="overflow-y: scroll; height:400px;" id="listpesan">


              </ul>
            </div>
            <div class="card-body b-t">
              <div class="row">
                <div class="col-10">
                  <input type="text" placeholder="Masukkan Pesan" name="isipesan" id="isipesan" class="form-control b-0" />
                </div>
                <div class="col-2 text-left">
                  <button type="button" style="margin-top: 5px;" class="btn btn-info btn-circle btn-lg" onclick="sendpesan()"><i class="fa fa-paper-plane-o"></i> </button>
                </div>
              </div>
            </div>
          </div>
          <!-- .chat-right-panel -->
        </div>
      </div>
    </div>
    </center>
  </div>
</div>

<script>
  var idpesan = "<?php echo $id; ?>";
  var namalawan = "<?php echo $datlawan['namakos']; ?>";
  window.addEventListener("load", function(event) {
    tampildata();
  });
  (function startTimer() { //selef executing function
    var i = 0;
    var TimeInterval = setInterval(function() {
      tampildata();
    }, 3000);
  })()

  function tampildata() {
    $.ajax({
      type: 'post',
      data: {
        kode: idpesan,
        tipe: 'tampilpesan'
      },
      url: 'apipesan.php',
      async: false,
      dataType: 'json',
      success: function(data) {
        console.log(data);

        var html = '';
        var i, ttl = 0;
        var no = 1;
        for (i = 0; i < data.length; i++) {
          var tipe = data[i].tipe;
          if (tipe == '1') {
            html += '<li class="reverse"> <div class="chat-time" >' + data[i].create_at + '</div>' +
              '<div class="chat-content"><h5>Anda</h5><div class = "box bg-light-success"  style="background-color: #f0f0f0;padding:8px;"> ' + data[i].isinya + ' </div> </div><hr></li>';
          } else if (tipe == '2') {
            html += '<li> ' +
              '<div class="chat-content"><h5>' + namalawan + '</h5><div class = "box bg-light-success"  style="background-color: #cfecfe;padding:8px;"> ' + data[i].isinya + ' </div> </div><div class="chat-time" >' + data[i].create_at + '</div><hr></li>';
          }

        }
        $('#listpesan').html(html);
        var elem = document.getElementById('listpesan');
        elem.scrollTop = elem.scrollHeight;
      }

    });
  }


  function sendpesan() {
    var isi = $('#isipesan').val();
    if (isi == "") {
      alert("Pesan tidak boleh kosong");

    } else {

      $.ajax({
        type: "POST",
        url: "apipesan.php",
        dataType: "JSON",
        data: {
          kode: idpesan,
          isi: isi,
          jenis: '1',
          tipe: 'savepesan'
        },
        success: function(data) {

          $('[name="isipesan"]').val("");
          tampildata();
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {

          $('[name="isipesan"]').val("");
          tampildata();
        }

      });
      return false;
    }


  }
</script>
<?php
                    include "inc/footer.php";
?>