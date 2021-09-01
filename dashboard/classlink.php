<?php

include("../includes/session_check.php");

if (isset($_POST['submit'])) {
  $stmt = $conn->prepare("INSERT INTO classlink(class,subject,chapter,link) VALUES(?,?,?,?)");
  $stmt->bind_param("ssss", $class, $subject, $chapter, $link);

  $class = $_POST['class'];
  $subject = $_POST['subject'];
  $chapter = $_POST['chapter'];
  $link = $_POST['link'];

  $result = $stmt->execute();

  if ($result) {
    echo "<script>alert('succesfully inserted record');</script>";
    $stmt->close();
    $conn->close();
  } else {
    die("Cannot insert record" . mysqli_error($conn));
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>S2C Dashboard</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">

</head>

<body>
  <!-- Sidenav -->
  <?php include("../includes/dashboardNavbar.php"); ?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <?php include("../includes/dashboardTopNav.php"); ?>
    <!-- Header -->
    <?php include("../includes/dashboardHeader.php"); ?>
    <div class="container">
      <h1 class="text-center p-3">CLASS LINK</h1>

      <form name="form1" id="form1" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form-control" style="height:calc(2.5em + 1.25rem + 5px)">
        <div class="row justify-content-center align-items-center">
          <div class="col">
            Class: <select name="class" id="class" class="form-select" required>
              <option value="" selected="selected">Select class</option>
            </select>
          </div>
          <div class="col">
            Subject: <select name="subject" id="subject" class="form-select">
              <option value="" selected="selected">select subject</option>
            </select>
          </div>
          <div class="col">
            Chapter: <select name="chapter" id="chapter" class="form-select">
              <option value="" selected="selected">select topic </option>
            </select>

          </div>
          <div class="col">
            <input type="submit" value="Submit" name="submit" class="btn btn-primary">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col">
            <textarea class="form-control" name="link" id="link" cols="100" rows="10" style="resize:no;" required></textarea>
          </div>
        </div>
        <br>


      </form>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>
  <script src="./assets/js/classlink.js" async></script>
</body>

</html>