<?php
session_start();
ob_start();
include("includes/database.php");
if (isset($_POST['submit'])) {
    // echo "<script>alert(1)</script>";
    if (isset($_GET['token'])) {
        $token = $_GET['token'];
        // echo "<script>alert(1)</script>";
        // echo $token;
        $new_password = $_POST['password'];
        $confirm_password = $_POST['confirmPassword'];

        $new_pass = password_hash($new_password, PASSWORD_DEFAULT);
        $cpass = password_hash($confirm_password, PASSWORD_DEFAULT);


        if ($new_password == $confirm_password) {
            $updateQuery = "UPDATE register SET password = '{$new_pass}' WHERE token = '{$token}'";
            $res = $conn->query($updateQuery);
            if ($res) {
                $_SESSION['passMsg'] = "Your password has been updated";
                // echo "<script>alert('update');</script>";
                header("refresh=2;url=login.php");
            } else {
                $_SESSION['passMsg'] = "your password is not updated";
                header("location:reset_password.php");
            }
        } else {
            $_SESSION['passMsg'] = "your password does not match";
        }
    } else {
        echo "no token found";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Registration Form</title>
    <link rel="icon" href="assets/img/brand/logo.ico" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1 class="h1 text-center">Reset Password</h1>
        <p class=" text-danger p-2">
            <?php
            if (isset($_SESSION['passMsg']))
                echo $_SESSION['passMsg'];
            else
                echo $_SESSION['passMsg'] = "";
            ?>
        </p>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" required>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>