<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Login Form</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <style>
        body {
            color: #000;
            overflow-x: hidden;
            height: 100%;
            background-image: linear-gradient(to right, #D500F9, #FFD54F);
            background-repeat: no-repeat
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
        }

        .card1 {
            width: 50%;
            padding: 40px 30px 10px 30px
        }

        .card2 {
            width: 50%;
            background-image: linear-gradient(to right, #FFD54F, #D500F9)
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
<form action="loginProcess.php" method="POST" name="form1">

    <body oncontextmenu='return false' class='snippet-body'>
        <div class="container px-4 py-5 mx-auto">
            <div class="card card0">
                <div class="d-flex flex-lg-row flex-column-reverse">
                    <div class="card card1">
                        <div class="row justify-content-center my-auto">
                            <div class="col-md-8 col-10 my-5">
                                <figure style="display: flex;justify-content: center;align-items:center;border-radius: 50%;"><img src="../assets/img/logo.jpeg" alt="logo" width="100" height="100" style="border-radius: 50%;"></figure>
                                <h3 class="mb-5 text-center heading">We are S2C</h3>
                                <h6 class="msg-info">Please login to your account</h6>
                                <div class="form-group"><label class="form-control-label text-muted">Username</label><input type="text" id="uname" name="uname" placeholder="Enter Username" required="required" class="form-control"></div>
                                <div class="form-group"><label class="form-control-label text-muted">Password</label><input type="password" id="psw" name="psw" placeholder="Enter Password" class="form-control" required></div>
                                <div class="row justify-content-center my-3 px-3">
                                    <input type="submit" class="btn-block btn-color text-decoration-none text-center text-white" name="submit" value="Login to s2c" />
                                </div>
                                <div class="row justify-content-center my-2"><a href="#"><small class="text-muted">Forgot Password?</small></a></div>
                            </div>
                        </div>
                        <div class="bottom text-center mb-5">
                            <p href="#" class="sm-text mx-auto mb-3">If you don't have an account?</p><a href="reg.html" class="btn btn-white ml-2">Create your Account</a>
                        </div>
                    </div>

                    <div class="card card2">
                        <div class="my-auto mx-md-5 px-md-5 right">
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
        <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
        <script type='text/javascript'></script>
    </body>
</form>

</html