<?php
include "./../koneksi.php";

$tipe = $_POST['tipe'];
$data = array();
$que = "";
if($tipe == "tampilpesan") {
    $kode = $_POST['kode'];
    $que = "SELECT * from isi_chat  where id_chat='$kode' order by create_at asc";
    $qq = mysqli_query($koneksi, $que);
    while ($dt = mysqli_fetch_array($qq)) {
        $data[] = $dt;
    }

    $sasa = "UPDATE chat set noread_pemilik='0' where id_chat='$kode'";
    $qqa = mysqli_query($koneksi, $sasa);
    echo json_encode($data);

} else if ($tipe == "savepesan") {
    $kode = $_POST['kode'];
    $isi = $_POST['isi'];
    $tipe = $_POST['jenis'];
    $que = "INSERT into isi_chat(id_chat,tipe,isinya) values('$kode','$tipe','$isi')";
    $qq = mysqli_query($koneksi, $que);
    $data = [
        'status' => true
    ];

    echo json_encode($data);
    
} 


?>