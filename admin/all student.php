<h1 class="text-primary"><i class="fa fa-users"></i> All Student <small style="color:#CCDADA;">All Students</small></h1>
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="index.php?page=dashbord">Dashboard</a></li>
  <li class="breadcrumb-item active"><i class="fa fa-users"></i> All Student</li>
</ol>
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
          <th>Action</th>
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
            <td>
              <a href="index.php?page=eidt student&id=<?php echo base64_encode($row['id']);?>" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i> Edit</a><br><br>
              <a onclick="return confirm('Are you sure to Delete this Data.......!')" href="delete student.php?id=<?php echo base64_encode($row['id']); ?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
            </td>
          </tr>

            <?php
          }
         ?>
      </tbody>
  </table>
</div>
