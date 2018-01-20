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



$id = $_GET['id'];
$queryResult =  $login->viewAllblogInfo();
while ($allBlogDetails = mysqli_fetch_assoc($queryResult)){
    if($allBlogDetails['id']==$id){
        $blogDetails = $allBlogDetails;
    }
}




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
                <h1 style="text-align: center; color: #0000F0;">Blog Details</h1><hr/>
                <div class="card-body">
                    <table class="table table-primary  table-bordered table-hover table-responsive-xl">

                        <tr>
                            <th>Blog Id</th>
                            <td><?php echo $blogDetails['id']; ?></td>
                        </tr>
                        <tr>
                            <th>Blog Title</th>
                            <td><?php echo $blogDetails['blog_title']; ?></td>
                        </tr>

                        <tr>
                            <th>Category Name</th>
                            <td><?php echo $blogDetails['category_name']; ?></td>
                        </tr>

                        <tr>
                            <th>Blog Short Description</th>
                            <td><?php echo $blogDetails['short_description']; ?></td>
                        </tr>
                        <tr>
                            <th>Blog Long Description</th>
                            <td><?php echo $blogDetails['long_description']; ?></td>
                        </tr>

                        <tr>
                            <th>Blog Image</th>
                            <td><img src="<?php echo $blogDetails['blog_image']; ?>"
                                     alt="" width="250px" height="200px"/> </td>
                        </tr>

                        <tr>
                            <th>Publication Status</th>
                            <td><?php echo $blogDetails['status'] == 1 ? 'Published' : 'Unpublished'; ?></td>
                        </tr>


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