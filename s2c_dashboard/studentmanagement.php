<?php
include 'examples/student-backend/database.php';
// echo "1";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student List</title>
    <link rel="icon" href="./assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="./assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="./assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="./assets/css/argon.css?v=1.2.0" type="text/css">
    <link rel="stylesheet" href="examples/student-backend/student-style.css">
</head>

<body>

    <h1 style="text-align:center;">Students-List</h1>
     <!-- Sidenav -->
 <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="dashboard.html">
          <img src="./assets/img/logo.jpeg" class="navbar-brand-img" alt="...">
          <p class="text-dark">S2C</p>
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav"><strong>
              <li class="nav-item">
                <a class="nav-link active" href="dashboard.html">
                  <i class="ni ni-tv-2 text-primary text-red"></i>
                  <span class="nav-link-text"><strong>Dashboard</strong></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Calender.html">
                  <i class="ni ni-calendar-grid-58 text-red"></i>
                  <span class="nav-link-text"><strong>Calendar</strong></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="studentmanagement.php">

                  <i class="ni ni-single-02 text-red"></i>
                  <span class="nav-link-text"><strong>Student Managment</strong></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="feemanagement.html">
                  <i class="ni ni-credit-card text-red"></i>
                  <span class="nav-link-text"> <strong>Fee Managment</strong></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="studymaterial.html">
                  <i class="ni ni-single-copy-04 text-red"></i>
                  <span class="nav-link-text"> <strong>Study material/notes section</strong></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="assignment.html">
                  <i class="ni ni-collection text-red"></i>
                  <span class="nav-link-text"> <strong>Assignment section</strong></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="classlink.html">
                  <i class="ni ni-bell-55 text-red"></i>
                  <span class="nav-link-text"> <strong>class Link</strong></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.html">
                  <i class="ni ni-button-power text-red"></i>
                  <span class="nav-link-text"><strong>Logout</strong></span>
                </a>
              </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
    <div class="container">
        <p id="success"></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    
                    <div class="col-sm-6">
                        <h2>Students <b>List</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i
                                class="material-icons">&#xE147;</i> <span>Add New Student</span></a>
                        <a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i
                                class="material-icons">&#xE15C;</i> <span>Delete Student</span></a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
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
                        <th>CITY</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
				$result = mysqli_query($conn,"SELECT * FROM crud");
				$i=1;
				while($row = mysqli_fetch_array($result)) {
                    //echo 1;
				?>
                    <tr id="<?php //echo 1;  
                    echo $row["id"]; 1 ?>">
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
                            echo $row["name"];  ?>
                        </td>
                        <td>
                            <?php //echo 1;  
                            echo $row["email"];  ?>
                        </td>
                        <td>
                            <?php //echo 1;  
                            echo $row["phone"];  ?>
                        </td>
                        <td>
                            <?php //echo 1; 
                            echo $row["city"];  ?>
                        </td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                <i class="material-icons update" data-toggle="tooltip" data-id="<?php echo $row["id"];
                                    ?>"
                                    data-name="<?php echo $row["name"]; ?>"
                                    data-email="<?php echo $row["email"]; ?>"
                                    data-phone="<?php echo $row["phone"]; ?>"
                                    data-city="<?php echo $row["city"]; ?>" 
                                    title="Edit">&#xE254;
                                </i>
                            </a>
                            <a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>"
                                data-toggle="modal"><i class="material-icons" data-toggle="tooltip"
                                    title="Delete">&#xE872;</i></a>
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
    <!-- Add Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="user_form">
                    <div class="modal-header">
                        <h4 class="modal-title">Add User</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>NAME</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>EMAIL</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>PHONE</label>
                            <input type="phone" id="phone" name="phone" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>CITY</label>
                            <input type="city" id="city" name="city" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" value="1" name="type">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <button type="button" class="btn btn-success" id="btn-add">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="update_form">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit User</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="id_u" name="id" class="form-control" required>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" id="name_u" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" id="email_u" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>PHONE</label>
                            <input type="phone" id="phone_u" name="phone" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <input type="city" id="city_u" name="city" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" value="2" name="type">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <button type="button" class="btn btn-info" id="update">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Delete User</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="id_d" name="id" class="form-control">
                        <p>Are you sure you want to delete these Records?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <button type="button" class="btn btn-danger" id="delete">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="examples/student-backend/student-ajax.js"></script>
    
</body>
</html>
