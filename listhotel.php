<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM hotel");


if (isset($_POST["cari"])) {
  $mahasiswa = cari($_POST["keyword"]);
}

?>


<!DOCTYPE html>
<html>

<head>
  <title>Ngotelyuk</title>
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

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">Ngotel<span>Yuk</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item active"><a href="listhotel.php" class="nav-link">List Hotel</a></li>
          <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Customer care</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end navbar -->


  <!-- wrap -->
  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/listbg.jpg');" data-stellar-background-ratio="1">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-0 bread">List hotel</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- endwrap -->

  <!-- wrap -->
  <div class="row justify-content-center mt-5">
    <section class="col-md-5 text-center">
      <div class=" mx-sm-3 mb-2 ftco-animate">
        <form action="" method="POST">
          <input type="text" name="keyword" class="form-control text-center" placeholder="Cari Hotel" autocomplete="off">
          <button type="submit" name="cari" class="btn btn-primary btn-lg btn-block">Cari</button>
        </form>
    </section>
  </div>
  <br>
  <!-- end wrap -->

  <!-- conten -->
  <section class="ftco-section bg-light">
    <?php foreach ($mahasiswa as $row) : ?>
      <div class="row justify-content-center pb-5 mb-3">
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="detail.php?id=<?= $row["id"]; ?>" class="block-20 rounded" style="background-image: url('img/<?php echo $row["gambar"] ?>');">
            </a>
            <div class="text p-4 text-center">
              <h3 class="heading"><a href="#"><?php echo $row["nama_hotel"]; ?></a></h3>
              <div class="meta mb-2">

                <div><a href="#"><?php echo $row["harga"]; ?></a></div>

              </div>
              <p><?php echo $row["deskripsi"]; ?></p>
            </div>

            <div style="text-align: center;"><a href="#"><?php echo $row["bintang"]; ?></a></div>
            <a href="detail.php?id=<?= $row["id"]; ?>" class="btn btn-primary btn-lg btn-block">Detail</a>

          </div>

        </div>



      </div>
      </div>
    <?php endforeach; ?>
    <!-- end konten -->


    <!-- footer and copyright -->
    <footer class="footer fix-button">
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
              <a href="#" class="tag-cloud-link">vacation</a>
              <a href="#" class="tag-cloud-link">rental</a>
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
<!-- copyright alert -->
<!--Aldi daim fauzan  -->