<?php
include "koneksi.php";
$namauser = $_POST['user'];
$password = $_POST['pass'];

$query = mysqli_query($koneksi, "SELECT COUNT(username) AS jumlah FROM admin 
                    WHERE username='$namauser' AND password='$password'");
$data = mysqli_fetch_array($query);

if ($data['jumlah'] >= 1){
	session_start();
	$_SESSION['namauser']    = $namauser;
    //$_SESSION['password']    = $password;

	echo "<script>alert('Selamat datang $namauser'); window.location = 'admin/dashboard.php'</script>";	
} else {
	echo "<script>alert('Username dan Password tidak valid.'); window.location = 'admin/'</script>";	
}
?>