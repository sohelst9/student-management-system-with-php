<?php
  session_start();
  require_once 'connect_db.php';
  if(!isset($_SESSION['user_login'])){
    header("location:login.php");
  }

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SMS</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../css/bootstrap.css">



  <script src="../js/jquery-3.3.1.js"></script>
  <script src="../js/jquery.dataTables.min.js"></script>
  <script src="../js/dataTables.bootstrap.min.js"></script>
  <script src="../js/script.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php" style="color:#7b5b6c;font-size:30px;">SMS</a>


<div class="ml-auto">
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#" style="font-size:20px; color:#7b5b6c;"><i class="fa fa-user"></i> Welcome:Sohel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="regstration.php" style="font-size:20px; color:#7b5b6c;"><i class="fa fa-user-plus"></i> Add User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=user Profile" style="font-size:20px; color:#7b5b6c;"><i class="fa fa-user"></i> Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php" style="font-size:20px; color:#7b5b6c;"><i class="fa fa-power-off"></i> Log Out</a>
        </li>

    </ul>
</div>


</nav>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3">
      <div class="list-group">
        <a href="index.php?page=dashbord" class="list-group-item active" style="color:#063119;"><i class="fa fa-dashboard"></i> Dashboard</a>
        <a href="index.php?page=add student" class="list-group-item " style="color:#A243E9;"><i class="fa fa-user-plus"></i> Add Student</a>
        <a href="index.php?page=all student" class="list-group-item" style="color:#B06275;"><i class="fa fa-users"></i> All Student</a>
        <a href="index.php?page=all users" class="list-group-item" style="color:#7DC996;"><i class="fa fa-users"></i> All User</a>

      </div>
    </div>

            <div class="col-sm-9">
              <div class="content">
                  <?php

                    if(isset($_GET['page'])){
                      $Page= $_GET['page'].".php";
                    }
                    else{
                      $Page="dashbord.php";
                    }

                    if(file_exists($Page)){
                      require_once $Page;
                    }
                    else{
                      require_once '404.php';
                    }
                   ?>
              </div>
            </div>
      </div>
    </div>

    <footer class="bg-primary p-1 mt-3">
        <p class="text-center mt-3" style="color:white;">Copyright &copy <?php echo date('Y'); ?> Student Management System. All Rights are Reserved..</p>
    </footer>


</body>
</html>
