<?php

include("../includes/session_check.php");
include("../includes/check.php");
$page = "studymaterial";
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

      <form name="form3" id="form3" action="upload-student.php" method="POST" class="form-control" style="height:100%;border:0;" enctype="multipart/form-data">
        <div class="row justify-content-center align-items-center">
          <div class="row">
            <div class="col-md-3">
              Class: <select name="class" id="class" class="form-select" required>
                <option value="" selected="selected">Select class</option>
              </select>
            </div>
            <div class="col-md-3">
              Subject: <select name="subject" id="subject" class="form-select">
                <option value="" selected="selected">select subject</option>
              </select>
            </div>
            <div class="col-md-3">
              Chapter: <select name="chapter" id="chapter" class="form-select">
                <option value="" selected="selected">select topic </option>
              </select>
            </div>
            <div class="col-md-3 mt-2">
              <input type="file" name="fileToUpload" id="fileToUpload" class="btn btn-dark" style="width: 242px;max-width:100%;" required>
            </div>
            <div class="row mt-4 mt-0">
              <div class="col">
                <input type="submit" value="Submit" name="submit" class="btn btn-success">
                <a href="show/show-study.php">SHOW MATERIALS</a>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <?php include("../includes/scripts.php"); ?>
  <script src="./assets/js/classlink.js"></script>
</body>

</html>