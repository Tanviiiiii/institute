<?php
include("includes/database.php");
if (isset($_POST['submit'])) {
    $email = $conn->real_escape_string($_POST['email']);
    $query = "SELECT firstname,email FROM register WHERE email = '${$email}'";
    $result = $conn->query($query);
    $emailCount = $res->num_rows();

    if ($emailCount) {
        $userdata = $result->fetch_assoc();
        $user_name = $userdata['firstname'];
        $token = $userdata['token'];
        $subject = "Password recovery";

        $body = "Hi, $user_name Click here to reset your password http://localhost/reset_password.php?token=$token";
        $sender_email = "From: funnypicture23@gmail.com";
        if (mail($emai, $subject, $body, $sender_email)) {
            $_SESSION['msg'] = "Check your email to reset your password";
            header("location:login.php");
        } else {
            echo "email sending failed";
            exit();
        }
    } else {
        echo "No email found";
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

<body class="snippet-body">
    <div class="container rounded bg-white shadow p-5 mt-5">
        <div class="h3">Recover your password</div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" name="f1">
            <div class="form">


                <div class="row">
                    <div class="col-md-12 mt-md-0 mt-3">
                        <label>Email</label>

                        <input type="email" class="form-control" name="email" id="email" placeholder="eg. something@example.com " required />
                    </div>



                    <input class="btn btn-primary mt-3 w-25 rounded-pill" name="submit" type="submit" value="Send Mail" />
                    <span>Have an Account ? <a href="login.php" class="text-primary text-decoration-underline">Login</a> </span>

                </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>