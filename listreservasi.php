<?php
require 'functions.php';

session_start();
if (!isset($_SESSION["login"])) {
    header("location:login.php");
    exit;
}

$mahasiswa = query("SELECT * FROM reservasi");
date_default_timezone_set('Asia/Jakarta');
$date = date('l, d-m-Y  h:i:s a');

?>



<!DOCTYPE html>
<html>

<head>
    <title>List Reservasi</title>
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
                    <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="databasehotel.php" class="nav-link">Database Hotel</a></li>
                    <li class="nav-item"><a href="setblog.php" class="nav-link">Set Blog</a></li>
                    <li class="nav-item"><a href="Registrasi.php" class="nav-link">Insert New Admin</a></li>
                    <li class="nav-item active"><a href="listreservasi.php" class="nav-link">List Reservasi</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- jambutron -->
    <section class="ftco-section bg-light">
        <div class="container-fluid px-md-0">
            <div class="row no-gutters justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>List Reservasi </h2>
                    <span class="subheading"></span>
                    <h6><?php echo $date ?></h6>
                </div>
            </div>
        </div>
    </section>
    <!-- end jambutron -->

    <?php foreach ($mahasiswa as $row) : ?>
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1"><?php echo $row["nama_hotel1"]; ?></h5>
                    <small><?php echo $row["checkin"]; ?></small>
                </div>
                <p class="mb-1"><?php echo $row["nama_pengunjung"]; ?></p>
                <small><?php echo $row["room_type"]; ?></small>
            </a>
        </div>
    <?php endforeach ?>
</body>

<!-- script -->
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