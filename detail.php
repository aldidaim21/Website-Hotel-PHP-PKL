<?php
require 'functions.php';
// ambil data di url
$id = $_GET["id"];
// query data mahasiswa 
$mhs = query("SELECT * FROM hotel WHERE id = $id")[0];
$pajak = 15.000;
$kasurking = 10.000;



$conn = mysqli_connect("localhost", "root", "", "ngotel");
// cek apakah tombol submit 
if (isset($_POST["submit"])) {



	if (reservasi($_POST) > 0) {
		echo "
			<script>
			alert('Pesanan anda Berhasil!');
			document.location.href='.php';
			</script>

	";
	} else {
		echo "<script>
			alert('Pesanan Anda Gagal!');
			document.location.href='admin.php';
			</script>";
	}
}







?>




<!DOCTYPE html>
<html>

<head>
	<title><?= $mhs["nama_hotel"]; ?></title>
	<link rel="icon" href='images/logoweb1.png'>

	<!-- script src -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/searchbar.css">
	<script src="https://kit.fontawesome.com/a22a95d308.js" crossorigin="anonymous"></script>




</head>

<body>

	<!-- warp -->


	<div class="wrap">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col d-flex align-items-center">
					<p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="#">+6289606351919</a> or <span class="mailus">email us:</span> <a href="https://mail.google.com/mail/u/0/#inbox/FMfcgxwHNCxQSmbJrLMhCSLHHlhfMZTm?compose=new">ngotelyuk@gmail.com</a></p>
				</div>
				<div class="col d-flex justify-content-end">
					<div class="social-media">
						<p class="mb-0 d-flex">
							<a href="" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	</nav>
	<!-- coronavirus  -->
	<div class=".container-fluid bg-light">
		<h5 class="pt-3 p-2 " style="font-family:Consolas"><i class="fa fa-heartbeat text-primary " aria-hidden="true"></i>
			Dukungan terkait Coronavirus (COVID-19)
		</h5>



	</div>

	<!-- breadcum -->
	<br>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb bg-transparent">
			<li class="breadcrumb-item"><a href="index.php">Halaman utama</a></li>
			<li class="breadcrumb-item active" aria-current="page"><?= $mhs["nama_hotel"]; ?></li>
		</ol>
	</nav>


	<!-- side bar -->
	<div class="row mt-1 fixed-left">
		<div class="col-md-2 bg-white">


			<ul class="list-group p-2 pt-3 ">
				<div class="list-group">
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
						Boking Now
					</button>




				</div>
			</ul>

			<ul class="list-group p-2 pt-3">
				<li class="list-group-item active" style="text-align: center;">Info</li>

				<li class="list-group-item"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-building" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
						<path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
					</svg><?= $mhs["kota"]; ?></li>

				<li class="list-group-item"><?= $mhs["jumlah_kasur"]; ?> Bed</li>
				<li class="list-group-item"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-egg-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path d="M14 10a6 6 0 0 1-12 0C2 5.686 5 0 8 0s6 5.686 6 10z" />
					</svg><?= $mhs["fitur1"]; ?></li>
				<li class="list-group-item"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-wifi" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path d="M15.385 6.115a.485.485 0 0 0-.048-.736A12.443 12.443 0 0 0 8 3 12.44 12.44 0 0 0 .663 5.379a.485.485 0 0 0-.048.736.518.518 0 0 0 .668.05A11.448 11.448 0 0 1 8 4c2.507 0 4.827.802 6.717 2.164.204.148.489.13.668-.049z" />
						<path d="M13.229 8.271c.216-.216.194-.578-.063-.745A9.456 9.456 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.577 1.336c.205.132.48.108.652-.065zm-2.183 2.183c.226-.226.185-.605-.1-.75A6.472 6.472 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.408.19.611.09A5.478 5.478 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.611-.091l.015-.015zM9.06 12.44c.196-.196.198-.52-.04-.66A1.99 1.99 0 0 0 8 11.5a1.99 1.99 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .708 0l.707-.707z" />
					</svg>Free Wifi</li>
			</ul>

		</div>




		<div class="col-md-9 row-mt-4 ">

			<!-- nama hotel -->
			<h3 class="text-primary"><?= $mhs["nama_hotel"]; ?></h3>


			<!-- lokasi -->
			<p> <i class="fas fa-thumbtack"> </i><?= $mhs["lokasi"]; ?></p>


			<!-- courosel -->
			<div class="col-lg-3 col-md-4 col-xs-4 thumb ">
				<a class="thumbnail" href="#">
					<img class="img-responsive" src="img/<?= $mhs["gambar"]; ?>" alt="">
				</a>
			</div>
			<!-- end crousel -->


			<br>
			<!-- container -->


			<div class="alert alert-secondary" role="alert">
				<h6><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-unlock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path d="M.5 9a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2V9z" />
						<path fill-rule="evenodd" d="M8.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z" />
					</svg>
					Kunci harga terbaik untuk masa inap Anda berikutnya
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</h6>
				<hr>
				<p>Dapatkan konfirmasi instan dengan pembatalan GRATIS di sebagian besar akomodasi di situs kami!</p>
			</div>


			<!-- deskripsi lengkap -->

			<p><?= $mhs["deskripsi_lengkap"]; ?>
			</p>
			<!-- end deskripsi -->


			<!-- tabel -->
			<br>
			<h6>Jenis Kamar</h6>
			<table class="table">
				<thead>
					<tr class="bg-dark">
						<th scope="col">Muat</th>
						<th scope="col">Tipe kamar</th>
						<th scope="col">Jenis Kasur</th>
					</tr>
				</thead>
				<tr>
					<th scope="row">
						<i class="fas fa-male"></i>
						Singel
					</th>
					<td>Kamar Economy Double</td>
					<td>
						1 double
					</td>
				</tr>

				<tr>
					<th scope="row">
						<i class="fas fa-male"></i><i class="fas fa-male"></i>
						Double
					</th>
					<td> Kamar Twin</td>
					<td>
						2 Singel
					</td>
				</tr>

				<tr>
					<th scope="row">
						<i class="fas fa-male"></i><i class="fas fa-male"></i>
						Double
					</th>
					<td> Kamar Double</td>
					<td>
						1 double
					</td>
				</tr>
			</table>

			<br>
			<br>


			<!-- tabel harga -->
			<h6>List Harga</h6>

			<table class="table">

				<tr class="bg-dark">
					<th scope="col">Jenis</th>
					<th scope="col">List</th>
					<th scope="col">Total</th>
				</tr>


				<tr>
					<th scope="row">
						<i class="fas fa-male"></i><i class="fas fa-male"></i>
						Kamar Economy Double
					</th>
					<td>RP:<?= $mhs["harga"]; ?>+Pajak</td>
					<th scope="row">Rp:
						<?php
						$hasil = $mhs["harga"] + $pajak;
						echo $hasil;
						?>

					</th>

				</tr>
				<tr>
					<th scope="row">
						<i class="fas fa-male"></i><i class="fas fa-male"></i>
						Twin
					</th>
					<td>RP:<?= $mhs["harga"]; ?>+Pajak+Tambahan Kasur</td>
					<th scope="row">Rp:
						<?php
						$hasil2 = $mhs["harga"] + $pajak + $kasurking;
						echo $hasil2;
						?>

					</th>

				</tr>
				<tr>
					<th scope="row">
						<i class="fas fa-male"></i><i class="fas fa-male"></i>
						Kamar Double
					</th>
					<td>RP:<?= $mhs["harga"]; ?>+Pajak+Tambahan Kasur</td>
					<th scope="row">Rp:
						<?php
						$hasil2 = $mhs["harga"] + $pajak + $kasurking;
						echo $hasil2;
						?>

					</th>


				</tr>


			</table>

		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header bg-primary">
					<h5 class="modal-title" id="exampleModalLabel">Form Pemesanan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row justify-content-center">


						<div class="card-body">

							<div class="col-sm-9">
								<form action="" method="POST">
									<input type="hidden" autocomplete="off" name="nama_hotel1" class="form-control" value="<?= $mhs["nama_hotel"]; ?>">
									<div class="form-group">
										<label for="chekin">Checkin</label>
										<input type="date" id="chekin" name="checkin" class="form-control">
										</small>
									</div>
									<div class="form-group">
										<label for="checkout">checkout</label>
										<input type="date" id="checkout" name="checkout" class="form-control">
										</small>
									</div>
									<div class="form-group ">
										<label for="nama_pengunjung">Nama</label>
										<input type="text" autocomplete="off" name="nama_pengunjung" class="form-control">
										</small>
									</div>

									<input type="hidden" autocomplete="off" name="room_type" class="form-control" value="<?= $mhs["jenis_kamar"]; ?>">

									<div class="form-group ">
										<label for="occupants">occupants</label>
										<input type="text" autocomplete="off" name="occupants" class="form-control">
										</small>
									</div>
									<div class="form-group ">
										<label for="night">night</label>
										<input type="text" autocomplete="off" name="night" class="form-control">
										</small>
									</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<input type="submit" name="submit" class="btn btn-primary btn-lg btn-block">
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>






	<!-- footer and copyright -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-3 mb-md-0 mb-4">
					<h2 class="footer-heading"><a href="#" class="logo">Ngotel<span>Yuk</span></a></h2>
					<p>Ekosistem yang memberikan keuntungan kepada para pelancong dan partner penginapan. Pelanggan yang memesan Ngotelyuk dipastikan menikmati sebuah pengalaman menyenangkan.</p>
					<a href="#">Read more <span class="fa fa-chevron-right" style="font-size: 11px;"></span></a>
				</div>
				<div class="col-md-6 col-lg-3 mb-md-0 mb-4">
					<h2 class="footer-heading">Services</h2>
					<ul class="list-unstyled">
						<li class="py-1 d-block">Map Direction</li>
						<li class="py-1 d-block">Accomodation Services</li>
						<li class="py-1 d-block">Great Experience></li>
						<li class="py-1 d-block">Perfect central location</li>
					</ul>
				</div>
				<div class="col-md-6 col-lg-3 mb-md-0 mb-4">
					<h2 class="footer-heading">Tag cloud</h2>
					<div class="tagcloud">
						<a href="#" class="tag-cloud-link">apartment</a>
						<a href="#" class="tag-cloud-link">home</a>
						<a href="#" class="tag-cloud-link">rent</a>
						<a href="#" class="tag-cloud-link">house</a>
						<a href="#" class="tag-cloud-link">place</a>
						<a href="#" class="tag-cloud-link">drinks</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 mb-md-0 mb-4">
					<h2 class="footer-heading">Subcribe</h2>
					<form action="#" class="subscribe-form">
						<div class="form-group d-flex">
							<input type="text" class="form-control rounded-left" placeholder="Enter email address">
							<button type="submit" class="form-control submit rounded-right"><span class="sr-only">Submit</span><i class="fa fa-paper-plane"></i></button>
						</div>
					</form>
					<h2 class="footer-heading mt-5">Follow us</h2>
					<ul class="ftco-footer-social p-0">
						<li class="ftco-animate"><a href="" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
						<li class="ftco-animate"><a href="https://web.facebook.com/aldi.fauzan.71" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
						<li class="ftco-animate"><a href="" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="w-100 mt-5 border-top py-5">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-8">
						<!-- scipt js -->
						<script src="js/jquery.min.js"></script>
						<script src="js/jquery-migrate-3.0.1.min.js"></script>
						<script src="js/popper.min.js"></script>
						<script src="js/bootstrap.min.js"></script>
						<script src="js/jquery.easing.1.3.js"></script>
						<script src="js/jquery.waypoints.min.js"></script>
						<script src="js/jquery.stellar.min.js"></script>
						<script src="js/jquery.animateNumber.min.js"></script>
						<script src="js/bootstrap-datepicker.js"></script>
						<script src="js/jquery.timepicker.min.js"></script>
						<script src="js/owl.carousel.min.js"></script>
						<script src="js/jquery.magnific-popup.min.js"></script>
						<script src="js/scrollax.min.js"></script>
						<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
						<script src="js/google-map.js"></script>
						<script src="js/main.js"></script>

</html>