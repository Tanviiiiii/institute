<?php
include("../includes/session_check.php");

if (isset($_POST['subject']) == "PHYSICS") {
    $target_dir = "assets/uploads/student/physics";
} else if (isset($_POST['subject']) == "CHEMISTRY") {
    $target_dir = "assets/uploads/student/chemistry";
} else if (isset($_POST['subject']) == "BIOLOGY") {
    $target_dir = "assets/uploads/student/biology";
} else if (isset($_POST['subject']) == "MATHEMATICS") {
    $target_dir = "assets/uploads/student/mathematics";
} else if (isset($_POST['subject']) == "ACCOUTNS") {
    $target_dir = "assets/uploads/student/accounts";
} else if (isset($_POST['subject']) == "BUISNESS") {
    $target_dir = "assets/uploads/student/buisness";
} else if (isset($_POST['subject']) == "ECONOMICS") {
    $target_dir = "assets/uploads/student/economics";
} else if (isset($_POST['subject']) == "ENGLISH") {
    $target_dir = "assets/uploads/student/english";
} else if (isset($_POST['subject']) == "SCIENCE") {
    $target_dir = "assets/uploads/student/science";
} else {
    $target_dir = "assets/uploads/student/";
}
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if (isset($_POST['submit'])) {
    $stmt = $conn->prepare("INSERT INTO studyMaterial(class,subject,chapter,concat) VALUES(?,?,?,?)");


    $class = $_POST['class'];
    $subject = $_POST['subject'];
    $chapter = $_POST['chapter'];
    $concat = $target_file;
    $uploadOk = 1;
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
        <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                <use xlink:href="#exclamation-triangle-fill" />
            </svg>
            <div>
                <?php echo "File is not an image."; ?>
            </div>
        </div>
    </body>

    </html>

<?php
    $uploadOk = 0;
}
if (file_exists($target_file)) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
        <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                <use xlink:href="#exclamation-triangle-fill" />
            </svg>
            <div>
                <?php echo "Sorry, file already exists."; ?>
            </div>
        </div>
    </body>

    </html>

<?php
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
        <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                <use xlink:href="#exclamation-triangle-fill" />
            </svg>
            <div>
                <?php echo "Sorry, your file is too large."; ?>
            </div>
        </div>
    </body>

    </html>
<?php
    $uploadOk = 0;
}

// Allow certain file formats
if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "docx" && $imageFileType != "pdf" && $imageFileType != "doc"
) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
        <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                <use xlink:href="#exclamation-triangle-fill" />
            </svg>
            <div>
                <?php echo "Sorry, only JPG, JPEG, PNG ,PDF,DOCX,DOC files are allowed."; ?>
            </div>
        </div>
    </body>

    </html>
<?php
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
        <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                <use xlink:href="#exclamation-triangle-fill" />
            </svg>
            <div>
                <?php echo "Sorry, your file was not uploaded."; ?>
            </div>
        </div>
    </body>

    </html>
    <?php
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    ?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        </head>

        <body>
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                    <use xlink:href="#check-circle-fill" />
                </svg>
                <div>
                    <?php echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded."; ?>
                </div>
            </div>
        </body>

        </html>
    <?php
    } else {
    ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        </head>

        <body>
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <div>
                    <?php echo "Sorry, there was an error uploading your file."; ?>
                </div>
            </div>
        </body>

        </html>

<?php
    }
}
$stmt->bind_param("ssss", $class, $subject, $chapter, $concat);
$result = $stmt->execute();
if ($result) {
    echo "<script>alert('succesfully inserted record');</script>";
    header("refresh:2;url= studymaterial.php");
    $stmt->close();
    $conn->close();
} else {
    die("Cannot insert record" . mysqli_error($conn));
}

// Check if file already exists
