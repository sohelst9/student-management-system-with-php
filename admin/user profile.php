<h1 class="text-primary"><i class="fa fa-user"></i> User Profile <small style="color:#CCDADA;">My Profile</small></h1>
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="index.php?page=dashbord"><i class="fa fa-dashbord"></i> Dashboard</a></li>
  <li class="breadcrumb-item active"><i class="fa fa-user"></i> User Profile</li>
</ol>

  <?php
    $session_user= $_SESSION['user_login'];
    $user_data=mysqli_query($connect,"SELECT * FROM `users` WHERE `username`='$session_user'");
    $user_data_row=mysqli_fetch_assoc($user_data);

   ?>

<div class="row">
  <div class="col-sm-6">
    <table class="table table-bordered table-hover">
      <tr>
        <td>User Id</td>
        <td><?php echo $user_data_row['id']; ?></td>
      </tr>
      <tr>
        <td>Name</td>
        <td><?php echo ucwords($user_data_row['name']); ?></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><?php echo ucwords($user_data_row['email']); ?></td>
      </tr>
      <tr>
        <td>Username</td>
        <td><?php echo ucwords($user_data_row['username']); ?></td>
      </tr>
      <tr>
        <td>Status</td>
        <td><?php echo ucwords($user_data_row['status']); ?></td>
      </tr>
      <tr>
        <td>Sign up data</td>
        <td><?php echo $user_data_row['datetime']; ?></td>
      </tr>
    </table>
    <a href="index.php?page=Eidt profile" class="btn btn-primary" style="float:right;">Eidt Profile</a>
  </div>

  <div class="col-sm-6">
    <img src="image/<?php echo $user_data_row['photo']; ?>" alt="" height="300px" width="350px">

    <?php
      if(isset($_POST['uplode'])){
        $photo=explode('.',$_FILES['photo']['name']);
        $photo=end($photo);
        $photoname=$session_user.'.'.$photo;
        $uplode_photo=mysqli_query($connect,"UPDATE `users` SET `photo`='$photoname' WHERE `username`='$session_user'");
        if($uplode_photo){
          move_uploaded_file($_FILES['photo']['tmp_name'],'image/'.$photoname);
         
        }
        else {
          echo "no";
        }
      }
     ?>
    <form class="" action="" method="POST" enctype="multipart/form-data">
      <label for="photo">Profile Picture</label><br>
      <input type="file" name="photo" id="photo"><br>
      <input type="submit" name="uplode" value="uplode" class="btn btn-primary mt-2">
    </form>
  </div>
</div>
