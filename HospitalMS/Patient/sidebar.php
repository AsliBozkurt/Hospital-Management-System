<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS & Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/812fd4bca0.js" crossorigin="anonymous"></script>
    <title>Hospital Management System</title>
</head>
<body>

<!-- 
  *
  * sidebar...
  *
 -->
 <div class="sidenav">
  <div class="profile">
    <span>
      <?php
      if(isset($_SESSION['userID'])){
        echo substr($_SESSION['firstName'],0,1)."".substr($_SESSION['lastName'],0,1);
      }
      ?>
    </span>
  </div>
  <h4>
    <?php
      if(isset($_SESSION['userID'])){
        echo $_SESSION['firstName']." ".$_SESSION['lastName'];
      }
      ?>
    </h4>
    <p>Patient</p>
    <!-- 
      *
      *
      *
     -->
     <div class="dashboard-tabs">
       <div class="tab">
       <a href="dashboard.php"><i class="fas fa-plus-circle dash-fas"></i>Dashboard</a>
       </div>
       <div class="tab">
       <a href="addAppointment.php"><i class="fas fa-plus-circle add-fas"></i>Add Appointments </a>
       </div>
       <div class="tab">
       <a href="../Process/logout.php"><i class="fas fa-plus-circle logout-fas"></i>Logout</a>
       </div>
     </div>
    </div>     