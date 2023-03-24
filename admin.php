<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM hotel");
$mabar = query("SELECT * FROM blog");
session_start();
if (!isset($_SESSION["login"])) {
  header("location:login.php");
  exit;
}
date_default_timezone_set('Asia/Jakarta');
$date = date('l, d-m-Y  h:i:s a');


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

<body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">Liburan<span>Admin</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="databasehotel.php" class="nav-link">Database Hotel</a></li>
          <li class="nav-item"><a href="setblog.php" class="nav-link">Set Blog</a></li>
          <li class="nav-item"><a href="Registrasi.php" class="nav-link">Insert New Admin</a></li>
          <li class="nav-item"><a href="listreservasi.php" class="nav-link">List Reservasi</a></li>
          <li class="nav-item"><a href="logout.php" class="nav-link">logout</a></li>
        </ul>
      </div>
    </div>
  </nav>



  <!-- list admin  -->
  <!-- jambutron -->
  <section class="ftco-section bg-light">
    <div class="container-fluid px-md-0">
      <div class="row no-gutters justify-content-center pb-5 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <h2>Welcome Admin</h2>
          <span class="subheading">Welcome to our ecosystem</span>
          <h6><?php echo $date; ?></h6>
        </div>
      </div>
      <!-- end jambutron -->

      <!-- Database  -->
      <div class="row no-gutters">
        <div class="col-lg-6">
          <div class="room-wrap d-md-flex">
            <a href="database.php" class="img" style="background-image: url(images/data.jpg);"></a>
            <div class="half left-arrow d-flex align-items-center">
              <div class="text p-4 p-xl-5 text-center">
                <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
                <!-- <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p> -->
                <h3 class="mb-3"><a href="databasehotel.php">Database Hotel</a></h3>
                <ul class="list-accomodation">
                  <?php foreach ($mahasiswa as $row) : ?>

                    <li>
                      <?php echo $row["nama_hotel"]; ?>
                    </li>
                  <?php endforeach; ?>
                </ul>
                <br><br>

              </div>
            </div>
          </div>
        </div>
        <!-- end database -->

        <!-- index area -->
        <div class="col-lg-6">
          <div class="room-wrap d-md-flex">
            <a href="index.php" class="img" style="background-image: url(images/index.jpg);"></a>
            <div class="half left-arrow d-flex align-items-center">
              <div class="text p-4 p-xl-5 text-center">
                <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
                <!-- <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p> -->
                <h3 class="mb-3"><a href="rooms.html">Index Menu</a></h3>
                <ul class="list-accomodation">
                  <li>List Reservasi</li>

                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- end index -->

        <!-- Registrasi -->
        <div class="col-lg-6">
          <div class="room-wrap d-md-flex">
            <a href="registrasi.php" class="img order-md-last" style="background-image: url(images/registrasi.jpg);"></a>
            <div class="half right-arrow d-flex align-items-center">
              <div class="text p-4 p-xl-5 text-center">
                <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
                <!-- <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p> -->
                <h3 class="mb-3"><a href="registrasi.php">Registrasi</a></h3>
                <ul class="list-accomodation">
                  <li>insert new admin in here</li>
                </ul>

              </div>
            </div>
          </div>
        </div>
        <!-- end registrasi -->

        <div class="col-lg-6">
          <div class="room-wrap d-md-flex">
            <a href="tambah.php" class="img order-md-last" style="background-image: url(images/insert.jpg);"></a>
            <div class="half right-arrow d-flex align-items-center">
              <div class="text p-4 p-xl-5 text-center">
                <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
                <!-- <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p> -->
                <h3 class="mb-3"><a href="tambah.php">Insert New Hotel</a></h3>
                <ul class="list-accomodation">
                  <li>insert Hotel baru disini</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- jambutron -->
  <section class="ftco-section bg-light">
    <div class="container-fluid px-md-0">
      <div class="row no-gutters justify-content-center pb-5 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <h2>List Blog</h2>

        </div>
      </div>
      <!-- end jambutron -->

      <section class="ftco-section bg-light">
        <div class="container">
          <div class="row  mx auto">
            <?php foreach ($mabar as $row) : ?>
              <div class="col-md-4 d-flex ftco-animate" style="width: 50%">
                <div class="blog-entry align-self-stretch">
                  <a href="blog-single.html" class="block-20 rounded" style="background-image: url('img/<?php echo $row["gambarblog"] ?>');">
                  </a>
                  <div class="text p-4 text-center">
                    <h3 class="heading"><a href="#"><?php echo $row["judul"]; ?></a></h3>
                    <div class="meta mb-2">

                    </div>
                    <p><?php echo $row["awal"]; ?></p>
                  </div>


                  <a href="detailblog.php?id=<?= $row["id"]; ?>"" class=" btn btn-primary btn-lg ml-4" role="button" aria-pressed="true">Read More</a>
                  <a href="hapusblog.php?id=<?php echo $row["id"] ?>" class="btn btn-primary btn-sm active btn-dark ml-5" role="button" aria-pressed="true" onclick="return confirm('yakin');">Delete Hotel</a>
                </div>
              </div>
            <?php endforeach; ?>



          </div>
        </div>

      </section>


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