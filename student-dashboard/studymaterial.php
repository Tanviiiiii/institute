<?php

include("../includes/session_check.php");
$page = "studymaterial";
$class = $_SESSION['class'];
$query = "SELECT * FROM studymaterial WHERE class={$class}";
$res = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">

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
background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
">
    <!-- Topnav -->
    <?php include("../includes/dashboardTopNav.php"); ?>
    <!-- Header -->
    <?php include("../includes/dashboardHeader.php"); ?>
    <div class="container position-relative" style="top:-36%;">
      <h1 class="text-center p-3 text-white">Student Material Section</h1>
      <table class="table table-dark table-striped table-hover mx-auto w-50">
        <thead>
          <tr>
            <th>Class</th>
            <th>Subjects</th>
            <th>day</th>
            <th>File</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = $res->fetch_assoc()) :   ?>
            <tr>
              <td scope="row"><?php echo $row['class']; ?></td>
              <td><?php echo $row['subject']; ?></td>
              <td><?php echo $row['chapter']; ?></td>
              <td>
                <img src="../dashboard/<?php echo $row['concat']; ?>" alt="image" width="100" height="100">
              </td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>
  <?php include("../includes/scripts.php"); ?>

</body>

</html>