<?php
include("../includes/session_check.php");
$page = "classlink";
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
  <style>
    @media(max-width:1200px) {
      .main-content {
        padding-left: 0 !important;
      }
    }
  </style>
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
    <!-- Header -->
    <?php include("../includes/dashboardHeader.php"); ?>
    <div class="container position-relative" style="top:-36%;">
      <h1 class="text-center p-3 text-white">Social Media Platform</h1>
    </div>
    <div class="col-md-4 text-center">
          <strong class="text-red">Click on the links given below and follow the same:</strong>
          <br />
          <br />
          <ul class="list-unstyled text-black">
          <li>
              <a href="#" class="text-black">Whatsapp Group</a>
            </li>
            <li>
              <a href="#" class="text-black">Telegram Channel</a>
            </li>
            <li>
              <a href="https://www.instagram.com/sumit_sharma_classes/" class="text-black">Instagram Page</a>
            </li>
            <li>
              <a href="https://www.facebook.com/SumitSharmaClasses/" class="text-black">Facebook Page</a>
            </li>
            <li>
              <a href="https://www.youtube.com/c/XsumitSharma" class="text-black">Youtube Channel</a>
            </li>
            
          </ul>
        </div>
  </div>
  <?php include("../includes/scripts.php"); ?>
  <script src="./assets/js/classlink.js" async></script>
</body>

</html>