<!DOCTYPE html>
<html>
<head>
	<title>Tim Garage</title>
	<meta name="viewport" content="width=device-width">
	<!-- css link -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/website.css">

	<!-- jquery -->
	<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
	<!-- <div class="top-bar">
		<div class="row">
			<div class="col-8"></div>
			<div class="col-4">
				<ul>
					<li>Selamat Datang A</li>
				</ul>
			</div>
		</div>
	</div> -->
	<div class="top" style="height: 10px;"></div>
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-4"><img src="images/logo1.jpg" alt="logo" style="width: 50px"></div>
				<div class="col-8">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="mod.html">Mod</a></li>
						<li><a href="liquid.html">Liquid</a></li>
						<li><a href="rda.html">RDA</a></li>
						<!--li><a href="checkout.html">Checkout</a></li-->
						<!-- <li><a href="riwayat.html">Riwayat</a></li> -->
						<li><a href="daftar.html" class="btn-spesial">Daftar</a></li>
						<li><a href="masuk.html" class="btn-spesial">Masuk</a></li>
						<li id="search"><a href="#"><i class="fa fa-search"></i></a></li>
					</ul>
				</div>
			</div>
		</div>	
	</div>
	<div class="search">
		<div class="container">
			<div class="row out">
			<div class="col-10"><input type="text" name="" placeholder="Masukkan kata kunci disini..."></div>
				<div class="col-2"><button>Cari</button></div>
			</div>
		</div>
	</div>
	<div class="slider">
		<ul>
			<li><img src="images/slider1.jpg" alt="slider 1"></li>
			<li><img src="images/slider2.jpg" alt="slider 2"></li>
			<li><img src="images/slider3.jpg" alt="slider 3"></li>
		</ul>
		<div class="controller">
			<div class="control active" id="0"></div>
			<div class="control" id="1"></div>
			<div class="control" id="2"></div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-9 mian">
				<h2><b>Produk</b> Terbaru</h2>
				<div class="row">
					<div class="col-3">
						<div class="box-produk">
							<div class="diskon">8% OFF</div>
							<h3>Curima Box MOD</h3>
							<img src="images/curima.jpg">
							<p class="t-price">Rp. 400,000.00 ,-</p>
							<a href="detail.html" class="btn">Beli</a>
						</div>
					</div>
					<div class="col-3">
						<div class="box-produk">
							<div class="diskon">7% OFF</div>
							<h3>Madpul Box MOD</h3>
							<img src="images/madpul.jpg">
							<p class="t-price">Rp. 600,000.00 ,-</p>
							<a href="detail.html" class="btn">Beli</a>
						</div>
					</div>
					<div class="col-3">
						<div class="box-produk">
							<h3>Smoant S8 Pod</h3>
							<img src="images/s8.jpg">
							<p class="t-price">Rp. 210,000.00 ,-</p>
							<a href="detail.html" class="btn">Beli</a>
						</div>
					</div>
					<div class="col-3">
						<div class="box-produk">
							<h3>Vgod ProMech 2 Kit</h3>
							<img src="images/vgod.jpg">
							<p class="t-price">Rp. 1,200,000.00 ,-</p>
							<a href="detail.html" class="btn">Beli</a>
						</div>
					</div>
					<div class="col-3">
						<div class="box-produk">
							<h3>Kitkat 3mg</h3>
							<img src="images/kitkat.jpg">
							<p class="t-price">Rp. 130,000.00 ,-</p>
							<a href="detail.html" class="btn">Beli</a>
						</div>
					</div>
					<div class="col-3">
						<div class="box-produk">
							<h3>Druga Foxy BoxMOD</h3>
							<img src="images/foxy.jpg">
							<p class="t-price">Rp. 750,000.00 ,-</p>
							<a href="detail.html" class="btn">Beli</a>
						</div>
					</div>
					<div class="col-3">
						<div class="box-produk">
							<h3>Dotmod Single Posh 22mm/24mm</h3>
							<img src="images/dotmod.jpg">
							<p class="t-price">Rp. 1,000,000.00 ,-</p>
							<a href="detail.html" class="btn">Beli</a>
						</div>
					</div>
					<div class="col-3">
						<div class="box-produk">
							<h3>Artha RDA 24mm</h3>
							<img src="images/arta.jpg">
							<p class="t-price">Rp. 320,000.00 ,-</p>
							<a href="detail.html" class="btn">Beli</a>
						</div>
					</div>
				</div>
				<!--div class="all">
					<a href="" class="btn-all">Tampilkan Lebih</a>
				</div-->
			</div>
			<!-- ./main -->
			<div class="col-3 sidebar">
				<div class="col-side">
					<h3><b>Keranjang</b> Anda</h3>
					<div class="keranjang">
						<div class="row box-keranjang">
							<div class="item">
								<div class="col-3"><img src="images/foxy.jpg"></div>
								<div class="col-1 k-go"> 1 </div>
								<div class="col-7 k-go"> Rp 750,000.00,- </div>
								<div class="col-12">
									<hr>
									<p>Total : Rp 750,000.00,-</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-4"><a href="keranjang.html">Detail</a></div>
							<div class="col-8"><a href="checkout.html">Lanjut pembayaran</a></div>
						</div>
					</div>
				</div>
				<!--div class="col-side kategori">
					<h3>Kategori</h3>
					<ul>
						<li><a href="kategori.html">Samsung</a></li>
						<li><a href="kategori.html">Asus</a></li>
						<li><a href="kategori.html">Xiaomi</a></li>
						<li><a href="kategori.html">Iphone</a></li>
						<li><a href="kategori.html">Lenovo</a></li>
					</ul>
				</div-->
				<div class="col-side inform-side">
					<h3>Informasi</h3>
					<center>
						<p>Jam Kerja Tim Garage</p>
						<p>
							Senin - Jum'at : 13:00 - 23:00 <br>
							Sabtu : 13:00 - 01:00 <br>
							hari besar libur.
						</p>
						<p>Setiap pesanan akan di proses pada jam kerja</p>
					</center>
				</div>
			</div>
			<!-- ./sidebar -->
		</div>
		<!-- ./row main -->
	</div>
	<!-- ./container -->
	
	<div class="testimoni">
		<div class="container">
			<h2>Testimoni</h2>
			<div class="row">
				<div class="col-4">
					<div class="box-testimoni">
						<img src="images/duta.jpg">
						<h3>Akhdiyat Duta Modjo</h3>
						<p class="t-job">vocalist Sheila on 7</p>
						<p class="t-ket">"Pelayanan yang ramah dan memuaskan"</p>
					</div>
				</div>
				<div class="col-4">
					<div class="box-testimoni">
						<img src="images/dimas.jpg">
						<h3>Dimas Steven</h3>
						<p class="t-job">Content Creator</p>
						<p class="t-ket">"Banyak promo liquid"</p>
					</div>
				</div>
				<div class="col-4">
					<div class="box-testimoni">
						<img src="images/akbar.jpg">
						<h3>Mr Akbar K</h3>
						<p class="t-job">Bintang L-Men</p>
						<p class="t-ket">"Tempatnya sangat nyaman buat nongkrong"</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-3">
					<h3>Bantuan</h3>
					<ul>
						<li><a href="">Bantuan belanja</a></li>
						<li><a href="">Pengiriman</a></li>
						<li><a href="">Pembayaran</a></li>
						<li><a href="">Cek pesanan</a></li>
					</ul>
				</div>
				<div class="col-3">
					<h3>Partner</h3>
					<ul>
						<li><a href="">Abi Vape</a></li>
						<li><a href="">EJM</a></li>
					</ul>
				</div>
				<div class="col-3">
					<h3>Member Area</h3>
					<ul>
						<li><a href="daftar.html">Daftar</a></li>
						<li><a href="masuk.html">Masuk</a></li>
					</ul>
				</div>
				<div class="col-3">
					<h3>Contact</h3>
					<p>
						Address : 	Kudus, Jl. Sunan Muria No.35 (utara jenang 33) <br>
						WA/call : 	+62895372054790 (YOGA)
									+6289682728299 (KIKI)<br>
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- ./footer -->
	<!--div class="copyright">
		<div class="container">
			<p>&copy; CERIAPHONE 2017. All Right's Reserved</p>
		</div>
	</div-->

	<!-- my js -->
	<script type="text/javascript" src="js/index.js"></script>
</body>
</html>

