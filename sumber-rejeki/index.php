<?php require_once("koneksi.php");
    if (!isset($_SESSION)) {
        session_start();
    } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Sumber Rejeki</title> 
	<meta name="description" content="Distro, cikarang, terlengkap, information, technology, jababeka, baru, murah"/>
	<meta name="keywords" content="Kaos, Murah, Cikarang, Baru, terlengkap, harga, terjangkau" />
	<meta name="author" content="Hakko Bio Richard"/>
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS --> 
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    
	<!--start: Header -->
	<header>		
	<?php include "header.php"; ?>
	</header>
	<!--end: Header-->
	
	<!-- start: Slider -->
	<div class="slider-wrapper">

		<div id="da-slider" class="da-slider">
			<div class="da-slide" style="background-image: url('../images/01.jpg')">
			</div>
			<div class="da-slide"  style="background-image: url('../images/02.jpg')">
			</div>
			<div class="da-slide"  style="background-image: url('../images/03.jpeg')">
			</div>
			<nav class="da-arrows">
				<span class="da-arrows-prev"></span>
				<span class="da-arrows-next"></span>
			</nav>
		</div>
		
	</div>
	<!-- end: Slider -->
			
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!--start: Container -->
    	<div class="container">
	
      		<!-- start: Hero Unit - Main hero unit for a primary marketing message or call to action -->
      		<div class="hero-unit">
        		<p>
					Kami adalah toko online desa berjo terlengkap dan terpercaya, dengan harga terjangkau kurang dari 100rb anda sudah dapat memiliki produk kami. Selamat Berbelanja Customer :)
				</p>
        		<p><a class="btn btn-success btn-large" href="produk">Lihat Produk Kami &raquo;</a></p>
                                
      		</div>
            <!--<div class="title"><h3>Keranjang Anda</h3></div>
            <div class="hero-unit">
            </div> -->
			<!-- end: Hero Unit -->

      		<!-- start: Row -->
            

			
			<!-- start: Row -->
			<div class="row">
				
				<!-- start: Icon Boxes -->
				<div class="icons-box-vert-container">

					<!-- start: Icon Box Start -->
					<div class="span6">
						<div class="icons-box-vert">
							<i class="ico-ok ico-color circle-color big"></i>
							<div class="icons-box-vert-info">
								<h3>Kemudahan Berbelanja</h3>
								<p>Dapatkan kemudahan berbelanja di Berjo Store, Kami menyediakan kebutuhan untuk fasion anda.</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box-->

					<!-- start: Icon Box Start -->
					<div class="span6">
						<div class="icons-box-vert">
							<i class="ico-cup  ico-white circle-color-full big-color"></i>
							<div class="icons-box-vert-info">
								<h3>Juara Pengiriman Delivery</h3>
								<p>Dapatkan kemudahan pengiriman barang ke rumah anda dengan minimal belanja 300 ribu radius 10km dari kantor kami.</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box -->

					<!-- start: Icon Box Start -->
					<div class="span6">
						<div class="icons-box-vert">
							<i class="ico-ipad ico-color circle-color big"></i>
							<div class="icons-box-vert-info">
								<h3>Berbelanja Dengan Gadget</h3>
								<p>Anda bisa memesan produk kami melalui gadget anda, belanja di Berjo Store praktis dan mudah.</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box -->

					<!-- start: Icon Box Start -->
					<div class="span6">
						<div class="icons-box-vert">
							<i class="ico-thumbs-up  ico-white circle-color-full big-color"></i>
							<div class="icons-box-vert-info">
								<h3>Sosial Media</h3>
								<p>Follow twitter dan fan page facebook kami untuk mendapatkan update promo special setiap harinya.</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box -->

				</div>
				<!-- end: Icon Boxes -->
				<div class="clear"></div>
			</div>
			<!-- end: Row -->
			
			<hr>
			
		</div>
		<!--end: Container-->
	
	</div>
	<!-- end: Wrapper  -->			

    <!-- start: Footer Menu -->
	<div id="footer-menu" class="hidden-tablet hidden-phone">
					<!-- start: Container -->

				<!-- start: Footer Menu Back To Top -->
				<div class="span1">

				
				</div>
				<!-- end: Footer Menu Back To Top -->
			
			</div>
			<!-- end: Row -->
			
		</div>
		<!-- end: Container  -->	

	</div>	
	<!-- end: Footer Menu -->
	<div id="footer">
		<?php include "footer.php"; ?>
	</div>

			<!-- start: Container -->

				<!-- start: Footer Menu Back To Top -->
				<div class="span1">

				
				</div>
				<!-- end: Footer Menu Back To Top -->
			
			</div>
			<!-- end: Row -->
			
		</div>
		<!-- end: Container  -->	

	</div>	
	<!-- end: Footer Menu -->
	<!-- end: Footer -->

	<!-- start: Copyright -->
	<div id="copyright">
	
		<!-- start: Container -->
		<div class="container">
		
			<p>
				Copyright &copy; Berjo Ngangeni 2018
			</p>
	
		</div>
		<!-- end: Container  -->
		
	</div>	
	<!-- end: Copyright -->

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script defer="defer" src="js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>