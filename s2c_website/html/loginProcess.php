<?php
include("../html/database.php");

if (isset($_POST['submit'])) {
    $username = $_POST['uname'];
    $password = $_POST['psw'];
    $query = "SELECT firstname,password FROM register WHERE firstname='{$username}' AND password='{$password}'";

    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        echo "User logged in ";
        header("location: ../../s2c_dashboard/dashboard.html");
    } else {
        echo "No username found with this ";
    }
}
