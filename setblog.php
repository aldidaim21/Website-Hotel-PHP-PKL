<?php

require 'functions.php';
session_start();
if (!isset($_SESSION["login"])) {
    header("location:login.php");
    exit;
}
// koneksi data base
$conn = mysqli_connect("localhost", "root", "", "ngotel");
// cek apakah tombol submit 
if (isset($_POST["submit"])) {



    if (blog($_POST) > 0) {
        echo "
			<script>
			alert('data berhasil ditambahkan!');
			document.location.href='admin.php';
			</script>

	";
    } else {
        echo "<script>
			alert('data gagal ditambahkan!');
			document.location.href='setblog.php';
			</script>";
    }
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Set Blog</title>
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
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/database.jpg');" data-stellar-background-ratio="1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="admin.php">Admin<i class="fa fa-chevron-right"></i></a></span> <span>Set Blog<i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Set Blog</h1>
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



                <div class="container align-items-center">
                    <label for="judul" class="col-sm-2 col-form-label col-form-label-sm">Judul</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" name="judul" id="judul" autocomplete="off">
                    </div>
                </div>

                <div class="container align-items-center">
                    <label for="awal" class="col-sm-2 col-form-label col-form-label-sm">Deskripsi awal</label>
                    <input type="text" class="form-control form-control-sm" name="awal" id="awal" autocomplete="off">
                    <div class="col-sm-9">
                        <textarea class="form-control" name="awal" id="awal"></textarea>
                    </div>
                </div>
        </div>


        <div class="container">
            <label for="p1" class="col-sm-2 col-form-label col-form-label-sm">Paragraf 1</label>
            <div class="col-sm-9">
                <textarea class="form-control" name="p1" id="p1"></textarea>
            </div>
        </div>
        <div class="container">
            <label for="p2" class="col-sm-2 col-form-label col-form-label-sm">Paragraf 2</label>
            <div class="col-sm-9">
                <textarea class="form-control" name="p2" id="p2"></textarea>
            </div>
        </div>

        <div class="container">
            <label for="p3" class="col-sm-2 col-form-label col-form-label-sm">Paragraf 3</label>
            <div class="col-sm-9">
                <textarea class="form-control" name="p3" id="p3"></textarea>
            </div>
        </div>

        <div class="container">
            <label for="p4" class="col-sm-2 col-form-label col-form-label-sm">Paragraf 4</label>
            <div class="col-sm-9">
                <textarea class="form-control" name="p4" id="p4"></textarea>
            </div>
        </div>

        <div class="container">
            <label for="p5" class="col-sm-2 col-form-label col-form-label-sm">Paragraf 5</label>
            <div class="col-sm-9">
                <textarea class="form-control" name="p5" id="p5"></textarea>
            </div>
        </div>
        <div class="container">
            <label for="p6" class="col-sm-2 col-form-label col-form-label-sm">Paragraf 6</label>
            <div class="col-sm-9">
                <textarea class="form-control" name="p6" id="p6"></textarea>
            </div>
        </div>

        <div class="container">
            <label for="p7" class="col-sm-2 col-form-label col-form-label-sm">Paragraf 7</label>
            <div class="col-sm-9">
                <textarea class="form-control" name="p7" id="p7"></textarea>
            </div>
        </div>
        <br>

        <div class="container">
            <div class="custom-file col-sm-9">
                <input type="file" class="custom-file-input col-sm-9" name="gambarblog" id="gambarblog" id="customFile">
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