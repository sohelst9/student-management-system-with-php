<h1 class="text-primary"><i class="fa fa-dashboard"></i> Dashboard <small style="color:#CCDADA;">Statistics Overview</small></h1>
<ol class="breadcrumb">
  <li class="breadcrumb-item active"><i class="fa fa-dashboard"></i> Dashboard</li>
</ol>
<?php
$show_student=mysqli_query($connect,"SELECT * FROM `student_info`");
$show_student_dashbord=mysqli_num_rows($show_student);

 $show_user=mysqli_query($connect,"SELECT * FROM `users`");
 $show_user_dashbord=mysqli_num_rows($show_user);

  ?>

  <div class="row">
    <div class="col-sm-4">
      <div class="card" style="color:white; background:#A243E9;">
        <div class="card-body">
            <div class="card-title">
              <div class="row">
                <div class="col-xs-3">
                  <i class="fa fa-users fa-5x"></i>
                </div>
                <div class="col-xs-9">
                  <div class=" ml-5" style="font-size:30px;"><?php echo $show_student_dashbord; ?></div>
                  <div class="clerafix"></div>
                  <div class=" ml-5" style="font-size:18px;">All Student</div>
                </div>
              </div>
            </div>

        </div>

            <a href="index.php?page=all student">
              <div class="card-footer" style="background:#F5F4F6; color:#706F78;">
                <span>All Student</span>
                <span class="float-right"><i class="fa fa-arrow-circle-o-right"></i></span>
              </div>
            </a>

      </div>
    </div>

    <div class="col-sm-4">
      <div class="card" style="color:white;background:#7DC996;">
        <div class="card-body">
            <div class="card-title">
              <div class="row">
                <div class="col-xs-3">
                  <i class="fa fa-users fa-5x"></i>
                </div>
                <div class="col-xs-9">
                  <div class=" ml-5" style="font-size:30px;"><?php echo $show_user_dashbord; ?></div>
                  <div class="clerafix"></div>
                  <div class=" ml-5" style="font-size:18px;">All Users</div>
                </div>
              </div>
            </div>

        </div>

            <a href="index.php?page=all users">
              <div class="card-footer" style="background:#F5F4F6; color:#706F78;">
                <span>All Users</span>
                <span class="float-right"><i class="fa fa-arrow-circle-o-right"></i></span>
              </div>
            </a>

      </div>
    </div>

  </div>

  <hr>
  <h3>New Students</h3>

  <div class="table-responsive">
    <table id="example" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>id</th>
            <th>name</th>
            <th>roll</th>
            <th>Semester</th>
            <th>Shift</th>
            <th>city</th>
            <th>p_contact</th>
            <th>Photo</th>
          </tr>
          </tr>
        </thead>
        <tbody>

          <?php
            $db_table_info=mysqli_query($connect,"SELECT * FROM `student_info` ");
            $id = 0;
            while($row=mysqli_fetch_assoc($db_table_info)){
                $id++;
              ?>

            <tr>
              <td><?php echo $id; ?></td>
              <td><?php echo ucwords($row['name']); ?></td>
              <td><?php echo $row['roll']; ?></td>
              <td><?php echo $row['class']; ?></td>
              <td><?php echo $row['shift']; ?></td>
              <td><?php echo ucwords($row['city']); ?></td>
              <td><?php echo $row['parents_contact']; ?></td>
              <td><img src="student_image/<?php echo $row['photo']; ?>" alt="" height="100px" width="120px"></td>
            </tr>

              <?php
            }
           ?>
        </tbody>
    </table>
  </div>
