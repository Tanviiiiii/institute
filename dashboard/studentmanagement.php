<?php
include("../includes/session_check.php");
include("../includes/check.php");
$pageName = "studentmanagment";

// $res = $conn->query("SELECT * FROM register");


$limit = 10;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $limit;
$res = $conn->query("SELECT * FROM register ORDER BY id ASC LIMIT {$offset},{$limit}");

$result1 = $conn->query("SELECT count(id) AS id FROM register");
$studentCount = $result1->fetch_assoc();
$total = $studentCount['id'];
$totalPages = ceil($total / $limit);

$previous = $page - 1;
$next = $page + 1;




?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>S2C <?php echo $pageName; ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="icon" href="assets/img/brand/logo.ico" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="./assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="./assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Argon CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/js/student-backend/student-style.css">
    <link rel="stylesheet" href="./assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>

    <!--<h1 style="text-align:center;" class="display-4">Students-List</h1>-->
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

        <div class="container">
            <table class="table text-white table-inverse table-responsive bg-dark">
                <thead class="thead-inverse">
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th>Subject</th>
                        <th>Class</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $res->fetch_assoc()) : ?>
                        <?php if ($row['firstname'] == "admin") continue; ?>
                        <tr>
                            <td scope="row"><?php echo $row['id']; ?></td>
                            <td><?php echo $row['firstname'] ?>&nbsp;<?php echo $row['lastname']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['subject']; ?></td>
                            <td><?php echo $row['class']; ?></td>
                            <td>
                                <button type="button" onclick="deleteUser(<?php echo $row['id']; ?>);" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <?php if ($page > 1) : ?>
                        <li class="page-item"><a class="page-link" href="studentmanagement.php?page=<?php echo $previous; ?>">&lt;</a></li>
                    <?php endif; ?>
                    <?php
                    $i = 1;
                    while ($i <= $totalPages) : ?>
                        <li class="page-item <?php $i == $page ? 'active' : '' ?> ">
                            <a class="page-link" href="studentmanagement.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                        </li>
                    <?php
                        $i++;
                    endwhile;
                    ?>
                    <?php
                    if ($totalPages > $page) : ?>
                        <li class="page-item"><a class="page-link" href="studentmanagement.php?page=<?php echo $next; ?>">&gt;</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
        <script src="./assets/js/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- Core -->
        <!-- <script src="assets/vendor/jquery/dist/jquery.min.js"></script> -->
        <script src="assets/vendor/js-cookie/js.cookie.js"></script>
        <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
        <!-- Optional JS -->

        <!-- Argon JS -->
        <script src="assets/js/argon.js?v=1.2.0"></script>
        <script>
            function deleteUser(userId) {
                $.ajax({
                    url: "./assets/js/student-backend/save.php",
                    type: "POST",
                    data: {
                        userId: userId
                    },
                    success: function(data) {
                        console.log(data);
                        window.location.reload();
                    },
                });
            }
        </script>
</body>

</html>