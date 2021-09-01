<?php
include("includes/database.php");
$firstnameErr = $lastnameErr = $emailErr = $passwordErr = $phoneErr = $genderErr = $subjectErr = "";
function test_input($data)
{
  $data = trim($data);
  $data = strip_tags($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (($_SERVER['REQUEST_METHOD']) == "POST") {
  $stmt = $conn->prepare("INSERT INTO register(firstname,lastname,email,password,phone,gender,subject) VALUES(?,?,?,?,?,?,?)");
  if (empty($_POST['firstname'])) {
    $firstnameErr = "Name is Required";
  } else {
    $firstname = test_input($_POST['firstname']);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/", $firstname)) {
      $firstnameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST['lastname'])) {
    # code...
    $lastnameErr = "Lastname is Required";
  } else {
    $lastname = test_input($_POST['lastname']);
    if (!preg_match("/^[a-zA-Z-' ]*$/", $lastname)) {
      $lastnameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST['email'])) {
    $emailErr = "Email is Required";
  } else {
    $email = test_input($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  if (empty($_POST['password'])) {
    $passwordErr = "Password is Required";
  } else {
    $password = test_input($_POST['password']);
  }
  if (empty($_POST['phone'])) {
    $phoneErr = "Phone is required";
  } else {
    $phone = test_input($_POST['phone']);
  }

  empty($_POST['gender']) ? $genderErr = "Gender is required" : $gender = test_input($_POST['gender']);
  empty($_POST['subject']) ? $subjectErr = "Subject is required" :   $subject = test_input($_POST['subject']);



  $sql = "SELECT * FROM register WHERE email='{$email}' or phone='{$phone}'";
  $res = $conn->query($sql);
  if ($res->num_rows > 0) {
    $row = $res->fetch_assoc();
    if ($email == $row['email']) {
      echo "<script>window.alert('username already exists');</script>";
    } else if ($phone == $row['phone']) {
      echo "<script>window.alert('phone number already exists');</script>";
    }
  } else {
    // $query = "INSERT INTO register(firstname,lastname,email,password,phone,gender,subject) VALUES('{$firstname}','{$lastname}','{$email}','{$password}','{$phone}','{$gender}','{$subject}')";

    $stmt->bind_param("sssssss", $firstname, $lastname, $email, $password, $phone, $gender, $subject);
    $res = $stmt->execute();

    if (!$res) {
      die("Query not inserted");
    } else {
?>
      <div class="container mt-md-4 mt-2">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>You have been registered successfully!</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
<?php
      header("refresh:2;url=./login.php");
      $stmt->close();
      $conn->close();
    }
  }
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Registration Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      background: linear-gradient(45deg, #ce1e53, #8f00c7);
      min-height: 100vh;
    }

    body::-webkit-scrollbar {
      display: none;
    }

    .wrapper {
      max-width: 800px;
      margin: 80px auto;
      padding: 30px 45px;
      box-shadow: 5px 25px 35px #3535356b;
    }

    .wrapper label {
      display: block;
      padding-bottom: 0.2rem;
    }

    .wrapper .form .row {
      padding: 0.6rem 0;
    }

    .wrapper .form .row .form-control {
      box-shadow: none;
    }

    .wrapper .form .option {
      position: relative;
      padding-left: 20px;
      cursor: pointer;
    }

    .wrapper .form .option input {
      opacity: 0;
    }

    .wrapper .form .checkmark {
      position: absolute;
      top: 1px;
      left: 0;
      height: 20px;
      width: 20px;
      border: 1px solid #bbb;
      border-radius: 50%;
    }

    .wrapper .form .option input:checked~.checkmark:after {
      display: block;
    }

    .wrapper .form .option:hover .checkmark {
      background: #f3f3f3;
    }

    .wrapper .form .option .checkmark:after {
      content: "";
      width: 10px;
      height: 10px;
      display: block;
      background: linear-gradient(45deg, #ce1e53, #8f00c7);
      position: absolute;
      top: 50%;
      left: 50%;
      border-radius: 50%;
      transform: translate(-50%, -50%) scale(0);
      transition: 300ms ease-in-out 0s;
    }

    .wrapper .form .option input[type="radio"]:checked~.checkmark {
      background: #fff;
      transition: 300ms ease-in-out 0s;
    }

    .wrapper .form .option input[type="radio"]:checked~.checkmark:after {
      transform: translate(-50%, -50%) scale(1);
    }

    #sub {
      display: block;
      width: 100%;
      border: 1px solid #ddd;
      padding: 10px;
      border-radius: 5px;
      color: #333;
    }

    #sub:focus {
      outline: none;
    }

    @media (max-width: 768.5px) {
      .wrapper {
        margin: 30px;
      }

      .wrapper .form .row {
        padding: 0;
      }
    }

    @media (max-width: 400px) {
      .wrapper {
        padding: 25px;
        margin: 20px;
      }
    }
  </style>
</head>

<body class="snippet-body">
  <div class="wrapper rounded bg-white">
    <div class="h3">Registration Form</div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" name="f1">
      <div class="form">
        <div class="row">
          <div class="col-md-6 mt-md-0 mt-3">
            <label>First Name</label>
            <span class="text-danger text-small"><?php echo $firstnameErr; ?></span>
            <input type="text" class="form-control" name="firstname" id="firstname" value="<?php if (isset($_POST['firstname'])) echo $firstname; ?>" placeholder="John" required />
          </div>
          <div class="col-md-6 mt-md-0 mt-3">
            <label>Last Name</label>
            <span class="text-danger text-small"><?php echo $lastnameErr; ?></span>
            <input type="text" class="form-control" name="lastname" id="lastname" value="<?php if (isset($_POST['lastname'])) echo $lastname; ?>" placeholder="Doe" required />
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 mt-md-0 mt-3">
            <label>Email</label>
            <span class="text-danger text-small"><?php echo $emailErr; ?></span>
            <input type="email" class="form-control" name="email" id="email" value="<?php if (isset($_POST['email'])) echo $email; ?>" placeholder="eg. something@example.com " required />
          </div>
          <div class="col-md-4 mt-md-0 mt-3">
            <label>Password</label>
            <span class="text-danger text-small"><?php echo $passwordErr; ?></span>
            <input type="password" class="form-control" name="password" id="password" value="<?php if (isset($_POST['password'])) echo $password; ?>" required />
          </div>
          <div class="col-md-4 mt-md-0 mt-3">
            <label>Phone Number</label>
            <span class="text-danger text-small"><?php echo $phoneErr; ?></span>
            <input type="tel" class="form-control" name="phone" id="phone" value="<?php if (isset($_POST['phone'])) echo $phone; ?>" placeholder="format:123-1234-123" required />
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mt-md-0 mt-3">
            <label>Gender</label>
            <span class="text-danger text-small"><?php echo $genderErr; ?></span>
            <div class="d-flex align-items-center mt-2">
              <label class="option">
                <input type="radio" name="gender" <?php if (isset($gender) && $gender == "m") echo "checked"; ?> value="m" />Male
                <span class="checkmark"></span>
              </label>
              <label class="option ms-4">
                <input type="radio" name="gender" <?php if (isset($gender) && $gender == "f") echo "checked"; ?> value="f" />Female
                <span class="checkmark"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="my-md-2 my-3">
          <label>Subject</label>
          <span class="text-danger"><?php if (isset($_POST['subject'])) echo $subjectErr; ?></span>
          <select id="sub" name="subject" required>
            <option value="" selected>Choose Option</option>
            <option value="Pcm">Physics/chemistry/mathematics(12th)</option>
            <option value="SM">Science/Mathematics(10th)</option>
            <option value="Physics">Physics(12th)</option>
            <option value="Chemistry">Chemistry(12th)</option>
            <option value="Mathematics">Mathematics(12th)</option>
            <option value="Accounts">Accounts(12th)</option>
            <option value="Business studies">Business studies(12th)</option>
            <option value="Biology">Biology(12th)</option>
            <option value="Science">Science(10th)</option>
            <option value="Maths">Maths(10th)</option>
            <option value="Engineering Coaching">Engineering Coaching</option>
            <option value="NATA Coaching">NATA Coaching</option>
            <option value="Polytechnic Coaching">Polytechnic Coaching</option>
            <option value="JEE Mains/Advance">JEE Mains/Advance</option>
          </select>
        </div>
        <input class="btn btn-primary mt-3" name="submit" type="submit" value="Submit" />
        <a href="login.php" class="btn btn-danger text-decoration-none text-white mt-3">Back to login page</a>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>