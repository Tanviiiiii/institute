<!DOCTYPE html>
<html>

<head>
    <title>Gallery Upload page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
    <div class="navbar-container">
        <nav class="
          navbar navbar-expand-lg navbar-dark
          bg-dark
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
                        <ul class="navbar-nav  mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active text-center" aria-current="page" href="index.php">Home</a>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>
        </nav>
    </div>
    <br><br><br>
    <div class="container">
        <form action="gallery-upload.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>
        <br><br>
        <a href="dashboard/dashboard.php" class="btn btn-primary">Back to home</a>
        <a href="dashboard/show/show-gallery.php" class="btn btn-success">Show Gallery</a>
    </div>
</body>

</html>