<h1 class="text-primary"><i class="fa fa-"></i> Update Student <small style="color:#CCDADA;">Update Students</small></h1>
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="index.php?page=dashbord"><i class="fa fa-dashboard"></i> Dashboard</a></li>
  <li class="breadcrumb-item"><a href="index.php?page=all student"><i class="fa fa-users"></i> all student</a></li>
  <li class="breadcrumb-item active"><i class="fa fa-pencil"></i> Update Student</li>
</ol>
<?php
  $id= base64_decode($_GET['id']);
  $eidt_db_data=mysqli_query($connect,"SELECT * FROM `student_info` WHERE `id`='$id'");
  $eidt_db_row=mysqli_fetch_assoc($eidt_db_data);


    if(isset($_POST['update-student'])){
      $name=$_POST['name'];
      $roll=$_POST['roll'];
      $class=$_POST['class'];
      $shift=$_POST['shift'];
      $city=$_POST['city'];
      $pcontact=$_POST['pcontact'];

      $query="UPDATE `student_info` SET `name`='$name',`roll`='$roll',`class`='$class',`shift`='$shift',`city`='$city',`parents_contact`='$pcontact' WHERE `id`='$id'";
      $eidt_result=mysqli_query($connect,$query);
      if($eidt_result){
        header('location:index.php?page=all student');
      }

  }

  ?>

<div class="row">


  <div class="col-sm-6">
    <form class="" action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Student Name</label>
        <input type="text" name="name" id="name" placeholder="Student Name" class="form-control" required="" value="<?php echo $eidt_db_row['name']; ?>">

      </div>

      <div class="form-group">
        <label for="roll">Student Roll</label>
        <input type="text" name="roll" id="roll" placeholder="Student Roll" class="form-control" pattern="[0-9]{6}" required="" value="<?php echo $eidt_db_row['roll']; ?>">
      </div>


      <div class="form-group">
        <label for="class">Select Semester</label>
        <select class="form-control" name="class" id="class" required="" value="<?php if($eidt_db_row['class']=='5th'){echo 'selected=""';}else{echo '';} ?>">
          <option value="">Select</option>
          <option <?php if($eidt_db_row['class']=='1st'){echo 'selected=""';}else{echo '';} ?> value="1st">1st Semester</option>
          <option <?php if($eidt_db_row['class']=='2nd'){echo 'selected=""';}else{echo '';} ?> value="2nd">2nd Semester</option>
          <option <?php if($eidt_db_row['class']=='3rd'){echo 'selected=""';}else{echo '';} ?> value="3rd">3rd Semester</option>
          <option <?php echo $eidt_db_row['class']=='4th'?'selected=""':''; ?> value="4th">4th Semester</option>
          <option <?php if($eidt_db_row['class']=='5th'){echo 'selected=""';}else{echo '';} ?> value="5th">5th Semester</option>
          <option <?php if($eidt_db_row['class']=='6th'){echo 'selected=""';}else{echo '';} ?> value="6th">6th Semester</option>
          <option <?php if($eidt_db_row['class']=='7th'){echo 'selected=""';}else{echo '';} ?> value="7th">7th Semester</option>
          <option <?php if($eidt_db_row['class']=='8th'){echo 'selected=""';}else{echo '';} ?> value="8th">8th Semester</option>
        </select>
      </div>

      <div class="form-group">
        <label for="shift">Select Shift</label>
        <select class="form-control" name="shift" id="shift">
          <option value="">Select</option>
          <option <?php if($eidt_db_row['shift']=='1st'){echo 'selected=""';}else{echo '';} ?> value="1st">1st Shift</option>
          <option <?php if($eidt_db_row['shift']=='2nd'){echo 'selected=""';}else{echo '';} ?> value="2nd">2nd Shift</option>
        </select>
        <label class="input_error"><?php if(isset($input_error['shift'])){ echo $input_error['shift'];} ?></label>
      </div>

      <div class="form-group">
        <label for="city">Student City</label>
        <input type="text" name="city" id="city" placeholder="Student city" class="form-control" required="" value="<?php echo $eidt_db_row['city']; ?>">
      </div>

      <div class="form-group">
        <label for="pcontact">Parents Contact</label>
        <input type="text" name="pcontact" id="pcontact" placeholder="Parents Contact Number" class="form-control" pattern="01[1|3|5|6|7|8|9][0-9]{8}" required="" value="<?php echo $eidt_db_row['parents_contact']; ?>">
      </div>

      <div class="form-group">
        <input type="submit" name="update-student"value="Update student" class="btn btn-info">
      </div>
    </form>
  </div>
</div>
