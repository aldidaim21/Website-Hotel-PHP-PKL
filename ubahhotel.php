<?php
require 'functions.php';
// ambil data di url
$id = $_GET["id"];
// query data mahasiswa 
$mhs = query("SELECT * FROM hotel WHERE id = $id")[0];

session_start();
if (!isset($_SESSION["login"])) {
	header("location:login.php");
	exit;
}



// cek apakah tombol submit 
if (isset($_POST["submit"])) {


	if (ubah1($_POST) > 0) {
		echo "
			<script>
			alert('data berhasil diubah!');
			document.location.href='databasehotel.php';
			</script>

	";
	} else {
		echo "<script>
			alert('data gagal diubah!');
			document.location.href='databasehotel.php';
			</script>";
	}
}





?>

<!DOCTYPE html>
<html>

<head>
	<title>Change Database Hotel</title>
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
</head>

<body>
	<!-- section -->
	<section class="hero-wrap hero-wrap-2" style="background-image: url('img/<?= $mhs["gambar"]; ?>');" data-stellar-background-ratio="1">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<p class="breadcrumbs mb-2"><span class="mr-2"><a href="admin.php">Admin<i class="fa fa-chevron-right"></i></a></span>
						<span class="mr-2"><a href="Database Hotel.php">Database Hotel<i class="fa fa-chevron-right"></i></a>
							<span>Change data<i class="fa fa-chevron-right"></i></span></p>
					<h1 class="mb-0 bread"><?= $mhs["nama_hotel"]; ?></h1>
				</div>
			</div>
		</div>
	</section>

	<!-- end section -->
	<br><br>
	<center>
		<!-- form -->
		<div class="container align-items-center mr-2 ml-2 p-3">
			<form action="" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
				<input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">


				<div class="container align-items-center">
					<label for="nama_hotel" class="col-sm-2 col-form-label col-form-label-sm">nama hotel</label>
					<div class="col-sm-9">
						<input type="text" class="form-control form-control-sm" name="nama_hotel" id="nama_hotel" value="<?= $mhs["nama_hotel"]; ?>" autocomplete="off">
					</div>
				</div>

				<div class="container">
					<label for="lokasi" class="col-sm-2 col-form-label col-form-label-sm">lokasi</label>
					<div class="col-sm-9">
						<input type="text" class="form-control form-control-sm" name="lokasi" id="lokasi" id="colFormLabelSm" value="<?= $mhs["lokasi"]; ?>" autocomplete="off">
					</div>
				</div>

				<div class="container">
					<label for="jenis_kamar" class=" col-sm-2 col-form-label col-form-label-sm">jenis kamar</label>
					<div class="col-sm-9">
						<select class="custom-select mr-sm-2 form-control form-control-sm" id="jenis_kamar" name="jenis_kamar" value="<?= $mhs["jenis_kamar"]; ?>">
							<option selected>Choose...</option>
							<option value="Standard Room">Standard Room</option>
							<option value="Superior Room">Superior Room.</option>
							<option value="Deluxe Room">Deluxe Room.</option>
							<option value="Junior Suite Room">Junior Suite Room.</option>
							<option value="Suite Room">Suite Room.</option>
							<option value="Presidential Suite">Presidential Suite.</option>
						</select>
					</div>
				</div>

				<div class="container">
					<label for="jumlah_kasur" class=" col-sm-2 col-form-label col-form-label-sm">jumlah_kasur</label>
					<div class="col-sm-9">
						<select class="custom-select mr-sm-2 form-control form-control-sm" id="jumlah_kasur" name="jumlah_kasur">
							<option selected><?= $mhs["jenis_kamar"]; ?></option>
							<option value='<i class="fas fa-bed"></i>'>1 bed</option>
							<option value='<i class="fas fa-bed"></i> <i class="fas fa-bed"></i>'>2 bed</option>
							<option value='<i class="fas fa-bed"></i><i class="fas fa-bed"></i><i class="fas fa-bed"></i>'>3 bed</option>
							<option value='<i class="fas fa-bed"></i><i class="fas fa-bed"></i><i class="fas fa-bed"></i>'>4bed</option>
							<option value='<i class="fas fa-bed"></i><i class="fas fa-bed"></i><i class="fas fa-bed"></i><i class="fas fa-bed"></i><i class="fas fa-bed"></i>'>5bed</option>
							<option value='<i class="fas fa-bed"></i><i class="fas fa-bed"></i><i class="fas fa-bed"></i><i class="fas fa-bed"></i><i class="fas fa-bed"></i><i class="fas fa-bed"></i>'>6bed</option>
						</select>
					</div>
				</div>

				<div class="container">
					<label for="fitur1" class="col-sm-2 col-form-label col-form-label-sm">fitur1</label>
					<div class="col-sm-9">
						<input type="text" class="form-control form-control-sm" name="fitur1" id="fitur1" value="<?= $mhs["fitur1"]; ?>" autocomplete="off">
					</div>
				</div>




				<div class="container">
					<label for="deskripsi" class="col-sm-2 col-form-label col-form-label-sm">deskripsi</label>
					<div class="col-sm-9">
						<input type="text" class="form-control form-control-sm" name="deskripsi" id="deskripsi" value="<?= $mhs["deskripsi"]; ?>" autocomplete="off">
					</div>
				</div>


				<div class="container">
					<label for="deskripsi_lengkap" class="col-sm-2 col-form-label col-form-label-sm">deskripsi lengkap</label>
					<div class="col-sm-9">
						<input type="text" class="form-control form-control-sm" name="deskripsi_lengkap" id="deskripsi_lengkap" value="<?= $mhs["deskripsi_lengkap"]; ?>" autocomplete="off">
					</div>
				</div>

				<div class="container">
					<label for="kota" class="col-sm-2 col-form-label col-form-label-sm">kota</label>
					<div class="col-sm-9">
						<input type="text" class="form-control form-control-sm" name="kota" value="<?= $mhs["kota"]; ?>" id="kota">
					</div>
				</div>


				<div class="container">
					<label for="harga" class="col-sm-2 col-form-label col-form-label-sm">harga</label>
					<div class="col-sm-9">
						<input type="text" class="form-control form-control-sm" name="harga" id="harga" value="<?= $mhs["harga"]; ?>" autocomplete="off">
					</div>
				</div>




				<div class="container">
					<label for="bintang" class="col-sm-2 col-form-label col-form-label-sm">bintang</label>
					<div class="col-sm-9">
						<input type="text" class="form-control form-control-sm" name="bintang" id="bintang" value="<?= $mhs["bintang"]; ?>">
					</div>
				</div>


				<br>

				<div class="container">
					<div class="custom-file col-sm-9">
						<input type="file" class="custom-file-input col-sm-9" name="gambar" id="gambar" id="customFile">
						<label class="custom-file-label" for="customFile">Choose Picture</label>
					</div>
				</div>
				<br>

				<div class="container">
					<button type="submit" name="submit" class="col-sm-9 btn btn-primary btn-lg btn-block align-items-center">Submit</button>
				</div>


				<br><br>




		</div>

		</form>
		<!-- end form -->
	</center>

</body>
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