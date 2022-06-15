<h1 class="text-primary"><i class="fa fa-users"></i> All User <small style="color:#CCDADA;">All Users</small></h1>
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="index.php?page=dashbord"><i class="fa fa-dashbord"></i> Dashboard</a></li>
  <li class="breadcrumb-item active"><i class="fa fa-users"></i> All Users</li>
</ol>
<div class="table-responsive">
  <table id="example" class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Username</th>
          <th>Photo</th>
        </tr>
        </tr>
      </thead>
      <tbody>
        <?php
          $db_user_info=mysqli_query($connect,"SELECT * FROM `users`");
          $user_id=0;
          while($user_row=mysqli_fetch_assoc($db_user_info)){
            $user_id++;
            ?>


        <tr>
            <td><?php echo $user_id; ?></td>
            <td><?php echo $user_row['name']; ?></td>
            <td><?php echo $user_row['email']; ?></td>
            <td><?php echo $user_row['username']; ?></td>
            <td><img src="image/<?php echo $user_row['photo'];?>" alt="" height="100px" width="120px"></td>
          </tr>
          <?PHP
          }
         ?>
      </tbody>
  </table>
</div>
