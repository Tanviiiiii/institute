<?php
include("../includes/database.php");

if (isset($_POST['submit'])) {
    $username = $_POST['uname'];
    $password = $_POST['psw'];
    $query = "SELECT firstname,password FROM register WHERE firstname='{$username}' AND password='{$password}'";

    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        echo "User logged in ";
        header("location:..\s2c_dashboard\dashboard.html");
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
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>

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
            overflow: hidden;
            margin: 0;
            padding: 0;
            background-image: linear-gradient(to right, #D500F9, #FFD54F);
            background-repeat: no-repeat
        }

        @media (max-width: 575px) {
            body {
                overflow-y: scroll;
            }
        }

        input,
        textarea {
            background-color: #F3E5F5;
            border-radius: 50px !important;
            padding: 12px 15px 12px 15px !important;
            width: 100%;
            box-sizing: border-box;
            border: none !important;
            border: 1px solid #F3E5F5 !important;
            font-size: 16px !important;
            color: #000 !important;
            font-weight: 400
        }

        input:focus,
        textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #D500F9 !important;
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
            background-image: linear-gradient(to right, #FFD54F, #D500F9);
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
            background-image: linear-gradient(to right, #FFD54F, #D500F9);
            padding: 15px;
            cursor: pointer;
            border: none !important;
            margin-top: 40px;
            transition: .3s ease;
        }

        .btn-color:hover {
            color: #fff;
            background-image: linear-gradient(to right, #D500F9, #FFD54F)
        }

        .btn-white {
            border-radius: 50px;
            color: #D500F9;
            background-color: #fff;
            padding: 8px 40px;
            cursor: pointer;
            border: 2px solid #D500F9 !important
        }

        .btn-white:hover {
            color: #fff;
            background-image: linear-gradient(to right, #FFD54F, #D500F9)
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
                padding: 40px 30px 10px 30px
            }

            .card2 {
                width: 100%
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
                padding: 50px
            }

            .right {
                margin-top: 50px !important;
                margin-bottom: 50px !important
            }
        }
    </style>
</head>


<body class='snippet-body'>

    <div class="container d-flex justify-content-center align-items-center px-5 py-4 mx-auto h-100">
        <div class="card card0">
            <div class="d-flex flex-lg-row flex-column-reverse">
                <div class="card card1">
                    <div class="row justify-content-center my-auto">
                        <div class="col-md-8 col-10 my-5">
                            <figure style="display: flex;justify-content: center;align-items:center;border-radius: 50%;"><img src="./assets/img/logo.jpeg" alt="logo" width="100" height="100" style="border-radius: 50%;"></figure>
                            <h3 class="mb-5 text-center heading">We are S2C</h3>
                            <h6 class="msg-info">Please login to your account</h6>
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="form1">
                                <div class="form-group"><label class="form-control-label text-muted">Username</label><input type="text" id="uname" name="uname" placeholder="Enter Username" required="required" class="form-control"></div>
                                <div class="form-group"><label class="form-control-label text-muted">Password</label><input type="password" id="psw" name="psw" placeholder="Enter Password" class="form-control" required></div>
                                <div class="row justify-content-center my-3 px-3">
                                    <input type="submit" class="btn-block btn-color text-decoration-none text-center text-white" name="submit" value="Login to s2c" />
                                </div>
                                <div class="row d-flex justify-content-center my-2"><a href="#" class="text-center"><small class="text-muted">Forgot Password?</small></a>
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
                        <h3 class="text-white">We are more than just a Institute....</h3>
                        <medium class="text-black">
                            <ul><strong> At Sumit Sharma Classes,<br>
                                    <li>We provide best educational service with personal attention and bringing out the best from a child.
                                    <li>We always look forward to make education more interesting and developing the facts finding quality in students rather than being a rattan parrot.
                                    <li>We provide best educational service with very small batches and with individuals attention.
                                    <li>We have well qualified and experienced teachers.
                                    <li>Regular test are being conducted and regular feedback via msgs call and parent meetings is being provided to parents.
                                    <li>We always try to be more innovative in our way to make study more interesting and easy for children.
                                    <li>we also provide some recordings and animated content of our lectures on you-tube for future reference and revision help.
                        </medium></strong></ul>
                    </div>

                </div>

            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html