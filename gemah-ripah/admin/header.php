    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">Gemah Ripah</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="dashboard.php">SELAMAT DATANG, Admin</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <hr></hr>
    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="dashboard.php" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <?php 
                include '../koneksi.php';
                $query = mysqli_query($koneksi,"SELECT * FROM barang");
                $count = mysqli_num_rows($query);
              ?>
              <a href="produk.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Data Produk <span class="badge"><?php echo $count; ?></span></a>
            </div>

          </div>
