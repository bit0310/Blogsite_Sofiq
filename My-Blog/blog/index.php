
<?php

require_once 'vendor/autoload.php';
$login = new App\classes\Login();


$getAllPostImage = $login->getAllImage();

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
</div>
    <!-- Page Features -->
    <div class="container">'
        <div class="row text-center">
            <div class="col-md-12">


        <?php while ($getAllPostInfo = mysqli_fetch_assoc($getAllPostImage)) { ?>

        <div class="col-lg-3 col-md-6 mb-4 float-left">

            <div class="card">
                <img class="card-img-top" src="<?php echo $getAllPostInfo['blog_image']; ?>"   style="height: 150px; width: auto; ">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $getAllPostInfo['category_id']; ?></h4>
                    <p class="card-text"><?php echo $getAllPostInfo['blog_title']; ?> </p>
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


<!--        <div class="col-lg-3 col-md-6 mb-4">-->
<!--            <div class="card">-->
<!--                <img class="card-img-top" src="admin/../assets/images/football.jpg" alt="" style="height: 160px;">-->
<!--                <div class="card-body">-->
<!--                    <h4 class="card-title">Sports</h4>-->
<!--                    <p class="card-text">Football.</p>-->
<!--                </div>-->
<!--                <div class="card-footer">-->
<!--                    <a href="#" class="btn btn-primary">Find Out More!</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

<!--        <div class="col-lg-3 col-md-6 mb-4">-->
<!--            <div class="card">-->
<!--                <img class="card-img-top" src="admin/../assets/images/badminton.jpg" alt="" style="height: 160px;">-->
<!--                <div class="card-body">-->
<!--                    <h4 class="card-title">Sports</h4>-->
<!--                    <p class="card-text">Badminton.</p>-->
<!--                </div>-->
<!--                <div class="card-footer">-->
<!--                    <a href="#" class="btn btn-primary">Find Out More!</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

<!--        <div class="col-lg-3 col-md-6 mb-4">-->
<!--            <div class="card">-->
<!--                <img class="card-img-top" src="admin/../assets/images/f.png" alt="" style="height: 160px;">-->
<!--                <div class="card-body">-->
<!--                    <h4 class="card-title">Website</h4>-->
<!--                    <p class="card-text">Facebook.</p>-->
<!--                </div>-->
<!--                <div class="card-footer">-->
<!--                    <a href="#" class="btn btn-primary">Find Out More!</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    </div>-->
    <!-- /.row -->
<!--    <div class="row text-center">-->
<!---->
<!--    <div class="col-lg-3 col-md-6 mb-4">-->
<!--        <div class="card">-->
<!--            <img class="card-img-top" src="admin/../assets/images/l.png" alt="" style="height: 160px;">-->
<!--            <div class="card-body">-->
<!--                <h4 class="card-title">Website</h4>-->
<!--                <p class="card-text">LinkedIn. </p>-->
<!--            </div>-->
<!--            <div class="card-footer">-->
<!--                <a href="#" class="btn btn-primary">Find Out More!</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="col-lg-3 col-md-6 mb-4">-->
<!--        <div class="card">-->
<!--            <img class="card-img-top" src="admin/../assets/images/php.jpg" alt="" style="height: 160px;">-->
<!--            <div class="card-body">-->
<!--                <h4 class="card-title">Programming Language</h4>-->
<!--                <p class="card-text">PHP.</p>-->
<!--            </div>-->
<!--            <div class="card-footer">-->
<!--                <a href="#" class="btn btn-primary">Find Out More!</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!---->
<!--</div>-->





<!-- /.row -->
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; S.M. Sofiqul Islam</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="assets/js/jquery-3.2.1.js"></script>
<script src="assets/js/Proper.js"></script>
<script src="assets/js/bootstrap.bundle.js"></script>
<script src="assets/js/bootstrap.js"></script>

</body>

</html>
