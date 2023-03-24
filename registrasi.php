<?php

session_start();
if (!isset($_SESSION["login"])) {
    header("location:login.php");
    exit;
}

require 'functions.php';
if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
			alert ('user baru berhasil ditambahkan')
			</script>;
		";
    } else {
        echo mysqli_error($conn);
    }
}





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
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
    <!-- end script -->

</head>

<body>


    <body>
        <!-- section -->
        <section class="hero-wrap hero-wrap-2" style="background-image: url('images/database.jpg');" data-stellar-background-ratio="1">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center">
                    <div class="col-md-9 ftco-animate text-center">
                        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="admin.php">Admin<i class="fa fa-chevron-right"></i></a></span> <span>Insert new Admin<i class="fa fa-chevron-right"></i></span></p>
                        <h1 class="mb-0 bread">Insert new Admin</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->



        <!-- form login -->
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-center bg-primary mb-0">

                        </div>
                        <div class="card-body">

                            <!-- form  -->
                            <form action="" method="POST">
                                <div class="form-group ">
                                    <label for="username">username:</label>
                                    <input type="text" autocomplete="off" name="username" class="form-control" placeholder="Username">
                                    <small id="passwordHelpInline" class="text-muted"> Make sure the username you will use is unique.
                                    </small>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="password">Password:</label>
                                    <input type="password" id="password" autocomplete="off" name="password" class="form-control" placeholder="Password">
                                    <small id="passwordHelpInline" class="text-muted"> Must be 8-20 characters long.
                                    </small>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="password2">Check Your Password</label>
                                    <input type="password" name="password2" autocomplete="off" class="form-control" placeholder="Konfirmasi Password">
                                </div>
                                <br>
                                <div class="form-group">
                                    <input type="submit" name="register" value="submit" class="btn btn-primary btn-block">
                                </div>
                            </form>
                            <!-- end form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

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