<?php
session_start();
include("includes/database.php");
if (!isset($_SESSION['loggedin'])) {
    if (isset($_POST['submit'])) {
        $email =  $conn->real_escape_string($_POST['email']);
        $password =  $conn->real_escape_string($_POST['psw']);
        $query = "SELECT * FROM register WHERE email='{$email}' and status='active'";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
        if ($result->num_rows == 1) {
            if (password_verify($password, $row['password'])) {
                $username = $row['firstname'];
                $_SESSION['username'] = $username;
                $_SESSION['loggedin'] = true;

                if ($username == "admin") {
                    header("location: dashboard/dashboard.php");
                } else if ($username != "admin") {
                    $_SESSION['class'] = $row['class'];
                    $class = $_SESSION['class'];
                    header("location: student-dashboard/dashboard.php?username={$_SESSION['username']}&class={$class}");
                }
            }
        } else {
?>
            <div class="container mt-md-4 mt-2">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>No Username Found!</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
<?php
        }
    }
} else {
    header("refresh=2;url=dashboard/dashboard.php");
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Login Form</title>
    <link rel="icon" href="assets/img/brand/logo.ico" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
        }

        body {
            color: #000;
            overflow-x: hidden;
            margin: 0;
            padding: 0;
            /* background-image: linear-gradient(to right, #D500F9, #FFD54F); */
            background-repeat: no-repeat
        }

        @media (max-width: 575px) {
            body {
                overflow-y: scroll;
            }
        }

        .ul-list {
            font-family: 'Lato', sans-serif;
            font-weight: 400;
            margin-top: 36px;
        }

        .ul-list li {
            margin-top: 10px;
        }

        .hd {
            font-family: 'Montserrat', sans-serif;

        }

        input,
        textarea {
            background-color: #F3E5F5;
            border-radius: 50px !important;
            padding: 6px 10px 6px 10px !important;
            width: 100%;
            box-sizing: border-box;
            border: none !important;
            border: 2px solid #F3E5F5 !important;
            font-size: 16px !important;
            color: #000 !important;
            font-weight: 400
        }

        input:focus,
        textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 2px solid #0093E9 !important;
            outline-width: 0;
            font-weight: 400
        }

        button:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            outline-width: 0
        }

        .card {
            border-radius: 5px;
            border: none;
            height: 100%;
            justify-content: center;

        }

        .card1 {
            width: 50%;
            padding: 40px 30px 10px 30px
        }

        .card2 {
            width: 50%;
            background-color: #0093E9;
            background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);

            height: 800px;
        }

        #logo {
            width: 70px;
            height: 60px
        }

        .heading {
            margin-bottom: 60px !important
        }

        ::placeholder {
            color: #000 !important;
            opacity: 1
        }

        :-ms-input-placeholder {
            color: #000 !important
        }

        ::-ms-input-placeholder {
            color: #000 !important
        }

        .form-control-label {
            font-size: 12px;
            margin-left: 15px
        }

        .msg-info {
            padding-left: 15px;
            margin-bottom: 30px
        }

        .btn-color {
            border-radius: 50px;
            color: #fff;
            background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
            padding: 15px;
            cursor: pointer;
            border: none !important;
            margin-top: 40px;
            transition: 1s ease;
        }

        .btn-color:hover {
            color: #fff;
            background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
        }

        .btn-white {
            border-radius: 50px;
            color: #0093E9;
            background-color: #fff;
            padding: 8px 40px;
            cursor: pointer;
            border: 2px solid #0093E9 !important
        }

        .btn-white:hover {
            color: #fff;
            background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
        }

        a {
            color: #000
        }

        a:hover {
            color: #000
        }

        .bottom {
            width: 100%;
            margin-top: 50px !important
        }

        .sm-text {
            font-size: 15px
        }

        @media screen and (max-width: 992px) {
            .card1 {
                width: 100%;
                padding: 10px;
                order: 2;
            }

            .card2 {
                width: 100%;
                order: 1;
            }

            .right {
                margin-top: 100px !important;
                margin-bottom: 100px !important
            }
        }

        @media screen and (max-width: 768px) {
            .container {
                padding: 10px !important
            }

            .card2 {
                padding: 10px
            }

            .right {
                margin-top: 50px !important;
                margin-bottom: 50px !important
            }
        }
    </style>
</head>


<body class='snippet-body'>

    <div class="container d-flex justify-content-center align-items-center px-5 py-4 mx-auto">
        <div class="card card0">
            <div class="d-flex flex-lg-row flex-column-reverse" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                <div class="card card1">
                    <div class="row justify-content-center my-auto">
                        <div class="col-md-8 col-10 my-5">
                            <figure style="display: flex;justify-content: center;align-items:center;border-radius: 50%;"><img src="./assets/img/logo.jpeg" alt="logo" width="100" height="100" style="border-radius: 50%;"></figure>
                            <h3 class="mb-5 text-center heading">We are S2C</h3>
                            <h6 class="msg-info">Please login to your account</h6>
                            <div class="bg-danger text-white">
                                <p>
                                    <?php
                                    // if (isset($_SESSION['msg'])) {
                                    //     echo $_SESSION['msg'];
                                    // } else {
                                    //     echo $_SESSION['msg'] = 'you are logged out. login again';
                                    // }
                                    ?>
                                </p>
                            </div>
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="form1">
                                <div class="form-group"><label class="form-control-label text-muted" for="email">Email</label><input type="text" id="email" name="email" placeholder="Enter Email" required="required" class="form-control"></div>
                                <div class="form-group"><label class="form-control-label text-muted">Password</label><input type="password" id="psw" name="psw" placeholder="Enter Password" class="form-control" required></div>
                                <div class="row justify-content-center my-3 px-3">
                                    <input type="submit" class="btn-block btn-color text-decoration-none text-center text-white" name="submit" value="Login" />
                                </div>
                                <div class="row d-flex justify-content-center my-2"><a href="recover_email.php" class="text-center"><small class="text-muted">Forgot Password?</small></a>
                                </div>
                        </div>
                    </div>
                    <div class=" text-center">
                        <p href="#" class="sm-text mx-auto mb-3">If you don't have an account?</p><a href="reg.php" class="btn btn-white ml-2">Create your Account</a>
                    </div>
                </div>
                </form>
                <div class="card card2">
                    <div class="my-auto mx-md-5  right">
                        <h1 class="text-white hd">We are more than just a Institute....</h1>
                        <medium class="text-black">
                            <ul class="text-white font-normal ul-list text-justify"><strong> At Sumit Sharma Classes,<br>
                                    <li>We provide best educational service with personal attention and bringing out the best from a child.
                                    <li>We always look forward to make education more interesting and developing the facts finding quality in students rather than being a rattan parrot.
                                    <li>We provide best educational service with very small batches and with individuals attention.
                                    <li>We have well qualified and experienced teachers.
                                    <li>Regular test are being conducted and regular feedback via msgs call and parent meetings is being provided to parents.
                                    <li>We always try to be more innovative in our way to make study more interesting and easy for children.
                                    <li>We also provide some recordings and animated content of our lectures on you-tube for future reference and revision help.
                        </medium></strong></ul>
                    </div>

                </div>

            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html