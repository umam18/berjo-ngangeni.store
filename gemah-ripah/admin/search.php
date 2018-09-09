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
    <title>Admin | Gemah Ripah</title>
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
                <h3 class="panel-title">Data Produk</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                      <div class="col-sm-2">
                        <form>
                            <input type="button" class="btn btn-danger" value="Tambah Data" onclick="window.location.href='create.php'" />
                        </form>
                      </div>
                      <div class="col-sm-4">
                      </div>
                      <div class="col-sm-6">
                        <form style="margin-left:60px;" action="search.php" method="GET">
                            <input type="text" class="btn btn-warning" name="query" placeholder="Nama Produk" />
                            <input type="submit" class="btn btn-primary" value="Search" />
                        </form>
                      </div>
                </div>
                <br>

          <table class="table table-striped table-hover">
            <thead>
            <tr>
              <th>ID</th>
              <th>Nama Produk</th>
              <th>Harga</th>
              <th>Keterangan</th>
              <th>Gambar</th>
              <th>Action</th>
            </tr>
            </thead>

          <?php
            if(isset($_GET['query'])){ 
                $query = $_GET['query'];
                $mahasiswa=mysqli_query($koneksi, "SELECT * FROM barang WHERE br_nm LIKE '%".$query."%'");
            }else{
                $mahasiswa = mysqli_query($koneksi, "SELECT * FROM barang");
              }
            if(mysqli_num_rows($mahasiswa) > 0){
            while($m=mysqli_fetch_array($mahasiswa)){ 

          ?>            
            <tbody> 
            <tr>
              <td><?php echo $m['br_id']; ?></td>
              <td><?php echo $m['br_nm']; ?></td>
              <td><?php echo $m['br_hrg']; ?></td>
              <td><?php echo $m['ket']; ?></td>
              <td><img src="../<?php echo $m['br_gbr'];?>" height="50"></td>
              <td>
               <a href="edit.php?br_id=<?php echo $m['br_id'];?>"><i class="fa fa-pencil"></i></a> | 
               <a href="delete.php?br_id=<?php echo $m['br_id'];?>" onclick="return confirm('Apakah anda yakin?')"><i class="fa fa-trash-o"></i></a>
              </td>
            </tr>
        
                <?php 
                      }
                  }else{
                    echo "Data <strong>" .$query."</strong> Tidak Ditemukan!;</br>";

                    $mahasiswa = mysqli_query($koneksi, "SELECT * FROM barang");
                    while($m=mysqli_fetch_array($mahasiswa)){ 
      echo "<tbody> 
            <tr>
              <td>".$m['br_id']."</td>
              <td>".$m['br_nm']."</td>
              <td>".$m['br_hrg']."</td>
              <td>".$m['ket']."</td>
              <td><img src='../".$m['br_gbr']."' height='50'></td>
              <td>
               <a href='edit.php?br_id=".$m['br_id']."'><i class='fa fa-pencil'></i></a> | 
               <a href='produk.php?page=delete&id=".$m['br_id']."' onclick='return confirm('Apakah anda yakin?')'><i class='fa fa-trash-o'></i></a>
              </td>
            </tr>";
                  }
                  } 
                ?>
            
            </tbody>
        </table>

               
              </div>
          </div>
      </div>
    </section>

    <!-- Modals -->

    <!-- Add Page -->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Page</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Page Title</label>
          <input type="text" class="form-control" placeholder="Page Title">
        </div>
        <div class="form-group">
          <label>Page Body</label>
          <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Published
          </label>
        </div>
        <div class="form-group">
          <label>Meta Tags</label>
          <input type="text" class="form-control" placeholder="Add Some Tags...">
        </div>
        <div class="form-group">
          <label>Meta Description</label>
          <input type="text" class="form-control" placeholder="Add Meta Description...">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
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
