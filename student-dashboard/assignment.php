<?php

include("../includes/session_check.php");
$page = "assignment";
$class = $_SESSION['class'];
$query = "SELECT * FROM assignment WHERE class={$class}";
$res = $conn->query($query); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>S2C <?php echo $page; ?></title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/logo.ico" type="image/png" />
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" />

  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css" />
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css" />
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css" />
</head>

<body>
  <!-- Sidenav -->
  <?php include("../includes/dashboardNavbar.php"); ?>
  <!-- Main content -->
  <div class="main-content" id="panel" style="
        background-color: #0093e9;
        background-image: linear-gradient(160deg, #0093e9 0%, #80d0c7 100%);
        padding-left: 15%;
      ">
    <!-- Topnav -->
    <?php include("../includes/dashboardTopNav.php"); ?>
    <!-- Header -->
    <?php include("../includes/dashboardHeader.php"); ?>
    <div class="container">
      <h1 class="text-center p-3 text-dark">Assignment Section</h1>
      <h1 class="display-3">Subjects</h1>
      <ul>
        <li>
          <a href="subjects/phy/phy.php" class="h3 d-block text-primary text-decoration-underline">Physics</a>
        </li>
        <li>
          <a href="subjects/chem/chem.php" class="h3 d-block text-primary text-decoration-underline">Chemistry</a>
        </li>
        <li>
          <a href="subjects/maths/maths.php" class="h3 d-block text-primary text-decoration-underline">Maths</a>
        </li>
        <li>
          <a href="subjects/bio/bio.php" class="h3 d-block text-primary text-decoration-underline">Biology</a>
        </li>
        <li>
          <a href="subjects/acc/acc.php" class="h3 d-block text-primary text-decoration-underline">Accounts</a>
        </li>
        <li>
          <a href="subjects/bst/bst.php" class="h3 d-block text-primary text-decoration-underline">Business Studies</a>
        </li>
        <li>
          <a href="subjects/eco/eco.php" class="h3 d-block text-primary text-decoration-underline">Economics</a>
        </li>
        <li>
          <a href="subjects/eng/eng.php" class="h3 text-primary text-decoration-underline">English
          </a>
        </li>
      </ul>
    </div>
  </div>
  <?php include("../includes/scripts.php"); ?>
  <script src="./assets/js/classlink.js" async></script>
</body>

</html>