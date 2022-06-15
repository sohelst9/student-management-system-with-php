<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Student Management System</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <br>
    <a class="btn btn-primary float-right" href="admin/login.php" >Login</a>
    <br>
    <br>
    <h2 style="color:black;" class="text-center">Welcome to Student Management System</h2><br>

    <div class="row">
      <div class=" td col-sm-4 offset-sm-4">
        <form class="" action="" method="post">
          <table class="table table-bordered">
            <tr>
              <td class="text-center" colspan="2"><label>Student Information</label></td>
            </tr>

            <tr>
              <td><label for="class">Choose Semester</label></td>
              <td>
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
              </td>
            </tr>

            <tr>
              <td><label for="shift">Choose Shift</label></td>
              <td>
                <select class="form-control" name="shift" id="shift">
                  <option value="">Select</option>
                  <option value="1st">1st Shift</option>
                  <option value="2nd">2nd Shift</option>
                </select>
              </td>
            </tr>

            <tr>
              <td><label for="roll">Roll No</label></td>
              <td>
                <input class="form-control" type="text" name="roll" pattern="[0-9]{6}" placeholder="Enter Roll No">
              </td>
            </tr>

            <tr>
              <td class="text-center" colspan="2">
                <input class="btn btn-default" type="submit" name="show_info" value="Show info"></td>
            </tr>
          </table>
        </form>
      </div>
    </div>


       <br>
       <br>
    <?php
    require_once 'admin/connect_db.php';
      if(isset($_POST['show_info'])){
        $semester=$_POST['class'];
        $shift=$_POST['shift'];
        $roll=$_POST['roll'];

        $show_info=mysqli_query($connect,"SELECT * FROM `student_info` WHERE `class`='$semester' and `shift`='$shift' and `roll`='$roll'");

        if(mysqli_num_rows($show_info)==1){
          $row_data_show=mysqli_fetch_assoc($show_info);
          ?>
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <table class="table table-bordered table-hover">
                <tr>
                  <td  class="text-center" rowspan="6">
                    <img src="admin/student_image/<?php echo $row_data_show['photo']; ?>" height="220px" width="270px" alt="">
                  </td>
                  <td>name</td>
                  <td><?php echo ucwords($row_data_show['name']); ?></td>
                </tr>

                <tr>
                  <td>roll</td>
                  <td><?php echo $row_data_show['roll']; ?></td>
                </tr>

                <tr>
                  <td>semester</td>
                  <td><?php echo $row_data_show['class']; ?></td>
                </tr>

                <tr>
                  <td>shift</td>
                  <td><?php echo $row_data_show['shift']; ?></td>
                </tr>

                <tr>
                  <td>city</td>
                  <td><?php echo ucwords($row_data_show['city']); ?></td>
                </tr>

                <tr>
                  <td>parents_contact</td>
                  <td><?php echo $row_data_show['parents_contact']; ?></td>
                </tr>
              </table>
            </div>

          </div>
          <?php
        }
        else {
          ?>
          <script type="text/javascript">
            alert('Data Not Found');
          </script>
          <?php
        }
      }
     ?>
  </div>
</body>
</html>
