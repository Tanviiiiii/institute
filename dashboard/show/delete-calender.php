<?php
$page = "delete";
include("../../includes/session_check.php");
$id = isset($_GET['id']) ? $_GET['id'] : "";
$query = "SELECT * FROM timetable WHERE id = $id";
$res = $conn->query($query);
$row = $res->fetch_assoc();

if (isset($_POST['submit'])) {
    $sql = "DELETE FROM timetable WHERE id = $id";

    if ($conn->query($sql) == TRUE) {
        echo "<script>alert('Record Deleted Successfully');</script>";
    } else {
        echo "failed to delete records";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page ?> Records </title>
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

            <label for="timings" class="form-label">Enter timings</label>
            <input type="text" name="timings" id="timings" value="<?php echo $row['timings']; ?>" class="form-control">
        </div>


        <input type="submit" value="DELETE" name="submit" class="btn btn-danger">
        <a href="show-calender.php" class="btn btn-dark">SHOW TABLE</a>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>