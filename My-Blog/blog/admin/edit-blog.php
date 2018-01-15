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
//categoryid into blog category name.............

$getCategoryId = $login->getAllPublishedCategoryInfo();

    $id = $_GET['id'];
    $queryResult = $login->getBlogInfoById($id);
    $blog = mysqli_fetch_assoc($queryResult);

    $message ="";
    if(isset($_POST['btn'])){
        $login->updateBlogInfo($_POST);
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
<h3 style="color: green"><?php  echo $message ?></h3>

<div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-sm-10 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST" name="editBlogForm" enctype="multipart/form-data">

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Category Name</label>
                            <div class="col-sm-9">
                                <input type="hidden" name="blog_id" class="form-control" value="<?php echo $blog['id'];  ?>" />
                                <select name="category_id" class="form-control">
                                    <option>---Select Category Name---</option>
                                    <?php while($category = mysqli_fetch_assoc($getCategoryId)) { ;?>
                                        <option value="<?php echo $category['id']; ?>"><?php echo $category['category_name']; ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Blog Title</label>
                            <div class="col-sm-9">
                                <input type="text" name="blog_title" class="form-control" value="<?php echo $blog['blog_title']?>"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Short Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="short_description"><?php echo $blog['short_description']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Long Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control textarea" rows="10" name="long_description"><?php echo $blog['long_description']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Blog Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="blog_image" accept="image/*" />
                                <img src="<?php echo $blog['blog_image'] ;  ?>" height="100" width="150" alt="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Publication Status</label>
                            <div class="col-sm-9">
                                <input type="radio" name="status" value="1"<?php if($blog['status']=="1") echo 'checked'; ?>> Published
                                <input type="radio" name="status" value="0"<?php if($blog['status']=="0") echo 'checked'; ?>> Unpublished

                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9">
                                <button type="submit" name="btn" class="btn btn-success btn-block">Update Blog Info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





<script src="../assets/js/jquery-3.2.1.js"></script>
<script src="../assets/js/bootstrap.bundle.js"></script>
<script src="../assets/tinymce/js/tinymce/tinymce.min.js"></script>
<script>tinymce.init({ selector:'.textarea' });</script>
<script src="../assets/js/bootstrap.min.js"></script>
<script>
    document.forms['editBlogForm'].elements['category_id'].value= '<?php echo $blog['category_id']; ?>';
</script>
</body>
</html>