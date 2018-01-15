<?php

namespace App\classes;

use App\classes\Database;

class Login {

//--------------------------------------------------------admin panel----------------------------------
  public function adminLoginCheck($data){
      $email = $data['email'];
      $password = md5($data['password']);

      $sql = "SELECT * FROM users WHERE email= '$email' AND password = '$password'";
      if(mysqli_query(Database::dbConnection(), $sql)){
          $queryResult = mysqli_query(Database::dbConnection(), $sql);
          $user = mysqli_fetch_assoc($queryResult);
          if ($user){
              session_start();
              $_SESSION['id']=$user['id'];
              $_SESSION['name']=$user['name'];
              header('Location: dashboard.php');
          }else{
              $message = "Please use valid email & password";
              return $message;
          }
      }else{
        die('QUERY PROBLEM'.mysqli_error(Database::dbConnection()));
      }
  }


  public function adminLogout(){
      unset($_SESSION['id']);
      unset($_SESSION['name']);
      header('Location: index.php');
  }

//--------------------------------------------------------category panel----------------------------------


  public function addCategory($data){

      $sql= "INSERT INTO categories (category_name, category_description, status) VALUES ('$data[category_name]', '$data[category_description]', '$data[status]')";

      if(mysqli_query(Database::dbConnection(), $sql)){
          $message = "Add Category successfully";
          return $message;
      }else{
          die('QUERY PROBLEM'.mysqli_error(Database::dbConnection()));
      }
  }


    public function manageAllcategoryInfo(){

        $sql= "select * from categories";

        if(mysqli_query(Database::dbConnection(), $sql)){
            $queryResult = (mysqli_query(Database::dbConnection(), $sql));
            return $queryResult;
        }else{
            die('QUERY PROBLEM'.mysqli_error(Database::dbConnection()));
        }
    }


    public function getCategoryInfoById($id){
        $sql= "SELECT * FROM categories WHERE id= '$id' ";
        if(mysqli_query(Database::dbConnection(), $sql)){
            $queryResult = (mysqli_query(Database::dbConnection(), $sql));
            return $queryResult;
        }else{
            die('QUERY PROBLEM'.mysqli_error(Database::dbConnection()));
        }
    }



    public function updateCategoryInfo($data){
        $sql = "UPDATE categories SET category_name = '$data[category_name]', category_description = '$data[category_description]', 
status= '$data[status]' WHERE id= '$data[id]'";
        if(mysqli_query(Database::dbConnection(), $sql)){
            header('Location: manage-category.php');
        }else{
            die('QUERY PROBLEM'.mysqli_error(Database::dbConnection()));
        }
    }




    public function deleteCategory($id){
        $sql= "DELETE from categories  WHERE id= '$id'";
        if(mysqli_query(Database::dbConnection(), $sql)){
            $message = "Category delete successfully";
            return $message;
        }else{
            die('QUERY PROBLEM'.mysqli_error(Database::dbConnection()));
        }
    }


//--------------------------------------------------------blog panel----------------------------------


    public function addBlog($data){

        $fileName = $_FILES['blog_image']['name'];
        $directory = '../assets/images/';
        $imageUrl = $directory.$fileName;
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        $check = getimagesize($_FILES['blog_image']['tmp_name']);
        if($check) {
            if(file_exists($imageUrl)) {
                die('This image already exist. Please select another one. Thanks');
            } else {
                if($_FILES['blog_image']['size'] > 500000) {
                    die('Your image size is too large. please select with in 10kb');
                } else {
                    if($fileType != 'JPG' && $fileType != 'png' && $fileType != 'jpg') {
                        die('Image type is not supported. Please use jpg or png');
                    } else {
                        move_uploaded_file($_FILES['blog_image']['tmp_name'], $imageUrl);

                        $sql= "INSERT INTO blogs (category_id, blog_title, short_description, long_description, blog_image, status) 
          VALUES ('$data[category_id]', '$data[blog_title]', '$data[short_description]','$data[long_description]', '$imageUrl', '$data[status]')";

                        if(mysqli_query(Database::dbConnection(), $sql)){
                            $message = "Blog Added successfully";
                            return $message;
                        }else{
                            die('QUERY PROBLEM'.mysqli_error(Database::dbConnection()));
                        }
                    }
                }
            }
        } else {
            die('Please chose a image file thanks !.');
        }

    }


        public function viewAllblogInfo(){
            $sql= "select b.*, c.category_name FROM blogs as b, categories as c  WHERE b.category_id = c.id";

            if(mysqli_query(Database::dbConnection(), $sql)){
                $queryResult = (mysqli_query(Database::dbConnection(), $sql));
                return $queryResult;
            }else{
                die('QUERY PROBLEM'.mysqli_error(Database::dbConnection()));
            }
        }





         public function getBlogInfoById($id){
             $sql= "SELECT * FROM blogs WHERE id= '$id' ";
             if(mysqli_query(Database::dbConnection(), $sql)){
                 $queryResult = (mysqli_query(Database::dbConnection(), $sql));
                 return $queryResult;
             }else{
                 die('QUERY PROBLEM'.mysqli_error(Database::dbConnection()));
             }
         }


        public function updateBlogInfo($data){

            $blogImage = $_FILES['blog_image']['name'];
            if($blogImage) {
//...............................detele replace image..........................
                $sql = "SELECT * FROM blogs WHERE id = '$data[blog_id]' ";
                $queryResult = mysqli_query(Database::dbConnection(), $sql);
                $blogInfo = mysqli_fetch_assoc($queryResult);
                unlink($blogInfo['blog_image']);

                $fileName = $_FILES['blog_image']['name'];
                $directory = '../assets/images/';
                $imageUrl = $directory.$fileName;
                $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
                $check = getimagesize($_FILES['blog_image']['tmp_name']);
                if($check) {
                    if(file_exists($imageUrl)) {
                        die('This image already exist. Please select another one. Thanks');
                    } else {
                        if($_FILES['blog_image']['size'] > 500000) {
                            die('Your image size is too large. please select with in 10kb');
                        } else {
                            if($fileType != 'JPG' && $fileType != 'png' && $fileType != 'jpg') {
                                die('Image type is not supported. Please use jpg or png');
                            } else {
                                move_uploaded_file($_FILES['blog_image']['tmp_name'], $imageUrl);
                                $sql="UPDATE blogs SET category_id = '$data[category_id]', blog_title = '$data[blog_title]', short_description = '$data[short_description]', long_description = '$data[long_description]', blog_image = '$imageUrl', status = '$data[status]' WHERE id = '$data[blog_id]' ";
                                if(mysqli_query(Database::dbConnection(),$sql)){
                                    header('Location: manage-blog.php');
                                } else{
                                    die("Query problem".mysqli_error(Database::dbConnection()));
                                }

                            }
                        }
                    }
                } else {
                    die('Please chose a image file thanks !.');
                }


            } else {
                $sql="UPDATE blogs SET category_id = '$data[category_id]', blog_title = '$data[blog_title]', short_description = '$data[short_description]', long_description = '$data[long_description]', status = '$data[status]' WHERE id = '$data[blog_id]' ";
                if(mysqli_query(Database::dbConnection(),$sql)){
                    header('Location: manage-blog.php');
                } else{
                    die("Query problem".mysqli_error(Database::dbConnection()));
                }
            }


        }



        public function deleteBlog($id){
            $sql= "DELETE from blogs  WHERE id= '$id'";
            if(mysqli_query(Database::dbConnection(), $sql)){
                $message = "Blog delete successfully";
                return $message;
            }else{
                die('QUERY PROBLEM'.mysqli_error(Database::dbConnection()));
            }
        }

        public function getAllPublishedCategoryInfo(){
            $sql = "SELECT * FROM categories WHERE status=1";
            if(mysqli_query(Database::dbConnection(), $sql)){
                $queryResult = (mysqli_query(Database::dbConnection(), $sql));
                return $queryResult;
            }else{
                die('QUERY PROBLEM'.mysqli_error(Database::dbConnection()));
            }
        }



    public function getAllPublishedPost(){
        $sql = "SELECT  * FROM blogs WHERE status=1";
        if(mysqli_query(Database::dbConnection(), $sql)){
            $queryResult = (mysqli_query(Database::dbConnection(), $sql));
            return $queryResult;
        }else{
            die('QUERY PROBLEM'.mysqli_error(Database::dbConnection()));
        }
    }












}