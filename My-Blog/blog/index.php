
<?php

require_once 'vendor/autoload.php';
$login = new App\classes\Login();


$viewAllPublishedPost = $login->getAllPublishedPost();

?>


<!DOCTYPE html>
<html lang="en">

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
            <ul class="navbar-nav ml-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
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
<div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4 mb-0 " style="background: url(assets/images/1.jpg); background-attachment: fixed; background-size: 100% 100%;">
        <h1 class="display-3" style="color: white;">Welcome to My Blog!</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
    </header>

    <section class="add-section mt-0 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="carousel slide" data-ride="carousel" data-interval="3000">
                        <div class="carousel-inner">
                            <div class="carousel-item carousel-item-padding active">
                                <h3><?php echo "My Blog"; ?></h3>
                            </div>
                            <div class="carousel-item carousel-item-padding">
                                <h3>My Blog</h3>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Page Features -->
    <div class="container">'
        <div class="row text-center">
            <div class="col-md-12">


        <?php while ($viewAllPost = mysqli_fetch_assoc($viewAllPublishedPost)) { ?>

        <div class="col-lg-3 col-md-6 mb-4 float-left">

            <div class="card">
                <img class="card-img-top" src="app/<?php echo $viewAllPost['blog_image']; ?>"
                     style="height: 150px; width: auto; ">
                <div class="card-body">
                    <h1 class="card-title"><?php echo $viewAllPost['category_id']; ?></h1>
                    <h5 class="card-text"><?php echo $viewAllPost['blog_title']; ?> </h5>
                    <p class="card-text"><?php echo $viewAllPost['short_description']; ?> </p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Find Out More!</a>
                </div>
            </div>

        </div>

        <?php } ?>

            </div>
        </div>
    </div>
</div>





<!-- /.row -->
<!-- /.container -->

<!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row ">

                <div class="bottom-left col-md-3">

                    <div class="footer_menu">
                        <h4 style="color: white">Website</h4>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="bottom-left col-md-3">
                    <div class="footer_menu">
                        <h4 style="color: white">About Us</h4>
                        <ul>
                            <li><a href="#">Company Information</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Reviews</a></li>
                        </ul>
                    </div>
                </div>

                <div class="bottom-left col-md-3">
                    <div class="footer_menu">
                        <h4 style="color: white">Support</h4>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Help desk</a></li>
                            <li><a href="#">Forums</a></li>
                        </ul>
                    </div>
                </div>

                <div class="bottom-left col-md-3">
                    <div class="footer_menu">
                        <h4 style="color: white">Legal</h4>
                        <ul>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="bottom-center col-md-6 text-center m-auto">
                    <div class="footer-social" style="color: white; font-size: 30px;">
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

<section class="lower-footer ">
    <div class="container">
        <div class="row">
            <div class="bottom col-md-6 m-auto text-center">
                <div>&copy; 2017 All Rights Reserved to S.M. Sofiqul Islam</div>
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
