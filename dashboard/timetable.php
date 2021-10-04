<?php
include("../includes/session_check.php");
include("../includes/check.php");
$page = "timetable";

if (isset($_POST['submit'])) {

  $stmt = $conn->prepare("INSERT INTO timetable(class,subject,day,start_event,end_event) VALUES(?,?,?,?,?)");
  $class = $_POST['class'];
  $subject = $_POST['subject'];
  $day = $_POST['day'];
  $start_event = $_POST['start_event'];
  $end_event = $_POST['end_event'];

  $stmt->bind_param("sssss", $class, $subject, $day,  $start_event, $end_event);
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

    <?php include("../includes/dashboardHeader.php"); ?>
    <div class="container position-relative" style="top: -36%;">
      <h1 class="text-center p-3 text-white">Time Table</h1>

      <form name="form4" id="form4" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form-control" style="height:100%;border:0;">
        <div class="row justify-content-center align-items-center">
          <div class="row">
            <div class="col-md-3">
              Class: <select name="class" id="class" class="form-select" required>
                <option value="" selected="selected">Select Class</option>
              </select>
            </div>
            <div class="col-md-3">
              Subject: <select name="subject" id="subject" class="form-select">
                <option value="" selected="selected">Select Subject</option>
              </select>
            </div>
            <div class="col-md-3">
              Day: <select name="day" id="day" class="form-select">
                <option value="" selected="selected">Select Day</option>
              </select>
            </div>
            <div class="col-md-3">
              <label for="start_event">from Timings</label>
              <input type="text" name="start_event" id="start_event" class="form-control" placeholder="8">
              <label for="end_event">to Timings</label>
              <input type="text" name="end_event" id="end_event" class="form-control" placeholder="10">
            </div>
            <div class="row mt-4 mt-0">
              <div class="col">
                <input type="submit" value="Submit" name="submit" class="btn btn-success">
                <!-- Button trigger modal -->
                <a href="show/show-timetable.php">Show Time Table</a>
              </div>
            </div>
          </div>

        </div>
      </form>
    </div>

    <!-- scripts includes -->
    <?php include("../includes/scripts.php"); ?>
    <script src="./assets/js/timetable.js"></script>
    <!-- <script src="./assets/js/update-timetable.js"></script> -->
</body>

</html>