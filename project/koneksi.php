<?php
$base_url = "http://localhost/carikos/project/";
$koneksi = mysqli_connect("localhost","root","","carikos");

if(mysqli_connect_errno()){
    echo"koneksi database gagal : " . mysqli_connect_error();
}


function random_oke($maxlength)
{
    $chary = array(
        "0", "1", "2", "3", "4", "5", "6", "7", "8", "9",
        "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"
    );
    $return_str = "";
    for ($x = 0; $x < $maxlength; $x++) {
        $return_str .= $chary[rand(0, count($chary) - 1)];
    }
    return $return_str;
}
?>