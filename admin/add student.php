<h1 class="text-primary"><i class="fa fa-user-plus"></i> Add Student <small style="color:#CCDADA;">Add New Student</small></h1>
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="index.php?page=dashbord">Dashboard</a></li>
  <li class="breadcrumb-item active"><i class="fa fa-user-plus"></i> Add Student</li>
</ol>

<?php
  if(isset($_POST['add-student'])){
    $name=$_POST['name'];
    $roll=$_POST['roll'];
    $class=$_POST['class'];
    $shift=$_POST['shift'];
    $city=$_POST['city'];
    $pcontact=$_POST['pcontact'];

    $picture=explode('.',$_FILES['picture']['name']);
    $picture_ex=end($picture);
    $picture_name=$roll.'.'.$picture_ex;

    //form-required......

    $input_error=array();

    if(empty($name)){
      $input_error['name']="name field is required";
    }
    if(empty($roll)){
      $input_error['roll']="student roll field is required";
    }
    if(empty($class)){
      $input_error['class']="Please Select Your Semester";
    }
    if(empty($shift)){
      $input_error['class']="Please Select Your Shift";
    }
    if(empty($city)){
      $input_error['city']="student city field is required";
    }
    if(empty($pcontact)){
      $input_error['pcontact']="pcontact field is required";
    }

if(count($input_error) == 0){

    $query="INSERT INTO `student_info`(`name`, `roll`, `class`,`shift`, `city`, `parents_contact`, `photo`) VALUES ('$name','$roll','$class','$shift','$city','$pcontact','$picture_name')";
    $student_query_result=mysqli_query($connect,$query);
    if($student_query_result){
      $success="Data Insert Success";
      move_uploaded_file($_FILES['picture']['tmp_name'],'student_image/'.$picture_name);
    }
    else{
      $error="Data Insert Wrong";
    }

  }
}

 ?>

<!--start student form--->
<?php if(isset($success)){ echo '<p class="alert alert-info col-sm-6">'.$success.'</p>';} ?>
<?php if(isset($error)){ echo '<p class="alert alert-info col-sm-6">'.$error.'</p>';} ?>
<div class="row">


  <div class="col-sm-6">
    <form class="" action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Student Name</label>
        <input type="text" name="name" id="name" placeholder="Student Name" class="form-control">
        <label class="input_error"><?php if(isset($input_error['name'])){ echo $input_error['name'];} ?></label>
      </div>

      <div class="form-group">
        <label for="roll">Student Roll</label>
        <input type="text" name="roll" id="roll" placeholder="Student Roll" class="form-control" pattern="[0-9]{6}">
        <label class="input_error"><?php if(isset($input_error['roll'])){ echo $input_error['roll'];} ?></label>
      </div>


      <div class="form-group">
        <label for="class">Select Semester</label>
        <select class="form-control" name="class" id="class">
          <option value="">Select</option>
          <option value="1st">1st Semester</option>
          <option value="2nd">2nd Semester</option>
          <option value="3rd">3rd Semester</option>
          <option value="4th">4th Semester</option>
          <option value="5th">5th Semester</option>
          <option value="6th">6th Semester</option>
          <option value="7th">7th Semester</option>
          <option value="8th">8th Semester</option>
        </select>
        <label class="input_error"><?php if(isset($input_error['class'])){ echo $input_error['class'];} ?></label>
      </div>

      <div class="form-group">
        <label for="shift">Select Shift</label>
        <select class="form-control" name="shift" id="shift">
          <option value="">Select</option>
          <option value="1st">1st Shift</option>
          <option value="2nd">2nd Shift</option>
        </select>
        <label class="input_error"><?php if(isset($input_error['shift'])){ echo $input_error['shift'];} ?></label>
      </div>

      <div class="form-group">
        <label for="city">Student City</label>
        <input type="text" name="city" id="city" placeholder="Student city" class="form-control">
        <label class="input_error"><?php if(isset($input_error['city'])){ echo $input_error['city'];} ?></label>
      </div>

      <div class="form-group">
        <label for="pcontact">Parents Contact</label>
        <input type="text" name="pcontact" id="pcontact" placeholder="Parents Contact Number" class="form-control" pattern="01[1|3|5|6|7|8|9][0-9]{8}">
        <label class="input_error"><?php if(isset($input_error['pcontact'])){ echo $input_error['pcontact'];} ?></label>
      </div>


      <div class="form-group">
        <label for="picture">Picture</label>
        <input type="file" name="picture" id="picture">
      </div>

      <div class="form-group">
        <input type="submit" name="add-student"value="add student" class="btn btn-primary">
      </div>
    </form>
  </div>
</div>
