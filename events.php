<?php

include("includes/database.php");
$query = "SELECT path FROM events_img";

$res = $conn->query($query);

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Home Page</title>
    <meta name="description" content="" />
    <link rel="shortcut icon" href="assets/img/brand/logo.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/index.css">
</head>

<body id="top">
    <!--[if lt IE 7]>
      <p class="browsehappy">
        You are using an <strong>outdated</strong> browser. Please
        <a href="#">upgrade your browser</a> to improve your experience.
      </p>
    <![endif]-->
    <div class="navbar-container">
        <nav class="
          navbar navbar-expand-lg navbar-light
          bg-white
          custom-shadow
          fixed-top
        ">
            <div class="container">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <a class="navbar-brand text-custom fw-bold text-center" href="index.php">
                            S2C</a>
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active text-center" aria-current="page" href="index.php" style="font-size:24px;">GO Back to Home</a>
                            </li>

                        </ul>


                    </div>
                </div>
            </div>
        </nav>
    </div>
    <br><br><br>
    <h1 class="display-2 text-center fw-bold">Photos</h1>
    <br><br>
    <div class="container">
        <div class="row">
            <?php while ($row = $res->fetch_assoc()) : ?>
                <div class="col">
                    <div class="card  border-0 shadow" style="width: 15rem;">


                        <img src="<?php echo $row['path']; ?>" alt="image" class="img-fluid">

                    </div>
                </div>
            <?php endwhile; ?>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>