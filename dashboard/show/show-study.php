<?php
include("../../includes/session_check.php");
$page = "show study";

$query = "SELECT * FROM studymaterial";
$res = $conn->query($query);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>S2C <?php echo $page; ?></title>
    <!-- Favicon -->
    <link rel="icon" href="../assets/img/brand/logo.ico" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
    <style>
        th,
        td {
            width: 100%;
        }
    </style>
</head>

<body>
    <!-- Sidenav -->

    <!-- Main content -->
    <div class="main-content" id="panel" style="background-color: #0093E9;
background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
">
        <!-- Topnav -->

        <?php include("../../includes/dashboardHeader.php"); ?>
        <div class="container position-relative" style="top: -36%;">
            <h1 class="text-center p-3 text-white">Show Study Material</h1>

        </div>
        <div class="container">
            <table class="table table-hover table-inverse table-responsive w-75 mx-auto  bg-dark text-white">
                <thead class="thead-inverse">
                    <tr>
                        <!-- <th>Id</th> -->
                        <th>Class</th>
                        <th>Subject</th>
                        <th>Chapter</th>
                        <th>Concat</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $res->fetch_assoc()) : ?>
                        <tr>
                            <td><?php echo $row['class']; ?></td>
                            <td><?php echo $row['subject']; ?></td>
                            <td><?php echo $row['chapter']; ?></td>
                            <td>
                                <a href="  ../<?php echo $row['concat']; ?>">FILE</a>

                            </td>
                            <td>
                                <a href="update-study.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a>
                            </td>
                            <td>
                                <a href="delete-study.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <a href="../dashboard.php">GO TO HOME</a>
        </div>

    </div>
    <!-- scripts includes -->
    <?php include("../../includes/scripts.php"); ?>

    <!-- <script src="./assets/js/update-timetable.js"></script> -->
</body>

</html>