<?php

session_start();
if (!isset($_SESSION["login"])) {
  header("location:login.php");
  exit;
}

require 'functions.php';
$mahasiswa = query("SELECT * FROM hotel");




?>


<!DOCTYPE html>
<html>

<head>
  <title>Ngotelyuk/admin</title>
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

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/database.jpg');" data-stellar-background-ratio="1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="admin.php">Admin<i class="fa fa-chevron-right"></i></a></span> <span>Database Hotel<i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">Database Hotel</h1>
      </div>
    </div>
  </div>
</section>





<section class="ftco-section bg-light">
  <div class="container">
    <div class="row  mx auto">
      <?php foreach ($mahasiswa as $row) : ?>
        <div class="col-md-4 d-flex ftco-animate" style="width: 50%">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20 rounded" style="background-image: url('img/<?php echo $row["gambar"] ?>');">
            </a>
            <div class="text p-4 text-center">
              <h3 class="heading"><a href="#"><?php echo $row["nama_hotel"]; ?></a></h3>
              <div class="meta mb-2">

                <div><a href="#">Rp:<?php echo $row["harga"]; ?></a></div>

              </div>
              <p><?php echo $row["deskripsi"]; ?></p>
            </div>

            <div style="text-align: center;"><a href="#"><?php echo $row["bintang"]; ?></a></div>
            <a href="ubahhotel.php?id=<?= $row["id"]; ?>" class="btn btn-primary btn-lg ml-4" role="button" aria-pressed="true">Change data</a>
            <a href="hapushotel.php?id=<?php echo $row["id"] ?>" class="btn btn-primary btn-sm active btn-dark ml-5" role="button" aria-pressed="true" onclick="return confirm('yakin');">Delete Hotel</a>
          </div>
        </div>
      <?php endforeach; ?>



    </div>
  </div>

</section>




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