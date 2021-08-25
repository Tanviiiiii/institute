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

    $query = "INSERT INTO register(firstname,lastname,email,password,phone,gender,subject) VALUES('{$firstname}','${lastname}','{$email}','{$password}','{$phone}','{$gender}','{$subject}')";
    $res = mysqli_query($conn, $query);

    if (!$res) {
        die("Query not inserted");
    } else {
        echo "<h1>Registration Successful</h1>";
    }
}
