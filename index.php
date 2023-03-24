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
          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="listhotel.php" class="nav-link">List Hotel</a></li>
          <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">
              Customer care</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end navbar -->

  <!-- tampilan 1 -->

  <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate">
          <h2 class="subheading">Ngotelyuk</h2>
          <h1 class="mb-4">Ngotelyuk</h1>
          <p><a href="#" class="btn btn-primary">Learn more</a> <a href="#" class="btn btn-white">Contact us</a></p>
        </div>
      </div>
    </div>
  </div>
  <!-- jambotron-->

  <section class="ftco-section ftco-services">
    <div class="container">
      <div class="row">
        <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
          <div class="d-block services-wrap text-center">
            <div class="img" style="background-image: url(images/services-1.jpg);"></div>
            <div class="media-body py-4 px-3">
              <h3 class="heading">Map Direction</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              <p><a href="#" class="btn btn-primary">Read more</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
          <div class="d-block services-wrap text-center">
            <div class="img" style="background-image: url(images/services-2.jpg);"></div>
            <div class="media-body py-4 px-3">
              <h3 class="heading">Accomodation Services</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              <p><a href="#" class="btn btn-primary">Read more</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
          <div class="d-block services-wrap text-center">
            <div class="img" style="background-image: url(images/services-3.jpg);"></div>
            <div class="media-body py-4 px-3">
              <h3 class="heading">Great Experience</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              <p><a href="#" class="btn btn-primary">Read more</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- service for costumer -->
  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row no-gutters">
        <div class="img img-2 mb-4" style="background-image: url(images/about.jpg)">
        </div>
        <h2>Ngotelyukkk</h2>
        <p>Ekosistem yang memberikan keuntungan kepada para pelancong dan partner penginapan. Pelanggan yang memesan Ngotelyuk dipastikan menikmati sebuah pengalaman menyenangkan di seluruh properti dengan harga terbaik di pasar, saat kamu menikmati sebuah rangkaian standarisai perlengkapan termasuk wifi gratis, kamar yang bersih, tempat tidur yang nyaman, TV dan air mineral. Apikasi mobile kami (unduh secara gratis, untuk Android dan iOS) mengizinkan pengguna untuk memesan sebuah kamar dengan beberapa tahapan, menyediakan sebuah pengalaman yang mudah dan aman untuk kemudian mendapatkan poin untuk penginapan kamu yang berikutnya.</p>
      </div>
      <div class="col-md-6 wrap-about ftco-animate">
        <div class="heading-section">
          <div class="pl-md-5">
            <h2 class="mb-2">Apa yang kami tawarkan</h2>
          </div>
        </div>
        <div class="pl-md-5">
          <p>Sebuah kenyamanan yang bisa anda dapatkan ketika anda memesan di website kami anda akan mendapatkan banyak hal.</p>
          <div class="row">
            <div class="services-2 col-lg-6 d-flex w-100">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-diet"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Teh dan Kopi</h3>
                <p>Anda akan mendapatkan sebuah pack kopi atau teh di pagi hari atau malam hari</p>
              </div>
            </div>
            <div class="services-2 col-lg-6 d-flex w-100">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-workout"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Showers Air hangat</h3>
                <p>Untuk menambah kenyamanan anda, Anda akan mendapatkan fasilitas shower air panas </p>
              </div>
            </div>
            <div class="services-2 col-lg-6 d-flex w-100">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-diet-1"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Laundry</h3>
                <p>Setiap kamar dilengkapi dengan sebuah mesin cuci dan balkon untuk anda mencuci atau menjemur</p>
              </div>
            </div>
            <div class="services-2 col-lg-6 d-flex w-100">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-first"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Air Conditioning</h3>
                <p>setiap kamar dilenkapi air conditioning untuk menjaga agar kamar anda tetap sejuk dan bersih</p>
              </div>
            </div>
            <div class="services-2 col-lg-6 d-flex w-100">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-first"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Free Wifi</h3>
                <p>Semua kamar di Hotel kami akan mendapatkan 24 jam jarigan wifi dengan kulaitas up to 10Mbps</p>
              </div>
            </div>
            <div class="services-2 col-lg-6 d-flex w-100">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-first"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Kitchen</h3>
                <p>Setiap kamar akan mendapatkan minimal sebuah mini kitchen b</p>
              </div>
            </div>
            <div class="services-2 col-lg-6 d-flex w-100">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-first"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Ironing</h3>
                <p>Setiap kamar akan mendapatkan 1 Setrika yang bisa dipakai untuk merapihkan baju anda</p>
              </div>
            </div>
            <div class="services-2 col-lg-6 d-flex w-100">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-first"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">24Jam Service</h3>
                <p>service yang kami berikan selama 24 jam </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>





  <!-- konten -->



  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/listbg.jpg');" data-stellar-background-ratio="1">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">

          <h1 class="mb-0 bread">List hotel</h1>
        </div>

        <div class=" mx-sm-3 mb-2 ftco-animate">
          <form action="" method="POST">
            <input type="text" name="keyword" class="form-control" style="text-align: center;" placeholder="Cari Hotel">
            <button type="submit" name="cari" class="btn btn-primary btn-lg btn-block">Cari</button>
          </form>
        </div>

      </div>

    </div>
  </section>





  <!-- conten -->
  <section class="ftco-section bg-light">
    <?php foreach ($mahasiswa as $row) : ?>
      <div class="row justify-content-center pb-5 mb-3">
        <div class="col-md-4 d-flex ftco-animate">
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
            <a href="detail.php?id=<?= $row["id"]; ?>" class="btn btn-primary btn-lg btn-block">Detail</a>

          </div>

        </div>



      </div>
      </div>
    <?php endforeach; ?>
  </section>

  <section class="ftco-intro" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-9 text-center">
          <h2>Siap melayani anda</h2>
          <p class="mb-4">It’s safe to book online with us! Get your dream stay in clicks or drop us a line with your questions.</p>
          <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Book now</a> <a href="#" class="btn btn-white px-4 py-3">Contact us</a></p>
        </div>
      </div>
    </div>
  </section>
  <br><br>

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
    <div class="w-100 mt-5 border-top py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-8">
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