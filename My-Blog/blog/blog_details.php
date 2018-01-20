<?php

require_once 'vendor/autoload.php';
$login = new App\classes\Login();

$id = $_GET['id'];
$queryResult =  $login->viewAllblogInfo();
while ($allBlogDetails = mysqli_fetch_assoc($queryResult)){
    if($allBlogDetails['id']==$id){
        $blogDetails = $allBlogDetails;
    }
}
$message=' ';
if (isset($_POST['btn'])){
    $message = $login->addComment($_POST);
}

  $commentResult = $login->viewAllComment($id)

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Blog Details</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-0">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contract</a>
                </li>

            </ul>
        </div>

        <a class="navbar-brand" href="admin/index.php">Admin Panel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>
</nav>

<div class="container" style="margin-top: 70px;">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <h1 style="text-align: center;">Blog Details</h1><hr/>

                <div class="card m-auto">
                    <img class="card-img-top" src="app/<?php echo $blogDetails['blog_image']; ?>" style=" height: 300px; align-content: center; width: 300px; ">
                </div>

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
                            <th>Publication Status</th>
                            <td><?php echo $blogDetails['status'] == 1 ? 'Published' : 'Unpublished'; ?></td>
                        </tr>

                    </table>
                </div>
                <div class="card-footer">
                    <h3 style="text-align: center; color: green;"><?php  echo $message ?></h3>
                    <form action="" method="post">
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <input type="hidden" name="blog_id" class="form-control" value="<?php echo $blogDetails['id'];  ?>" />
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Add Comments</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" rows="5" name="comment_description"></textarea>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9">

                                    <button type="submit" name="btn" class="btn btn-success">Add Comment </button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>

        <div class="col-sm-12 m-auto">
            <h1>Comments</h1>

            <hr/>

            <?php While($comments = mysqli_fetch_assoc($commentResult)){  ?>
            <td><?php echo $comments['comment_description'];   ?></td><hr/>
            <?php }  ?>
        </div>

        </div>
    </div>
</div>









<script src="assets/js/jquery-3.2.1.js"></script>
<script src="assets/js/bootstrap.bundle.js"></script>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>