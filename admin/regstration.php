<?php
  require_once 'registration code php.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>User Registration Form</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/animate.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>User Registration Form</h1>
    <?php if(isset($_SESSION['data_insert_success'])){echo '<div class="alert alert-success">'.$_SESSION['data_insert_success'].'</div>';}?>
     <?php if(isset($_SESSION['data_insert_error'])){echo '<div class="alert alert-danger">'.$_SESSION['data_insert_error'].'</div>';}?>
    <hr>
    <div class="row">
      <div class="col-md-12">
        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
          <div class="form-group">
            <label for="name" class="control-label col-sm-1">Name</label>
            <div class="col-sm-4">
              <input class="form-control" id="name" type="name" name="name" placeholder="Enter Your Name" value="<?php if(isset($name)){echo $name;} ?>">
              <label class="input_error"><?php if(isset($input_error['name'])){echo $input_error['name'];}?></label>
            </div>

          </div>


          <div class="form-group">
            <label for="email" class="control-label col-sm-1">Email</label>
            <div class="col-sm-4">
              <input class="form-control" id="email" type="name" name="email" placeholder="Enter Your Email" value="<?php if(isset($email)){echo $email;} ?>">
              <label class="input_error"><?php if(isset($input_error['email'])){echo $input_error['email'];}?></label>
              <label class="input_error"><?php if(isset($email_error)){echo $email_error;}?></label>
            </div>
          </div>

          <div class="form-group">
            <label for="username" class="control-label col-sm-1">Username</label>
            <div class="col-sm-4">
              <input class="form-control" id="username" type="name" name="username" placeholder="Enter Your username" value="<?php if(isset($username)){echo $username;} ?>">
              <label class="input_error"><?php if(isset($input_error['username'])){echo $input_error['username'];}?></label>
              <label class="input_error"><?php if(isset($username_error)){echo $username_error;}?></label>
              <label class="input_error"><?php if(isset($username_len)){echo $username_len;}?></label>
            </div>
          </div>

          <div class="form-group">
            <label for="password" class="control-label col-sm-1">Password</label>
            <div class="col-sm-4">
              <input class="form-control" id="password" type="password" name="password" placeholder="Enter Your password" value="<?php if(isset($password)){echo $password;} ?>">
              <label class="input_error"><?php if(isset($input_error['password'])){echo $input_error['password'];}?></label>
              <label class="input_error"><?php if(isset($password_len)){echo $password_len;}?></label>
            </div>
          </div>

          <div class="form-group">
            <label for="c_password" class="control-label col-sm-1">ConformPassword</label>
            <div class="col-sm-4">
              <input class="form-control" id="c_password" type="password" name="c_password" placeholder="Enter Your Conform Password" value="<?php if(isset($c_password)){echo $c_password;} ?>">
              <label class="input_error"><?php if(isset($input_error['c_password'])){echo $input_error['c_password'];}?></label>
              <label class="input_error"><?php if(isset($c_password_not_match)){echo $c_password_not_match;}?></label>
            </div>
          </div>

          <div class="form-group">
            <label for="photo" class="control-label col-sm-1">Photo</label>
            <div class="col-sm-4">
              <input id="photo" type="file" name="photo">
            </div>

            <div class="col-sm-4 mt-3">
              <input class="btn btn-danger" type="submit" name="registration" value="Registration">
            </div>
          </div>
        </form>
      </div>
    </div>
    <p class="mt-3">If you have an account?Then please <a href="login.php">login</a></p>
    <hr>

    <footer>
      <p class="text-center">Copyright &copy; <?php echo date("Y");?> All Rights Reserved</p>
    </footer>
  </div>
</body>
</html>
