<?php
session_start();

require 'functions.php';

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];


    $result = mysqli_query($conn, "SELECT * FROM admin WHERE username ='$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {


        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {

            // set session
            $_SESSION["login"] = true;


            header("location:admin.php");
            exit;
        }
    }

    $error = true;
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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


<body style="background-image: url('images/bg_1.jpg');">
    <?php if (isset($error)) : ?>
        <p style="color: red;font-style: italic;">username passsword salah!!!</p>
    <?php endif; ?>

    <br>

    <h1 style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;" class="text-muted text-center">LOGIN</h1>


    <!-- form login -->
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
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
                                <input type="submit" name="login" value="submit" class="btn btn-primary btn-block">
                            </div>
                        </form>
                        <!-- end form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>