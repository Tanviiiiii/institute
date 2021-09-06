<?php
include("../includes/session_check.php");
$page = "calender";

if (isset($_POST['submit'])) {
  $stmt = $conn->prepare("INSERT INTO timetable(class,subject,day,timings) VALUES(?,?,?,?)");
  $class = $_POST['class'];
  $subject = $_POST['subject'];
  $day = $_POST['day'];
  $timings = $_POST['timings'];

  $stmt->bind_param("ssss", $class, $subject, $day, $timings);
  $result = $stmt->execute();
  if (!$result) {
    die("Query faild" . mysqli_error($conn));
  } else {
?>
    <script>
      alert("query inserted");
    </script>
<?php
  }
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>S2C <?php echo $page; ?></title>
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
    <!-- <div class="header bg-primary">
      <div class="container">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">

              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="dashboard.html"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="dashboard.html">Dashboards</a></li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <?php include("../includes/dashboardHeader.php"); ?>
    <div class="container">
      <h1 class="text-center p-3">Time Table</h1>

      <form name="form4" id="form4" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form-control" style="height:calc(5.5em + 1.25rem + 5px)">
        <div class="row justify-content-center align-items-center">
          <div class="col">
            Class: <select name="class" id="class" class="form-select" required>
              <option value="" selected="selected">Select Class</option>
            </select>
          </div>
          <div class="col">
            Subject: <select name="subject" id="subject" class="form-select">
              <option value="" selected="selected">Select Subject</option>
            </select>
          </div>
          <div class="col">
            Day: <select name="day" id="day" class="form-select">
              <option value="" selected="selected">Select Day</option>
            </select>
          </div>
          <div class="col">
            <label for="timings">Timings</label>
            <input type="text" name="timings" id="timings" class="form-control" placeholder="8-10">
          </div>

          <div class="col">
            <input type="submit" value="Submit" name="submit" class="btn btn-primary">
          </div>
        </div>
      </form>
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
    <script src='lib/moment.min.js'></script>
    <script src="./assets/js/timetable.js"></script>
</body>

</html>