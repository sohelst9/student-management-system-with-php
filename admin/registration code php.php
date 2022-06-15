<?php
//php code start......
require_once 'connect_db.php';
session_start();

if(isset($_POST["registration"])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  $c_password=$_POST['c_password'];
  $photo=explode('.', $_FILES['photo']['name']);
  $photo=end($photo);
  $photoname=$username.'.'.$photo;


//form_required...............
  $input_error=array();

  if(empty($name)){
    $input_error['name']="name field is required";
  }

  if(empty($email)){
    $input_error['email']="email field is required";
  }

  if(empty($username)){
    $input_error['username']="username field is required";
  }

  if(empty($password)){
    $input_error['password']="password field is required";
  }

  if(empty($c_password)){
    $input_error['c_password']="confirm password field is required";
  }
  if(count($input_error) == 0){
    $email_check=mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email';");
    if(mysqli_num_rows($email_check) == 0){

      $username_check=mysqli_query($connect, "SELECT * FROM `users` WHERE `username` = '$username';");
      if(mysqli_num_rows($username_check) == 0){
        if(strlen($username) > 7){
          if(strlen($password) > 7){

              if($password==$c_password){
                $password=md5($password);
              $query="INSERT INTO users(name, email, username, password, photo, status) VALUES ('$name','$email','$username','$password','$photoname','inactive')";
              $query_results= mysqli_query($connect,$query);
              if($query_results){
                $_SESSION['data_insert_success']="Data Insert Success";

                move_uploaded_file($_FILES['photo']['tmp_name'],'image/'.$photoname);
                header("location: regstration.php");
              }

              else{
                $_SESSION['data_insert_error']="Data Insert Not Success";
              }
              }else{
              $c_password_not_match="Conform Password Not Match";
            }

          }else{
            $password_len="Password more than 8 characters";
          }

        }else{
          $username_len="Username more than 8 characters";
        }
      }else {
        $username_error="This username Already Exists";
      }


    }else{
      $email_error="This Email Address Already Exists";
    }

  }





}

 ?>
