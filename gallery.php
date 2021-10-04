<!DOCTYPE html>
<html>

<head>
    <title>Gallery Upload page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
    <br><br>
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