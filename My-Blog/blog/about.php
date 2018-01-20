
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
            <a href="index.php" class="navbar-brand"><img class="rounded-circle md" src="assets/images/badminton.jpg" style="height: 50px; width: 50px;" alt=""></a>

            <ul class="navbar-nav ml-0">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item ">
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
<div class="container jumbotron" style="height: 500px;">
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <h2 class="card-title text-center">About Me</h2>
                    <hr/>

                        <div class=" col-md-12 m-auto">
                          <div class="row m-auto float-left" >

                              <button type="button" class="btn btn btn-warning btn-lg" data-toggle="modal"  data-target="#myModalaboutme" > Myself</button>
                          </div>

                            <div class="row m-auto float-right">

                                <button type="button" class="btn btn btn-info btn-lg" data-toggle="modal"  data-target="#myModalfamily" >Education</button>
                            </div>
                        </div>

                </div>

            </div>
        </div>
    </div>
</div>



<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="modal fade " id="myModalaboutme">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3>About Me</h3>
                                <button class="" data-dismiss="modal">
                                    &cross;
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row ">
                                    <div class="col-md-12">
                                        <div class="card" >
                                            <a href="about.php"><img src="assets/images/1.jpg" style="height: 300px; width: 300px; margin:0 auto; display: block;" alt="" class="card-img-top img-thumbnail"></a>
                                            <div class="card-body text-center">
                                                <h2 class="card-title">About Me</h2>
                                                <p class="card-text">In this section, I will discuss about myself.</p>
                                                <a href="" class="btn btn-success"  data-toggle="collapse" data-target="#about">Read More>>>></a>
                                                <div class="collapse" id="about">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                                        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                                        sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <p style="border-left: 10px solid black; color: white; display: block; padding: 5px; background-color: #1f648b; text-align: center;">
                                                    <b>This is my Information</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="modal fade " id="myModalfamily">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3>About Me</h3>
                                <button class="" data-dismiss="modal">
                                    &cross;
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row ">
                                    <div class="col-md-12">
                                        <div class="card" >
                                            <a href="about.php"><img src="assets/images/badminton.jpg" alt="" class="card-img-top"></a>
                                            <div class="card-body text-center">
                                                <h2 class="card-title">Sports</h2>
                                                <p class="card-text">In this section, I will discuss about Sports.</p>
                                                <a href="" class="btn btn-success"  data-toggle="collapse" data-target="#family">Read More>>>></a>
                                                <div class="collapse" id="family">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                                    sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <p style="border-left: 10px solid black; display: block; color: white; padding: 5px; background-color: #0f74a8; text-align: center;">
                                                    <b>This is my Family Information</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>







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
