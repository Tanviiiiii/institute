<?php
include("../../../includes/session_check.php");
$page = "science";
$class = $_SESSION['class'];
$query = "SELECT * from studymaterial WHERE class = {$class} AND subject='science'";
$res = $conn->query($query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>S2C <?php echo $page; ?></title>
    <!-- Favicon -->
    <link rel="icon" href="../../assets/img/logo.jpeg" type="image/png" />
    <!-- Fonts -->
    <link rel="stylesheet" href="../../assets/vendor/nucleo/css/nucleo.css" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../assets/css/argon.css?v=1.2.0" type="text/css" />
</head>

<body>
    <?php include("../../components/dashboardSideNav.php"); ?>
    <!-- Main content -->
    <div class="main-content" id="panel" style="
        background-color: #0093e9;
        background-image: linear-gradient(160deg, #0093e9 0%, #80d0c7 100%);
        padding-left: 15%;
      ">
        <?php include("../../components/dashboardTopNav.php"); ?>
        <?php include("../../components/dashboardHeader.php"); ?>
        <div class="container">
            <h1 class="text-center p-3 text-dark">studymaterial Section</h1>
        </div>
        <div class="row">
            <?php while ($row = $res->fetch_assoc()) : ?>
                <div class="col">
                    <div class="card p-3" style="width: 15rem;">
                        <img src="./assets/img/file-earmark-arrow-down.svg" class="card-img-top" alt="file icon" width="50" height="50">
                        <div class="card-body">
                            <p class="card-text h4">Subject: <?php echo $row['subject']; ?></p>
                            <p class="card-text h4">Class: <?php echo $row['class']; ?></p>
                            <p class="card-text h4">Chapter: <?php echo $row['chapter']; ?></p>
                            <a href="../dashboard/<?php echo $row['concat']; ?>" class="link-danger mt-4 d-block text-center" style="font-size:14px;" download>Download</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>


</body>

</html>