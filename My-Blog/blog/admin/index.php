
<?php
session_start();
if(isset($_SESSION['id'])){
    header('Location:dashboard.php');
}


    require_once '../vendor/autoload.php';
    $login = new App\classes\Login();
$message= "";
    if(isset($_POST['btn'])){
        $message = $login->adminLoginCheck($_POST);
    }


?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Heroic Features - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css " rel="stylesheet">


</head>

<body>

<div class="container" style="margin-top: 200px;">
    <div class="row">
        <div class="col-sm-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4  align="center"><i>Admin panel</i> </h4>

                </div>

                <div class="card-body">
                    <h3 style="color: red;"><?php echo $message; ?></h3>
                    <form action="" method="post">
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <button type="submit" name="btn" class="btn btn-success btn-block">Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>








<!-- Bootstrap core JavaScript -->
<script src="../assets/js/jquery-3.2.1.js"></script>
<script src="../assets/js/Proper.js"></script>
<script src="../assets/js/bootstrap.bundle.js"></script>
<script src="../assets/js/bootstrap.js"></script>

</body>

</html>
