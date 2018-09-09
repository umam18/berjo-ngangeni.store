<!--
Author : Aguzrybudy
Created : Selasa, 08-Novermber-2016
Title : Crud Php Mysqli Dilengkapi dengan upload gambar dan ckeditor
-->
<?php
  include '../koneksi.php';
  include 'session.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admins | Sumber Rejeki</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="ccss/bootstrap.css">
    <link rel="stylesheet" href="ccss/style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  </head>
  <body>

    <?php include"header.php"; ?>

<div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Edit Produk</h3>
              </div>
              <div class="panel-body">
                <br>

<?php 
  include '../koneksi.php';
  $id = $_GET['br_id'];
  $edit=mysqli_query($koneksi, "SELECT * from barang where br_id = '$id'");
  $e=mysqli_fetch_array($edit);
?>

<form name="form_mahasiwa" action="update.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="NIM">Nama Produk</label>
    <input type="hidden" name="br_id" value="<?php echo $e['br_id'];?>">
    <input type="text" class="form-control" id="nim" placeholder="Nomor Produk" name="br_nm" required value="<?php echo $e['br_nm'];?>">
  </div>

  <div class="form-group">
    <label for="Nama">Harga</label>
    <input type="number" min="0" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" class="form-control" id="nama" placeholder="Harga Produk" name="br_hrg" required value="<?php echo $e['br_hrg'];?>">
  </div>

  <div class="form-group">
    <label for="Alamat">Keterangan</label>
    <textarea class="form-control" id="alamat" placeholder="Deskripsi Poduk" name="ket" required><?php echo $e['ket'];?></textarea>
  </div>

  <div class="form-group">
    <label for="Gambar">Gambar</label>
    <input type="file" class="form-control" id="gambar" name="br_gbr"><br>
    <span><img style="height:150px; width: 100px;" src="../<?php echo $e['br_gbr'];?>"></span>
  </div> 

  <div class="form-group">
   	<button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Update</button>
  </div>
</form>
</div>
</div>
</div>