<?php
  require_once 'connect_db.php';
  session_start();

  if(isset($_SESSION['user_login'])){
    header("location:index.php");
  }

  if(isset($_POST["login"])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $check_username=mysqli_query($connect,"SELECT * FROM `users` WHERE `username` = '$username';");
    if(mysqli_num_rows($check_username) > 0){
      $db_row=mysqli_fetch_assoc($check_username);
      if($db_row['password']==md5($password)){
        if($db_row['status']=='active'){
          $_SESSION['user_login']=$username;
          header("location: index.php");
        }
        else {
          $status_inactive="Your Status Inactive";
        }
      }else {
        $password_wrong="This Password Wrong!!";
      }

    }else {
      $username_not_found="This Username Not Found";
    }
  }
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Student Management System</title>
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/animate.css">
</head>
<body class="login-admin">
  <div class="container animated shake ">
    <div class="login">
      <h2 class="text-center mt-5">Admin Login Form</h2>
      <div class="row">
        <div class="col-sm-4 offset-sm-4">
          <form class="login-form" action="login.php" method="post">
            <div class="username">
              <input class="form-control" type="text" name="username" placeholder="username" required="" value="<?php if(isset($username)){echo $username;} ?>">
            </div><br>

            <div class="password">
              <input class="form-control" type="password" name="password" placeholder="password" required="" value="<?php if(isset($password)){echo $password;} ?>">
            </div>
            <div class="login mt-2">
              <input class="btn btn-dark float-right" type="submit" name="login" value="Login">
            </div>
            <a href="../">Back</a>

            </form>
        </div>
      </div>
    </div>

        <br>
          <?php
            if(isset($username_not_found)){
              echo '<div class="col-sm-4 offset-sm-4 text-center alert alert-danger">'.$username_not_found.'</div>';
            }?>

            <?php
              if(isset($password_wrong)){
                echo '<div class="col-sm-4 offset-sm-4 text-center alert alert-danger">'.$password_wrong.'</div>';
              }?>

              <?php
                if(isset($status_inactive)){
                  echo '<div class="col-sm-4 offset-sm-4 text-center alert alert-danger">'.$status_inactive.'</div>';
                }?>
  </div>
</body>
</html>
