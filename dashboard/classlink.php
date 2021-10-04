<?php

include("../includes/session_check.php");
include("../includes/check.php");
$page = "classlink";
if (isset($_POST['submit'])) {
  $stmt = $conn->prepare("INSERT INTO classlink(class,subject,chapter,link,date) VALUES(?,?,?,?,?)");
  $stmt->bind_param("sssss", $class, $subject, $chapter, $link, $date);

  $class = $_POST['class'];
  $subject = $_POST['subject'];
  $chapter = $_POST['chapter'];
  $link = $_POST['link'];
  $date = date('Y-m-d');
  $result = $stmt->execute();

  if ($result) {
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
      <h1 class="text-center p-3 text-white">CLASS LINK</h1>

      <form name="form1" id="form1" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form-control" style="height:calc(5.5em + 1.25rem + 5px);border:0;">
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
            <input type="submit" value="Submit" name="submit" class="btn btn-success">
            <a href="show/show-classlink.php">SHOW CLASSLINKS</a>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col">
            <br>
            <textarea class="form-control" name="link" id="link" cols="100" rows="10" style="resize:no;" required></textarea>
          </div>
        </div>
        <br>


      </form>
    </div>
  </div>
  <?php include("../includes/scripts.php"); ?>
  <script src="./assets/js/classlink.js" async></script>
</body>

</html>