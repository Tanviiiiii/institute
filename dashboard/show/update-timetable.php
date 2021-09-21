<?php
$page = "update";
include("../../includes/session_check.php");
$id = isset($_GET['id']) ? $_GET['id'] : "";
$query = "SELECT * FROM timetable WHERE id = $id";
$res = $conn->query($query);
$row = $res->fetch_assoc();

if (isset($_POST['submit'])) {
    $id = isset($_GET['id']) ? $_GET['id'] : "";
    $class = $_POST['class'];
    $subject = $_POST['subject'];
    $day = $_POST['day'];
    $start_event = $_POST['start_event'];
    $end_event = $_POST['end_event'];

    $sql = "UPDATE timetable SET  class = '$class', subject = '$subject' , day = '$day', start_event = '$start_event', end_event = '$end_event' WHERE id = $id";
    $conn->query($sql) or die("Query failed");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page ?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <form method="POST">
        <div class="mb-3">
            <label for="class" class="form-label">Enter Class</label>
            <input type="text" name="class" id="class" value="<?php echo $row['class']; ?>" class="form-control">
        </div>
        <div class="mb-3">

            <label for="subject" class="form-label">Enter Subject</label>
            <input type="text" name="subject" id="subject" value="<?php echo $row['subject']; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label for="day" class="form-label">Enter day</label>
            <input type="text" name="day" id="day" value="<?php echo $row['day']; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label for="start_event">from Timings</label>
            <input type="text" name="start_event" id="start_event" class="form-control" value="<?php echo $row['start_event']; ?>">
            <label for="end_event">to Timings</label>
            <input type="text" name="end_event" id="end_event" class="form-control" value="<?php echo $row['end_event']; ?>">
        </div>


        <input type="submit" value="submit" name="submit" class="btn btn-success">
        <a href="show-timetable.php" class="btn btn-dark">SHOW TABLE</a>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>