<!--
Author : Aguzrybudy
Created : Selasa, 08-Novermber-2016
Title : Crud Php Mysqli Dilengkapi dengan upload gambar dan ckeditor
-->
<?php
include "../koneksi.php";
include 'session.php'; 
   $hapus=mysqli_query($koneksi, "SELECT * FROM barang WHERE br_id='$_GET[br_id]'");
    // memilih gambar untuk dihapus
    $nama_gambar=mysqli_fetch_array($hapus);
    // nama field gambar
    $lokasi=$nama_gambar['br_gbr'];
    // alamat tempat gambar
    $hapus_gambar="../$lokasi";
    // script delete gambar dari folder
    unlink($hapus_gambar);
    mysqli_query($koneksi, "DELETE FROM barang WHERE br_id='$_GET[br_id]'");
    echo "<script>alert('Data Berhasil Dihapus!'); window.location = 'produk.php'</script>";
?>