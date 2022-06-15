<h1 class="text-primary"><i class="fa fa-"></i> Update profile <small style="color:#CCDADA;">Update user profile</small></h1>
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="index.php?page=dashbord"><i class="fa fa-dashboard"></i> Dashboard</a></li>
  <li class="breadcrumb-item"><a href="index.php?page=user profile"><i class="fa fa-user"></i> profile</a></li>
  <li class="breadcrumb-item active"><i class="fa fa-pencil"></i> Update user profile</li>
</ol>
<?php
  $session_user= $_SESSION['user_login'];
  $user_data=mysqli_query($connect,"SELECT * FROM `users` WHERE `username`='$session_user'");
  $user_data_row=mysqli_fetch_assoc($user_data);

  if(isset($_POST['update'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $username=$_POST['username'];


    $query=mysqli_query($connect,"UPDATE `users` SET `name`='$name',`email`='$email',`username`='$username' WHERE `username`='$session_user'");
    if($query){
      header('location:index.php?page=user Profile');
    }


  }
 ?>



    <h1>Update User Profile</h1>

    <div class="row">
      <div class="col-md-12">
        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
          <div class="form-group">
            <label for="name" class="control-label col-sm-1">Name</label>
            <div class="col-sm-4">
              <input class="form-control" id="name" type="name" name="name" placeholder="Enter Your Name" value="<?php echo $user_data_row['name']; ?>" required="">
            </div>

          </div>


          <div class="form-group">
            <label for="email" class="control-label col-sm-1">Email</label>
            <div class="col-sm-4">
              <input class="form-control" id="email" type="name" name="email" placeholder="Enter Your Email" value="<?php echo $user_data_row['email']; ?>" required="">
            </div>
          </div>

          <div class="form-group">
            <label for="username" class="control-label col-sm-1">Username</label>
            <div class="col-sm-4">
              <input class="form-control" id="username" type="name" name="username" placeholder="Enter Your username" value="<?php echo $user_data_row['username']; ?>" required="">
            </div>
            <div class="col-sm-4 mt-3">
              <input class="btn btn-danger" type="submit" name="update" value="Update">
            </div>
          </div>



        </form>
      </div>
    </div>
    <p class="mt-3">If you have an account?Then please <a href="login.php">login</a></p>
    <hr>
