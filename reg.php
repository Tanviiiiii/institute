<?php
include("includes/database.php");


$firstnameErr = $lastnameErr = $emailErr = $passwordErr = $phoneErr = $genderErr = $subjectErr = $classErr = "";
function test_input($data)
{
  $data = trim($data);
  $data = strip_tags($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


if (($_SERVER['REQUEST_METHOD']) == "POST") {
  $stmt = $conn->prepare("INSERT INTO register(firstname,lastname,email,password,phone,gender,subject,class,token,status) VALUES(?,?,?,?,?,?,?,?,?,?)");
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
    $password = password_hash($password, PASSWORD_DEFAULT);
    $token = bin2hex(random_bytes(15));
    $status = 'inactive';
  }
  if (empty($_POST['phone'])) {
    $phoneErr = "Phone is required";
  } else {
    $phone = test_input($_POST['phone']);
  }

  empty($_POST['gender']) ? $genderErr = "Gender is required" : $gender = test_input($_POST['gender']);
  empty($_POST['subject']) ? $subjectErr = "Subject is required" :   $subject = implode(', ', $_POST['subject']);
  empty($_POST['class']) ? $classErr = "class is required" :   $class = test_input($_POST['class']);


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
    $stmt->bind_param("ssssssssss", $firstname, $lastname, $email, $password, $phone, $gender, $subject, $class, $token, $status);
    $res = $stmt->execute();

    if (!$res) {
      die("Query not inserted");
    } else {
?>
      <div class="container mt-md-4 mt-2">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>You have been registered successfully check your email for verification!</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>

<?php
      $subject = "Email Activation";
      $body = "Hi {$firstname} {$lastname} Click here to activate your account http://localhost/activate.php?token={$token}";
      $headers = "From: tanvisingla3781@gmail.com";
      if (mail($email, $subject, $body, $headers)) {
        $_SESSION['msg'] = "check mail to activate your account {$email}";
        header('location:login.php');
      } else {
        echo "Email send failed";
      }
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
  <link rel="icon" href="assets/img/brand/logo.ico" type="image/png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <?php include("reg_style.php"); ?>
</head>

<body class="snippet-body">

  <div class="wrapper rounded bg-white">
    <div class="h3" style="
    color: #1F1D36;
    font-size: calc(2.3rem + .6vw);
    font-weight: bold;
">Registration Form</div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" name="f1" id="f1">
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
        <div class="row">
          <div class="col-md-12">
            <div class="my-md-2 my-3">
              <label>Class</label>
              <span class="text-danger"><?php if (isset($_POST['class'])) echo $classErr; ?></span>
              <select id="class" name="class" class="form-select" required>
                <option value="" selected>Choose Option</option>
                <option value="None">None</option>
                <option value="12">12<sup>th</sup></option>
                <option value="11">11<sup>th</sup></option>
                <option value="10">10<sup>th</sup></option>
                <option value="9">9<sup>th</sup></option>
                <option value="8">8<sup>th</sup></option>
                <option value="7">7<sup>th</sup></option>
                <option value="6">6<sup>th</sup></option>
                <option value="5">5<sup>th</sup></option>
                <option value="4">4<sup>th</sup></option>
                <option value="3">3<sup>rd</sup></option>
                <option value="2">2<sup>nd</sup></option>
                <option value="1">1<sup>st</sup></option>
              </select>
            </div>
          </div>
        </div>
        <div class="my-md-2 my-3">
          <label>Subject</label>
          <span class="text-danger"><?php if (isset($_POST['subject'])) echo $subjectErr; ?></span>
          <select id="sub" name="subject[]" class="form-select" multiple required>
            <option value="" selected disabled>Choose Option</option>
            <option value="Physics">Physics</option>
            <option value="Chemistry">Chemistry</option>
            <option value="Mathematics">Mathematics</option>
            <option value="Accounts">Accounts</option>
            <option value="Business studies">Business studies</option>
            <option value="Biology">Biology</option>
            <option value="Science">Science</option>
            <option value="Maths">Maths</option>
            <option value="Economics">Economics</option>
            <option value="Engineering Coaching">Engineering Coaching</option>
            <option value="NATA Coaching">NATA Coaching</option>
            <option value="Polytechnic Coaching">Polytechnic Coaching</option>
            <option value="JEE Mains/Advance">JEE Mains/Advance</option>
          </select>
        </div>
        <input class="btn mt-3" name="submit" type="submit" value="Create an account" style="background:#1F1D36;color:white;" />
        <p class="mt-3">
          Already have an account ?<a href="login.php" class=" mt-3" style="color:#864879;"> Login</a>
        </p>

      </div>
    </form>


  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>