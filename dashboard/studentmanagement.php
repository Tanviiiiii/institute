<?php
include("../includes/session_check.php");
include("../includes/check.php");
$page = "studentmanagment";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>S2C <?php echo $page; ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="icon" href="assets/img/brand/logo.ico" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="./assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="./assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Argon CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/js/student-backend/student-style.css">
    <link rel="stylesheet" href="./assets/css/argon.css?v=1.2.0" type="text/css">


    <style>
        * {
            /* border: 1px solid red; */
            box-sizing: border-box;
        }

        body {
            font-size: 16px;
        }

        @media (min-width: 992px) {
            .container {
                width: 970px;
            }
        }
    </style>
</head>

<body>

    <!--<h1 style="text-align:center;" class="display-4">Students-List</h1>-->
    <!-- Sidenav -->
    <?php include("../includes/dashboardNavbar.php"); ?>
    <!-- Main content -->
    <div class="main-content" id="panel" style="background-color: #0093E9;
background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);padding-left:15%;
">
        <!-- Topnav -->
        <?php include("../includes/dashboardTopNav.php"); ?>
        <!-- Header -->
        <?php include("../includes/dashboardHeader.php"); ?>
        <div class="container">
            <p id="success"></p>
            <div class="table-wrapper table-responsive mw-100">
                <div class="table-title">
                    <div class="row">

                        <div class="col-sm-6">
                            <h2 class="text-white">Students <b>List</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <!-- <a href="#addEmployeeModal" class="btn btn-success" data-bs-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a> -->
                            <a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="selectAll">
                                    <label for="selectAll"></label>
                                </span>
                            </th>
                            <th>SL NO</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>PHONE</th>
                            <th>CLASS</th>
                            <TH>SUBJECT</TH>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $result = $conn->query("SELECT id,firstname,email,phone,class,subject FROM register");
                        $i = 1;
                        while ($row = $result->fetch_array()) {
                            //echo 1;

                        ?>
                            <tr id="<?php //echo 1;
                                    if ($row['firstname'] == "admin") {
                                        continue;
                                    }
                                    echo $row["id"];
                                    ?>">
                                <td>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" class="user_checkbox" data-user-id="<?php echo $row["id"]; ?>">
                                        <label for="checkbox2"></label>
                                    </span>
                                </td>
                                <td>
                                    <?php //echo 1;
                                    echo $i; ?>
                                </td>
                                <td>
                                    <?php //echo 1;
                                    echo $row["firstname"]; ?>
                                </td>
                                <td>
                                    <?php //echo 1;
                                    echo $row["email"]; ?>
                                </td>
                                <td>
                                    <?php //echo 1;
                                    echo $row["phone"]; ?>
                                </td>
                                <td>
                                    <?php //echo 1;
                                    echo $row["class"]; ?>
                                </td>
                                <td>
                                    <?php //echo 1;
                                    echo $row["subject"]; ?>
                                </td>
                                <td>

                                    <a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-bs-toggle="modal">
                                        <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                                    </a>
                                </td>
                            </tr>
                        <?php
                            // echo 1;
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Delete Modal HTML -->
        <div id="deleteEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h4 class="modal-title">Delete User</h4>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="id_d" name="id" class="form-control">
                            <p>Are you sure you want to delete these Records?</p>
                            <p class="text-warning"><small>This action cannot be undone.</small></p>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
                            <button type="button" class="btn btn-danger" id="delete">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="./assets/js/jquery-3.6.0.min.js" async></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="./assets/js/student-backend/student-ajax.js"></script>
        <!-- Core -->
        <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/js-cookie/js.cookie.js"></script>
        <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
        <!-- Optional JS -->
        <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
        <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
        <!-- Argon JS -->
        <script src="assets/js/argon.js?v=1.2.0"></script>
</body>

</html>