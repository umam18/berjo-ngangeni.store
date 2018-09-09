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
    <title>Admin | Sumber Rejeki</title>
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
                <h3 class="panel-title">Buat Data Produk</h3>
              </div>
              <div class="panel-body">
                
<form name="form_mahasiwa" action="add.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="NIM">Nama Produk</label>
    <input type="text" class="form-control" id="nim" placeholder="Nama Produk" name="br_nm" required>
  </div>

  <div class="form-group">
    <label for="Nama">Harga</label>
    <input type="number" min="0" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" class="form-control" id="nama" placeholder="Harga Produk" name="br_hrg" required>
  </div>

  <div class="form-group">
    <label for="Alamat">Keterangan</label>
    <textarea class="form-control" id="alamat" placeholder="Deskripsi Produk" name="ket" required></textarea>
  </div>

  <div class="form-group">
    <label for="Gambar">Gambar</label>
    <input type="file" class="form-control" id="gambar" name="br_gbr"><br>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary">Create</button>
  </div>
</form>
    </div>
  </div>
</div>

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="javascript/jquery.min.js"></script>
    <script src="javascript/bootstrap.js"></script>
    <script src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript">
      CKEDITOR.replace( 'alamat',{height: 300} );
    </script>
  </body>
</html>
