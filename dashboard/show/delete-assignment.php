<?php
$page = "delete assignment";
include("../../includes/session_check.php");
$id = isset($_GET['id']) ? $_GET['id'] : "";
$query = "SELECT * FROM assignment WHERE id = $id";
$res = $conn->query($query);
$row = $res->fetch_assoc();

if (isset($_POST['submit'])) {
    $sql = "DELETE FROM assignment WHERE id = $id";

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

            <label for="chapter" class="form-label">Enter chapter</label>
            <input type="text" name="chapter" id="chapter" value="<?php echo $row['chapter']; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label for="concat" class="form-label">Enter concat</label>
            <input type="text" name="concat" id="concat" value="<?php echo $row['concat']; ?>" class="form-control">
        </div>


        <input type="submit" value="DELETE" name="submit" class="btn btn-danger">
        <a href="show-assignment.php" class="btn btn-dark">SHOW TABLE</a>
    </form>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</body>

</html>