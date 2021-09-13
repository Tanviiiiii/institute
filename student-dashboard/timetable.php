<?php
include("../includes/session_check.php");
$page = "timetable";




$query = "SELECT * FROM timetable WHERE class={$_SESSION['class']}";
$res = $conn->query($query);



?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>S2C <?php echo $page; ?></title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/logo.ico" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <?php include("../includes/dashboardNavbar.php"); ?>
  <!-- Main content -->
  <div class="main-content" id="panel" style="background-color: #0093E9;
background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);padding-left:15%;
">
    <!-- Topnav -->
    <?php include("../includes/dashboardTopNav.php"); ?>
    <?php include("../includes/dashboardHeader.php"); ?>
    <div class="container position-relative" style="top: -36%;">
      <h1 class="text-center p-3 text-white">Time Table</h1>


      <table class="table table-dark table-striped table-hover mx-auto w-50">
        <thead>
          <tr>
            <th>Class</th>
            <th>Subjects</th>
            <th>day</th>
            <th>timings</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = $res->fetch_assoc()) :   ?>
            <tr>
              <td scope="row"><?php echo $row['class']; ?></td>
              <td><?php echo $row['subject']; ?></td>
              <td><?php echo $row['day']; ?></td>
              <td><?php echo $row['timings']; ?></td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>

    <!-- scripts includes -->
    <?php include("../includes/scripts.php"); ?>

    <!-- <script src="./assets/js/update-timetable.js"></script> -->
</body>

</html>