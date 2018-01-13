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
    $message = $login->deleteCategory($id);
}

$queryResult =  $login->manageAllcategoryInfo();
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

<div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-sm-10 mx-auto">
            <div class="card">
                <h3 style="text-align: center; color: red;"><?php  echo $message ?></h3>
                <h1 style="text-align: center; color: black;">Category List</h1><hr/>
                <div class="card-body">
                    <table class="table table-success  table-bordered table-hover table-responsive-xl">
                        <thead>
                        <tr>
                            <th scope="col">SL NO</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Category Description</th>
                            <th scope="col">Publication Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php While($category = mysqli_fetch_assoc($queryResult)){  ?>

                            <tr>
                                <td><?php echo $category['id'];   ?></td>
                                <td><?php echo $category['category_name'];   ?></td>
                                <td><?php echo $category['category_description'];   ?></td>
                                <td><?php echo $category['status'];   ?></td>
                                <td>
                                    <a href="edit-category.php?id=<?php echo $category['id'];?>">
                                        <button type="button" class="btn btn btn-warning btn-sm"> E-d-i-t </button></a>
                                    </a>
                                    <a href="?delete=true&id=<?php echo $category['id'];?>"
                                       onclick="return confirm('Are you sure to delete this!!');">
                                        <button type="button" class="btn btn btn-danger btn-sm" >Delete</button>
                                    </a>
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