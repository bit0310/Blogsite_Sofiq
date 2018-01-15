<?php

session_start();
if($_SESSION['id'] == null) {
    header('Location: index.php');
}

require_once '../vendor/autoload.php';
$login = new App\classes\Login();


if(isset($_GET['logout'])) {
    $login->adminLogout();
}

$message = '';
if(isset($_GET['delete'])){
    $id = $_GET['id'];
    $message = $login->deleteBlog($id);
}

$queryResult =  $login->viewAllblogInfo();






?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
<?php include 'includes/menu.php'; ?>

<div class="container " style="margin-top: 20px;">
    <div class="row">
        <div class="col-sm-12 mx-auto mb-3">
            <div class="card">
                <h3 style="text-align: center; color: red;"><?php  echo $message ?></h3>
                <h1 style="text-align: center; color: #0000F0;">Blog Short List</h1><hr/>
                <div class="card-body">
                    <table class="table table-primary  table-bordered table-hover table-responsive-xl">
                        <thead class="table-dark">
                        <tr>
                            <th scope="col">SL NO</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Blog Title</th>
                            <th scope="col">Short Description</th>
<!--                            <th scope="col">Long Description</th>-->
<!--                            <th scope="col">Blog Image</th>-->
                            <th scope="col">Blog Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        $i=1;
                        While($blog = mysqli_fetch_assoc($queryResult)){
                        ?>

                            <tr>
                                <td><?php echo $i++;   ?></td>
                                <td><?php echo $blog['category_name'];   ?></td>
                                <td><?php echo $blog['blog_title'];   ?></td>
                                <td><?php echo $blog['short_description'];   ?></td>
<!--                                <td>--><?php //echo $blog['long_description'];   ?><!--</td>-->
<!--                                <td>--><?php //echo $blog['blog_image'];   ?><!--</td>-->
                                <td><?php echo $blog['status'] == 1 ? 'Published' : 'Unpublished'; ?></td>
                                <td>
                                    <a href="view-blog.php?id=<?php echo $blog['id'];?>">
                                        <button type="button" class="btn btn btn-success btn-sm"> VI-EW </button></a>
                                    <a href="edit-blog.php?id=<?php echo $blog['id'];?>">
                                        <button type="button" class="btn btn btn-warning btn-sm"> E-d-i-t </button></a>
                                    <a href="?delete=true&id=<?php echo $blog['id'];?>"
                                       onclick="return confirm('Are you sure to delete this!!');">
                                        <button type="button" class="btn btn btn-danger btn-sm" >Delete</button></a>
                                </td>

                            </tr>

                        <?php }  ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>







<script src="../assets/js/jquery-3.2.1.js"></script>
<script src="../assets/js/bootstrap.bundle.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>