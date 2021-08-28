<?php
include("../html/database.php");
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $gender = $_POST['radio'];
    $subject = $_POST['sub'];

    $query = "INSERT INTO `register`( `firstname`, `lastname`, `email`, `password`, `phone`, `gender`, `subject`) VALUES ('$firstname','$lastname','$email','$password','$phone','$gender','$subject')";

    // $result = mysqli_query($conn, $query) or die("Excution failed");

    if (mysqli_query($conn, $query)) {
        echo "<h1>Registration Successful</h1>";
    } else {
        echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
    }
}
