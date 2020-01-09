<?php 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$query = mysqli_query($koneksi,"select * from tbpemilik where username='$username' and password='$password'");
$cek = mysqli_num_rows($query);

$query1 = mysqli_query($koneksi,"select * from tbpenyewa where username='$username' and password='$password'");
$cek1 = mysqli_num_rows($query1);
 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = 'login';
    header("location:daftarpemilik1.php");   
}
else if($cek1 > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = 'login';
    header("location:penyewa1.php");   

}
else if($username==null || $password==null){
	echo "<script>alert('username dan password tidak boleh kosong');window.history.back();</script>";  
    
}
else{
    echo "<script>alert('password anda salah');window.history.back();</script>";
	
}

?>