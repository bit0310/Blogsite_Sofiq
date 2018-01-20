
<?php

require_once 'vendor/autoload.php';
$login = new App\classes\Login();


$viewAllPublishedPost = $login->getAllPublishedPost();



?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sofiq-Blogsite</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/heroic-features.css" rel="stylesheet">
    <link href="assets/css/my.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <a href="index.html" class="navbar-brand"><img class="rounded-circle md" src="assets/images/badminton.jpg" style="height: 50px; width: 50px;" alt=""></a>

            <ul class="navbar-nav ml-0">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>

            </ul>
        </div>

        <a class="navbar-brand" href="admin/index.php">Admin Panel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>
</nav>

<!-- Page Content -->
<!-- Page Features -->
<div class="container">'
    <div class="row text-center">
        <div class="col-md-12" style="height: 500px;" >
            <table class="table table-bordered table-hover table-responsive-xl">
                <thead class="table-info">
                    <tr>
                        <th>Full Name</th>
                        <th>Email Address</th>
                        <th>phone Number</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Country</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td rowspan="2">S.M. SOFIQUL ISLAM</td>
                        <td >bit0310@iit.du.ac.bd
                            smsofiqulislam310@gmail.com</td>
                        <td rowspan="2">+880-1521409419</td>
                        <td rowspan="2">14,New Market Roal, BDR gate no:03.</td>
                        <td rowspan="2">dhaka</td>
                        <td rowspan="2">bangladesh</td>
                    </tr>

                </tbody>
            </table>

            <div id="myslider" class="carousel slide" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner bg-info text-center" style="color: red; font-size:25px;text-shadow: 1px 1px  black; border: 5px solid black;">
                    <div class="carousel-item active">
                        <h1>Name</h1>
                        <p>S.M. SOFIQUL ISLAM</p>
                    </div>
                    <div class="carousel-item ">
                        <h1>Mobile Number</h1>
                        <p>+880-1521409419.</p>
                    </div>
                    <div class="carousel-item ">
                        <h1>Address</h1>
                        <p>11,New Market Roal, BDR gate no:03.</p>
                    </div>

                    <div class="carousel-item ">
                        <h1>Email</h1>
                        <p>bit0310@iit.du.ac.bd</p>
                        <p>smsofiqulislam310@gmail.com</p>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>






<!-- /.row -->
<!-- /.container -->

<!-- Footer -->
<footer class="footer bg-dark">
    <div class="container">
        <div class="row ">

            <div class="bottom-left col-md-3">

                <div class="footer_menu">
                    <h4 style="color: white">Website</h4>
                    <ul class="bg-info">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="contact.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="bottom-left col-md-3">
                <div class="footer_menu">
                    <h4 style="color: white">About Us</h4>
                    <ul class="bg-info">
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
            </div>

            <div class="bottom-left col-md-3">
                <div class="footer_menu">
                    <h4 style="color: white">Support</h4>
                    <ul class="bg-info">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
            </div>

            <div class="bottom-left col-md-3 ">
                <div class="footer_menu ">
                    <h4 style="color: white">Legal</h4>
                    <ul class="bg-info">
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="bottom-center col-md-6 text-center m-auto">
                <div class="footer-social" >
                    <a href="https://www.facebook.com/smsofiqul.islam" target="_blank"><i class="fa fa-facebook" style="color: white" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/sofiqul_310" target="_blank"><i class="fa fa-twitter" style="color: white" aria-hidden="true"></i></a>
                    <a href="https://www.google.com" target="_blank"><i class="fa fa-google" style="color: white" aria-hidden="true"></i></a>
                    <a href="https://www.linkedin.com/in/smsofiqul-islam-310/" target="_blank"><i class="fa fa-linkedin" style="color: white" aria-hidden="true"></i></a>
                    <a href="https://www.behance.net/smsofiqul_islam" target="_blank"><i class="fa fa-behance" style="color: white" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<section class="lower-footer bg-info ">
    <div class="container">
        <div class="row">
            <div class="bottom col-md-6 m-auto text-center">
                <div style="color: white;">&copy; 2017 All Rights Reserved to S.M. Sofiqul Islam</div>
            </div>
        </div>
    </div>
</section>
<!-- Bootstrap core JavaScript -->
<script src="assets/js/jquery-3.2.1.js"></script>
<script src="assets/js/Proper.js"></script>
<script src="assets/js/bootstrap.bundle.js"></script>
<script src="assets/js/bootstrap.js"></script>

</body>

</html>
