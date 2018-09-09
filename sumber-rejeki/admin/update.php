<!--
Author : Aguzrybudy
Created : Selasa, 08-Novermber-2016
Title : Crud Php Mysqli Dilengkapi dengan upload gambar dan ckeditor
-->

<?php
  include '../koneksi.php';
  include 'session.php';
  $br_id = $_POST['br_id'];
  $br_nm = $_POST['br_nm'];
  $br_hrg = $_POST['br_hrg'];
  $ket = $_POST['ket'];
  $gambar   = $_FILES['br_gbr']['name'];
  if (empty($gambar)){
    mysqli_query($koneksi, "UPDATE barang SET br_id = '$br_id', br_nm = '$br_nm', br_hrg = '$br_hrg', ket  = '$ket' WHERE br_id = '$br_id'");
    // header('location:produk.php');
    echo "<script>alert('Data Berhasil Diupdate!'); window.location = 'produk.php'</script>";

  }else{
    $hapus= mysqli_query($koneksi, "SELECT * From barang Where br_id='$br_id'");
    // menghapus gambar yang lama
    $nama_gambar=mysqli_fetch_array($hapus);
    // nama field gambar
    $lokasi=$nama_gambar['br_gbr'];
    // alamat tempat foto
    $hapus_gambar="../$lokasi";
    // script untuk menghapus gambar dari folder
    unlink($hapus_gambar);
    move_uploaded_file($_FILES['br_gbr']['tmp_name'],'../gambar/'.$gambar);
    mysqli_query($koneksi, "UPDATE barang SET br_id = '$br_id', br_nm  = '$br_nm', br_hrg = '$br_hrg', ket  = '$ket', br_gbr  = 'gambar/$gambar' WHERE br_id = '$br_id'");
    echo "<script>alert('Data Berhasil Diupdate!'); window.location = 'produk.php'</script>";
  }
?>