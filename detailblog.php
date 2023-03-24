<?php
require 'functions.php';
// ambil data di url
$id = $_GET["id"];
// query data mahasiswa 
$mhs = query("SELECT * FROM blog WHERE id = $id")[0];

?>



<!DOCTYPE html>
<html>

<head>
    <title><?= $mhs["judul"]; ?></title>
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
            <li class="breadcrumb-item"><a href="blog.php">Blog</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $mhs["judul"]; ?></li>
        </ol>
    </nav>


    <!-- side bar -->
    <div class="row mt-1 fixed-left">
        <div class="col-md-2 bg-white">


            <ul class="list-group p-2 pt-3 ">
                <div class="list-group">
                    <a href="Index.php" class="list-group-item list-group-item-action active bg-primary " style="text-align: center;">
                        Halaman Utama
                    </a>

                </div>
            </ul>

            <ul class="list-group p-2 pt-3">

            </ul>

        </div>




        <div class="col-md-9 row-mt-4 ">

            <!-- nama hotel -->
            <h2><?= $mhs["judul"]; ?></h2>




            <!-- courosel -->
            <div class="col-lg-3 col-md-4 col-xs-4 thumb ">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="img/<?= $mhs["gambarblog"]; ?>" alt="">
                </a>
            </div>
            <!-- end crousel -->


            <br>
            <!-- ISI -->
            <wrap class="col-lg-1" style="text-align:justify;">
                <p><?= $mhs["p1"]; ?></p>
                <p><?= $mhs["p2"]; ?></p>
                <p><?= $mhs["p3"]; ?></p>
                <p><?= $mhs["p4"]; ?></p>
                <p><?= $mhs["p5"]; ?></p>
                <p><?= $mhs["p6"]; ?><?= $mhs["p7"]; ?></p>

                <!-- end -->
            </wrap>
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