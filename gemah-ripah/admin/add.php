<!--
Author : Aguzrybudy
Created : Selasa, 08-Novermber-2016
Title : Crud Php Mysqli Dilengkapi dengan upload gambar dan ckeditor
-->
<?php
include "../koneksi.php";
include 'session.php';
$br_nm = $_POST['br_nm'];
$br_hrg = $_POST['br_hrg'];
$ket = $_POST['ket'];
$br_gbr = $_FILES['br_gbr']['name'];

move_uploaded_file($_FILES['br_gbr']['tmp_name'],'../gambar/'.$br_gbr);
$x = mysqli_query($koneksi, "INSERT INTO barang VALUES('','$br_nm','$br_hrg', 'gambar/$br_gbr', '$ket')");
if($x){
	echo "<script>alert('Data Berhasil Ditambahkan!'); window.location = 'produk.php'</script>";
}else{
	
}
?>