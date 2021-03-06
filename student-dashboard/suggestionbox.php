<?php
include("../includes/session_check.php");
$page = "suggestionbox";
if (isset($_POST['suggestion'])) {
  $suggestion = $_POST['suggestion'];
  $username = $_SESSION['username'];
  $subject = $_POST['subject'];
  $query = "INSERT INTO suggestion(username,subject,suggestion) values('$username','$subject','$suggestion')";
  $res = $conn->query($query);
  if (!$res) {
    echo "errro";
  } else {
    $success = 1;
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
  <?php
  if (isset($success) == 1) {
  ?>
    <div style="z-index: 9999; position:absolute;left:50%;">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> Your query has been submitted.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div>
    <!-- Modal -->

  <?php
  }
  ?>
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
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="suggestion_form">
        <h1 class="text-center p-3 text-white">Suggestion Box </h1>
        <label for="Subject" class="text-white">Subject</label>
        <input type="text" name="subject" id="subject" class="form-control">
        <br>
        <label for="suggestion">Comments</label>
        <textarea name="suggestion" id="suggestion" cols="120" rows="10" class="form-control"></textarea>
        <br><br>
        <input type="submit" value="Submit" name="suggestion" class="btn btn-success">
      </form>

    </div>
  </div>
  <?php include("../includes/scripts.php"); ?>
  <script src=" ./assets/js/classlink.js" async></script>
</body>

</html>